<?php

namespace Imaginativo\Bundle\TSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imaginativo\Bundle\TSBundle\Entity\Fase;
use Imaginativo\Bundle\TSBundle\Form\FaseType;

/**
 * Fase controller.
 *
 */
class FaseController extends Controller
{

    /**
     * Lists all Fase entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImaginativoTSBundle:Fase')->findAll();

        return $this->render('ImaginativoTSBundle:Fase:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Fase entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Fase();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fase_show', array('id' => $entity->getId())));
        }

        return $this->render('ImaginativoTSBundle:Fase:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Fase entity.
     *
     * @param Fase $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Fase $entity)
    {
        $form = $this->createForm(new FaseType(), $entity, array(
            'action' => $this->generateUrl('fase_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Fase entity.
     *
     */
    public function newAction()
    {
        $entity = new Fase();
        $form   = $this->createCreateForm($entity);

        return $this->render('ImaginativoTSBundle:Fase:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fase entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Fase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fase entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Fase:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Fase entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Fase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fase entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Fase:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Fase entity.
    *
    * @param Fase $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Fase $entity)
    {
        $form = $this->createForm(new FaseType(), $entity, array(
            'action' => $this->generateUrl('fase_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Fase entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Fase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fase entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fase_edit', array('id' => $id)));
        }

        return $this->render('ImaginativoTSBundle:Fase:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Fase entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImaginativoTSBundle:Fase')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Fase entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fase'));
    }

    /**
     * Creates a form to delete a Fase entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fase_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
