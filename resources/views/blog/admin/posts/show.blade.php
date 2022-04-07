@extends('blog.admin.layouts.master')

@section('content')
<main class="blog-post">
    <div class="container">
        <h1 data-aos="fade-up">{{ $post->title }}</h1>
        <p data-aos="fade-up" data-aos-delay="200">Written by Richard Searls• February 1, 2019• 6:31 pm• {{ $post->category->title }} • 4 Comments</p>
        <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
            <img src="{{asset('img/320x240.jpeg')}}" class="rounded mx-auto d-block" alt="featured image" class="w-60">
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto text-center" data-aos="fade-up">
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection

