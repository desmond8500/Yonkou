@extends('loc.layout.layout')

@section('content')
<fieldset class='box-primary'>
  <div class='titre g'>QUITTANCE DE LOYER</div>
  <div class='entete'>
    Momar DIAGNE <br>
    Tel: 77 647 27 35 <br>
    Cité Hilal, Km 8 BCCD <br>
  </div>

    echo "<div class='bod'>

    Reçu de M. <span class='g'>".$donnees['prenom']." ".$donnees['nom']."</span>, la somme de <span class='g'>".number_format($donnees['prix'], 0, ',', ' ')." Francs </span> au titre du paiement du loyer du logement sis au 180, cité Hilal, Km 8 Boulecard de la commune de Dakar. <br><br>

      <div class='periode'>
      Période du ";
      $today = date("m-Y");
    //echo "01-".$today." au 30-".$today."</div> ";
    echo "01-".$mois."-2018 au 30-".$mois."-2018</div> ";

    echo" <div class='periode'>
            Date de règlement: ".$date."
          </div>";
    echo '</fieldset> ';
    } $reponse->closeCursor();

}

elseif (htmlspecialchars($_POST['location'])=="caution") {
  # code...

  $reponse = $bdd->prepare('SELECT * FROM loc_clients WHERE local1 = ? AND depart="0" ');
  $reponse->execute(array($recu1));
  while ($donnees = $reponse->fetch())
  {

    echo "<fieldset class='box-primary'>
          <div class='titre g'>CAUTION DE LOYER</div>
          <div class='entete'>
            Momar DIAGNE <br>
            Tel: 77 647 27 35 <br>
            Cité Hilal, Km 8 BCCD <br>
          </div>
          <div class='date'>
            Date: ";
            $today = date("d-m-Y");
            echo $today;
            echo "<br>
            Logement: ".$donnees['local1']."
          </div>
    ";

    echo "<div class='bod'>

    Reçu de M. <span class='g'>".$donnees['prenom']." ".$donnees['nom']."</span>, la somme de <span class='g'>" .number_format($donnees['garantie'], 0, ',', ' ')." Francs </span> au titre du paiement de la caution du logement sis au 180, cité Hilal, Km 8 Boulecard de la commune de Dakar. <br><br> ";

    echo" <div class='periode'>
            Date de règlement: ".$donnees['arrivee']."
          </div>";
    echo '</fieldset> ';
    } $reponse->closeCursor();
 }

?>

@endsection
