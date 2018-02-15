<?php

/* @OrionEvent/Admin_Theme/admin_theme_show.html.twig */
class __TwigTemplate_0dee3a25c5ec079907df922debba6aff27a28122b1a848a4cb911bdb65669f0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Theme/admin_theme_show.html.twig", 1);
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
        $__internal_393358f475a7df5bcbc70a8cb10ce98a7baacfafa26acf990d325d5294813842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393358f475a7df5bcbc70a8cb10ce98a7baacfafa26acf990d325d5294813842->enter($__internal_393358f475a7df5bcbc70a8cb10ce98a7baacfafa26acf990d325d5294813842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Theme/admin_theme_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_393358f475a7df5bcbc70a8cb10ce98a7baacfafa26acf990d325d5294813842->leave($__internal_393358f475a7df5bcbc70a8cb10ce98a7baacfafa26acf990d325d5294813842_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_5631a3a86b91bbb621a0ecbddac9a490b538f148ed52460dd8e05ef5a604ebed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5631a3a86b91bbb621a0ecbddac9a490b538f148ed52460dd8e05ef5a604ebed->enter($__internal_5631a3a86b91bbb621a0ecbddac9a490b538f148ed52460dd8e05ef5a604ebed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Themes Management"), "html", null, true);
        echo "
";
        
        $__internal_5631a3a86b91bbb621a0ecbddac9a490b538f148ed52460dd8e05ef5a604ebed->leave($__internal_5631a3a86b91bbb621a0ecbddac9a490b538f148ed52460dd8e05ef5a604ebed_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_486dc1031b1b7eb20b314a94ca630be3ab0e6df6906f2294b6baa607e9b185c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486dc1031b1b7eb20b314a94ca630be3ab0e6df6906f2294b6baa607e9b185c2->enter($__internal_486dc1031b1b7eb20b314a94ca630be3ab0e6df6906f2294b6baa607e9b185c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-fw fa-desktop\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display"), "html", null, true);
        echo "
";
        
        $__internal_486dc1031b1b7eb20b314a94ca630be3ab0e6df6906f2294b6baa607e9b185c2->leave($__internal_486dc1031b1b7eb20b314a94ca630be3ab0e6df6906f2294b6baa607e9b185c2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f93b76933edaf1d0a63ef8c57c68aa4197d7cc9e31cb1199de33ef3eaa0be6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93b76933edaf1d0a63ef8c57c68aa4197d7cc9e31cb1199de33ef3eaa0be6d3->enter($__internal_f93b76933edaf1d0a63ef8c57c68aa4197d7cc9e31cb1199de33ef3eaa0be6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f93b76933edaf1d0a63ef8c57c68aa4197d7cc9e31cb1199de33ef3eaa0be6d3->leave($__internal_f93b76933edaf1d0a63ef8c57c68aa4197d7cc9e31cb1199de33ef3eaa0be6d3_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Theme/admin_theme_show.html.twig";
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
", "@OrionEvent/Admin_Theme/admin_theme_show.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Theme\\admin_theme_show.html.twig");
    }
}
