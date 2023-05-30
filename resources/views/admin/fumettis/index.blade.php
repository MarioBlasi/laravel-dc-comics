@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Fumetti Home</h1>

    <div class="table-responsive">
        <table class="table table-secondary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">IMG</th>
                    <th scope="col">NAME</th>
                    <th scope="col">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($fumettis as $fumetti)
                <tr class="row">
                    <td scope="row">{{$fumetti->id}}</td>
                    <td>
                        <img with="100" class="img-fluid" src="{{$fumetti->image}}" alt="">
                    </td>
                    <td>{{$fumetti->name}}</td>
                    <td>
                        VIEW/EDIT/DELETE
                    </td>
                </tr>
                @empty
                <tr class="">
                    <td>no results</td>
                </tr>
                @endforelse
            </tbody>
        </table>    
    </div>
</div>
@endsection