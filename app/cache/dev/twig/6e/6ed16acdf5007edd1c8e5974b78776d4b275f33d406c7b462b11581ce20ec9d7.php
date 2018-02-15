<?php

/* @OrionEvent/Admin_Events/admin_event_edit.html.twig */
class __TwigTemplate_59bfc3b386d0c171534269415550583a38c0d50859931f67ec9dd5f3f9c67582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Events/admin_event_edit.html.twig", 1);
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
        $__internal_27a94c0542ac12b9b788490262231269b6acf400be0733a1ccce76ca2507e55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a94c0542ac12b9b788490262231269b6acf400be0733a1ccce76ca2507e55b->enter($__internal_27a94c0542ac12b9b788490262231269b6acf400be0733a1ccce76ca2507e55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Events/admin_event_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27a94c0542ac12b9b788490262231269b6acf400be0733a1ccce76ca2507e55b->leave($__internal_27a94c0542ac12b9b788490262231269b6acf400be0733a1ccce76ca2507e55b_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_7c3159398208e2e7d0d3e1b90f059e5dd506c7085db27654697ec5b3482a36e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3159398208e2e7d0d3e1b90f059e5dd506c7085db27654697ec5b3482a36e5->enter($__internal_7c3159398208e2e7d0d3e1b90f059e5dd506c7085db27654697ec5b3482a36e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_7c3159398208e2e7d0d3e1b90f059e5dd506c7085db27654697ec5b3482a36e5->leave($__internal_7c3159398208e2e7d0d3e1b90f059e5dd506c7085db27654697ec5b3482a36e5_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_3f5f15c574da8636aca2acf62b5112f5d7f018d6869d931b712c10d796b044eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5f15c574da8636aca2acf62b5112f5d7f018d6869d931b712c10d796b044eb->enter($__internal_3f5f15c574da8636aca2acf62b5112f5d7f018d6869d931b712c10d796b044eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "<i class=\"fa fa-fw fa-wrench\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "
";
        
        $__internal_3f5f15c574da8636aca2acf62b5112f5d7f018d6869d931b712c10d796b044eb->leave($__internal_3f5f15c574da8636aca2acf62b5112f5d7f018d6869d931b712c10d796b044eb_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7736ce3ae79b6a83a34dfeedd90065b79e8fb971f1bd03b6bcec9ab877c1a2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7736ce3ae79b6a83a34dfeedd90065b79e8fb971f1bd03b6bcec9ab877c1a2d7->enter($__internal_7736ce3ae79b6a83a34dfeedd90065b79e8fb971f1bd03b6bcec9ab877c1a2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
        echo " : </h3>
<h1 style=\"color: blue\" class=\"text-center\"><b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</b></h1>
<table class=\"table-responsive\" >  

        ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "  
    <form class=\"well\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        <table class=\"table table-condensed table-bordered\"  >
            <tr >                   
                <th class=\"col-sm-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "html", null, true);
        echo "</th>
                <td class=\"col-sm-6\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre", array()), 'widget');
        echo " </td>
                <td  class=\"col-sm-2\" rowspan=\"10\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()))), "html", null, true);
        echo "\"class=\"img-rounded img-responsive\" alt=\"entity.titre\">
                    </br>
                   ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Picture"), "html", null, true);
        echo "
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'widget');
        echo "
                </td>
                                            
            </tr>                
            <tr>                   
                <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
                <td >";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</th>
                <td>";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "theme", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</th>
                <td>";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
                <td>";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "etat", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starting Schedule"), "html", null, true);
        echo "</th>
                <td>";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horaireDebut", array()), 'widget');
        echo " </td>
                
            </tr>
            <input type=\"hidden\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
            <tr>                   
                <th>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ending Schedule"), "html", null, true);
        echo "</th>
                <td>";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "HoraireFin", array()), 'widget');
        echo " </td>
            </tr>
            <input type=\"hidden\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
            <tr>                   
                <th>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
        echo "</th>
                <td>GMT + ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fuseauHoraire", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country"), "html", null, true);
        echo "</th>
                <td>";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City"), "html", null, true);
        echo "</th>
                <td>";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zip code"), "html", null, true);
        echo "</th>
                <td>";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "codePostal", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address"), "html", null, true);
        echo "</th>
                <td>";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Organizer"), "html", null, true);
        echo "</th>
                <td>";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Organisateur", array()), 'widget');
        echo " </td>
                
            </tr>
            
        </table>
        </br>
        <table >
                ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "
            <tr>   
                <td class=\"col-sm-6\">
                    <a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_search");
        echo "\">
                        <button type=\"submit\" class=\"btn btn-default fa fa-check\"> ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo "</button>
                    </a>
                </td>
                </form>
    <td class=\"col-sm-6\">
                    <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_search");
        echo "\">
                        <button type=\"button\" class=\"btn btn-default fa fa-list\"> ";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Events"), "html", null, true);
        echo "</button>
                    </a>
                </td>
                <td class=\"col-sm-6 \">
                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"text-danger\">
                ";
        // line 98
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                    </a>
                </td>
                
            </tr>
        </table>
";
        
        $__internal_7736ce3ae79b6a83a34dfeedd90065b79e8fb971f1bd03b6bcec9ab877c1a2d7->leave($__internal_7736ce3ae79b6a83a34dfeedd90065b79e8fb971f1bd03b6bcec9ab877c1a2d7_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Events/admin_event_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 98,  286 => 97,  279 => 93,  275 => 92,  267 => 87,  263 => 86,  257 => 83,  247 => 76,  243 => 75,  237 => 72,  233 => 71,  227 => 68,  223 => 67,  217 => 64,  213 => 63,  207 => 60,  203 => 59,  197 => 56,  193 => 55,  188 => 53,  183 => 51,  179 => 50,  174 => 48,  168 => 45,  164 => 44,  158 => 41,  154 => 40,  148 => 37,  144 => 36,  138 => 33,  134 => 32,  128 => 29,  124 => 28,  116 => 23,  112 => 22,  107 => 20,  103 => 19,  99 => 18,  90 => 14,  86 => 13,  80 => 10,  73 => 9,  67 => 8,  57 => 6,  51 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
<i class=\"fa fa-fw fa-wrench\"></i> {{ 'Edit'|trans }}
{% endblock operation %}
{% block body -%}  
<h3>{{ 'Update'|trans }} {{ 'Event'|trans }} : </h3>
<h1 style=\"color: blue\" class=\"text-center\"><b>{{entity.titre}}</b></h1>
<table class=\"table-responsive\" >  

        {{ form_start(edit_form) }}  
    <form class=\"well\" action=\"{{ path('admin_event_edit', { 'id': entity.id }) }}\" method=\"post\" {{ form_enctype(edit_form) }}>
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        <table class=\"table table-condensed table-bordered\"  >
            <tr >                   
                <th class=\"col-sm-2\">{{ 'Title'|trans }}</th>
                <td class=\"col-sm-6\">{{ form_widget(edit_form.titre) }} </td>
                <td  class=\"col-sm-2\" rowspan=\"10\"><img src=\"{{ asset('uploads/' ~ entity.path) }}\"class=\"img-rounded img-responsive\" alt=\"entity.titre\">
                    </br>
                   {{ 'Picture'|trans }}
                {{ form_widget(edit_form.file) }}
                </td>
                                            
            </tr>                
            <tr>                   
                <th>{{ 'Description'|trans }}</th>
                <td >{{ form_widget(edit_form.description) }} </td>
            </tr>
            <tr>                   
                <th>{{ 'Theme'|trans }}</th>
                <td>{{ form_widget(edit_form.theme) }} </td>
            </tr>
            <tr>                   
                <th>{{ 'Theme'|trans }}</th>
                <td>{{ form_widget(edit_form.type) }} </td>
            </tr>
            <tr>                   
                <th>{{ 'State'|trans }}</th>
                <td>{{ form_widget(edit_form.etat) }} </td>
            </tr>
            <tr>                   
                <th>{{ 'Starting Schedule'|trans }}</th>
                <td>{{ form_widget(edit_form.horaireDebut) }} </td>
                
            </tr>
            <input type=\"hidden\" value=\"{{ entity.horaireDebut|date('Y-m-d H:i:s') }}\">
            <tr>                   
                <th>{{ 'Ending Schedule'|trans }}</th>
                <td>{{ form_widget(edit_form.HoraireFin) }} </td>
            </tr>
            <input type=\"hidden\" value=\"{{ entity.HoraireFin|date('Y-m-d H:i:s') }}\">
            <tr>                   
                <th>{{ 'Time zone'|trans }}</th>
                <td>GMT + {{ form_widget(edit_form.fuseauHoraire) }} </td>
            </tr>
            <tr>                   
                <th>{{ 'Country'|trans }}</th>
                <td>{{ form_widget(edit_form.pays) }} </td>
            </tr>
            <tr>                   
                <th>{{ 'City'|trans }}</th>
                <td>{{ form_widget(edit_form.ville) }} </td>
            </tr>
            <tr>                   
                <th>{{ 'Zip code'|trans }}</th>
                <td>{{ form_widget(edit_form.codePostal) }} </td>
            </tr>
            <tr>                   
                <th>{{ 'Address'|trans }}</th>
                <td>{{ form_widget(edit_form.adresse) }} </td>
            </tr>
            <tr>                   
                <th>{{ 'Organizer'|trans }}</th>
                <td>{{ form_widget(edit_form.Organisateur) }} </td>
                
            </tr>
            
        </table>
        </br>
        <table >
                {{ form_widget(edit_form._token) }}
            <tr>   
                <td class=\"col-sm-6\">
                    <a href=\"{{ path('admin_event_search') }}\">
                        <button type=\"submit\" class=\"btn btn-default fa fa-check\"> {{ 'Update'|trans}}</button>
                    </a>
                </td>
                </form>
    <td class=\"col-sm-6\">
                    <a href=\"{{ path('admin_event_search') }}\">
                        <button type=\"button\" class=\"btn btn-default fa fa-list\"> {{ 'All Events'|trans }}</button>
                    </a>
                </td>
                <td class=\"col-sm-6 \">
                    <a href=\"{{ path('admin_event_delete', { 'id': entity.id }) }}\" class=\"text-danger\">
                {{ form(delete_form) }}
                    </a>
                </td>
                
            </tr>
        </table>
{% endblock %}
", "@OrionEvent/Admin_Events/admin_event_edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Events\\admin_event_edit.html.twig");
    }
}
