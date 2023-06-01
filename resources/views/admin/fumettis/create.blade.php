@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row rounded shadow-lg">
    @include('partials.validation_errors')

    <h1 class="bg-dark rounded text-center shadow-lg">Fumetti create</h1>
    
    <form action="{{ route('fumettis.store') }}" method="post">
        @csrf
       
          <div class="mb-3 mt-5">
            <label for="title" class="form-label text-dark"><strong>title</strong></label>
            <input type="text" name="title" id="title" 
                  class="form-control @error('title') is-invalid @enderror" 
                  aria-describedby="titleHelper" placeholder="" 
                  value="{{ old('title') }}" required>
            <small id="titleHelper" class="text-muted">Type the fumetti name max:200 characters</small>
            @error('title')
              <div class="alert alert-danger" role="alert">
                <strong>Titolo ha un ERRORE :</strong>{{$message}}
              </div>
            @enderror  
          </div> 
          <!-- title -->
          <div class="mb-3">
            <label for="thumb" class="form-label text-dark"><strong>thumb</strong></label>
            <input type="text" name="thumb" id="thumb" 
            class="form-control @error('thumb') is-invalid @enderror" 
            value="{{ old('thumb') }}" required 
            aria-describedby="thumbHelper" placeholder="">
            <small id="thumbHelper" class="text-muted">https:/</small>
            @error('thumb')
              <div class="alert alert-danger" role="alert">
                <strong>l'immagine ha un ERRORE :</strong>{{$message}}
              </div>
            @enderror 
          </div>
           <!--thumb/image -->
          <div class="mb-3">
            <label for="description" class="form-label text-dark"><strong>description</strong></label>
            <input type="text" name="description" id="description"
            class="form-control @error('description') is-invalid @enderror" 
            value="{{old('description')}}" required
             aria-describedby="descriptionHelper" placeholder="">
            <small id="descriptionHelper" class="text-muted">description</small>
            @error('description')
              <div class="alert alert-danger" role="alert">
                <strong>la Descrizione ha un ERRORE :</strong>{{$message}}
              </div>
            @enderror 
          </div>
           <!--description -->
          <div class="mb-3">
            <label for="price" class="form-label text-dark"><strong>price</strong></label>
            <input type="number" name="price" id="price" 
            class="form-control @error('price') is-invalid @enderror" 
            value="{{old('price')}}" required
            aria-describedby="priceHelper" placeholder="£ 99.99">
            <small id="priceHelper" class="text-muted">price</small>
            @error('price')
              <div class="alert alert-danger" role="alert">
                <strong>il prezzo da ERRORE :</strong>{{$message}}
              </div>
            @enderror 
          </div>
           <!--price -->
          <div class="mb-3">
            <label for="sale_date" class="form-label text-dark"><strong>sale_date</strong></label>
            <input type="date" name="sale_date" id="sale_date" 
            class="form-control @error('sale_date') is-invalid @enderror" 
            value="{{old('sale_date')}}" required
            aria-describedby="sale_dateHelper" placeholder="£ 99.99">
            <small id="sale_dateHelper" class="text-muted">sale_date</small>
            @error('sale_date')
              <div class="alert alert-danger" role="alert">
                <strong>dati di vendita non sono CORRETTI:</strong>{{$message}}
              </div>
            @enderror 
          </div>
          <!--sale_date -->
          <div class="form-check">
            <input class="form-check-input " type="checkbox" value="1" id="">
            <label class="form-check-label text-dark" for="">
              Demo Available?
            </label>
          </div>

          <div class="mb-3">
            <label for="description " class="form-label text-dark"><em><strong>description</strong></em></label>
            <textarea class="form-control  @error('description') is-invalid @enderror" 
            name="description" id="description" rows="5">{{old('description')}}</textarea>
            @error('description')
                <div class="alert alert-danger" role="alert">
                  <strong>Description, ERROR :</strong>{{$message}}
                </div>
            @enderror 
          </div>

          <button type="submit" class="btn btn-primary btn-lg btn-block m-3">Add Fumetti</button>
    </form>
  </div>  
</div>
@endsection


