<?php

/* ImaginativoTSBundle:Contato:show.html.twig */
class __TwigTemplate_c33a496dfc2180126d8213902088c7c723f2d1bfcee8624fb9f023f4dcd66625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
    <div class=\"col-sm-6\">
        <h1>Contato</h1>

        <table class=\"record_properties table table-striped table-bordered table-condensed\">
        <tbody>
            <tr>
                <th>ID</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cargo</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cargo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Função</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "funcao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefone</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telefone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Celular</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "celular", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Obs</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "obs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 44
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array())) {
            echo " Ativo ";
        } else {
            echo " Inativo ";
        }
        echo "</td>
            </tr>
            
        </tbody>
    </table>
    </div>
</div>

<div class=\"row\"> 
    <div class=\"col-md-2\">   
        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("contato");
        echo "\" class=\"btn btn-primary\">
            Ir para a lista de contatos
        </a>
    </div>
    <div class=\"col-sm-1\">
        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contato_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            Editar
        </a>
    </div>
    <div class=\"clearfix col-sm-1\">
        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contato_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            Desabilitar
        </a>
    </div>
    <!-- ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo " -->

</div>
";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Contato:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 68,  138 => 64,  130 => 59,  122 => 54,  105 => 44,  98 => 40,  91 => 36,  84 => 32,  77 => 28,  70 => 24,  63 => 20,  56 => 16,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
