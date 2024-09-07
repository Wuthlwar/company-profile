@extends('admins.app')
@section('content')
<style>
      .highcharts-figure,
        .highcharts-data-table table {
            min-width: 310px;
            max-width: 800px;
            margin: 1em auto;
            background-color: white; /* Set background color to white */
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
            background-color: white; /* Set background color to white */
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

        #chart-legend {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
        }
        .legend-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
            position: relative;
        }
        .legend-color {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }


</style>

@if ((Auth()->user()->role=='1' || Auth()->user()->role=='3' )|| (Auth()->user()->role=='2' && Auth()->user()->department=='HR'))

<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Dashboard</h4>
            </div>
        </div>
    </div>

    <div class="col-lg-4" style="border: 1px solid #000;border-radius:20px;padding:20px;">
        <div id="container-cate" style="width: 100%; height: 400px;"></div>
        @php
                $categories = App\Models\JobCategory::select('category_name', DB::raw('count(*) as count'))
                                    ->groupBy('category_name')
                                    ->get();

        $totalCount = $categories->sum('count');

        $chartData = $categories->map(function($category) {
            return [
                'name' => $category->category_name,
                'y' => $category->count,
                'color' => '#' . substr(md5(rand()), 0, 6)
            ];
        });
        @endphp
    </div>

    <div class="col-lg-4" style="border: 1px solid #000;border-radius:20px;padding:20px;">
        <div id="container" style="height: 400px;"></div>
        <div id="chart-legend"></div>
    </div>

    <div class="col-lg-4" style="border: 1px solid #000;border-radius:20px;padding:20px;">
        <div id="container-apply" style="width: 100%; height: 400px; background-color: white;"></div>
        @php
            $applyCounts = App\Models\JobApplicationForm::select('jobvacant_id', DB::raw('count(*) as total'))
            ->groupBy('jobvacant_id')
            ->get();

        $chartDataapply = $applyCounts->map(function($applyCount) {
            $vacancy = App\Models\JobVacants::find($applyCount->jobvacant_id);
            return [
                'name' => $vacancy ? $vacancy->vacant_name : 'Unknown',
                'y' => $applyCount->total,
                'color' => '#' . substr(md5(rand()), 0, 6)
            ];
        });

    $totalCount = $applyCounts->sum('total');
        @endphp
    </div>

    <div class="col-lg-12" style="border: 1px solid #000;border-radius:20px;padding:20px;">
        <form method="GET" action="{{ route('admins.home') }}">
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" value="{{ request('start_date', today()->toDateString()) }}">

            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" value="{{ request('end_date', today()->toDateString()) }}">

            <button type="submit">Filter</button>
        </form>

        <div id="container-apply-branches" style="width: 100%; height: 400px; background-color: white;"></div>
        @php

            $startDate = request()->input('start_date', '1960-01-01');
            $endDate = request()->input('end_date', '2050-01-01');

            $startDate = !empty($startDate) ? Carbon\Carbon::createFromFormat('Y-m-d', $startDate)->startOfDay() : Carbon\Carbon::create()->startOfDay();
            $endDate = !empty($endDate) ? Carbon\Carbon::createFromFormat('Y-m-d', $endDate)->endOfDay() : Carbon\Carbon::create()->endOfDay();

            $branchIds = App\Models\VacantBranchUser::distinct()->pluck('branch_id');
            $getbranches = App\Models\Branch::whereIn('id', $branchIds)->distinct()->get();

            $applyCounts = App\Models\JobApplicationForm::select('jobvacant_id', DB::raw('count(*) as total'))
                ->whereBetween('created_at', [$startDate, $endDate])
                ->groupBy('jobvacant_id')
                ->get();

            $allVacancies = App\Models\JobVacants::all();
            $allApplyCounts = $applyCounts->keyBy('jobvacant_id');

            $chartDatabranch = $allVacancies->map(function ($vacancy) use ($allApplyCounts, $getbranches) {
                $applyCount = $allApplyCounts->get($vacancy->id);
                $branchNames = $getbranches->pluck('branch_name')->implode(', ');

                return [
                    'name' => $vacancy ? $vacancy->vacant_name . ' (' . $branchNames . ')' : 'Unknown',
                    'y' => $applyCount ? $applyCount->total : 0,
                    'color' => '#' . substr(md5(rand()), 0, 6)
                ];
            });
        @endphp
    </div>
    <div class="col-md-12">
        <br><br><br>
    </div>
</div>
@endif

@if(Auth()->user()->role=='2' && Auth()->user()->department=='Online')
    <div class="row">

        <div class="col-lg-4">
            <a href="{{route('all_photo_gallery.index')}}"  style="color:#000">
            <div class="alert alert-success" role="alert" style="color: #000;">
                <center>
                <h4 class="alert-heading"><i class="las la-images" style="font-size: 30px;"></i> Photo Gallery</h4><br>
                <font style="font-size: 20px;">

                <i class="las la-bars"></i> Total
                {{$countGallery}}

                </font>
                </center>
              </div>
            </a>
        </div>

        <div class="col-lg-4">
            <a href="{{route('knowledge_sharing.index')}}"  style="color:#000">
            <div class="alert alert-warning" role="alert" style="color: #000;">
                <center>
                <h4 class="alert-heading"><i class="las la-share-alt" style="font-size: 30px;"></i> Knowledge Sharing</h4><br>
                <font style="font-size: 20px;">

                <i class="las la-bars"></i> Total
                {{$countGallery}}

                </font>
               </center>
              </div>
            </a>
        </div>

        <div class="col-lg-4">
            <div class="alert alert-primary" role="alert" style="color: #000;">
                <a href="{{route('frequently_asked_question.index')}}"  style="color:#000">
                <center>
                <h4 class="alert-heading"><i class="lar la-question-circle" style="font-size: 30px;"></i>Frequently Asked Questions (FAQ)</h4><br>
                <font style="font-size: 20px;">

                <i class="las la-bars"></i> Total
                {{$countFaq}}

                </font>
                </center>
              </div>
            </a>
        </div>

    </div>
@endif

@if(Auth()->user()->role=='2' && Auth()->user()->department=='MKT')
<div class="row">
    <div class="col-lg-4">
        <a href="{{ route('activity_type.index') }}"  style="color:#000">
        <div class="alert alert-success" role="alert" style="color: #000;">
            <center>
            <h4 class="alert-heading"><i class="las la-users" style="font-size: 30px;"></i> Activity Type </h4><br>
            <font style="font-size: 20px;">
            <i class="las la-bars"></i> Total
            {{$countActype}}
            </font>
            </center>
          </div>
        </a>
    </div>

    <div class="col-lg-4">
        <a href="{{ route('activities.index') }}"  style="color:#000">
        <div class="alert alert-warning" role="alert" style="color: #000;">
            <center>
            <h4 class="alert-heading"><i class="las la-users" style="font-size: 30px;"></i> Activity</h4><br>
            <font style="font-size: 20px;">

            <i class="las la-bars"></i> Total
            {{$countAct}}

            </font>
           </center>
          </div>
        </a>
    </div>

    <div class="col-lg-4">
        <div class="alert alert-primary" role="alert" style="color: #000;">
            <a href="{{ route('feedbacks.index') }}"  style="color:#000">
            <center>
            <h4 class="alert-heading"><i class="las la-comments" style="font-size: 30px;"></i>Feedback</h4><br>
            <font style="font-size: 20px;">

            <i class="las la-bars"></i> Total
            {{$countFeed}}
            </font>
            </center>
          </div>
        </a>
    </div>
</div>
<br>
    <hr>
<br>


    <div class="row">

        <div class="col-lg-4">
            <a href="{{route('all_photo_gallery.index')}}"  style="color:#000">
            <div class="alert alert-success" role="alert" style="color: #000;">
                <center>
                <h4 class="alert-heading"><i class="las la-images" style="font-size: 30px;"></i> Photo Gallery</h4><br>
                <font style="font-size: 20px;">

                <i class="las la-bars"></i> Total
                {{$countGallery}}
                </font>
                </center>
              </div>
            </a>
        </div>

        <div class="col-lg-4">
            <a href="{{route('knowledge_sharing.index')}}"  style="color:#000">
            <div class="alert alert-warning" role="alert" style="color: #000;">
                <center>
                <h4 class="alert-heading"><i class="las la-share-alt" style="font-size: 30px;"></i> Knowledge Sharing</h4><br>
                <font style="font-size: 20px;">

                <i class="las la-bars"></i> Total
                {{$countGallery}}

                </font>
               </center>
              </div>
            </a>
        </div>

        <div class="col-lg-4">
            <div class="alert alert-primary" role="alert" style="color: #000;">
                <a href="{{route('frequently_asked_question.index')}}"  style="color:#000">
                <center>
                <h4 class="alert-heading"><i class="lar la-question-circle" style="font-size: 30px;"></i>Frequently Asked Questions (FAQ)</h4><br>
                <font style="font-size: 20px;">

                <i class="las la-bars"></i> Total
                {{$countFaq}}

                </font>
                </center>
              </div>
            </a>
        </div>
    </div>

@endif

@endsection
@section('script')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
@if ((Auth()->user()->role=='1' || Auth()->user()->role=='3' )|| (Auth()->user()->role=='2' && Auth()->user()->department=='HR'))
<script>
        document.addEventListener('DOMContentLoaded', function () {
        const container = document.getElementById('container-apply-branches');
        let dataset = @json($chartDatabranch);

        function getMaxNameLength(data) {
            return data.reduce((max, item) => Math.max(max, item.name.length), 0);
        }

        function calculateChartWidth(maxNameLength) {
            const baseWidth = 800;
            const additionalWidthPerCharacter = 10;
            return baseWidth + (maxNameLength * additionalWidthPerCharacter);
        }

        function getData() {
            return dataset.map(vacancy => ({
                name: vacancy.name,
                y: vacancy.y,
                color: vacancy.color
            }));
        }

        function createChart() {
            const maxNameLength = getMaxNameLength(dataset);
            const chartWidth = calculateChartWidth(maxNameLength);
            const vacantNameCount = dataset.length; // Count of distinct vacant names

            Highcharts.chart('container-apply-branches', {
                chart: {
                    type: 'column', // Change to column chart
                    width: chartWidth
                },
                title: {
                    text: 'Job Applications by Vacancy and Branch'
                },
                subtitle: {
                    useHTML: true,
                    text: getSubtitle(vacantNameCount)
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Applications'
                    }
                },
                series: [{
                    name: 'Applications',
                    data: getData()
                }],
                plotOptions: {
                    column: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                }
            });
        }

        function getSubtitle(vacantNameCount) {
            const totalApplications = dataset.reduce((sum, vacancy) => sum + vacancy.y, 0);
            return `<span style="font-size: 12px">Total Vacant Names: <b>${vacantNameCount}</b><br>Total Applications: <b>${totalApplications}</b></span>`;
        }

        createChart();
    });
</script>
<!------------------------------------------all apply branch----------------------->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Highcharts.chart('container-apply', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45
                },
                backgroundColor: 'white' // Setting the background color to white
            },
            title: {
                text: 'Job Applications Apply',
                align: 'left'
            },
            subtitle: {
                text: 'Job Applications Apply Total: {{ $totalCount }}',
                align: 'left',
                style:{
                    fontSize: '1.2em',
                            color: 'black',
                            textOutline: 'none'
                }
            },
            plotOptions: {
                pie: {
                    innerSize: 100,
                    depth: 45,
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}: ({point.y})',
                        style: {
                            fontSize: '1em',
                            color: 'black',
                            textOutline: 'none'
                        }
                    },
                    showInLegend:true
                }
            },
            series: [{
                name: 'Applications',
                data: @json($chartDataapply)
            }]
        });
    });
</script>
<!-------------------------apply--------------------->
<script>
 document.addEventListener('DOMContentLoaded', function () {
            Highcharts.chart('container-cate', {
                chart: {
                    type: 'pie',
                    backgroundColor: 'white' // Setting the background color to white
                },
                title: {
                    text: 'Job Categories Distribution'
                },
                subtitle: {
                    text: 'Total: {{ $totalCount }}',
                    style: {
                                fontSize: '1.5em',
                                color: 'black',
                                textOutline: 'none'
                            }
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}: ({point.y})',
                            style: {
                                fontSize: '1em',
                                color: 'black',
                                textOutline: 'none'
                            }
                        },
                        showInLegend:true
                    }
                },
                series: [{
                    name: 'Percentage',
                    colorByPoint: true,
                    data: @json($chartData)
                }]
            });
        });
</script>
<!-------------------------Vacants--------------------->
<?php
 $vacantCounts = App\Models\JobVacants::select('category_id', DB::raw('count(*) as total'))
        ->groupBy('category_id')
        ->with('category')
        ->get()
        ->map(function($vacant) {
            return [
                'name' => $vacant->category->category_name . ' (' . $vacant->total . ')',
                'y' => $vacant->total,
                'color' => '#' . substr(md5(rand()), 0, 6) // Generate random color
            ];
        });
?>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const vacantCounts = @json($vacantCounts);

    const chart = Highcharts.chart('container', {
        chart: {
            type: 'pie',
            custom: {},
            events: {
                render() {
                    const series = this.series[0];

                    // Custom label
                    let customLabel = this.options.chart.custom.label;
                    if (!customLabel) {
                        customLabel = this.options.chart.custom.label = this.renderer.label(
                            'Total<br/><strong>' + series.data.reduce((a, b) => a + b.y, 0) + '</strong>'
                        ).css({
                            color: '#000',
                            textAnchor: 'middle'
                        }).add();
                    }

                    const x = series.center[0] + this.plotLeft;
                    const y = series.center[1] + this.plotTop - (customLabel.attr('height') / 2);
                    customLabel.attr({ x, y });
                    customLabel.css({ fontSize: `${series.center[2] / 12}px` });

                    // Custom legend with arrows
                    const legendContainer = document.getElementById('chart-legend');
                    legendContainer.innerHTML = '';
                    vacantCounts.forEach((item, index) => {
                        const legendItem = document.createElement('div');
                        legendItem.classList.add('legend-item');

                        const colorBox = document.createElement('div');
                        colorBox.classList.add('legend-color');
                        colorBox.style.backgroundColor = item.color;

                        const label = document.createElement('div');
                        label.textContent = item.name;

                        legendItem.appendChild(colorBox);
                        legendItem.appendChild(label);
                        legendContainer.appendChild(legendItem);

                        // Position arrow
                        const point = series.data[index];
                        const legendItemRect = legendItem.getBoundingClientRect();
                        const pointX = point.plotX + this.plotLeft;
                        const pointY = point.plotY + this.plotTop;
                        const legendItemX = legendItemRect.left + window.scrollX + 10;
                        const legendItemY = legendItemRect.top + window.scrollY + 10;

                        const arrow = this.renderer.path(['M', legendItemX, legendItemY, 'L', pointX, pointY])
                            .attr({
                                stroke: item.color,
                                'stroke-width': 2
                            }).add();
                    });
                }
            }
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        title: {
            text: 'Job Vacancies by Category'
        },
        subtitle: {
            text: 'Source: JobApplicationForm'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.0f}%</b>'
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                borderRadius: 8,
                dataLabels: [{
                    enabled: true,
                    distance: 20,
                    format: '{point.name}'
                }, {
                    enabled: true,
                    distance: -15,
                    format: '{point.percentage:.0f}%',
                    style: {
                        fontSize: '0.9em'
                    }
                }],
                showInLegend: true
            }
        },
        series: [{
            name: 'Vacancies',
            colorByPoint: true,
            innerSize: '75%',
            data: vacantCounts,

        }]
    });
});
</script>
@endif
@endsection
