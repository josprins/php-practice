<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     *@Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment)
    {
//        $html = $twigEnvironment->render('question/homepage.html.twig');
//        return new Response($html);

        return $this->render('question/homepage.html.twig');
    }

    /**
     *@Route("/show/{slug}", name="app_question_show")
     */
    public function show($slug)
    {
        $answers = [
            "This is an answer",
            "Honey is sweet",
            "The moon is grey ",
            "I love icecream "
        ];

        dump($slug, $this);

        return  $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);
    }
}