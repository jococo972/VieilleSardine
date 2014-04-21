<?php

/* VieilleSardineCommandeBundle:Commande:IHMCommandeVPC.html.twig */
class __TwigTemplate_7511a16cc35f83ff7c17f34eec9bd1e5e91f23f6f723cd0376ecd98eb58e9966 extends Twig_Template
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
        echo "    <h1>Gestion des commandes - VPC </h1>

    <form method=\"post\" action=\"cible.php\">

        <p>
            ID Produit 
            <input type=\"text\" name=\"IDProduit\" id=\"id_IDProduit\" />
            <br />

            <!-- Le libellé du produit ainsi que le prix unitaire sont affichés automatiquement -->
            Libellé Produit
            <input type=\"text\" name=\"LibelleProduit\" id=\"id_LibelleProduit\" />
            <br />

            Quantité
            <Input type=\"number\" name=\"QTEProduit\" id = \"id_QTEProduit\" />
            <br />

            Prix Unitaire
            <input type=\"text\" name=\"PrixUnit\" id =\"id_PrixUnit\" />

            <!-- Le prix total est calculé automatiquement -->
            Prix Total
            <input type=\"text\" name =\"PrixTotal\" id = \"id_PrixTotal\" />

            <input type=\"submit\" value=\"Valider\" id=\"id_Valider\" />
        </p>

    </p>

</form>


";
    }

    public function getTemplateName()
    {
        return "VieilleSardineCommandeBundle:Commande:IHMCommandeVPC.html.twig";
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
