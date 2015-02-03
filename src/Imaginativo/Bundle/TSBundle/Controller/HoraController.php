<?php

namespace Imaginativo\Bundle\TSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imaginativo\Bundle\TSBundle\Entity\Hora;
use Imaginativo\Bundle\TSBundle\Form\HoraType;

/**
 * Hora controller.
 *
 */
class HoraController extends Controller
{

    /**
     * Lists all Hora entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImaginativoTSBundle:Hora')->findAll();

        return $this->render('ImaginativoTSBundle:Hora:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Hora entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hora();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hora_show', array('id' => $entity->getId())));
        }

        return $this->render('ImaginativoTSBundle:Hora:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hora entity.
     *
     * @param Hora $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hora $entity)
    {
        $form = $this->createForm(new HoraType(), $entity, array(
            'action' => $this->generateUrl('hora_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hora entity.
     *
     */
    public function newAction()
    {
        $entity = new Hora();
        $form   = $this->createCreateForm($entity);

        return $this->render('ImaginativoTSBundle:Hora:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hora entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Hora')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hora entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Hora:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hora entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Hora')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hora entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Hora:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hora entity.
    *
    * @param Hora $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hora $entity)
    {
        $form = $this->createForm(new HoraType(), $entity, array(
            'action' => $this->generateUrl('hora_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hora entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Hora')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hora entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hora_edit', array('id' => $id)));
        }

        return $this->render('ImaginativoTSBundle:Hora:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hora entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImaginativoTSBundle:Hora')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hora entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hora'));
    }

    /**
     * Creates a form to delete a Hora entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hora_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
