@extends('simple.app')

@section('content')
    @foreach ($sites as $site)
        {{ $site}}
    @endforeach
    <h1> Bienvenue sur Yonkou Apps </h1>
    <p>Yonkou Apps est un emnsemble de plateformes traitant divers domaines</p>

@endsection
