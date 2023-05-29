
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crea Fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Descrizione:</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection

