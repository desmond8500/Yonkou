@extends('loc.index.layout')

@section('content')
  {{-- @dump($clients) --}}

  <div class="col-md-12">
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
        <th scope="col">Local</th>
        <th scope="col">Reçu</th>
        <th scope="col">Contrat</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clients as $key => $client)
        <tr>
          <th scope="row">{{ $key+1}}</th>
          <td>{{ $client->prenom }}</td>
          <td>{{ $client->nom }}</td>
          <td>{{ $client->local }}</td>
          <td>
            <a href="{!! route('recuForm',['id'=>$client->id]) !!}" class="btn btn-outline-dark">
              Reçu
            </a>
          </td>
          <td>
            <a href="#" class="btn btn-outline-dark">
              Contrat
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>

@endsection
