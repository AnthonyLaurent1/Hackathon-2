<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowController extends AbstractController
{
    /**
     * @Route("/show", name="show")
     */
    public function show(ManagerRegistry $managerRegistry): Response
    {
        $products = $managerRegistry->getRepository(Product::class)
            ->findAll();
        return $this->render('show/index.html.twig', [
            'products' => $products
        ]);
    }
}
