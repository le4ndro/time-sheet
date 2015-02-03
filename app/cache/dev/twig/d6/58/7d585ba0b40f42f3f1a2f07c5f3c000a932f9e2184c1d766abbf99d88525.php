<?php

/* ImaginativoTSBundle:Endereco:edit.html.twig */
class __TwigTemplate_d6587d585ba0b40f42f3f1a2f07c5f3c000a932f9e2184c1d766abbf99d88525 extends Twig_Template
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
        <h1>Editar Endereço</h1>

        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "


        <!--
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("endereco");
        echo "\">
            Back to the list
        </a>
        -->
        <br/>  
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
        </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Endereco:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  52 => 12,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
