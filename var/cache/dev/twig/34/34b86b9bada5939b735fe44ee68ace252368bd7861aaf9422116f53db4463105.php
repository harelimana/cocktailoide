<?php

/* cocktails/details.html.twig */
class __TwigTemplate_9f4713a88ab6a247ddd933f7e955c83a5b8225d60143d055723b386f512cfeb6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("cocktails/layout.html.twig", "cocktails/details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "cocktails/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cocktails/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cocktails/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a class=\"btn btn-info\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cocktailisting", array("name" => twig_get_attribute($this->env, $this->source, (isset($context["cocktail"]) || array_key_exists("cocktail", $context) ? $context["cocktail"] : (function () { throw new Twig_Error_Runtime('Variable "cocktail" does not exist.', 4, $this->source); })()), "nom", array()))), "html", null, true);
        echo "\">Retour</a>
    <h2 class=\"page-header\">Cocktail: ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cocktail"]) || array_key_exists("cocktail", $context) ? $context["cocktail"] : (function () { throw new Twig_Error_Runtime('Variable "cocktail" does not exist.', 5, $this->source); })()), "nom", array()), "html", null, true);
        echo "
    </h2>
    <hr>
    <table class=\"table table-striped\">
        <thead>
        <tr class=\"col_md-10 bg-info-light small\">
            <td>Nom</td>
            <td>Description</td>
            <td>prix</td>
            <td>volume</td>
            <td>origine</td>
            <td>image</td>
            <td>categorie</td>
        </tr>
        </thead>
        <tr class=\"col_md-10 small\">

            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cocktail"]) || array_key_exists("cocktail", $context) ? $context["cocktail"] : (function () { throw new Twig_Error_Runtime('Variable "cocktail" does not exist.', 22, $this->source); })()), "nom", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cocktail"]) || array_key_exists("cocktail", $context) ? $context["cocktail"] : (function () { throw new Twig_Error_Runtime('Variable "cocktail" does not exist.', 23, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cocktail"]) || array_key_exists("cocktail", $context) ? $context["cocktail"] : (function () { throw new Twig_Error_Runtime('Variable "cocktail" does not exist.', 24, $this->source); })()), "prix", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cocktail"]) || array_key_exists("cocktail", $context) ? $context["cocktail"] : (function () { throw new Twig_Error_Runtime('Variable "cocktail" does not exist.', 25, $this->source); })()), "volume", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cocktail"]) || array_key_exists("cocktail", $context) ? $context["cocktail"] : (function () { throw new Twig_Error_Runtime('Variable "cocktail" does not exist.', 26, $this->source); })()), "origine", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cocktail"]) || array_key_exists("cocktail", $context) ? $context["cocktail"] : (function () { throw new Twig_Error_Runtime('Variable "cocktail" does not exist.', 27, $this->source); })()), "imageUrl", array()), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <hr>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cocktails/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  58 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'cocktails/layout.html.twig' %}

{% block body %}
    <a class=\"btn btn-info\" href=\"{{ path('cocktailisting',{'name':cocktail.nom}) }}\">Retour</a>
    <h2 class=\"page-header\">Cocktail: {{ cocktail.nom }}
    </h2>
    <hr>
    <table class=\"table table-striped\">
        <thead>
        <tr class=\"col_md-10 bg-info-light small\">
            <td>Nom</td>
            <td>Description</td>
            <td>prix</td>
            <td>volume</td>
            <td>origine</td>
            <td>image</td>
            <td>categorie</td>
        </tr>
        </thead>
        <tr class=\"col_md-10 small\">

            <td>{{ cocktail.nom }}</td>
            <td>{{ cocktail.description }}</td>
            <td>{{ cocktail.prix }}</td>
            <td>{{ cocktail.volume }}</td>
            <td>{{ cocktail.origine }}</td>
            <td>{{ cocktail.imageUrl }}</td>
        </tr>
    </table>
    <hr>

{% endblock %}", "cocktails/details.html.twig", "/var/www/html/cocktailoide/templates/cocktails/details.html.twig");
    }
}
