<?php

namespace Imaginativo\Bundle\TSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imaginativo\Bundle\TSBundle\Entity\Despesa;
use Imaginativo\Bundle\TSBundle\Form\DespesaType;

/**
 * Despesa controller.
 *
 */
class DespesaController extends Controller
{

    /**
     * Lists all Despesa entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImaginativoTSBundle:Despesa')->findAll();

        return $this->render('ImaginativoTSBundle:Despesa:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Despesa entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Despesa();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('despesa_show', array('id' => $entity->getId())));
        }

        return $this->render('ImaginativoTSBundle:Despesa:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Despesa entity.
     *
     * @param Despesa $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Despesa $entity)
    {
        $form = $this->createForm(new DespesaType(), $entity, array(
            'action' => $this->generateUrl('despesa_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Despesa entity.
     *
     */
    public function newAction()
    {
        $entity = new Despesa();
        $form   = $this->createCreateForm($entity);

        return $this->render('ImaginativoTSBundle:Despesa:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Despesa entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Despesa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Despesa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Despesa:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Despesa entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Despesa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Despesa entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Despesa:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Despesa entity.
    *
    * @param Despesa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Despesa $entity)
    {
        $form = $this->createForm(new DespesaType(), $entity, array(
            'action' => $this->generateUrl('despesa_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Despesa entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Despesa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Despesa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('despesa_edit', array('id' => $id)));
        }

        return $this->render('ImaginativoTSBundle:Despesa:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Despesa entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImaginativoTSBundle:Despesa')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Despesa entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('despesa'));
    }

    /**
     * Creates a form to delete a Despesa entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('despesa_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
