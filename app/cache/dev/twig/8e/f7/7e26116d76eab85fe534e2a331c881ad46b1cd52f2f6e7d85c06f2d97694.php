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
    
    <div class=\"col-sm-6\">
    <h1>Equipe</h1>
       <table class=\"record_properties table table-striped table-bordered table-condensed\">
        <tbody>
            <tr>
                <th>ID:</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome:</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descrição:</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descricao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Obs:</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "obs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Criado em:</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dtCriacao", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status:</th>
                <td>";
        // line 32
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array())) {
            echo " Ativo ";
        } else {
            echo " Inativo ";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Lider:</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "responsavel", array(), "any", false, true), "nome", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "responsavel", array(), "any", false, true), "nome", array()), "")) : ("")), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
    <div class=\"row\"> <p></p> </div>
    
    <div class=\"row\">
        <div class=\"col-sm-2\">
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("equipe");
        echo "\" class=\"btn btn-primary\">
                Ir para a lista de equipes
            </a>
        </div>
          <div class=\"col-sm-1\">
            <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                Editar 
            </a>    
        </div>
        <div class=\"clearfix col-sm-1\">
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_desabilitar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                Desabilitar
            </a>
        </div>
        <div class=\"clearfix\">   
            <!-- ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo " -->
         </div>
    </div>

    
    <!-- Membros -->
<div class=\"row\">   
<div class=\"col-md-3\"> 
<h2>Membros</h2>
            
    <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membro_equipe_new", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
    Novo membro
</a>
<br/><br/>
</div>    
</div>
<div class=\"row\">
   <div class=\"col-md-12\">
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
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "membros", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["membro"]) {
            // line 94
            echo "            <tr>
                <td><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membro_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["membro"], "nome", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["membro"], "cargo", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["membro"], "email", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 100
            if ($this->getAttribute($context["membro"], "status", array())) {
                echo " Ativo ";
            } else {
                echo " Inativo ";
            }
            echo "</td>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["membro"], "id", array()), "html", null, true);
            echo "</td>
                <td>

                    <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membro_show", array("id" => $this->getAttribute($context["membro"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Exibir</a>

                    <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("membro_edit", array("id" => $this->getAttribute($context["membro"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>

                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "        </tbody>
    </table>
    </div>
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
        return array (  223 => 111,  212 => 106,  207 => 104,  201 => 101,  193 => 100,  188 => 98,  183 => 96,  177 => 95,  174 => 94,  170 => 93,  145 => 71,  132 => 61,  124 => 56,  116 => 51,  108 => 46,  95 => 36,  84 => 32,  77 => 28,  70 => 24,  63 => 20,  56 => 16,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
