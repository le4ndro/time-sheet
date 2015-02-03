<?php

/* ImaginativoTSBundle:Cliente:show.html.twig */
class __TwigTemplate_5b3446153e427eefb8d445a1103dbb6b6849513de0c700537746380977cf4c6a extends Twig_Template
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
    <h1>Cliente</h1>
    <table class=\"record_properties table table-striped table-bordered table-condensed\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome:</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Razão Social:</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "razaoSocial", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CNPJ:</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cNPJ", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome Fantasia:</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomeFantasia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Criado em:</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dtCriacao", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Obs:</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "obs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ativo:</th>
                <td>";
        // line 39
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array())) {
            echo " Ativo ";
        } else {
            echo " Inativo ";
        }
        echo "</td>
            </tr>
            
        </tbody>
    </table>
</div>
</div> 
";
        // line 46
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array())) {
            // line 47
            echo "<div class=\"row\">
    <div class=\"col-sm-6\">
        <h3>Endereço</h3>
        <table class=\"record_properties table table-striped table-bordered table-condensed\">
            <tbody>
                <tr>
                    <th>Logradouro</th>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array()), "logradouro", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Bairro</th>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array()), "bairro", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Cidade</th>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array()), "cidade", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Uf</th>
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array()), "uF", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Cep</th>
                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array()), "cEP", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Id</th>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array()), "id", array()), "html", null, true);
            echo "</td>
                </tr>
            </tbody>
        </table>    
    </div>
</div>  
";
        }
        // line 81
        echo "<div class=\"row\">
   <div class=\"col-sm-2\">
       <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("cliente");
        echo "\" class=\"btn btn-primary\">
           Ir para lista de clientes
       </a>    
   </div>
   <div class=\"col-sm-1\">
       <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
           Editar
       </a>
   </div>
   <div class=\"col-sm-1\">
       <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_endereco", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
           Endereço
       </a>
   </div>
    <div class=\"col-sm-1\">
        <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_endereco", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            Desativar
        </a>
    </div>
   <!-- 
   ";
        // line 103
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
   -->   
</div>  
<div class=\"row\">
<div class=\"col-md-12\">
<h3>Contatos</h3>

<p>
    <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contato_cliente_new", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
        Novo Contato
    </a>
</p>

<table class=\"records_list table table-striped table-bordered table-condensed\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 130
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contatos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contato"]) {
            // line 131
            echo "        <tr>
            <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["contato"], "id", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contato_show", array("id" => $this->getAttribute($context["contato"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nome", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["contato"], "cargo", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["contato"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["contato"], "telefone", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["contato"], "celular", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 138
            if ($this->getAttribute($context["contato"], "status", array())) {
                echo " Ativo ";
            } else {
                echo " Inativo ";
            }
            echo " </td>                
            <td>
                
                        <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contato_show", array("id" => $this->getAttribute($context["contato"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Exibir</a>
                    
                        <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contato_edit", array("id" => $this->getAttribute($context["contato"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>
                    
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "    </tbody>
</table>
</div>
</div>
    




";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Cliente:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 148,  284 => 143,  279 => 141,  269 => 138,  265 => 137,  261 => 136,  257 => 135,  253 => 134,  247 => 133,  243 => 132,  240 => 131,  236 => 130,  214 => 111,  203 => 103,  195 => 98,  187 => 93,  179 => 88,  171 => 83,  167 => 81,  157 => 74,  150 => 70,  143 => 66,  136 => 62,  129 => 58,  122 => 54,  113 => 47,  111 => 46,  97 => 39,  90 => 35,  83 => 31,  76 => 27,  69 => 23,  62 => 19,  55 => 15,  48 => 11,  39 => 4,  36 => 3,  11 => 1,);
    }
}
