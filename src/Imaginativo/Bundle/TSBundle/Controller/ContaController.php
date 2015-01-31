<?php

namespace Imaginativo\Bundle\TSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imaginativo\Bundle\TSBundle\Entity\Conta;
use Imaginativo\Bundle\TSBundle\Form\ContaType;

/**
 * Conta controller.
 *
 */
class ContaController extends Controller
{

    /**
     * Lists all Conta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImaginativoTSBundle:Conta')->findAll();

        return $this->render('ImaginativoTSBundle:Conta:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Conta entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Conta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //Valores padrão
            $entity->setDtCriacao(new \DateTime());
            $entity->setStatus(True);
            //
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('conta_show', array('id' => $entity->getId())));
        }

        return $this->render('ImaginativoTSBundle:Conta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Conta entity.
     *
     * @param Conta $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Conta $entity)
    {
        $form = $this->createForm(new ContaType(), $entity, array(
            'action' => $this->generateUrl('conta_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Incluir'));

        return $form;
    }

    /**
     * Displays a form to create a new Conta entity.
     *
     */
    public function newAction()
    {
        $entity = new Conta();
        $form   = $this->createCreateForm($entity);

        return $this->render('ImaginativoTSBundle:Conta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Conta entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Conta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Conta:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Conta entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Conta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conta entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Conta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Conta entity.
    *
    * @param Conta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Conta $entity)
    {
        $form = $this->createForm(new ContaType(), $entity, array(
            'action' => $this->generateUrl('conta_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Atualizar'));

        return $form;
    }
    /**
     * Edits an existing Conta entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Conta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('conta_edit', array('id' => $id)));
        }

        return $this->render('ImaginativoTSBundle:Conta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Conta entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImaginativoTSBundle:Conta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Conta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('conta'));
    }

    /**
     * Creates a form to delete a Conta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('conta_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Excluir'))
            ->getForm()
        ;
    }
}
