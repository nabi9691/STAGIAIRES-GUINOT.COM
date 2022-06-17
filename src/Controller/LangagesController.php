<?php

namespace App\Controller;

use App\Entity\Langages;
use App\Form\LangagesFormType;

//use Symfony\Component\Mime\Medias;

use App\Repository\LangagesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/langages")
 */
class LangagesController extends AbstractController
{
    /**
     * @Route("/", name="langages_index", methods={"GET","POST"})
     */
    public function index(LangagesRepository $langagesRepository): Response
    {
        return $this->render('langages/index.html.twig', [
            'langage' => $langagesRepository ->findAll(),
        ]);
    }
    
/**
     * @Route("/formulaireLangages", name = "formulaireLangages_index", methods={"GET","POST"})
     */
    public function formulaireLangages(Request $request): Response
    {
        $langages = new Langages();
        
        $form = $this->createForm(LangagesFormType::class, $langages);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($langages);
            $entityManager->flush();

            return $this->redirectToRoute('langages_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('langages/formulaireLangages.html.twig', [
            'langage' => $langages,
            'formLangages' => $form->createView(),
        ]);
    }

    /**
     * @Route("/nouveauLangage", name="nouveauLangage_index", methods={"GET","POST"})
     */
    public function nouveauLangage(Request $request): Response
    {
        $langages = new Langages();
        $form = $this->createForm(LangagesFormType::class, $langages);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($langages);
            $entityManager->flush();

            return $this->redirectToRoute('langages_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('langages/nouveauLangage.html.twig', [
            'langage' => $langages,
            'formLangages' => $form->createView(),
        ]);
    }

    /**
     * @Route("/afficherLangage/{id}", name="afficherLangage_index", methods={"GET"})
     */
    public function afficherLangage(Langages $langages): Response
    {
        return $this->render('langages/afficherLangage.html.twig', [
            'langage' => $langages,
        ]);
    }

    /**
     * @Route("/modifierLangage/{id}", name="modifierLangage_index", methods={"GET","POST"})
     */
    public function modifierLangage(Request $request, Langages $langages): Response
    {
        $form = $this->createForm(LangagesFormType::class, $langages);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$this->getDoctrine()->getManager()->flush();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($langages);
            $entityManager->flush();

            return $this->redirectToRoute('langages_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('langages/modifierLangage.html.twig', [
            'langage' => $langages,
            'formLangages' => $form->createView(),
        ]);
    }

// SUPPRESSION DES LANGAGES :
    /**
     * @Route("/supprimerLangage/{id}" , name="supprimerLangage_index", methods= {"GET","POST"})
     */
    public function supprimerLangage(Request $request, Langages $langages, EntityManagerInterface $entityManager) : Response 
    {           
            $entityManager->remove($langages);
            $entityManager->flush();
            return $this->redirectToRoute('langages_index'); 
    }


}
