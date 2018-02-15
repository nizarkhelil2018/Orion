<?php

/* OrionEventBundle:User_Owned_Events:user_owned_events_index.html.twig */
class __TwigTemplate_d2c17c47c15255d17eb31887ebb460246f36aca695fbb195e07a5a5056ce4126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "OrionEventBundle:User_Owned_Events:user_owned_events_index.html.twig", 1);
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
        $__internal_ed0f76d545e7086f26b57fceb1b53b8cf17830b8727273fd100a4fd4792968a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0f76d545e7086f26b57fceb1b53b8cf17830b8727273fd100a4fd4792968a3->enter($__internal_ed0f76d545e7086f26b57fceb1b53b8cf17830b8727273fd100a4fd4792968a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Owned_Events:user_owned_events_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed0f76d545e7086f26b57fceb1b53b8cf17830b8727273fd100a4fd4792968a3->leave($__internal_ed0f76d545e7086f26b57fceb1b53b8cf17830b8727273fd100a4fd4792968a3_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_4d8add3d1acc649da0adf75b0a2a6d0e70bd784eae4162913067508c6c09b420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8add3d1acc649da0adf75b0a2a6d0e70bd784eae4162913067508c6c09b420->enter($__internal_4d8add3d1acc649da0adf75b0a2a6d0e70bd784eae4162913067508c6c09b420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_4d8add3d1acc649da0adf75b0a2a6d0e70bd784eae4162913067508c6c09b420->leave($__internal_4d8add3d1acc649da0adf75b0a2a6d0e70bd784eae4162913067508c6c09b420_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_f10eb06c7b769ce252c39e80ab510a70470ec5919b150c2add3dd7fa884c97df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10eb06c7b769ce252c39e80ab510a70470ec5919b150c2add3dd7fa884c97df->enter($__internal_f10eb06c7b769ce252c39e80ab510a70470ec5919b150c2add3dd7fa884c97df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_f10eb06c7b769ce252c39e80ab510a70470ec5919b150c2add3dd7fa884c97df->leave($__internal_f10eb06c7b769ce252c39e80ab510a70470ec5919b150c2add3dd7fa884c97df_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3fe2d948593eeacc7870412da6ac68acdfdd959b08e8e060cf9ca8618e7b524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fe2d948593eeacc7870412da6ac68acdfdd959b08e8e060cf9ca8618e7b524->enter($__internal_b3fe2d948593eeacc7870412da6ac68acdfdd959b08e8e060cf9ca8618e7b524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h1 class=\"text-center text-primary\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events List"), "html", null, true);
        echo "</b></h1>
            ";
        // line 11
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 12
            echo "<div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Events Found"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 14
            echo "<table class=\"table table-bordered\">
    <thead>
        <tr class=\"info text-muted\">
            <th>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "html", null, true);
            echo "</th>
            <th>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
            echo "</th>
            <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
            echo "</th>
            <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
            echo "</th>
            <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
            echo "</th>
            <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starting Schedule"), "html", null, true);
            echo "</th>
            <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ending Schedule"), "html", null, true);
            echo "</th>
            <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
            echo "</th>
            <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address"), "html", null, true);
            echo "</th>
            <th>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
            echo "</th>
        </tr>
    </thead>

    <tbody>

        
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 34
                echo "        <tr>
            <td><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
                echo "</b></a></td>
            <td class=\"text-justify\">";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
                echo "</td>

            <td>
                <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_edit_State", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                            ";
                // line 40
                if (($this->getAttribute($context["entity"], "etat", array()) == 2)) {
                    echo "<b><p class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Public"), "html", null, true);
                    echo "</p></b>
                            <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_hide", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"text-warning fa fa-ban fa-2x\">
                        ";
                    // line 43
                    echo "                    </a> </br>
                    <a href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_cancel", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"text-danger fa fa-close fa-2x\">
                        ";
                    // line 46
                    echo "                    </a>
                            ";
                } elseif (($this->getAttribute(                // line 47
$context["entity"], "etat", array()) == 1)) {
                    echo "<b><p class=\"text-warning\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registred"), "html", null, true);
                    echo "</p><b>
                                    <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_publish", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"text-success fa fa-share fa-2x\">
                                ";
                    // line 50
                    echo "                            </a></br>
                            <a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_cancel", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"text-danger fa fa-close fa-2x\">
                                ";
                    // line 53
                    echo "                            </a>
                                    ";
                } elseif (($this->getAttribute(                // line 54
$context["entity"], "etat", array()) == 0)) {
                    echo " <b><p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancelled"), "html", null, true);
                    echo "</p>
                                        <!-- <a href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_publish", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"button\" class=\"btn-xs btn-info\">Publier</button>
                                        </a></br>

                                        <a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_hide", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                            <button type=\"button\" class=\"btn-xs btn-warning\">Dépublier</button></br>
                                        </a> -->
                                    ";
                }
                // line 63
                echo "                                        
                                <a>
                                    </td>
                                    <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "theme", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 68
                if ($this->getAttribute($context["entity"], "horaireDebut", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "d/m/Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "H:i"), "html", null, true);
                }
                echo "</td>
                                    <td>";
                // line 69
                if ($this->getAttribute($context["entity"], "HoraireFin", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "HoraireFin", array()), "d/m/Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "HoraireFin", array()), "H:i"), "html", null, true);
                }
                echo "</td>
                                    <td>GMT + ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fuseauHoraire", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 71
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
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"text-primary fa fa-desktop fa-2x\">
                                            ";
                // line 75
                echo "                                        </a></br>

                                        <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"text-warning fa fa-edit fa-2x\">
                                            ";
                // line 79
                echo "                                        </a></br> 
                                        ";
                // line 80
                if (($this->getAttribute($context["entity"], "etat", array()) != 0)) {
                    // line 81
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_ajout", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-ticket fa-2x text-success\">
                                           ";
                    // line 83
                    echo "                                        </a> </br>
                                        <a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_par_event", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn-group fa fa-list fa-2x\">
                                            ";
                    // line 86
                    echo "                                        </a></br>
                                        <a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_booking_list", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-2x fa-shopping-cart text-purple\">
                                           ";
                    // line 89
                    echo "                                        </a>
                                        ";
                }
                // line 91
                echo "                                    </td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                    ";
        }
        // line 95
        echo "                                    </tbody>
                                    </table>                                
                                ";
        
        $__internal_b3fe2d948593eeacc7870412da6ac68acdfdd959b08e8e060cf9ca8618e7b524->leave($__internal_b3fe2d948593eeacc7870412da6ac68acdfdd959b08e8e060cf9ca8618e7b524_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Owned_Events:user_owned_events_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 95,  316 => 94,  308 => 91,  304 => 89,  300 => 87,  297 => 86,  293 => 84,  290 => 83,  285 => 81,  283 => 80,  280 => 79,  276 => 77,  272 => 75,  268 => 73,  257 => 71,  253 => 70,  243 => 69,  233 => 68,  229 => 67,  225 => 66,  220 => 63,  213 => 59,  206 => 55,  200 => 54,  197 => 53,  193 => 51,  190 => 50,  186 => 48,  180 => 47,  177 => 46,  173 => 44,  170 => 43,  166 => 41,  160 => 40,  156 => 39,  150 => 36,  144 => 35,  141 => 34,  137 => 33,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  111 => 22,  107 => 21,  103 => 20,  99 => 19,  95 => 18,  91 => 17,  86 => 14,  80 => 12,  78 => 11,  73 => 10,  67 => 9,  57 => 7,  51 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
<h1 class=\"text-center text-primary\"><b>{{ 'Events List'|trans }}</b></h1>
            {% if entities is empty %}
<div class=\"text-danger text-center\">{{ 'No Events Found'|trans }}</div>
    {% else %}
<table class=\"table table-bordered\">
    <thead>
        <tr class=\"info text-muted\">
            <th>{{ 'Title'|trans }}</th>
            <th>{{ 'Description'|trans }}</th>
            <th>{{ 'State'|trans }}</th>
            <th>{{ 'Theme'|trans }}</th>
            <th>{{ 'Type'|trans }}</th>
            <th>{{ 'Starting Schedule'|trans }}</th>
            <th>{{ 'Ending Schedule'|trans }}</th>
            <th>{{ 'Time zone'|trans }}</th>
            <th>{{ 'Address'|trans }}</th>
            <th>{{ 'Action'|trans }}</th>
        </tr>
    </thead>

    <tbody>

        
            {% for entity in entities %}
        <tr>
            <td><a href=\"{{ path('user_owned_event_show', { 'id': entity.id }) }}\"><b>{{ entity.titre }}</b></a></td>
            <td class=\"text-justify\">{{ entity.description }}</td>

            <td>
                <a href=\"{{ path('user_owned_event_edit_State', { 'id': entity.id }) }}\">
                            {% if entity.etat == 2 %}<b><p class=\"text-success\">{{ 'Public'|trans }}</p></b>
                            <a href=\"{{ path('user_owned_event_hide', { 'id': entity.id }) }}\" class=\"text-warning fa fa-ban fa-2x\">
                        {#<button type=\"button\" class=\"btn-xs text-warning fa fa-ban\"> {{ 'Hide'|trans }}</button>#}
                    </a> </br>
                    <a href=\"{{ path('user_owned_event_cancel', { 'id': entity.id }) }}\" class=\"text-danger fa fa-close fa-2x\">
                        {#<button type=\"button\" class=\"btn-xs text-danger fa fa-close\"> {{ 'Cancel'|trans }}</button>#}
                    </a>
                            {% elseif entity.etat == 1 %}<b><p class=\"text-warning\">{{ 'Registred'|trans }}</p><b>
                                    <a href=\"{{ path('user_owned_event_publish', { 'id': entity.id }) }}\" class=\"text-success fa fa-share fa-2x\">
                                {#<button type=\"button\" class=\"btn-xs text-success fa fa-share\"> {{ 'Publish'|trans }}</button>#}
                            </a></br>
                            <a href=\"{{ path('user_owned_event_cancel', { 'id': entity.id }) }}\" class=\"text-danger fa fa-close fa-2x\">
                                {#<button type=\"button\" class=\"btn-xs text-danger fa fa-close\"> {{ 'Cancel'|trans }}</button>#}
                            </a>
                                    {% elseif entity.etat ==0 %} <b><p class=\"text-danger\">{{ 'Cancelled'|trans }}</p>
                                        <!-- <a href=\"{{ path('user_owned_event_publish', { 'id': entity.id }) }}\">
                                            <button type=\"button\" class=\"btn-xs btn-info\">Publier</button>
                                        </a></br>

                                        <a href=\"{{ path('user_owned_event_hide', { 'id': entity.id }) }}\">
                                            <button type=\"button\" class=\"btn-xs btn-warning\">Dépublier</button></br>
                                        </a> -->
                                    {% endif %}
                                        
                                <a>
                                    </td>
                                    <td>{{ entity.theme }}</td>
                                    <td>{{ entity.type }}</td>
                                    <td>{% if entity.horaireDebut %}{{ entity.horaireDebut|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.horaireDebut|date('H:i') }}{% endif %}</td>
                                    <td>{% if entity.HoraireFin %}{{ entity.HoraireFin|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.HoraireFin|date('H:i') }}{% endif %}</td>
                                    <td>GMT + {{ entity.fuseauHoraire }}</td>
                                    <td>{{ entity.adresse }}, {{ entity.ville }} {{ entity.codePostal }}, {{ entity.pays }}</td>
                                    <td>               
                                        <a href=\"{{ path('user_owned_event_show', { 'id': entity.id }) }}\" class=\"text-primary fa fa-desktop fa-2x\">
                                            {#<button type=\"button\" class=\"btn-xs btn-default btn-block text-left text-primary fa fa-desktop\"> {{ 'Display'|trans }}</button>#}
                                        </a></br>

                                        <a href=\"{{ path('user_owned_event_edit', { 'id': entity.id }) }}\" class=\"text-warning fa fa-edit fa-2x\">
                                            {#<button type=\"button\" class=\"btn-xs btn-default btn-block text-left text-navy fa fa-edit\"> {{ 'Edit'|trans }}</button>#}
                                        </a></br> 
                                        {% if entity.etat !=0 %}
                                        <a href=\"{{ path('user_billet_ajout', { 'id': entity.id })}}\" class=\"fa fa-ticket fa-2x text-success\">
                                           {# <button type=\"button\" class=\"btn-xs btn-default btn-block text-left btn-group fa fa-ticket\"> {{ 'Create a Ticket'|trans }}</button>#}
                                        </a> </br>
                                        <a href=\"{{ path('user_billet_par_event', { 'id': entity.id })}}\" class=\"btn-group fa fa-list fa-2x\">
                                            {#<button type=\"button\" class=\"btn-xs btn-default btn-block text-left btn-group fa fa-list\"> {{ 'All Tickets'|trans }}</button>#}
                                        </a></br>
                                        <a href=\"{{ path('user_owned_event_booking_list', { 'id': entity.id })}}\" class=\"fa fa-2x fa-shopping-cart text-purple\">
                                           {# <button type=\"button\" class=\"btn-xs btn-default btn-block text-left btn-group fa fa-list\"> Liste des réservation</button>#}
                                        </a>
                                        {% endif %}
                                    </td>
                                    </tr>
                                    {% endfor %}
                                    {% endif %}
                                    </tbody>
                                    </table>                                
                                {% endblock %}
", "OrionEventBundle:User_Owned_Events:user_owned_events_index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Owned_Events/user_owned_events_index.html.twig");
    }
}
