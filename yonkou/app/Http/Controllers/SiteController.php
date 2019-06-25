<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class SiteController extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()    {
       $sites = Site::all();

        return view('simple.pages.index',compact('sites'));
    }
}
