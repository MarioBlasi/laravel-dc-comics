@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center p-5">Fumetti Home</h1>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-secondary">
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
                    <td class="p-3" scope="col">{{$fumetti->id}}</td>
                    <td class="p-3">
                        <img width="300" height="300" src="{{$fumetti->thumb}}" alt="">
                    </td>
                    <td>{{$fumetti->title}}</td>
                    <td>{{$fumetti->description}}</td>
                    <td>{{$fumetti->sale_date}}</td>
                    <td>{{$fumetti->price}}</td>
                    <td class="text-dark color-dark">
                        a b c
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