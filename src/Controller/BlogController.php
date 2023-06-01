<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/', name: 'app_blog')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $articleRepository = $doctrine->getRepository(Article::class);
        $articles = $articleRepository->findAll();

        return $this->render('blog/blog.html.twig', [
            'articles' => $articles,
        ]);
    }
}
