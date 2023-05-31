
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>title fumetto</title>
            <!-- Styles -->
    @vite('resources/js/app.js')
    
    </head>
    <body>
        @include('partials.header')
        <main class="bg-danger text-light mt-5">
           @yield('content')
        </main>
        @include('partials.footer')
        {{-- <div class="container">
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
        </div> --}}
    </body>
</html>
