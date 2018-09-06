<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Post;

class PostController extends Controller
{
     /**
     * @Route("/post", name="view_posts_route")
     */
    public function showAllPostsAction(Request $request)
    {  $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->findAll();
       // echo '<pre>';
       // print_r($posts);
       // echo '</pre>';
       return $this->render('pages/index.html.twig',['posts'=>$posts]);
    }
     /**
     * @Route("/create", name="create_post_route")
     */
    public function createPostsAction(Request $request)
    {
       return $this->render('pages/create.html.twig');
    }
     /**
     * @Route("/view/{id}", name="view_post_route")
     */
    public function viewPostsAction($id)
    {
        echo $id;
        return $this->render('pages/view.html.twig');
    }
         /**
     * @Route("/edit/{id}", name="edit_post_route")
     */
    public function editPostsAction($id)
    {
        echo $id;
        return $this->render('pages/edit.html.twig');
    }
            /**
     * @Route("/delete/{id}", name="delete_post_route")
     */
    public function deletePostsAction($id)
    {
        echo $id;
        return $this->render('pages/delete.html.twig');
    }
}

