<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Site;
class SiteController extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()    {
       // $sites = Site::all();
       $site1 = array(
           'titre'=>'Yonkou Courses',
           'lien'=>'courses.yonkou.info',
           'description' => 'Divers cours en matière d developpement'
        );
       $site2 = array(
           'titre'=>'Yonkou Muslim',
           'lien'=>'muslim.yonkou.info',
           'description' => 'Informations utiles sur la religion musulmane'
        );
       $site3 = array(
           'titre'=>'Yonkou Security',
           'lien'=>'security.yonkou.info',
           'description' => ''
        );
       $site4 = array(
           'titre'=>'Yonkou CV',
           'lien'=>'cv.yonkou.info',
           'description' => 'Gestion de CV'
        );
       $site5 = array(
           'titre'=>'Yonkou Immo',
           'lien'=>'immo.yonkou.info',
           'description' => ''
        );
       $site6 = array(
           'titre'=>'Yonkou Projects',
           'lien'=>'project.yonkou.info',
           'description' => 'Gestion de projets'
        );
       $site7 = array(
           'titre'=>'Yonkou Task',
           'lien'=>'task.yonkou.info',
           'description' => ''
        );

       $sites = array($site1,$site2,$site4,$site6);

        return view('landing',compact('sites'));
        // return view('simple.pages.index',compact('sites'));
    }
}
