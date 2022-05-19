<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Accueil()
    {
        return view("Accueil");
    }

    public function Contact()
    {

        return view("Contact");

    }    public function recupcontact(Resquet $resquet)
    {

        return view("Contact");
    }

    public function Planetarium()
    {
        return view("Planetarium");
    }

    public function ExpoPermanante()
    {
        return view("ExpoPermanante");
    }

    public function Calendrier()
    {
        return view("Calendrier");
    }

    public function Goodies()
    {
        $liens = DB::table("image")->select("lien")->get();
//        dd($liens);
        return view("galerry",[
            "liens"=>$liens,
        ]);
    }

    public function gate()
    {
        return view("gate");
    }

    public function gate2()
    {
        return view("gate2");
    }

    public function CarteCeleste()
    {
        return view("CarteCeleste");
    }

    public function CarteCeleste2()
    {
        return view("CarteCeleste2");
    }

    public function CarteCeleste3()
    {
        return view("CarteCeleste3");
    }

    public function CarteCeleste4()
    {
        return view("CarteCeleste4");
    }

    public function CarteCeleste5()
    {
        return view("CarteCeleste5");
    }

    public function Telescope()
    {
        return view("Telescope");
    }
}

