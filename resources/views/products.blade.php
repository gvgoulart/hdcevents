@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
pagina de produtos

@if ($busca != '')
    O usuário esta buscando por: {{ $busca}}
@endif
@endsection