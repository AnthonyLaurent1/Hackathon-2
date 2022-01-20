<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public const PRODUCT = [
        1 => [
            'name' => 'Planches d\'aspect de bois Marron terre d',
            'description' => '',
            'picture' => 'https://media.discordapp.net/attachments/933270656282398750/933652008781643806/bois_murale.PNG',
            'price' => 33,
            'ranking' => 4,
        ],
        2 => [
            'name' => 'Boite de 15 dalles vinyles auto-adhésives imitation parquet',
            'description' => '(2,08m²) - Starfloor - Modern oak beige - TARKETT',
            'picture' => 'https://media.discordapp.net/attachments/933270656282398750/933651094431731732/lino.PNG',
            'price' => 25,
            'ranking' => 5,
        ],
        3 => [
            'name' => 'Tablette chêne massif lamellé collé abouté',
            'description' => '800 x 200 x 18 mm',
            'picture' => 'https://media.discordapp.net/attachments/933270656282398750/933650854232358912/bois_decoratif.PNG',
            'price' => 10,
            'ranking' => 5,
        ],
        4 => [
            'name' => 'Adhésif de masquage crêpe',
            'description' => 'Duck® ( 30mm x 50m )',
            'picture' => 'https://media.discordapp.net/attachments/933270656282398750/933650969986732042/scotch.PNG',
            'price' => 3,
            'ranking' => 4,
        ],
        5 => [
            'name' => 'Rouleau anti-goutte avec rallonge',
            'description' => 'SAVY 180 mm',
            'picture' => 'https://media.discordapp.net/attachments/933270656282398750/933650969663795220/rouleau.PNG',
            'price' => 18,
            'ranking' => 5,
        ],
        6 => [
            'name' => 'Colle à bois rapide intérieure',
            'description' => '250 grammes',
            'picture' => 'https://media.discordapp.net/attachments/933270656282398750/933650969412116510/colle2.PNG',
            'price' => 15,
            'ranking' => 5,
        ],
        7 => [
            'name' => 'Peinture Crème De Couleur Satin Zeste D\'Orange',
            'description' => '0,5 L - Dulux Valentine',
            'picture' => 'https://media.discordapp.net/attachments/933270656282398750/933653026944725052/peinture.jpg',
            'price' => 18,
            'ranking' => 5,
        ],
        8 => [
            'name' => 'Peinture Blanc Mat pour Murs & Plafonds',
            'description' => 'Sous-Couche Intégrée, 2,5L Ripolin - Blanc',
            'picture' => 'https://media.discordapp.net/attachments/933270656282398750/933653027301253120/peinture_blanche.jpg',
            'price' => 25,
            'ranking' => 4,
        ],
        9 => [
            'name' => 'Planchette Chêne brut Grade A',
            'description' => '50x250 | 1.25 mètre carré',
            'picture' => 'https://media.discordapp.net/attachments/933270656282398750/933650853989081169/bois.PNG',
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
