<?php

/* OrionEventBundle:Admin_Type:admin_type_index.html.twig */
class __TwigTemplate_698eab4fe1e4f22fd9e3f7b08d512f391cdae15e35a94004588e1493b5f66508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Type:admin_type_index.html.twig", 1);
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
        $__internal_bd95f9be6204ff082bb5ff50ae9906147ef4feb59c33e2370c6f67282dca7366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd95f9be6204ff082bb5ff50ae9906147ef4feb59c33e2370c6f67282dca7366->enter($__internal_bd95f9be6204ff082bb5ff50ae9906147ef4feb59c33e2370c6f67282dca7366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Type:admin_type_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd95f9be6204ff082bb5ff50ae9906147ef4feb59c33e2370c6f67282dca7366->leave($__internal_bd95f9be6204ff082bb5ff50ae9906147ef4feb59c33e2370c6f67282dca7366_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_c56d4504d1558a1b0e447babd4d3d4f601571233a7079a686f2ed6abdcf29d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56d4504d1558a1b0e447babd4d3d4f601571233a7079a686f2ed6abdcf29d7f->enter($__internal_c56d4504d1558a1b0e447babd4d3d4f601571233a7079a686f2ed6abdcf29d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Types Management"), "html", null, true);
        echo "
";
        
        $__internal_c56d4504d1558a1b0e447babd4d3d4f601571233a7079a686f2ed6abdcf29d7f->leave($__internal_c56d4504d1558a1b0e447babd4d3d4f601571233a7079a686f2ed6abdcf29d7f_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_d19833fad64e9c48e75f49b12404a9db272c2f6f075336dee2b33105acbb6b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19833fad64e9c48e75f49b12404a9db272c2f6f075336dee2b33105acbb6b13->enter($__internal_d19833fad64e9c48e75f49b12404a9db272c2f6f075336dee2b33105acbb6b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_d19833fad64e9c48e75f49b12404a9db272c2f6f075336dee2b33105acbb6b13->leave($__internal_d19833fad64e9c48e75f49b12404a9db272c2f6f075336dee2b33105acbb6b13_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f29e07bc9fbcc9c87888716291b5bbd4d7fefc73f9ce817725fdfc04dd0c2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f29e07bc9fbcc9c87888716291b5bbd4d7fefc73f9ce817725fdfc04dd0c2d8->enter($__internal_3f29e07bc9fbcc9c87888716291b5bbd4d7fefc73f9ce817725fdfc04dd0c2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3f29e07bc9fbcc9c87888716291b5bbd4d7fefc73f9ce817725fdfc04dd0c2d8->leave($__internal_3f29e07bc9fbcc9c87888716291b5bbd4d7fefc73f9ce817725fdfc04dd0c2d8_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Type:admin_type_index.html.twig";
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
", "OrionEventBundle:Admin_Type:admin_type_index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Type/admin_type_index.html.twig");
    }
}
