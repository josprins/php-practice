<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     *@Route("/")
     */
    public function homepage()
    {
        return new Response('What a beautiful day!');
    }

    /**
     *@Route("/show/{slug}")
     */
    public function show($slug)
    {
        return new Response(printf('Random word goes here: %s ', ucwords($slug)));
    }
}