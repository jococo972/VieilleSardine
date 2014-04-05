<?php

/* ClientUserBundle:Client:listClient.html.twig */
class __TwigTemplate_48a2da653aea79d883dacac38e1d396f5367bf3673ee434974501a74d000f093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::principal_layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        echo "
    <h1>Cette partie n'est pas dans layout global</h1>
    ";
        // line 10
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 11
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <hr>

    ";
        // line 18
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_clients"]) ? $context["liste_clients"] : $this->getContext($context, "liste_clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 22
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "name"), "html", null, true);
            echo "    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "dateCreate"), "d-m-y h:m:s"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 26
        echo "    <h1>Fin de la partie qui change en fonction de l'onglet</h1>
";
    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 19
        echo "    ";
    }

    public function getTemplateName()
    {
        return "ClientUserBundle:Client:listClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 19,  95 => 18,  90 => 26,  87 => 24,  76 => 22,  72 => 21,  69 => 20,  66 => 18,  62 => 15,  53 => 12,  48 => 11,  43 => 10,  39 => 6,  36 => 5,  30 => 3,);
    }
}
