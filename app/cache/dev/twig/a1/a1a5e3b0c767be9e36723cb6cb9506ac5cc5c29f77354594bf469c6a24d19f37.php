<?php

/* OrionEventBundle:User_Billet:user_billet_new.html.twig */
class __TwigTemplate_3081e1792906a833b287ef48ea7e33a8bc3634cb5f7b5089cac678fcd80962be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "OrionEventBundle:User_Billet:user_billet_new.html.twig", 1);
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
        $__internal_3ff451c3c638992b733168bcd67091835ec027f91cca859627da209ebb7b2c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff451c3c638992b733168bcd67091835ec027f91cca859627da209ebb7b2c16->enter($__internal_3ff451c3c638992b733168bcd67091835ec027f91cca859627da209ebb7b2c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Billet:user_billet_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ff451c3c638992b733168bcd67091835ec027f91cca859627da209ebb7b2c16->leave($__internal_3ff451c3c638992b733168bcd67091835ec027f91cca859627da209ebb7b2c16_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_a4b9da52f1956ea558c811cc0f15c45b9dfe03be9cac217d3a724df097894202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b9da52f1956ea558c811cc0f15c45b9dfe03be9cac217d3a724df097894202->enter($__internal_a4b9da52f1956ea558c811cc0f15c45b9dfe03be9cac217d3a724df097894202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_a4b9da52f1956ea558c811cc0f15c45b9dfe03be9cac217d3a724df097894202->leave($__internal_a4b9da52f1956ea558c811cc0f15c45b9dfe03be9cac217d3a724df097894202_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_58787f4247f9b4df6fbcc94f27a41f3431355aadf2534b962c8cd65d3c9e1eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58787f4247f9b4df6fbcc94f27a41f3431355aadf2534b962c8cd65d3c9e1eda->enter($__internal_58787f4247f9b4df6fbcc94f27a41f3431355aadf2534b962c8cd65d3c9e1eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
";
        
        $__internal_58787f4247f9b4df6fbcc94f27a41f3431355aadf2534b962c8cd65d3c9e1eda->leave($__internal_58787f4247f9b4df6fbcc94f27a41f3431355aadf2534b962c8cd65d3c9e1eda_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ad3f2561d4402f7bea73168b85ca15ff68c9748070a09dd21bca6834accdab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad3f2561d4402f7bea73168b85ca15ff68c9748070a09dd21bca6834accdab3->enter($__internal_0ad3f2561d4402f7bea73168b85ca15ff68c9748070a09dd21bca6834accdab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h2 style=\"color: silver\" class=\"text-center\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket"), "html", null, true);
        echo "</b></h2>    
    <table class=\"table-responsive\" >
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "  
        <form class=\"well\" action=\"\" method=\"post\" ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <input type=\"hidden\" name=\"_method\" value=\"POST\" />
            <table class=\"table table-condensed table-striped\">
                <tr>                   
                    <th class=\"col-sm-3\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</th>
                    <td>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo " </td>
                </tr>                
                <tr>                   
                    <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</th>
                    <td class=\"col-sm-9\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price"), "html", null, true);
        echo "</th>
                    <td>";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number"), "html", null, true);
        echo "</th>
                    <td>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo " </td>
                </tr>
                
  
                <tr>                   
                    <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
                    <td>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
            </table>
            <table>
                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                <th class=\"col-sm-3\">   
                    <a href=\"\">
                        <button type=\"submit\" class=\"btn btn-group-sm btn-success fa fa-plus\"> ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create"), "html", null, true);
        echo "</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_search");
        echo "\">
                <button type=\"button\" class=\"btn btn-group-sm fa fa-list\"> ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Tickets"), "html", null, true);
        echo "</button>
            </a>
        </th>              

    </table>                        

";
        
        $__internal_0ad3f2561d4402f7bea73168b85ca15ff68c9748070a09dd21bca6834accdab3->leave($__internal_0ad3f2561d4402f7bea73168b85ca15ff68c9748070a09dd21bca6834accdab3_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Billet:user_billet_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 51,  165 => 50,  156 => 44,  150 => 41,  144 => 38,  139 => 36,  135 => 35,  127 => 30,  123 => 29,  117 => 26,  113 => 25,  107 => 22,  103 => 21,  97 => 18,  93 => 17,  86 => 13,  82 => 12,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    <i class=\"fa fa-plus\"></i> {{ 'Add'|trans }}
{% endblock operation %}
{% block body -%}    
    <h2 style=\"color: silver\" class=\"text-center\"><b>{{ 'Add'|trans }} {{ 'Ticket'|trans }}</b></h2>    
    <table class=\"table-responsive\" >
        {{ form_start(form) }}  
        <form class=\"well\" action=\"\" method=\"post\" {{ form_enctype(form) }}>
            <input type=\"hidden\" name=\"_method\" value=\"POST\" />
            <table class=\"table table-condensed table-striped\">
                <tr>                   
                    <th class=\"col-sm-3\">{{ 'Wording'|trans }}</th>
                    <td>{{ form_widget(form.libelle) }} </td>
                </tr>                
                <tr>                   
                    <th>{{ 'Type'|trans }}</th>
                    <td class=\"col-sm-9\">{{ form_widget(form.type) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'Price'|trans }}</th>
                    <td>{{ form_widget(form.prix) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'Number'|trans }}</th>
                    <td>{{ form_widget(form.nombre) }} </td>
                </tr>
                
  
                <tr>                   
                    <th>{{ 'Creation date'|trans }}</th>
                    <td>{{ form_widget(form.dateCreation) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datecreation|date('Y-m-d H:i:s') }}\">
            </table>
            <table>
                {{ form_widget(form._token) }}
                <th class=\"col-sm-3\">   
                    <a href=\"\">
                        <button type=\"submit\" class=\"btn btn-group-sm btn-success fa fa-plus\"> {{ 'Create'|trans }}</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"{{ path('user_billet_search') }}\">
                <button type=\"button\" class=\"btn btn-group-sm fa fa-list\"> {{ 'All Tickets'|trans }}</button>
            </a>
        </th>              

    </table>                        

{% endblock %}
", "OrionEventBundle:User_Billet:user_billet_new.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Billet/user_billet_new.html.twig");
    }
}
