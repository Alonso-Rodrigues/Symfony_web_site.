<?php

namespace App\Controller;
use App\Entity\PricingPlan;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PricingController extends AbstractController
{
    #[Route('/pricing', name: 'app_pricing')]
    public function index(): Response
    {
        $pricingPlans = $this->getDoctrine() //to connect with the BD
            ->getRepository(PricingPlan::class)
            ->findAll();

        return $this->render('pricing/index.html.twig', [
            'pricingPlans' => $pricingPlans,
        ]);
    }

}
