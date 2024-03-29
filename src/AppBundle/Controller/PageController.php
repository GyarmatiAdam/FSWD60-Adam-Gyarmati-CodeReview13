<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Events;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\HttpFoundation\File\Exception\FileException;



class PageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $events = $this->getDoctrine()->getRepository('AppBundle:Events')->findAll();
        return $this->render('pages/index.html.twig', array('events'=>$events, 'title' =>'home'));
    }

    /**
     * @Route("/modify", name="modifypage")
     */
    public function modifyAction()
    {
        $events = $this->getDoctrine()->getRepository('AppBundle:Events')->findAll();
        return $this->render('pages/modify.html.twig', array('events'=>$events, 'title' =>'modify'));
    }

    /**
     * @Route("/create", name="createpage")
     */
    public function createAction(Request $request)
    {
        $events = new Events;

        $form = $this->createFormBuilder($events)
            ->add('eventName', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventDate', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventDesc', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventCapacity', NumberType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventEmail', EmailType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventPhone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventAdd', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventUrl', UrlType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventType', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Sport'=>'Sport', 'Movie'=>'Movie', 'Theater'=>'Theater'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
            // ->add('eventImg', FileType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventImg', FileType::class, ['label' => 'Image (JPG, PNG)','mapped' => false,'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload an image',
                    ])
                ],
            ])
            ->add('save', SubmitType::class, array('label'=> 'Add new', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
            ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $eventName = $form['eventName']->getData();
            $eventDate = $form['eventDate']->getData();
            $eventDesc = $form['eventDesc']->getData();
            $eventCapacity = $form['eventCapacity']->getData();
            $eventEmail = $form['eventEmail']->getData();
            $eventPhone = $form['eventPhone']->getData();
            $eventAdd = $form['eventAdd']->getData();
            $eventUrl = $form['eventUrl']->getData();
            $eventType = $form['eventType']->getData();
            $eventImg = $form['eventImg']->getData();

        if ($eventImg) {
            $originalFilename = pathinfo($eventImg->getClientOriginalName(), PATHINFO_FILENAME);
            // this is needed to safely include the file name as part of the URL
            // $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
            //  $newFilename = $safeFilename.'-'.uniqid().'.'.$eventImg->guessExtension();
            $newFilename = $originalFilename.'-'.uniqid().'.'.$eventImg->guessExtension();

            // Move the file to the directory where brochures are stored
            try {
                $eventImg->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
            // ... handle exception if something happens during file upload
            }

            // updates the 'brochureFilename' property to store the PDF file name
            // instead of its contents
                $events->setEventImg($newFilename);
            }
        // return $this->redirect($this->generateUrl('app_product_list'));
    
 
            $events->setEventName($eventName);
            $events->setEventDate($eventDate);
            $events->setEventDesc($eventDesc);
            $events->setEventCapacity($eventCapacity);
            $events->setEventEmail($eventEmail);
            $events->setEventPhone($eventPhone);
            $events->setEventAdd($eventAdd);
            $events->setEventUrl($eventUrl);
            $events->setEventType($eventType);

            $em = $this->getDoctrine()->getManager();
            $em->persist($events);
            $em->flush();

            $this->addFlash('notice','New event now is added');
            return $this->redirectToRoute('modifypage');
        }
        
        return $this->render('pages/createevent.html.twig', array('title' =>'add', 'form' => $form->createView()));

    }


    /**
     * @Route("/details/{id}", name="detailpage")
     */
    public function detailAction($id)
    {
        $events = $this->getDoctrine()->getRepository('AppBundle:Events')->find($id);
        return $this->render('pages/detailsevent.html.twig', array('title' =>'details', 'events'=>$events));
    }

    /**
     * @Route("/edit/{id}", name="editpage")
     */
    public function editAction($id, Request $request)
    {
        $events = $this->getDoctrine()->getRepository('AppBundle:Events')->find($id);

        $events->setEventName($events->getEventName());
        $events->setEventDate($events->getEventDate());
        $events->setEventDesc($events->getEventDesc());
        $events->setEventImg($events->getEventImg());
        $events->setEventCapacity($events->getEventCapacity());
        $events->setEventEmail($events->getEventEmail());
        $events->setEventPhone($events->getEventPhone());
        $events->setEventAdd($events->getEventAdd());
        $events->setEventUrl($events->getEventUrl());
        $events->setEventType($events->getEventType());

        $form = $this->createFormBuilder($events)
            ->add('eventName', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventDate', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventDesc', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventCapacity', NumberType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventEmail', EmailType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventPhone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventAdd', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventUrl', UrlType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('eventType', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Sport'=>'Sport', 'Movie'=>'Movie', 'Theater'=>'Theater'),'attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
            ->add('save', SubmitType::class, array('label'=> 'Modify', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
            ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $eventName = $form['eventName']->getData();
            $eventDate = $form['eventDate']->getData();
            $eventDesc = $form['eventDesc']->getData();
            $eventCapacity = $form['eventCapacity']->getData();
            $eventEmail = $form['eventEmail']->getData();
            $eventPhone = $form['eventPhone']->getData();
            $eventAdd = $form['eventAdd']->getData();
            $eventUrl = $form['eventUrl']->getData();
            $eventType = $form['eventType']->getData();

            $em = $this->getDoctrine()->getManager();
            $events = $em->getRepository('AppBundle:Events')->find($id);
 
            $events->setEventName($eventName);
            $events->setEventDate($eventDate);
            $events->setEventDesc($eventDesc);
            $events->setEventCapacity($eventCapacity);
            $events->setEventEmail($eventEmail);
            $events->setEventPhone($eventPhone);
            $events->setEventAdd($eventAdd);
            $events->setEventUrl($eventUrl);
            $events->setEventType($eventType);

            $em->flush();

            $this->addFlash('notice','The event has been updated');
            return $this->redirectToRoute('modifypage');
        }
        
        return $this->render('pages/editevent.html.twig', array('title' =>'update', 'form' => $form->createView()));


        // return $this->render('pages/editevent.html.twig');
    }

    /**
     * @Route("/delete/{id}", name="deletepage")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository('AppBundle:Events')->find($id);
        $em->remove($events);

        $em->flush();
        $this->addFlash('notice','Event has been removed');

        return $this->redirectToRoute('modifypage');    
    }

}