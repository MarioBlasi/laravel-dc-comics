@extends('layouts.app')

@section('content')
<div class="contaner text-dark">
    <div class="row ">
        <div class="col text-center shadow-lg text-light bg-secondary">
            <img class="shadow-lg " width="300" height="300" src="{{ $fumetti->thumb }}" alt="">
            <h1>Fumetti show</h1>
            <p>
                {{$fumetti->description}}
            </p>

        </div>

    </div>

</div>
@endsection