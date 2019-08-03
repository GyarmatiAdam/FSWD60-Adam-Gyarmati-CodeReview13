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
        echo "  <div class=\"row\">
    <div class=\"col-sm-3\">
    </div>
    <div class=\"addform col-sm-6\">
    <br><a class=\"btn btn-light\" href=\"/\">Back</a>
    <hr>
    <h2 class=\"page-header\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "eventName", []), "html", null, true);
        echo "</h2>
       <ul class=\"list-group\">
            <li class=\"list-group-item\"><h6>Capacity:</h6> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "eventCapacity", []), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\"><h6>Email:</h6> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "eventEmail", []), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\"><h6>Phone:</h6> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "eventPhone", []), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\"><h6>Address:</h6> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "eventAdd", []), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\"><h6>Website:</h6> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "eventUrl", []), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\"><h6>Type:</h6> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "eventType", []), "html", null, true);
        echo "</li>
       </ul><br>
    </div>
    <div class=\"col-sm-3\">
    </div>
  </div>
</div>
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
        return array (  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  70 => 10,  62 => 4,  60 => 3,  51 => 2,  29 => 1,);
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
  <div class=\"row\">
    <div class=\"col-sm-3\">
    </div>
    <div class=\"addform col-sm-6\">
    <br><a class=\"btn btn-light\" href=\"/\">Back</a>
    <hr>
    <h2 class=\"page-header\">{{events.eventName}}</h2>
       <ul class=\"list-group\">
            <li class=\"list-group-item\"><h6>Capacity:</h6> {{events.eventCapacity}}</li>
            <li class=\"list-group-item\"><h6>Email:</h6> {{events.eventEmail}}</li>
            <li class=\"list-group-item\"><h6>Phone:</h6> {{events.eventPhone}}</li>
            <li class=\"list-group-item\"><h6>Address:</h6> {{events.eventAdd}}</li>
            <li class=\"list-group-item\"><h6>Website:</h6> {{events.eventUrl}}</li>
            <li class=\"list-group-item\"><h6>Type:</h6> {{events.eventType}}</li>
       </ul><br>
    </div>
    <div class=\"col-sm-3\">
    </div>
  </div>
</div>
{% endblock %}", "pages/detailsevent.html.twig", "C:\\xampp\\htdocs\\FSWD60-Adam-Gyarmati-CodeReview13\\app\\Resources\\views\\pages\\detailsevent.html.twig");
    }
}
