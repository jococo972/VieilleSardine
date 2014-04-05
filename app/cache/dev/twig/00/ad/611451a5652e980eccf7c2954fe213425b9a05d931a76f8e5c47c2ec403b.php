<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_00ad611451a5652e980eccf7c2954fe213425b9a05d931a76f8e5c47c2ec403b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  81 => 24,  58 => 18,  20 => 1,  188 => 147,  186 => 146,  180 => 142,  172 => 101,  153 => 5,  148 => 149,  146 => 141,  127 => 99,  23 => 1,  77 => 23,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 141,  169 => 100,  140 => 55,  132 => 103,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 6,  143 => 56,  135 => 118,  119 => 42,  102 => 67,  71 => 19,  67 => 20,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 29,  88 => 25,  78 => 21,  46 => 14,  27 => 4,  44 => 12,  31 => 9,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 72,  105 => 40,  91 => 27,  62 => 19,  49 => 19,  24 => 4,  25 => 3,  19 => 2,  79 => 18,  72 => 21,  69 => 20,  47 => 9,  40 => 11,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 70,  108 => 36,  101 => 32,  98 => 31,  96 => 18,  83 => 25,  74 => 14,  66 => 18,  55 => 15,  52 => 21,  50 => 10,  43 => 10,  41 => 7,  35 => 5,  32 => 4,  29 => 8,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 144,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 7,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 138,  133 => 55,  130 => 100,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 68,  103 => 28,  99 => 19,  95 => 66,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 22,  64 => 17,  60 => 6,  57 => 11,  54 => 16,  51 => 14,  48 => 11,  45 => 17,  42 => 8,  39 => 6,  36 => 10,  33 => 6,  30 => 3,);
    }
}
