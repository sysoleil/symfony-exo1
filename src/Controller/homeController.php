<?php

namespace App\Controller;

use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class homeController extends abstractController

{
    /**
     * @Route("/articles", name="articles")
     */
    public function articles()
    {
           $articles = [
               1 => [
                   'title' => 'Article 1',
                   'image' => 'https://www.music-covers-creations.com/wp-content/uploads/2019/10/Cr%C3%A9dit-Screenshot-Vid%C3%A9o-Vincent-Lagaf-Facebook.jpg'
               ],
               2 => [
                   'title' => 'Article 2',
                   'image' => 'https://cdn-elle.ladmedia.fr/var/plain_site/storage/images/societe/news/apres-sa-blague-sur-les-violences-conjugales-tex-ne-presentera-plus-les-z-amours-3590966/85241129-1-fre-FR/Apres-sa-blague-sur-les-violences-conjugales-Tex-ne-presentera-plus-les-Z-amours.jpg'
               ],
               3 => [
                   'title' => 'Article 3',
                   'image' => 'https://www.merci-maman.eu/wp-content/uploads/2020/03/Jean-Luc-Reichmann-800x445.jpg'
               ],
               4 => [
                   'title' => 'Article 4',
                   'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e3/Mimie_Mathy_Cannes.jpg'
               ],
               5 => [
                   'title' => 'Article 5',
                   'image' => 'https://www.music-covers-creations.com/wp-content/uploads/2019/10/Cr%C3%A9dit-Screenshot-Vid%C3%A9o-Vincent-Lagaf-Facebook.jpg'
               ],
               6 => [
                   'title' => 'Article 6',
                   'image' => 'https://www.music-covers-creations.com/wp-content/uploads/2019/10/Cr%C3%A9dit-Screenshot-Vid%C3%A9o-Vincent-Lagaf-Facebook.jpg'
               ],
               7 => [
                   'title' => 'Article 7',
                   'image' => 'https://www.music-covers-creations.com/wp-content/uploads/2019/10/Cr%C3%A9dit-Screenshot-Vid%C3%A9o-Vincent-Lagaf-Facebook.jpg'
               ]
           ];
        return $this->render('articles.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * @Route ("/home", name="home")
     */
    public function home()
    {
 //Je retourne mon adresse url vers le twig
        //
        $articles = [
            1 => [
                'title' => 'Article 1',
                'image' => 'https://www.music-covers-creations.com/wp-content/uploads/2019/10/Cr%C3%A9dit-Screenshot-Vid%C3%A9o-Vincent-Lagaf-Facebook.jpg'
            ],
            2 => [
                'title' => 'Article 2',
                'image' => 'https://cdn-elle.ladmedia.fr/var/plain_site/storage/images/societe/news/apres-sa-blague-sur-les-violences-conjugales-tex-ne-presentera-plus-les-z-amours-3590966/85241129-1-fre-FR/Apres-sa-blague-sur-les-violences-conjugales-Tex-ne-presentera-plus-les-Z-amours.jpg'
            ],
            3 => [
                'title' => 'Article 3',
                'image' => 'https://www.merci-maman.eu/wp-content/uploads/2020/03/Jean-Luc-Reichmann-800x445.jpg'
            ],
            4 => [
                'title' => 'Article 4',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e3/Mimie_Mathy_Cannes.jpg'
            ],
            5 => [
                'title' => 'Article 5',
                'image' => 'https://www.music-covers-creations.com/wp-content/uploads/2019/10/Cr%C3%A9dit-Screenshot-Vid%C3%A9o-Vincent-Lagaf-Facebook.jpg'
            ],
            6 => [
                'title' => 'Article 6',
                'image' => 'https://www.music-covers-creations.com/wp-content/uploads/2019/10/Cr%C3%A9dit-Screenshot-Vid%C3%A9o-Vincent-Lagaf-Facebook.jpg'
            ],
            7 => [
                'title' => 'Article 7',
                'image' => 'https://www.music-covers-creations.com/wp-content/uploads/2019/10/Cr%C3%A9dit-Screenshot-Vid%C3%A9o-Vincent-Lagaf-Facebook.jpg'
            ]
        ];
        return $this->render('home.html.twig',[
            'articles' => $articles
        ]);
    }
}