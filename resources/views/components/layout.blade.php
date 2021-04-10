<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>sito dentista</title>
  </head>
  <body>

    <x-navbar/>

    {{$slot}}





    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>