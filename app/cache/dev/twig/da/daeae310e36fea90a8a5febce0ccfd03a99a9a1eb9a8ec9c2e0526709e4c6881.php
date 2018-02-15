<?php

/* OrionEventBundle:User_Events:user_events_index_train.html.twig */
class __TwigTemplate_080d3b375d7572266de067dab7dd4592aa13f3d081085806ad2e2cf2b10fb338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_front_user.html.twig", "OrionEventBundle:User_Events:user_events_index_train.html.twig", 1);
        $this->blocks = array(
            'module' => array($this, 'block_module'),
            'operation' => array($this, 'block_operation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionEventBundle::layout_front_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_284c4194504f7f7a1fbeb5c3b149562e293f46802ede8e15fa3f6d18fefda868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284c4194504f7f7a1fbeb5c3b149562e293f46802ede8e15fa3f6d18fefda868->enter($__internal_284c4194504f7f7a1fbeb5c3b149562e293f46802ede8e15fa3f6d18fefda868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Events:user_events_index_train.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284c4194504f7f7a1fbeb5c3b149562e293f46802ede8e15fa3f6d18fefda868->leave($__internal_284c4194504f7f7a1fbeb5c3b149562e293f46802ede8e15fa3f6d18fefda868_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_3fa1556fcc16ee63b2ab2ba71cd5d6a03c5f24b7fb2f83e2c5489f7da29ed0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa1556fcc16ee63b2ab2ba71cd5d6a03c5f24b7fb2f83e2c5489f7da29ed0e5->enter($__internal_3fa1556fcc16ee63b2ab2ba71cd5d6a03c5f24b7fb2f83e2c5489f7da29ed0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_3fa1556fcc16ee63b2ab2ba71cd5d6a03c5f24b7fb2f83e2c5489f7da29ed0e5->leave($__internal_3fa1556fcc16ee63b2ab2ba71cd5d6a03c5f24b7fb2f83e2c5489f7da29ed0e5_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_57423df8c4cd7fd9753fc3346fb4059bbf6aafe0415474765cede0bd98561a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57423df8c4cd7fd9753fc3346fb4059bbf6aafe0415474765cede0bd98561a4d->enter($__internal_57423df8c4cd7fd9753fc3346fb4059bbf6aafe0415474765cede0bd98561a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_57423df8c4cd7fd9753fc3346fb4059bbf6aafe0415474765cede0bd98561a4d->leave($__internal_57423df8c4cd7fd9753fc3346fb4059bbf6aafe0415474765cede0bd98561a4d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_91902be258d25fd5fe1c232baad768f203ba1e2b49af3783ecbc7197e647219e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91902be258d25fd5fe1c232baad768f203ba1e2b49af3783ecbc7197e647219e->enter($__internal_91902be258d25fd5fe1c232baad768f203ba1e2b49af3783ecbc7197e647219e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h1 class=\"text-center text-primary\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
        echo "s</b></h1>

";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 13
            echo "<table class=\"col-lg-3 col-xs-6 table-bordered\" >
    
    <div height=\"160\">
        <tr>

        <td class=\"text-center text-primary\"><h3>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</h3></td>    
    </tr>
    <tr>
    <td >
  
            <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
            echo "\"class=\"img-rounded img-responsive\" alt=\"entity.titre\" >
    
            </td>
        
    </tr>
    <tr>
        <td ><b>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Place"), "html", null, true);
            echo " : </b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ville", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pays", array()), "html", null, true);
            echo "</br>
            <b>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starts the"), "html", null, true);
            echo " </b>";
            if ($this->getAttribute($context["entity"], "horaireDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "d/m/Y"), "html", null, true);
                echo " <b>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                echo " </b>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "H:i"), "html", null, true);
            }
            echo "</br>
            <b>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ends the"), "html", null, true);
            echo " </b>";
            if ($this->getAttribute($context["entity"], "HoraireFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "HoraireFin", array()), "d/m/Y"), "html", null, true);
                echo " <b>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                echo "</b> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "HoraireFin", array()), "H:i"), "html", null, true);
            }
            // line 32
            echo "        </td>
    </tr>
    <tr>
        <td class=\"text-center\">
            
            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"small-box-footer\">
                ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("More Details"), "html", null, true);
            echo " <i class=\"fa fa-arrow-circle-right\"></i>
            </a>

        </td>
    </tr>
    </div>
</table>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "

                                ";
        
        $__internal_91902be258d25fd5fe1c232baad768f203ba1e2b49af3783ecbc7197e647219e->leave($__internal_91902be258d25fd5fe1c232baad768f203ba1e2b49af3783ecbc7197e647219e_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Events:user_events_index_train.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 47,  148 => 38,  144 => 37,  137 => 32,  127 => 31,  115 => 30,  107 => 29,  98 => 23,  90 => 18,  83 => 13,  79 => 12,  73 => 10,  67 => 9,  57 => 7,  51 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OrionEventBundle::layout_front_user.html.twig' %}

{% block module %}
{{ 'Events Management'|trans }}
{% endblock module %}
{% block operation %}
<i class=\"fa fa-list\"></i> {{ 'List'|trans }}
{% endblock operation %}
{% block body -%}
<h1 class=\"text-center text-primary\"><b>{{ 'Event'|trans }}s</b></h1>

{% for entity in entities %}
<table class=\"col-lg-3 col-xs-6 table-bordered\" >
    
    <div height=\"160\">
        <tr>

        <td class=\"text-center text-primary\"><h3>{{ entity.titre }}</h3></td>    
    </tr>
    <tr>
    <td >
  
            <img src=\"{{ asset('uploads/' ~ entity.path) }}\"class=\"img-rounded img-responsive\" alt=\"entity.titre\" >
    
            </td>
        
    </tr>
    <tr>
        <td ><b>{{ 'Place'|trans }} : </b>{{ entity.ville }}, {{ entity.pays }}</br>
            <b>{{ 'Starts the'|trans }} </b>{% if entity.horaireDebut %}{{ entity.horaireDebut|date('d/m/Y') }} <b>{{ 'at'|trans }} </b>{{ entity.horaireDebut|date('H:i') }}{% endif %}</br>
            <b>{{ 'Ends the'|trans }} </b>{% if entity.HoraireFin %}{{ entity.HoraireFin|date('d/m/Y') }} <b>{{ 'at'|trans }}</b> {{ entity.HoraireFin|date('H:i') }}{% endif %}
        </td>
    </tr>
    <tr>
        <td class=\"text-center\">
            
            <a href=\"{{ path('user_event_show', { 'id': entity.id }) }}\" class=\"small-box-footer\">
                {{ 'More Details'|trans }} <i class=\"fa fa-arrow-circle-right\"></i>
            </a>

        </td>
    </tr>
    </div>
</table>

      {% endfor %}


                                {% endblock %}
", "OrionEventBundle:User_Events:user_events_index_train.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Events/user_events_index_train.html.twig");
    }
}
