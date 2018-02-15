<?php

/* @OrionEvent/Admin_Events/admin_event_new.html.twig */
class __TwigTemplate_bbabcfc64a8df79038255f15a6fb1d597e712d5f424f446548d70ffc60779d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Events/admin_event_new.html.twig", 1);
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
        $__internal_31dab933448fff06c34132c4a9a3518aca932e9adf043870424005f294eb513b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dab933448fff06c34132c4a9a3518aca932e9adf043870424005f294eb513b->enter($__internal_31dab933448fff06c34132c4a9a3518aca932e9adf043870424005f294eb513b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Events/admin_event_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31dab933448fff06c34132c4a9a3518aca932e9adf043870424005f294eb513b->leave($__internal_31dab933448fff06c34132c4a9a3518aca932e9adf043870424005f294eb513b_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_6684848ddee66bd95d974a1a030e36fe61b06f25851fd7c71a43cda0b662d634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6684848ddee66bd95d974a1a030e36fe61b06f25851fd7c71a43cda0b662d634->enter($__internal_6684848ddee66bd95d974a1a030e36fe61b06f25851fd7c71a43cda0b662d634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_6684848ddee66bd95d974a1a030e36fe61b06f25851fd7c71a43cda0b662d634->leave($__internal_6684848ddee66bd95d974a1a030e36fe61b06f25851fd7c71a43cda0b662d634_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_44d1e61ac8cbd5f29d28428bb2b3d41847a0cd5119fb235e64e6d2a9b30326b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d1e61ac8cbd5f29d28428bb2b3d41847a0cd5119fb235e64e6d2a9b30326b7->enter($__internal_44d1e61ac8cbd5f29d28428bb2b3d41847a0cd5119fb235e64e6d2a9b30326b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
";
        
        $__internal_44d1e61ac8cbd5f29d28428bb2b3d41847a0cd5119fb235e64e6d2a9b30326b7->leave($__internal_44d1e61ac8cbd5f29d28428bb2b3d41847a0cd5119fb235e64e6d2a9b30326b7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8311a64bb473356378fd94052f31c26865f83ae808143bcf560a665b80598dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8311a64bb473356378fd94052f31c26865f83ae808143bcf560a665b80598dde->enter($__internal_8311a64bb473356378fd94052f31c26865f83ae808143bcf560a665b80598dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8311a64bb473356378fd94052f31c26865f83ae808143bcf560a665b80598dde->leave($__internal_8311a64bb473356378fd94052f31c26865f83ae808143bcf560a665b80598dde_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Events/admin_event_new.html.twig";
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
", "@OrionEvent/Admin_Events/admin_event_new.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Events\\admin_event_new.html.twig");
    }
}
