<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public const PRODUCT = [
        1 => [
            'name' => 'dfj',
            'description' => 'sdcfsf',
            'picture' => 'url',
            'price' => 4,
            'ranking' => 5,
        ],
        2 => [
            'name' => 'dfj',
            'description' => 'sdcfsf',
            'picture' => 'url',
            'price' => 4,
            'ranking' => 5,
        ],
        3 => [
            'name' => 'dfj',
            'description' => 'sdcfsf',
            'picture' => 'url',
            'price' => 4,
            'ranking' => 5,
        ],
        4 => [
            'name' => 'dfj',
            'description' => 'sdcfsf',
            'picture' => 'url',
            'price' => 4,
            'ranking' => 5,
        ],
        5 => [
            'name' => 'dfj',
            'description' => 'sdcfsf',
            'picture' => 'url',
            'price' => 4,
            'ranking' => 5,
        ],
        6 => [
            'name' => 'dfj',
            'description' => 'sdcfsf',
            'picture' => 'url',
            'price' => 4,
            'ranking' => 5,
        ],
        7 => [
            'name' => 'dfj',
            'description' => 'sdcfsf',
            'picture' => 'url',
            'price' => 4,
            'ranking' => 5,
        ],
        8 => [
            'name' => 'dfj',
            'description' => 'sdcfsf',
            'picture' => 'url',
            'price' => 4,
            'ranking' => 5,
        ],
        9 => [
            'name' => 'dfj',
            'description' => 'sdcfsf',
            'picture' => 'url',
            'price' => 4,
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
