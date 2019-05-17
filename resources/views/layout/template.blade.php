<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/design.css') }}">
    <head>
    
    <body>
        @extends('rodape')
        @yield('conteudo')
        @extends('cabecalho')
    </body>
</html>

