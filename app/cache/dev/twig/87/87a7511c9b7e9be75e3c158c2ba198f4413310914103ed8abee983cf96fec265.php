<?php

/* @OrionEvent/Admin_Theme/admin_theme_index.html.twig */
class __TwigTemplate_bad17a449e7f880c84e33a320bf219464d913550b5de2220ffe35922b3c3b4be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Theme/admin_theme_index.html.twig", 1);
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
        $__internal_660a283a3518d86a875ce5652653ec44e7dcc25b527ff153c527e87cc3fcb391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660a283a3518d86a875ce5652653ec44e7dcc25b527ff153c527e87cc3fcb391->enter($__internal_660a283a3518d86a875ce5652653ec44e7dcc25b527ff153c527e87cc3fcb391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Theme/admin_theme_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_660a283a3518d86a875ce5652653ec44e7dcc25b527ff153c527e87cc3fcb391->leave($__internal_660a283a3518d86a875ce5652653ec44e7dcc25b527ff153c527e87cc3fcb391_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_48034a28d765e025e78517be49abddd8adf60b509c382241ec699df742f21843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48034a28d765e025e78517be49abddd8adf60b509c382241ec699df742f21843->enter($__internal_48034a28d765e025e78517be49abddd8adf60b509c382241ec699df742f21843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Themes Management"), "html", null, true);
        echo "
";
        
        $__internal_48034a28d765e025e78517be49abddd8adf60b509c382241ec699df742f21843->leave($__internal_48034a28d765e025e78517be49abddd8adf60b509c382241ec699df742f21843_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_213b2d641c8f05012c2aaf55ea71ccbc2dc2fa782b1b30497fc3f52dad4ae516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213b2d641c8f05012c2aaf55ea71ccbc2dc2fa782b1b30497fc3f52dad4ae516->enter($__internal_213b2d641c8f05012c2aaf55ea71ccbc2dc2fa782b1b30497fc3f52dad4ae516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_213b2d641c8f05012c2aaf55ea71ccbc2dc2fa782b1b30497fc3f52dad4ae516->leave($__internal_213b2d641c8f05012c2aaf55ea71ccbc2dc2fa782b1b30497fc3f52dad4ae516_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_354060b68261b19187a4e894ee7ec8dfb58863e691fe5cb90a6df6d95890709e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354060b68261b19187a4e894ee7ec8dfb58863e691fe5cb90a6df6d95890709e->enter($__internal_354060b68261b19187a4e894ee7ec8dfb58863e691fe5cb90a6df6d95890709e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<h1 class=\"text-center text-primary\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Themes List"), "html", null, true);
        echo "</b></h1>

    ";
        // line 14
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 15
            echo "<div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Themes Found"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 17
            echo "<table class=\"table table-bordered\">
    <thead>            
        <tr class=\"info\">
            <th class=\"col-sm-1 text-center\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
            echo "</th>
            <th class=\"col-sm-6 text-center\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
            echo "</th>
            <th class=\"col-sm-1 text-center\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
            echo "</th>
            <th class=\"col-sm-1 text-center\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
            echo "</th>
            <th class=\"col-sm-1 text-center\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification date"), "html", null, true);
            echo "</th>
            <th class=\"col-sm-1 text-center\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
            echo "</th>
        </tr>            
    </thead>
    <tbody >
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 30
                echo "        <tr>
            <td class=\"text-info\"><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
                echo "</b></a></td>
            <td class=\"text-justify\"> ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
                echo "</td>
            <td> <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                ";
                // line 34
                if (($this->getAttribute($context["entity"], "etat", array()) == 1)) {
                    echo "<p class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
                    echo "</p>
                                <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_deactivate", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-thumbs-o-down text-danger fa-2x\">
                                        ";
                    // line 37
                    echo "                                    </a>
                                ";
                } else {
                    // line 38
                    echo "<p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Passive"), "html", null, true);
                    echo "</p>
                                <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_activate", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-thumbs-o-up text-success fa-2x\">
                                        ";
                    // line 41
                    echo "                                    </a>
                                ";
                }
                // line 43
                echo "                    <a>
                        </td>
                        <td>";
                // line 45
                if ($this->getAttribute($context["entity"], "dateCreation", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "d/m/Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "H:i"), "html", null, true);
                }
                echo "</td>
                        <td>";
                // line 46
                if ($this->getAttribute($context["entity"], "dateModification", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateModification", array()), "d/m/Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateModification", array()), "H:i"), "html", null, true);
                }
                echo "</td>
                        <td>
                            <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\" fa fa-desktop text-primary fa-2x\">
                                ";
                // line 50
                echo "                            </a>
                            </br>
                            <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-wrench text-warning fa-2x\">
                                ";
                // line 54
                echo "                            </a>
                            
                        </td>
                        </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "   
                        </tbody>
                        </table>

                            ";
        }
        // line 63
        echo "                        ";
        
        $__internal_354060b68261b19187a4e894ee7ec8dfb58863e691fe5cb90a6df6d95890709e->leave($__internal_354060b68261b19187a4e894ee7ec8dfb58863e691fe5cb90a6df6d95890709e_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Theme/admin_theme_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 63,  214 => 58,  204 => 54,  200 => 52,  196 => 50,  192 => 48,  181 => 46,  171 => 45,  167 => 43,  163 => 41,  159 => 39,  154 => 38,  150 => 37,  146 => 35,  140 => 34,  136 => 33,  132 => 32,  126 => 31,  123 => 30,  119 => 29,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  87 => 17,  81 => 15,  79 => 14,  73 => 12,  67 => 9,  57 => 7,  51 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
<i class=\"fa fa-list\"></i> {{ 'List'|trans }}
{% endblock operation %}
{% block body -%}


<h1 class=\"text-center text-primary\"><b>{{ 'Themes List'|trans }}</b></h1>

    {% if entities is empty %}
<div class=\"text-danger text-center\">{{ 'No Themes Found'|trans }}</div>
    {% else %}
<table class=\"table table-bordered\">
    <thead>            
        <tr class=\"info\">
            <th class=\"col-sm-1 text-center\">{{ 'Wording'|trans }}</th>
            <th class=\"col-sm-6 text-center\">{{ 'Description'|trans }}</th>
            <th class=\"col-sm-1 text-center\">{{ 'State'|trans }}</th>
            <th class=\"col-sm-1 text-center\">{{ 'Creation date'|trans }}</th>
            <th class=\"col-sm-1 text-center\">{{ 'Modification date'|trans }}</th>
            <th class=\"col-sm-1 text-center\">{{ 'Action'|trans }}</th>
        </tr>            
    </thead>
    <tbody >
                {% for entity in entities %}
        <tr>
            <td class=\"text-info\"><a href=\"{{ path('admin_theme_show', { 'id': entity.id }) }}\"><b>{{ entity.libelle }}</b></a></td>
            <td class=\"text-justify\"> {{entity.description}}</td>
            <td> <a href=\"{{ path('admin_theme_edit', { 'id': entity.id }) }}\">
                                {% if entity.etat == 1 %}<p class=\"text-success\">{{ 'Active'|trans }}</p>
                                <a href=\"{{ path('admin_theme_deactivate', { 'id': entity.id }) }}\" class=\"fa fa-thumbs-o-down text-danger fa-2x\">
                                        {#<button type=\"button\" class=\"btn-xs  btn-group fa fa-thumbs-o-down text-danger\"> {{ 'Deactivate'|trans }}</button>#}
                                    </a>
                                {% else %}<p class=\"text-danger\">{{ 'Passive'|trans }}</p>
                                <a href=\"{{ path('admin_theme_activate', { 'id': entity.id }) }}\" class=\"fa fa-thumbs-o-up text-success fa-2x\">
                                        {#<button type=\"button\" class=\"btn-xs btn-group fa fa-thumbs-o-up text-success\"> {{ 'Activate'|trans }}</button>#}
                                    </a>
                                {% endif %}
                    <a>
                        </td>
                        <td>{% if entity.dateCreation %}{{ entity.dateCreation|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateCreation|date('H:i') }}{% endif %}</td>
                        <td>{% if entity.dateModification %}{{ entity.dateModification|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateModification|date('H:i') }}{% endif %}</td>
                        <td>
                            <a href=\"{{ path('admin_theme_show', { 'id': entity.id }) }}\" class=\" fa fa-desktop text-primary fa-2x\">
                                {#<button type=\"button\" class=\"btn-xs btn-group fa fa-desktop text-primary\"> {{ 'Display'|trans }}</button>#}
                            </a>
                            </br>
                            <a href=\"{{ path('admin_theme_edit', { 'id': entity.id }) }}\" class=\"fa fa-wrench text-warning fa-2x\">
                                {#<button type=\"button\" class=\"btn-xs btn-group fa fa-wrench text-warning\"> {{ 'Edit'|trans }}</button>#}
                            </a>
                            
                        </td>
                        </tr>
                                {% endfor %}   
                        </tbody>
                        </table>

                            {% endif %}
                        {% endblock body %}                                                
", "@OrionEvent/Admin_Theme/admin_theme_index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Theme\\admin_theme_index.html.twig");
    }
}
