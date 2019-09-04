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

/* transaction/show.html copy.twig */
class __TwigTemplate_772ea9ce2cdcaa285facfbe8ad133567669b8dec7610e6671f3ec231647a9de3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transaction/show.html copy.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "transaction/show.html copy.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Transaction";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Transaction</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 16, $this->source); })()), "code", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PrenomEnv</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 20, $this->source); })()), "prenomEnv", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomEnv</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 24, $this->source); })()), "nomEnv", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TelephoneEn</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 28, $this->source); })()), "telephoneEn", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TypePieceEnv</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 32, $this->source); })()), "typePieceEnv", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NumPieceEnv</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 36, $this->source); })()), "numPieceEnv", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PrenomBenef</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 40, $this->source); })()), "prenomBenef", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomBenef</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 44, $this->source); })()), "nomBenef", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TypePieceBenef</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 48, $this->source); })()), "typePieceBenef", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NumPieceBenef</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 52, $this->source); })()), "numPieceBenef", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TelephoneBenef</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 56, $this->source); })()), "telephoneBenef", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateEnv</th>
                <td>";
        // line 60
        ((twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 60, $this->source); })()), "dateEnv", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 60, $this->source); })()), "dateEnv", [], "any", false, false, false, 60), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>DateRetrait</th>
                <td>";
        // line 64
        ((twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 64, $this->source); })()), "dateRetrait", [], "any", false, false, false, 64)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 64, $this->source); })()), "dateRetrait", [], "any", false, false, false, 64), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 68, $this->source); })()), "montant", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CommisionEnv</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 72, $this->source); })()), "commisionEnv", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CommissionRetr</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 76, $this->source); })()), "commissionRetr", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CommissionPropre</th>
                <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 80, $this->source); })()), "commissionPropre", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Frais</th>
                <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 84, $this->source); })()), "frais", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transaction_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transaction_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 93
        echo twig_include($this->env, $context, "transaction/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "transaction/show.html copy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 93,  220 => 91,  215 => 89,  207 => 84,  200 => 80,  193 => 76,  186 => 72,  179 => 68,  172 => 64,  165 => 60,  158 => 56,  151 => 52,  144 => 48,  137 => 44,  130 => 40,  123 => 36,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Transaction{% endblock %}

{% block body %}
    <h1>Transaction</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ transaction.id }}</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>{{ transaction.code }}</td>
            </tr>
            <tr>
                <th>PrenomEnv</th>
                <td>{{ transaction.prenomEnv }}</td>
            </tr>
            <tr>
                <th>NomEnv</th>
                <td>{{ transaction.nomEnv }}</td>
            </tr>
            <tr>
                <th>TelephoneEn</th>
                <td>{{ transaction.telephoneEn }}</td>
            </tr>
            <tr>
                <th>TypePieceEnv</th>
                <td>{{ transaction.typePieceEnv }}</td>
            </tr>
            <tr>
                <th>NumPieceEnv</th>
                <td>{{ transaction.numPieceEnv }}</td>
            </tr>
            <tr>
                <th>PrenomBenef</th>
                <td>{{ transaction.prenomBenef }}</td>
            </tr>
            <tr>
                <th>NomBenef</th>
                <td>{{ transaction.nomBenef }}</td>
            </tr>
            <tr>
                <th>TypePieceBenef</th>
                <td>{{ transaction.typePieceBenef }}</td>
            </tr>
            <tr>
                <th>NumPieceBenef</th>
                <td>{{ transaction.numPieceBenef }}</td>
            </tr>
            <tr>
                <th>TelephoneBenef</th>
                <td>{{ transaction.telephoneBenef }}</td>
            </tr>
            <tr>
                <th>DateEnv</th>
                <td>{{ transaction.dateEnv ? transaction.dateEnv|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>DateRetrait</th>
                <td>{{ transaction.dateRetrait ? transaction.dateRetrait|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>{{ transaction.montant }}</td>
            </tr>
            <tr>
                <th>CommisionEnv</th>
                <td>{{ transaction.commisionEnv }}</td>
            </tr>
            <tr>
                <th>CommissionRetr</th>
                <td>{{ transaction.commissionRetr }}</td>
            </tr>
            <tr>
                <th>CommissionPropre</th>
                <td>{{ transaction.commissionPropre }}</td>
            </tr>
            <tr>
                <th>Frais</th>
                <td>{{ transaction.frais }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('transaction_index') }}\">back to list</a>

    <a href=\"{{ path('transaction_edit', {'id': transaction.id}) }}\">edit</a>

    {{ include('transaction/_delete_form.html.twig') }}
{% endblock %}
", "transaction/show.html copy.twig", "/var/www/html/projetpersonel/filrouge/templates/transaction/show.html copy.twig");
    }
}
