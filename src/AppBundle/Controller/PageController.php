<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Events;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $events = $this->getDoctrine()->getRepository('AppBundle:Events')->findAll();
        return $this->render('pages/index.html.twig', array('events'=>$events));
    }

    /**
     * @Route("/modify", name="modifypage")
     */
    public function modifyAction(Request $request)
    {
        return $this->render('pages/modify.html.twig');
    }

    /**
     * @Route("/create", name="createpage")
     */
    public function createAction(Request $request)
    {
        return $this->render('pages/createevent.html.twig');
    }

    /**
     * @Route("/details", name="detailpage")
     */
    public function detailAction(Request $request)
    {
        return $this->render('pages/detailsevent.html.twig');
    }

    /**
     * @Route("/edit", name="editpage")
     */
    public function editAction(Request $request)
    {
        return $this->render('pages/editevent.html.twig');
    }

}