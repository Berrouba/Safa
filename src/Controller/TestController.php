<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController'
        ]);
    }

     /**
     * @Route("/test2", name="test2")
     */
    public function index2()
    {
        return new Response("<html><head></head><body><h1>Bonjour</h1></body></html>");
       /* return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);*/
    }

     /**
     * @Route("/test3", name="test3")
     */
    public function index3()
    {
        $tab=["test1",'test2',"test3","test4"];
       // return new Response("<html><head></head><body><h1>Bonjour</h1></body></html>");
        return $this->render('test/index3.html.twig', [
            'names'=>$tab
        ]);
    }
}
