<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Form\CoursFormType;

//use Symfony\Component\Mime\Medias;

use App\Repository\CoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/cours")
 */
class CoursController extends AbstractController
{
    /**
     * @Route("/", name="cours_index", methods={"GET","POST"})
     */
    public function index(CoursRepository $coursRepository): Response
    {
        return $this->render('cours/index.html.twig', [
            'cours' => $coursRepository->findAll(),
        ]);
    }
    
/**
     * @Route("/formulaireCours", name = "formulaireCours_index", methods={"GET","POST"})
     */
    public function formulaireCours(Request $request): Response
    {
        $cours = new Cours();
        
        $form = $this->createForm(CoursFormType::class, $cours);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cours);
            $entityManager->flush();

            return $this->redirectToRoute('cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cours/formulaireCours.html.twig', [
            'cours' => $cours,
            'formCours' => $form->createView(),
        ]);
    }

    /**
     * @Route("/nouveauCours", name="nouveauCours_index", methods={"GET","POST"})
     */
    public function nouveauCours(Request $request): Response
    {
        $cours = new Cours();
        $form = $this->createForm(CoursFormType::class, $cours);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cours);
            $entityManager->flush();

            return $this->redirectToRoute('cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cours/nouveauCours.html.twig', [
            'cours' => $cours,
            'formCours' => $form->createView(),
        ]);
    }

    /**
     * @Route("/afficherCours/{id}", name="afficherCours_index", methods={"GET"})
     */
    public function afficherCours(Cours $cours): Response
    {
        return $this->render('cours/afficherCours.html.twig', [
            'cours' => $cours,
        ]);
    }

    /**
     * @Route("/modifierCours/{id}", name="modifierCours_index", methods={"GET","POST"})
     */
    public function modifierCours(Request $request, Cours $cours): Response
    {
        $form = $this->createForm(CoursFormType::class, $cours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$this->getDoctrine()->getManager()->flush();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cours);
            $entityManager->flush();

            return $this->redirectToRoute('cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cours/modifierCours.html.twig', [
            'cours' => $cours,
            'formCours' => $form->createView(),
        ]);
    }

// SUPPRESSION DES cours :
    /**
     * @Route("/supprimerCours/{id}" , name="supprimerCours_index", methods= {"GET","POST"})
     */
    public function supprimerCours(Request $request, Cours $cours, EntityManagerInterface $entityManager) : Response 
    {           
            $entityManager->remove($cours);
            $entityManager->flush();
            return $this->redirectToRoute('cours_index'); 
    }


}
