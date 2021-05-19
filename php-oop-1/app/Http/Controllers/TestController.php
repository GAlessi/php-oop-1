<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movie {
    public $title;
    public $desc;

    public function __construct($title, $desc = null)
    {
        $this -> title = $title;
        $this -> desc = $desc;

        if (!$desc) {
            $this -> desc = "Descrizione non disponibile";
        }

    }

    public function getString() {
        return "Titolo: " . $this -> title . " --> Description: " . $this -> desc;
    }
}


class TestController extends Controller
{
    public function home()
    {

        $movie1 = new Movie("Ritorno al Futuro", "descrizione 1");
        // $movie1Str = $movie1 -> getString();
        $movie2 = new Movie("Ritorno al Futuro II");
        $movie3 = new Movie("Ritorno al Futuro III", "descrizione 3");

        $movies = [$movie1, $movie2, $movie3];
        $str = "";


        foreach ($movies as $movie) {

            $str .= $movie -> getString() . "\n";
        }
        dd($str);

    }
}
