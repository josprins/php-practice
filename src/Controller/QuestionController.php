<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
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
        $answers = [
            "This is an answer",
            "Honey is sweet",
            "The moon is grey ",
            "I love icecream "
        ];

        return  $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);
    }
}