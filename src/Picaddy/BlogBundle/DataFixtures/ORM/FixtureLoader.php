<?php

namespace Picaddy\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Picaddy\BlogBundle\Entity\Categorie;
use Picaddy\BlogBundle\Entity\Utilisateur;
use Picaddy\BlogBundle\Entity\Commentaire;
use Picaddy\BlogBundle\Entity\Article;

class FixtureLoader implements FixtureInterface
{
    public function load($manager)
    {
        //Création d'un utilisateur
        $utilisateur = new Utilisateur();
        $utilisateur->init("Tony","Cois","Picaddy","tony.cois@picaddy.com");
        
        $manager->persist($utilisateur);

        //Creation d'une categorie
        $categorie = new Categorie();
        $categorie->setLibelle("Symfony2");

        $manager->persist($categorie);

        //Création d'un article
        $article = new Article();
        $article->setTitre("Découverte de Symfony2");
        $article->setDescription("Bienvenue sur picaddy");
        $article->setSlug("decouverte-de-symfony");
        $article->setAuteur($utilisateur);

        $manager->persist($article);
        

        $manager->flush();
    }
}
?>