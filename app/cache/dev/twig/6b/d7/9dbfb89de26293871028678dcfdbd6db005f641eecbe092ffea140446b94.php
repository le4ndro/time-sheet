<?php

/* ImaginativoTSBundle:Membro:show.html.twig */
class __TwigTemplate_6bd79dbfb89de26293871028678dcfdbd6db005f641eecbe092ffea140446b94 extends Twig_Template
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
        echo "<h1>Membro</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Nome:</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cargo:</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cargo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Função:</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "funcao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Carga Horária Diária:</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cargaHorariaDia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Obs:</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "obs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valor Hora:</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valorHora", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status:</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id:</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    
    <div class=\"row\"> 
        <div class=\"col-md-8\">   
        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("membro");
        echo "\" class=\"btn btn-primary\">
            Ir para a lista de membros
        </a>
    
        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membro_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            Editar
        </a>
        ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Membro:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 56,  120 => 53,  113 => 49,  103 => 42,  96 => 38,  89 => 34,  82 => 30,  75 => 26,  68 => 22,  61 => 18,  54 => 14,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
