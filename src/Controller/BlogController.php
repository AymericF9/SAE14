<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="Page 1")
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
	/** 
     * @Route("/", name="home") 
	*/ 
	public function home()  
	{ 
	return $this->render('blog/home.html.twig', [ 
	'title' => "bienvenuueeeee", 
	]); 
}
	/**
     * @Route("/blognew", name="Page 2")
     */
	public function index2() : Response
	{ 
	return $this->render('blognew/page2.html.twig'); 
}
	/**
     * @Route("/blognew2", name="Page 3")
     */
	public function index3() : Response
	{ 
	return $this->render('blognew2/page3.html.twig'); 
}
	/**
     * @Route("/anglais1", name="Page traduite")
     */
	public function index4() : Response
	{ 
	return $this->render('anglais1/traduction.html.twig'); 
	}
	
	/**
     * @Route("/anglais2", name="Page traduite 2")
     */
	public function index5() : Response
	{ 
	return $this->render('anglais2/traduction2.html.twig'); 
	}

	/**
     * @Route("/anglais3", name="Page traduite 3")
     */
	public function index6() : Response
	{ 
	return $this->render('anglais3/traduction3.html.twig'); 
	}

	/**
     * @Route("/anglais4", name="Page traduite 4")
     */
	public function index7() : Response
	{ 
	return $this->render('anglais4/traduction4.html.twig'); 
	}
}
