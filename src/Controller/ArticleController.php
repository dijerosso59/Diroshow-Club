<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/articles/{id}', name: 'app_article')]
    public function show(int $id, ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->find($id);

        if (!$article) {
            throw $this->createNotFoundException('No product found for id ' . $id);
        }

        return $this->render('article/show.html.twig', [
            'article' => $article
        ]);
    }
}
