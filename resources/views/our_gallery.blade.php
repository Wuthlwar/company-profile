@extends('layouts.main')
@section('content')

<section class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul class="portfolio-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                    <li data-filter=".filter-item" class="active"><span class="filter-text" style="font-size: 15px;">All</span></li>
                    @foreach($photoGallery as $photoName)
                        @php
                            $sanitizedClassName = Str::slug($photoName->name, '-');
                        @endphp
                        <li data-filter=".{{ $sanitizedClassName }}"><span class="filter-text" style="font-size: 15px;">{{ $photoName->name }}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row filter-layout masonary-layout">
            @foreach($photoGallery as $photoName)
                @php
                    $sanitizedClassName = Str::slug($photoName->name, '-');
                @endphp
                @foreach($photoName->photoGalleries as $photoGalleryItem)
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item {{ $sanitizedClassName }}">
                        <div class="portfolio__single">
                            <div class="portfolio__img">
                                <img src="{{ asset('storage/' . $photoGalleryItem->file) }}" alt="Gallery Image">
                                <div class="portfolio__plus">
                                    <a href="{{ asset('storage/' . $photoGalleryItem->file) }}" class="img-popup"><span class="icon-plus"></span></a>
                                </div>
                                <div class="portfolio__content">
                                    <p class="portfolio__sub-title">{{ $photoName->name }}</p>
                                    <h4 class="portfolio__title"><a href="portfolio-details.html">{{ $photoGalleryItem->title }}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
        <!-- Pagination Links -->
        <div class="pagination-wrapper">
            {{ $photoGallery->links('pagination::bootstrap-4') }}
        </div>
    </div>
</section>

@endsection
