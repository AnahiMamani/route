@extends('site.layouts.basico')

@section('titulo', 'Sobre Nós')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Olá, eu sou o Super Gestão</h1>
        </div>

        <div class="informacao-pagina">
            <p>O Super Gestão é o sistema online de controle administrativo que pode transformar. </p>
            <p>Desenvolvido com a mais alta tecnoligia para você cuidar do que é mais importante.</p>        
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes Sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 2345-6789</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection    