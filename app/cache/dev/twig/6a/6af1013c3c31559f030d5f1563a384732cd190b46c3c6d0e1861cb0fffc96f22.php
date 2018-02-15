<?php

/* @OrionEvent/User_Events/user_events_index.html.twig */
class __TwigTemplate_207a6db38b43172282edc634f97264963be8c73046a99b220de98143f2211433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "@OrionEvent/User_Events/user_events_index.html.twig", 1);
        $this->blocks = array(
            'module' => array($this, 'block_module'),
            'operation' => array($this, 'block_operation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionEventBundle::layout_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a333bbb2030cd8197e9a489bf5cba5489b5aa0329aeb89ecce67a9e1a4243f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a333bbb2030cd8197e9a489bf5cba5489b5aa0329aeb89ecce67a9e1a4243f6->enter($__internal_1a333bbb2030cd8197e9a489bf5cba5489b5aa0329aeb89ecce67a9e1a4243f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/User_Events/user_events_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a333bbb2030cd8197e9a489bf5cba5489b5aa0329aeb89ecce67a9e1a4243f6->leave($__internal_1a333bbb2030cd8197e9a489bf5cba5489b5aa0329aeb89ecce67a9e1a4243f6_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_ff20569824076f921d02e00e8a27dae5f748d1cdc67e38a125da64d12027ba9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff20569824076f921d02e00e8a27dae5f748d1cdc67e38a125da64d12027ba9b->enter($__internal_ff20569824076f921d02e00e8a27dae5f748d1cdc67e38a125da64d12027ba9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_ff20569824076f921d02e00e8a27dae5f748d1cdc67e38a125da64d12027ba9b->leave($__internal_ff20569824076f921d02e00e8a27dae5f748d1cdc67e38a125da64d12027ba9b_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_3f40e53b5e2fee9d9008c26bf95551efe597ddc448c298a659185be04fddae26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f40e53b5e2fee9d9008c26bf95551efe597ddc448c298a659185be04fddae26->enter($__internal_3f40e53b5e2fee9d9008c26bf95551efe597ddc448c298a659185be04fddae26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_3f40e53b5e2fee9d9008c26bf95551efe597ddc448c298a659185be04fddae26->leave($__internal_3f40e53b5e2fee9d9008c26bf95551efe597ddc448c298a659185be04fddae26_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d3c6f64e8b185352e49f4cee0865d6275bbbf28169d7377f35918c7fa3ece4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3c6f64e8b185352e49f4cee0865d6275bbbf28169d7377f35918c7fa3ece4d->enter($__internal_5d3c6f64e8b185352e49f4cee0865d6275bbbf28169d7377f35918c7fa3ece4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h1 class=\"text-center text-primary\"><b>Liste des Evenements</b></h1>

<table class=\"table table-striped\">
    <thead>
        <tr class=\"info text-muted\">
            <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "html", null, true);
        echo "</th>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
            <th class=\"col-sm-1\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</th>
            <th class=\"col-sm-1\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</th>
            <th class=\"col-sm-1\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starting Schedule"), "html", null, true);
        echo "</th>
            <th class=\"col-sm-1\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ending Schedule"), "html", null, true);
        echo "</th>
            <th class=\"col-sm-1\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
        echo "</th>
            <th class=\"col-sm-2\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addrss"), "html", null, true);
        echo "</th>
            <th class=\"col-sm-1\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
        echo "</th>
        </tr>
    </thead>

    <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "        <tr>
            <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</b></a></td>
            <td class=\"text-justify\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>

            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "theme", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            if ($this->getAttribute($context["entity"], "horaireDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "d/m/Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "H:i"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 36
            if ($this->getAttribute($context["entity"], "HoraireFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "HoraireFin", array()), "d/m/Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "HoraireFin", array()), "H:i"), "html", null, true);
            }
            echo "</td>
            <td>GMT + ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fuseauHoraire", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ville", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codePostal", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pays", array()), "html", null, true);
            echo "</td>
            <td>               
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                    <button type=\"button\" class=\"btn-xs btn-success\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display"), "html", null, true);
            echo "</button>
                </a>

                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_par_event", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                    <button type=\"button\" class=\"btn-xs btn-info\">Voir les billets</button>
                </a>

            </td>
        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </tbody>
</table>




                                ";
        
        $__internal_5d3c6f64e8b185352e49f4cee0865d6275bbbf28169d7377f35918c7fa3ece4d->leave($__internal_5d3c6f64e8b185352e49f4cee0865d6275bbbf28169d7377f35918c7fa3ece4d_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/User_Events/user_events_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 51,  191 => 44,  185 => 41,  181 => 40,  170 => 38,  166 => 37,  156 => 36,  146 => 35,  142 => 34,  138 => 33,  133 => 31,  127 => 30,  124 => 29,  120 => 28,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  73 => 10,  67 => 9,  57 => 7,  51 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OrionEventBundle::layout_user.html.twig' %}

{% block module %}
{{ 'Events Management'|trans }}
{% endblock module %}
{% block operation %}
<i class=\"fa fa-list\"></i> {{ 'List'|trans }}
{% endblock operation %}
{% block body -%}
<h1 class=\"text-center text-primary\"><b>Liste des Evenements</b></h1>

<table class=\"table table-striped\">
    <thead>
        <tr class=\"info text-muted\">
            <th>{{ 'Title'|trans }}</th>
            <th>{{ 'Description'|trans }}</th>
            <th class=\"col-sm-1\">{{ 'Theme'|trans }}</th>
            <th class=\"col-sm-1\">{{ 'Type'|trans }}</th>
            <th class=\"col-sm-1\">{{ 'Starting Schedule'|trans }}</th>
            <th class=\"col-sm-1\">{{ 'Ending Schedule'|trans }}</th>
            <th class=\"col-sm-1\">{{ 'Time zone'|trans }}</th>
            <th class=\"col-sm-2\">{{ 'Addrss'|trans }}</th>
            <th class=\"col-sm-1\">{{ 'Action'|trans }}</th>
        </tr>
    </thead>

    <tbody>
            {% for entity in entities %}
        <tr>
            <td><a href=\"{{ path('user_event_show', { 'id': entity.id }) }}\"><b>{{ entity.titre }}</b></a></td>
            <td class=\"text-justify\">{{ entity.description }}</td>

            <td>{{ entity.theme }}</td>
            <td>{{ entity.type }}</td>
            <td>{% if entity.horaireDebut %}{{ entity.horaireDebut|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.horaireDebut|date('H:i') }}{% endif %}</td>
            <td>{% if entity.HoraireFin %}{{ entity.HoraireFin|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.HoraireFin|date('H:i') }}{% endif %}</td>
            <td>GMT + {{ entity.fuseauHoraire }}</td>
            <td>{{ entity.adresse }}, {{ entity.ville }} {{ entity.codePostal }}, {{ entity.pays }}</td>
            <td>               
                <a href=\"{{ path('user_event_show', { 'id': entity.id }) }}\">
                    <button type=\"button\" class=\"btn-xs btn-success\">{{ 'Display'|trans }}</button>
                </a>

                <a href=\"{{ path('user_billet_par_event', { 'id': entity.id }) }}\">
                    <button type=\"button\" class=\"btn-xs btn-info\">Voir les billets</button>
                </a>

            </td>
        </tr>
                                    {% endfor %}
    </tbody>
</table>




                                {% endblock %}
", "@OrionEvent/User_Events/user_events_index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\User_Events\\user_events_index.html.twig");
    }
}
