<fieldset class='box-primary'>
  <div class='titre g'>QUITTANCE DE LOYER</div>
  <div class='entete'>
    Momar DIAGNE <br>
    Tel: 77 647 27 35 <br>
    Cité Hilal, Km 8 BCCD <br>
  </div> <br>

  <div>
    Reçu de M. <b>{{  $client['prenom'] }} {{  $client['nom'] }}</b>,
    la somme de <b>{{ $client['prix'] }} Francs </b>
    au titre du paiement du loyer du logement (<b>Appartement {{ $client['local1'] }}</b>) sis au 180, cité Hilal, Km 8 Boulecard
    de la commune de Dakar. <br><br>

    <div>
      <span class="w">Période du :</span> <b>01-{{ $mois }} au 30-{{ $mois }} 2019</b>
    </div>

    <div>
      <span class="w">Date de règlement:</span> <b>{{ $date }}</b>
    </div>
  </fieldset>
