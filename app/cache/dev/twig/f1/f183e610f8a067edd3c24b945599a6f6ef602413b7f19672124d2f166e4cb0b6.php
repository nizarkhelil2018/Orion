<?php

/* OrionEventBundle:Admin_Theme:admin_theme_search.html.twig */
class __TwigTemplate_6b55a25b5690d28682bc94999b7111a4630e213b3961bf0ce906758ea0157925 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Theme:admin_theme_search.html.twig", 1);
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
        $__internal_3932d726385a1030de89ff3b51f1744a0ea6a3237bc54602b29d8231ce66b7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3932d726385a1030de89ff3b51f1744a0ea6a3237bc54602b29d8231ce66b7d4->enter($__internal_3932d726385a1030de89ff3b51f1744a0ea6a3237bc54602b29d8231ce66b7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Theme:admin_theme_search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3932d726385a1030de89ff3b51f1744a0ea6a3237bc54602b29d8231ce66b7d4->leave($__internal_3932d726385a1030de89ff3b51f1744a0ea6a3237bc54602b29d8231ce66b7d4_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_f205ed9ef3aeaf45e0c592672368e14d1c1598751ba10226c8fd548725c6ce95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f205ed9ef3aeaf45e0c592672368e14d1c1598751ba10226c8fd548725c6ce95->enter($__internal_f205ed9ef3aeaf45e0c592672368e14d1c1598751ba10226c8fd548725c6ce95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Themes Management"), "html", null, true);
        echo "
";
        
        $__internal_f205ed9ef3aeaf45e0c592672368e14d1c1598751ba10226c8fd548725c6ce95->leave($__internal_f205ed9ef3aeaf45e0c592672368e14d1c1598751ba10226c8fd548725c6ce95_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_02d3ed020e95258c34e3c1df24cebe7ed3135761c8c80efa2e29811b9a22788d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d3ed020e95258c34e3c1df24cebe7ed3135761c8c80efa2e29811b9a22788d->enter($__internal_02d3ed020e95258c34e3c1df24cebe7ed3135761c8c80efa2e29811b9a22788d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "
";
        
        $__internal_02d3ed020e95258c34e3c1df24cebe7ed3135761c8c80efa2e29811b9a22788d->leave($__internal_02d3ed020e95258c34e3c1df24cebe7ed3135761c8c80efa2e29811b9a22788d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5af3a5b51944efaa26fca8da27096287a654b8f4c059d303343a079b5d42a88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af3a5b51944efaa26fca8da27096287a654b8f4c059d303343a079b5d42a88e->enter($__internal_5af3a5b51944efaa26fca8da27096287a654b8f4c059d303343a079b5d42a88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<form method=\"POST\" action=\"\" class=\"text-center\">
        <table class=\"text-left\">
            <tr>
                <td class=\"col-sm-3\">
                    <label>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</label>
                    <input type='text' name=\"input_libellet\" />
                </td>
                <td class=\"col-sm-3\">
                    <label>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</label>
                    <input type='text' name=\"input_description\" />
                </td>
                <td class=\"col-sm-3\">
                    <label>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</label>
                    <ul style=\"list-style-type:none\">
                        <li>
                            <input type=\"checkbox\" name=\"input_etat\" value=\"1\"> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
        echo "
                        </li>
                        <li>
                            <input type=\"checkbox\" name=\"input_etat\" value=\"0\" > ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Passive"), "html", null, true);
        echo "
                        </li>
                </td> 
            </tr>
        </table>
        <input type=\"submit\" class=\"btn btn-success fa fa-search\" name=\"rechercher\" value=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo ">
    </form></br>
    ";
        // line 34
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 35
            echo "        <div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Themes Found"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 37
            echo "        <table class=\"table table-bordered\">
            <thead>            
                <tr class=\"info\">
                    <th class=\"col-sm-1 text-center\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-6 text-center\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-1 text-center\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-1 text-center\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-1 text-center\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification date"), "html", null, true);
            echo "</th>
                    <th class=\"col-sm-1 text-center\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
            echo "</th>
                </tr>            
            </thead>
            <tbody >
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 50
                echo "                    <tr>
                        <td class=\"text-info\"><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
                echo "</b></a></td>
                        <td class=\"text-justify\"> ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
                echo "</td>
                        <td> <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                ";
                // line 54
                if (($this->getAttribute($context["entity"], "etat", array()) == 1)) {
                    echo "<p class=\"text-success \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
                    echo "</p></br>
                                <a href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_deactivate", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-thumbs-o-down text-danger fa-2x\">
                                        ";
                    // line 57
                    echo "                                    </a>
                                ";
                } else {
                    // line 58
                    echo "<p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Passive"), "html", null, true);
                    echo "</p>
                                <a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_activate", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"fa fa-thumbs-o-up text-success fa-2x\">
                                        ";
                    // line 61
                    echo "                                    </a>
                                ";
                }
                // line 63
                echo "                                <a>
                                    </td>
                                    <td>";
                // line 65
                if ($this->getAttribute($context["entity"], "dateCreation", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "d/m/Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "H:i"), "html", null, true);
                }
                echo "</td>
                                    <td>";
                // line 66
                if ($this->getAttribute($context["entity"], "dateModification", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateModification", array()), "d/m/Y à H:i"), "html", null, true);
                }
                echo "</td>
                                    <td>
                                        <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-desktop text-primary fa-2x\">
                                            ";
                // line 70
                echo "                                        </a>
                                        </br>
                                        <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-wrench text-warning fa-2x\">
                                            ";
                // line 74
                echo "                                        </a>
                                                                             
                                    </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "   
                                </tbody>
                                </table>

                            ";
        }
        // line 83
        echo "                        ";
        
        $__internal_5af3a5b51944efaa26fca8da27096287a654b8f4c059d303343a079b5d42a88e->leave($__internal_5af3a5b51944efaa26fca8da27096287a654b8f4c059d303343a079b5d42a88e_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Theme:admin_theme_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 83,  250 => 78,  240 => 74,  236 => 72,  232 => 70,  228 => 68,  221 => 66,  211 => 65,  207 => 63,  203 => 61,  199 => 59,  194 => 58,  190 => 57,  186 => 55,  180 => 54,  176 => 53,  172 => 52,  166 => 51,  163 => 50,  159 => 49,  152 => 45,  148 => 44,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  127 => 37,  121 => 35,  119 => 34,  114 => 32,  106 => 27,  100 => 24,  94 => 21,  87 => 17,  80 => 13,  74 => 9,  68 => 8,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
                        <td class=\"text-info\"><a href=\"{{ path('admin_theme_show', { 'id': entity.id }) }}\"><b>{{ entity.libelle }}</b></a></td>
                        <td class=\"text-justify\"> {{entity.description}}</td>
                        <td> <a href=\"{{ path('admin_theme_edit', { 'id': entity.id }) }}\">
                                {% if entity.etat == 1 %}<p class=\"text-success \">{{ 'Active'|trans }}</p></br>
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
                                    <td>{% if entity.dateModification %}{{ entity.dateModification|date('d/m/Y à H:i') }}{% endif %}</td>
                                    <td>
                                        <a href=\"{{ path('admin_theme_show', { 'id': entity.id }) }}\" class=\"fa fa-desktop text-primary fa-2x\">
                                            {#<button type=\"button\" class=\"btn-xs t btn-group fa fa-desktop text-primary\"> {{ 'Display'|trans }}</button>#}
                                        </a>
                                        </br>
                                        <a href=\"{{ path('admin_theme_edit', { 'id': entity.id }) }}\" class=\"fa fa-wrench text-warning fa-2x\">
                                            {#<button type=\"button\" class=\"btn-xs  btn-group fa fa-wrench text-warning\"> {{ 'Edit'|trans }}</button>#}
                                        </a>
                                                                             
                                    </td>
                                    </tr>
                                {% endfor %}   
                                </tbody>
                                </table>

                            {% endif %}
                        {% endblock body %}                                                
", "OrionEventBundle:Admin_Theme:admin_theme_search.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Theme/admin_theme_search.html.twig");
    }
}
