<?php

/* ImaginativoTSBundle:Endereco:new.html.twig */
class __TwigTemplate_63be5b7e5d604fd25e21d1f28be60810574316249287d54ac9740a02cdbc8a41 extends Twig_Template
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
           
       
        <h1>Novo Endereço</h1>

        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <!--    
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("endereco");
        echo "\">
            Ir para lista de endereço
        </a>
        -->
    
       </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Endereco:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
