<?php

/* @OrionEvent/Admin_Billet/admin_billet_new.html.twig */
class __TwigTemplate_a3259d6d0831c4e87d59a65ef2d382d380bdeac1e088b74ab7afb2f2fedf4286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Billet/admin_billet_new.html.twig", 1);
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
        $__internal_a9f20a6fffa1956d0723bf7a64dc32c51518fb03dde29197a7d83ad17d2e6629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f20a6fffa1956d0723bf7a64dc32c51518fb03dde29197a7d83ad17d2e6629->enter($__internal_a9f20a6fffa1956d0723bf7a64dc32c51518fb03dde29197a7d83ad17d2e6629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Billet/admin_billet_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f20a6fffa1956d0723bf7a64dc32c51518fb03dde29197a7d83ad17d2e6629->leave($__internal_a9f20a6fffa1956d0723bf7a64dc32c51518fb03dde29197a7d83ad17d2e6629_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_ef5c836fdcedaabde4b3ec32a8d54be42bf92dfc63fc7a32b3ddf103a26f8a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5c836fdcedaabde4b3ec32a8d54be42bf92dfc63fc7a32b3ddf103a26f8a3b->enter($__internal_ef5c836fdcedaabde4b3ec32a8d54be42bf92dfc63fc7a32b3ddf103a26f8a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_ef5c836fdcedaabde4b3ec32a8d54be42bf92dfc63fc7a32b3ddf103a26f8a3b->leave($__internal_ef5c836fdcedaabde4b3ec32a8d54be42bf92dfc63fc7a32b3ddf103a26f8a3b_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_c24598e180b69e0abc8cde7d26540140da72803f51c556b5ff07df4532c8ed34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24598e180b69e0abc8cde7d26540140da72803f51c556b5ff07df4532c8ed34->enter($__internal_c24598e180b69e0abc8cde7d26540140da72803f51c556b5ff07df4532c8ed34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
";
        
        $__internal_c24598e180b69e0abc8cde7d26540140da72803f51c556b5ff07df4532c8ed34->leave($__internal_c24598e180b69e0abc8cde7d26540140da72803f51c556b5ff07df4532c8ed34_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbe99ea4a5ff22ae1e13966fc8a0bc3274156204572a26405788866d18d082d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe99ea4a5ff22ae1e13966fc8a0bc3274156204572a26405788866d18d082d3->enter($__internal_fbe99ea4a5ff22ae1e13966fc8a0bc3274156204572a26405788866d18d082d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h2 style=\"color: silver\" class=\"text-center\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New"), "html", null, true);
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
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Waiting List"), "html", null, true);
        echo "</th>
                    <td>";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attente", array()), 'widget');
        echo " </td>
                </tr>
               
                <tr>                   
                    <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
                    <td>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
        echo "</th>
                    <td>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evenement", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
            </table>
            <table>
                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                <th class=\"col-sm-3\">   
                    <a href=\"\">
                        <button type=\"submit\" class=\"btn btn-success fa fa-plus\"> ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create"), "html", null, true);
        echo "</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_search");
        echo "\">
                <button type=\"button\" class=\"btn btn-default fa fa-list\"> ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Tickets"), "html", null, true);
        echo "</button>
            </a>
        </th>              

    </table>                        

";
        
        $__internal_fbe99ea4a5ff22ae1e13966fc8a0bc3274156204572a26405788866d18d082d3->leave($__internal_fbe99ea4a5ff22ae1e13966fc8a0bc3274156204572a26405788866d18d082d3_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Billet/admin_billet_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 58,  184 => 57,  175 => 51,  169 => 48,  163 => 45,  158 => 43,  154 => 42,  148 => 39,  144 => 38,  137 => 34,  133 => 33,  127 => 30,  123 => 29,  117 => 26,  113 => 25,  107 => 22,  103 => 21,  97 => 18,  93 => 17,  86 => 13,  82 => 12,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    {{ 'Tickets Management'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-plus\"></i> {{ 'Add'|trans }}
{% endblock operation %}
{% block body -%}
    <h2 style=\"color: silver\" class=\"text-center\"><b>{{ 'New'|trans }} {{ 'Ticket'|trans }}</b></h2>    
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
                    <th>{{ 'Waiting List'|trans }}</th>
                    <td>{{ form_widget(form.attente) }} </td>
                </tr>
               
                <tr>                   
                    <th>{{ 'Creation date'|trans }}</th>
                    <td>{{ form_widget(form.dateCreation) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'Event'|trans }}</th>
                    <td>{{ form_widget(form.evenement) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datecreation|date('Y-m-d H:i:s') }}\">
            </table>
            <table>
                {{ form_widget(form._token) }}
                <th class=\"col-sm-3\">   
                    <a href=\"\">
                        <button type=\"submit\" class=\"btn btn-success fa fa-plus\"> {{ 'Create'|trans}}</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"{{ path('admin_billet_search') }}\">
                <button type=\"button\" class=\"btn btn-default fa fa-list\"> {{ 'All Tickets'|trans }}</button>
            </a>
        </th>              

    </table>                        

{% endblock %}
", "@OrionEvent/Admin_Billet/admin_billet_new.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Billet\\admin_billet_new.html.twig");
    }
}
