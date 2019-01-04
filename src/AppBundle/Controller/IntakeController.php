<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Intake;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Intake controller.
 *
 * @Route("intake")
 */
class IntakeController extends Controller
{
    /**
     * Lists all intake entities.
     *
     * @Route("/", name="intake_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $intakes = $em->getRepository('AppBundle:Intake')->findAll();

        return $this->render('intake/index.html.twig', array(
            'intakes' => $intakes,
        ));
    }

    /**
     * Creates a new intake entity.
     *
     * @Route("/new", name="intake_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $intake = new Intake();
        $form = $this->createForm('AppBundle\Form\IntakeType', $intake);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($intake);
            $em->flush();

            return $this->redirectToRoute('intake_show', array('id' => $intake->getId()));
        }

        return $this->render('intake/new.html.twig', array(
            'intake' => $intake,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a intake entity.
     *
     * @Route("/{id}", name="intake_show")
     * @Method("GET")
     */
    public function showAction(Intake $intake)
    {
        $deleteForm = $this->createDeleteForm($intake);

        return $this->render('intake/show.html.twig', array(
            'intake' => $intake,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing intake entity.
     *
     * @Route("/{id}/edit", name="intake_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Intake $intake)
    {
        $deleteForm = $this->createDeleteForm($intake);
        $editForm = $this->createForm('AppBundle\Form\IntakeType', $intake);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('intake_edit', array('id' => $intake->getId()));
        }

        return $this->render('intake/edit.html.twig', array(
            'intake' => $intake,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a intake entity.
     *
     * @Route("/{id}", name="intake_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Intake $intake)
    {
        $form = $this->createDeleteForm($intake);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($intake);
            $em->flush();
        }

        return $this->redirectToRoute('intake_index');
    }

    /**
     * Creates a form to delete a intake entity.
     *
     * @param Intake $intake The intake entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Intake $intake)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('intake_delete', array('id' => $intake->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
