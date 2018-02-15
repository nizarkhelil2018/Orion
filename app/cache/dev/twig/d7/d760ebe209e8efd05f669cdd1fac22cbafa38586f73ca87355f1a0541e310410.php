<?php

/* @OrionEvent/Admin_Type/admin_type_edit.html.twig */
class __TwigTemplate_fc2f383bbfda2e5ce000013d08a25f5a2f0ece43862fd760b11640ed72ae0efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Type/admin_type_edit.html.twig", 1);
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
        $__internal_8823525daa501fdabec4bc5c56b7170157074e5638d0373cb5b8ddfccbcb848f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8823525daa501fdabec4bc5c56b7170157074e5638d0373cb5b8ddfccbcb848f->enter($__internal_8823525daa501fdabec4bc5c56b7170157074e5638d0373cb5b8ddfccbcb848f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Type/admin_type_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8823525daa501fdabec4bc5c56b7170157074e5638d0373cb5b8ddfccbcb848f->leave($__internal_8823525daa501fdabec4bc5c56b7170157074e5638d0373cb5b8ddfccbcb848f_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_3c103a886434c51f3a2b168a5d7d865a63ab367b93320beba3d01a45bff94022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c103a886434c51f3a2b168a5d7d865a63ab367b93320beba3d01a45bff94022->enter($__internal_3c103a886434c51f3a2b168a5d7d865a63ab367b93320beba3d01a45bff94022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Types Management"), "html", null, true);
        echo "
";
        
        $__internal_3c103a886434c51f3a2b168a5d7d865a63ab367b93320beba3d01a45bff94022->leave($__internal_3c103a886434c51f3a2b168a5d7d865a63ab367b93320beba3d01a45bff94022_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_71992fe470d3acc66d3e4bf124c389d4efaaca8f1bc9387ff79be72bec98fc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71992fe470d3acc66d3e4bf124c389d4efaaca8f1bc9387ff79be72bec98fc87->enter($__internal_71992fe470d3acc66d3e4bf124c389d4efaaca8f1bc9387ff79be72bec98fc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-fw fa-wrench\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "
";
        
        $__internal_71992fe470d3acc66d3e4bf124c389d4efaaca8f1bc9387ff79be72bec98fc87->leave($__internal_71992fe470d3acc66d3e4bf124c389d4efaaca8f1bc9387ff79be72bec98fc87_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7e73ceedce7fecd2ee3dc635e03548ba1c99481f69faed04cb1207f0dd1718f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e73ceedce7fecd2ee3dc635e03548ba1c99481f69faed04cb1207f0dd1718f->enter($__internal_b7e73ceedce7fecd2ee3dc635e03548ba1c99481f69faed04cb1207f0dd1718f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h3> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo " : </h3>
    <h1 style=\"color: blue\" class=\"text-center\"><b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo "</b></h1>
    <table class=\"table-responsive\" >        
        ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "  
        <form class=\"well\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
            <table class=\"table table-condensed\">
                <tr>                   
                    <th class=\"col-sm-3\"> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo " </th>
                    <td>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libelle", array()), 'widget');
        echo " </td>
                </tr>                
                <tr>                   
                    <th> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo " </th>
                    <td class=\"col-sm-9\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo " </th>
                    <td>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "etat", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th> ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation Date"), "html", null, true);
        echo " </th>
                    <td>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCreation", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreation", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "\">
                <tr>                   
                    <th> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification Date"), "html", null, true);
        echo " </th>
                    <td>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateModification", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datemodification", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "\">

            </table>
            <table>
                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "
                <th class=\"col-sm-3\">   
                    <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_search");
        echo "\">
                        <button type=\"submit\" class=\"btn btn-default fa fa-check\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo "</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_search");
        echo "\">
                <button type=\"button\" class=\"btn btn-default fa fa-list\"> ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Types"), "html", null, true);
        echo " </button>
            </a>
        </th>
        <th>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"class=\"text-danger\">
                ";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
            </a>
        </th>
    </table>
";
        
        $__internal_b7e73ceedce7fecd2ee3dc635e03548ba1c99481f69faed04cb1207f0dd1718f->leave($__internal_b7e73ceedce7fecd2ee3dc635e03548ba1c99481f69faed04cb1207f0dd1718f_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Type/admin_type_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 57,  188 => 56,  181 => 52,  177 => 51,  168 => 45,  164 => 44,  159 => 42,  152 => 38,  147 => 36,  143 => 35,  138 => 33,  133 => 31,  129 => 30,  123 => 27,  119 => 26,  113 => 23,  109 => 22,  103 => 19,  99 => 18,  90 => 14,  86 => 13,  81 => 11,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    {{ 'Types Management'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-fw fa-wrench\"></i> {{ 'Edit'|trans }}
{% endblock operation %}
{% block body -%} 
    <h3> {{ 'Update'|trans }} {{ 'Type'|trans }} : </h3>
    <h1 style=\"color: blue\" class=\"text-center\"><b>{{entity.libelle}}</b></h1>
    <table class=\"table-responsive\" >        
        {{ form_start(edit_form) }}  
        <form class=\"well\" action=\"{{ path('admin_type_edit', { 'id': entity.id }) }}\" method=\"post\" {{ form_enctype(edit_form) }}>
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
            <table class=\"table table-condensed\">
                <tr>                   
                    <th class=\"col-sm-3\"> {{ 'Wording'|trans }} </th>
                    <td>{{ form_widget(edit_form.libelle) }} </td>
                </tr>                
                <tr>                   
                    <th> {{ 'Description'|trans }} </th>
                    <td class=\"col-sm-9\">{{ form_widget(edit_form.description) }} </td>
                </tr>
                <tr>                   
                    <th> {{ 'State'|trans }} </th>
                    <td>{{ form_widget(edit_form.etat) }} </td>
                </tr>
                <tr>                   
                    <th> {{ 'Creation Date'|trans }} </th>
                    <td>{{ form_widget(edit_form.dateCreation) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datecreation|date('d/m/Y H:i:s') }}\">
                <tr>                   
                    <th> {{ 'Modification Date'|trans }} </th>
                    <td>{{ form_widget(edit_form.dateModification) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datemodification|date('d/m/Y H:i:s') }}\">

            </table>
            <table>
                {{ form_widget(edit_form._token) }}
                <th class=\"col-sm-3\">   
                    <a href=\"{{ path('admin_type_search') }}\">
                        <button type=\"submit\" class=\"btn btn-default fa fa-check\"> {{ 'Update'|trans}}</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"{{ path('admin_type_search') }}\">
                <button type=\"button\" class=\"btn btn-default fa fa-list\"> {{ 'All Types'|trans }} </button>
            </a>
        </th>
        <th>
            <a href=\"{{ path('admin_type_delete', { 'id': entity.id }) }}\"class=\"text-danger\">
                {{ form(delete_form) }}
            </a>
        </th>
    </table>
{% endblock %}
", "@OrionEvent/Admin_Type/admin_type_edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Type\\admin_type_edit.html.twig");
    }
}
