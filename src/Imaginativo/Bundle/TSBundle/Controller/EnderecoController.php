<?php

namespace Imaginativo\Bundle\TSBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imaginativo\Bundle\TSBundle\Entity\Endereco;
use Imaginativo\Bundle\TSBundle\Form\EnderecoType;

use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Endereco controller.
 *
 */
class EnderecoController extends Controller
{

    /**
     * Lists all Endereco entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImaginativoTSBundle:Endereco')->findAll();

        return $this->render('ImaginativoTSBundle:Endereco:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Endereco entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Endereco();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $session = new Session();
            
            if ($session->get('origem') == 'cliente'){
                $cliente = $em->getRepository('ImaginativoTSBundle:Cliente')->find($session->get('idCliente'));
                $cliente->setEndereco($entity);
                $em->persist($cliente);
                $em->flush();
                return $this->redirect($this->generateUrl('cliente_show', array('id' => $cliente->getId())));
            }else if($session->get('origem') == 'conta'){
                $conta = $em->getRepository('ImaginativoTSBundle:Conta')->find($session->get('idConta'));
                $conta->setEndereco($entity);
                $em->persist($conta);
                $em->flush();
                return $this->redirect($this->generateUrl('conta_show', array('id' => $conta->getId())));
            }
            
            //return $this->redirect($this->generateUrl('endereco_show', array('id' => $entity->getId())));
        }

        return $this->render('ImaginativoTSBundle:Endereco:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Endereco entity.
     *
     * @param Endereco $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Endereco $entity)
    {
        $form = $this->createForm(new EnderecoType(), $entity, array(
            'action' => $this->generateUrl('endereco_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Incluir'));

        return $form;
    }

    /**
     * Displays a form to create a new Endereco entity.
     *
     */
    public function newAction()
    {
        $entity = new Endereco();
        $form   = $this->createCreateForm($entity);

        return $this->render('ImaginativoTSBundle:Endereco:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Endereco entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Endereco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Endereco entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Endereco:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Endereco entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Endereco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Endereco entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImaginativoTSBundle:Endereco:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Endereco entity.
    *
    * @param Endereco $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Endereco $entity)
    {
        $form = $this->createForm(new EnderecoType(), $entity, array(
            'action' => $this->generateUrl('endereco_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Atualizar'));

        return $form;
    }
    /**
     * Edits an existing Endereco entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImaginativoTSBundle:Endereco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Endereco entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $session = new Session();

            if ($session->get('origem') == 'cliente'){
                $cliente = $em->getRepository('ImaginativoTSBundle:Cliente')->find($session->get('idCliente'));
                return $this->redirect($this->generateUrl('cliente_show', array('id' => $cliente->getId())));
            }else if($session->get('origem') == 'conta'){
                $conta = $em->getRepository('ImaginativoTSBundle:Conta')->find($session->get('idConta'));
                return $this->redirect($this->generateUrl('conta_show', array('id' => $conta->getId())));
            }
            
            //return $this->redirect($this->generateUrl('endereco_edit', array('id' => $id)));
        }

        return $this->render('ImaginativoTSBundle:Endereco:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Endereco entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImaginativoTSBundle:Endereco')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Endereco entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('endereco'));
    }

    /**
     * Creates a form to delete a Endereco entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('endereco_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Excluir'))
            ->getForm()
        ;
    }
}
