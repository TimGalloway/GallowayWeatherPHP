<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WeatherHistory
 *
 * @author Tim
 */
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="WeatherHistories")
 */
class WeatherHistory {
    //put your code here
     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $ID;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $Type;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $Location;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $LocationText;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $Temp;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $Text;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $Icon;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    public $LocalObservationDateTime;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    public $created;
}
