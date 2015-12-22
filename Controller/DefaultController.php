<?php

namespace Openwide\Bundle\PdfJsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route(name="openwide_pdfjs_viewer", path="view/pdf", options={"expose": true})
     */
    public function indexAction()
    {
        return $this->render('OpenwidePdfJsBundle::viewer.html.twig');
    }

    /**
     * @Route(name="openwide_pdfjs_waiting", path="wait/pdf", options={"expose": true})
     */
    public function waitAction()
    {
        return $this->render('OpenwidePdfJsBundle::waiting.html.twig');
    }
}
