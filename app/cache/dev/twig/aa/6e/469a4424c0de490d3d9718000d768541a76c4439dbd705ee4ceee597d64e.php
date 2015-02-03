<?php

/* ImaginativoTSBundle:Conta:edit.html.twig */
class __TwigTemplate_aa6e469a4424c0de490d3d9718000d768541a76c4439dbd705ee4ceee597d64e extends Twig_Template
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
    <div class=\"col-md-8\">
    <h1>Editar Conta</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
    </div>
</div>    
<br/>
<div class=\"row\">   
    <div class=\"col-sm-2\">
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("conta");
        echo "\" class=\"btn btn-primary\">
            Ir para a lista de contas
        </a>  
    </div>
    <div class=\"col-sm-1\">    
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conta_endereco", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            Endereço
        </a>
    </div>
    <div class=\"col-sm-1\">
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_endereco", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            Desativar
        </a>
    </div>
    <!--
    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    -->
</div>
";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Conta:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  70 => 24,  62 => 19,  54 => 14,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
