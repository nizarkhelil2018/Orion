<?php

/* OrionEventBundle:Admin_Events:admin_event_search.html.twig */
class __TwigTemplate_cbd15e369628423babae2a18ae428c6ee55e7caf11c7a7df2c74f55f006c8db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Events:admin_event_search.html.twig", 1);
        $this->blocks = array(
            'module' => array($this, 'block_module'),
            'operation' => array($this, 'block_operation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionEventBundle::layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_902c687c7b60f8942dea2052eecff25683dc14b5c9cb7f1031c99b1051456033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902c687c7b60f8942dea2052eecff25683dc14b5c9cb7f1031c99b1051456033->enter($__internal_902c687c7b60f8942dea2052eecff25683dc14b5c9cb7f1031c99b1051456033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Events:admin_event_search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_902c687c7b60f8942dea2052eecff25683dc14b5c9cb7f1031c99b1051456033->leave($__internal_902c687c7b60f8942dea2052eecff25683dc14b5c9cb7f1031c99b1051456033_prof);

    }

    // line 4
    public function block_module($context, array $blocks = array())
    {
        $__internal_dadf6ea99f0429fa4bc8cb4b4c433b95d43bc6eb24ca82617173fe6df8d7d2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadf6ea99f0429fa4bc8cb4b4c433b95d43bc6eb24ca82617173fe6df8d7d2f5->enter($__internal_dadf6ea99f0429fa4bc8cb4b4c433b95d43bc6eb24ca82617173fe6df8d7d2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_dadf6ea99f0429fa4bc8cb4b4c433b95d43bc6eb24ca82617173fe6df8d7d2f5->leave($__internal_dadf6ea99f0429fa4bc8cb4b4c433b95d43bc6eb24ca82617173fe6df8d7d2f5_prof);

    }

    // line 7
    public function block_operation($context, array $blocks = array())
    {
        $__internal_6425a08364a9d83bb726929ca2afc0fe6c8c33daed656c89e22b4ee6d3908c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6425a08364a9d83bb726929ca2afc0fe6c8c33daed656c89e22b4ee6d3908c38->enter($__internal_6425a08364a9d83bb726929ca2afc0fe6c8c33daed656c89e22b4ee6d3908c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 8
        echo "<i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "
";
        
        $__internal_6425a08364a9d83bb726929ca2afc0fe6c8c33daed656c89e22b4ee6d3908c38->leave($__internal_6425a08364a9d83bb726929ca2afc0fe6c8c33daed656c89e22b4ee6d3908c38_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_283875e08feb63b2639767cf268ed4e03ba22aa79dd6e16d8ebd02cad3bc92ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283875e08feb63b2639767cf268ed4e03ba22aa79dd6e16d8ebd02cad3bc92ae->enter($__internal_283875e08feb63b2639767cf268ed4e03ba22aa79dd6e16d8ebd02cad3bc92ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            ";
        // line 36
        echo "            <td class=\"col-sm-3\">
                <label class=\"text-right\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</label>
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
        ";
        // line 57
        echo "
    </table> 
    <div class=\"text-center\">
        </br>
        <input type=\"submit\" class=\"btn btn-success \" name=\"rechercher\" value=";
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
        <th class=\"col-sm-2\"><a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"text-purple text-bold\"><h4><b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
                echo "</b></h4></a></th>
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
        
\t";
                // line 80
                if (($this->getAttribute($context["entity"], "etat", array()) == 2)) {
                    // line 81
                    echo "        <li>
            <a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_hide", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\" fa fa-ban text-warning fa fa-2x\">
                ";
                    // line 84
                    echo "            </a> 
        </li>
        <li>
            <a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_cancel", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-close text-danger fa fa-2x\">
                ";
                    // line 89
                    echo "            </a> 
        </li>

                    ";
                } elseif (($this->getAttribute(                // line 92
$context["entity"], "etat", array()) == 1)) {
                    // line 93
                    echo "        <li>                            
            <a href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_publish", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-share text-success fa-2x\">
               ";
                    // line 96
                    echo "            </a>  
        </li>
        <li>
            <a href=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_cancel", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-close text-danger fa fa-2x\">
                ";
                    // line 101
                    echo "            </a>
        </li>
                    ";
                } elseif (($this->getAttribute(                // line 103
$context["entity"], "etat", array()) == 0)) {
                    echo " 
        <li>                           
            <a href=\"";
                    // line 105
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_publish", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-share text-success fa-2x\">
                ";
                    // line 107
                    echo "            </a>  
        </li>
        <li>
            <a href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_hide", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-ban text-warning fa-2x\">

               ";
                    // line 113
                    echo "            </a> 
        </li>
                    ";
                }
                // line 115
                echo "  
        <li>
            <a href=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-edit text-info fa-2x\">
               ";
                // line 119
                echo "            </a>
        </li>
    </ul>\t\t\t\t\t

</td>
</tr>
<tr>
    <td rowspan=\"6\"><img src=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
                echo "\"class=\"img-rounded img-responsive\" alt=\"entity.titre\"></td>    
    <th class=\"text-info\">";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
                echo "</th>
    <td>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
                echo "</td>    
</tr>
<tr>   
    <th class=\"text-info\">";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starts the"), "html", null, true);
                echo "</th>
    <td>";
                // line 132
                if ($this->getAttribute($context["entity"], "horaireDebut", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "d/m/Y "), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "H:i"), "html", null, true);
                }
                echo "</td>
</tr>
<tr>    
    <th class=\"text-info\">";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ends the"), "html", null, true);
                echo "</th>
    <td>";
                // line 136
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
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
                echo "</th>
    <td>GMT + ";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fuseauHoraire", array()), "html", null, true);
                echo "</td>
</tr>
<tr>    
    <th class=\"text-info\">";
                // line 143
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address"), "html", null, true);
                echo "</th>
    <td>";
                // line 144
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
                // line 147
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
                echo "</th>
    <td>
                ";
                // line 149
                if (($this->getAttribute($context["entity"], "etat", array()) == 2)) {
                    echo "<b><p class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Public"), "html", null, true);
                    echo "</p></b>
                ";
                } elseif (($this->getAttribute(                // line 150
$context["entity"], "etat", array()) == 1)) {
                    echo "<b><p class=\"text-warning\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registred"), "html", null, true);
                    echo "</p><b>
                        ";
                } elseif (($this->getAttribute(                // line 151
$context["entity"], "etat", array()) == 0)) {
                    echo " <b><p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancelled"), "html", null, true);
                    echo "</p></b>
                        ";
                }
                // line 153
                echo "                </td>
                </tr>  
                </table>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                ";
        }
        // line 158
        echo "            ";
        
        $__internal_283875e08feb63b2639767cf268ed4e03ba22aa79dd6e16d8ebd02cad3bc92ae->leave($__internal_283875e08feb63b2639767cf268ed4e03ba22aa79dd6e16d8ebd02cad3bc92ae_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Events:admin_event_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 158,  377 => 157,  368 => 153,  361 => 151,  355 => 150,  349 => 149,  344 => 147,  332 => 144,  328 => 143,  322 => 140,  318 => 139,  306 => 136,  302 => 135,  290 => 132,  286 => 131,  280 => 128,  276 => 127,  272 => 126,  263 => 119,  259 => 117,  255 => 115,  250 => 113,  245 => 110,  240 => 107,  236 => 105,  231 => 103,  227 => 101,  223 => 99,  218 => 96,  214 => 94,  211 => 93,  209 => 92,  204 => 89,  200 => 87,  195 => 84,  191 => 82,  188 => 81,  186 => 80,  179 => 76,  175 => 75,  171 => 74,  167 => 73,  161 => 72,  157 => 70,  152 => 69,  146 => 67,  144 => 66,  136 => 61,  130 => 57,  122 => 46,  116 => 43,  110 => 40,  104 => 37,  101 => 36,  93 => 23,  86 => 19,  79 => 15,  73 => 11,  67 => 10,  57 => 8,  51 => 7,  42 => 5,  36 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OrionEventBundle::layout_admin.html.twig' %}


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
            {#<td class=\"col-sm-3\">
                <label>{{ 'Type'|trans }}</label>
                <input type='text' name=\"input_type\" value=\"\"/>
            </td>           
            <td class=\"col-sm-3\">
                <label>{{ 'Theme'|trans }}</label>
                <input type='text' name=\"input_theme\" value=\"\"/>
            </td>#}
            <td class=\"col-sm-3\">
                <label class=\"text-right\">{{ 'State'|trans }}</label>
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
        {#<tr>
            <td class=\"col-sm-3\">
                <label>{{ 'Starts the'|trans }}</label>
                <input type='date' name=\"input_date_debut\" value=\"\"/>
            </td>
        </tr>#}

    </table> 
    <div class=\"text-center\">
        </br>
        <input type=\"submit\" class=\"btn btn-success \" name=\"rechercher\" value={{ 'Search'|trans }}>
    </div>
</form>
</br>

    {% if entities is empty %}
<div class=\"text-danger text-center\">{{ 'No Events Found'|trans }}</div>
    {% else %}
        {% for entity in entities %}
<table class=\"table table-responsive\">
    <tr>
        <th class=\"col-sm-2\"><a href=\"{{ path('admin_event_show', { 'id': entity.id }) }}\" class=\"text-purple text-bold\"><h4><b>{{ entity.titre }}</b></h4></a></th>
<td rowspan=\"7\"><b class=\"text-info \">{{ 'Description'|trans }}:</b></br>
    <p class=\"text-justify\">{{ entity.description }}</p></td></td>
<th class=\"col-sm-1 text-info\">{{ 'Theme'|trans }}</th>
<td class=\"col-sm-2\">{{ entity.theme }}</td>
<td rowspan=\"7\" class=\"col-sm-2\">
    <ul style=\"list-style-type:none\">
        
\t{% if entity.etat == 2 %}
        <li>
            <a href=\"{{ path('admin_event_hide', { 'id': entity.id }) }}\" class=\" fa fa-ban text-warning fa fa-2x\">
                {#<button type=\"button\" class=\"btn-xs btn-block text-left fa fa-ban text-warning\"> {{ 'Hide'|trans }}</button>#}
            </a> 
        </li>
        <li>
            <a href=\"{{ path('admin_event_cancel', { 'id': entity.id }) }}\" class=\"fa fa-close text-danger fa fa-2x\">
                {#<button type=\"button\" class=\"btn-xs btn-block text-left  fa fa-close text-danger\"> {{ 'Cancel'|trans }}</button>#}
            </a> 
        </li>

                    {% elseif entity.etat == 1 %}
        <li>                            
            <a href=\"{{ path('admin_event_publish', { 'id': entity.id }) }}\" class=\"fa fa-share text-success fa-2x\">
               {# <button type=\"button\" class=\"btn-xs btn-block text-left   fa fa-share text-success\"> {{ 'Publish'|trans }}</button>#}
            </a>  
        </li>
        <li>
            <a href=\"{{ path('admin_event_cancel', { 'id': entity.id }) }}\" class=\"fa fa-close text-danger fa fa-2x\">
                {#<button type=\"button\" class=\"btn-xs btn-block text-left  fa fa-close text-danger\"> {{ 'Cancel'|trans }}</button>#}
            </a>
        </li>
                    {% elseif entity.etat ==0 %} 
        <li>                           
            <a href=\"{{ path('admin_event_publish', { 'id': entity.id }) }}\" class=\"fa fa-share text-success fa-2x\">
                {#<button type=\"button\" class=\"btn-xs btn-block text-left  fa fa-share text-success\"> {{ 'Publish'|trans }}</button>#}
            </a>  
        </li>
        <li>
            <a href=\"{{ path('admin_event_hide', { 'id': entity.id }) }}\" class=\"fa fa-ban text-warning fa-2x\">

               {# <button type=\"button\" class=\"btn-xs btn-block text-left  fa fa-ban text-warning\"> {{ 'Hide'|trans }}</button>#}
            </a> 
        </li>
                    {% endif %}  
        <li>
            <a href=\"{{ path('admin_event_edit', { 'id': entity.id }) }}\" class=\"fa fa-edit text-info fa-2x\">
               {# <button type=\"button\" class=\"btn-xs btn-block text-left  fa fa-edit text-info\"> {{ 'Edit'|trans }}</button>#}
            </a>
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
    <td>{% if entity.horaireDebut %}{{ entity.horaireDebut|date('d/m/Y ') }} {{ 'at'|trans }} {{ entity.horaireDebut|date('H:i') }}{% endif %}</td>
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
", "OrionEventBundle:Admin_Events:admin_event_search.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Events/admin_event_search.html.twig");
    }
}
