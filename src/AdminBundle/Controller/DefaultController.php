<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
    
    //public function addAction(Request $request)
    
    //{
    
    //// Création de l'entité
    
    //$advert = new Advert();
    
    //$advert->setTitle('Recherche développeur Symfony2.');
    
    //$advert->setAuthor('Alexandre');
    
    //$advert->setContent("Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…");
    
    //// On peut ne pas définir ni la date ni la publication,
    
    //// car ces attributs sont définis automatiquement dans le constructeur
    
    
    //// On récupère l'EntityManager
    
    //$em = $this->getDoctrine()->getManager();
    
    
    //// Étape 1 : On « persiste » l'entité
    
    //$em->persist($advert);
    
    
    //// Étape 2 : On « flush » tout ce qui a été persisté avant
    
    //$em->flush();
    
    
    //// Reste de la méthode qu'on avait déjà écrit
    
    //if ($request->isMethod('POST')) {
    
    //$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
    
    //return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $advert->getId())));
    
    //}
    
    
    //return $this->render('OCPlatformBundle:Advert:add.html.twig');
    
    //}
}
