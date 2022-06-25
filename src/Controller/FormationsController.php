<?php

namespace App\Controller;

use App\Entity\Formations;
use App\Form\FormationsFormType;

//use Symfony\Component\Mime\Medias;

use App\Repository\FormationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/formations")
 */
class FormationsController extends AbstractController
{
    // LISTE DES formations :
/**
     * @Route("/", name="formations_index")
     */
    public function index(FormationsRepository $formationsRepository): Response
    {
        return $this->render('formations/index.html.twig', [
            'formations' => $formationsRepository->findAll(),
        ]);
    }
    
    // FORMULAIRE DE formations :
/**
     * @Route("/formulaireFormations", name = "formulaireFormations_index", methods={"GET","POST"})
     */
    public function formulaireFormations(Request $request): Response
    {
        $formations = new Formations();
        
        $form = $this->createForm(FormationsFormType::class, $formations);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formations);
            $entityManager->flush();

            return $this->redirectToRoute('formations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formations/formulaireFormations.html.twig', [
            'formations' => $formations,
            'formFormations' => $form->createView(),
        ]);
    }

    // ENREGISTREMENT D'UNE NOUVELLE formation :
/**
     * @Route("/nouvelleFormation", name="nouvelleFormation_index", methods={"GET","POST"})
     */
    public function nouvelleFormation(Request $request): Response
    {
        $formations = new Formations();
        $form = $this->createForm(FormationsFormType::class, $formations);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formations);
            $entityManager->flush();

            return $this->redirectToRoute('formations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formations/nouvelleFormation.html.twig', [
            'formations' => $formations,
            'formFormations' => $form->createView(),
        ]);
    }

    // AFFICHAGE DES formations :
/**
     * @Route("/afficherFormations/{id}", name="afficherFormations_index", methods={"GET"})
     */
    public function afficherFormations(Formations $formations): Response
    {
        return $this->render('formations/afficherFormations.html.twig', [
            'formation' => $formations,
        ]);
    }

    // MODIFICATION DES formations :
/**
     * @Route("/modifierFormations/{id}", name="modifierFormations_index", methods={"GET","POST"})
     */
    public function modifierFormations(Request $request, Formations $formations): Response
    {
        $formations = new Formations();
        $form = $this->createForm(FormationsFormType::class, $formations);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formations);
            $entityManager->flush();

            return $this->redirectToRoute('formations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formations/modifierFormations.html.twig', [
            'formations' => $formations,
            'formFormations' => $form->createView(),
        ]);
    }

// SUPPRESSION DES formations :
    /**
     * @Route("/supprimerFormations/{id}" , name="supprimerFormations_index", methods= {"GET","POST"})
     */
    public function supprimerFormations(Request $request, Formations $formations, EntityManagerInterface $entityManager) : Response 
    {           
            $entityManager->remove($formations);
            $entityManager->flush();
            return $this->redirectToRoute('formations_index'); 
    }

/**
     * @Route("pageAccueilBIOInformatique", name="pageAccueilBIOInformatique_index", methods={"GET"})
     */
    public function pageAccueilBIOInformatique(): Response
    {
        return $this->render('formations/BIOInformatique/pageAccueilBIOInformatique.html.twig', [
            ]);
    }


/**
     * @Route("formationPHP", name="formationPHP_index", methods={"GET"})
     */
    public function formationPHP(): Response
    {
        return $this->render('formations/BIOInformatique/formationPHP.html.twig', [
            ]);
    }

/**
     * @Route("formationJAVA", name="formationJAVA_index", methods={"GET"})
     */
    public function formationJAVA(): Response
    {
        return $this->render('formations/BIOInformatique/formationJAVA.html.twig', [
            ]);
    }

/**
     * @Route("formationDeveloppeurWEB", name="developpeurWEB_index", methods={"GET"})
     */
    public function developpeurWEB(): Response
    {
        return $this->render('formations/BIOInformatique/formationDeveloppeurWEB.html.twig', [
            ]);
    }

/**
     * @Route("formationSymfony", name="formationSymfony_index", methods={"GET"})
     */
    public function formationSymfony(): Response
    {
        return $this->render('formations/BIOInformatique/formationSymfony.html.twig', [
            ]);
    }

/**
     * @Route("listeFormations", name="listeDesFormations_index", methods={"GET"})
     */
    public function listeDesFormations(): Response
    {
        return $this->render('formations/BIOInformatique/listeDesFormationsBIOInformatique.html.twig', [
            ]);
    }
    
/**
     * @Route("aProposFormations", name="aProposBioInformatique_index", methods={"GET"})
     */
    public function aProposBioInformatique(): Response
    {
        return $this->render('formations/BIOInformatique/aProposDeBIOInformatique.html.twig', [
            ]);
    }

/**
     * @Route("formationPYTHON_index", name="formationPYTHON_index", methods={"GET"})
     */
    public function formationPYTHON_index(): Response
    {
        return $this->render('formations/BIOInformatique/formationPYTHON.html.twig', [
            ]);
    }

/**
     * @Route("formationHTML", name="formationHTML_index", methods={"GET"})
     */
    public function formationHTML(): Response
    {
        return $this->render('formations/BIOInformatique/formationHTML.html.twig', [
            ]);
    }

/**
     * @Route("formationCSS", name="formationCSS_index", methods={"GET"})
     */
    public function formationCSS(): Response
    {
        return $this->render('formations/BIOInformatique/formationCSS.html.twig', [
            ]);
    }

/**
     * @Route("formationJAVASCRIPT", name="formationJAVASCRIPT_index", methods={"GET"})
     */
    public function formationJAVASCRIPT(): Response
    {
        return $this->render('formations/BIOInformatique/formationJAVASCRIPT.html.twig', [
            ]);
    }

/**
     * @Route("formationDotNet", name="formationDotNet_index", methods={"GET"})
     */
    public function formationDotNet(): Response
    {
        return $this->render('formations/BIOInformatique/formationDotNet.html.twig', [
            ]);
    }

/**
     * @Route("formationC++", name="formationC++_index", methods={"GET"})
     */
    public function formationCPlus(): Response
    {
        return $this->render('formations/BIOInformatique/formationC++.html.twig', [
            ]);
    }

/**
     * @Route("coursEnPresentiel", name="coursEnPresentiel_index", methods={"GET"})
     */
    public function coursEnPresentiel(): Response
    {
        return $this->render('formations/BIOInformatique/coursEnPresentiel.html.twig', [
            ]);
    }

/**
     * @Route("coursEnVideo", name="coursEnVideo_index", methods={"GET"})
     */
    public function coursEnVideo(): Response
    {
        return $this->render('formations/BIOInformatique/coursEnVidéo.html.twig', [
            ]);
    }

/**
     * @Route("coursEnPDF", name="coursEnPDF_index", methods={"GET"})
     */
    public function     coursEnPDF(): Response
        {
    return $this->render('formations/BIOInformatique/coursEnPdf.html.twig', [
            ]);
    }

/**
     * @Route("coursEnWord", name="coursEnWord_index", methods={"GET"})
     */
    public function coursEnWord(): Response  {
        return $this->render('formations/BIOInformatique/coursEnWord.html.twig', [
            ]);
    }

/**
     * @Route("coursEnLignes", name="coursEnLignes_index", methods={"GET"})
     */
    public function coursEnLignes(): Response
    {
        return $this->render('formations/BIOInformatique/coursEnLigne.html.twig', [
            ]);
    }

/**
     * @Route("coursEnFichierZipp", name="coursEnFichierZipp_index", methods={"GET"})
     */
    public function coursEnFichierZipp(): Response
    {
        return $this->render('formations/BIOInformatique/coursEnFichierZipp.html.twig', [
            ]);
    }

/**
     * @Route("listeDesCours", name="listeDesCours_index", methods={"GET"})
     */
    public function listeDesCours(): Response
    {
        return $this->render('formations/BIOInformatique/listeDesCours.html.twig', [
            ]);
    }






}
