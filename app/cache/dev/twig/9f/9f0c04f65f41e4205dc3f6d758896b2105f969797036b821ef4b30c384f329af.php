<?php

/* @OrionEvent/Admin_Theme/admin_theme_edit.html.twig */
class __TwigTemplate_e4d3d77e15670046d0a006cf0c20b7f83e104f36aeaa95525effa9596510a9be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Theme/admin_theme_edit.html.twig", 1);
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
        $__internal_8408725be936b1f3416a7dc0fb149724233d7a5ba95d6b8c3c331aa632cae45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8408725be936b1f3416a7dc0fb149724233d7a5ba95d6b8c3c331aa632cae45d->enter($__internal_8408725be936b1f3416a7dc0fb149724233d7a5ba95d6b8c3c331aa632cae45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Theme/admin_theme_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8408725be936b1f3416a7dc0fb149724233d7a5ba95d6b8c3c331aa632cae45d->leave($__internal_8408725be936b1f3416a7dc0fb149724233d7a5ba95d6b8c3c331aa632cae45d_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_22114b231d95f140ffce27e7ee169f7acdaf8b77d2249b41b30e280c15ad83a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22114b231d95f140ffce27e7ee169f7acdaf8b77d2249b41b30e280c15ad83a4->enter($__internal_22114b231d95f140ffce27e7ee169f7acdaf8b77d2249b41b30e280c15ad83a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Themes Management"), "html", null, true);
        echo "
";
        
        $__internal_22114b231d95f140ffce27e7ee169f7acdaf8b77d2249b41b30e280c15ad83a4->leave($__internal_22114b231d95f140ffce27e7ee169f7acdaf8b77d2249b41b30e280c15ad83a4_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_a0fc99ba3405f86b74e0b65473de4c2305006d85bd0dcb9397decd8cf6bd8e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0fc99ba3405f86b74e0b65473de4c2305006d85bd0dcb9397decd8cf6bd8e36->enter($__internal_a0fc99ba3405f86b74e0b65473de4c2305006d85bd0dcb9397decd8cf6bd8e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-fw fa-wrench\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "
";
        
        $__internal_a0fc99ba3405f86b74e0b65473de4c2305006d85bd0dcb9397decd8cf6bd8e36->leave($__internal_a0fc99ba3405f86b74e0b65473de4c2305006d85bd0dcb9397decd8cf6bd8e36_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd46c83c6b452eff78a864b0387570d17710c5e7c93fe21cd3ea64871335fbc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd46c83c6b452eff78a864b0387570d17710c5e7c93fe21cd3ea64871335fbc2->enter($__internal_bd46c83c6b452eff78a864b0387570d17710c5e7c93fe21cd3ea64871335fbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd46c83c6b452eff78a864b0387570d17710c5e7c93fe21cd3ea64871335fbc2->leave($__internal_bd46c83c6b452eff78a864b0387570d17710c5e7c93fe21cd3ea64871335fbc2_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Theme/admin_theme_edit.html.twig";
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
", "@OrionEvent/Admin_Theme/admin_theme_edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Theme\\admin_theme_edit.html.twig");
    }
}
