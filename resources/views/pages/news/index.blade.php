@extends('index')
@section('content')
    @php
        use App\Models\News;
        $newsLatest = News::orderBy('created_at', 'DESC')->get();
    @endphp
    <div class="container">
        <div class="row mb-1">
            {{-- news --}}
            <div class="col-md-9">
                <h1 class="h5 text-center text-capitalize mt-2">
                    {{ $news->title }}
                </h1>
                <hr>
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <img src="{{ url('assets/images/news/' . $news->image) }}" class="bg-transparent d-block img-fluid"
                        loading="lazy">
                    <div class="d-block">
                        {{-- <p class="lead"> --}}
                        {!! html_entity_decode($news->details) !!}
                        {{-- </p> --}}
                    </div>
                    <div class="d-block">
                        @if (!empty($news->image_1))
                            <img src="{{ url('assets/images/news/' . $news->image_1) }}" alt="{{ $news->title }}"
                                class="d-block bg-white img-fluid" alt="{{ $news->title }}" loading="lazy">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="position-sticky" style="top: 4rem">
                    <h3 class="fw-bold">
                        Search News
                    </h3>
                    <form action="/search" method="get" class="my-2">
                        <div class="form-group mb-1">
                            <input type="search" name="q" id="search"
                                class="form-control form-control-lg rounded-0 input-field">
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Search" class="btn btn-lg btn-primary rounded-0">
                        </div>
                    </form>
                    <h3 class="fw-bold">
                        Latest News
                    </h3>
                    @foreach ($newsLatest as $number => $latest)
                        <ul class="list-group list-group-flush bg-transparent">
                            <li class="list-group-item text-capitalize">
                                <a href="/news/{{ $latest->url }}"
                                    class="text-decoration-none text-info">{{ $latest->title }}</a>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('components.scroll-top')
@endsection
{{-- Uploaded on:  --}}
