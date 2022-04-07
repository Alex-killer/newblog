@extends('blog.layouts.master')

@section('content')
<div class="container">
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col">Категория</th>
                <th scope="col">Дата создания</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->category->title }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="mt-3">
                {{ $posts->withQueryString()->links() }}
            </div>
        </div>
    </section>
</div>
@endsection

