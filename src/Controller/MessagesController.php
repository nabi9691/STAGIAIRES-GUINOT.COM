<?php

namespace App\Controller;

use App\Entity\Messages;
use App\Form\MessagesType;

//use Symfony\Component\Mime\Message;
//use Symfony\Component\Mime\Message;
use App\Repository\MessagesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/messages")
 */
class MessagesController extends AbstractController
{
    /**
     * @Route("/", name="message_index")
     */
    public function index(MessagesRepository $messagesRepository): Response
    {
        return $this->render('messages/index.html.twig', [
            'message' => $messagesRepository->findAll(),
        ]);
    }
    
/**
     * @Route("/formulaireMessages", name = "formulaireMessages_index", methods={"GET","POST"})
     */
    public function formulaireMessages(Request $request): Response
    {
        $messages = new Messages();
        
        $form = $this->createForm(MessagesType::class, $messages);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($messages);
            $entityManager->flush();

            return $this->redirectToRoute('message_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('messages/formulaireMessages.html.twig', [
            'message' => $messages,
            'formMessages' => $form->createView(),
        ]);
    }

    /**
     * @Route("/nouveauMessages", name="nouveauMessage_index", methods={"GET","POST"})
     */
    public function nouveauMessages(Request $request): Response
    {
        $messages = new Messages();
        $form = $this->createForm(MessagesType::class, $messages);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($messages);
            $entityManager->flush();

            return $this->redirectToRoute('message_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('messages/nouveauMessage.html.twig', [
            'message' => $messages,
            'formMessages' => $form->createView(),
        ]);
    }

    /**
     * @Route("/afficherMessage/{id}", name="afficherMessage_index", methods={"GET"})
     */
    public function afficherMessage(Messages $messages): Response
    {
        return $this->render('messages/afficherMessage.html.twig', [
            'message' => $messages,
        ]);
    }

/**
     * @Route("/modifierMessages/{id}", name="modifierMessage_index", methods={"GET","POST"})
     */
    public function modifierMessages(Request $request, Messages $messages): Response
    {
        $form = $this->createForm(MessagesType::class, $messages);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($messages);
            $entityManager->flush();

            return $this->redirectToRoute('message_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('messages/modifierMessage.html.twig', [
            'message' => $messages,
            'formMessages' => $form->createView(),
        ]);
    }


// SUPPRESSION DES messages :
    /**
     * @Route("/supprimerMessages/{id}" , name="supprimerMessage_index", methods= {"GET","POST"})
     */
    public function supprimerMessages(Request $request, Messages $messages , EntityManagerInterface $entityManager) : Response 
    {           
            $entityManager->remove($messages);
            $entityManager->flush();
            return $this->redirectToRoute('message_index'); 
    }






}
