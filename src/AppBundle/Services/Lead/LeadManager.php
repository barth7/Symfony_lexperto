<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 16.02.2016
 * Time: 13:20
 */
namespace AppBundle\Services\Lead;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Lead;
use AppBundle\Entity\LawCategory;


class LeadManager
{
    protected $em;
    public function __construct(EntityManager   $em)
    {
        $this->em = $em;
    }

    public function getPrice($lead){

        $id = $lead->getLawCategory();

        $lawCategory = $this->em->getRepository('AppBundle:LawCategory')
            ->find($id);

        return $lawCategory;
    }
}