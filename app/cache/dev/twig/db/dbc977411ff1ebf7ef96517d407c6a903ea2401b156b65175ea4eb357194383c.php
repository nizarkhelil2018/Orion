<?php

/* OrionEventBundle:Admin_Events:admin_event_new.html.twig */
class __TwigTemplate_7cc86afc52974e351de7ec6234b2edd8786eb68146ec3f37751bc632ce335dcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Events:admin_event_new.html.twig", 1);
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
        $__internal_faec7aacb64145bff72d2c3a5bf2a558dd9320c15c437a5039029cba1c4099a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faec7aacb64145bff72d2c3a5bf2a558dd9320c15c437a5039029cba1c4099a6->enter($__internal_faec7aacb64145bff72d2c3a5bf2a558dd9320c15c437a5039029cba1c4099a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Events:admin_event_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faec7aacb64145bff72d2c3a5bf2a558dd9320c15c437a5039029cba1c4099a6->leave($__internal_faec7aacb64145bff72d2c3a5bf2a558dd9320c15c437a5039029cba1c4099a6_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_19a486a1934b15de3adca6d200df43d760ad2c97db1c18da3ad5b9920acc3a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a486a1934b15de3adca6d200df43d760ad2c97db1c18da3ad5b9920acc3a43->enter($__internal_19a486a1934b15de3adca6d200df43d760ad2c97db1c18da3ad5b9920acc3a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_19a486a1934b15de3adca6d200df43d760ad2c97db1c18da3ad5b9920acc3a43->leave($__internal_19a486a1934b15de3adca6d200df43d760ad2c97db1c18da3ad5b9920acc3a43_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_de0ec931a7f377b37c1aa8cb10827211efaa759430cb6417c9419143b921933a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0ec931a7f377b37c1aa8cb10827211efaa759430cb6417c9419143b921933a->enter($__internal_de0ec931a7f377b37c1aa8cb10827211efaa759430cb6417c9419143b921933a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
";
        
        $__internal_de0ec931a7f377b37c1aa8cb10827211efaa759430cb6417c9419143b921933a->leave($__internal_de0ec931a7f377b37c1aa8cb10827211efaa759430cb6417c9419143b921933a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_41b014036f3fbf6c8a6153ce110d17abd0c9a7233b82084431f5b19bb309f57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b014036f3fbf6c8a6153ce110d17abd0c9a7233b82084431f5b19bb309f57e->enter($__internal_41b014036f3fbf6c8a6153ce110d17abd0c9a7233b82084431f5b19bb309f57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h2 style=\"color: silver\" class=\"text-center\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
        echo "</b></h2>


    <table class=\"table-responsive\" >
        ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "  
        <form class=\"well\" action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <input type=\"hidden\" name=\"_method\" value=\"POST\" />
            <table class=\"table table-condensed table-striped\">
                <tr>                   
                    <th class=\"text-info\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "html", null, true);
        echo "</th>
                    <td>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo " </td>
                </tr>                
                <tr>                   
                    <th class=\"text-info\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
                    <td class=\"col-sm-9\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th class=\"text-info\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
                    <td>";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th class=\"text-info\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</th>
                    <td>";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "theme", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th class=\"text-info\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</th>
                    <td>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th class=\"text-info\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country"), "html", null, true);
        echo "</th>
                    <td>";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget');
        echo " </td>
                </tr> 
                <tr>                   
                    <th class=\"text-info\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("City"), "html", null, true);
        echo "</th>
                    <td>";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo " </td>
                </tr> 
                <tr>                   
                    <th class=\"text-info\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zip Code"), "html", null, true);
        echo "</th>
                    <td>";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th class=\"text-info\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adress"), "html", null, true);
        echo "</th>
                    <td>";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo " </td>
                </tr> 
                <tr>                   
                    <th class=\"text-info\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Organizer"), "html", null, true);
        echo "</th>
                    <td>";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Organisateur", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th class=\"text-info\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starting Schedule"), "html", null, true);
        echo "</th>
                    <td>";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaireDebut", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horairedebut", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
                <tr>                   
                    <th class=\"text-info\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ending Schedule"), "html", null, true);
        echo "</th>
                    <td>";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "HoraireFin", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horairefin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
                <tr>                   
                    <th class=\"text-info\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
        echo "</th>
                    <td>GMT + ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fuseauHoraire", array()), 'widget');
        echo " </td>
                </tr>
                
                <tr>                   
                    <th class=\"text-info\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
                    <td>";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
                <tr>                   
                    <th class=\"text-info\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Picture"), "html", null, true);
        echo "</th>
                    <td>";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo " </td>
                </tr>
            </table>
            <table>

                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                <th class=\"col-sm-3\">   
                    <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_index");
        echo "\">
                        <button type=\"submit\" class=\"btn btn-group-sm btn-success fa fa-plus\"> ";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create"), "html", null, true);
        echo "</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_search");
        echo "\">
                <button type=\"button\" class=\"btn btn-group-sm fa fa-list\"> ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Events"), "html", null, true);
        echo "</button>
            </a>
        </th>              

    </table>       
";
        
        $__internal_41b014036f3fbf6c8a6153ce110d17abd0c9a7233b82084431f5b19bb309f57e->leave($__internal_41b014036f3fbf6c8a6153ce110d17abd0c9a7233b82084431f5b19bb309f57e_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Events:admin_event_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 96,  281 => 95,  272 => 89,  268 => 88,  262 => 85,  254 => 80,  250 => 79,  245 => 77,  240 => 75,  236 => 74,  229 => 70,  225 => 69,  220 => 67,  215 => 65,  211 => 64,  206 => 62,  201 => 60,  197 => 59,  191 => 56,  187 => 55,  181 => 52,  177 => 51,  171 => 48,  167 => 47,  161 => 44,  157 => 43,  151 => 40,  147 => 39,  141 => 36,  137 => 35,  131 => 32,  127 => 31,  121 => 28,  117 => 27,  111 => 24,  107 => 23,  101 => 20,  97 => 19,  88 => 15,  84 => 14,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    <i class=\"fa fa-plus\"></i> {{ 'Add'|trans }}
{% endblock operation %}
{% block body -%}
    <h2 style=\"color: silver\" class=\"text-center\"><b>{{ 'New'|trans }} {{ 'Event'|trans }}</b></h2>


    <table class=\"table-responsive\" >
        {{ form_start(form) }}  
        <form class=\"well\" action=\"{{ path('admin_event_new') }}\" method=\"post\" {{ form_enctype(form) }}>
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
                    <th class=\"text-info\">{{ 'Adress'|trans }}</th>
                    <td>{{ form_widget(form.adresse) }} </td>
                </tr> 
                <tr>                   
                    <th class=\"text-info\">{{ 'Organizer'|trans }}</th>
                    <td>{{ form_widget(form.Organisateur) }} </td>
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
                    <a href=\"{{ path('admin_event_index') }}\">
                        <button type=\"submit\" class=\"btn btn-group-sm btn-success fa fa-plus\"> {{ 'Create'|trans }}</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"{{ path('admin_event_search') }}\">
                <button type=\"button\" class=\"btn btn-group-sm fa fa-list\"> {{ 'All Events'|trans }}</button>
            </a>
        </th>              

    </table>       
{% endblock %}
", "OrionEventBundle:Admin_Events:admin_event_new.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Events/admin_event_new.html.twig");
    }
}
