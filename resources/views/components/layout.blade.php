<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>sito dentista</title>
  </head>
  <body>

    <x-navbar/>

    {{$slot}}

    <x-footer/>

    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>