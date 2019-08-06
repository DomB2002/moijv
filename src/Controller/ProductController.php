<?php

namespace App\Controller;


use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ProductController extends AbstractController
{
    /**
     * @Route("/product/{id}", name="product")
     */
    public function details( ProductRepository $productRepository, int $id )
    {

        $product = $productRepository->find($id);
        return $this->render( 'product/details.html.twig', [
            'product' => $product,
        ] );
    }
}
