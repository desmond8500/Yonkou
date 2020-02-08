<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class LocationController extends Controller
{
    public function index(){
      // $online = MainController::online();
      // var_dump($online);
      return view('loc.index.index');
    }

    public function clients(){
      $clients = Client::all();
      return view('loc.pages.clientListe', compact('clients'));
    }

    public function recuForm($id = null){
      $client = Client::find($id);

      return view('loc.pages.clientRecuForm', compact('client'));
    }

    public function recu(Request $request){
      $client = Client::find($request['id']);
      $client->local = $this->local($client->local);
      $today = date('d/m/Y');
      $date = explode('-', $request['date']);
      $date = $date[2]."/".$date[1]."/".$date[0];
      $recu = [
        "mois" => $request['mois'],
        "date" => $date
      ];

      return view('loc.pages.clientRecu',compact('recu','client','today'));
    }

    public function recuff(Request $request){
      var_dump($request);

      return view('loc.pages.clientRecu', compact('client'));
    }

    public function contrat(){

    }

    public function local($local){
      switch (strtolower($local)) {
        case 'a11': $local = 'Appartement A11'; break;
        case 'a12': $local = 'Appartement A12'; break;
        case 'a13': $local = 'Appartement A13'; break;
        case 'a14': $local = 'Appartement A14'; break;
        case 'a21': $local = 'Appartement A21'; break;
        case 'a22': $local = 'Appartement A22'; break;
        case 'a23': $local = 'Appartement A23'; break;
        case 'a24': $local = 'Appartement A24'; break;
        case 'a31': $local = 'Appartement A31'; break;
        case 'a32': $local = 'Appartement A32'; break;
        case 'a33': $local = 'Appartement A33'; break;
        case 'a34': $local = 'Appartement A34'; break;
      }
    return $local;
    }
}
