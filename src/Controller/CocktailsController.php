<?php

namespace App\Controller;

use App\Entity\Cocktail;
use App\Form\CocktailType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CocktailsController extends AbstractController
{
    /**
     * @Route("/cocktails", name="cocktailisting")
     */
    public function index()
    {
        $cocktails = $this->getDoctrine()
            ->getRepository(Cocktail::class)
            ->findAll();
        return $this->render('cocktails/index.html.twig', [
            'cocktail' => $cocktails,
        ]);
    }

    /**
     * @param Cocktail|null $cocktail
     * @param Request $request
     * @param ObjectManager $manager
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/addcocktail",name="addCocktail")
     * @Route("/editcocktail/{id}/edit",name="modifCocktail")
     */

    public function addModifFilm(Cocktail $cocktail = null, Request $request, ObjectManager $manager)
    {
        if (!$cocktail) {
            $cocktail = new Cocktail();
        }

        $form = $this->createForm(CocktailType::class, $cocktail);
        $form->handleRequest($request);
        /** si le formulaire a été soumis et qu'il est valide */
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cocktail);

            $em->flush();
            return $this->redirectToRoute('cocktailisting', ['id' => $cocktail->getId()]);
        }

        return $this->render('cocktails/addCocktail.html.twig',
            ['formedit' => $form->createView()]
        );
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/remove/{id}", name="removecocktail")
     */

    public function delete($id)
    {

        $em = $this->getDoctrine()->getManager();
        $cocktail = $em
            ->getRepository(Cocktail::class)
            ->find($id);


        $em->remove($cocktail);
        $em->flush();
        return $this->redirectToRoute('cocktailisting');
    }

    /**
     * @Route("/details_cocktail/{id}", name="cocktail_details")
     */
    public function detailsAction($id)
    {
        $cocktail = $this->getDoctrine()
            ->getRepository(Cocktail::class)
            ->find($id);
        return $this->render('cocktails/details.html.twig', array(
            'cocktail' => $cocktail
        ));
    }
}
