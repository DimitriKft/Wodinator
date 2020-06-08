<?php

namespace App\Controller;

use App\Entity\Wod;
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

     /**
     * @Route("/wods/{id}", name="display_wod")
     */
    public function displayWod(Wod $wod)
    {
        return $this->render('wod/wod_levels.html.twig', [
            'wod' => $wod
        ]);
    }
}
