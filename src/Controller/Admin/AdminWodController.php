<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminWodController extends AbstractController
{
    /**
     * @Route("/admin/wod", name="admin_wod")
     */
    public function index()
    {
        return $this->render('admin_wod/index.html.twig', [
            'controller_name' => 'AdminWodController',
        ]);
    }
}
