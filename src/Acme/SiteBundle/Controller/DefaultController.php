<?php

namespace Acme\SiteBundle\Controller;

use Acme\SiteBundle\Entity\Block;
use Acme\SiteBundle\Entity\BlockPositionType;
use Acme\SiteBundle\Entity\BlockPage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * Index Action
     * @return type
     */
    public function indexAction()
    {   
        $repository = $this->getDoctrine()->getRepository('SiteBundle:Block');
        $blockCenter = $repository->findBy(['position' => BlockPositionType::CENTER_POSITION]);
        return $this->render('SiteBundle:Default:index.html.twig',array('blockCenter' => $blockCenter));
    }
    
    /**
     * Contact action
     * @return type
     */
    public function contactAction(){
        $repository = $this->getDoctrine()->getRepository('SiteBundle:Block');
        return $this->render('SiteBundle:Default:contact.html.twig');
    }
}
