
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comics</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-primary">Create Comic</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></td>
                        <td>{{ $comic->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
