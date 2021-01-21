<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
    * @route ("/", name="home")
    */
    public function home()
    {
        return $this->render('pages/home.html.twig');
    }
}