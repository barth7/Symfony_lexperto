<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 16.02.2016
 * Time: 11:57
 */
namespace AppBundle\Controller\ControlPanel;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function listLeadsAction(Request $request, $page)
    {
        $leads = $this->getDoctrine()->getManager();
        $query = $leads->createQuery('
                SELECT p
                FROM AppBundle:Lead p
                ORDER BY p.registerDate DESC
            ');

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, $request->query->get('page', $page), 10);
        $pagination->setUsedRoute('_control_panel_list');
        return $this->render('ControlPanel/listLeads.html.twig', array(
            'leads' => $pagination,
        ));
    }

}
