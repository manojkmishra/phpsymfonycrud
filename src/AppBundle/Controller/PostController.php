<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Post;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



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
    {  $post= new Post;
        $form=$this->createFormBuilder($post)
        ->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
        ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control')))
        ->add('category', TextType::class, array('attr' => array('class' => 'form-control')))
        ->add('save', SubmitType::class, array('label' =>'Create Post', 'attr'=>array('class' => 'btn-btn-primary')))
        ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $title=$form['title']->getData();
            $description=$form['description']->getData();
            $category=$form['category']->getData();
          
            $post->setTitle($title);
            $post->setDescription($description);
            $post->setCategory($category);

            $em=$this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            $this->addFlash('message','Post Created');
            return $this->redirectToRoute('view_posts_route');


        }

       return $this->render('pages/create.html.twig', ['form'=>$form->createView()]);
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

