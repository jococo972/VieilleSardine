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

    <body>
        <header>
            <h1>A REMPLACER PAR LA BANIERE HEADER DU SITE</h1>
            <nav class=\"navbar\" role=\"banner\">
                <table>
                    <tr>
                        <td><a href=\"\">Catalogue</a></td>
                        <td><a href=\"\">Commande rapide</a></td>
                        <td>
                            ";
        // line 20
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                                Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                                <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Afficher compte</a>
                                <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Modifier compte</a>
                            ";
        } else {
            // line 25
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                            ";
        }
        // line 27
        echo "                        </td>
                        <td><a href=\"\">Mon panier</a></td>
                    </tr>
                </table>
            </nav>
        </header>

        ";
        // line 46
        echo "
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
        <footer>
            ";
        // line 68
        echo "            <div>
                <h1>A REMPLACER PAR LA BANIERE FOOTER DU SITE</h1>
            </div>
        </footer>

        ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
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

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "            ";
        // line 76
        echo "            <script
            src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        // line 79
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
        return array (  139 => 79,  137 => 78,  133 => 76,  131 => 74,  128 => 73,  123 => 48,  120 => 47,  113 => 7,  110 => 6,  104 => 5,  99 => 81,  97 => 73,  90 => 68,  86 => 50,  84 => 47,  81 => 46,  72 => 27,  66 => 25,  61 => 23,  57 => 22,  50 => 21,  48 => 20,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
