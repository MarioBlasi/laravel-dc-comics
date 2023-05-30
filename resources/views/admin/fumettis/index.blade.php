@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Fumetti Home</h1>

    <div class="table-responsive">
        <table class="table table-secondary">
            <thead>
                <tr>
                    <th class="p-3" scope="col">ID</th>
                    <th scope="col">IMG</th>
                    <th scope="col">NAME</th>
                    <th scope="col">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($fumettis as $fumetti)
                <tr class="col">
                    <td class="p-3" scope="col">{{$fumetti->id}}</td>
                    <td class="p-3">
                        <img width="300" height="300" src="{{$fumetti->thumb}}" alt="">
                    </td>
                    <td>{{$fumetti->name}}</td>
                    <td class="text-dark">
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