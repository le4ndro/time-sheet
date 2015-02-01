<?php

/* ImaginativoTSBundle:Equipe:show.html.twig */
class __TwigTemplate_8ef77e26116d76eab85fe534e2a331c881ad46b1cd52f2f6e7d85c06f2d97694 extends Twig_Template
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
    <h1>Equipe</h1>
    
    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Nome:</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrição:</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Obs:</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "obs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Criado em:</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dtCriacao", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status:</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id:</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"row\"> <p></p> </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-2\">
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("equipe");
        echo "\" class=\"btn btn-primary\">
                Ir para a lista de equipes
            </a>
        </div>
          <div class=\"col-sm-1\">
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                Editar 
            </a>    
        </div>
        <div class=\"clearfix col-sm-1\">
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_desabilitar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                Desabilitar
            </a>
        </div>
        <div class=\"clearfix\">   
            <!-- ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo " -->
         </div>
    </div>

    
    <!-- Membros -->
<div class=\"row\">    
<h1>Membros</h1>
            
    <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membro_equipe_new", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
    Novo membro
</a>
<br/><br/>    
</div>
<div class=\"row\">
    <table class=\"records_list table table-striped table-bordered table-condensed\">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cargo</th>

                <th>Email</th>

                <th>Status</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "membros", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["membro"]) {
            // line 84
            echo "            <tr>
                <td><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membro_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["membro"], "nome", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["membro"], "cargo", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["membro"], "email", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["membro"], "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["membro"], "id", array()), "html", null, true);
            echo "</td>
                <td>

                    <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membro_show", array("id" => $this->getAttribute($context["membro"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Exibir</a>

                    <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membro_edit", array("id" => $this->getAttribute($context["membro"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>

                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        </tbody>
    </table>
</div>
    <!-- Fim Membros -->
";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Equipe:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 101,  191 => 96,  186 => 94,  180 => 91,  176 => 90,  171 => 88,  166 => 86,  160 => 85,  157 => 84,  153 => 83,  130 => 63,  118 => 54,  110 => 49,  102 => 44,  94 => 39,  83 => 31,  76 => 27,  69 => 23,  62 => 19,  55 => 15,  48 => 11,  39 => 4,  36 => 3,  11 => 1,);
    }
}
