<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partenaire/contrat.html.twig */
class __TwigTemplate_200d2d92d2d9fa42236b72664fee2d2b1d36dfd2997392ad199ec96567ae2a83 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/contrat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partenaire/contrat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <img src=\"images/logo.png\" class=\"rounded float-right\" alt=\"logo\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1>Contrat de prestation de service</h1>
            </div>
        </div>

        <p>Entre les soussignés :</p>
        <p>
            L'entreprise ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 18, $this->source); })()), "raisonsociale", [], "any", false, false, false, 18), "html", null, true);
        echo ",se trouvant à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 18, $this->source); })()), "adresse", [], "any", false, false, false, 18), "html", null, true);
        echo ",numéro d’immatriculation au RCS ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 18, $this->source); })()), "ninea", [], "any", false, false, false, 18), "html", null, true);
        echo " Représenté par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new RuntimeError('Variable "partenaire" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "
        </p>
        <p>
            Ci-après désigné « le Prestataire » D’une part,
        </p>
        <p>Et :</p>
        <p>
            [WARI, montant de son capital social, adresse de son siège social, numéro d’immatriculation au RCS et ville où se trouve le greffe qui tient le RCS où il est immatriculé] Représenté par [prénom et nom du représentant
            du client, nature de sa fonction et date à laquelle il a été habilité à signer pour le compte de la société qu’il représente, prénom, nom et fonction de la personne qui l’a habilité]
        </p>
        <p>
            Ci-après désigné « le Client » D’autre part,
        </p>
        <p>Il a été arrêté et convenu ce qui suit :</p>
        <h2>Article un - Nature de la mission</h2>
        <p>
            Le stratégie du client s’inscrit dans une dynamique d’offres de services du quotidien, simples, adaptées, rapides et sûres, et destinées au grand public, dans sa diversité de profils socio-économiques ou de lieux d’habitation. </p>
        <p>
            Le cas échéant :
        </p>
        <p>
            Dans le cadre de cette mission, le Prestataire s'engage à mettre ses collaborateurs à la disposition du Client si cela est nécessaire pour la bonne exécution de la mission. Cependant, lesdits salariés resteront sous l'autorité et sous la responsabilité
            du Prestataire pendant leur intervention chez le Client.
        </p>
        <h2>Article deux - Prix et modalités de paiement</h2>
        <p>
            Les commissions sont répartis comme suit : <br> Pour chaque transaction : <br>
            <ul>
                <li>
                    L’État prend les 30%
                </li>
                <li>
                    Le système WARI : 40%
                </li>
            </ul>
            Pour le client les 30% sont répartis comme suit : <br>
            <ul>
                <li>
                    retrait : 20%
                </li>
                <li>
                    envoi : 10%
                </li>
            </ul>
        </p>
        <h2>Article trois - Obligations du Prestataire</h2>
        <p>
            Il est rappelé que le Prestataire est tenu à une obligation de moyens. Il doit donc exécuter sa mission conformément aux règles en vigueur dans sa profession et en se conformant à toutes les données acquises dans son domaine de compétence.
        </p>
        <p>
            Il reconnaît que le Client lui a donné une information complète sur ses besoins et sur les impératifs à respecter.
        </p>
        Il s'engage à se conformer au règlement intérieur et aux consignes de sécurité applicables chez le Client. Enfin, il s’engage à observer la confidentialité la plus totale en ce qui concerne le contenu de la mission et toutes les informations ainsi que
        tous les documents que le Client lui aura communiqués.
        </p>
        <h2>Article quatre - Obligations du Client</h2>
        <p>
            Afin de permettre au Prestataire de réaliser la mission dans de bonnes conditions, le Client s’engage à lui remettre tous les documents nécessaires dans les meilleurs délais.
        </p>
        <h2>Article cinq – Responsabilité</h2>
        <p>
            La responsabilité du Prestataire ne pourra être mise en cause qu'en cas de manquement à son obligation de moyens. En outre, le Client ne pourra pas l'invoquer dans les cas suivants :
            <ul>
                <li>s'il a omis de remettre au Prestataire un document ou une information nécessaire pour la mission, </li>
                <li>en cas de force majeure ou d'autres causes indépendantes de la volonté du Prestataire.</li>
            </ul>
        </p>
        <h2>Article six - Droit applicable et juridiction compétente</h2>
        <p>
            Le présent contrat est assujetti au droit français. Tout litige qui résulterait de son exécution sera soumis aux tribunaux dont dépend le siège social du Prestataire.
        </p>
        <p>
            Fait le [date] en deux exemplaires à [ville]
        </p>
        <div class=\"row\">
            <div class=\"col-6\">
                Le Prestataire <br> [nom du signataire] <br> [signature]
            </div>
            <div class=\"col-6\">
                Le Client <br> partenaire.prenom,partenaire.nom<br> [signature]
            </div>
        </div>
    </div>
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partenaire/contrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <img src=\"images/logo.png\" class=\"rounded float-right\" alt=\"logo\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h1>Contrat de prestation de service</h1>
            </div>
        </div>

        <p>Entre les soussignés :</p>
        <p>
            L'entreprise {{partenaire.raisonsociale}},se trouvant à {{partenaire.adresse}},numéro d’immatriculation au RCS {{partenaire.ninea}} Représenté par {{partenaire.prenom}},{{partenaire.nom}}
        </p>
        <p>
            Ci-après désigné « le Prestataire » D’une part,
        </p>
        <p>Et :</p>
        <p>
            [WARI, montant de son capital social, adresse de son siège social, numéro d’immatriculation au RCS et ville où se trouve le greffe qui tient le RCS où il est immatriculé] Représenté par [prénom et nom du représentant
            du client, nature de sa fonction et date à laquelle il a été habilité à signer pour le compte de la société qu’il représente, prénom, nom et fonction de la personne qui l’a habilité]
        </p>
        <p>
            Ci-après désigné « le Client » D’autre part,
        </p>
        <p>Il a été arrêté et convenu ce qui suit :</p>
        <h2>Article un - Nature de la mission</h2>
        <p>
            Le stratégie du client s’inscrit dans une dynamique d’offres de services du quotidien, simples, adaptées, rapides et sûres, et destinées au grand public, dans sa diversité de profils socio-économiques ou de lieux d’habitation. </p>
        <p>
            Le cas échéant :
        </p>
        <p>
            Dans le cadre de cette mission, le Prestataire s'engage à mettre ses collaborateurs à la disposition du Client si cela est nécessaire pour la bonne exécution de la mission. Cependant, lesdits salariés resteront sous l'autorité et sous la responsabilité
            du Prestataire pendant leur intervention chez le Client.
        </p>
        <h2>Article deux - Prix et modalités de paiement</h2>
        <p>
            Les commissions sont répartis comme suit : <br> Pour chaque transaction : <br>
            <ul>
                <li>
                    L’État prend les 30%
                </li>
                <li>
                    Le système WARI : 40%
                </li>
            </ul>
            Pour le client les 30% sont répartis comme suit : <br>
            <ul>
                <li>
                    retrait : 20%
                </li>
                <li>
                    envoi : 10%
                </li>
            </ul>
        </p>
        <h2>Article trois - Obligations du Prestataire</h2>
        <p>
            Il est rappelé que le Prestataire est tenu à une obligation de moyens. Il doit donc exécuter sa mission conformément aux règles en vigueur dans sa profession et en se conformant à toutes les données acquises dans son domaine de compétence.
        </p>
        <p>
            Il reconnaît que le Client lui a donné une information complète sur ses besoins et sur les impératifs à respecter.
        </p>
        Il s'engage à se conformer au règlement intérieur et aux consignes de sécurité applicables chez le Client. Enfin, il s’engage à observer la confidentialité la plus totale en ce qui concerne le contenu de la mission et toutes les informations ainsi que
        tous les documents que le Client lui aura communiqués.
        </p>
        <h2>Article quatre - Obligations du Client</h2>
        <p>
            Afin de permettre au Prestataire de réaliser la mission dans de bonnes conditions, le Client s’engage à lui remettre tous les documents nécessaires dans les meilleurs délais.
        </p>
        <h2>Article cinq – Responsabilité</h2>
        <p>
            La responsabilité du Prestataire ne pourra être mise en cause qu'en cas de manquement à son obligation de moyens. En outre, le Client ne pourra pas l'invoquer dans les cas suivants :
            <ul>
                <li>s'il a omis de remettre au Prestataire un document ou une information nécessaire pour la mission, </li>
                <li>en cas de force majeure ou d'autres causes indépendantes de la volonté du Prestataire.</li>
            </ul>
        </p>
        <h2>Article six - Droit applicable et juridiction compétente</h2>
        <p>
            Le présent contrat est assujetti au droit français. Tout litige qui résulterait de son exécution sera soumis aux tribunaux dont dépend le siège social du Prestataire.
        </p>
        <p>
            Fait le [date] en deux exemplaires à [ville]
        </p>
        <div class=\"row\">
            <div class=\"col-6\">
                Le Prestataire <br> [nom du signataire] <br> [signature]
            </div>
            <div class=\"col-6\">
                Le Client <br> partenaire.prenom,partenaire.nom<br> [signature]
            </div>
        </div>
    </div>
</body>

</html>
{% endblock %}", "partenaire/contrat.html.twig", "/var/www/html/projetpersonel/filrouge/templates/partenaire/contrat.html.twig");
    }
}
