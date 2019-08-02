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

/* pages/detailsevent.html.twig */
class __TwigTemplate_e1b022f3bdc9f477500275838b47787ef76587add686f938b8fee396fe1346f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/detailsevent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/detailsevent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/detailsevent.html.twig", 1);
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
        $this->loadTemplate("flash-messages.html.twig", "pages/detailsevent.html.twig", 3)->display($context);
        // line 4
        echo "    <a class=\"btn btn-default\" href=\"/\">Back</a>
    <hr>
    <h2 class=\"page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "eventName", []), "html", null, true);
        echo "</h2>
       <ul class=\"list-group\">
               <li class=\"list-group-item\">Capacity: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "eventCapacity", []), "html", null, true);
        echo "</li>
               <li class=\"list-group-item\">Email: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "eventEmail", []), "html", null, true);
        echo "</li>
       </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/detailsevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  71 => 8,  66 => 6,  62 => 4,  60 => 3,  51 => 2,  29 => 1,);
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
    <a class=\"btn btn-default\" href=\"/\">Back</a>
    <hr>
    <h2 class=\"page-header\">{{events.eventName}}</h2>
       <ul class=\"list-group\">
               <li class=\"list-group-item\">Capacity: {{events.eventCapacity}}</li>
               <li class=\"list-group-item\">Email: {{events.eventEmail}}</li>
       </ul>
{% endblock %}
        {#<tr><td>{{ event.eventCapacity }}</td></tr>
        <tr><td>{{ event.eventEmail }}</td></tr>
        <tr><td>{{ event.eventPhone }}</td></tr>
        <tr><td>{{ event.eventAdd }}</td></tr>
        <tr><td>{{ event.eventUrl }}</td></tr>
        <tr><td>{{ event.eventType }}</td></tr> #}", "pages/detailsevent.html.twig", "C:\\xampp\\htdocs\\FSWD60-Adam-Gyarmati-CodeReview13\\app\\Resources\\views\\pages\\detailsevent.html.twig");
    }
}
