<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset("style.css")}}">
        <title>TESTE CLICKWEB</title>
    </head>
    <body>
        <div id="container">
            <div id="cabecalho">
                <div class="cab_titulo">CLICKNEWS</div>
                <div class="cab_data">
                    <a href="{{ route("home") }}">Home</a> - 
                    <a href="{{ route("noticia.index") }}">Listar Notícias</a> - 
                    Notícias Clickweb - {{ date("d/m/Y") }}</div>
            </div>
            <div id="corpo">
            @yield('conteudo')
            </div>
        <div id="rodape">Teste feito por Flavio Ribeiro Tubino - (48) 98447-1406</div>
        </div>
    </body>
</html>
