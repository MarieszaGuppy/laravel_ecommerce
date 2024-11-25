@extends('layouts.main')
@section('header')
    <style>
        h3 {
            color: #23a548;
        }

        .card-fixed-height {
            min-height: 350px;
            /* Sesuaikan dengan tinggi yang diinginkan */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .hero-image-container {
            margin-top: 4.5rem;
            position: relative;
        }

        .hero-image {
            background: url('{{ asset('assets/blogs/banner.jpg') }}') no-repeat center center;
            background-size: cover;
            height: 400px;
            /* Sesuaikan tinggi header gambar */
        }

        .hero-image .overlay {
            background: rgba(0, 0, 0, 0.5);
            /* Efek gelap transparan */
            height: 100%;
            width: 100%;
        }

        .hero-image h1,
        .hero-image p {
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
        }

        .category-nav ul {
            padding: 0;
            margin: 0;
        }

        .category-nav ul li a {
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            text-transform: capitalize;
            transition: all 0.3s ease-in-out;
        }

        .category-nav ul li a.active {
            background-color: #000;
            color: #fff;
        }

        .category-nav ul li a:hover {
            background-color: #333;
            color: #fff;
        }

        .rounded-pagination .page-link {
            color: #444;
            background: #f8f9fa;
            border: none;
            border-radius: 50px;
            padding: 8px 16px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .rounded-pagination .page-link:hover {
            background: #6c63ff;
            color: #fff;
            box-shadow: 0 4px 8px rgba(108, 99, 255, 0.3);
        }

        .rounded-pagination .page-item.active .page-link {
            background: #ff6584;
            color: #fff;
            box-shadow: 0 4px 8px rgba(255, 101, 132, 0.4);
        }
    </style>
@endsection

<div class="hero-image-container mb-5">
    <div class="hero-image text-white">
        <div class="overlay d-flex flex-column justify-content-center align-items-center text-center">
            <h1 class="display-4 fw-bold">Exploring the Wonders of Fashion</h1>
            <p class="fs-5">An iconic fashion style, make your life colourful, fresh styling and themeful occasions.
            </p>
            <span class="d-block mt-2">By <strong>Theodore Reginald</strong> | 18 Nov 2024 • 10 mins read</span>
        </div>
    </div>
</div>
<div class="col-xxl-10 px-4">
    <div class="categories-container container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <nav class="category-nav">
                    <ul class="list-unstyled d-flex flex-wrap justify-content-center gap-3">
                        <li>
                            <a href="{{ request()->fullUrlWithQuery(['category' => '', 'page' => request('1')]) }}"
                                class="btn btn-outline-dark {{ request('category') == '' ? 'active' : '' }}">All</a>
                        </li>
                        <li>
                            <a href="{{ request()->fullUrlWithQuery(['category' => 'New Product', 'page' => request('1')]) }}"
                                class="btn btn-outline-dark {{ request('category') == 'New Product' ? 'active' : '' }}">New
                                Product</a>
                        </li>
                        <li>
                            <a href="{{ request()->fullUrlWithQuery(['category' => 'Fashion', 'page' => request('1')]) }}"
                                class="btn btn-outline-dark {{ request('category') == 'Fashion' ? 'active' : '' }}">Fashion</a>
                        </li>
                        <li>
                            <a href="{{ request()->fullUrlWithQuery(['category' => 'Trend', 'page' => request('1')]) }}"
                                class="btn btn-outline-dark {{ request('category') == 'Trend' ? 'active' : '' }}">Trend</a>
                        </li>
                        <li>
                            <a href="{{ request()->fullUrlWithQuery(['category' => 'Mix & Match', 'page' => request('1')]) }}"
                                class="btn btn-outline-dark {{ request('category') == 'Mix & Match' ? 'active' : '' }}">Mix
                                & Match</a>
                        </li>
                    </ul>
                </nav>
            </div>
            {{-- <div class="container mt-5">
                <nav aria-label="Gradient Pagination">
                    <ul class="pagination justify-content-center rounded-pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="{{ $articles->previousPageUrl() }}" tabindex="-1"
                                aria-disabled="true">Previous</a>
                        </li>
                        @for ($i = 1; $i <= $articles->lastPage(); $i++)
                            <li class="page-item {{ $articles->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $articles->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item">
                            <a class="page-link" href="{{ $articles->nextPageUrl() }}">Next</a>
                        </li>
                    </ul>
                </nav>
            </div> --}}

        </div>
    </div>
    @section('container')
        <main class="container">
            <div class="row">
                @forelse ($articles as $article)
                    <div class="col-md-6">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative card-fixed-height">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary-emphasis">{{ $article->category }}</strong>
                                <h3 class="mb-0">{{ $article->title }}</h3>
                                <div class="mb-auto text-body-secondary">{{ $article->created_at->format('d M Y') }}</div>
                                <p class="card-text">
                                    {{ Str::limit($article->body, 100, '...') }}
                                </p>
                                <a href="/blog/{{ $article->slug }}" style="text-decoration: none; color:black"
                                    class="icon-link gap-1 icon-link-hover stretched-link">Continue reading...<box-icon
                                        name='chevron-right'></box-icon></a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <svg class="bd-placeholder-img h-100" width="200" height="100%"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Thumbnail</title>
                                    <image href="{{ asset('assets/blogs/' . $article->image) }}" width="100%"
                                        height="100%" preserveAspectRatio="xMidYMid slice" />
                                </svg>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="no-data">
                        <div class="alert alert-danger">
                            Artikel Belum Tersedia.
                        </div>
                    </div>
                @endforelse
            </div>
        </main>
    @endsection
</div>
