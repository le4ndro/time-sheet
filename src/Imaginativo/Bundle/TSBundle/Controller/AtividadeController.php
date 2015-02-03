<?php

namespace Imaginativo\Bundle\TSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imaginativo\Bundle\TSBundle\Entity\Atividade;
use Imaginativo\Bundle\TSBundle\Form\AtividadeType;

/**
 * Atividade controller.
 *
 */
class AtividadeController extends Controller
{

    /**
     * Lists all Atividade entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImaginativoTSBundle:Atividade')->findAll();

        return $this->render('ImaginativoTSBundle:Atividade:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Atividade entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Atividade();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('atividade_show', array('id' => $entity->getId())));
        }

        return $this->render('ImaginativoTSBundle:Atividade:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Atividade entity.
     *
     * @param Atividade $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Atividade $entity)
    {
        $form = $this->createForm(new AtividadeType(), $entity, array(
            'action' => $this->generateUrl('atividade_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Atividade entity.
     *
     */
    public function newAction()
    {
        $entity = new Atividade();
        $form   = $this->createCreateForm($entity);

        return $this->render('ImaginativoTSBundle:Atividade:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Atividade entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Atividade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Atividade entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Atividade:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Atividade entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Atividade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Atividade entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Atividade:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Atividade entity.
    *
    * @param Atividade $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Atividade $entity)
    {
        $form = $this->createForm(new AtividadeType(), $entity, array(
            'action' => $this->generateUrl('atividade_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Atividade entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Atividade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Atividade entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('atividade_edit', array('id' => $id)));
        }

        return $this->render('ImaginativoTSBundle:Atividade:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Atividade entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImaginativoTSBundle:Atividade')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Atividade entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('atividade'));
    }

    /**
     * Creates a form to delete a Atividade entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('atividade_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
