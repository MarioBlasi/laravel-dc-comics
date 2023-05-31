@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="bg-dark rounded text-center shadow-lg">Fumetti create</h1>
    
    <form action="{{route('fumettis.store')}}"method="post">
        @csrf
       
        <div class="mb-3">
          <label for="name" class="form-label text-dark">Name</label>
          <input type="text" class="form-control" name="name" id="name" class="form-control" aria-describedby="nameHelper" placeholder="">
          <small id="nameHelper" class="text-muted">Type the fumetti name max:200 characters</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label text-dark">thumb</label>
            <input type="text" class="form-control" name="thumb" id="thumb" class="form-control" aria-describedby="thumbHelper" placeholder="">
            <small id="thumbHelper" class="text-muted">images</small>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label text-dark">description</label>
            <input type="text" class="form-control" name="description" id="description" class="form-control" aria-describedby="descriptionHelper" placeholder="">
            <small id="descriptionHelper" class="text-muted">description</small>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label text-dark">price</label>
            <input type="text" class="form-control" name="price" id="price" class="form-control" aria-describedby="priceHelper" placeholder="99.99">
            <small id="priceHelper" class="text-muted">price</small>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="0" id="">
            <label class="form-check-label text-dark" for="">
              Default checkbox
            </label>
          </div>
          <div class="mb-3">
            <label for="description " class="form-label text-dark"><em>Description</em> </label>
            <textarea class="form-control" name="description" id="description" rows="5"></textarea>
          </div>
    </form>
</div>
@endsection