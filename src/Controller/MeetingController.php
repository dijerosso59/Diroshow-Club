<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Metting;
use App\Entity\Order;
use App\Entity\Video;
use App\Form\MeetingType;
use App\Form\VideoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class MeetingController extends AbstractController
{

    /**
     * @var Security
     */
    private $security;

    public function __construct(Security $security)
    {
       $this->security = $security;
    }
    #[Route('/meeting', name: 'app_meeting')]
    public function index(Request $request,UserInterface $user,EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $userId = $user->getId();
        if(!$userId){
            return $this->redirectToRoute('app_login');
        }
        
        $meeting = new Metting();
        $form = $this->createForm(MeetingType::class, $meeting);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $meeting->setUser($user);
            $meeting->setDate($formData->getDate());
            $meeting->setLocation($formData->getLocation());
            $meeting->setStatus(0);
            $entityManager->persist($meeting);
            $entityManager->flush();

            $order =new Order();
            $order->setUser($user);
            $order->setMetting($meeting);
            $order->setAmount(100);
            $order->setDate(new \DateTime('now'));
            $order->setStatus(0);
            $order->setVideo(null);
            
            
            $entityManager->persist($order);
            $entityManager->flush();

            return $this->render('meeting/index.html.twig', [
                'form' =>  $form->createView(),
            ]);
        }

        return $this->render('meeting/index.html.twig', [
            'form' =>  $form->createView(),
        ]);
    }
}
