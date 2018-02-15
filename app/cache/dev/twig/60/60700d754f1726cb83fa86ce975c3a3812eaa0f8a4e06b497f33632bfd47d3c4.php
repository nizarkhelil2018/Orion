<?php

/* OrionEventBundle:User_Owned_Events:user_owned_event_edit.html.twig */
class __TwigTemplate_b22b921d08a12197fc954e9aa298dfadd9c0bab69f3e6c5e94635a3fe60a394b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "OrionEventBundle:User_Owned_Events:user_owned_event_edit.html.twig", 1);
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
        $__internal_30d0f665d6f16ec3cc8827e97069669c34e4d0251bae334274e871d5bb4b0b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d0f665d6f16ec3cc8827e97069669c34e4d0251bae334274e871d5bb4b0b36->enter($__internal_30d0f665d6f16ec3cc8827e97069669c34e4d0251bae334274e871d5bb4b0b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Owned_Events:user_owned_event_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d0f665d6f16ec3cc8827e97069669c34e4d0251bae334274e871d5bb4b0b36->leave($__internal_30d0f665d6f16ec3cc8827e97069669c34e4d0251bae334274e871d5bb4b0b36_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_8ac0e8204bc5a51431b2b9cd5e5b19faabd7369d3dcbd3753f0ab84581fa1886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac0e8204bc5a51431b2b9cd5e5b19faabd7369d3dcbd3753f0ab84581fa1886->enter($__internal_8ac0e8204bc5a51431b2b9cd5e5b19faabd7369d3dcbd3753f0ab84581fa1886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_8ac0e8204bc5a51431b2b9cd5e5b19faabd7369d3dcbd3753f0ab84581fa1886->leave($__internal_8ac0e8204bc5a51431b2b9cd5e5b19faabd7369d3dcbd3753f0ab84581fa1886_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_241ea4ea70820272e95b6b93741045e73b59c7af5beee7bbebc5331854d9e8ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241ea4ea70820272e95b6b93741045e73b59c7af5beee7bbebc5331854d9e8ca->enter($__internal_241ea4ea70820272e95b6b93741045e73b59c7af5beee7bbebc5331854d9e8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-fw fa-wrench\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "</i> 
";
        
        $__internal_241ea4ea70820272e95b6b93741045e73b59c7af5beee7bbebc5331854d9e8ca->leave($__internal_241ea4ea70820272e95b6b93741045e73b59c7af5beee7bbebc5331854d9e8ca_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a3a762f080f50b2dda1a14ec863b5a8b38cc6ae7c79cff2f88b8f9472a1c3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3a762f080f50b2dda1a14ec863b5a8b38cc6ae7c79cff2f88b8f9472a1c3ab->enter($__internal_1a3a762f080f50b2dda1a14ec863b5a8b38cc6ae7c79cff2f88b8f9472a1c3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
        echo " : </h3>
    <h1 style=\"color: blue\" class=\"text-center\"><b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</b></h1>
    <table class=\"table-responsive\" >
       
        ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "  
        <form class=\"well\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
            <table class=\"table table-condensed table-bordered\"  >
            <tr >                   
                <th class=\"col-sm-2\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "html", null, true);
        echo "</th>
                <td class=\"col-sm-6\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre", array()), 'widget');
        echo " </td>
                <td  class=\"col-sm-2\" rowspan=\"10\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()))), "html", null, true);
        echo "\"class=\"img-rounded img-responsive\" alt=\"entity.titre\">
                    </br>
                   ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Picture"), "html", null, true);
        echo "
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "file", array()), 'widget');
        echo "
                </td>
                                            
            </tr>                
            <tr>                   
                <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
                <td >";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</th>
                <td>";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "theme", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</th>
                <td>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
                <td>";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "etat", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starting Schedule"), "html", null, true);
        echo "</th>
                <td>";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horaireDebut", array()), 'widget');
        echo " </td>
                
            </tr>
            <input type=\"hidden\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
            <tr>                   
                <th>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ending Schedule"), "html", null, true);
        echo "</th>
                <td>";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "HoraireFin", array()), 'widget');
        echo " </td>
            </tr>
            <input type=\"hidden\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
            <tr>                   
                <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
        echo "</th>
                <td>GMT + ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fuseauHoraire", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address"), "html", null, true);
        echo "</th>
                <td>";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'widget');
        echo " </td>
            </tr>            
            
        </table>
            <table>
                ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "
                <th class=\"col-sm-3\">   
                    <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_search");
        echo "\">
                        <button type=\"submit\" class=\"btn btn-default fa fa-check text-success\"> ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo "</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_all");
        echo "\">
                <button type=\"button\" class=\"btn btn-default fa fa-list text-primary\"> ";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Events"), "html", null, true);
        echo "</button>
            </a>
        </th>
        <th>
            <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" style=\"color: red\" >
                ";
        // line 81
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
            </a>
        </th>
    </table>
";
        
        $__internal_1a3a762f080f50b2dda1a14ec863b5a8b38cc6ae7c79cff2f88b8f9472a1c3ab->leave($__internal_1a3a762f080f50b2dda1a14ec863b5a8b38cc6ae7c79cff2f88b8f9472a1c3ab_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Owned_Events:user_owned_event_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 81,  245 => 80,  238 => 76,  234 => 75,  225 => 69,  221 => 68,  216 => 66,  208 => 61,  204 => 60,  198 => 57,  194 => 56,  189 => 54,  184 => 52,  180 => 51,  175 => 49,  169 => 46,  165 => 45,  159 => 42,  155 => 41,  149 => 38,  145 => 37,  139 => 34,  135 => 33,  129 => 30,  125 => 29,  117 => 24,  113 => 23,  108 => 21,  104 => 20,  100 => 19,  91 => 15,  87 => 14,  81 => 11,  74 => 10,  68 => 9,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
    <i class=\"fa fa-fw fa-wrench\">{{ 'Edit'|trans }}</i> 
{% endblock operation %}
    
{% block body -%} 
    <h3>{{ 'Update'|trans }} {{ 'Event'|trans }} : </h3>
    <h1 style=\"color: blue\" class=\"text-center\"><b>{{entity.titre}}</b></h1>
    <table class=\"table-responsive\" >
       
        {{ form_start(edit_form) }}  
        <form class=\"well\" action=\"{{ path('user_owned_event_edit', { 'id': entity.id }) }}\" method=\"post\" {{ form_enctype(edit_form) }}>
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
                <th>{{ 'Address'|trans }}</th>
                <td>{{ form_widget(edit_form.adresse) }} </td>
            </tr>            
            
        </table>
            <table>
                {{ form_widget(edit_form._token) }}
                <th class=\"col-sm-3\">   
                    <a href=\"{{ path('user_owned_event_search') }}\">
                        <button type=\"submit\" class=\"btn btn-default fa fa-check text-success\"> {{ 'Update'|trans }}</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"{{ path('user_owned_events_all') }}\">
                <button type=\"button\" class=\"btn btn-default fa fa-list text-primary\"> {{ 'My Events'|trans }}</button>
            </a>
        </th>
        <th>
            <a href=\"{{ path('user_owned_event_delete', { 'id': entity.id }) }}\" style=\"color: red\" >
                {{ form(delete_form) }}
            </a>
        </th>
    </table>
{% endblock %}
", "OrionEventBundle:User_Owned_Events:user_owned_event_edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Owned_Events/user_owned_event_edit.html.twig");
    }
}
