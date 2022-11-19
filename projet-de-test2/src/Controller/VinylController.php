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

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null) : Response
    {
        if ($slug)
        {
            $title = "Genre : " . str_replace("-", " ", $slug);
            $title = u($title)->title(true);
            //$title = ucwords($title); // equivalent
        }
        else $title = "Select a genre :";

        return new Response($title);
    }
}