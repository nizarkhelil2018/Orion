<?php

/* @OrionEvent/User_Billet/user_billet_show.html.twig */
class __TwigTemplate_518a40ee665b8d2a28b2288b076130c0f97ce96c50bc7be8e8c6d251531d755b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "@OrionEvent/User_Billet/user_billet_show.html.twig", 1);
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
        $__internal_90c53bab59f87f07183f64ea374354cce10bf74a873c0b69f2b74dd839c832e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c53bab59f87f07183f64ea374354cce10bf74a873c0b69f2b74dd839c832e0->enter($__internal_90c53bab59f87f07183f64ea374354cce10bf74a873c0b69f2b74dd839c832e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/User_Billet/user_billet_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90c53bab59f87f07183f64ea374354cce10bf74a873c0b69f2b74dd839c832e0->leave($__internal_90c53bab59f87f07183f64ea374354cce10bf74a873c0b69f2b74dd839c832e0_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_b7f3a3d13741bb68e56d146304e362f3adc96a9cef4d11f529d26ff713497a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f3a3d13741bb68e56d146304e362f3adc96a9cef4d11f529d26ff713497a39->enter($__internal_b7f3a3d13741bb68e56d146304e362f3adc96a9cef4d11f529d26ff713497a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_b7f3a3d13741bb68e56d146304e362f3adc96a9cef4d11f529d26ff713497a39->leave($__internal_b7f3a3d13741bb68e56d146304e362f3adc96a9cef4d11f529d26ff713497a39_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_ab7d680ff1261edfb68d91c53f79b2e43077388cabc6f7e30fed0e161c88d8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7d680ff1261edfb68d91c53f79b2e43077388cabc6f7e30fed0e161c88d8c4->enter($__internal_ab7d680ff1261edfb68d91c53f79b2e43077388cabc6f7e30fed0e161c88d8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-fw fa-desktop\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display"), "html", null, true);
        echo "
";
        
        $__internal_ab7d680ff1261edfb68d91c53f79b2e43077388cabc6f7e30fed0e161c88d8c4->leave($__internal_ab7d680ff1261edfb68d91c53f79b2e43077388cabc6f7e30fed0e161c88d8c4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d519c25ea86a91e44706c685472cc9a6ed60a662c758d3761f058c7ed93d860f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d519c25ea86a91e44706c685472cc9a6ed60a662c758d3761f058c7ed93d860f->enter($__internal_d519c25ea86a91e44706c685472cc9a6ed60a662c758d3761f058c7ed93d860f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div >
    <h2 class=\"text-center\" style=\"color: blue\"> ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "evenement", array()), "html", null, true);
        echo "</h2></Br>
    <h4 class=\"text-center text-aqua \" ><b class=\"text-bold\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket"), "html", null, true);
        echo ": </b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo "</h4>
</div>
<table class=\"table table-condensed\">

    <tbody align=\"left\">

        <tr>
            <th class=\"text-info\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo "</td>
        </tr>
        

        <tr>
            <th class=\"text-info\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price"), "html", null, true);
        echo "</th>
            <td>
            ";
        // line 27
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()) == 1)) {
            echo "<p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
            echo " <b>€</b></p>                                   
            ";
        } else {
            // line 28
            echo "<p class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free"), "html", null, true);
            echo "</p>                                    
            ";
        }
        // line 29
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number"), "html", null, true);
        echo "</th>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Waiting List"), "html", null, true);
        echo "</th>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "attente", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <th class=\"text-info\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "d/m/Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "H:i"), "html", null, true);
        echo "</td>
        </tr>

    </tbody>
</table>


<table class=\"table-responsive\" >

    <tbody align=\"right\">
    <th class=\"col-sm-3\">   
        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"fa fa-edit text-warning fa-2x\">
            ";
        // line 55
        echo "        </a>
    </th>
    <th class=\"col-sm-3\">
        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_booking_list", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "evenement", array()), "id", array()))), "html", null, true);
        echo "\" class=\"fa fa-2x fa-shopping-cart text-purple\">
                                           ";
        // line 60
        echo "                                        </a>
    </th>
    <th class=\"text-danger\">
        ";
        // line 63
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "

        <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_search");
        echo "\" style=\"color: red\">

        </a>           
        ";
        // line 68
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </th>

    <th class=\"col-sm-3\">
    </th>
    
   
</tbody>
</table>
<ul class=\"pager\">
    <li class=\"previous\"><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_show", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) - 1))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next Ticket"), "html", null, true);
        echo "</a></li>
   
    <li class=\"midtext\">
        <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_search");
        echo "\">
            <b> ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Tickets"), "html", null, true);
        echo " </b>
        </a>
    </li>
    
    
    
    <li class=\"next\"><a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_show", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) + 1))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous Ticket"), "html", null, true);
        echo "</a></li>
</ul>

";
        
        $__internal_d519c25ea86a91e44706c685472cc9a6ed60a662c758d3761f058c7ed93d860f->leave($__internal_d519c25ea86a91e44706c685472cc9a6ed60a662c758d3761f058c7ed93d860f_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/User_Billet/user_billet_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 88,  227 => 82,  223 => 81,  215 => 78,  202 => 68,  196 => 65,  191 => 63,  186 => 60,  182 => 58,  177 => 55,  173 => 53,  155 => 42,  151 => 41,  144 => 37,  140 => 36,  134 => 33,  130 => 32,  125 => 29,  119 => 28,  112 => 27,  107 => 25,  99 => 20,  95 => 19,  83 => 12,  77 => 11,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    {{ 'Tickets Management'|trans }}
{% endblock module %}
{% block operation %}
<i class=\"fa fa-fw fa-desktop\"></i> {{ 'Display'|trans }}
{% endblock operation %}
{% block body -%}
<div >
    <h2 class=\"text-center\" style=\"color: blue\"> {{ 'Event'|trans }} : {{entity.evenement}}</h2></Br>
    <h4 class=\"text-center text-aqua \" ><b class=\"text-bold\">{{ 'Ticket'|trans }}: </b>{{entity.libelle}}</h4>
</div>
<table class=\"table table-condensed\">

    <tbody align=\"left\">

        <tr>
            <th class=\"text-info\">{{ 'Wording'|trans }}</th>
            <td>{{ entity.libelle }}</td>
        </tr>
        

        <tr>
            <th class=\"text-info\">{{ 'Price'|trans }}</th>
            <td>
            {% if entity.type == 1 %}<p class=\"text-danger\">{{ entity.prix }} <b>€</b></p>                                   
            {% else %}<p class=\"text-success\">{{ 'Free'|trans }}</p>                                    
            {% endif %}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Number'|trans }}</th>
            <td>{{ entity.nombre }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Waiting List'|trans }}</th>
            <td>{{ entity.attente }}</td>
        </tr>

        <tr>
            <th class=\"text-info\">{{ 'Creation date'|trans }}</th>
            <td>{{ entity.dateCreation|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateCreation|date('H:i') }}</td>
        </tr>

    </tbody>
</table>


<table class=\"table-responsive\" >

    <tbody align=\"right\">
    <th class=\"col-sm-3\">   
        <a href=\"{{ path('user_billet_edit', { 'id': entity.id }) }}\" class=\"fa fa-edit text-warning fa-2x\">
            {#<button type=\"button\" class=\"btn btn-warning\">{{ 'Edit'|trans }}</button>#}
        </a>
    </th>
    <th class=\"col-sm-3\">
        <a href=\"{{ path('user_owned_event_booking_list', { 'id': entity.evenement.id })}}\" class=\"fa fa-2x fa-shopping-cart text-purple\">
                                           {# <button type=\"button\" class=\"btn-xs btn-default btn-block text-left btn-group fa fa-list\"> Liste des réservation</button>#}
                                        </a>
    </th>
    <th class=\"text-danger\">
        {{ form_start(delete_form) }}

        <a href=\"{{ path('user_billet_search') }}\" style=\"color: red\">

        </a>           
        {{ form_end(delete_form) }}
    </th>

    <th class=\"col-sm-3\">
    </th>
    
   
</tbody>
</table>
<ul class=\"pager\">
    <li class=\"previous\"><a href=\"{{ path('user_billet_show', { 'id': entity.id - 1 }) }}\">{{ 'Next Ticket'|trans }}</a></li>
   
    <li class=\"midtext\">
        <a href=\"{{ path('user_billet_search') }}\">
            <b> {{ 'All Tickets'|trans }} </b>
        </a>
    </li>
    
    
    
    <li class=\"next\"><a href=\"{{ path('user_billet_show', { 'id': entity.id + 1 }) }}\">{{ 'Previous Ticket'|trans }}</a></li>
</ul>

{% endblock %}
", "@OrionEvent/User_Billet/user_billet_show.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\User_Billet\\user_billet_show.html.twig");
    }
}
