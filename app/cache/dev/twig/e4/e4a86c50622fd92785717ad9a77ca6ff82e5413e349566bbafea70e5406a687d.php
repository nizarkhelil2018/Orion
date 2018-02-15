<?php

/* @OrionEvent/Admin_Billet/admin_billet_edit.html.twig */
class __TwigTemplate_53752f5a89f7e75020683f12d80c191ebcd7f7b21549293d2f9108d77a61a8c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Billet/admin_billet_edit.html.twig", 2);
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
        $__internal_da1317d4d67a534a00d5b4c02333d45877b85f45ca07a38aa1fbf6f9cea9c1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1317d4d67a534a00d5b4c02333d45877b85f45ca07a38aa1fbf6f9cea9c1b7->enter($__internal_da1317d4d67a534a00d5b4c02333d45877b85f45ca07a38aa1fbf6f9cea9c1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Billet/admin_billet_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da1317d4d67a534a00d5b4c02333d45877b85f45ca07a38aa1fbf6f9cea9c1b7->leave($__internal_da1317d4d67a534a00d5b4c02333d45877b85f45ca07a38aa1fbf6f9cea9c1b7_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_289542e259fbf849a2bcc738d739e85323b662ec2fd01d635646dddd8c49dbc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289542e259fbf849a2bcc738d739e85323b662ec2fd01d635646dddd8c49dbc6->enter($__internal_289542e259fbf849a2bcc738d739e85323b662ec2fd01d635646dddd8c49dbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_289542e259fbf849a2bcc738d739e85323b662ec2fd01d635646dddd8c49dbc6->leave($__internal_289542e259fbf849a2bcc738d739e85323b662ec2fd01d635646dddd8c49dbc6_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_90e13e6e855140dcff9a417066d1728171d1fed2c42bd2b2b0c757c28557885e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e13e6e855140dcff9a417066d1728171d1fed2c42bd2b2b0c757c28557885e->enter($__internal_90e13e6e855140dcff9a417066d1728171d1fed2c42bd2b2b0c757c28557885e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-fw fa-wrench\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "
";
        
        $__internal_90e13e6e855140dcff9a417066d1728171d1fed2c42bd2b2b0c757c28557885e->leave($__internal_90e13e6e855140dcff9a417066d1728171d1fed2c42bd2b2b0c757c28557885e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3ae82a45c5db1393556612179b2cf5a11b4fbec95f9d293d768dd6bdd938234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ae82a45c5db1393556612179b2cf5a11b4fbec95f9d293d768dd6bdd938234->enter($__internal_d3ae82a45c5db1393556612179b2cf5a11b4fbec95f9d293d768dd6bdd938234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket"), "html", null, true);
        echo " : </h3>
    <h1 style=\"color: blue\" class=\"text-center\"><b>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo "</b></h1>
    <table class=\"table-responsive\" >        
        ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "  
        <form class=\"well\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
            <table class=\"table table-condensed\">
                <tr>                   
                    <th class=\"col-sm-3\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</th>
                    <td>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libelle", array()), 'widget');
        echo " </td>
                </tr>                
                <tr>                   
                    <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</th>
                    <td class=\"col-sm-9\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix", array()), 'label');
        echo "</th>
                    <td>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'label');
        echo "</th>
                    <td>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "attente", array()), 'label');
        echo "</th>
                    <td>";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "attente", array()), 'widget');
        echo " </td>
                </tr>

                <tr>                   
                    <th>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "evenement", array()), 'label');
        echo "</th>
                    <td>";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "evenement", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
                    <td>";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCreation", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">

            </table>
            <table>
                ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "
                <th class=\"col-sm-3\">   
                    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_search");
        echo "\">
                        <button type=\"submit\" class=\"btn btn-default fa fa-check\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo "</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_search");
        echo "\">
                <button type=\"button\" class=\"btn btn-default fa fa-list\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Tickets"), "html", null, true);
        echo "s</button>
            </a>
        </th>
        <th>
            <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"text-danger\">
                ";
        // line 65
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
            </a>
        </th>
    </table>
";
        
        $__internal_d3ae82a45c5db1393556612179b2cf5a11b4fbec95f9d293d768dd6bdd938234->leave($__internal_d3ae82a45c5db1393556612179b2cf5a11b4fbec95f9d293d768dd6bdd938234_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Billet/admin_billet_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 65,  205 => 64,  198 => 60,  194 => 59,  185 => 53,  181 => 52,  176 => 50,  169 => 46,  164 => 44,  160 => 43,  154 => 40,  150 => 39,  143 => 35,  139 => 34,  133 => 31,  129 => 30,  123 => 27,  119 => 26,  113 => 23,  109 => 22,  103 => 19,  99 => 18,  90 => 14,  86 => 13,  81 => 11,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'OrionEventBundle::layout_admin.html.twig' %}
{% block module %}
    {{ 'Tickets Management'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-fw fa-wrench\"></i> {{ 'Edit'|trans }}
{% endblock operation %}
{% block body -%} 
    <h3>{{ 'Update'|trans }} {{ 'Ticket'|trans }} : </h3>
    <h1 style=\"color: blue\" class=\"text-center\"><b>{{entity.libelle}}</b></h1>
    <table class=\"table-responsive\" >        
        {{ form_start(edit_form) }}  
        <form class=\"well\" action=\"{{ path('admin_billet_edit', { 'id': entity.id }) }}\" method=\"post\" {{ form_enctype(edit_form) }}>
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
            <table class=\"table table-condensed\">
                <tr>                   
                    <th class=\"col-sm-3\">{{ 'Wording'|trans }}</th>
                    <td>{{ form_widget(edit_form.libelle) }} </td>
                </tr>                
                <tr>                   
                    <th>{{ 'Type'|trans }}</th>
                    <td class=\"col-sm-9\">{{ form_widget(edit_form.type) }} </td>
                </tr>
                <tr>                   
                    <th>{{ form_label(edit_form.prix) }}</th>
                    <td>{{ form_widget(edit_form.prix) }} </td>
                </tr>
                <tr>                   
                    <th>{{ form_label(edit_form.nombre) }}</th>
                    <td>{{ form_widget(edit_form.nombre) }} </td>
                </tr>
                <tr>                   
                    <th>{{ form_label(edit_form.attente) }}</th>
                    <td>{{ form_widget(edit_form.attente) }} </td>
                </tr>

                <tr>                   
                    <th>{{ form_label(edit_form.evenement) }}</th>
                    <td>{{ form_widget(edit_form.evenement) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'Creation date'|trans }}</th>
                    <td>{{ form_widget(edit_form.dateCreation) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.dateCreation|date('Y-m-d H:i:s') }}\">

            </table>
            <table>
                {{ form_widget(edit_form._token) }}
                <th class=\"col-sm-3\">   
                    <a href=\"{{ path('admin_billet_search') }}\">
                        <button type=\"submit\" class=\"btn btn-default fa fa-check\">{{ 'Update'|trans}}</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"{{ path('admin_billet_search') }}\">
                <button type=\"button\" class=\"btn btn-default fa fa-list\">{{ 'All Tickets'|trans }}s</button>
            </a>
        </th>
        <th>
            <a href=\"{{ path('admin_billet_delete', { 'id': entity.id }) }}\" class=\"text-danger\">
                {{ form(delete_form) }}
            </a>
        </th>
    </table>
{% endblock %}
", "@OrionEvent/Admin_Billet/admin_billet_edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Billet\\admin_billet_edit.html.twig");
    }
}
