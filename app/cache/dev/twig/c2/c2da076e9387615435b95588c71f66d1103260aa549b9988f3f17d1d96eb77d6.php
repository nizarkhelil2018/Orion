<?php

/* OrionEventBundle:User_Owned_Events:user_event_new.html.twig */
class __TwigTemplate_164b81e9c281fc283937fa43879b93136df78ea06e80c3a25f321f747e77ee1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "OrionEventBundle:User_Owned_Events:user_event_new.html.twig", 1);
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
        $__internal_64b56c6881e9a899ee35938c6f68ee2ac7fe406c83280ddb6bdf0675e7262195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b56c6881e9a899ee35938c6f68ee2ac7fe406c83280ddb6bdf0675e7262195->enter($__internal_64b56c6881e9a899ee35938c6f68ee2ac7fe406c83280ddb6bdf0675e7262195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Owned_Events:user_event_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64b56c6881e9a899ee35938c6f68ee2ac7fe406c83280ddb6bdf0675e7262195->leave($__internal_64b56c6881e9a899ee35938c6f68ee2ac7fe406c83280ddb6bdf0675e7262195_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_e125589895df9bb7bd1beef283ad958468ed86029a84aba73b233fadf8e854b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e125589895df9bb7bd1beef283ad958468ed86029a84aba73b233fadf8e854b0->enter($__internal_e125589895df9bb7bd1beef283ad958468ed86029a84aba73b233fadf8e854b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_e125589895df9bb7bd1beef283ad958468ed86029a84aba73b233fadf8e854b0->leave($__internal_e125589895df9bb7bd1beef283ad958468ed86029a84aba73b233fadf8e854b0_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_4d098cc73cc166b4020a2cab6511d5ce18c73ad71da169821a59214e82c5f71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d098cc73cc166b4020a2cab6511d5ce18c73ad71da169821a59214e82c5f71e->enter($__internal_4d098cc73cc166b4020a2cab6511d5ce18c73ad71da169821a59214e82c5f71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
";
        
        $__internal_4d098cc73cc166b4020a2cab6511d5ce18c73ad71da169821a59214e82c5f71e->leave($__internal_4d098cc73cc166b4020a2cab6511d5ce18c73ad71da169821a59214e82c5f71e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_90edc2b3aeccee951192194cf8a22dde58c4a19a9ae80d7cb630047be7f78c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90edc2b3aeccee951192194cf8a22dde58c4a19a9ae80d7cb630047be7f78c6d->enter($__internal_90edc2b3aeccee951192194cf8a22dde58c4a19a9ae80d7cb630047be7f78c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h2 style=\"color: silver\" class=\"text-center\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
        echo "</b></h2>
<table class=\"table-responsive\" >
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "  
    <form class=\"well\" action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"POST\" />
        <table class=\"table table-condensed table-striped\">
            <tr>                   
                <th class=\"text-info\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "html", null, true);
        echo "</th>
                <td>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo " </td>
            </tr>                
            <tr>                   
                <th class=\"text-info\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
                <td class=\"col-sm-9\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th class=\"text-info\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
                <td>";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th class=\"text-info\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</th>
                <td>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "theme", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th class=\"text-info\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</th>
                <td>";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th class=\"text-info\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country"), "html", null, true);
        echo "</th>
                <td>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget');
        echo " </td>
            </tr> 
            <tr>                   
                <th class=\"text-info\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City"), "html", null, true);
        echo "</th>
                <td>";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo " </td>
            </tr> 
            <tr>                   
                <th class=\"text-info\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zip Code"), "html", null, true);
        echo "</th>
                <td>";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal", array()), 'widget');
        echo " </td>
            </tr>
            <tr>                   
                <th class=\"text-info\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address"), "html", null, true);
        echo "</th>
                <td>";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo " </td>
            </tr> 

            <tr>                   
                <th class=\"text-info\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starting Schedule"), "html", null, true);
        echo "</th>
                <td>";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaireDebut", array()), 'widget');
        echo " </td>
            </tr>
            <input type=\"hidden\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horairedebut", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
            <tr>                   
                <th class=\"text-info\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ending Schedule"), "html", null, true);
        echo "</th>
                <td>";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "HoraireFin", array()), 'widget');
        echo " </td>
            </tr>
            <input type=\"hidden\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horairefin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
            <tr>                   
                <th class=\"text-info\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
        echo "</th>
                <td>GMT + ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fuseauHoraire", array()), 'widget');
        echo " </td>
            </tr>

            <tr>                   
                <th class=\"text-info\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
                <td>";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'widget');
        echo " </td>
            </tr>
            <input type=\"hidden\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
            <tr>                   
                <th class=\"text-info\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Picture"), "html", null, true);
        echo "</th>
                <td>";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo " </td>
            </tr>
        </table>
        <table>
                ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            <th class=\"col-sm-3\">   
                <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_index");
        echo "\">
                    <button type=\"submit\" class=\"btn btn-group-sm btn-success fa fa-plus\"> ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create"), "html", null, true);
        echo "</button>
                </a>
            </th>
    </form>
    <th>
        <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_all");
        echo "\">
            <button type=\"button\" class=\"btn btn-group-sm fa fa-list\"> ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All My Events"), "html", null, true);
        echo "</button>
        </a>
    </th>              

</table>       
";
        
        $__internal_90edc2b3aeccee951192194cf8a22dde58c4a19a9ae80d7cb630047be7f78c6d->leave($__internal_90edc2b3aeccee951192194cf8a22dde58c4a19a9ae80d7cb630047be7f78c6d_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Owned_Events:user_event_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 88,  266 => 87,  258 => 82,  254 => 81,  249 => 79,  242 => 75,  238 => 74,  233 => 72,  228 => 70,  224 => 69,  217 => 65,  213 => 64,  208 => 62,  203 => 60,  199 => 59,  194 => 57,  189 => 55,  185 => 54,  178 => 50,  174 => 49,  168 => 46,  164 => 45,  158 => 42,  154 => 41,  148 => 38,  144 => 37,  138 => 34,  134 => 33,  128 => 30,  124 => 29,  118 => 26,  114 => 25,  108 => 22,  104 => 21,  98 => 18,  94 => 17,  85 => 13,  81 => 12,  73 => 10,  67 => 9,  57 => 7,  51 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
<i class=\"fa fa-plus\"></i> {{ 'Add'|trans }}
{% endblock operation %}
{% block body -%}
<h2 style=\"color: silver\" class=\"text-center\"><b>{{ 'Add'|trans }} {{ 'Event'|trans }}</b></h2>
<table class=\"table-responsive\" >
        {{ form_start(form) }}  
    <form class=\"well\" action=\"{{ path('user_owned_event_new') }}\" method=\"post\" {{ form_enctype(form) }}>
        <input type=\"hidden\" name=\"_method\" value=\"POST\" />
        <table class=\"table table-condensed table-striped\">
            <tr>                   
                <th class=\"text-info\">{{ 'Title'|trans }}</th>
                <td>{{ form_widget(form.titre) }} </td>
            </tr>                
            <tr>                   
                <th class=\"text-info\">{{ 'Description'|trans }}</th>
                <td class=\"col-sm-9\">{{ form_widget(form.description) }} </td>
            </tr>
            <tr>                   
                <th class=\"text-info\">{{ 'State'|trans }}</th>
                <td>{{ form_widget(form.etat) }} </td>
            </tr>
            <tr>                   
                <th class=\"text-info\">{{ 'Theme'|trans }}</th>
                <td>{{ form_widget(form.theme) }} </td>
            </tr>
            <tr>                   
                <th class=\"text-info\">{{ 'Type'|trans }}</th>
                <td>{{ form_widget(form.type) }} </td>
            </tr>
            <tr>                   
                <th class=\"text-info\">{{ 'Country'|trans }}</th>
                <td>{{ form_widget(form.pays) }} </td>
            </tr> 
            <tr>                   
                <th class=\"text-info\">{{ 'City'|trans }}</th>
                <td>{{ form_widget(form.ville) }} </td>
            </tr> 
            <tr>                   
                <th class=\"text-info\">{{ 'Zip Code'|trans }}</th>
                <td>{{ form_widget(form.codePostal) }} </td>
            </tr>
            <tr>                   
                <th class=\"text-info\">{{ 'Address'|trans }}</th>
                <td>{{ form_widget(form.adresse) }} </td>
            </tr> 

            <tr>                   
                <th class=\"text-info\">{{ 'Starting Schedule'|trans }}</th>
                <td>{{ form_widget(form.horaireDebut) }} </td>
            </tr>
            <input type=\"hidden\" value=\"{{ entity.horairedebut|date('Y-m-d H:i:s') }}\">
            <tr>                   
                <th class=\"text-info\">{{ 'Ending Schedule'|trans }}</th>
                <td>{{ form_widget(form.HoraireFin) }} </td>
            </tr>
            <input type=\"hidden\" value=\"{{ entity.horairefin|date('Y-m-d H:i:s') }}\">
            <tr>                   
                <th class=\"text-info\">{{ 'Time zone'|trans }}</th>
                <td>GMT + {{ form_widget(form.fuseauHoraire) }} </td>
            </tr>

            <tr>                   
                <th class=\"text-info\">{{ 'Creation date'|trans }}</th>
                <td>{{ form_widget(form.dateCreation) }} </td>
            </tr>
            <input type=\"hidden\" value=\"{{ entity.datecreation|date('Y-m-d H:i:s') }}\">
            <tr>                   
                <th class=\"text-info\">{{ 'Picture'|trans }}</th>
                <td>{{ form_widget(form.file) }} </td>
            </tr>
        </table>
        <table>
                {{ form_widget(form._token) }}
            <th class=\"col-sm-3\">   
                <a href=\"{{ path('admin_theme_index') }}\">
                    <button type=\"submit\" class=\"btn btn-group-sm btn-success fa fa-plus\"> {{ 'Create'|trans }}</button>
                </a>
            </th>
    </form>
    <th>
        <a href=\"{{ path('user_owned_events_all') }}\">
            <button type=\"button\" class=\"btn btn-group-sm fa fa-list\"> {{ 'All My Events'|trans }}</button>
        </a>
    </th>              

</table>       
{% endblock %}
", "OrionEventBundle:User_Owned_Events:user_event_new.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Owned_Events/user_event_new.html.twig");
    }
}
