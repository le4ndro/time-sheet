<?php

/* ImaginativoTSBundle:Conta:show.html.twig */
class __TwigTemplate_015b93f501cfc9713086a51df6277e439b43716056430a5adc49f0131bb5e400 extends Twig_Template
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
    <h1>Conta</h1>
    <table class=\"record_properties table table-striped table-bordered table-condensed\">
        <tbody>
            <tr>
                <th>Id:</th>
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
                <th>Status:</th>
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
        // line 45
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array())) {
            // line 46
            echo "<div class=\"row\">
    <div class=\"col-sm-6\">
        <h3>Endereço</h3>
        <table class=\"record_properties table table-striped table-bordered table-condensed\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array()), "id", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Logradouro</th>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array()), "logradouro", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Bairro</th>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array()), "bairro", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Cidade</th>
                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array()), "cidade", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Uf</th>
                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array()), "uF", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Cep</th>
                    <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endereco", array()), "cEP", array()), "html", null, true);
            echo "</td>
                </tr>
            </tbody>
        </table>    
    </div>
</div>
";
        }
        // line 80
        echo "<div class=\"row\">
    <div class=\"col-sm-2\">
        <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("conta");
        echo "\" class=\"btn btn-primary\">
            Ir para a lista de contas
        </a>   
    </div>
    <div class=\"col-sm-1\">
        <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conta_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            Editar
        </a>
    </div>
    <div class=\"col-sm-1\">
        <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conta_endereco", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            Endereço
        </a>
    </div>
    <div class=\"col-sm-1\">
        <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conta_endereco", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">
            Desativar
        </a>
    </div>
    <!-- 
    ";
        // line 102
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    -->   
</div>            

";
    }

    public function getTemplateName()
    {
        return "ImaginativoTSBundle:Conta:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 102,  194 => 97,  186 => 92,  178 => 87,  170 => 82,  166 => 80,  156 => 73,  149 => 69,  142 => 65,  135 => 61,  128 => 57,  121 => 53,  112 => 46,  110 => 45,  97 => 39,  90 => 35,  83 => 31,  76 => 27,  69 => 23,  62 => 19,  55 => 15,  48 => 11,  39 => 4,  36 => 3,  11 => 1,);
    }
}
