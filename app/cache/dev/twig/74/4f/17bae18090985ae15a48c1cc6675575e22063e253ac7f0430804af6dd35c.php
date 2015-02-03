<?php

/* ImaginativoTSBundle:Equipe:edit.html.twig */
class __TwigTemplate_744f17bae18090985ae15a48c1cc6675575e22063e253ac7f0430804af6dd35c extends Twig_Template
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
        // line 5
        echo "<div class=\"row\">
    <div class=\"col-md-8\">
    <h1>Editar Equipe</h1>
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

    <br/>    
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("equipe");
        echo "\" class=\"btn btn-primary\">
        Ir para a lista de equipes
    </a>
    <br/><br/>
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Equipe:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  50 => 11,  44 => 8,  39 => 5,  36 => 3,  11 => 1,);
    }
}
