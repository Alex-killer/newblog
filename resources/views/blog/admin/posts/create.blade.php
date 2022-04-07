@extends('blog.admin.layouts.master')

@section('content')
    <main class="blog-post">
        <div class="container">

        <h1>Создание поста</h1>

        <hr>

        <form method="POST" action="/admin/posts">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Название</label>
                <input type="text" class="form-control" id="text" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Password</label>
                <input type="content" class="form-control" id="content" name="content">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </main>
@endsection
