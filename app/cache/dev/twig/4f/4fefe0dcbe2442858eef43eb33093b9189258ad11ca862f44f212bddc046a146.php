<?php

/* @OrionEvent/Admin_Billet/admin_billet_search.html.twig */
class __TwigTemplate_b2fb984fe9fe590e1e0dd82686025db2ea9c2f4d312aa3fcb2b6dac912c3b562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Billet/admin_billet_search.html.twig", 1);
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
        $__internal_84ff67597451001658c517c4bdd666d00beee6c583cbdedbbd01c422ee4cee07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ff67597451001658c517c4bdd666d00beee6c583cbdedbbd01c422ee4cee07->enter($__internal_84ff67597451001658c517c4bdd666d00beee6c583cbdedbbd01c422ee4cee07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Billet/admin_billet_search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84ff67597451001658c517c4bdd666d00beee6c583cbdedbbd01c422ee4cee07->leave($__internal_84ff67597451001658c517c4bdd666d00beee6c583cbdedbbd01c422ee4cee07_prof);

    }

    // line 4
    public function block_module($context, array $blocks = array())
    {
        $__internal_f8494f24ecd3a4c28ba9f87b4edb662181124dcba38da4a6aa7358d51234be97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8494f24ecd3a4c28ba9f87b4edb662181124dcba38da4a6aa7358d51234be97->enter($__internal_f8494f24ecd3a4c28ba9f87b4edb662181124dcba38da4a6aa7358d51234be97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_f8494f24ecd3a4c28ba9f87b4edb662181124dcba38da4a6aa7358d51234be97->leave($__internal_f8494f24ecd3a4c28ba9f87b4edb662181124dcba38da4a6aa7358d51234be97_prof);

    }

    // line 7
    public function block_operation($context, array $blocks = array())
    {
        $__internal_cec0c266f3303a88333034ac365eadc6c1f4bf65f609ba85854518771019b50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec0c266f3303a88333034ac365eadc6c1f4bf65f609ba85854518771019b50a->enter($__internal_cec0c266f3303a88333034ac365eadc6c1f4bf65f609ba85854518771019b50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 8
        echo "    <i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "
";
        
        $__internal_cec0c266f3303a88333034ac365eadc6c1f4bf65f609ba85854518771019b50a->leave($__internal_cec0c266f3303a88333034ac365eadc6c1f4bf65f609ba85854518771019b50a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a517fb848bd7337f8bd2fb2a0068d61e5bfafe764f74f0c921f0a260531fe042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a517fb848bd7337f8bd2fb2a0068d61e5bfafe764f74f0c921f0a260531fe042->enter($__internal_a517fb848bd7337f8bd2fb2a0068d61e5bfafe764f74f0c921f0a260531fe042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<form method=\"POST\" action=\"\" class=\"text-center\">
        <table>
            <tr>
                <td>
                    <label>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</label>
                    <input type='text' name=\"input_libellet\" />
                </td>
                <td class=\"col-sm-3\">
                    <label>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</label>
                    <ul style=\"list-style-type:none\">
                        <li>
                            <input type=\"checkbox\" name=\"input_type\" value=\"1\"> ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Paying"), "html", null, true);
        echo "
                        </li>
                        <li>
                            <input type=\"checkbox\" name=\"input_type\" value=\"0\" > ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free"), "html", null, true);
        echo "
                        </li>
                </td>
            </tr>
        </table>
        <input type=\"submit\" class=\"btn btn-success\" name=\"rechercher\" value=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo ">
    </form>
    </br>

    ";
        // line 35
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 36
            echo "        <div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Tickets Found"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 38
            echo "        <table class=\"table table-striped\">
            <thead>
                <tr class=\"info\">

                    <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
            echo "</th>
                    
                    <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price"), "html", null, true);
            echo "</th>
                    <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number"), "html", null, true);
            echo "</th>
                    <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Waiting List"), "html", null, true);
            echo "</th>
                    <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
            echo "</th>
                    <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
            echo "</th>
                    <th>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 54
                echo "                    <tr>

                        <td><a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
                echo "</a></td>
                        
            <td>
            ";
                // line 59
                if (($this->getAttribute($context["entity"], "type", array()) == 1)) {
                    echo "<p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
                    echo " <b>€</b></p>                                   
            ";
                } else {
                    // line 60
                    echo "<p class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free"), "html", null, true);
                    echo "</p>                                    
            ";
                }
                // line 61
                echo "</td>
                        <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "attente", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "evenement", array()), "html", null, true);
                echo "</td>
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
                        <td>
                            <ul style=\"list-style-type:none\">
                                <li>
                                    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-desktop fa-2x text-primary\">
                                        ";
                // line 71
                echo "                                    </a>  
                                </li>
                                <li>
                                    <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-wrench fa-2x text-warning\">
                                       ";
                // line 76
                echo "                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "            </tbody>
        </table>

";
        }
        
        $__internal_a517fb848bd7337f8bd2fb2a0068d61e5bfafe764f74f0c921f0a260531fe042->leave($__internal_a517fb848bd7337f8bd2fb2a0068d61e5bfafe764f74f0c921f0a260531fe042_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Billet/admin_billet_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 82,  230 => 76,  226 => 74,  221 => 71,  217 => 69,  204 => 65,  200 => 64,  196 => 63,  192 => 62,  189 => 61,  183 => 60,  176 => 59,  168 => 56,  164 => 54,  160 => 53,  153 => 49,  149 => 48,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  128 => 42,  122 => 38,  116 => 36,  114 => 35,  107 => 31,  99 => 26,  93 => 23,  87 => 20,  80 => 16,  74 => 12,  68 => 10,  58 => 8,  52 => 7,  42 => 5,  36 => 4,  11 => 1,);
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
    {{ 'Tickets Management'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-search\"></i> {{ 'Search'|trans }}
{% endblock operation %}
{% block body -%}

    <form method=\"POST\" action=\"\" class=\"text-center\">
        <table>
            <tr>
                <td>
                    <label>{{ 'Wording'|trans }}</label>
                    <input type='text' name=\"input_libellet\" />
                </td>
                <td class=\"col-sm-3\">
                    <label>{{ 'Type'|trans }}</label>
                    <ul style=\"list-style-type:none\">
                        <li>
                            <input type=\"checkbox\" name=\"input_type\" value=\"1\"> {{ 'Paying'|trans }}
                        </li>
                        <li>
                            <input type=\"checkbox\" name=\"input_type\" value=\"0\" > {{ 'Free'|trans }}
                        </li>
                </td>
            </tr>
        </table>
        <input type=\"submit\" class=\"btn btn-success\" name=\"rechercher\" value={{ 'Search'|trans }}>
    </form>
    </br>

    {% if entities is empty %}
        <div class=\"text-danger text-center\">{{ 'No Tickets Found'|trans }}</div>
    {% else %}
        <table class=\"table table-striped\">
            <thead>
                <tr class=\"info\">

                    <th>{{ 'Wording'|trans }}</th>
                    
                    <th>{{ 'Price'|trans }}</th>
                    <th>{{ 'Number'|trans }}</th>
                    <th>{{ 'Waiting List'|trans }}</th>
                    <th>{{ 'Event'|trans }}</th>
                    <th>{{ 'Creation date'|trans }}</th>
                    <th>{{ 'Action'|trans }}</th>
                </tr>
            </thead>
            <tbody>
                {% for entity in entities %}
                    <tr>

                        <td><a href=\"{{ path('admin_billet_show', { 'id': entity.id }) }}\">{{ entity.libelle }}</a></td>
                        
            <td>
            {% if entity.type == 1 %}<p class=\"text-danger\">{{ entity.prix }} <b>€</b></p>                                   
            {% else %}<p class=\"text-success\">{{ 'Free'|trans }}</p>                                    
            {% endif %}</td>
                        <td>{{ entity.nombre }}</td>
                        <td>{{ entity.attente }}</td>
                        <td>{{ entity.evenement }}</td>
                        <td>{% if entity.dateCreation %}{{ entity.dateCreation|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateCreation|date('H:i') }}{% endif %}</td>
                        <td>
                            <ul style=\"list-style-type:none\">
                                <li>
                                    <a href=\"{{ path('admin_billet_show', { 'id': entity.id }) }}\" class=\"fa fa-desktop fa-2x text-primary\">
                                        {#<button type=\"button\" class=\"btn-xs btn-default btn-group fa fa-desktop\"> {{ 'Display'|trans }}</button>#}
                                    </a>  
                                </li>
                                <li>
                                    <a href=\"{{ path('admin_billet_edit', { 'id': entity.id }) }}\" class=\"fa fa-wrench fa-2x text-warning\">
                                       {# <button type=\"button\" class=\"btn-xs btn-default btn-group fa fa-wrench\"> {{ 'Edit'|trans }}</button>#}
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

{% endif %}
{% endblock %}
", "@OrionEvent/Admin_Billet/admin_billet_search.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Billet\\admin_billet_search.html.twig");
    }
}
