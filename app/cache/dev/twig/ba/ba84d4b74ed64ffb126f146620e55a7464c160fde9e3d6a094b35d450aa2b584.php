<?php

/* @OrionEvent/Admin_Type/admin_type_show.html.twig */
class __TwigTemplate_6bff9089d3d45161bde8248ee5d3f63a48f26c02a467f69e1625fcdf54ec72f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Type/admin_type_show.html.twig", 1);
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
        $__internal_8cea9e1d7be52759e83cbe2f7278fe740bbefd0877395c5fc9ead8304a81dadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cea9e1d7be52759e83cbe2f7278fe740bbefd0877395c5fc9ead8304a81dadc->enter($__internal_8cea9e1d7be52759e83cbe2f7278fe740bbefd0877395c5fc9ead8304a81dadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Type/admin_type_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cea9e1d7be52759e83cbe2f7278fe740bbefd0877395c5fc9ead8304a81dadc->leave($__internal_8cea9e1d7be52759e83cbe2f7278fe740bbefd0877395c5fc9ead8304a81dadc_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_2442721e5e0287970baa1a057ed2dd3fa993a257cf3d77470f925b5423d592a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2442721e5e0287970baa1a057ed2dd3fa993a257cf3d77470f925b5423d592a2->enter($__internal_2442721e5e0287970baa1a057ed2dd3fa993a257cf3d77470f925b5423d592a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Types Management"), "html", null, true);
        echo "
";
        
        $__internal_2442721e5e0287970baa1a057ed2dd3fa993a257cf3d77470f925b5423d592a2->leave($__internal_2442721e5e0287970baa1a057ed2dd3fa993a257cf3d77470f925b5423d592a2_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_27f3907e142796ed823dc8b440b7d5f120c9403e54e0fa031c0d3fda9bafa59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f3907e142796ed823dc8b440b7d5f120c9403e54e0fa031c0d3fda9bafa59c->enter($__internal_27f3907e142796ed823dc8b440b7d5f120c9403e54e0fa031c0d3fda9bafa59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "<i class=\"fa fa-fw fa-desktop\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display"), "html", null, true);
        echo "
";
        
        $__internal_27f3907e142796ed823dc8b440b7d5f120c9403e54e0fa031c0d3fda9bafa59c->leave($__internal_27f3907e142796ed823dc8b440b7d5f120c9403e54e0fa031c0d3fda9bafa59c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb0bb7e551ce712ea6bfcc19748d8d9dd8e2a852845790d1b4d6d2c237ff844a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0bb7e551ce712ea6bfcc19748d8d9dd8e2a852845790d1b4d6d2c237ff844a->enter($__internal_eb0bb7e551ce712ea6bfcc19748d8d9dd8e2a852845790d1b4d6d2c237ff844a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div>
    <p >
    <h3>
         ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "  : <div class=\"text-center\" style=\"color: blue\">";
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
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                <td rowspan=\"5\" class=\"col-sm-2\">
                    <ul style=\"list-style-type:none\">
                        <li>
                            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"text-warning fa fa-wrench fa-2x\">
                                ";
        // line 27
        echo "                            </a>
                        </li>
                        </br>
                        <li class=\"text-danger\"> 
                            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <a class=\"btn-danger \" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_search");
        echo "\">
                            </a>           
                            ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
                <td class=\"text-justify\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
                <td>
                    ";
        // line 50
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 1)) {
            echo "<p class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_deactivate", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"text-danger fa fa-close fa-2x\">
                        ";
            // line 53
            echo "                    </a> 
                    ";
        } else {
            // line 54
            echo "<p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Passive"), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_activate", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"text-success fa fa-check fa-2x\">
                        ";
            // line 57
            echo "                    </a>
                    ";
        }
        // line 59
        echo "                </td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation Date"), "html", null, true);
        echo "</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "d/m/Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification Date"), "html", null, true);
        echo "</th>
                <td>";
        // line 67
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
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_show", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) - 1))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous Type"), "html", null, true);
        echo "</a></li>
    <li class=\"midtext\">
        <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_search");
        echo "\">
            <b>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Types"), "html", null, true);
        echo "</b>
        </a>
    </li>
    <li class=\"next\"><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_show", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) + 1))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next Type"), "html", null, true);
        echo "</a></li>
</ul>

";
        
        $__internal_eb0bb7e551ce712ea6bfcc19748d8d9dd8e2a852845790d1b4d6d2c237ff844a->leave($__internal_eb0bb7e551ce712ea6bfcc19748d8d9dd8e2a852845790d1b4d6d2c237ff844a_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Type/admin_type_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 81,  228 => 78,  224 => 77,  217 => 75,  202 => 67,  198 => 66,  188 => 63,  184 => 62,  179 => 59,  175 => 57,  171 => 55,  166 => 54,  162 => 53,  158 => 51,  152 => 50,  147 => 48,  141 => 45,  137 => 44,  131 => 41,  127 => 40,  118 => 34,  113 => 32,  109 => 31,  103 => 27,  99 => 25,  92 => 21,  78 => 12,  73 => 9,  67 => 8,  57 => 6,  51 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
<i class=\"fa fa-fw fa-desktop\"></i> {{ 'Display'|trans }}
{% endblock operation %}
{% block body -%}
<div>
    <p >
    <h3>
         {{ 'Type'|trans }}  : <div class=\"text-center\" style=\"color: blue\">{{entity.libelle}}</div>
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
                            <a href=\"{{ path('admin_type_edit', { 'id': entity.id }) }}\" class=\"text-warning fa fa-wrench fa-2x\">
                                {#<button type=\"button\" class=\"btn-xs text-warning fa fa-wrench\"> {{ 'Edit'|trans }}</button>#}
                            </a>
                        </li>
                        </br>
                        <li class=\"text-danger\"> 
                            {{ form_start(delete_form) }}
                            <a class=\"btn-danger \" href=\"{{ path('admin_type_search') }}\">
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
                    <a href=\"{{ path('admin_type_deactivate', { 'id': entity.id }) }}\" class=\"text-danger fa fa-close fa-2x\">
                        {#<button type=\"button\" class=\"btn-xs text-danger fa fa-close\"> {{ 'Deactivate'|trans }}</button>#}
                    </a> 
                    {% else %}<p class=\"text-danger\">{{ 'Passive'|trans }}</p>
                    <a href=\"{{ path('admin_type_activate', { 'id': entity.id }) }}\" class=\"text-success fa fa-check fa-2x\">
                        {#<button type=\"button\" class=\"btn-xs text-success fa fa-check\"> {{ 'Activate'|trans }}</button>#}
                    </a>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Creation Date'|trans }}</th>
                <td>{{ entity.dateCreation|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateCreation|date('H:i:s') }}</td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Modification Date'|trans }}</th>
                <td>{{ entity.dateModification|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateModification|date('H:i:s') }}</td>
            </tr>
            </td>
        </tbody>
    </table>
</div>

<ul class=\"pager\">
    <li class=\"previous\"><a href=\"{{ path('admin_type_show', { 'id': entity.id - 1 }) }}\">{{ 'Previous Type'|trans }}</a></li>
    <li class=\"midtext\">
        <a href=\"{{ path('admin_type_search') }}\">
            <b>{{ 'All Types'|trans }}</b>
        </a>
    </li>
    <li class=\"next\"><a href=\"{{ path('admin_type_show', { 'id': entity.id + 1 }) }}\">{{ 'Next Type'|trans }}</a></li>
</ul>

{% endblock %}
", "@OrionEvent/Admin_Type/admin_type_show.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Type\\admin_type_show.html.twig");
    }
}
