<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]
    public function homepage() : Response
    {
        return new Response("Ca marche !");
    }

    #[Route('/browse/{genre}')]
    public function browse(string $genre = null) : Response
    {
        if ($genre)
        {
            $title = "Genre : " . str_replace("-", " ", $genre);
            $title = u($title)->title(true);
            //$title = ucwords($title); // equivalent
        }
        else $title = "Select a genre :";

        return new Response($title);
    }
}