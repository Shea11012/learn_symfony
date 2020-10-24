<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    /**
     * @Route("/number")
     */
    public function number():Response
    {
        $number = random_int(0,100);
        return new Response(
            "<h1>$number</h1>"
        );
    }
}