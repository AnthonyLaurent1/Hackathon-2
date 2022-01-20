<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public const PRODUCT = [
        1 => [
            'name' => 'Planches d\'aspect de bois Marron terre',
            'description' => '50x250 | 1.25 mètre carré',
            'picture' => 'assets/images/planchette2.jpg',
            'price' => 33,
            'ranking' => 4,
        ],
        2 => [
            'name' => 'Boite de 15 dalles vinyles auto-adhésives imitation parquet',
            'description' => '(2,08m²) - Starfloor - Modern oak beige',
            'picture' => 'assets/images/dalles1.jpg',
            'price' => 25,
            'ranking' => 5,
        ],
        3 => [
            'name' => 'Tablette chêne massif lamellé collé abouté',
            'description' => '800 x 200 x 18 mm',
            'picture' => 'assets/images/chene1.jpg',
            'price' => 10,
            'ranking' => 5,
        ],
        4 => [
            'name' => 'Adhésif de masquage crêpe SCOTCH',
            'description' => 'Duck® ( 30mm x 50m )',
            'picture' => 'assets/images/adhesif1.jpg',
            'price' => 3,
            'ranking' => 4,
        ],
        5 => [
            'name' => 'Rouleau anti-goutte avec rallonge DEXTER',
            'description' => 'SAVY 180 mm',
            'picture' => 'assets/images/rouleau1.jpg',
            'price' => 18,
            'ranking' => 5,
        ],
        6 => [
            'name' => 'Colle à bois rapide intérieure ISTEO',
            'description' => '250 grammes',
            'picture' => 'assets/images/colle2.jpg',
            'price' => 15,
            'ranking' => 5,
        ],
        7 => [
            'name' => 'Peinture Crème De Couleur Satin Zeste D\'Orange',
            'description' => '0,5 L - Dulux Valentine',
            'picture' => 'assets/images/peinture3.jpg',
            'price' => 18,
            'ranking' => 5,
        ],
        8 => [
            'name' => 'Peinture Blanc Mat pour Murs & Plafonds',
            'description' => 'Sous-Couche Intégrée, 2,5L Ripolin - Blanc',
            'picture' => 'assets/images/peinture2.png',
            'price' => 25,
            'ranking' => 4,
        ],
        9 => [
            'name' => 'Planchette Chêne brut Grade A à fixer',
            'description' => '50x250 | 1.25 mètre carré',
            'picture' => 'assets/images/planchette6.jpg',
            'price' => 52,
            'ranking' => 5,
        ],
        ];
    public function load(ObjectManager $manager): void
    {

        foreach (self::PRODUCT as $productData) {
            $product = new Product();
            $product->setName($productData['name']);
            $product->setDescription($productData['description']);
            $product->setPicture($productData['picture']);
            $product->setPrice($productData['price']);
            $product->setRanking($productData['ranking']);
            $manager->persist($product);
        }

        $manager->flush();
    }
}
