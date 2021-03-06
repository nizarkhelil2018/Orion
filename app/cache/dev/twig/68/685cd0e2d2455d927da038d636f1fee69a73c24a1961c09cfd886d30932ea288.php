<?php

/* @OrionEvent/User_Events/user_event_show.html.twig */
class __TwigTemplate_6f4ace4d4594fccfa26b7b84b4d0fe68ccf73484d65c18e2479a42dc7f83c60b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_front_user.html.twig", "@OrionEvent/User_Events/user_event_show.html.twig", 1);
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
        $__internal_a40b6b12d27cc91cabd8d4159b5af4123b37e83923035155f8204d332f8ea202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40b6b12d27cc91cabd8d4159b5af4123b37e83923035155f8204d332f8ea202->enter($__internal_a40b6b12d27cc91cabd8d4159b5af4123b37e83923035155f8204d332f8ea202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/User_Events/user_event_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a40b6b12d27cc91cabd8d4159b5af4123b37e83923035155f8204d332f8ea202->leave($__internal_a40b6b12d27cc91cabd8d4159b5af4123b37e83923035155f8204d332f8ea202_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_2359180e0cfe1df6995bc12a0265471a24d255a67dc87a118f2fab9cbc64559f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2359180e0cfe1df6995bc12a0265471a24d255a67dc87a118f2fab9cbc64559f->enter($__internal_2359180e0cfe1df6995bc12a0265471a24d255a67dc87a118f2fab9cbc64559f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_2359180e0cfe1df6995bc12a0265471a24d255a67dc87a118f2fab9cbc64559f->leave($__internal_2359180e0cfe1df6995bc12a0265471a24d255a67dc87a118f2fab9cbc64559f_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_35b1cebf38ba96eab29e0e8449d7b6069a0b7795cb0ce25c6cb085bb9b276804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b1cebf38ba96eab29e0e8449d7b6069a0b7795cb0ce25c6cb085bb9b276804->enter($__internal_35b1cebf38ba96eab29e0e8449d7b6069a0b7795cb0ce25c6cb085bb9b276804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-fw fa-desktop\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display"), "html", null, true);
        echo "
";
        
        $__internal_35b1cebf38ba96eab29e0e8449d7b6069a0b7795cb0ce25c6cb085bb9b276804->leave($__internal_35b1cebf38ba96eab29e0e8449d7b6069a0b7795cb0ce25c6cb085bb9b276804_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_63293d9899544eb29cf5f71b469f918b7bb58bf0e1843e05c6e463cdb2f2e1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63293d9899544eb29cf5f71b469f918b7bb58bf0e1843e05c6e463cdb2f2e1d1->enter($__internal_63293d9899544eb29cf5f71b469f918b7bb58bf0e1843e05c6e463cdb2f2e1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"text-center\" style=\"color: blue\">
    <p>
    <h1>
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "
    </h1>
</p>
</div>
<table class=\"table table-condensed\">

    <tbody align=\"left\">

        <tr>
            <th class=\"text-info\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
            <td class=\"text-justify\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            <td rowspan=\"8\"class=\"col-sm-3\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()))), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\"></td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
            <td>                
                 
                    ";
        // line 30
        if ((twig_date_format_filter($this->env, "now", "YmdHis") < twig_date_format_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array())), "YmdHis"))) {
            // line 31
            echo "                    <b class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Coming Event"), "html", null, true);
            echo "</b>
                    ";
        } elseif (((twig_date_format_filter($this->env, "now", "YmdHis") > twig_date_format_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(        // line 32
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array())), "YmdHis")) && (twig_date_format_filter($this->env, "now", "YmdHis") < twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "YmdHis")))) {
            // line 33
            echo "                    <b class=\"text-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In Progress Event"), "html", null, true);
            echo "</b>
                    ";
        } elseif ((twig_date_format_filter($this->env, "now", "YmdHis") > twig_date_format_filter($this->env, $this->getAttribute(        // line 34
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "YmdHis"))) {
            // line 35
            echo "                    <b class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Passed Event"), "html", null, true);
            echo "</b>
                    ";
        } else {
            // line 37
            echo "                    erreur
                    ";
        }
        // line 39
        echo "
            </td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</th>
            <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "theme", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</th>
            <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <th class=\"text-info\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starting Schedule"), "html", null, true);
        echo "</th>
            <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array()), "d/m/Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array()), "H:i"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ending Schedule"), "html", null, true);
        echo "</th>
            <td>Le ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "d-m-Y à H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
        echo "</th>
            <td>GMT + ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fuseauHoraire", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address"), "html", null, true);
        echo "</th>
            <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ville", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codePostal", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pays", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr align=\"center\">
            <td colspan=\"2\">
                <ul style=\"list-style-type:none\">
 
        <li>
            ";
        // line 72
        if ((twig_date_format_filter($this->env, "now", "YmdHis") < twig_date_format_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array())), "YmdHis"))) {
            // line 73
            echo "                    <b class=\"text-success\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_par_event_reserve", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                    <button type=\"button\" class=\"btn-xs btn-info\">Voir les billets</button>
                    </a></b>
                    ";
        } elseif (((twig_date_format_filter($this->env, "now", "YmdHis") > twig_date_format_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(        // line 76
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array())), "YmdHis")) && (twig_date_format_filter($this->env, "now", "YmdHis") < twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "YmdHis")))) {
            // line 77
            echo "                    <b class=\"text-warning\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_par_event_reserve", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                    <button type=\"button\" class=\"btn btn-default fa fa-ticket\">";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets List"), "html", null, true);
            echo "</button>
                </a></b>
                    ";
        } elseif ((twig_date_format_filter($this->env, "now", "YmdHis") > twig_date_format_filter($this->env, $this->getAttribute(        // line 80
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "YmdHis"))) {
            // line 81
            echo "                    
                    ";
        }
        // line 83
        echo "        </li>
    </ul>\t
            </td>
            <td class=\"center\"> 
            <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_event_index");
        echo "\">
            <button type=\"button\" class=\"btn  btn-default fa fa-list\"> ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Events"), "html", null, true);
        echo "</button>
        </a>
            </td>
        </tr>
    </tbody>
</table>






";
        
        $__internal_63293d9899544eb29cf5f71b469f918b7bb58bf0e1843e05c6e463cdb2f2e1d1->leave($__internal_63293d9899544eb29cf5f71b469f918b7bb58bf0e1843e05c6e463cdb2f2e1d1_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/User_Events/user_event_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 88,  250 => 87,  244 => 83,  240 => 81,  238 => 80,  233 => 78,  228 => 77,  226 => 76,  219 => 73,  217 => 72,  201 => 65,  197 => 64,  191 => 61,  187 => 60,  181 => 57,  177 => 56,  167 => 53,  163 => 52,  156 => 48,  152 => 47,  146 => 44,  142 => 43,  136 => 39,  132 => 37,  126 => 35,  124 => 34,  119 => 33,  117 => 32,  112 => 31,  110 => 30,  104 => 27,  98 => 24,  94 => 23,  90 => 22,  78 => 13,  73 => 10,  67 => 9,  57 => 7,  51 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
<i class=\"fa fa-fw fa-desktop\"></i> {{ 'Display'|trans }}
{% endblock operation %}
{% block body -%}
<div class=\"text-center\" style=\"color: blue\">
    <p>
    <h1>
            {{entity.titre}}
    </h1>
</p>
</div>
<table class=\"table table-condensed\">

    <tbody align=\"left\">

        <tr>
            <th class=\"text-info\">{{ 'Description'|trans }}</th>
            <td class=\"text-justify\">{{ entity.description }}</td>
            <td rowspan=\"8\"class=\"col-sm-3\"><img src=\"{{ asset('uploads/' ~ entity.path) }}\" class=\"img-responsive img-rounded\"></td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'State'|trans }}</th>
            <td>                
                 
                    {% if \"now\"|date('YmdHis')  < entity.horaireDebut|date|date('YmdHis') %}
                    <b class=\"text-success\">{{ 'Coming Event'|trans }}</b>
                    {% elseif \"now\"|date('YmdHis')  > entity.horaireDebut|date|date('YmdHis')  and \"now\"|date('YmdHis')  < entity.HoraireFin|date('YmdHis')%}
                    <b class=\"text-warning\">{{ 'In Progress Event'|trans }}</b>
                    {% elseif \"now\"|date('YmdHis')  > entity.HoraireFin|date('YmdHis') %}
                    <b class=\"text-danger\">{{ 'Passed Event'|trans }}</b>
                    {% else %}
                    erreur
                    {% endif %}

            </td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Theme'|trans }}</th>
            <td>{{ entity.theme }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Type'|trans }}</th>
            <td>{{ entity.type }}</td>
        </tr>

        <tr>
            <th class=\"text-info\">{{ 'Starting Schedule'|trans }}</th>
            <td>{{ entity.horaireDebut|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.horaireDebut|date('H:i') }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Ending Schedule'|trans }}</th>
            <td>Le {{ entity.HoraireFin|date('d-m-Y à H:i:s') }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Time zone'|trans }}</th>
            <td>GMT + {{ entity.fuseauHoraire }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Address'|trans }}</th>
            <td>{{ entity.adresse }}, {{ entity.ville }} {{ entity.codePostal }}, {{ entity.pays }}</td>
        </tr>
        <tr align=\"center\">
            <td colspan=\"2\">
                <ul style=\"list-style-type:none\">
 
        <li>
            {% if \"now\"|date('YmdHis')  < entity.horaireDebut|date|date('YmdHis') %}
                    <b class=\"text-success\"><a href=\"{{ path('user_billet_par_event_reserve', { 'id': entity.id }) }}\">
                    <button type=\"button\" class=\"btn-xs btn-info\">Voir les billets</button>
                    </a></b>
                    {% elseif \"now\"|date('YmdHis')  > entity.horaireDebut|date|date('YmdHis')  and \"now\"|date('YmdHis')  < entity.HoraireFin|date('YmdHis')%}
                    <b class=\"text-warning\"><a href=\"{{ path('user_billet_par_event_reserve', { 'id': entity.id }) }}\">
                    <button type=\"button\" class=\"btn btn-default fa fa-ticket\">{{'Tickets List'|trans}}</button>
                </a></b>
                    {% elseif \"now\"|date('YmdHis')  > entity.HoraireFin|date('YmdHis') %}
                    
                    {% endif %}
        </li>
    </ul>\t
            </td>
            <td class=\"center\"> 
            <a href=\"{{ path('user_event_index') }}\">
            <button type=\"button\" class=\"btn  btn-default fa fa-list\"> {{ 'All Events'|trans }}</button>
        </a>
            </td>
        </tr>
    </tbody>
</table>






{% endblock %}
", "@OrionEvent/User_Events/user_event_show.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\User_Events\\user_event_show.html.twig");
    }
}
