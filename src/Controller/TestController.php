<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function hello(): Response
    {
        return new Response('Hello!');
    }

     /**
     * @Route("/helloWorld", name="hello_world")
     *
     * @return Response
     */
    public function helloWorld(): Response
    {
        return new Response('Hello world!');
    }

    /**
     * @Route("/helloName/{name}", name="hello_name")
     *
     * @return Response
     */
    public function helloName(string $name = ""): Response
    {
        return new Response(sprintf('Hello %s!', $name));
    }    

    /**
     * @Route("/printStars/{quantityStars}", name="print_stars", requirements={"quantityStars"="\d+"})
     *
     * @return Response
     */
    public function printStars(int $quantityStars): Response
    {
        $stringStars = "";
        for ($i=0; $i < $quantityStars; $i++){
            $stringStars .= "*";
        }
        return new Response($stringStars);
    }  

}
