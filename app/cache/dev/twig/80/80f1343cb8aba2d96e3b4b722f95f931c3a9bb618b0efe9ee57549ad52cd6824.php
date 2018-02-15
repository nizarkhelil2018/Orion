<?php

/* OrionEventBundle:Admin_Theme:admin_theme_edit.html.twig */
class __TwigTemplate_25733007bec82dd1ae5a15683dfdfaaf0cd69f4bda07aa835901c24cee06c8b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Theme:admin_theme_edit.html.twig", 1);
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
        $__internal_9abb4032e2c09d50095b940034c2123c6b330ed4ab2e144e2554efcbc330f8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abb4032e2c09d50095b940034c2123c6b330ed4ab2e144e2554efcbc330f8fc->enter($__internal_9abb4032e2c09d50095b940034c2123c6b330ed4ab2e144e2554efcbc330f8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Theme:admin_theme_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9abb4032e2c09d50095b940034c2123c6b330ed4ab2e144e2554efcbc330f8fc->leave($__internal_9abb4032e2c09d50095b940034c2123c6b330ed4ab2e144e2554efcbc330f8fc_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_56dbf6c8b4eb8f42f30e604de155d41dbadf3b7da19cd48f6065f4d393079a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56dbf6c8b4eb8f42f30e604de155d41dbadf3b7da19cd48f6065f4d393079a78->enter($__internal_56dbf6c8b4eb8f42f30e604de155d41dbadf3b7da19cd48f6065f4d393079a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Themes Management"), "html", null, true);
        echo "
";
        
        $__internal_56dbf6c8b4eb8f42f30e604de155d41dbadf3b7da19cd48f6065f4d393079a78->leave($__internal_56dbf6c8b4eb8f42f30e604de155d41dbadf3b7da19cd48f6065f4d393079a78_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_2dacf27581974a25b01f0b77b6724007a3898d2903563972e0b63ea3e3cd5af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dacf27581974a25b01f0b77b6724007a3898d2903563972e0b63ea3e3cd5af3->enter($__internal_2dacf27581974a25b01f0b77b6724007a3898d2903563972e0b63ea3e3cd5af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-fw fa-wrench\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "
";
        
        $__internal_2dacf27581974a25b01f0b77b6724007a3898d2903563972e0b63ea3e3cd5af3->leave($__internal_2dacf27581974a25b01f0b77b6724007a3898d2903563972e0b63ea3e3cd5af3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c30b3d02925a15f39bed42368c70d052df03accbd98c47ea20bf2106ae63af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c30b3d02925a15f39bed42368c70d052df03accbd98c47ea20bf2106ae63af8->enter($__internal_8c30b3d02925a15f39bed42368c70d052df03accbd98c47ea20bf2106ae63af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo " </h3>
    <h1 style=\"color: blue\" class=\"text-center\"><b>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo "</b></h1>
    <table class=\"table-responsive\" >        
        ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "  
        <form class=\"well\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
            <table class=\"table table-condensed\">
                <tr>                   
                    <th class=\"col-sm-3\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</th>
                    <td>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libelle", array()), 'widget');
        echo " </td>
                </tr>                
                <tr>                   
                    <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
                    <td class=\"col-sm-9\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
                    <td>";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "etat", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
                    <td>";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCreation", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreation", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "\">
                <tr>                   
                    <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification date"), "html", null, true);
        echo "</th>
                    <td>";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateModification", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datemodification", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "\">

            </table>
            <table>
                ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "
                <th class=\"col-sm-3\">   
                    <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_search");
        echo "\">
                        <button type=\"submit\" class=\"btn btn-default fa fa-check\"> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo "</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_search");
        echo "\">
                <button type=\"button\" class=\"btn btn-default fa fa-list\"> ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Themes"), "html", null, true);
        echo "</button>
            </a>
        </th>
        <th>
            
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"text-danger\">
                ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
            </a>
        </th>
    </table>
";
        
        $__internal_8c30b3d02925a15f39bed42368c70d052df03accbd98c47ea20bf2106ae63af8->leave($__internal_8c30b3d02925a15f39bed42368c70d052df03accbd98c47ea20bf2106ae63af8_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Theme:admin_theme_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 59,  189 => 58,  181 => 53,  177 => 52,  168 => 46,  164 => 45,  159 => 43,  152 => 39,  147 => 37,  143 => 36,  138 => 34,  133 => 32,  129 => 31,  123 => 28,  119 => 27,  113 => 24,  109 => 23,  103 => 20,  99 => 19,  90 => 15,  86 => 14,  81 => 12,  74 => 11,  68 => 10,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
    {{ 'Themes Management'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-fw fa-wrench\"></i> {{ 'Edit'|trans }}
{% endblock operation %}
    
    
{% block body -%}    
    <h3>{{ 'Update'|trans }} {{ 'Theme'|trans }} </h3>
    <h1 style=\"color: blue\" class=\"text-center\"><b>{{entity.libelle}}</b></h1>
    <table class=\"table-responsive\" >        
        {{ form_start(edit_form) }}  
        <form class=\"well\" action=\"{{ path('admin_theme_edit', { 'id': entity.id }) }}\" method=\"post\" {{ form_enctype(edit_form) }}>
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
            <table class=\"table table-condensed\">
                <tr>                   
                    <th class=\"col-sm-3\">{{ 'Wording'|trans }}</th>
                    <td>{{ form_widget(edit_form.libelle) }} </td>
                </tr>                
                <tr>                   
                    <th>{{ 'Description'|trans }}</th>
                    <td class=\"col-sm-9\">{{ form_widget(edit_form.description) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'State'|trans }}</th>
                    <td>{{ form_widget(edit_form.etat) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'Creation date'|trans }}</th>
                    <td>{{ form_widget(edit_form.dateCreation) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datecreation|date('d/m/Y H:i:s') }}\">
                <tr>                   
                    <th>{{ 'Modification date'|trans }}</th>
                    <td>{{ form_widget(edit_form.dateModification) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datemodification|date('d/m/Y H:i:s') }}\">

            </table>
            <table>
                {{ form_widget(edit_form._token) }}
                <th class=\"col-sm-3\">   
                    <a href=\"{{ path('admin_theme_search') }}\">
                        <button type=\"submit\" class=\"btn btn-default fa fa-check\"> {{ 'Update'|trans}}</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"{{ path('admin_theme_search') }}\">
                <button type=\"button\" class=\"btn btn-default fa fa-list\"> {{ 'All Themes'|trans }}</button>
            </a>
        </th>
        <th>
            
            <a href=\"{{ path('admin_theme_delete', { 'id': entity.id }) }}\" class=\"text-danger\">
                {{ form(delete_form) }}
            </a>
        </th>
    </table>
{% endblock %}
", "OrionEventBundle:Admin_Theme:admin_theme_edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Theme/admin_theme_edit.html.twig");
    }
}
