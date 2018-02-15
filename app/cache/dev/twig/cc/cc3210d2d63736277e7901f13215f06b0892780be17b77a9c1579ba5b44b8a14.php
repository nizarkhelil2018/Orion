<?php

/* OrionEventBundle:Admin_Theme:admin_theme_show.html.twig */
class __TwigTemplate_7a30ab4736705b59f3a9f042ab608f70990ebd73adc67e99073bea6ef4d41c1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Theme:admin_theme_show.html.twig", 1);
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
        $__internal_f1ebe7c25dd74f90eaae45b7572108c07bc8da21098e75f6d911f38f629a24eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ebe7c25dd74f90eaae45b7572108c07bc8da21098e75f6d911f38f629a24eb->enter($__internal_f1ebe7c25dd74f90eaae45b7572108c07bc8da21098e75f6d911f38f629a24eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Theme:admin_theme_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ebe7c25dd74f90eaae45b7572108c07bc8da21098e75f6d911f38f629a24eb->leave($__internal_f1ebe7c25dd74f90eaae45b7572108c07bc8da21098e75f6d911f38f629a24eb_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_010afc97c55bbbb2378c8bdd22c526ee0f2572c8865cbba04a23e483c93a157f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010afc97c55bbbb2378c8bdd22c526ee0f2572c8865cbba04a23e483c93a157f->enter($__internal_010afc97c55bbbb2378c8bdd22c526ee0f2572c8865cbba04a23e483c93a157f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Themes Management"), "html", null, true);
        echo "
";
        
        $__internal_010afc97c55bbbb2378c8bdd22c526ee0f2572c8865cbba04a23e483c93a157f->leave($__internal_010afc97c55bbbb2378c8bdd22c526ee0f2572c8865cbba04a23e483c93a157f_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_401f7f9c079855553675221065ea5fb8c2bd6236ebcb4dfa6fa1e960976f7a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401f7f9c079855553675221065ea5fb8c2bd6236ebcb4dfa6fa1e960976f7a68->enter($__internal_401f7f9c079855553675221065ea5fb8c2bd6236ebcb4dfa6fa1e960976f7a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-fw fa-desktop\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display"), "html", null, true);
        echo "
";
        
        $__internal_401f7f9c079855553675221065ea5fb8c2bd6236ebcb4dfa6fa1e960976f7a68->leave($__internal_401f7f9c079855553675221065ea5fb8c2bd6236ebcb4dfa6fa1e960976f7a68_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb4664e2e1501d4fbf353f6c20207df0963fd92260e87453d4675de7d11d87eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4664e2e1501d4fbf353f6c20207df0963fd92260e87453d4675de7d11d87eb->enter($__internal_eb4664e2e1501d4fbf353f6c20207df0963fd92260e87453d4675de7d11d87eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div>
    <p >
    <h3>
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo " : <div class=\"text-center\" style=\"color: blue\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo "</div>
    </h3>
</p>
</div>
<div class=\" col-sm-12\">
    <table class=\"table table- table-bordered\">
        <tbody align=\"left\">
            <tr>
                <th class=\"text-info col-sm-2\">Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                <td rowspan=\"5\" class=\"col-sm-2\">
                    <ul style=\"list-style-type:none\">
                        <li>
                            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"text-warning fa fa-wrench fa-2x\">
                                ";
        // line 28
        echo "                            </a>
                        </li>
                        </br>
                        <li class=\"text-danger\"> 
                            ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <a class=\"btn-danger \" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_search");
        echo "\">
                            </a>           
                            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
                <td class=\"text-justify\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
                <td>
                    ";
        // line 51
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 1)) {
            echo "<p class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_deactivate", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"text-danger fa fa-close fa-2x\">
                        ";
            // line 54
            echo "                    </a> 
                    ";
        } else {
            // line 55
            echo "<p class=\"text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Passive"), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_activate", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"text-success fa fa-check fa-2x\">
                       ";
            // line 58
            echo "                    </a>
                    ";
        }
        // line 60
        echo "                </td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "d/m/Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\"> ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification date"), "html", null, true);
        echo " </th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateModification", array()), "d/m/Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateModification", array()), "H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            </td>
        </tbody>
    </table>
</div>

<ul class=\"pager\">
    <li class=\"previous\"><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_show", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) - 1))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous Theme"), "html", null, true);
        echo " </a></li>
    <li class=\"midtext\">
        <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_search");
        echo "\">
            <b> ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Themes"), "html", null, true);
        echo " </b>
        </a>
    </li>
    <li class=\"next\"><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_show", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) + 1))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next Theme"), "html", null, true);
        echo " </a></li>
</ul>

";
        
        $__internal_eb4664e2e1501d4fbf353f6c20207df0963fd92260e87453d4675de7d11d87eb->leave($__internal_eb4664e2e1501d4fbf353f6c20207df0963fd92260e87453d4675de7d11d87eb_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Theme:admin_theme_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 82,  228 => 79,  224 => 78,  217 => 76,  202 => 68,  198 => 67,  188 => 64,  184 => 63,  179 => 60,  175 => 58,  171 => 56,  166 => 55,  162 => 54,  158 => 52,  152 => 51,  147 => 49,  141 => 46,  137 => 45,  131 => 42,  127 => 41,  118 => 35,  113 => 33,  109 => 32,  103 => 28,  99 => 26,  92 => 22,  78 => 13,  73 => 10,  67 => 9,  57 => 7,  51 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
<i class=\"fa fa-fw fa-desktop\"></i> {{ 'Display'|trans }}
{% endblock operation %}
{% block body -%}
<div>
    <p >
    <h3>
        {{ 'Theme'|trans }} : <div class=\"text-center\" style=\"color: blue\">{{entity.libelle}}</div>
    </h3>
</p>
</div>
<div class=\" col-sm-12\">
    <table class=\"table table- table-bordered\">
        <tbody align=\"left\">
            <tr>
                <th class=\"text-info col-sm-2\">Id</th>
                <td>{{ entity.id }}</td>
                <td rowspan=\"5\" class=\"col-sm-2\">
                    <ul style=\"list-style-type:none\">
                        <li>
                            <a href=\"{{ path('admin_theme_edit', { 'id': entity.id }) }}\" class=\"text-warning fa fa-wrench fa-2x\">
                                {#<button type=\"button\" class=\"btn-xs text-warning fa fa-wrench\"> {{ 'Edit'|trans }}</button>#}
                            </a>
                        </li>
                        </br>
                        <li class=\"text-danger\"> 
                            {{ form_start(delete_form) }}
                            <a class=\"btn-danger \" href=\"{{ path('admin_theme_search') }}\">
                            </a>           
                            {{ form_end(delete_form) }}
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Wording'|trans }}</th>
                <td>{{ entity.libelle }}</td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Description'|trans }}</th>
                <td class=\"text-justify\">{{ entity.description }}</td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'State'|trans }}</th>
                <td>
                    {% if entity.etat == 1 %}<p class=\"text-success\">{{ 'Active'|trans }}</p>
                    <a href=\"{{ path('admin_theme_deactivate', { 'id': entity.id }) }}\" class=\"text-danger fa fa-close fa-2x\">
                        {#<button type=\"button\" class=\"btn-xs text-danger fa fa-close\"> {{ 'Deactivate'|trans }}</button>#}
                    </a> 
                    {% else %}<p class=\"text-danger\"> {{ 'Passive'|trans }}</p>
                    <a href=\"{{ path('admin_theme_activate', { 'id': entity.id }) }}\" class=\"text-success fa fa-check fa-2x\">
                       {# <button type=\"button\" class=\"btn-xs text-success fa fa-check\"> {{ 'Activate'|trans }}</button>#}
                    </a>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Creation date'|trans }}</th>
                <td>{{ entity.dateCreation|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateCreation|date('H:i:s') }}</td>
            </tr>
            <tr>
                <th class=\"text-info\"> {{ 'Modification date'|trans }} </th>
                <td>{{ entity.dateModification|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateModification|date('H:i:s') }}</td>
            </tr>
            </td>
        </tbody>
    </table>
</div>

<ul class=\"pager\">
    <li class=\"previous\"><a href=\"{{ path('admin_theme_show', { 'id': entity.id - 1 }) }}\"> {{ 'Previous Theme'|trans }} </a></li>
    <li class=\"midtext\">
        <a href=\"{{ path('admin_theme_search') }}\">
            <b> {{ 'All Themes'|trans }} </b>
        </a>
    </li>
    <li class=\"next\"><a href=\"{{ path('admin_theme_show', { 'id': entity.id + 1 }) }}\"> {{ 'Next Theme'|trans }} </a></li>
</ul>

{% endblock %}
", "OrionEventBundle:Admin_Theme:admin_theme_show.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Theme/admin_theme_show.html.twig");
    }
}
