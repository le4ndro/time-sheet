<?php

/* ImaginativoTSBundle:Cliente:new.html.twig */
class __TwigTemplate_34c9a8d94781bf3f94f6fd9185878bbc1ad053066a4bf8afb24b7edbd3e2e7fc extends Twig_Template
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
        echo "<h1>Novo Cliente</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <br/>    
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\" class=\"btn btn-primary\">
        Voltar para a lista de clientes
    </a>
    
";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Cliente:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
