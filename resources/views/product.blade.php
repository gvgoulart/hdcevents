@extends('layouts.main')

@section('title', 'Produto')

@section('content')

@if ($id != null)
 <p>Eibindo produto id: {{ $id }}</p>
@endif

@endsection