<?php

/* ImaginativoTSBundle:Cliente:new.html.twig */
class __TwigTemplate_d187262c9c6c5b493a22df245bc2b628ea702cff68f89c04d60793b113ce282c extends Twig_Template
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
            <h1>Novo Cliente</h1>

            ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

            <br/>    
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\" class=\"btn btn-primary\">
                Ir para a lista de clientes
            </a>
        </div>
    </div>
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
        return array (  51 => 11,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}