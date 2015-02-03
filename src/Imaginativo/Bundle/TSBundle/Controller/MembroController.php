<?php

namespace Imaginativo\Bundle\TSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imaginativo\Bundle\TSBundle\Entity\Membro;
use Imaginativo\Bundle\TSBundle\Form\MembroType;
use Imaginativo\Bundle\TSBundle\Form\MembroEquipeType;

/**
 * Membro controller.
 *
 */
class MembroController extends Controller
{

    /**
     * Lists all Membro entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImaginativoTSBundle:Membro')->findAll();

        return $this->render('ImaginativoTSBundle:Membro:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Membro entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Membro();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setStatus(true);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('membro_show', array('id' => $entity->getId())));
        }

        return $this->render('ImaginativoTSBundle:Membro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    public function createMembroEquipeAction(Request $request, $id)
    {
        $entity = new Membro();
        $form = $this->createCreateFormMembroEquipe($entity, $id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $equipe = $em->getRepository('ImaginativoTSBundle:Equipe')->find($id);
            $entity->setEquipe($equipe);
            $entity->setStatus(true);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('equipe_show', array('id' => $id)));
        }

        return $this->render('ImaginativoTSBundle:Membro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Membro entity.
     *
     * @param Membro $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Membro $entity)
    {
        $form = $this->createForm(new MembroType(), $entity, array(
            'action' => $this->generateUrl('membro_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Incluir'));

        return $form;
    }
    
    private function createCreateFormMembroEquipe(Membro $entity, $id)
    {
        $form = $this->createForm(new MembroEquipeType(), $entity, array(
            'action' => $this->generateUrl('membro_equipe_create', array('id' => $id)),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Incluir'));

        return $form;
    }

    /**
     * Displays a form to create a new Membro entity.
     *
     */
    public function newAction()
    {
        $entity = new Membro();
        $form   = $this->createCreateForm($entity);

        return $this->render('ImaginativoTSBundle:Membro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    public function newMembroEquipeAction($id)
    {
        $entity = new Membro();
        $form   = $this->createCreateFormMembroEquipe($entity, $id);

        return $this->render('ImaginativoTSBundle:Membro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Membro entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Membro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Membro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Membro:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Membro entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Membro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Membro entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Membro:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Membro entity.
    *
    * @param Membro $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Membro $entity)
    {
        $form = $this->createForm(new MembroType(), $entity, array(
            'action' => $this->generateUrl('membro_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Atualizar'));

        return $form;
    }
    /**
     * Edits an existing Membro entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Membro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Membro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('membro_edit', array('id' => $id)));
        }

        return $this->render('ImaginativoTSBundle:Membro:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Membro entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImaginativoTSBundle:Membro')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Membro entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('membro'));
    }

    /**
     * Creates a form to delete a Membro entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('membro_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Excluir'))
            ->getForm()
        ;
    }
    
    /**
     * Desativa o Membro mudando seu campo status para false.
     *
     * @param mixed $id The entity id
     *
     * 
     */
    public function desabilitarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ImaginativoTSBundle:Membro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipe entity.');
        }

        $entity->setStatus(false);
        $em->flush();

        return $this->redirect($this->generateUrl('membro'));
    }
}
