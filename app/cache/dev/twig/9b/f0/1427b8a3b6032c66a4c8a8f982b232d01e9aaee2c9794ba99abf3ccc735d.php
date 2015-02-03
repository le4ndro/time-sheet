<?php

/* ImaginativoTSBundle:Projeto:new.html.twig */
class __TwigTemplate_9bf01427b8a3b6032c66a4c8a8f982b232d01e9aaee2c9794ba99abf3ccc735d extends Twig_Template
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
        echo "<h1>Novo Projeto</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <br/><br/>    
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("projeto");
        echo "\" class=\"btn btn-primary\">
        Voltar para lista de projetos
    </a>
   
";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Projeto:new.html.twig";
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
