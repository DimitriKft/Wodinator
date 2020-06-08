<?php

namespace App\Controller;

use App\Repository\WodRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WodController extends AbstractController
{
    /**
     * @Route("/wods", name="wods")
     */
    public function index(WodRepository $repo)
    {
        $wods = $repo->findAll();
        return $this->render('wod/wods.html.twig', [
            'wods' => $wods
        ]);
    }
}
