<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        echo "je test";
        return $this->twig->render('Home/index.html.twig');
    }
}
