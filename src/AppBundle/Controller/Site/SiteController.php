<?php

namespace AppBundle\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SiteController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('site/site/index.html.twig');
    }
}
