<?php

/* VieilleSardineUserBundle:Mail:sendConfirmation.html.twig */
class __TwigTemplate_b2e18d895f483a2588267296bc8dc84f43f0940b5b734ec11ca2b9dee923f08b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::principal_layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "ClientUserBundle:Client:getClients";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Confirmation</h1>
    
    Un mail vous a été envoyé !
    
    
";
    }

    public function getTemplateName()
    {
        return "VieilleSardineUserBundle:Mail:sendConfirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  134 => 60,  126 => 48,  113 => 6,  90 => 50,  77 => 28,  58 => 22,  53 => 21,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 64,  132 => 51,  128 => 49,  107 => 5,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 26,  67 => 20,  63 => 15,  59 => 12,  38 => 6,  94 => 28,  89 => 20,  85 => 46,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 12,  93 => 28,  88 => 47,  78 => 21,  46 => 11,  27 => 5,  44 => 9,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 65,  138 => 54,  136 => 62,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 22,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 59,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 59,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 14,  52 => 21,  50 => 10,  43 => 8,  41 => 9,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 7,  112 => 42,  109 => 34,  106 => 36,  103 => 67,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 16,  57 => 11,  54 => 10,  51 => 13,  48 => 10,  45 => 17,  42 => 10,  39 => 6,  36 => 5,  33 => 7,  30 => 2,);
    }
}
