@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Fumetti Home</h1>

    <table class="table-responsive">
        <div class="table table-secondary">
            <thead>
                <tr>
                    <th scope="col">asda</th>
                    <th scope="col">asda</th>
                    <th scope="col">asda</th>
                </tr>
            </thead>
            <tbody>
                foreelse ($fumettis as $fumetti)
                <tr class="">
                    <td scope="row">asdasd</td>
                    <td scope="row">asdasd</td>
                    <td scope="row">asdasd</td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </div>    
    </table>
</div>
@endsection