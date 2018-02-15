<?php

/* OrionEventBundle:User_Owned_Events:user_owned_event_edit_State.html.twig */
class __TwigTemplate_f39161228046da1ce7fa249c1aff4fc84783e99e8d2c89f288fd01d221a459d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "OrionEventBundle:User_Owned_Events:user_owned_event_edit_State.html.twig", 1);
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
        $__internal_529e2a5ca110c7f9838bbf76bdb06c9ea464499ffc75d7e8914d49f46d0f68fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529e2a5ca110c7f9838bbf76bdb06c9ea464499ffc75d7e8914d49f46d0f68fc->enter($__internal_529e2a5ca110c7f9838bbf76bdb06c9ea464499ffc75d7e8914d49f46d0f68fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Owned_Events:user_owned_event_edit_State.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529e2a5ca110c7f9838bbf76bdb06c9ea464499ffc75d7e8914d49f46d0f68fc->leave($__internal_529e2a5ca110c7f9838bbf76bdb06c9ea464499ffc75d7e8914d49f46d0f68fc_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_557bce4ce4ea4aa86676c2f7a1d2eb5db9018eb14074e54766ec0e2e47149ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557bce4ce4ea4aa86676c2f7a1d2eb5db9018eb14074e54766ec0e2e47149ca2->enter($__internal_557bce4ce4ea4aa86676c2f7a1d2eb5db9018eb14074e54766ec0e2e47149ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_557bce4ce4ea4aa86676c2f7a1d2eb5db9018eb14074e54766ec0e2e47149ca2->leave($__internal_557bce4ce4ea4aa86676c2f7a1d2eb5db9018eb14074e54766ec0e2e47149ca2_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_aa08954e866b716e74269876206a2c0ec3ac957f9f66c9ccac9aa331183030a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa08954e866b716e74269876206a2c0ec3ac957f9f66c9ccac9aa331183030a2->enter($__internal_aa08954e866b716e74269876206a2c0ec3ac957f9f66c9ccac9aa331183030a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "<i class=\"fa fa-dashboard\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State Edit"), "html", null, true);
        echo "
";
        
        $__internal_aa08954e866b716e74269876206a2c0ec3ac957f9f66c9ccac9aa331183030a2->leave($__internal_aa08954e866b716e74269876206a2c0ec3ac957f9f66c9ccac9aa331183030a2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b1209d178bf5336a9d469a4630cd684bdb92c72997788330b3929fa32698d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1209d178bf5336a9d469a4630cd684bdb92c72997788330b3929fa32698d46->enter($__internal_6b1209d178bf5336a9d469a4630cd684bdb92c72997788330b3929fa32698d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div >

    <h1>
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State Edit"), "html", null, true);
        echo " <p class=\"text-center\" style=\"color: blue\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</p>
    </h1>

</div>
<table class=\"table table-condensed\">

    <tbody align=\"left\">
        <tr>
            <th class=\"text-info col-sm-2\">Id</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>

        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Titles"), "html", null, true);
        echo "</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
            <td class=\"text-justify\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
            <td>
                    ";
        // line 36
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 2)) {
            echo "<p class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Public"), "html", null, true);
            echo "</p>
                    ";
        } elseif (($this->getAttribute(        // line 37
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 1)) {
            echo "<p class=\"text-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registred"), "html", null, true);
            echo "</p>
                    ";
        } elseif (($this->getAttribute(        // line 38
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 0)) {
            echo " <p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancelled"), "html", null, true);
            echo "</p>
                    ";
        }
        // line 40
        echo "            </td>
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
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creaton date"), "html", null, true);
        echo "</th>
            <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starting Schedule"), "html", null, true);
        echo "</th>
            <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ending Schedule"), "html", null, true);
        echo "</th>
            <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
        echo "</th>
            <td>GMT + ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fuseauHoraire", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>


<table class=\"table-responsive\" >

    <tbody align=\"right\">

";
        // line 74
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 2)) {
            echo "<p class=\"text-success\">
    <th>
        <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_hide", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
            <button type=\"button\" class=\"btn btn-warning\">";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hide"), "html", null, true);
            echo "</button>
        </a> 
    </th>
    <th>
        <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_cancel", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
            <button type=\"button\" class=\"btn btn-danger\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
        </a>
    </th>
";
        } elseif (($this->getAttribute(        // line 85
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 1)) {
            echo "<p class=\"text-primary\">
    <th>
        <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_publish", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" >                
            <button type=\"button\" class=\"btn btn-success\">";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Publish"), "html", null, true);
            echo "</button>
        </a>        
    </th>
    <th>
        <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_cancel", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
            <button type=\"button\" class=\"btn btn-danger\">";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
        </a>
    </th>
";
        } elseif (($this->getAttribute(        // line 96
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 0)) {
            echo " <p class=\"text-danger\">
    <th>
        <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_publish", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" >                
            <button type=\"button\" class=\"btn btn-success\">";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Publish"), "html", null, true);
            echo "</button>
        </a>        
    </th>
    <th>
        <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_hide", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
            <button type=\"button\" class=\"btn btn-warning\">";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate"), "html", null, true);
            echo "</button>
        </a> 
    </th>
";
        }
        // line 108
        echo "    <th> 
        <a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"btn btn-default\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "</button>
        </a>
    </th>
    <th class=\"col-sm-3 text-center\">
        <a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_search");
        echo "\">
            <button type=\"button\" class=\"btn btn-info\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All My Events"), "html", null, true);
        echo "</button>
        </a>
    </th>

</tbody>
</table>
";
        
        $__internal_6b1209d178bf5336a9d469a4630cd684bdb92c72997788330b3929fa32698d46->leave($__internal_6b1209d178bf5336a9d469a4630cd684bdb92c72997788330b3929fa32698d46_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Owned_Events:user_owned_event_edit_State.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 115,  308 => 114,  301 => 110,  297 => 109,  294 => 108,  287 => 104,  283 => 103,  276 => 99,  272 => 98,  267 => 96,  261 => 93,  257 => 92,  250 => 88,  246 => 87,  241 => 85,  235 => 82,  231 => 81,  224 => 77,  220 => 76,  215 => 74,  202 => 64,  198 => 63,  192 => 60,  188 => 59,  182 => 56,  178 => 55,  172 => 52,  168 => 51,  162 => 48,  158 => 47,  152 => 44,  148 => 43,  143 => 40,  136 => 38,  130 => 37,  124 => 36,  119 => 34,  113 => 31,  109 => 30,  103 => 27,  99 => 26,  92 => 22,  78 => 13,  73 => 10,  67 => 8,  57 => 6,  51 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
<i class=\"fa fa-dashboard\"></i> {{ 'State Edit'|trans }}
{% endblock operation %}
{% block body -%}  

<div >

    <h1>
        {{ 'State Edit'|trans }} <p class=\"text-center\" style=\"color: blue\">{{entity.titre}}</p>
    </h1>

</div>
<table class=\"table table-condensed\">

    <tbody align=\"left\">
        <tr>
            <th class=\"text-info col-sm-2\">Id</th>
            <td>{{ entity.id }}</td>

        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Titles'|trans }}</th>
            <td>{{ entity.titre }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Description'|trans }}</th>
            <td class=\"text-justify\">{{ entity.description }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'State'|trans }}</th>
            <td>
                    {% if entity.etat == 2 %}<p class=\"text-success\">{{ 'Public'|trans }}</p>
                    {% elseif entity.etat == 1 %}<p class=\"text-primary\">{{ 'Registred'|trans }}</p>
                    {% elseif entity.etat ==0 %} <p class=\"text-danger\">{{ 'Cancelled'|trans }}</p>
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
            <th class=\"text-info\">{{ 'Creaton date'|trans }}</th>
            <td>{{ entity.dateCreation|date('Y-m-d H:i:s') }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Starting Schedule'|trans }}</th>
            <td>{{ entity.horaireDebut|date('Y-m-d H:i:s') }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Ending Schedule'|trans }}</th>
            <td>{{ entity.HoraireFin|date('Y-m-d H:i:s') }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Time zone'|trans }}</th>
            <td>GMT + {{ entity.fuseauHoraire }}</td>
        </tr>
    </tbody>
</table>


<table class=\"table-responsive\" >

    <tbody align=\"right\">

{% if entity.etat == 2 %}<p class=\"text-success\">
    <th>
        <a href=\"{{ path('user_owned_event_hide', { 'id': entity.id }) }}\">
            <button type=\"button\" class=\"btn btn-warning\">{{ 'Hide'|trans }}</button>
        </a> 
    </th>
    <th>
        <a href=\"{{ path('user_owned_event_cancel', { 'id': entity.id }) }}\">
            <button type=\"button\" class=\"btn btn-danger\">{{ 'Cancel'|trans }}</button>
        </a>
    </th>
{% elseif entity.etat == 1 %}<p class=\"text-primary\">
    <th>
        <a href=\"{{ path('user_owned_event_publish', { 'id': entity.id }) }}\" >                
            <button type=\"button\" class=\"btn btn-success\">{{ 'Publish'|trans }}</button>
        </a>        
    </th>
    <th>
        <a href=\"{{ path('user_owned_event_cancel', { 'id': entity.id }) }}\">
            <button type=\"button\" class=\"btn btn-danger\">{{ 'Cancel'|trans }}</button>
        </a>
    </th>
{% elseif entity.etat ==0 %} <p class=\"text-danger\">
    <th>
        <a href=\"{{ path('user_owned_event_publish', { 'id': entity.id }) }}\" >                
            <button type=\"button\" class=\"btn btn-success\">{{ 'Publish'|trans }}</button>
        </a>        
    </th>
    <th>
        <a href=\"{{ path('user_owned_event_hide', { 'id': entity.id }) }}\">
            <button type=\"button\" class=\"btn btn-warning\">{{ 'Activate'|trans }}</button>
        </a> 
    </th>
{% endif %}
    <th> 
        <a href=\"{{ path('user_owned_event_edit', { 'id': entity.id }) }}\">
            <button type=\"button\" class=\"btn btn-default\">{{ 'Edit'|trans }}</button>
        </a>
    </th>
    <th class=\"col-sm-3 text-center\">
        <a href=\"{{ path('user_owned_event_search') }}\">
            <button type=\"button\" class=\"btn btn-info\">{{ 'All My Events'|trans }}</button>
        </a>
    </th>

</tbody>
</table>
{% endblock %}
", "OrionEventBundle:User_Owned_Events:user_owned_event_edit_State.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Owned_Events/user_owned_event_edit_State.html.twig");
    }
}
