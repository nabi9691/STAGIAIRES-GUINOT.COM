<?php

namespace App\Controller;

use App\Entity\Mediats;
use App\Form\MediatsType;

//use Symfony\Component\Mime\Mediats;

use App\Repository\MediatsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/mediats")
 */
class MediatsController extends AbstractController
{
    /**
     * @Route("/", name="mediats_index")
     */
    public function index(MediatsRepository $mediatsRepository): Response
    {
        return $this->render('mediats/index.html.twig', [
            'mediats' => $mediatsRepository->findAll(),
        ]);
    }

/**
     * @Route("/rechercheMediats/{id}", name="rechercheMediats_index", methods={"GET","POST"})
     */
    public function rechercheMediats(MediatsRepository $mediatsRepository): Response
    {
        //'mediats' => $mediats->findBy();
    return $this->render('mediats/rechercheMediats.html.twig', [
        //'id' => $mediats ->getId(),
        //'mediats' => $mediats,
    ]);
}
    
/**
     * @Route("/formulaireMediats", name = "formulaireMediats_index", methods={"GET","POST"})
     */
    public function formulaireMediats(Request $request): Response
    {
        $mediats = new Mediats();
        
        $form = $this->createForm(MediatsType::class, $mediats);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mediats);
            $entityManager->flush();

            return $this->redirectToRoute('mediats_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('mediats/formulaireMediats.html.twig', [
            'mediats' => $mediats,
            'formMediats' => $form->createView(),
        ]);
    }

    /**
     * @Route("/nouveauMediats", name="nouveauMediats_index", methods={"GET","POST"})
     */
    public function nouveauMediats(Request $request): Response
    {
        $mediats = new Mediats();
        $form = $this->createForm(MediatsType::class, $mediats);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mediats);
            $entityManager->flush();

            return $this->redirectToRoute('mediats_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('mediats/nouveauMediats.html.twig', [
            'mediats' => $mediats,
            'formMediats' => $form->createView(),
        ]);
    }

    /**
     * @Route("/afficherMediats/{id}", name="afficherMediats_index", methods={"GET"})
     */
    public function afficherMediats(Mediats $mediats): Response
    {
        return $this->render('mediats/afficherMediats.html.twig', [
            'mediats' => $mediats,
        ]);
    }

    /**
     * @Route("/modifierMediats/{id}", name="modifierMediats_index", methods={"GET","POST"})
     */
    public function modifierMediats(Request $request, Mediats $mediats): Response
    {
        $form = $this->createForm(MediatsType::class, $mediats);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$this->getDoctrine()->getManager()->flush();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mediats);
            $entityManager->flush();

            return $this->redirectToRoute('mediats_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('mediats/modifierMediats.html.twig', [
            'mediats' => $mediats,
            'formMediats' => $form->createView(),
        ]);
    }

// SUPPRESSION DES médiats :
    /**
     * @Route("/supprimerMediats/{id}" , name="supprimerMediats_index", methods= {"GET","POST"})
     */
    public function supprimerMediats(Request $request, Mediats $mediats , EntityManagerInterface $entityManager) : Response 
    {           
            $entityManager->remove($mediats);
            $entityManager->flush();
            return $this->redirectToRoute('mediats_index'); 
    }

/**
     * @Route("temoignages", name="temoignages_index", methods={"GET"})
     */
    public function temoignage(): Response
    {
        return $this->render('mediats/temoignages.html.twig', [
            ]);
    }






}
