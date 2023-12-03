<div class="container px-0">
    <h5 class="h4 text-end text-white shadow text-info fw-bold text-uppercase bg-info p-3 mt-3"
        style="font-size: 135% !important">
        <a class="nav-link" href="{{ route('news') }}">recent news</a>
    </h5>
</div>
@php
    use App\Models\News;
    $news = News::orderBy('created_at', 'DESC')->paginate(3);
    // dd($news);
@endphp
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
<div class="container">
    <div class="row">
        @foreach ($news as $indx => $new)
            <div class="col-md-4">
                <div class="card shadow-sm border-0" style="min-height: 500px">
                    <img class="bd-placeholder-img card-img-top" src="{{ url('assets/images/news/' . $new->image) }}"
                        width="100%" height="225" />
                    <div class="card-body">
                        <h4 class="h6 card-title text-start link text-capitalize"
                            onclick="window.location.href='news/{{ $new->url }}'">
                            {{ $new->title }}
                        </h4>
                        <p class="card-text">
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
</div>
