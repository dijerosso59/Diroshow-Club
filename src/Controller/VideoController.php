<?php

namespace App\Controller;

use App\Entity\Video;
use App\Form\VideoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
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
    public function index(Request $request): Response
    {
        $video = new Video();
        // if($user->getRoles() == ['ROLE_ADMIN']){
            // $video->setIsPublic(true);
        // }

            // var_dump($user);
           $form = $this->createForm(VideoType::class, $video);
           $user = $this->security->getUser(); // null or UserInterface, if logged in
  

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $video = $form->getData();
            
            // ... perform some action, such as saving the task to the database

            return $this->redirectToRoute('app_video');
        }

        return $this->render('video/index.html.twig', [
            'form' =>  $form->createView(),
            // 'user' => $user->getRoles(),
        ]);
    }
}
