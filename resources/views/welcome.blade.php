@extends('layouts.main')

@section('title', 'RAVE Events')

@section('content')

<h1>Teste</h1>
<img src="/img/banner.jpg" alt="" srcset="">
@if(10 < 5)
    <p>Condição é true</p>
@endif

<p>{{$nome}}</p>

@if($nome == "Luis")
<p>O nome é Pedro</p>
@else
<p>O nome é {{ $nome }}</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }} - {{ $i }}</p>
    @if($i == 2)
        <p>o i é 2</p>
    @endif
@endfor

<!-- Comentário HTML -->

@endsection