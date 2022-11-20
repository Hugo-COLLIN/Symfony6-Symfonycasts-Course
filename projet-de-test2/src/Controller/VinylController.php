<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(/*Environment $twig*/) : Response
    {
        $tracks1 = [
            'Gangsta\'s paradise - Coolio',
            'Waterfalls - TLC',
        ];

        $tracks2 = [
            ["title" => 'Gangsta\'s paradise', "artist" => 'Coolio'],
            ["title" => 'Waterfalls', "artist" => 'TLC'],
        ];

        //dd($tracks2);
        //dump($tracks2);
        //dump();
        /*return $this->render('vinyl/homepage.html.twig', [
            'title' => "Music App",
            'tracks1' => $tracks1,
            'tracks2' => $tracks2,
        ]);*/

        return $this->render('vinyl/homepage.html.twig', [
            'title' => "Music App",
            'tracks1' => $tracks1,
            'tracks2' => $tracks2,
        ]);

//        $html = $twig->render('vinyl/homepage.html.twig', [
//            'title' => "Music App",
//            'tracks1' => $tracks1,
//            'tracks2' => $tracks2,
//        ]);
//
//        return new Response($html);
    }

    #[Route('/browse/{slug}', name: 'app_browse')]
    public function browse(string $slug = null) : Response
    {
        $genre = $slug ? u("Genre : " . str_replace("-", " ", $slug))->title(true) : null;

        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre,
        ]);
    }
}