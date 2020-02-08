@extends('loc.layout.layout')

@section('content')
  @foreach($mois as $item)
    <fieldset class='box-primary'>
      <div class='titre g'>QUITTANCE DE LOYER</div>
      <div class='entete'>
        Momar DIAGNE <br>
        Tel: 77 647 27 35 <br>
        Cité Hilal, Km 8 BCCD <br>
      </div> <br>

      <div class="date">
        <b>Date:</b> {{ $date }} <br>
        <b>Logement: </b> {{ $client['local1'] }} <br>
      </div>

      <div class="bod">
        Reçu de M. <b>{{  $client['prenom'] }} {{  $client['nom'] }}</b>,
        la somme de <b>{{ $client['prix'] }} Francs </b>
        au titre du paiement du loyer du logement sis au 180, cité Hilal, Km 8 Boulecard
        de la commune de Dakar. <br><br>

        <div>
          <span class="w">Période du :</span> <b>01-{{ $item }} au 30-{{ $item }} 2019</b>
        </div>

        <div>
          <span class="w">Date de règlement: </span> <b>{{ $date }} </b>
        </div>
      </fieldset>
      <br>
      {{-- <div class="ligne"></div> --}}
  @endforeach

@endsection
