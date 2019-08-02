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

/* pages/modify.html.twig */
class __TwigTemplate_610f5c84dfbb1fd43cc57a382dd93387435e9e4cdbfb7eaeaa6f9d2533dff577 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/modify.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/modify.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/modify.html.twig", 1);
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
        echo "<div class=\"table-responsive-sm\">
    <table class=\"table table-strip\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 6
            echo "    <tbody>
        <tr><td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventName", []), "html", null, true);
            echo "</td></tr>
        <tr><td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventDesc", []), "html", null, true);
            echo "</td><tr>
        <tr><td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventDate", []), "html", null, true);
            echo "</td></tr>
        <tr><td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventImg", []), "html", null, true);
            echo "</td></tr>
        <tr><td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventCapacity", []), "html", null, true);
            echo "</td></tr>
        <tr><td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventEmail", []), "html", null, true);
            echo "</td></tr>
        <tr><td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventPhone", []), "html", null, true);
            echo "</td></tr>
        <tr><td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventAdd", []), "html", null, true);
            echo "</td></tr>
        <tr><td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventUrl", []), "html", null, true);
            echo "</td></tr>
        <tr><td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventType", []), "html", null, true);
            echo "</td></tr>    
        <tr><td><a href=\"edit/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", []), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
        <a href=\"delete/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", []), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 20,  115 => 18,  111 => 17,  107 => 16,  103 => 15,  99 => 14,  95 => 13,  91 => 12,  87 => 11,  83 => 10,  79 => 9,  75 => 8,  71 => 7,  68 => 6,  64 => 5,  60 => 3,  51 => 2,  29 => 1,);
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
<div class=\"table-responsive-sm\">
    <table class=\"table table-strip\">
    {% for event in events %}
    <tbody>
        <tr><td>{{ event.eventName }}</td></tr>
        <tr><td>{{ event.eventDesc }}</td><tr>
        <tr><td>{{ event.eventDate}}</td></tr>
        <tr><td>{{ event.eventImg}}</td></tr>
        <tr><td>{{ event.eventCapacity}}</td></tr>
        <tr><td>{{ event.eventEmail}}</td></tr>
        <tr><td>{{ event.eventPhone}}</td></tr>
        <tr><td>{{ event.eventAdd}}</td></tr>
        <tr><td>{{ event.eventUrl}}</td></tr>
        <tr><td>{{ event.eventType}}</td></tr>    
        <tr><td><a href=\"edit/{{event.id}}\" class=\"btn btn-default\">Edit</a>
        <a href=\"delete/{{event.id}}\" class=\"btn btn-danger\">Delete</a></td></tr>
    {% endfor %}
    </tbody>
    </table>
</div>
{% endblock %}", "pages/modify.html.twig", "C:\\xampp\\htdocs\\FSWD60-Adam-Gyarmati-CodeReview13\\app\\Resources\\views\\pages\\modify.html.twig");
    }
}
