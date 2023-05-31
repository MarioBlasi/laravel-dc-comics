@extends('layouts.app')

@section('content')

<div class="container">
    @if (session('message'))
    <div class="alert alert-{{ session('message_type', 'primary') }} p-2 rounded shadow-lg" role="alert">
        <h4><strong>{{ session('message') }}</strong></h4>
    </div>
    @endif


    
    <div class="row-fluid">
        <div class="col bg-dark rounded mt-5 shadow-lg">
            <h1 class="text-center p-5">Fumetti Home</h1>
        </div>
    </div>

    <a class="btn btn-primary" href="{{route('fumettis.create')}}"role="button">Create +</a>

    <div class="table-responsive mt-5 rounded shadow-lg">
        <table class="table table-secondary shadow">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">IMG</th>
                    <th scope="col">NAME</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">SALE_DATE</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($fumettis as $fumetti)
                    <tr class="col">
                        <td class="p-3" scope="col">{{ $fumetti->id }}</td>
                        <td class="p-3">
                            <img width="300" height="300" src="{{ $fumetti->thumb }}" alt="">
                        </td>
                        <td>{{ $fumetti->title }}</td>
                        <td>{{ $fumetti->description }}</td>
                        <td>{{ $fumetti->sale_date }}</td>
                        <td>{{ $fumetti->price }}</td>
                        <td class="shadow">
                            <button type="button" class="btn btn-dark w-100 "><a href="{{ route('fumettis.show', $fumetti->id) }}">View</a></button>
                            <button type="button" class="btn btn-light  w-100 "><a href="{{ route('fumettis.update', $fumetti->id) }}">Edit</a></button>
                            <form action="{{ route('fumettis.destroy', $fumetti->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger " type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="">
                        <td>No results</td>
                    </tr>
                @endforelse
            </tbody>
            
        </table>    
    </div>
</div>
@endsection