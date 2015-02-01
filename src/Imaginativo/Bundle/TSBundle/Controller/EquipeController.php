<?php

namespace Imaginativo\Bundle\TSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imaginativo\Bundle\TSBundle\Entity\Equipe;
use Imaginativo\Bundle\TSBundle\Form\EquipeType;

/**
 * Equipe controller.
 *
 */
class EquipeController extends Controller
{

    /**
     * Lists all Equipe entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('ImaginativoTSBundle:Equipe')->findAll();
        
        $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
            ->setAction($this->generateUrl('equipe'))
            ->add('nome', 'text')
            ->add('Pesquisar', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
            $dql   = "SELECT a FROM ImaginativoTSBundle:Equipe a where a.nome like :nome";
            $query = $em->createQuery($dql);    
            $query->setParameters(['nome' => "%" . $data["nome"] . "%"]);
        }else{
            $dql   = "SELECT a FROM ImaginativoTSBundle:Equipe a";
            $query = $em->createQuery($dql);    
            
        }
         
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->get('page', 1)/*page number*/,
            3/*limit per page*/
        );

        return $this->render('ImaginativoTSBundle:Equipe:index.html.twig', array(
            'pagination' => $pagination, 'form' => $form->createView(),
        ));
    }
    /**
     * Creates a new Equipe entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Equipe();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            //valores padrão na criação da equipe
            $entity->setDtCriacao(new \Datetime());            
            $entity->setStatus(True);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('equipe_show', array('id' => $entity->getId())));
        }

        return $this->render('ImaginativoTSBundle:Equipe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Equipe entity.
     *
     * @param Equipe $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Equipe $entity)
    {
        $form = $this->createForm(new EquipeType(), $entity, array(
            'action' => $this->generateUrl('equipe_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Incluir'));

        return $form;
    }

    /**
     * Displays a form to create a new Equipe entity.
     *
     */
    public function newAction()
    {
        $entity = new Equipe();
        $form   = $this->createCreateForm($entity);

        return $this->render('ImaginativoTSBundle:Equipe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Equipe entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Equipe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Equipe:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Equipe entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Equipe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipe entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Equipe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Equipe entity.
    *
    * @param Equipe $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Equipe $entity)
    {
        $form = $this->createForm(new EquipeType(), $entity, array(
            'action' => $this->generateUrl('equipe_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Atualizar'));

        return $form;
    }
    /**
     * Edits an existing Equipe entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Equipe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equipe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('equipe_edit', array('id' => $id)));
        }

        return $this->render('ImaginativoTSBundle:Equipe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Equipe entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImaginativoTSBundle:Equipe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Equipe entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('equipe'));
    }

    /**
     * Creates a form to delete a Equipe entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('equipe_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Excluir'))
            ->getForm()
        ;
    }
    
    /**
     * Desabilita uma equipe mudando o seu campo status
     *
     * @param mixed $id The entity id
     *
     * 
     */
    public function desabilitarAction($id)
    {
        //$form = $this->createDeleteForm($id);
        //$form->handleRequest($request);

        //if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImaginativoTSBundle:Equipe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Equipe entity.');
            }

            $entity->setStatus(false);
            $em->flush();
        //}

        return $this->redirect($this->generateUrl('equipe'));
    }
}
