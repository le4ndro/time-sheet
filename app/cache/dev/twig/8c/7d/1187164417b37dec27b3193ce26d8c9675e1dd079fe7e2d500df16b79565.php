<?php

/* ImaginativoTSBundle:Equipe:index.html.twig */
class __TwigTemplate_8c7d1187164417b37dec27b3193ce26d8c9675e1dd079fe7e2d500df16b79565 extends Twig_Template
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

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<h1>Equipes</h1>
<div class=\"row\">
  <div class=\"col-md-6\">
   <p>
    <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("equipe_new");
        echo "\" class=\"btn btn-primary\">
        Criar equipe
    </a>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("membro");
        echo "\" class=\"btn btn-primary\">
       Membros
    </a>
    <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("membro_new");
        echo "\" class=\"btn btn-primary\">
    Novo membro
    </a>
       
    </p>
    </div>
</div>
<div class=\"row\">
   <div class=\"clearfix col-md-6\">
        ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
<br/>
<div class=\"row\">
<div class=\"col-md-12\">
<table class=\"records_list table table-striped table-bordered table-condensed\">
    <thead>
        <tr>
            <!--<th>Id</th>
            <th>Nome</th>
            <th>Criado em</th>
            <th>Status</th>-->
            <th>";
        // line 36
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
            <th";
        // line 37
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.nome"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nome", "a.nome");
        echo "</th>
            <th";
        // line 38
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.dtCriacao"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Criado em", "a.dtCriacao");
        echo "</th>
            <th";
        // line 39
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.Status"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Status", "a.status");
        echo "</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 45
            echo "        <tr>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nome", array()), "html", null, true);
            echo "</a>
            </td>
            <td>";
            // line 49
            if ($this->getAttribute($context["entity"], "dtCriacao", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dtCriacao", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 50
            if ($this->getAttribute($context["entity"], "status", array())) {
                echo " Ativo ";
            } else {
                echo " Inativo ";
            }
            echo "</td>
            <td>

                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Exibir</a>

                <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>
                
                <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("equipe_desabilitar", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Desabilitar</a>

            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </tbody>
</table>
    ";
        // line 65
        echo "    <div class=\"navigation\">
        ";
        // line 66
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>
</div>

</div>

";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Equipe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 66,  183 => 65,  179 => 62,  168 => 57,  163 => 55,  158 => 53,  148 => 50,  142 => 49,  135 => 47,  131 => 46,  128 => 45,  124 => 44,  112 => 39,  104 => 38,  96 => 37,  92 => 36,  76 => 23,  72 => 22,  68 => 21,  56 => 12,  50 => 9,  44 => 6,  38 => 2,  11 => 1,);
    }
}
