@extends('layout.app')
@section('content')
@section('css')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
@endsection
@php
    use App\Models\News;
    $news = News::orderBy('date', 'DESC')->paginate(6);
    $newsLatest = News::orderBy('created_at', 'DESC')->get();
@endphp
<div class="row mb-1">
    {{-- news --}}
    <div class="col-md-9">
        <hr>
        <h1 class="h1 text-center text-uppercase ">
            news
        </h1>
        <hr>
        <div class="row">
            @foreach ($news as $index => $new)
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="card shadow-sm border-0 my-1" style="min-height: 450px !important">
                        <img class="bd-placeholder-img card-img-top" src="{{ url('assets/images/news/' . $new->image) }}"
                            width="100%" height="225" />
                        <div class="card-body">
                            <h4 class="h6 card-title text-start link text-capitalize"
                                onclick="window.location.href='news/{{ $new->url }}'">
                                {{ $new->title }}
                            </h4>
                            <p class="card-text text-start">
                                {{ $new->headline }}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="link" onmousedown="window.location.href='news/{{ $new->url }}'">
                                    Read More
                                </small>
                                <small class="text-body-secondary">Uploaded on {{ $new->date }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $news->links('layout.pagination') }}
        </div>
        <section>
            <div class="container">
                <hr>
                <h1 class="h1 text-center text-uppercase ">
                    Event
                </h1>
                <hr>
            </div>
        </section>
        @include('components.events')
    </div>
    {{-- search news --}}
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
            <hr>
            @foreach ($newsLatest as $number => $latest)
                <ul class="list-group list-group-flush bg-transparent">
                    <li class="list-group-item text-capitalize text-start">
                        <a href="/news/{{ $latest->url }}"
                            class="text-decoration-none text-info">{{ $latest->title }}</a>
                    </li>
                </ul>
            @endforeach
            <br>
            <h3 class="fw-bold">
                Up Coming Events
            </h3>
            <hr>
            <br>
            <h3 class="fw-bold">
                Archives
            </h3>
            <hr>
            <div class="p-4">
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2023</a></li>
                    <li><a href="#">February 2023</a></li>
                    <li><a href="#">January 2023</a></li>
                    <li><a href="#">December 2022</a></li>
                    <li><a href="#">November 2022</a></li>
                    <li><a href="#">October 2022</a></li>
                    <li><a href="#">September 2022</a></li>
                    <li><a href="#">August 2022</a></li>
                    <li><a href="#">July 2022</a></li>
                    <li><a href="#">June 2022</a></li>
                    <li><a href="#">May 2022</a></li>
                    <li><a href="#">April 2022</a></li>
                </ol>
            </div>


        </div>
    </div>
</div>

@include('components.scroll-top')
@section('css')
    <style>
        .news-text {
            color: #FF0303;
            font-family: Macondo;
            font-size: 64px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            letter-spacing: 2.88px;
        }
    </style>
@endsection
@endsection
