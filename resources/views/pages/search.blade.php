@extends('layout.app')
@section('content')
@section('css')
    <style>
        .card.news {
            overflow-y: hidden;
        }

        .card-body.news {
            position: absolute;
            top: 55%;
            left: 0;
            background-color: #fff;
            min-height: 50%;
            width: 100%;
            overflow-y: hidden !important;
        }
    </style>
@endsection
@php
    use App\Models\News;
    $news = News::orderBy('date', 'DESC')->paginate(6);
    $newsLatest = News::orderBy('created_at', 'DESC')->get();
@endphp
<div class="row">
    <div class="col-md-9">
        @if (!count($data) == 0)
            <div class="row">
                @foreach ($data as $indx => $searchResults)
                    <div class="col-md-6">
                        <div class="card news border-0 shadow rounded-0 mx-0 mt-2 px-0" style="min-height: 520px;">
                            <img src="{{ url('assets/images/news/' . $searchResults->image) }}"
                                class="card-img-top rounded-0" alt="...">
                            <div class="card-body news my-0">
                                <h4 class="h6 card-title text-start link text-capitalize"
                                    onclick="window.location.href='news/{{ $searchResults->url }}'">
                                    {{ $searchResults->title }}
                                </h4>
                                <p class="card-text mt-3 mb-1{{--  text-truncate --}}">
                                    {{ $searchResults->headline }}
                                    <small class="link"
                                        onmousedown="window.location.href='news/{{ $searchResults->url }}'">
                                        Read More
                                    </small>
                                </p>

                                <br>
                                <small>Uploaded on: {{ $searchResults->date }} {{--   {{ $new->user }} --}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h3 class="text-center my-5">Found nothing for search "{{ $search }}"</h3>
        @endif
    </div>
    <div class="col-md-3">
        <div class="container-fluid">
            <h3 class="fw-bold">
                Search News
            </h3>
            <form action="/search" method="get" class="my-2">
                <div class="form-group mb-1">
                    <input type="search" name="q" id="search" placeholder="Enter your search here"
                        class="form-control form-control-lg rounded-0 input-field">
                </div>
                <div class="d-flex justify-content-end">
                    <input type="submit" value="Search" class="btn btn-lg btn-primary rounded-0">
                </div>
            </form>
            <h3 class="fw-bold">
                Latest
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
@endsection
