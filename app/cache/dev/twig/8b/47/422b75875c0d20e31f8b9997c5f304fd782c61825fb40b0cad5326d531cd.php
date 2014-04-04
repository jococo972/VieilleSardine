<?php

/* ::principal_layout.html.twig */
class __TwigTemplate_8b47422b75875c0d20e31f8b9997c5f304fd782c61825fb40b0cad5326d531cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
<body>
    <div class=\"container\">
        <div id=\"header\" class=\"hero-unit\">
            <h1>Mon Projet Symfony2</h1>
            <p><a class=\"btn btn-primary btn-large\"
                  href=\"http://www.siteduzero.com/tutoriel-3-517569-symfony2.html\">
                    Lire le tutoriel »
                </a></p>
        </div>
            <hr>
        ";
        // line 40
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        <hr>
        <footer>
            <p>The sky's the limit © 2014</p>
        </footer>
    </div>
    ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"
                      type=\"text/css\" />
        ";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "                
        ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        // line 51
        echo "            <script
            src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        // line 54
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::principal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 54,  99 => 53,  95 => 51,  93 => 49,  90 => 48,  85 => 41,  82 => 40,  74 => 7,  71 => 6,  65 => 5,  60 => 56,  51 => 43,  48 => 40,  33 => 6,  23 => 1,  61 => 12,  58 => 48,  45 => 8,  41 => 7,  38 => 6,  35 => 10,  29 => 5,);
    }
}
