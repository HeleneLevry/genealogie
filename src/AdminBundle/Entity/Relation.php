<?php

namespace AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Relation
 *
 * @ORM\Table(name="relation")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\RelationRepository")
 */
class Relation
{
    
    /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Individu", cascade={"persist"})
    * @ORM\JoinColumn(name="individu_asc_id", referencedColumnName="id",nullable=false)
    */
    private $individuAscendant;
    
    /**
    * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Individu", cascade={"persist"})
    * @ORM\JoinColumn(name="individu_desc_id", referencedColumnName="id",nullable=false)
    */
    private $individuDescendant;
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="type_relation", type="string", length=255)
     */
    private $typeRelation;
    
   
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set typeRelation
     *
     * @param string $typeRelation
     *
     * @return Relation
     */
    public function setTypeRelation($typeRelation)
    {
        $this->typeRelation = $typeRelation;
        return $this;
    }
    /**
     * Get typeRelation
     *
     * @return string
     */
    public function getTypeRelation()
    {
        return $this->typeRelation;
    }

    /**
     * Set individuAscendant
     *
     * @param \AdminBundle\Entity\Individu $individuAscendant
     *
     * @return Relation
     */
    public function setIndividuAscendant(\AdminBundle\Entity\Individu $individuAscendant)
    {
        $this->individuAscendant = $individuAscendant;

        return $this;
    }

    /**
     * Get individuAscendant
     *
     * @return \AdminBundle\Entity\Individu
     */
    public function getIndividuAscendant()
    {
        return $this->individuAscendant;
    }

    /**
     * Set individuDescendant
     *
     * @param \AdminBundle\Entity\Individu $individuDescendant
     *
     * @return Relation
     */
    public function setIndividuDescendant(\AdminBundle\Entity\Individu $individuDescendant)
    {
        $this->individuDescendant = $individuDescendant;

        return $this;
    }

    /**
     * Get individuDescendant
     *
     * @return \AdminBundle\Entity\Individu
     */
    public function getIndividuDescendant()
    {
        return $this->individuDescendant;
    }
}
