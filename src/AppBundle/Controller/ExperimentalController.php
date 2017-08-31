<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExperimentalController extends Controller
{
    /**
     * @Route("/home/other", name="home_other")
     */
    public function indexAction(Request $request)
    {
        return new Response("Hola mundo!! desde otro controlador experimental");
    }
}
