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
        echo "  <div class=\"row\">
    <div class=\"col-sm-2\">

    </div>

    <div class=\"col-sm-8\">
    <table class=\"table modifytable \" style=\"margin:2rem; width:100%;\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 11
            echo "        <thead>
            <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Capacity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope=\"row\"></th>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventName", []), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventDate", []), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventCapacity", []), "html", null, true);
            echo "</td>
            </tr>
        </tbody>
        <thead>
            <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Phone</th>
            <th scope=\"col\">Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope=\"row\"></th>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventEmail", []), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventPhone", []), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventAdd", []), "html", null, true);
            echo "</td>
            </tr>
        </tbody>
        <thead>
            <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Website</th>
            <th scope=\"col\">Type</th>
            <th scope=\"col\">Edit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope=\"row\"></th>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventUrl", []), "html", null, true);
            echo "</td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventType", []), "html", null, true);
            echo "</td>
            </tr>
        </tbody>
        <thead>
            <tr>
            <th scope=\"col\">#</th>
            <th colspan=\"3\" scope=\"col\">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope=\"row\"></th>
            <td colspan=\"3\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventDesc", []), "html", null, true);
            echo "</td>
            ";
            // line 69
            echo "            </tr>
            <tr><td colspan=\"3\"><a href=\"edit/";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", []), "html", null, true);
            echo "\" class=\"btn btn-success\">Edit</a>
            <a href=\"delete/";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", []), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a></td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    
        </tbody>
        </table><br><br>

    </div>
    <div class=\"col-sm-2\">

    </div>
  </div>
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
        return array (  174 => 72,  166 => 71,  162 => 70,  159 => 69,  155 => 67,  140 => 55,  136 => 54,  119 => 40,  115 => 39,  111 => 38,  94 => 24,  90 => 23,  86 => 22,  73 => 11,  69 => 10,  60 => 3,  51 => 2,  29 => 1,);
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
  <div class=\"row\">
    <div class=\"col-sm-2\">

    </div>

    <div class=\"col-sm-8\">
    <table class=\"table modifytable \" style=\"margin:2rem; width:100%;\">
{% for event in events %}
        <thead>
            <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Name</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Capacity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope=\"row\"></th>
            <td>{{ event.eventName }}</td>
            <td>{{ event.eventDate}}</td>
            <td>{{ event.eventCapacity}}</td>
            </tr>
        </tbody>
        <thead>
            <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Phone</th>
            <th scope=\"col\">Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope=\"row\"></th>
            <td>{{ event.eventEmail}}</td>
            <td>{{ event.eventPhone}}</td>
            <td>{{ event.eventAdd}}</td>
            </tr>
        </tbody>
        <thead>
            <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Website</th>
            <th scope=\"col\">Type</th>
            <th scope=\"col\">Edit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope=\"row\"></th>
            <td>{{ event.eventUrl}}</td>
            <td>{{ event.eventType}}</td>
            </tr>
        </tbody>
        <thead>
            <tr>
            <th scope=\"col\">#</th>
            <th colspan=\"3\" scope=\"col\">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope=\"row\"></th>
            <td colspan=\"3\">{{ event.eventDesc }}</td>
            {# <tr><td>{{ event.eventImg}}</td></tr> #}
            </tr>
            <tr><td colspan=\"3\"><a href=\"edit/{{event.id}}\" class=\"btn btn-success\">Edit</a>
            <a href=\"delete/{{event.id}}\" class=\"btn btn-danger\">Delete</a></td></tr>
{% endfor %}    
        </tbody>
        </table><br><br>

    </div>
    <div class=\"col-sm-2\">

    </div>
  </div>
</div>
{% endblock %}", "pages/modify.html.twig", "C:\\xampp\\htdocs\\FSWD60-Adam-Gyarmati-CodeReview13\\app\\Resources\\views\\pages\\modify.html.twig");
    }
}
