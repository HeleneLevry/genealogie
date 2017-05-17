<?php

//src/USerBundle/Controller/UserController.php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use AdminBundle\Entity\Banque_Patho;
use AdminBundle\Form\Banque_PathoType;

class AdminController extends Controller
{	
	public function ajouter_pathoAction()
	{
		$new_patho= new Banque_Patho;
		
		//On genere le formulaire
		 $form=$this->createForm(new Banque_PathoType, $new_patho);
		 
		 //On récupère la requête
		 $request = $this->get('request');

		 //On verifie qu'elle est de type POST
		 
		 if (($this->get('request')->getMethod()) == 'POST'){
			 $form->bind($request);
			 
			 if ($form->isValid()){
				 
				 //On enregistre notre objet dans la bdd
				 $em = $this->getDoctrine()->getManager();
				 $repository=$em->getRepository('AdminBundle:Banque_Patho');
				 
				 $patho=$new_patho->getNomPathologie();
				 $pathologie=$repository->findOneBy(array('nomPathologie' => $patho));
				  
				 if ($pathologie){
				 
					return $this->redirect($this->generateUrl('admin_Patho_existente'));
				}
				 $em->persist($new_patho);
				 $em->flush();
			return $this->redirect($this->generateUrl('admin_lister_patho'));
			}
		}
		
		return $this->render('AdminBundle:Admin:ajouter_patho.html.twig',array('form' => $form->createView()));
	}
	
	
	public function supprimer_pathoAction()
	{
		$nom_patho= new Banque_Patho;
		
		//On genere le formulaire
		 $form=$this->createForm(new Banque_PathoType, $nom_patho);
		 
		 //On récupère la requête
		 $request = $this->get('request');

		 //On verifie qu'elle est de type POST
		 
		 if (($this->get('request')->getMethod()) == 'POST'){
			 $form->bind($request);
			 
			 if ($form->isValid()){
				
				 $em = $this->getDoctrine()->getManager();
				 $repository=$em->getRepository('AdminBundle:Banque_Patho');
				 
				 $patho=$nom_patho->getNomPathologie();
				 
				 $pathologie=$repository->findOneBy(array('nomPathologie' => $patho));
				 
				 if ($pathologie){
					 
					$em->remove($pathologie);
					$em->flush();
					return $this->redirect($this->generateUrl('admin_lister_patho'));
				}
			return $this->redirect($this->generateUrl('admin_Patho_inconnu'));
			}
		}
		
		return $this->render('AdminBundle:Admin:supprimer_patho.html.twig',array('form' => $form->createView()));
	}
	
	public function lister_pathoAction()
	{
		 $nom_patho= new Banque_Patho;
		
		 $em = $this->getDoctrine()->getManager();
		 $repository=$em->getRepository('AdminBundle:Banque_Patho');
		 
		 $liste_pathologies = $repository->findAll();
		 
		 if($liste_pathologies){
			return $this->render('AdminBundle:Admin:lister_patho.html.twig',array('liste_patho'=>$liste_pathologies));
		}
		return $this->redirect($this->generateUrl('admin_bdd_vide_patho'));
	}
	
	public function patho_existanteAction()
	{
		return $this->render('AdminBundle:Admin:patho_existante.html.twig');
	}
	
	public function patho_inconnuAction()
	{
		return $this->render('AdminBundle:Admin:patho_inconnu.html.twig');
	}
	
	public function bdd_vide_pathoAction()
	{
		return $this->render('AdminBundle:Admin:bdd_vide_patho.html.twig');
	}
}
