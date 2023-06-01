<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/articles/{id}', name: 'app_article')]
    public function show(Request $request,int $id, ArticleRepository $articleRepository,EntityManagerInterface $entityManager): Response
    {
        $article = $articleRepository->find($id);


       
        if (!$article) {
            throw $this->createNotFoundException('No product found for id ' . $id);
        }

        $comment=new Comment();

        $form = $this->createForm(CommentType::class, $comment);
        
        $form->handleRequest($request);

        $comments = $article->getComments();
        if ($form->isSubmitted() && $form->isValid()) {
             /** @var \App\Entity\User $user */
            $user = $this->getUser();
            if(!$user){
                return $this->redirectToRoute('app_login');
            }
            $formData = $form->getData();
            $comment->setUser($user);
            $comment->setArticle($article);
            $comment->setDate(new \DateTime('now'));
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->render('article/show.html.twig', [
                'article' => $article,
                'comments' => $comments,
                'form' =>  $form->createView(),           
            ]);
        }

        return $this->render('article/show.html.twig', [
            'article' => $article,
            'comments' => $comments,
            'form' =>  $form->createView(),
        ]);
    }
}
