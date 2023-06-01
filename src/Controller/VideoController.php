<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Metting;
use App\Entity\Order;
use App\Entity\Video;
use App\Form\VideoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class VideoController extends AbstractController
{
    /**
     * @var Security
     */
    private $security;

    public function __construct(Security $security)
    {
       $this->security = $security;
    }

    #[Route('/video', name: 'app_video')]
    public function index(Request $request,UserInterface $user,EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $userId = $user->getId();
        if(!$userId){
            return $this->redirectToRoute('app_login');
        }

        $video = new Video();
        $form = $this->createForm(VideoType::class, $video);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            
            $formData = $form->getData();
            $video->setUser($user);
            $video->setContent($formData->getContent());
            $video->setStatus(0);
            $entityManager->persist($video);
            $entityManager->flush();
            $videoId=$video->getId();

            $order =new Order();
            $order->setUser($user);
            $order->setVideo($video);
            $order->setAmount(50);
            $order->setDate(new \DateTime('now'));
            $order->setStatus(0);
            $order->setMetting(null);
            
            
            $entityManager->persist($order);
            $entityManager->flush();

            return $this->render('video/index.html.twig', [
                'form' =>  $form->createView(),
                'user' => $user->getId(),
            ]);
        }

        return $this->render('video/index.html.twig', [
            'form' =>  $form->createView(),
            'user' => $user->getId(),

        ]);
    }
}
