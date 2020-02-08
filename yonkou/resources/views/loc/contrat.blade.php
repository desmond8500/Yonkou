@extends('loc.layout.layout')

@section('content')

<ol>
    @foreach ($clients as $client)
        <li>
            <a href="">
                {{ $client->prenom }} {{ $client->nom }}
            </a>
        </li>
    @endforeach
</ol>

@endsection
