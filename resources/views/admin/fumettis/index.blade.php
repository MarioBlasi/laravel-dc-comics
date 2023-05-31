@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col bg-dark rounded mt-5">
            <h1 class="text-center p-5">Fumetti Home</h1>
        </div>
    </div>

    <div class="table-responsive mt-5 rounded">
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
                        <td class="text-dark color-dark">
                            <a href="{{ route('fumettis.show', $fumetti->id) }}">View</a>
                            <a href="{{ route('fumettis.update', $fumetti->id) }}">Edit</a>
                            <form action="{{ route('fumettis.destroy', $fumetti->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="">
                        <td colspan="7">No results</td>
                    </tr>
                @endforelse
            </tbody>
            
        </table>    
    </div>
</div>
@endsection