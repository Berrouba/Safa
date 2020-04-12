<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;
use App\Entity\Product;
use App\Entity\Fournisseur;
use App\Repository\FournisseurRepository;
use Faker\Factory;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $facker=Factory::create();
        for($i=0;$i<6;$i++)
        {
            $categ=new Category();
            $categ->setName("Category".$i);
            $manager->persist($categ);
                $limit=rand(5,10);
                for($j=0;$j<$limit;$j++)
                {
                    $product=new Product();
                    $product->setName("Produit".$j);
                    $product->setPrice(100*$j);
                    $product->setDescription($facker->address);
                    $product->setCategory($categ);
                    $manager->persist($product);

                        $limit = rand(1,5);
                        for($k=0;$k<$limit;$k++)
                        {
                            $four=new Fournisseur();
                            $four->setName($facker->name);
                            $four->setAdresse($facker->address);           
                            $manager->persist($four); 
                            $product->addFournisseur($four);
                            $manager->persist($product); 
    
                        }   

                }

        }
        $manager->flush();
    }
}
