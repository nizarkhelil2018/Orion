<?php

/* OrionEventBundle:User_Events:user_events_search.html.twig */
class __TwigTemplate_9d94f0809358b840fff00911a28ebf46e21da5d75d19917fe4b23291f6a4761d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_front_user.html.twig", "OrionEventBundle:User_Events:user_events_search.html.twig", 1);
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
        $__internal_3b860a3b0dd9e8c9b572316be28f45428255e01bdf90d4d4f015e1d808420f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b860a3b0dd9e8c9b572316be28f45428255e01bdf90d4d4f015e1d808420f4a->enter($__internal_3b860a3b0dd9e8c9b572316be28f45428255e01bdf90d4d4f015e1d808420f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Events:user_events_search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b860a3b0dd9e8c9b572316be28f45428255e01bdf90d4d4f015e1d808420f4a->leave($__internal_3b860a3b0dd9e8c9b572316be28f45428255e01bdf90d4d4f015e1d808420f4a_prof);

    }

    // line 4
    public function block_module($context, array $blocks = array())
    {
        $__internal_0892b5fa033de09c9b339f7531270e7b58b3219bd10269a5ab821660a7741881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0892b5fa033de09c9b339f7531270e7b58b3219bd10269a5ab821660a7741881->enter($__internal_0892b5fa033de09c9b339f7531270e7b58b3219bd10269a5ab821660a7741881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_0892b5fa033de09c9b339f7531270e7b58b3219bd10269a5ab821660a7741881->leave($__internal_0892b5fa033de09c9b339f7531270e7b58b3219bd10269a5ab821660a7741881_prof);

    }

    // line 7
    public function block_operation($context, array $blocks = array())
    {
        $__internal_7f638103ad4af83b53936381e39cc08b2ba1b0a309c5454850dfcc6cb065570a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f638103ad4af83b53936381e39cc08b2ba1b0a309c5454850dfcc6cb065570a->enter($__internal_7f638103ad4af83b53936381e39cc08b2ba1b0a309c5454850dfcc6cb065570a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 8
        echo "<i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "
";
        
        $__internal_7f638103ad4af83b53936381e39cc08b2ba1b0a309c5454850dfcc6cb065570a->leave($__internal_7f638103ad4af83b53936381e39cc08b2ba1b0a309c5454850dfcc6cb065570a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b9a842973e56a6c7051be5a76d265f7fdd20bddcedbc4ecd3e58bcd121efad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9a842973e56a6c7051be5a76d265f7fdd20bddcedbc4ecd3e58bcd121efad0->enter($__internal_6b9a842973e56a6c7051be5a76d265f7fdd20bddcedbc4ecd3e58bcd121efad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<form method=\"POST\" action=\"\" class=\"text-center\">
    <table>
        <tr>
            <td class=\"col-sm-3\">
                <label>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "html", null, true);
        echo "</label>                
                <input type='text' name=\"input_titre\" value=\"\"/>
            </td>
            <td class=\"col-sm-3\">
                <label>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</label>
                <input type='text' name=\"input_description\" value=\"\"/>
            </td>
            <td class=\"col-sm-3\">                
                <label>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country"), "html", null, true);
        echo "</label>
                <input type='text' name=\"input_pays\" value=\"\"/>
            </td>
        </tr>
        <tr>
            <td class=\"col-sm-3\">
                <label>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</label>
                <input type='text' name=\"input_type\" value=\"\"/>
            </td>           
            <td class=\"col-sm-3\">
                <label>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</label>
                <input type='text' name=\"input_theme\" value=\"\"/>
            </td>
            <td class=\"col-sm-3\">
                <label class=\"text-right\">Etat</label>
                <ul style=\"list-style-type:none\" class=\"text-left\">
                    <li>
                        <input type=\"checkbox\" name=\"input_etat\" value=\"0\"> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancelled"), "html", null, true);
        echo "
                    </li>
                    <li>
                        <input type=\"checkbox\" name=\"input_etat\" value=\"1\" > ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registred"), "html", null, true);
        echo "
                    </li>
                    <li>
                        <input type=\"checkbox\" name=\"input_etat\" value=\"2\" > ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Public"), "html", null, true);
        echo "
                    </li>
            </td> 

        </tr>
        <tr>
            <td class=\"col-sm-3\">
                <label>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starts the"), "html", null, true);
        echo "</label>
                <input type='date' name=\"input_date_debut\" value=\"\"/>
            </td>
        </tr>

    </table> 
    <div class=\"text-center\">
        </br>
        <input type=\"submit\" class=\"btn btn-success\" name=\"rechercher\" value=";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo ">
    </div>
</form>
</br>

    ";
        // line 66
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 67
            echo "<div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Events Found"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 69
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 70
                echo "<table class=\"table table-responsive\">
    <tr>
        <th class=\"col-sm-2\"><h4 class=\"text-purple text-bold\">";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
                echo "</h4></th>
<td rowspan=\"7\"><b class=\"text-info \">";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
                echo ":</b></br>
    <p class=\"text-justify\">";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
                echo "</p></td></td>
<th class=\"col-sm-1 text-info\">";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
                echo "</th>
<td class=\"col-sm-2\">";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "theme", array()), "html", null, true);
                echo "</td>
<td rowspan=\"7\" class=\"col-sm-2\">
    <ul style=\"list-style-type:none\">
 
        <li>
            ";
                // line 81
                if ((twig_date_format_filter($this->env, "now", "YmdHis") < twig_date_format_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array())), "YmdHis"))) {
                    // line 82
                    echo "                    <b class=\"text-success\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_par_event_reserve", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                    <button type=\"button\" class=\"btn btn-default fa fa-ticket\"> ";
                    // line 83
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Details"), "html", null, true);
                    echo "</button>
                    </a></b>
                    ";
                } elseif (((twig_date_format_filter($this->env, "now", "YmdHis") > twig_date_format_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(                // line 85
$context["entity"], "horaireDebut", array())), "YmdHis")) && (twig_date_format_filter($this->env, "now", "YmdHis") < twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "HoraireFin", array()), "YmdHis")))) {
                    // line 86
                    echo "                    <b class=\"text-warning\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_par_event_reserve", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                    <button type=\"button\" class=\"btn btn-default fa fa-ticket\"> ";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Details"), "html", null, true);
                    echo "</button>
                </a></b>
                    ";
                } elseif ((twig_date_format_filter($this->env, "now", "YmdHis") > twig_date_format_filter($this->env, $this->getAttribute(                // line 89
$context["entity"], "HoraireFin", array()), "YmdHis"))) {
                    // line 90
                    echo "                    <b class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Passed Event"), "html", null, true);
                    echo "</b>
                    ";
                } else {
                    // line 92
                    echo "                    erreur
                    ";
                }
                // line 94
                echo "        </li>
    </ul>\t\t\t\t\t

</td>
</tr>
<tr>
    <td rowspan=\"6\"><img src=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
                echo "\"class=\"img-rounded img-responsive\" alt=\"entity.titre\"></td>    
    <th class=\"text-info\">";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
                echo "</th>
    <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
                echo "</td>    
</tr>
<tr>   
    <th class=\"text-info\">";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starts the"), "html", null, true);
                echo "</th>
    <td>";
                // line 106
                if ($this->getAttribute($context["entity"], "horaireDebut", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "d/m/Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "H:i"), "html", null, true);
                }
                echo "</td>
</tr>
<tr>    
    <th class=\"text-info\">";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ends the"), "html", null, true);
                echo "</th>
    <td>";
                // line 110
                if ($this->getAttribute($context["entity"], "HoraireFin", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "HoraireFin", array()), "d/m/Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "HoraireFin", array()), "H:i"), "html", null, true);
                }
                echo "</td>
</tr>
<tr>    
    <th class=\"text-info\">";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
                echo "</th>
    <td>GMT + ";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fuseauHoraire", array()), "html", null, true);
                echo "</td>
</tr>
<tr>    
    <th class=\"text-info\">";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address"), "html", null, true);
                echo "</th>
    <td>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ville", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codePostal", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pays", array()), "html", null, true);
                echo "</td>
</tr>
<tr>    
    <th class=\"text-info\">";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
                echo "</th>
    <td>
                ";
                // line 123
                if (($this->getAttribute($context["entity"], "etat", array()) == 2)) {
                    echo "<b><p class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Public"), "html", null, true);
                    echo "</p></b>
                ";
                } elseif (($this->getAttribute(                // line 124
$context["entity"], "etat", array()) == 1)) {
                    echo "<b><p class=\"text-warning\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registred"), "html", null, true);
                    echo "</p><b>
                        ";
                } elseif (($this->getAttribute(                // line 125
$context["entity"], "etat", array()) == 0)) {
                    echo " <b><p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancelled"), "html", null, true);
                    echo "</p></b>
                        ";
                }
                // line 127
                echo "                </td>
                </tr>  
                </table>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                ";
        }
        // line 132
        echo "            ";
        
        $__internal_6b9a842973e56a6c7051be5a76d265f7fdd20bddcedbc4ecd3e58bcd121efad0->leave($__internal_6b9a842973e56a6c7051be5a76d265f7fdd20bddcedbc4ecd3e58bcd121efad0_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Events:user_events_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 132,  350 => 131,  341 => 127,  334 => 125,  328 => 124,  322 => 123,  317 => 121,  305 => 118,  301 => 117,  295 => 114,  291 => 113,  279 => 110,  275 => 109,  263 => 106,  259 => 105,  253 => 102,  249 => 101,  245 => 100,  237 => 94,  233 => 92,  227 => 90,  225 => 89,  220 => 87,  215 => 86,  213 => 85,  208 => 83,  203 => 82,  201 => 81,  193 => 76,  189 => 75,  185 => 74,  181 => 73,  177 => 72,  173 => 70,  168 => 69,  162 => 67,  160 => 66,  152 => 61,  141 => 53,  131 => 46,  125 => 43,  119 => 40,  109 => 33,  102 => 29,  93 => 23,  86 => 19,  79 => 15,  73 => 11,  67 => 10,  57 => 8,  51 => 7,  42 => 5,  36 => 4,  11 => 1,);
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
<i class=\"fa fa-search\"></i> {{ 'Search'|trans }}
{% endblock operation %}
{% block body -%}
<form method=\"POST\" action=\"\" class=\"text-center\">
    <table>
        <tr>
            <td class=\"col-sm-3\">
                <label>{{ 'Title'|trans }}</label>                
                <input type='text' name=\"input_titre\" value=\"\"/>
            </td>
            <td class=\"col-sm-3\">
                <label>{{ 'Description'|trans }}</label>
                <input type='text' name=\"input_description\" value=\"\"/>
            </td>
            <td class=\"col-sm-3\">                
                <label>{{ 'Country'|trans }}</label>
                <input type='text' name=\"input_pays\" value=\"\"/>
            </td>
        </tr>
        <tr>
            <td class=\"col-sm-3\">
                <label>{{ 'Type'|trans }}</label>
                <input type='text' name=\"input_type\" value=\"\"/>
            </td>           
            <td class=\"col-sm-3\">
                <label>{{ 'Theme'|trans }}</label>
                <input type='text' name=\"input_theme\" value=\"\"/>
            </td>
            <td class=\"col-sm-3\">
                <label class=\"text-right\">Etat</label>
                <ul style=\"list-style-type:none\" class=\"text-left\">
                    <li>
                        <input type=\"checkbox\" name=\"input_etat\" value=\"0\"> {{ 'Cancelled'|trans }}
                    </li>
                    <li>
                        <input type=\"checkbox\" name=\"input_etat\" value=\"1\" > {{ 'Registred'|trans }}
                    </li>
                    <li>
                        <input type=\"checkbox\" name=\"input_etat\" value=\"2\" > {{ 'Public'|trans }}
                    </li>
            </td> 

        </tr>
        <tr>
            <td class=\"col-sm-3\">
                <label>{{ 'Starts the'|trans }}</label>
                <input type='date' name=\"input_date_debut\" value=\"\"/>
            </td>
        </tr>

    </table> 
    <div class=\"text-center\">
        </br>
        <input type=\"submit\" class=\"btn btn-success\" name=\"rechercher\" value={{ 'Search'|trans }}>
    </div>
</form>
</br>

    {% if entities is empty %}
<div class=\"text-danger text-center\">{{ 'No Events Found'|trans }}</div>
    {% else %}
        {% for entity in entities %}
<table class=\"table table-responsive\">
    <tr>
        <th class=\"col-sm-2\"><h4 class=\"text-purple text-bold\">{{ entity.titre }}</h4></th>
<td rowspan=\"7\"><b class=\"text-info \">{{ 'Description'|trans }}:</b></br>
    <p class=\"text-justify\">{{ entity.description }}</p></td></td>
<th class=\"col-sm-1 text-info\">{{ 'Theme'|trans }}</th>
<td class=\"col-sm-2\">{{ entity.theme }}</td>
<td rowspan=\"7\" class=\"col-sm-2\">
    <ul style=\"list-style-type:none\">
 
        <li>
            {% if \"now\"|date('YmdHis')  < entity.horaireDebut|date|date('YmdHis') %}
                    <b class=\"text-success\"><a href=\"{{ path('user_billet_par_event_reserve', { 'id': entity.id }) }}\">
                    <button type=\"button\" class=\"btn btn-default fa fa-ticket\"> {{'Tickets Details'|trans}}</button>
                    </a></b>
                    {% elseif \"now\"|date('YmdHis')  > entity.horaireDebut|date|date('YmdHis')  and \"now\"|date('YmdHis')  < entity.HoraireFin|date('YmdHis')%}
                    <b class=\"text-warning\"><a href=\"{{ path('user_billet_par_event_reserve', { 'id': entity.id }) }}\">
                    <button type=\"button\" class=\"btn btn-default fa fa-ticket\"> {{'Tickets Details'|trans}}</button>
                </a></b>
                    {% elseif \"now\"|date('YmdHis')  > entity.HoraireFin|date('YmdHis') %}
                    <b class=\"text-danger\">{{ 'Passed Event'|trans }}</b>
                    {% else %}
                    erreur
                    {% endif %}
        </li>
    </ul>\t\t\t\t\t

</td>
</tr>
<tr>
    <td rowspan=\"6\"><img src=\"{{ asset('uploads/' ~ entity.path) }}\"class=\"img-rounded img-responsive\" alt=\"entity.titre\"></td>    
    <th class=\"text-info\">{{ 'Type'|trans }}</th>
    <td>{{ entity.type }}</td>    
</tr>
<tr>   
    <th class=\"text-info\">{{ 'Starts the'|trans }}</th>
    <td>{% if entity.horaireDebut %}{{ entity.horaireDebut|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.horaireDebut|date('H:i') }}{% endif %}</td>
</tr>
<tr>    
    <th class=\"text-info\">{{ 'Ends the'|trans }}</th>
    <td>{% if entity.HoraireFin %}{{ entity.HoraireFin|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.HoraireFin|date('H:i') }}{% endif %}</td>
</tr>
<tr>    
    <th class=\"text-info\">{{ 'Time zone'|trans }}</th>
    <td>GMT + {{ entity.fuseauHoraire }}</td>
</tr>
<tr>    
    <th class=\"text-info\">{{ 'Address'|trans }}</th>
    <td>{{ entity.adresse }}, {{ entity.ville }} {{ entity.codePostal }}, {{ entity.pays }}</td>
</tr>
<tr>    
    <th class=\"text-info\">{{ 'State'|trans }}</th>
    <td>
                {% if entity.etat == 2 %}<b><p class=\"text-success\">{{ 'Public'|trans }}</p></b>
                {% elseif entity.etat == 1 %}<b><p class=\"text-warning\">{{ 'Registred'|trans }}</p><b>
                        {% elseif entity.etat ==0 %} <b><p class=\"text-danger\">{{ 'Cancelled'|trans }}</p></b>
                        {% endif %}
                </td>
                </tr>  
                </table>
                    {% endfor %}
                {% endif %}
            {% endblock %}
", "OrionEventBundle:User_Events:user_events_search.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Events/user_events_search.html.twig");
    }
}
