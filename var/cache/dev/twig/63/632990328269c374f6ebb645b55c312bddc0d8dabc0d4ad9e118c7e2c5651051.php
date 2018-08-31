<?php

/* cocktails/addCocktail.html.twig */
class __TwigTemplate_1092eee65e6d50a998a3766170874203509036cf2c3b4eb584d4b489c78488eb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("cocktails/layout.html.twig", "cocktails/addCocktail.html.twig", 1);
        $this->blocks = array(
            'row_content' => array($this, 'block_row_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "cocktails/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cocktails/addCocktail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cocktails/addCocktail.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formedit"]) || array_key_exists("formedit", $context) ? $context["formedit"] : (function () { throw new Twig_Error_Runtime('Variable "formedit" does not exist.', 2, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_row_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row_content"));

        // line 4
        echo "    <div class=\"form-group\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formedit"]) || array_key_exists("formedit", $context) ? $context["formedit"] : (function () { throw new Twig_Error_Runtime('Variable "formedit" does not exist.', 5, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        <div class=\"alert-danger\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formedit"]) || array_key_exists("formedit", $context) ? $context["formedit"] : (function () { throw new Twig_Error_Runtime('Variable "formedit" does not exist.', 7, $this->source); })()), 'errors');
        echo "
        </div>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formedit"]) || array_key_exists("formedit", $context) ? $context["formedit"] : (function () { throw new Twig_Error_Runtime('Variable "formedit" does not exist.', 9, $this->source); })()), "titre", array()), 'row', array("attr" => array("placeholder" => "titre du film")));
        echo "
        <div>
            <!-- form_row permet d'afficher tout ce qu'il pour un champs -->
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formedit"]) || array_key_exists("formedit", $context) ? $context["formedit"] : (function () { throw new Twig_Error_Runtime('Variable "formedit" does not exist.', 12, $this->source); })()), "nom", array()), 'row', array("attr" => array("placeholder" => "nom du cocktail")));
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formedit"]) || array_key_exists("formedit", $context) ? $context["formedit"] : (function () { throw new Twig_Error_Runtime('Variable "formedit" does not exist.', 13, $this->source); })()), "description", array()), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formedit"]) || array_key_exists("formedit", $context) ? $context["formedit"] : (function () { throw new Twig_Error_Runtime('Variable "formedit" does not exist.', 14, $this->source); })()), "prix", array()), 'row', array("attr" => array("placeholder" => "prix du cocktail")));
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formedit"]) || array_key_exists("formedit", $context) ? $context["formedit"] : (function () { throw new Twig_Error_Runtime('Variable "formedit" does not exist.', 15, $this->source); })()), "volume", array()), 'row', array("attr" => array("placeholder" => "volume du cocktail")));
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formedit"]) || array_key_exists("formedit", $context) ? $context["formedit"] : (function () { throw new Twig_Error_Runtime('Variable "formedit" does not exist.', 16, $this->source); })()), "origine", array()), 'row', array("attr" => array("placeholder" => "origine du cocktail")));
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formedit"]) || array_key_exists("formedit", $context) ? $context["formedit"] : (function () { throw new Twig_Error_Runtime('Variable "formedit" does not exist.', 17, $this->source); })()), "image", array()), 'row', array("attr" => array("placeholder" => "image du cocktail")));
        echo "

        </div>
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formedit"]) || array_key_exists("formedit", $context) ? $context["formedit"] : (function () { throw new Twig_Error_Runtime('Variable "formedit" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
        <button type=\"button\" class=\"btn btn-success\">
            ";
        // line 22
        if ("modifMode") {
            echo "Save Modifications
            ";
        } else {
            // line 23
            echo " Submit
            ";
        }
        // line 25
        echo "        </button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cocktails/addCocktail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  111 => 23,  106 => 22,  101 => 20,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  69 => 9,  64 => 7,  59 => 5,  56 => 4,  47 => 3,  37 => 1,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'cocktails/layout.html.twig' %}
{% form_theme formedit 'bootstrap_4_layout.html.twig' %}
{% block row_content %}
    <div class=\"form-group\">
        {{ form_start(formedit, {'attr': {'novalidate': 'novalidate'}}) }}
        <div class=\"alert-danger\">
            {{ form_errors(formedit) }}
        </div>
        {{ form_row(formedit.titre,{'attr':{'placeholder':\"titre du film\"}}) }}
        <div>
            <!-- form_row permet d'afficher tout ce qu'il pour un champs -->
            {{ form_row(formedit.nom,{'attr':{'placeholder':\"nom du cocktail\"}}) }}
            {{ form_row(formedit.description) }}
            {{ form_row(formedit.prix, {'attr':{'placeholder':\"prix du cocktail\"}})}}
            {{ form_row(formedit.volume, {'attr':{'placeholder':\"volume du cocktail\"}}) }}
            {{ form_row(formedit.origine, {'attr':{'placeholder':\"origine du cocktail\"}}) }}
            {{ form_row(formedit.image, {'attr':{'placeholder':\"image du cocktail\"}}) }}

        </div>
        {{ form_end(formedit) }}
        <button type=\"button\" class=\"btn btn-success\">
            {% if 'modifMode' %}Save Modifications
            {%  else %} Submit
            {% endif %}
        </button>
    </div>
{% endblock %}", "cocktails/addCocktail.html.twig", "/var/www/html/cocktailoide/templates/cocktails/addCocktail.html.twig");
    }
}
