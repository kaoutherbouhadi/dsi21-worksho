<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function test() {
        $name = "Ouali";
        $details = ['50% coton', '30% laine', '20% polyester'];
        $months = array(
			"blue" 		=> "Janvier",
			"white" 	=> "Février",
			"red" 		=> "Mars",
			"yellow" 	=> "Avril",
			"grey" 		=> "May",
			"lime" 		=> "Juin",
			"lightblue" => "Juillet",
			"fuchsia" 	=> "Aout",
			"lightgrey" => "Septembre",
			"olive" 	=> "Octobre",
			"pink" 		=> "Novembre",
			"purple" 	=> "Décembre"
		);

        return view('test', ['name' => $name, 'details' => $details, 'months' => $months]);
    }
}
