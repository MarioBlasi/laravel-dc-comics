
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
        <main class="bg-light text-light mt-5">
            @yield('content')
          
        </main>
        @include('partials.footer')
    </body>
</html>
