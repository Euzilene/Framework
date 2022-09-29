@extends('layout')

@section('sidebar')
<h1>Texto funcional e util</h1>
@endsection

@section('conteudo')

<ul>
   @foreach(@users as $u)
   <li>{{ $u.name}} - {{ $u.email}}</li>

   @endforeach
</ul>
@endsection

