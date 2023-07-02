<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function homePage() {
        return $this->render('pages/homepage/home_page.html.twig', []);
    }
}
