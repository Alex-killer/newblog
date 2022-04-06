@extends('blog.admin.layouts.master')

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
                <th colspan="3">Действия</th>
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
                <td><a href="#" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                <td><a href="#"><i class="far fa-eye"></i></a></td>
                <td>
                <form action="#" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="border-0 bg-opacity">
                        <i class="fas fa-trash text-danger" role="button"></i>
                    </button>
                </form>
                </td>
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

