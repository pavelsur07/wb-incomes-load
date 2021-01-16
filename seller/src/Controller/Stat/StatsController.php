<?php
declare(strict_types=1);

namespace App\Controller\Stat;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/wildberries/stats", name="supplier.stats.")
 */
class StatsController extends AbstractController
{
    /**
     * @return Request
     * @Route("/incomes", name="incomes")
     */
    public function incomes(): Response
    {


    }

}