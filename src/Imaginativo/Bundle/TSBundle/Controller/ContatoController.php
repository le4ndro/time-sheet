<?php

namespace Imaginativo\Bundle\TSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imaginativo\Bundle\TSBundle\Entity\Contato;
use Imaginativo\Bundle\TSBundle\Form\ContatoType;

/**
 * Contato controller.
 *
 */
class ContatoController extends Controller
{

    /**
     * Lists all Contato entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImaginativoTSBundle:Contato')->findAll();

        return $this->render('ImaginativoTSBundle:Contato:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Contato entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Contato();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contato_show', array('id' => $entity->getId())));
        }

        return $this->render('ImaginativoTSBundle:Contato:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    /**
     * Creates a new Contato entity.
     *
     */
    public function createContatoClienteAction(Request $request, $id)
    {
        $entity = new Contato();
        $form = $this->createContatoClienteCreateForm($entity, $id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $cliente = $em->getRepository('ImaginativoTSBundle:Cliente')->find($id);
            $entity->setCliente($cliente);
            $entity->setStatus(true);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contato_show', array('id' => $entity->getId())));
        }

        return $this->render('ImaginativoTSBundle:Contato:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Contato entity.
     *
     * @param Contato $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Contato $entity)
    {
        $form = $this->createForm(new ContatoType(), $entity, array(
            'action' => $this->generateUrl('contato_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Incluir'));

        return $form;
    }
    
    /**
     * Creates a form to create a Contato entity.
     *
     * @param Contato $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createContatoClienteCreateForm(Contato $entity, $id)
    {
        $form = $this->createForm(new ContatoType(), $entity, array(
            'action' => $this->generateUrl('contato_cliente_create', array('id' => $id)),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Incluir'));

        return $form;
    }

    /**
     * Displays a form to create a new Contato entity.
     *
     */
    public function newAction()
    {
        $entity = new Contato();
        $form   = $this->createCreateForm($entity);

        return $this->render('ImaginativoTSBundle:Contato:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    public function newContatoClienteAction($id)
    {
        $entity = new Contato();
        $form   = $this->createContatoClienteCreateForm($entity, $id);

        return $this->render('ImaginativoTSBundle:Contato:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Contato entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Contato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contato entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Contato:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Contato entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Contato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contato entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Contato:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Contato entity.
    *
    * @param Contato $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Contato $entity)
    {
        $form = $this->createForm(new ContatoType(), $entity, array(
            'action' => $this->generateUrl('contato_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Atualizar'));

        return $form;
    }
    /**
     * Edits an existing Contato entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Contato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contato entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('contato_edit', array('id' => $id)));
        }

        return $this->render('ImaginativoTSBundle:Contato:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Contato entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImaginativoTSBundle:Contato')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contato entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contato'));
    }

    /**
     * Creates a form to delete a Contato entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contato_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Excluir'))
            ->getForm()
        ;
    }
}
