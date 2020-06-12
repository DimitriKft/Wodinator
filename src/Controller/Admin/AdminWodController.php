<?php

namespace App\Controller\Admin;

use App\Repository\WodRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminWodController extends AbstractController
{
    /**
     * @Route("/admin/wod", name="admin_wod")
     */
    public function index(WodRepository $repo)
    {
        $wods = $repo->findAll();
        return $this->render('admin_wod/index.html.twig', [
            "wods" => $wods
        ]);
    }
}
