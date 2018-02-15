<?php

/* OrionEventBundle:Admin_Billet:admin_billet_index.html.twig */
class __TwigTemplate_c0befb94f535b546ebf03f19f6e6c7ddc92d26f9c206300c546ad0c42cfd2bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Billet:admin_billet_index.html.twig", 1);
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
        $__internal_44ce69340a60f17e3f82c900f76da92ba4488bca3b78f1b9458f960ba41fae82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ce69340a60f17e3f82c900f76da92ba4488bca3b78f1b9458f960ba41fae82->enter($__internal_44ce69340a60f17e3f82c900f76da92ba4488bca3b78f1b9458f960ba41fae82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Billet:admin_billet_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44ce69340a60f17e3f82c900f76da92ba4488bca3b78f1b9458f960ba41fae82->leave($__internal_44ce69340a60f17e3f82c900f76da92ba4488bca3b78f1b9458f960ba41fae82_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_07e5c14972ee5ca8fa7c89168e64503e996fd65281872217728e5cfde0a55426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e5c14972ee5ca8fa7c89168e64503e996fd65281872217728e5cfde0a55426->enter($__internal_07e5c14972ee5ca8fa7c89168e64503e996fd65281872217728e5cfde0a55426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "   ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_07e5c14972ee5ca8fa7c89168e64503e996fd65281872217728e5cfde0a55426->leave($__internal_07e5c14972ee5ca8fa7c89168e64503e996fd65281872217728e5cfde0a55426_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_d0be422840bdde7a6627b142ced28f9cb240047019edf7bb7b4dff840a25d234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0be422840bdde7a6627b142ced28f9cb240047019edf7bb7b4dff840a25d234->enter($__internal_d0be422840bdde7a6627b142ced28f9cb240047019edf7bb7b4dff840a25d234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_d0be422840bdde7a6627b142ced28f9cb240047019edf7bb7b4dff840a25d234->leave($__internal_d0be422840bdde7a6627b142ced28f9cb240047019edf7bb7b4dff840a25d234_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4662eff83342e76df2d7b6f63ff166e052ccc12c66655bc19213d22e7d20737d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4662eff83342e76df2d7b6f63ff166e052ccc12c66655bc19213d22e7d20737d->enter($__internal_4662eff83342e76df2d7b6f63ff166e052ccc12c66655bc19213d22e7d20737d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h1 class=\"text-center text-primary\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets List"), "html", null, true);
        echo "</b></h1>

    ";
        // line 12
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 13
            echo "        <div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Tickets Found "), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 15
            echo "        <table class=\"table table-striped\">
            <thead>
                <tr class=\"info\">

                    <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
            echo "</th>
                    
                    <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price"), "html", null, true);
            echo "</th>
                    <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number"), "html", null, true);
            echo "</th>
                    <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Waiting List"), "html", null, true);
            echo "</th>
                    <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
            echo "</th>
                    <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
            echo "</th>
                    <th>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 31
                echo "                    <tr>

                        <td><a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
                echo "</a></td>
                       
                        <td>
            ";
                // line 36
                if (($this->getAttribute($context["entity"], "type", array()) == 1)) {
                    echo "<p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
                    echo " <b>€</b></p>                                   
            ";
                } else {
                    // line 37
                    echo "<p class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free"), "html", null, true);
                    echo "</p>                                    
            ";
                }
                // line 38
                echo "</td>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "attente", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "evenement", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 42
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
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-desktop fa-2x text-primary\">
                                       ";
                // line 48
                echo "                                    </a>  
                                </li>
                                <li>
                                    <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"fa fa-wrench fa-2x text-warning\">
                                       ";
                // line 53
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
            // line 59
            echo "            </tbody>
        </table>

        
    ";
        }
        
        $__internal_4662eff83342e76df2d7b6f63ff166e052ccc12c66655bc19213d22e7d20737d->leave($__internal_4662eff83342e76df2d7b6f63ff166e052ccc12c66655bc19213d22e7d20737d_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Billet:admin_billet_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 59,  196 => 53,  192 => 51,  187 => 48,  183 => 46,  170 => 42,  166 => 41,  162 => 40,  158 => 39,  155 => 38,  149 => 37,  142 => 36,  134 => 33,  130 => 31,  126 => 30,  119 => 26,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  94 => 19,  88 => 15,  82 => 13,  80 => 12,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    <i class=\"fa fa-list\"></i> {{ 'List'|trans }}
{% endblock operation %}
{% block body -%}   
    <h1 class=\"text-center text-primary\"><b>{{ 'Tickets List'|trans }}</b></h1>

    {% if entities is empty %}
        <div class=\"text-danger text-center\">{{ 'No Tickets Found '|trans }}</div>
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
                                       {# <button type=\"button\" class=\"btn-xs btn-default btn-group fa fa-desktop\"> {{ 'Display'|trans }}</button>#}
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
", "OrionEventBundle:Admin_Billet:admin_billet_index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Billet/admin_billet_index.html.twig");
    }
}
