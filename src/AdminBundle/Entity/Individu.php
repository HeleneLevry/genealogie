<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Individu
 *
 * @ORM\Table(name="individu")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\IndividuRepository")
 */
class Individu
{    
		
	/**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Compte", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $compte;
  
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="num_individu", type="integer", unique=true)
     */
    private $numIndividu;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetime")
     */
    private $dateNaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deces", type="datetime")
     */
    private $dateDeces;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    /**
     * @var bool
     *
     * @ORM\Column(name="genre", type="boolean")
     */
    private $genre;

}
