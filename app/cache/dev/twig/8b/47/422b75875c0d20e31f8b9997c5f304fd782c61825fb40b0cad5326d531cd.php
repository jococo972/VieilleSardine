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
        // line 9
        echo "    </head>

    <header>
        <h1>A REMPLACER PAR LA BANIERE HEADER DU SITE</h1>
    </header>
    <nav class=\"navbar\" role=\"banner\">
        <table>
            <tr>
                <td><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("vieille_sardine_catalogue_homepage");
        echo "\">Catalogue</a></td>
                <td><a href=\"\">Commande rapide</a></td>
                <td>
                    ";
        // line 20
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                        <span style=\"color: white\">Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " </span> 
                        <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Afficher compte</a>
                        <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Modifier compte</a>
                        <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                    ";
        } else {
            // line 26
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                    ";
        }
        // line 28
        echo "                </td>
                <td><a href=\"\">Mon panier</a></td>
            </tr>
        </table>
    </nav>

    ";
        // line 46
        echo "    <div style=\"min-height:700px; border:solid\">
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "    </div>


    <footer>
        <div>
            <h1>A REMPLACER PAR LA BANIERE FOOTER DU SITE</h1>
        </div>
    </footer>

    ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "</html>";
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
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "
        ";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "        ";
        // line 62
        echo "        <script
        src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        // line 65
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::principal_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 65,  140 => 64,  136 => 62,  134 => 60,  131 => 59,  126 => 48,  123 => 47,  116 => 7,  113 => 6,  107 => 5,  103 => 67,  101 => 59,  90 => 50,  88 => 47,  85 => 46,  77 => 28,  71 => 26,  66 => 24,  62 => 23,  58 => 22,  53 => 21,  51 => 20,  45 => 17,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
