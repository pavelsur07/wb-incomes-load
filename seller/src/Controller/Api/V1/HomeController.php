<?php


namespace App\Controller\Api\V1;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/v1/api")
 */
class HomeController extends AbstractController
{
    /**
     * @return Response
     * @Route("")
     */
    public function index(): Response
    {
        return $this->json([ 'version' => '1.0.0']);
    }

}