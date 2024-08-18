<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtablissementsController extends AbstractController
{
    #[Route("/etablissements", name: "app_Etablissements")]
    public function etablissements(): Response
    {
        $books = [
            ['id' => 1, 'title' => '1984', 'author' => 'George Orwell'],
            ['id' => 2, 'title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee'],
            ['id' => 3, 'title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
        ];

        return $this->render('welcome.html.twig', [
            'books' => $books,
        ]);
    }
}