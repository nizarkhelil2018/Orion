<?php

/* OrionEventBundle:Admin_Events:admin_event_index.html.twig */
class __TwigTemplate_b9703f58089e41621aa0e60dead80c1644d361a84bfe422ca4d8d02ec58bfee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Events:admin_event_index.html.twig", 1);
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
        $__internal_87142ea64bfcf10b44b18f1abcb3b474a1182775fe1a11510912b9ef65325ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87142ea64bfcf10b44b18f1abcb3b474a1182775fe1a11510912b9ef65325ec4->enter($__internal_87142ea64bfcf10b44b18f1abcb3b474a1182775fe1a11510912b9ef65325ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Events:admin_event_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87142ea64bfcf10b44b18f1abcb3b474a1182775fe1a11510912b9ef65325ec4->leave($__internal_87142ea64bfcf10b44b18f1abcb3b474a1182775fe1a11510912b9ef65325ec4_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_17272072a9c833e318b7668dd57e7dabd543cab990e7d27fb9d2ae063016f93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17272072a9c833e318b7668dd57e7dabd543cab990e7d27fb9d2ae063016f93b->enter($__internal_17272072a9c833e318b7668dd57e7dabd543cab990e7d27fb9d2ae063016f93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_17272072a9c833e318b7668dd57e7dabd543cab990e7d27fb9d2ae063016f93b->leave($__internal_17272072a9c833e318b7668dd57e7dabd543cab990e7d27fb9d2ae063016f93b_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_e1c2767f9673051bf635dd13b98bd0572c086c149a59ee19cd21f1a935ab50ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c2767f9673051bf635dd13b98bd0572c086c149a59ee19cd21f1a935ab50ee->enter($__internal_e1c2767f9673051bf635dd13b98bd0572c086c149a59ee19cd21f1a935ab50ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_e1c2767f9673051bf635dd13b98bd0572c086c149a59ee19cd21f1a935ab50ee->leave($__internal_e1c2767f9673051bf635dd13b98bd0572c086c149a59ee19cd21f1a935ab50ee_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d57cc77f16c152781c02bdf7d704ae64bb350777008ad40dcc5868b07ebbef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d57cc77f16c152781c02bdf7d704ae64bb350777008ad40dcc5868b07ebbef7->enter($__internal_4d57cc77f16c152781c02bdf7d704ae64bb350777008ad40dcc5868b07ebbef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h1 class=\"text-center text-primary\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events List"), "html", null, true);
        echo "</b></h1>


    ";
        // line 13
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 14
            echo "<div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Events Found"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 17
                echo "<table class=\"table table-responsive\">
    <tr>
        <th class=\"col-sm-2\"><a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"text-purple text-bold\"><h4><b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
                echo "</b></h4></a></th>
<td rowspan=\"7\"><b class=\"text-info \">";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
                echo ":</b></br>
    <p class=\"text-justify\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
                echo "</p></td></td>
<th class=\"col-sm-1 text-info\">";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
                echo "</th>
<td class=\"col-sm-2\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "theme", array()), "html", null, true);
                echo "</td>
<td rowspan=\"7\" class=\"col-sm-2\">
    <ul style=\"list-style-type:none\">
        
\t";
                // line 27
                if (($this->getAttribute($context["entity"], "etat", array()) == 2)) {
                    // line 28
                    echo "        <li>
            <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_hide", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\" fa fa-ban text-warning fa fa-2x\">
                ";
                    // line 31
                    echo "            </a> 
        </li>
        <li>
            <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_cancel", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-close text-danger fa fa-2x\">
                ";
                    // line 36
                    echo "            </a> 
        </li>

                    ";
                } elseif (($this->getAttribute(                // line 39
$context["entity"], "etat", array()) == 1)) {
                    // line 40
                    echo "        <li>                            
            <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_publish", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-share text-success fa-2x\">
               ";
                    // line 43
                    echo "            </a>  
        </li>
        <li>
            <a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_cancel", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-close text-danger fa fa-2x\">
                ";
                    // line 48
                    echo "            </a>
        </li>
                    ";
                } elseif (($this->getAttribute(                // line 50
$context["entity"], "etat", array()) == 0)) {
                    echo " 
        <li>                           
            <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_publish", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-share text-success fa-2x\">
                ";
                    // line 54
                    echo "            </a>  
        </li>
        <li>
            <a href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_hide", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-ban text-warning fa-2x\">

               ";
                    // line 60
                    echo "            </a> 
        </li>
                    ";
                }
                // line 62
                echo "  
        <li>
            <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-edit text-info fa-2x\">
               ";
                // line 66
                echo "            </a>
        </li>
    </ul>\t\t\t\t\t

</td>
</tr>
<tr>
    <td rowspan=\"6\"><img src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
                echo "\"class=\"img-rounded img-responsive\" alt=\"entity.titre\"></td>    
    <th class=\"text-info\">";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
                echo "</th>
    <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
                echo "</td>    
</tr>
<tr>   
    <th class=\"text-info\">";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starts the"), "html", null, true);
                echo "</th>
    <td>";
                // line 79
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
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ends the"), "html", null, true);
                echo "</th>
    <td>";
                // line 83
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
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
                echo "</th>
    <td>GMT + ";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fuseauHoraire", array()), "html", null, true);
                echo "</td>
</tr>
<tr>    
    <th class=\"text-info\">";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address"), "html", null, true);
                echo "</th>
    <td>";
                // line 91
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
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
                echo "</th>
    <td>
                ";
                // line 96
                if (($this->getAttribute($context["entity"], "etat", array()) == 2)) {
                    echo "<b><p class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Public"), "html", null, true);
                    echo "</p></b>
                ";
                } elseif (($this->getAttribute(                // line 97
$context["entity"], "etat", array()) == 1)) {
                    echo "<b><p class=\"text-warning\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registred"), "html", null, true);
                    echo "</p><b>
                        ";
                } elseif (($this->getAttribute(                // line 98
$context["entity"], "etat", array()) == 0)) {
                    echo " <b><p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancelled"), "html", null, true);
                    echo "</p></b>
                        ";
                }
                // line 100
                echo "                </td>
                </tr>  
                </table>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                ";
        }
        // line 105
        echo "            ";
        
        $__internal_4d57cc77f16c152781c02bdf7d704ae64bb350777008ad40dcc5868b07ebbef7->leave($__internal_4d57cc77f16c152781c02bdf7d704ae64bb350777008ad40dcc5868b07ebbef7_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Events:admin_event_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 105,  313 => 104,  304 => 100,  297 => 98,  291 => 97,  285 => 96,  280 => 94,  268 => 91,  264 => 90,  258 => 87,  254 => 86,  242 => 83,  238 => 82,  226 => 79,  222 => 78,  216 => 75,  212 => 74,  208 => 73,  199 => 66,  195 => 64,  191 => 62,  186 => 60,  181 => 57,  176 => 54,  172 => 52,  167 => 50,  163 => 48,  159 => 46,  154 => 43,  150 => 41,  147 => 40,  145 => 39,  140 => 36,  136 => 34,  131 => 31,  127 => 29,  124 => 28,  122 => 27,  115 => 23,  111 => 22,  107 => 21,  103 => 20,  97 => 19,  93 => 17,  88 => 16,  82 => 14,  80 => 13,  73 => 10,  67 => 9,  57 => 7,  51 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
<i class=\"fa fa-list\"></i> {{ 'List'|trans }}
{% endblock operation %}
{% block body -%}
<h1 class=\"text-center text-primary\"><b>{{ 'Events List'|trans }}</b></h1>


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
            {% endblock %}", "OrionEventBundle:Admin_Events:admin_event_index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Events/admin_event_index.html.twig");
    }
}
