<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Form\ContactsType;

//use Symfony\Component\Mime\Mediats;

use App\Repository\ContactsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/contacts")
 */
class ContactsController extends AbstractController
{
    /**
     * @Route("/", name="contacts_index")
     */
    public function index(Contacts $contactsRepository): Response
    {
        return $this->render('contacts/index.html.twig', [
            'contacts' => $contactsRepository->findAll(),
        ]);
    }

/**
     * @Route("/rechercheContacts/{id}", name="rechercheContacts_index", methods={"GET","POST"})
     */
    public function rechercheContacts(Contacts $contactsRepository): Response
    {
        //$contacts = contactsRepository->findBy();
    return $this->render('contacts/rechercheContacts.html.twig', [
        //'id' => $mediats ->getId(),
        //'contacts' => $mediats,
    ]);
}
    
/**
     * @Route("/formulaireContacts", name = "formulaireContacts_index", methods={"GET","POST"})
     */
    public function formulaireContacts(Request $request): Response
    {
        $contacts = new Contacts();
        
        $form = $this->createForm(ContactsType::class, $contacts);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contacts);
            $entityManager->flush();

            return $this->redirectToRoute('contacts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('contacts/formulaireContacts.html.twig', [
            'contacts' => $contacts,
            'formContacts' => $form->createView(),
        ]);
    }

    /**
     * @Route("/nouveauContacts", name="nouveauContacts_index", methods={"GET","POST"})
     */
    public function nouveauContacts(Request $request): Response
    {
        $contacts = new Contacts();
        $form = $this->createForm(ContactsType::class, $contacts);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contacts);
            $entityManager->flush();

            return $this->redirectToRoute('contacts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('contacts/nouveauContacts.html.twig', [
            'contacts' => $contacts,
            'formContacts' => $form->createView(),
        ]);
    }

    /**
     * @Route("/afficherContacts/{id}", name="afficherContacts_index", methods={"GET"})
     */
    public function afficherContacts(Contacts $contacts): Response
    {
        return $this->render('contacts/afficherContacts.html.twig', [
            'contacts' => $contacts,
        ]);
    }

    /**
     * @Route("/modifierContacts/{id}", name="modifierContacts_index", methods={"GET","POST"})
     */
    public function modifierContacts(Request $request, Contacts $contacts): Response
    {
        $form = $this->createForm(ContactsType::class, $contacts);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$this->getDoctrine()->getManager()->flush();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contacts);
            $entityManager->flush();

            return $this->redirectToRoute('contacts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('contacts/modifierContacts.html.twig', [
            'contacts' => $contacts,
            'formContacts' => $form->createView(),
        ]);
    }

// SUPPRESSION DES médiats :
    /**
     * @Route("/supprimerContacts/{id}" , name="supprimerContacts_index", methods= {"GET","POST"})
     */
    public function supprimerContacts(Request $request, Contacts $contacts, EntityManagerInterface $entityManager) : Response 
    {           
            $entityManager->remove($contacts);
            $entityManager->flush();
            return $this->redirectToRoute('contacts_index'); 
    }





}
