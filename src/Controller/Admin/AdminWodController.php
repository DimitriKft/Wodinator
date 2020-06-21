<?php

namespace App\Controller\Admin;

use App\Entity\Wod;
use App\Form\WodType;
use App\Repository\WodRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminWodController extends AbstractController
{
    /**
     * @Route("/admin/wod", name="admin_wod")
     */
    public function index(WodRepository $repo)
    {
        $wods = $repo->findAll();
        return $this->render('admin_wod/adminWod.html.twig', [
            "wods" => $wods
        ]);
    }

    /**
    * @Route("/admin/wod/create", name="admin_wod_create")
    * @Route("/admin/wod/{id}", name="admin_wod_update", methods="GET|POST")
    */
    public function addAndUpdate(Wod $wod = null,Request $request, EntityManagerInterface $em)
    {
        if(!$wod)
        {
            $wod = new Wod();
        }

        $form = $this->createForm(WodType::class, $wod);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $update = $wod->getId() !== null;
            $em->persist($wod);
            $em->flush();
            $this->addFlash("succes", ($update) ? "La modification a été effectuée" : "L'ajout a été effectué");
            return $this->redirectToRoute('admin_wod');
        }

        return $this->render('admin_wod/addAndUpdate.html.twig', [
            "wod" => $wod,
            "form" => $form->createView(),
            "isUpdate" => $wod->getId() !== null
        ]);
    }

    /**
    * @Route("/admin/wod/{id}", name="admin_wod_delete", methods="delete")
    */
    public function delete(Wod $wod, Request $request, EntityManagerInterface $em)
    {
        if($this->isCsrfTokenValid("SUP" . $wod->getId(), $request->get('_token')))
        {
            $em->remove($wod);
            $em->flush();
            $this->addFlash("success", "la suppression a été effectuée");
            return $this->redirectToRoute('admin_wod');
        }
    }
}
