<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public static function online(){ // vérifier si la connexion internet est active
      if (!$sock = @fsockopen('www.google.fr', 80, $num, $error, 5))
        return false;
      else
        return true;
    }

    public static function dateFR( $time ) { // Afficher la date en francais
      setlocale( LC_TIME, "fr" );
      return strftime( "%A %d %b %Y" , strtotime( $time ) );
    }

    public static function jour( $jour ) {
        switch (strtolower($jour)) {
          case 'monday':    $jour = 'Lundi';    break;
          case 'Tuesday':   $jour = 'Mardi';    break;
          case 'Wednesday': $jour = 'Mercredi'; break;
          case 'Thursday':  $jour = 'Jeudi';    break;
          case 'Friday':    $jour = 'Vendredi'; break;
          case 'Saturday':  $jour = 'Samedi';   break;
          case 'sunday':    $jour = 'Dimanche'; break;
        }
      return $jour;
    }
    public static function mois( $mois ) {
        switch (strtolower($mois)) {
          case 'january':   $mois = 'Janvier';    break;
          case 'february':  $mois = 'Février';    break;
          case 'march':     $mois = 'Mars';       break;
          case 'april':     $mois = 'Avril';      break;
          case 'may':       $mois = 'Mai';        break;
          case 'june':      $mois = 'Juin';       break;
          case 'july':      $mois = 'Juillet';    break;
          case 'august':    $mois = 'Aout';       break;
          case 'september': $mois = 'Septembre';  break;
          case 'october':   $mois = 'Octobre';    break;
          case 'november':  $mois = 'Novembre';   break;
          case 'december':  $mois = 'Décembre';   break;
        }
      return $mois;
    }


}
