<?php

/* @OrionEvent/Admin_Type/admin_type_index.html.twig */
class __TwigTemplate_c3db42dc1812b899eee40b887e433172a485b22463d6bbd812c33e3310aafd42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Type/admin_type_index.html.twig", 1);
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
        $__internal_72dc856563b008d83c1795bad892c5be6d500f8ca0253a95e39288959db1a61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72dc856563b008d83c1795bad892c5be6d500f8ca0253a95e39288959db1a61d->enter($__internal_72dc856563b008d83c1795bad892c5be6d500f8ca0253a95e39288959db1a61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Type/admin_type_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72dc856563b008d83c1795bad892c5be6d500f8ca0253a95e39288959db1a61d->leave($__internal_72dc856563b008d83c1795bad892c5be6d500f8ca0253a95e39288959db1a61d_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_2fafafaa65ca5b60123aa21e6c6eb240919b127e101d3f9480519d07ff17abf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fafafaa65ca5b60123aa21e6c6eb240919b127e101d3f9480519d07ff17abf6->enter($__internal_2fafafaa65ca5b60123aa21e6c6eb240919b127e101d3f9480519d07ff17abf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Types Management"), "html", null, true);
        echo "
";
        
        $__internal_2fafafaa65ca5b60123aa21e6c6eb240919b127e101d3f9480519d07ff17abf6->leave($__internal_2fafafaa65ca5b60123aa21e6c6eb240919b127e101d3f9480519d07ff17abf6_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_acdfa5b552281b23efd3ea5f7c76b4bf0fb853e0f24dec48e05fc62460359b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdfa5b552281b23efd3ea5f7c76b4bf0fb853e0f24dec48e05fc62460359b93->enter($__internal_acdfa5b552281b23efd3ea5f7c76b4bf0fb853e0f24dec48e05fc62460359b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_acdfa5b552281b23efd3ea5f7c76b4bf0fb853e0f24dec48e05fc62460359b93->leave($__internal_acdfa5b552281b23efd3ea5f7c76b4bf0fb853e0f24dec48e05fc62460359b93_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_df6bef3ae74dc54ec23a03ff56a1ebfd983dd11ed107b1c39b9fbfb0359f1d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6bef3ae74dc54ec23a03ff56a1ebfd983dd11ed107b1c39b9fbfb0359f1d38->enter($__internal_df6bef3ae74dc54ec23a03ff56a1ebfd983dd11ed107b1c39b9fbfb0359f1d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<h1 class=\"text-center text-primary\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Types List"), "html", null, true);
        echo "</b></h1>
    ";
        // line 12
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 13
            echo "        <div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Types Found"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 15
            echo "        <table class=\"table table-bordered\">
            <thead>            
                <tr class=\"info\">
                    <th class=\"col-sm-1 text-center\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-6 text-center\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-1 text-center\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-1 text-center\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation Date"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-1 text-center\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification Date"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-1 text-center\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
            echo "</th>
                </tr>            
            </thead>
            <tbody >
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 28
                echo "                    <tr>
                        <td class=\"text-info\"><a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
                echo "</b></a></td>
                        <td class=\"text-justify\"> ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
                echo "</td>
                        <td> <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                ";
                // line 32
                if (($this->getAttribute($context["entity"], "etat", array()) == 1)) {
                    echo "<p class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
                    echo "</p>
                                <a href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_deactivate", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-thumbs-o-down text-danger fa-2x\">
                                        ";
                    // line 35
                    echo "                                    </a>
                                ";
                } else {
                    // line 36
                    echo "<p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Passive"), "html", null, true);
                    echo "</p>
                                <a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_activate", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-thumbs-o-up text-success fa-2x\">
                                       ";
                    // line 39
                    echo "                                    </a>
                                ";
                }
                // line 41
                echo "                                <a>
                                    </td>
                                    <td>";
                // line 43
                if ($this->getAttribute($context["entity"], "dateCreation", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "d/m/Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "H:i"), "html", null, true);
                }
                echo "</td>
                                    <td>";
                // line 44
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
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-desktop text-primary fa-2x\">
                                            ";
                // line 48
                echo "                                        </a>
                                        </br>
                                        <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-wrench text-warning fa-2x\">
                                            ";
                // line 52
                echo "                                        </a>
                                    </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "   
                                </tbody>
                                </table>

                            ";
        }
        // line 60
        echo "                        ";
        
        $__internal_df6bef3ae74dc54ec23a03ff56a1ebfd983dd11ed107b1c39b9fbfb0359f1d38->leave($__internal_df6bef3ae74dc54ec23a03ff56a1ebfd983dd11ed107b1c39b9fbfb0359f1d38_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Type/admin_type_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 60,  213 => 55,  204 => 52,  200 => 50,  196 => 48,  192 => 46,  181 => 44,  171 => 43,  167 => 41,  163 => 39,  159 => 37,  154 => 36,  150 => 35,  146 => 33,  140 => 32,  136 => 31,  132 => 30,  126 => 29,  123 => 28,  119 => 27,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  87 => 15,  81 => 13,  79 => 12,  74 => 11,  68 => 10,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    <i class=\"fa fa-list\"></i> {{ 'List'|trans }}
{% endblock operation %}

{% block body -%}
    <h1 class=\"text-center text-primary\"><b>{{ 'Types List'|trans }}</b></h1>
    {% if entities is empty %}
        <div class=\"text-danger text-center\">{{ 'No Types Found'|trans }}</div>
    {% else %}
        <table class=\"table table-bordered\">
            <thead>            
                <tr class=\"info\">
                    <th class=\"col-sm-1 text-center\">{{ 'Wording'|trans }}</th>
                    <th class=\"col-sm-6 text-center\">{{ 'Description'|trans }}</th>
                    <th class=\"col-sm-1 text-center\">{{ 'State'|trans }}</th>
                    <th class=\"col-sm-1 text-center\">{{ 'Creation Date'|trans }}</th>
                    <th class=\"col-sm-1 text-center\">{{ 'Modification Date'|trans }}</th>
                    <th class=\"col-sm-1 text-center\">{{ 'Action'|trans }}</th>
                </tr>            
            </thead>
            <tbody >
                {% for entity in entities %}
                    <tr>
                        <td class=\"text-info\"><a href=\"{{ path('admin_type_show', { 'id': entity.id }) }}\"><b>{{ entity.libelle }}</b></a></td>
                        <td class=\"text-justify\"> {{entity.description}}</td>
                        <td> <a href=\"{{ path('admin_type_edit', { 'id': entity.id }) }}\">
                                {% if entity.etat == 1 %}<p class=\"text-success\">{{ 'Active'|trans }}</p>
                                <a href=\"{{ path('admin_type_deactivate', { 'id': entity.id }) }}\" class=\"fa fa-thumbs-o-down text-danger fa-2x\">
                                        {#<button type=\"button\" class=\"btn-xs  btn-group fa fa-thumbs-o-down text-danger\"> {{ 'Deactivate'|trans }}</button>#}
                                    </a>
                                {% else %}<p class=\"text-danger\">{{ 'Passive'|trans }}</p>
                                <a href=\"{{ path('admin_type_activate', { 'id': entity.id }) }}\" class=\"fa fa-thumbs-o-up text-success fa-2x\">
                                       {# <button type=\"button\" class=\"btn-xs btn-group fa fa-thumbs-o-up text-success\"> {{ 'Activate'|trans }}</button>#}
                                    </a>
                                {% endif %}
                                <a>
                                    </td>
                                    <td>{% if entity.dateCreation %}{{ entity.dateCreation|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateCreation|date('H:i') }}{% endif %}</td>
                                    <td>{% if entity.dateModification %}{{ entity.dateModification|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateModification|date('H:i') }}{% endif %}</td>
                                    <td>
                                        <a href=\"{{ path('admin_type_show', { 'id': entity.id }) }}\" class=\"fa fa-desktop text-primary fa-2x\">
                                            {#<button type=\"button\" class=\"btn-xs  btn-group fa fa-desktop text-primary\">  {{ 'Display'|trans }} </button>#}
                                        </a>
                                        </br>
                                        <a href=\"{{ path('admin_type_edit', { 'id': entity.id }) }}\" class=\"fa fa-wrench text-warning fa-2x\">
                                            {#<button type=\"button\" class=\"btn-xs  btn-group fa fa-wrench text-warning\">  {{ 'Edit'|trans }} </button>#}
                                        </a>
                                    </td>
                                    </tr>
                                {% endfor %}   
                                </tbody>
                                </table>

                            {% endif %}
                        {% endblock body %}                                                
", "@OrionEvent/Admin_Type/admin_type_index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Type\\admin_type_index.html.twig");
    }
}
