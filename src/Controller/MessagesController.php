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
     * @Route("/", name="messages_index")
     */
    public function index(MessagesRepository $messagesRepository): Response
    {
        return $this->render('messages/index.html.twig', [
            'messages' => $messagesRepository->findAll(),
        ]);
    }

/**
     * @Route("/rechercheMessages/{id}", name="rechercheMessages_index", methods={"GET","POST"})
     */
    public function rechercheMessages(MessagesRepository $messagesRepository): Response
    {
        $messages = $messagesRepository-> findByMessagesCivilite();
    return $this->render('messages/rechercheMessage.html.twig', [
        'id' => $messages ->getId(),
        'messages' => $messages,
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

            return $this->redirectToRoute('messages_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('messages/formulaireMessages.html.twig', [
            'messages' => $messages,
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

            return $this->redirectToRoute('messages_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('messages/nouvelMessage.html.twig', [
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
            'messages' => $messages,
        ]);
    }

    /**
     * @Route("/modifierMessage/{id}", name="modifierMessage_index", methods={"GET","POST"})
     */
    public function modifierMessage(Request $request, Messages $messages): Response
    {
        $form = $this->createForm(MessagesType::class, $messages);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$this->getDoctrine()->getManager()->flush();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($messages);
            $entityManager->flush();

            return $this->redirectToRoute('messages_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('messages/modifierMessage.html.twig', [
            'messages' => $messages,
            'formMessages' => $form->createView(),
        ]);
    }

// SUPPRESSION DES messages :
    /**
     * @Route("/supprimerMessages/{id}" , name="supprimerMessages_index", methods= {"GET","POST"})
     */
    public function supprimerMessages(Request $request, Messages $messages , EntityManagerInterface $entityManager) : Response 
    {           
            $entityManager->remove($messages);
            $entityManager->flush();
            return $this->redirectToRoute('messages_index'); 
    }






}
