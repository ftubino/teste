@extends('layouts.layout')
@section('conteudo')

        <h1 class="titulo_noticia">{{$noticia->titulo}}</h1>
        @if($noticia->imagem)
        <img src="{{ asset($noticia->imagem)}}" class="img_tb">
        @endif
        {!! nl2br($noticia->texto)!!}
        <hr>        
        {{ date("d/m/Y", strtotime($noticia->datahora)) }}

@endsection