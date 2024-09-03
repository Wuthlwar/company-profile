@extends('admins.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Frequently Asked Questions (FAQ)</h4>
            </div>
            {{-- <a href="page-add-return.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add</a> --}}
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#jobModal"><i class="las la-plus mr-3"></i>Add</button>

        </div>
    </div>

    <div class="col-lg-12 col-md-12">

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
                <!-- Multi Columns Form -->
                <form action="{{ route('searchfaq.search') }}" method="post" class="row g-3 card-title" style="margin: 10px; font-size: 12px;">
                    @csrf
                    @method('post')

                    <div class="col-md-3">
                        <label for="fromDate" class="form-label">From Date </label>
                        <input type="date" class="form-control" id="fromDate" name="start_date" style="border:1px solid #076b45;height:30px;font-size:13px;" value="{{ session('start_date') ? session('start_date') : date('Y-m-d') }}">
                      </div>

                      <div class="col-md-3">
                        <label for="toDate" class="form-label">To Date</label>
                        <input type="date" class="form-control" id="toDate" name="end_date" style="border:1px solid #333;height:30px;font-size:13px" value="{{ session('end_date') ? session('end_date') : date('Y-m-d')}}">
                      </div>

                      <div class="col-md-3">
                          <label for="cateGory" class="form-label">Title</label>
                          <input type="text" class="form-control" id="title" name="title" value="{{session('title')}}" style="border:1px solid #333;height:30px;font-size:13px">
                      </div>

                    <div class="col-md-3">
                        <label for="search" class="form-label" style="color: #fff;">Search</label><br>
                        <button type="submit" class="btn btn-primary" style="border: 1px solid #333; height: 30px; font-size: 13px; padding: 5px;">
                            <i class="bi bi-search"></i>&nbsp;Search
                        </button> &nbsp;|&nbsp;
                        <a href="{{ route('frequently_asked_question.index') }}" class="btn" style="border: 1px solid #333; height: 30px; font-size: 13px; padding: 5px;">
                            <i class="bi bi-x"></i> Reset
                        </a>
                    </div>
                </form>
                <hr>
                <div class="table-responsive rounded mb-3">
                    <table class="table table-striped" id="statusForm" style="font-size: 13px;">
                        <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">
                                {{-- <th scope="col" class="card-title" style="font-size: 13px;">
                                    @if (Auth()->user()->role == '1')
                                    <input type="checkbox" id="select-all" class="select-item" style="border:1px solid #312eec;">
                                    @endif
                                </th> --}}
                                <th scope="col" class="card-title" style="font-size: 13px;">No</th>
                                <th scope="col" class="card-title" style="font-size: 13px;">Title</th>
                                <th scope="col" class="card-title" style="font-size: 13px;">Content</th>
                                <th scope="col" class="card-title" style="font-size: 13px;">Faqs</th>
                                <th scope="col" class="card-title" style="font-size: 13px;">Created Date</th>
                                <th scope="col" class="card-title" style="font-size: 13px;">Updated Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faqs as $faq)
                            <tr>
                                {{-- <th><input type="checkbox" id="select-all" class="select-item" style="border:1px solid #312eec;"></th> --}}
                                <th scope="row">{{($faqs->currentPage()-1)*$faqs->perPage()+$loop->index+1}}.</th>
                                <td>{{ $faq->title_en }}<hr>
                                    {{ $faq->title_my }}<br>
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#addq{{$faq->id}}"><font style="font-size;20px;">+ Add Question</font></button>

                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#title{{$faq->id}}">Edit</button>
                                    @if (Auth()->user()->role=='1')
                                    <form id="delete-form-{{ $faq->id }}" action="{{ route('frequently_asked_question.destroy', $faq->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $faq->id }})">Delete</button>
                                    @endif
                                </td>
                                <td>
                                    {!! $faq->content_en !!}<hr>
                                    {!! $faq->content_my !!}

                                </td>
                                <td>

                                    @if($faq->faqQans)
                                        @foreach($faq->faqQans as $faqQans)
                                        {{-- <strong>Q:</strong> {{ $faqQans->question }}<br>
                                        <strong>Ans:</strong> {!! $faqQans->answer !!}<br> --}}
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="heading{{ $faqQans->id }}">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse{{ $faqQans->id }}" aria-expanded="false" aria-controls="collapse{{ $faqQans->id }}">
                                                            <strong>Q:</strong> {{ $faqQans->question }}
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse{{ $faqQans->id }}" class="collapse" aria-labelledby="heading{{ $faqQans->id }}" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <strong>Ans:</strong> {!! $faqQans->answer !!}
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                          @error('ans_ed')
                                          <span class="text-danger">{{ $message }}</span>
                                      @enderror

                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#questiona{{$faqQans->id}}">Edit</button>
                                        @if (Auth()->user()->role=='1')
                                        <form id="delete-form-{{ $faqQans->id }}" action="{{ route('question_and_answerfaq.destroy', $faqQans->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDeleteqans({{ $faqQans->id }})">Delete</button>
                                        @endif
                                        <hr>

                                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id='questiona{{$faqQans->id}}'>
                                            <div class="modal-dialog modal-lg">
                                               <div class="modal-content">
                                                  <form action="{{route('question_and_answer.update', $faqQans->id)}}" method="post" enctype="multipart/form-data" class="row g-3">
                                                    @csrf
                                                    @method('PUT')
                                                  <div class="modal-body">
                                                        <div class="col-sm-12">
                                                            <div class="card">
                                                                <div class="card-header d-flex justify-content-between rounded-sm">
                                                                    <div class="header-title">
                                                                        <h6 class="card-title">Edit Question and Answer</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label for="title" class="form-label card-title" style="font-size:15px;">Question <font style="color:red;">*</font></label>
                                                                            <input type="text" class="form-control" id="qu_ed{{$faqQans->id}}" name="question_ed" style="border:1px solid #333;height:40px;font-size:13px" value="{{ $faqQans->question }}" required>
                                                                            <hr>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <label for="answer{{$faqQans->id}}" class="form-label card-title" style="font-size:15px;">Answer <font style="color:red;">*</font></label>
                                                                            <div id="answer_ed{{$faqQans->id}}" style="height: 200px;">{!! $faqQans->answer !!}</div>
                                                                            <input type="hidden" name="ans_ed" id="answer_ed{{$faqQans->id}}-input" value="{{ $faqQans->answer }}" required>
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                  </div>

                                                  </form>
                                               </div>
                                            </div>
                                        </div>

                                        @endforeach
                                    @else
                                        <p>No questions and answers available.</p>
                                    @endif
                                </td>
                                <td>{{$faq->created_at}}</td>
                                <td>{{$faq->updated_at}}</td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id='title{{$faq->id}}'>
                                <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                      <form action="{{route('frequently_asked_question.update', $faq->id)}}" method="post" enctype="multipart/form-data" class="row g-3">
                                        @csrf
                                        @method('PUT')
                                      <div class="modal-body">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header d-flex justify-content-between rounded-sm">
                                                        <div class="header-title">
                                                            <h6 class="card-title">Edit Title and Content</h6>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="title" class="form-label card-title" style="font-size:15px;">Title (English)<font style="color:red;">*</font></label>
                                                                <input type="text" class="form-control" id="title{{$faq->id}}" name="title_en" style="border:1px solid #333;height:40px;font-size:13px" value="{{ $faq->title_en }}" required>
                                                                <hr>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label for="content{{$faq->id}}" class="form-label card-title" style="font-size:15px;">Content (English) <font style="color:red;">*</font></label>
                                                                <div id="content{{$faq->id}}" style="height: 200px;">{!! $faq->content_en !!}</div>
                                                                <input type="hidden" name="content_en" id="content{{$faq->id}}-input" value="{{ $faq->content_en }}" required>
                                                                <hr>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="title" class="form-label card-title" style="font-size:15px;">Title (Myanmar)<font style="color:red;">*</font></label>
                                                                <input type="text" class="form-control" id="title{{$faq->id}}" name="title_my" style="border:1px solid #333;height:40px;font-size:13px" value="{{ $faq->title_my }}" required>
                                                                <hr>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label for="content{{$faq->id}}" class="form-label card-title" style="font-size:15px;">Content (Myanmar) <font style="color:red;">*</font></label>
                                                                <div id="content_my{{$faq->id}}" style="height: 200px;">{!! $faq->content_my !!}</div>
                                                                <input type="hidden" name="content_my" id="content_my{{$faq->id}}-input" value="{{ $faq->content_my }}" required>
                                                                <hr>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                      </form>
                                   </div>
                                </div>
                            </div>
                            <!-- End Modal -->

                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id='addq{{$faq->id}}'>
                                <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                      <form action="{{route('question_question.add')}}" method="post" enctype="multipart/form-data" class="row g-3">
                                        @csrf

                                      <div class="modal-body">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header d-flex justify-content-between rounded-sm">
                                                        <div class="header-title">
                                                            <h6 class="card-title">Add Question and Answer</h6>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="title" class="form-label card-title" style="font-size:15px;">Title (English)<font style="color:red;">*</font></label>
                                                                <input type="hidden" name="id" value="{{$faq->id}}" class="form-control">
                                                                <input type="text" class="form-control" id="title{{$faq->id}}" name="title_en" style="border:1px solid #333;height:40px;font-size:13px" value="{{ $faq->title_en }}" readonly>
                                                                <hr>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="title" class="form-label card-title" style="font-size:15px;">Title (Myanmar)<font style="color:red;">*</font></label>
                                                                <input type="hidden" name="id" value="{{$faq->id}}" class="form-control">
                                                                <input type="text" class="form-control" id="title{{$faq->id}}" name="title_my" style="border:1px solid #333;height:40px;font-size:13px" value="{{ $faq->title_my }}" readonly>
                                                                <hr>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label for="title" class="form-label card-title" style="font-size:15px;">Question (English)<font style="color:red;">*</font></label>
                                                                <input type="text" class="form-control" id="ques_en{{$faq->id}}" name="que_en" style="border:1px solid #333;height:40px;font-size:13px" required>
                                                                <hr>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label for="content{{$faq->id}}" class="form-label card-title" style="font-size:15px;">Answer (English)<font style="color:red;">*</font></label>
                                                                <div id="quen_en{{$faq->id}}" style="height: 200px;"></div>
                                                                <input type="hidden" name="ansr_en" id="quen_en{{$faq->id}}-input" required>
                                                                <hr>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label for="title" class="form-label card-title" style="font-size:15px;">Question (Myanmar) <font style="color:red;">*</font></label>
                                                                <input type="text" class="form-control" id="qu_my{{$faq->id}}" name="qum_my" style="border:1px solid #333;height:40px;font-size:13px" required>
                                                                <hr>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label for="content{{$faq->id}}" class="form-label card-title" style="font-size:15px;">Answer (Myanmar)<font style="color:red;">*</font></label>
                                                                <div id="qumy_my{{$faq->id}}" style="height: 200px;"></div>
                                                                <input type="hidden" name="ansr_my" id="qumy_my{{$faq->id}}-input" required>
                                                                <hr>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Save</button>
                                      </div>
                                      </form>
                                   </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $faqs->links('pagination::bootstrap-4') }}
    </div>
</div>

{{-- Create Modal  --}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id='jobModal'>
    <div class="modal-dialog modal-lg">
       <div class="modal-content">
        <form action="{{route('frequently_asked_question.store')}}" method="post" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between rounded-sm">
                            <div class="header-title">
                                <h6 class="card-title">Add New FAQ</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Title for English -->
                                <div class="col-md-12">
                                    <label for="title_en" class="form-label card-title" style="font-size:15px;">Title (English) <font style="color:red;">*</font></label>
                                    <input type="text" class="form-control" id="title_en" name="title_en" style="border:1px solid #333;height:40px;font-size:13px" required>
                                    <hr>
                                </div>

                                <!-- Content for English -->
                                <div class="col-md-12">
                                    <label for="content_en" class="form-label card-title" style="font-size:15px;">Content (English) <font style="color:red;">*</font></label>
                                    <div id="content_en" style="height: 200px;"></div>
                                    <input type="hidden" name="content_en" id="content_en_input" required>
                                    <hr>
                                </div>

                                <!-- Title for Myanmar -->
                                <div class="col-md-12">
                                    <label for="title_my" class="form-label card-title" style="font-size:15px;">Title (Myanmar) <font style="color:red;">*</font></label>
                                    <input type="text" class="form-control" id="title_my" name="title_my" style="border:1px solid #333;height:40px;font-size:13px" required>
                                    <hr>
                                </div>

                                <!-- Content for Myanmar -->
                                <div class="col-md-12">
                                    <label for="content_my" class="form-label card-title" style="font-size:15px;">Content (Myanmar) <font style="color:red;">*</font></label>
                                    <div id="content_my" style="height: 200px;"></div>
                                    <input type="hidden" name="content_my" id="content_my_input" required>
                                    <hr>
                                </div>

                                <!-- English Question and Answer -->
                                <div class="col-md-12">
                                    <label for="fromDate" class="form-label" id="font-f">Add New FAQ (English)</label>
                                    <h5 class="card-title" style="font-size:15px;">Question (English)</h5>
                                    <input type="text" class="form-control" id="question_en" name="question_en[]" style="border:1px solid #333;height:40px;font-size:13px" required>

                                    <label for="faq" class="form-label card-title" style="font-size:15px;">Answer (English) <font style="color:red;">*</font></label>
                                    <div id="ans_en" style="height: 200px;"></div>
                                    <input type="hidden" name="ans_en[]" id="ans_en_input" required>
                                    <br>

                                    <div id="showquestion_en"></div>
                                    <br>
                                    <i class="btn btn-success" id="addbtn_en"> Add FAQ (English)</i>
                                    <hr>
                                </div>

                                <!-- Myanmar Question and Answer -->
                                <div class="col-md-12">
                                    <label for="fromDate" class="form-label" id="font-f">Add New FAQ (Myanmar)</label>
                                    <h5 class="card-title" style="font-size:15px;">Question (Myanmar)</h5>
                                    <input type="text" class="form-control" id="question_my" name="question_my[]" style="border:1px solid #333;height:40px;font-size:13px" required>

                                    <label for="faq" class="form-label card-title" style="font-size:15px;">Answer (Myanmar) <font style="color:red;">*</font></label>
                                    <div id="ans_my" style="height: 200px;"></div>
                                    <input type="hidden" name="ans_my[]" id="ans_my_input" required>
                                    <br>

                                    <div id="showquestion_my"></div>
                                    <br>
                                    <i class="btn btn-success" id="addbtn_my"> Add FAQ (Myanmar)</i>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="btn-create">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
       </div>
    </div>
 </div>

@endsection
@section('script')

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this! (Title နှင့် Content အပြင် မေးခွန်းနှင့်အဖြေ များပါပျက်သွားမည်ဖြစ်သည်။)",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
</script>

<script>
    function confirmDeleteqans(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this! (မေးခွန်းနှင့်အဖြေ များပါပျက်သွားမည်ဖြစ်သည်။)",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
</script>

<script>
    $(document).ready(function() {
        @foreach($faqs as $faq)
            var quill{{$faq->id}} = new Quill(`#content{{$faq->id}}`, {
                theme: 'snow'
            });

            quill{{$faq->id}}.on('text-change', function () {
                $(`#content{{$faq->id}}-input`).val(quill{{$faq->id}}.root.innerHTML);
            });
        @endforeach
    });

    $(document).ready(function() {
        @foreach($faqs as $faq)
            var quill{{$faq->id}} = new Quill(`#content_my{{$faq->id}}`, {
                theme: 'snow'
            });

            quill{{$faq->id}}.on('text-change', function () {
                $(`#content_my{{$faq->id}}-input`).val(quill{{$faq->id}}.root.innerHTML);
            });
        @endforeach
    });
</script>

<script>
    $(document).ready(function() {
        @foreach($faqs as $faq)
            var quill{{$faq->id}} = new Quill(`#qu{{$faq->id}}`, {
                theme: 'snow'
            });

            quill{{$faq->id}}.on('text-change', function () {
                $(`#qu{{$faq->id}}-input`).val(quill{{$faq->id}}.root.innerHTML);
            });
        @endforeach
    });
</script>

<script>
    $(document).ready(function() {
        @foreach($faqs as $faq)
            var quill{{$faq->id}} = new Quill(`#quen_en{{$faq->id}}`, {
                theme: 'snow'
            });

            quill{{$faq->id}}.on('text-change', function () {
                $(`#quen_en{{$faq->id}}-input`).val(quill{{$faq->id}}.root.innerHTML);
            });
        @endforeach
    });
</script>

<script>
    $(document).ready(function() {
        @foreach($faqs as $faq)
            var quill{{$faq->id}} = new Quill(`#qumy_my{{$faq->id}}`, {
                theme: 'snow'
            });

            quill{{$faq->id}}.on('text-change', function () {
                $(`#qumy_my{{$faq->id}}-input`).val(quill{{$faq->id}}.root.innerHTML);
            });
        @endforeach
    });
</script>


@foreach($faqs as $faq)
    <script>
        $(document).ready(function() {
            @foreach($faq->faqQans as $faqQans)
                var quill{{ $faqQans->id }} = new Quill(`#answer_ed{{ $faqQans->id }}`, {
                    theme: 'snow'
                });

                quill{{ $faqQans->id }}.on('text-change', function () {
                    $(`#answer_ed{{ $faqQans->id }}-input`).val(quill{{ $faqQans->id }}.root.innerHTML);
                });
            @endforeach
        });
    </script>
@endforeach


<script>
    $(document).ready(function() {
        // Initialize Quill editors for content and answers
        const quillEn = new Quill('#content_en', { theme: 'snow' });
        const quillMy = new Quill('#content_my', { theme: 'snow' });

        const answEn = new Quill('#ans_en', { theme: 'snow' });
        const answMy = new Quill('#ans_my', { theme: 'snow' });

        // Update hidden inputs on content change
        quillEn.on('text-change', function () {
            $('#content_en_input').val(quillEn.root.innerHTML);
        });

        quillMy.on('text-change', function () {
            $('#content_my_input').val(quillMy.root.innerHTML);
        });

        answEn.on('text-change', function () {
            $('#ans_en_input').val(answEn.root.innerHTML);
        });

        answMy.on('text-change', function () {
            $('#ans_my_input').val(answMy.root.innerHTML);
        });

        // Dynamic addition of FAQs in English
        var max_fields = 6;
        var x_en = 0;
        $('#addbtn_en').on('click', function () {
            if (x_en < max_fields) {
                x_en++;
                var wrapperQuestionEn = `
                    <div class="row">
                        <div class="col-md-12">
                            <label for="fromDate" class="form-label" id="font-f">${x_en}. Add New FAQ (English)</label>
                            <h5 class="card-title" style="font-size:15px;">Question (English)</h5>
                            <input type="text" class="form-control" id="question_en${x_en}" name="question_en[]" style="border:1px solid #333;height:40px;font-size:13px" required>

                            <label for="categoryname" class="form-label card-title" style="font-size:15px;">Answer (English) <font style="color:red;">*</font></label>
                            <div id="ans_en${x_en}" style="height: 200px;"></div>
                            <input type="hidden" name="ans_en[]" id="ans_en${x_en}-input" required>
                            <i class="las la-minus-circle removebtn_en" style="color:red;font-size:27px;"></i>
                        </div>

                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                `;
                $('#showquestion_en').append(wrapperQuestionEn);

                var quillEn = new Quill(`#ans_en${x_en}`, { theme: 'snow' });
                quillEn.on('text-change', function () {
                    $(`#ans_en${x_en}-input`).val(quillEn.root.innerHTML);
                });
            } else {
                Swal.fire({ icon: 'error', title: 'Oops...', text: 'Maximum fields limit reached!' });
            }
        });

        // Dynamic addition of FAQs in Myanmar
        var x_my = 0;
        $('#addbtn_my').on('click', function () {
            if (x_my < max_fields) {
                x_my++;
                var wrapperQuestionMy = `
                    <div class="row">
                        <div class="col-md-12">
                            <label for="fromDate" class="form-label" id="font-f">${x_my}. Add New FAQ (Myanmar)</label>
                            <h5 class="card-title" style="font-size:15px;">Question (Myanmar)</h5>
                            <input type="text" class="form-control" id="question_my${x_my}" name="question_my[]" style="border:1px solid #333;height:40px;font-size:13px" required>

                            <label for="categoryname" class="form-label card-title" style="font-size:15px;">Answer (Myanmar) <font style="color:red;">*</font></label>
                            <div id="ans_my${x_my}" style="height: 200px;"></div>
                            <input type="hidden" name="ans_my[]" id="ans_my${x_my}-input" required>
                            <i class="las la-minus-circle removebtn_my" style="color:red;font-size:27px;"></i>
                        </div>

                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                `;
                $('#showquestion_my').append(wrapperQuestionMy);

                var quillMy = new Quill(`#ans_my${x_my}`, { theme: 'snow' });
                quillMy.on('text-change', function () {
                    $(`#ans_my${x_my}-input`).val(quillMy.root.innerHTML);
                });
            } else {
                Swal.fire({ icon: 'error', title: 'Oops...', text: 'Maximum fields limit reached!' });
            }
        });

        // Remove FAQ row
        $('#showquestion_en').on('click', '.removebtn_en', function () {
            $(this).closest('.row').remove();
            x_en--;
        });

        $('#showquestion_my').on('click', '.removebtn_my', function () {
            $(this).closest('.row').remove();
            x_my--;
        });

        // Set the hidden inputs on form submit
        $('form').on('submit', function () {
            $('#content_en_input').val(quillEn.root.innerHTML);
            $('#content_my_input').val(quillMy.root.innerHTML);
            $('#ans_en_input').val(answEn.root.innerHTML);
            $('#ans_my_input').val(answMy.root.innerHTML);
        });
    });
</script>


@endsection
