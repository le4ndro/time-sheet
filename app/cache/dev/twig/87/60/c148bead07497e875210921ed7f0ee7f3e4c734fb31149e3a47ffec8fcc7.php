<?php

/* ImaginativoTSBundle:Equipe:new.html.twig */
class __TwigTemplate_8760c148bead07497e875210921ed7f0ee7f3e4c734fb31149e3a47ffec8fcc7 extends Twig_Template
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
        <h1>Nova Equipe</h1>

        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <br/>   
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("equipe");
        echo "\" class=\"btn btn-primary\">
            Ir para a lista de equipes
        </a>
        </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Equipe:new.html.twig";
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
