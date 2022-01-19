<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowController extends AbstractController
{
    /**
     * @Route("/show", name="show")
     */
    public function show(\Doctrine\Persistence\ManagerRegistry $managerRegistry): Response
    {
        $products = $managerRegistry->getRepository(Product::class)
            ->findAll();
        return $this->render('show/index.html.twig', [
            'products' => $products
        ]);
    }
}
