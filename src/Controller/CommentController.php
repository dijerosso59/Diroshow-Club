<?php
// src/Controller/CommentController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CommentsType;
use App\Entity\Comment;

class CommentController extends AbstractController
{
    /**
     * @Route("/comment", name="comment")
     */
    public function comment(Request $request): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentsType::class, $comment);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Traitez le commentaire ici, par exemple enregistrez-le dans la base de données
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($comment);
            // $entityManager->flush();

            $this->addFlash('success', 'Le commentaire a été ajouté avec succès.');

            // Redirigez l'utilisateur vers la page souhaitée après soumission du formulaire
            return $this->redirectToRoute('homepage');
        }

        return $this->render('comment/comment.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
