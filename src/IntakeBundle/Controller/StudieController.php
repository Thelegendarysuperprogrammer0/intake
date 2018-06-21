<?php

namespace IntakeBundle\Controller;

use IntakeBundle\Entity\Studie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Studie controller.
 *
 * @Route("studie")
 */
class StudieController extends Controller
{
    /**
     * Lists all studie entities.
     *
     * @Route("/", name="studie_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $studies = $em->getRepository('IntakeBundle:Studie')->findAll();

        return $this->render('IntakeBundle:studie:index.html.twig', array(
            'studies' => $studies,
        ));
    }

    /**
     * Creates a new studie entity.
     *
     * @Route("/new", name="studie_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $studie = new Studie();
        $form = $this->createForm('IntakeBundle\Form\StudieType', $studie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($studie);
            $em->flush();

            return $this->redirectToRoute('studie_show', array('id' => $studie->getId()));
        }

        return $this->render('IntakeBundle:studie:new.html.twig', array(
            'studie' => $studie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a studie entity.
     *
     * @Route("/{id}", name="studie_show")
     * @Method("GET")
     */
    public function showAction(Studie $studie)
    {
        $deleteForm = $this->createDeleteForm($studie);

        return $this->render('IntakeBundle:studie:show.html.twig', array(
            'studie' => $studie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing studie entity.
     *
     * @Route("/{id}/edit", name="studie_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Studie $studie)
    {
        $deleteForm = $this->createDeleteForm($studie);
        $editForm = $this->createForm('IntakeBundle\Form\StudieType', $studie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('studie_edit', array('id' => $studie->getId()));
        }

        return $this->render('IntakeBundle:studie:edit.html.twig', array(
            'studie' => $studie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a studie entity.
     *
     * @Route("/{id}", name="studie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Studie $studie)
    {
        $form = $this->createDeleteForm($studie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($studie);
            $em->flush();
        }

        return $this->redirectToRoute('studie_index');
    }

    /**
     * Creates a form to delete a studie entity.
     *
     * @param Studie $studie The studie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Studie $studie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('studie_delete', array('id' => $studie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
