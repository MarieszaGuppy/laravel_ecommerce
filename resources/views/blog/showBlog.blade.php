@extends('layouts.main')

@section('header')
    <style>
        .height-image {
            height: 40rem;
        }

        @media(max-width:900px) {
            .height-image {
                height: 20rem;
            }
        }

        @media(max-width:500px) {
            .height-image {
                height: 14rem;
            }
        }
    </style>
@endsection

@section('container')
    {{-- @dd($article) --}}
    <div class="container py-4 pb-5">
        <button onclick="location.href='{{ route('blog') }}'" class="btn btn-success d-md-inline-flex"><i
                class='bx bx-chevron-left'></i></button>
        <div class="mb-4">
            <h1 class="display-5 fst-italic mb-3">{{ $article->title }}</h1>
            <h6 class="blog-post-meta text-secondary fw-medium">
                <spam class="text-secondary">( {{ $article->created_at }} )</spam>
            </h6>
        </div>
        <div class="bg-body-secondary d-flex justify-content-center height-image">
            @if ($article->image)
                <img src="{{ asset('assets/blogs/' . $article->image) }}" alt="" class="img-fluid"
                    style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
            @endif
        </div>
        <article class="blog-post py-4 mb-5">
            <p>{!! $article->body !!}</p>
        </article>
        <a href="{{ route('blog') }}" class="btn btn-success">Back</a>
    </div>
@endsection
