@extends('loc.index.layout')

@section('content')
  <div class="col-md-5">
    <div class="card">
      <div class="card-header bg-dark text-light">
        Formulaire de reçu
      </div>
      <div class="card-body">
        {{ $client->prenom }}  {{ $client->nom }} <br>
        Local : {{ $client->local }}
        <form action="/recu" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <input type="text" class="form-control" name="id" value="{{ $client->id }}" >
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="date" >
          </div>
          <div class="form-group">
            <select class="form-control" name="mois">
              <option value="Janvier">Janvier</option>
              <option value="Février">Février</option>
              <option value="Mars">Mars</option>
              <option value="Avril">Avril</option>
              <option value="Mai">Mai</option>
              <option value="Juin">Juin</option>
              <option value="Juillet">Juillet</option>
              <option value="Aout">Aout</option>
              <option value="Septembre">Septembre</option>
              <option value="Octobre">Octobre</option>
              <option value="Novembre">Novembre</option>
              <option value="Decembre">Decembre</option>
            </select>
          </div>
          <button type="submit" class="btn btn-outline-dark">Valider</button>
        </form>

      </div>
    </div>
  </div>

@endsection
