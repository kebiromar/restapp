<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 30/10/17
 * Time: 21:03
 */
namespace AppBundle\Controller;








use AppBundle\AppBundle;
use AppBundle\Entity\post;
use Symfony\Component\BrowserKit\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as Rest;

class PostController extends  Controller
{     /**
 * @Rest\View()
 * @Rest\Get("/list")
 */
      public function getlistAction()
      {
          $posts = $this->getDoctrine()->getManager()->getRepository('AppBundle:post')->findAll();
         /* $forma=[];
          foreach ($posts as $post)
          {
              $forma[]= ['id'=>$post->getId(),'content'=>$post->getContent() ];


          }
          $viewHandler = $this->get('fos_rest.view_handler');

          // Création d'une vue FOSRestBundle
          $view = View::create($forma);
          $view->setFormat('json');*/
          return $posts ;
      }
}