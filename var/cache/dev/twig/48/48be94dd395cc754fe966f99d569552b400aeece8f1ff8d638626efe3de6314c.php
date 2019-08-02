<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/index.html.twig */
class __TwigTemplate_729be057016938bca387d6cb671f7ff4db490bb7d83effb5e0124d600a84e0bb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->loadTemplate("flash-messages.html.twig", "pages/index.html.twig", 3)->display($context);
        // line 4
        echo "    <table>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 6
            echo "    <tbody style=\"margin:2rem; display:inline-block;\" class=\"text-center img-thumbnail\">
        <tr><td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventName", []), "html", null, true);
            echo "</td></tr>
        <tr><td><img class=\"img-fluid\" style=\"max-width: 100%; margin:auto;\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/custome.jpg"), "html", null, true);
            echo "\" title=\"custome\" alt=\"custome\"></td></tr>
        ";
            // line 10
            echo "        <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventDesc", []), "html", null, true);
            echo "</td><tr>
        <tr><td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventDate", []), "html", null, true);
            echo "</td></tr>
        <tr><td><a href=\"details/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", []), "html", null, true);
            echo "\" class=\"btn btn-light btn-block\">Details</a><tr><td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 14,  89 => 12,  85 => 11,  80 => 10,  76 => 8,  72 => 7,  69 => 6,  65 => 5,  62 => 4,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
{% include('flash-messages.html.twig') %}
    <table>
    {% for event in events %}
    <tbody style=\"margin:2rem; display:inline-block;\" class=\"text-center img-thumbnail\">
        <tr><td>{{ event.eventName }}</td></tr>
        <tr><td><img class=\"img-fluid\" style=\"max-width: 100%; margin:auto;\" src=\"{{asset('images/custome.jpg')}}\" title=\"custome\" alt=\"custome\"></td></tr>
        {# <tr><td><img src=\"{{ event.eventImg }}\" class=\"rounded mx-auto d-block\" alt=\"image\"></td></tr> #}
        <tr><td>{{ event.eventDesc }}</td><tr>
        <tr><td>{{ event.eventDate}}</td></tr>
        <tr><td><a href=\"details/{{event.id}}\" class=\"btn btn-light btn-block\">Details</a><tr><td>
    {% endfor %}
    </tbody>
    </table>
{% endblock %}", "pages/index.html.twig", "C:\\xampp\\htdocs\\FSWD60-Adam-Gyarmati-CodeReview13\\app\\Resources\\views\\pages\\index.html.twig");
    }
}
