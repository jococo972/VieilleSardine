<?php

/* VieilleSardineCatalogueBundle:Catalogue:index.html.twig */
class __TwigTemplate_5ecf5c55de38986dc86433d3150aefb50eabb325c477676441183800829118a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::principal_layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::principal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "   <h1>Notre page d'accueil</h1>
";
    }

    public function getTemplateName()
    {
        return "VieilleSardineCatalogueBundle:Catalogue:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
