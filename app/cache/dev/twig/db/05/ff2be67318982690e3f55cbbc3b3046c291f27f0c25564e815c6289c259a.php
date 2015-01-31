<?php

/* ::base.html.twig */
class __TwigTemplate_db05ff2be67318982690e3f55cbbc3b3046c291f27f0c25564e815c6289c259a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

    <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
    ";
        // line 11
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 12
        echo "
</head>

<body>
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("imaginativo_ts_homepage");
        echo "\">Timesheet Control</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("imaginativo_ts_homepage");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("cliente");
        echo "\">Clientes</a></li>
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("projeto");
        echo "\">Projetos</a></li>
            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("equipe");
        echo "\">Equipes</a></li>
            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("conta");
        echo "\">Configuração</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br><br><br><br>
    <div class=\"container\">

      <div class=\"starter-template\">
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "      </div>

    </div>
    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  123 => 42,  117 => 5,  108 => 50,  103 => 48,  97 => 44,  94 => 43,  92 => 42,  80 => 33,  76 => 32,  72 => 31,  68 => 30,  64 => 29,  57 => 25,  42 => 12,  40 => 11,  34 => 8,  28 => 5,  22 => 1,);
    }
}
