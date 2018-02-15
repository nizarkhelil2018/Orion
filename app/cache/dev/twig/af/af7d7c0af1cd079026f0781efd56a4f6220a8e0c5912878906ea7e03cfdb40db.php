<?php

/* OrionEventBundle:Admin_Type:admin_type_search.html.twig */
class __TwigTemplate_3937660720f1fbf9b8eb7120dc3ddfcef2d0e4e9fcfc9da1268d4f01d42d4e7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Type:admin_type_search.html.twig", 1);
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
        $__internal_ff28de814800255633cc4842bd4e53cafb3c67db2cf61b71659f18b4c1a4f06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff28de814800255633cc4842bd4e53cafb3c67db2cf61b71659f18b4c1a4f06e->enter($__internal_ff28de814800255633cc4842bd4e53cafb3c67db2cf61b71659f18b4c1a4f06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Type:admin_type_search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff28de814800255633cc4842bd4e53cafb3c67db2cf61b71659f18b4c1a4f06e->leave($__internal_ff28de814800255633cc4842bd4e53cafb3c67db2cf61b71659f18b4c1a4f06e_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_8a063b58b5053529ec30a33452641c4827b56b184b8649f7383e6fbe44fcd6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a063b58b5053529ec30a33452641c4827b56b184b8649f7383e6fbe44fcd6f2->enter($__internal_8a063b58b5053529ec30a33452641c4827b56b184b8649f7383e6fbe44fcd6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Types Management"), "html", null, true);
        echo "
";
        
        $__internal_8a063b58b5053529ec30a33452641c4827b56b184b8649f7383e6fbe44fcd6f2->leave($__internal_8a063b58b5053529ec30a33452641c4827b56b184b8649f7383e6fbe44fcd6f2_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_77ace8846a742f10b37f46efa84e6de4e641773e43b48e602c04449d949436be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ace8846a742f10b37f46efa84e6de4e641773e43b48e602c04449d949436be->enter($__internal_77ace8846a742f10b37f46efa84e6de4e641773e43b48e602c04449d949436be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "
";
        
        $__internal_77ace8846a742f10b37f46efa84e6de4e641773e43b48e602c04449d949436be->leave($__internal_77ace8846a742f10b37f46efa84e6de4e641773e43b48e602c04449d949436be_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7bbcd991259eb2b9118d43b806fe8d1af3c324e77d292a9fedeebe207fed383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bbcd991259eb2b9118d43b806fe8d1af3c324e77d292a9fedeebe207fed383->enter($__internal_f7bbcd991259eb2b9118d43b806fe8d1af3c324e77d292a9fedeebe207fed383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<form method=\"POST\" action=\"\" class=\"text-center\">
        <table class=\"text-left\">
            <tr>
                <td class=\"col-sm-3\">
                    <label>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</label>
                    <input type='text' name=\"input_libellet\" />
                </td>
                <td class=\"col-sm-3\">
                    <label>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</label>
                    <input type='text' name=\"input_description\" />
                </td>
                <td class=\"col-sm-3\">
                    <label>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</label>
                    <ul style=\"list-style-type:none\">
                        <li>
                            <input type=\"checkbox\" name=\"input_etat\" value=\"1\"> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
        echo "
                        </li>
                        <li>
                            <input type=\"checkbox\" name=\"input_etat\" value=\"0\" > ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Passive"), "html", null, true);
        echo "
                        </li>
                </td> 
            </tr>
        </table>
        <input type=\"submit\" class=\"btn btn-success fa fa-search\" name=\"rechercher\" value=";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo ">
    </form></br>

    ";
        // line 36
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 37
            echo "        <div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Themes Found"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 39
            echo "        <table class=\"table table-bordered\">
            <thead>            
                <tr class=\"info\">
                    <th class=\"col-sm-1 text-center\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-6 text-center\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-1 text-center\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-1 text-center\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-1 text-center\">";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification date"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-1 text-center\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
            echo "</th>
                </tr>            
            </thead>
            <tbody >
                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 52
                echo "                    <tr>
                        <td class=\"text-info\"><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
                echo "</b></a></td>
                        <td class=\"text-justify\"> ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
                echo "</td>
                        <td> <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                ";
                // line 56
                if (($this->getAttribute($context["entity"], "etat", array()) == 1)) {
                    echo "<p class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
                    echo "</p>
                                <a href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_deactivate", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-thumbs-o-down text-danger fa-2x\">
                                        ";
                    // line 59
                    echo "                                    </a>
                                ";
                } else {
                    // line 60
                    echo "<p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Passive"), "html", null, true);
                    echo "</p>
                                <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_activate", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-thumbs-o-up text-success fa-2x\">
                                        ";
                    // line 63
                    echo "                                    </a>
                                ";
                }
                // line 65
                echo "                                <a>
                                    </td>
                                    <td>";
                // line 67
                if ($this->getAttribute($context["entity"], "dateCreation", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "d/m/Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "H:i"), "html", null, true);
                }
                echo "</td>
                                    <td>";
                // line 68
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
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-desktop text-primary fa-2x\">
                                            ";
                // line 72
                echo "                                        </a>
                                        </br>
                                        <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-wrench text-warning fa-2x\">
                                           ";
                // line 76
                echo "                                        </a>

                                    </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "   
                                </tbody>
                                </table>

                            ";
        }
        // line 85
        echo "                        ";
        
        $__internal_f7bbcd991259eb2b9118d43b806fe8d1af3c324e77d292a9fedeebe207fed383->leave($__internal_f7bbcd991259eb2b9118d43b806fe8d1af3c324e77d292a9fedeebe207fed383_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Type:admin_type_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 85,  255 => 80,  245 => 76,  241 => 74,  237 => 72,  233 => 70,  222 => 68,  212 => 67,  208 => 65,  204 => 63,  200 => 61,  195 => 60,  191 => 59,  187 => 57,  181 => 56,  177 => 55,  173 => 54,  167 => 53,  164 => 52,  160 => 51,  153 => 47,  149 => 46,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  128 => 39,  122 => 37,  120 => 36,  114 => 33,  106 => 28,  100 => 25,  94 => 22,  87 => 18,  80 => 14,  74 => 10,  68 => 8,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
    <i class=\"fa fa-search\"></i> {{ 'Search'|trans }}
{% endblock operation %}
{% block body -%}

        <form method=\"POST\" action=\"\" class=\"text-center\">
        <table class=\"text-left\">
            <tr>
                <td class=\"col-sm-3\">
                    <label>{{ 'Wording'|trans }}</label>
                    <input type='text' name=\"input_libellet\" />
                </td>
                <td class=\"col-sm-3\">
                    <label>{{ 'Description'|trans }}</label>
                    <input type='text' name=\"input_description\" />
                </td>
                <td class=\"col-sm-3\">
                    <label>{{ 'State'|trans }}</label>
                    <ul style=\"list-style-type:none\">
                        <li>
                            <input type=\"checkbox\" name=\"input_etat\" value=\"1\"> {{ 'Active'|trans }}
                        </li>
                        <li>
                            <input type=\"checkbox\" name=\"input_etat\" value=\"0\" > {{ 'Passive'|trans }}
                        </li>
                </td> 
            </tr>
        </table>
        <input type=\"submit\" class=\"btn btn-success fa fa-search\" name=\"rechercher\" value={{ 'Search'|trans }}>
    </form></br>

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
                        <td class=\"text-info\"><a href=\"{{ path('admin_type_show', { 'id': entity.id }) }}\"><b>{{ entity.libelle }}</b></a></td>
                        <td class=\"text-justify\"> {{entity.description}}</td>
                        <td> <a href=\"{{ path('admin_type_edit', { 'id': entity.id }) }}\">
                                {% if entity.etat == 1 %}<p class=\"text-success\">{{ 'Active'|trans }}</p>
                                <a href=\"{{ path('admin_type_deactivate', { 'id': entity.id }) }}\" class=\"fa fa-thumbs-o-down text-danger fa-2x\">
                                        {#<button type=\"button\" class=\"btn-xs  btn-group fa fa-thumbs-o-down text-danger\"> {{ 'Deactivate'|trans }}</button>#}
                                    </a>
                                {% else %}<p class=\"text-danger\">{{ 'Passive'|trans }}</p>
                                <a href=\"{{ path('admin_type_activate', { 'id': entity.id }) }}\" class=\"fa fa-thumbs-o-up text-success fa-2x\">
                                        {#<button type=\"button\" class=\"btn-xs btn-group fa fa-thumbs-o-up text-success\"> {{ 'Activate'|trans }}</button>#}
                                    </a>
                                {% endif %}
                                <a>
                                    </td>
                                    <td>{% if entity.dateCreation %}{{ entity.dateCreation|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateCreation|date('H:i') }}{% endif %}</td>
                                    <td>{% if entity.dateModification %}{{ entity.dateModification|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateModification|date('H:i') }}{% endif %}</td>
                                    <td>
                                        <a href=\"{{ path('admin_type_show', { 'id': entity.id }) }}\" class=\"fa fa-desktop text-primary fa-2x\">
                                            {#<button type=\"button\" class=\"btn-xs  btn-group fa fa-desktop text-primary\"> {{ 'Display'|trans }}</button>#}
                                        </a>
                                        </br>
                                        <a href=\"{{ path('admin_type_edit', { 'id': entity.id }) }}\" class=\"fa fa-wrench text-warning fa-2x\">
                                           {# <button type=\"button\" class=\"btn-xs  btn-group fa fa-wrench text-warning\"> {{ 'Edit'|trans }}</button>#}
                                        </a>

                                    </td>
                                    </tr>
                                {% endfor %}   
                                </tbody>
                                </table>

                            {% endif %}
                        {% endblock body %}                                                
", "OrionEventBundle:Admin_Type:admin_type_search.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Type/admin_type_search.html.twig");
    }
}
