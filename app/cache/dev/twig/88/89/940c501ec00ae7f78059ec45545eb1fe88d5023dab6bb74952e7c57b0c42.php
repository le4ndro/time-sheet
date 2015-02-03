<?php

/* ImaginativoTSBundle:Contato:edit.html.twig */
class __TwigTemplate_8889940c501ec00ae7f78059ec45545eb1fe88d5023dab6bb74952e7c57b0c42 extends Twig_Template
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
           <h1>Contato edit</h1>

           ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo " 
       </div>
   </div>

<div class=\"row\">
    <p>    
    <div class=\"col-md-2\">       
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("contato");
        echo "\" class=\"btn btn-primary\">
            Ir para lista de contatos
        </a>
    </div>
    <div class=\"col-md-1\">        
        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    </div>
    </p>
</div>  
";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Contato:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  55 => 15,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
