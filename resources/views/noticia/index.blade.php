@extends('layouts.layout')
@section('conteudo')

        <h1>Notícias</h1>
        <table class="tabela_horizontal">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Título</th>
                    <th>Resumo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($noticias as $noticia)
                <tr>
                    <td>{{ date("d/m/Y", strtotime($noticia->datahora)) }}</td>
                    <td><a href="{{ route('noticia.show',['noticium'=>$noticia->id]) }}"><b>{{$noticia->titulo}}</b></a></td>
                    <td>{{ substr($noticia->resumo, 0, 150)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        

@endsection