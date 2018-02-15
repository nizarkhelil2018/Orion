<?php

/* @OrionEvent/User_Owned_Events/user_owned_event_show.html.twig */
class __TwigTemplate_16ab4d1c2faf644f523f97ca80b64ec368653ca7a58f804d7b154066c643b723 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "@OrionEvent/User_Owned_Events/user_owned_event_show.html.twig", 1);
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
        $__internal_13dc1ad71a8adce5b371e12f075b4555fc64142dd251eff41c679086f55e93e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13dc1ad71a8adce5b371e12f075b4555fc64142dd251eff41c679086f55e93e5->enter($__internal_13dc1ad71a8adce5b371e12f075b4555fc64142dd251eff41c679086f55e93e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/User_Owned_Events/user_owned_event_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13dc1ad71a8adce5b371e12f075b4555fc64142dd251eff41c679086f55e93e5->leave($__internal_13dc1ad71a8adce5b371e12f075b4555fc64142dd251eff41c679086f55e93e5_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_16121b2b76489884ec646e58db2e3d0e81ad02141e4f01709a461a74adf2957a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16121b2b76489884ec646e58db2e3d0e81ad02141e4f01709a461a74adf2957a->enter($__internal_16121b2b76489884ec646e58db2e3d0e81ad02141e4f01709a461a74adf2957a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_16121b2b76489884ec646e58db2e3d0e81ad02141e4f01709a461a74adf2957a->leave($__internal_16121b2b76489884ec646e58db2e3d0e81ad02141e4f01709a461a74adf2957a_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_011f2b6b9b623af8cee6034572ff2aafbccc9795c97f43fefa1bd139e6c177c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011f2b6b9b623af8cee6034572ff2aafbccc9795c97f43fefa1bd139e6c177c4->enter($__internal_011f2b6b9b623af8cee6034572ff2aafbccc9795c97f43fefa1bd139e6c177c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-fw fa-desktop\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display"), "html", null, true);
        echo "
";
        
        $__internal_011f2b6b9b623af8cee6034572ff2aafbccc9795c97f43fefa1bd139e6c177c4->leave($__internal_011f2b6b9b623af8cee6034572ff2aafbccc9795c97f43fefa1bd139e6c177c4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fb67123b5ee67718ca97037d96e6d5b13f84c609de2c48108cb8bd659387400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb67123b5ee67718ca97037d96e6d5b13f84c609de2c48108cb8bd659387400->enter($__internal_4fb67123b5ee67718ca97037d96e6d5b13f84c609de2c48108cb8bd659387400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <th class=\"text-info col-sm-2\">Id</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            <td rowspan=\"10\"class=\"col-sm-3\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()))), "html", null, true);
        echo "\" class=\"img-responsive img-rounded\"></td>   
        </tr>


        <tr>
            <th class=\"text-info\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "html", null, true);
        echo "</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
            <td class=\"text-justify\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
            <td>
                ";
        // line 38
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 2)) {
            echo "<strong class=\"text-success str\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Public"), "html", null, true);
            echo "</strong>
                ";
        } elseif (($this->getAttribute(        // line 39
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 1)) {
            echo "<strong class=\"text-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registred"), "html", null, true);
            echo "</strong>
                ";
        } elseif (($this->getAttribute(        // line 40
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 0)) {
            echo " <strong class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancelled"), "html", null, true);
            echo "</strong>
                ";
        }
        // line 42
        echo "            </td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</th>
            <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "theme", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</th>
            <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
            <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "d/m/Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "H:i"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starting Schedule"), "html", null, true);
        echo "</th>
            <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array()), "d/m/y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array()), "H:i"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ending Schedule"), "html", null, true);
        echo "</th>
            <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "d/m/y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "H:i"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
        echo "</th>
            <td>GMT + ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fuseauHoraire", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address"), "html", null, true);
        echo "</th>
            <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ville", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codePostal", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pays", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>


<table class=\"table-responsive\" >

    <tbody align=\"right\">
    <th class=\"col-sm-3\">   
        <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"btn btn-default fa fa-wrench text-warning\"> ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "</button>
        </a>
    </th>
    
    
    <th class=\"text-danger btn-group-sm\">
        ";
        // line 87
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "

        <a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_search");
        echo "\" style=\"color: red\">

        </a>           
        ";
        // line 92
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </th>

    <th class=\"col-sm-3\">
    </th>
    <th class=\"col-sm-3 text-center\">
        <a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_all");
        echo "\">
            <button type=\"button\" class=\"btn btn-default fa fa-list\"> ";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All My Events"), "html", null, true);
        echo "</button>
        </a>

    </th>
    <th>
        <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_ajout", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                                            <button type=\"button\" class=\"btn btn-default fa fa-ticket\"> ";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a Ticket"), "html", null, true);
        echo "</button>
                                        </a> 
    </th>
    
</tbody>
</table>
<ul class=\"pager\">
    <li class=\"previous\"><a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_show", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) - 1))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous Event"), "html", null, true);
        echo "</a></li>
    <li class=\"next\"><a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_show", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) + 1))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next Event"), "html", null, true);
        echo "</a></li>
</ul>

    
";
        
        $__internal_4fb67123b5ee67718ca97037d96e6d5b13f84c609de2c48108cb8bd659387400->leave($__internal_4fb67123b5ee67718ca97037d96e6d5b13f84c609de2c48108cb8bd659387400_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/User_Owned_Events/user_owned_event_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 113,  306 => 112,  296 => 105,  292 => 104,  284 => 99,  280 => 98,  271 => 92,  265 => 89,  260 => 87,  251 => 81,  247 => 80,  228 => 70,  224 => 69,  218 => 66,  214 => 65,  204 => 62,  200 => 61,  190 => 58,  186 => 57,  176 => 54,  172 => 53,  166 => 50,  162 => 49,  156 => 46,  152 => 45,  147 => 42,  140 => 40,  134 => 39,  128 => 38,  123 => 36,  117 => 33,  113 => 32,  107 => 29,  103 => 28,  95 => 23,  91 => 22,  79 => 13,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
            <th class=\"text-info col-sm-2\">Id</th>
            <td>{{ entity.id }}</td>
            <td rowspan=\"10\"class=\"col-sm-3\"><img src=\"{{ asset('uploads/' ~ entity.path) }}\" class=\"img-responsive img-rounded\"></td>   
        </tr>


        <tr>
            <th class=\"text-info\">{{ 'Title'|trans }}</th>
            <td>{{ entity.titre }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Description'|trans }}</th>
            <td class=\"text-justify\">{{ entity.description }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'State'|trans }}</th>
            <td>
                {% if entity.etat == 2 %}<strong class=\"text-success str\">{{ 'Public'|trans }}</strong>
                {% elseif entity.etat == 1 %}<strong class=\"text-primary\">{{ 'Registred'|trans }}</strong>
                {% elseif entity.etat ==0 %} <strong class=\"text-danger\">{{ 'Cancelled'|trans }}</strong>
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
            <th class=\"text-info\">{{ 'Creation date'|trans }}</th>
            <td>{{ entity.dateCreation|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateCreation|date('H:i') }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Starting Schedule'|trans }}</th>
            <td>{{ entity.horaireDebut|date('d/m/y') }} {{ 'at'|trans }} {{ entity.horaireDebut|date('H:i') }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Ending Schedule'|trans }}</th>
            <td>{{ entity.HoraireFin|date('d/m/y') }} {{ 'at'|trans }} {{ entity.HoraireFin|date('H:i') }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Time zone'|trans }}</th>
            <td>GMT + {{ entity.fuseauHoraire }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Address'|trans }}</th>
            <td>{{ entity.adresse }}, {{ entity.ville }} {{ entity.codePostal }}, {{ entity.pays }}</td>
        </tr>
    </tbody>
</table>


<table class=\"table-responsive\" >

    <tbody align=\"right\">
    <th class=\"col-sm-3\">   
        <a href=\"{{ path('user_owned_event_edit', { 'id': entity.id }) }}\">
            <button type=\"button\" class=\"btn btn-default fa fa-wrench text-warning\"> {{ 'Edit'|trans }}</button>
        </a>
    </th>
    
    
    <th class=\"text-danger btn-group-sm\">
        {{ form_start(delete_form) }}

        <a href=\"{{ path('user_owned_event_search') }}\" style=\"color: red\">

        </a>           
        {{ form_end(delete_form) }}
    </th>

    <th class=\"col-sm-3\">
    </th>
    <th class=\"col-sm-3 text-center\">
        <a href=\"{{ path('user_owned_events_all') }}\">
            <button type=\"button\" class=\"btn btn-default fa fa-list\"> {{ 'All My Events'|trans }}</button>
        </a>

    </th>
    <th>
        <a href=\"{{ path('user_billet_ajout', { 'id': entity.id })}}\">
                                            <button type=\"button\" class=\"btn btn-default fa fa-ticket\"> {{ 'Create a Ticket'|trans }}</button>
                                        </a> 
    </th>
    
</tbody>
</table>
<ul class=\"pager\">
    <li class=\"previous\"><a href=\"{{ path('user_owned_event_show', { 'id': entity.id - 1 }) }}\">{{ 'Previous Event'|trans }}</a></li>
    <li class=\"next\"><a href=\"{{ path('user_owned_event_show', { 'id': entity.id + 1 }) }}\">{{ 'Next Event'|trans }}</a></li>
</ul>

    
{% endblock %}
", "@OrionEvent/User_Owned_Events/user_owned_event_show.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\User_Owned_Events\\user_owned_event_show.html.twig");
    }
}
