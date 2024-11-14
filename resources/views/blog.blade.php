@extends('layouts.main')
@section('container')
    <div class="container col-xxl-10 px-4 py-5">
        <main class="container">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Fashion</strong>
                        <h3 class="mb-0">Dressing for Dark Days: How I Found Solace After the Election</h3>
                        <div class="mb-1 text-body-secondary">14 Nov</div>
                        <p class="card-text mb-auto">
                            {{ Str::limit('This is the blog content. We should change this later.', 40, '...') }}
                        </p>
                        <a href="" style="text-decoration: none; color:black"
                            class="icon-link gap-1 icon-link-hover stretched-link">Continue reading...<box-icon
                                name='chevron-right'></box-icon></a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img h-100" width="200" height="100%"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Thumbnail</title>
                            <image href="{{ asset('assets/blog.jpeg') }}" width="100%" height="100%"
                                preserveAspectRatio="xMidYMid slice" />
                        </svg>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
