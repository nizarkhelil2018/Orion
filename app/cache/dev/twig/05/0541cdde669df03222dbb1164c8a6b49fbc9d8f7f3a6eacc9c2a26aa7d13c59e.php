<?php

/* OrionEventBundle:Admin_Type:admin_type_edit.html.twig */
class __TwigTemplate_bc40387453e51c1ddb66571a7db6f203fc96483304630de4f1da868452f64bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Type:admin_type_edit.html.twig", 1);
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
        $__internal_5bf48f865f8b5f22f1b1fbf480d27e3be58f4fddbd8f0dfa921292267873914b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf48f865f8b5f22f1b1fbf480d27e3be58f4fddbd8f0dfa921292267873914b->enter($__internal_5bf48f865f8b5f22f1b1fbf480d27e3be58f4fddbd8f0dfa921292267873914b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Type:admin_type_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bf48f865f8b5f22f1b1fbf480d27e3be58f4fddbd8f0dfa921292267873914b->leave($__internal_5bf48f865f8b5f22f1b1fbf480d27e3be58f4fddbd8f0dfa921292267873914b_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_f1fe4b1a6aaec3540f59ff1bca19a4a97fe05e4b5f63f78e2336db22be6c4c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fe4b1a6aaec3540f59ff1bca19a4a97fe05e4b5f63f78e2336db22be6c4c5f->enter($__internal_f1fe4b1a6aaec3540f59ff1bca19a4a97fe05e4b5f63f78e2336db22be6c4c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Types Management"), "html", null, true);
        echo "
";
        
        $__internal_f1fe4b1a6aaec3540f59ff1bca19a4a97fe05e4b5f63f78e2336db22be6c4c5f->leave($__internal_f1fe4b1a6aaec3540f59ff1bca19a4a97fe05e4b5f63f78e2336db22be6c4c5f_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_b1acd7d2ad6522b60a3251cfbd1e892fcee95b73bb506961de53e4b942cc9dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1acd7d2ad6522b60a3251cfbd1e892fcee95b73bb506961de53e4b942cc9dc4->enter($__internal_b1acd7d2ad6522b60a3251cfbd1e892fcee95b73bb506961de53e4b942cc9dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-fw fa-wrench\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "
";
        
        $__internal_b1acd7d2ad6522b60a3251cfbd1e892fcee95b73bb506961de53e4b942cc9dc4->leave($__internal_b1acd7d2ad6522b60a3251cfbd1e892fcee95b73bb506961de53e4b942cc9dc4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_722c219b4d6af0ddf877ecb9a0ba4cf725218000655a6551369f94aefd3c34a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722c219b4d6af0ddf877ecb9a0ba4cf725218000655a6551369f94aefd3c34a4->enter($__internal_722c219b4d6af0ddf877ecb9a0ba4cf725218000655a6551369f94aefd3c34a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h3> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
            <table class=\"table table-condensed\">
                <tr>                   
                    <th class=\"col-sm-3\"> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo " </th>
                    <td>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libelle", array()), 'widget');
        echo " </td>
                </tr>                
                <tr>                   
                    <th> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo " </th>
                    <td class=\"col-sm-9\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo " </th>
                    <td>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "etat", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th> ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation Date"), "html", null, true);
        echo " </th>
                    <td>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCreation", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreation", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "\">
                <tr>                   
                    <th> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification Date"), "html", null, true);
        echo " </th>
                    <td>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateModification", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datemodification", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "\">

            </table>
            <table>
                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "
                <th class=\"col-sm-3\">   
                    <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_search");
        echo "\">
                        <button type=\"submit\" class=\"btn btn-default fa fa-check\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo "</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_search");
        echo "\">
                <button type=\"button\" class=\"btn btn-default fa fa-list\"> ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Types"), "html", null, true);
        echo " </button>
            </a>
        </th>
        <th>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"class=\"text-danger\">
                ";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
            </a>
        </th>
    </table>
";
        
        $__internal_722c219b4d6af0ddf877ecb9a0ba4cf725218000655a6551369f94aefd3c34a4->leave($__internal_722c219b4d6af0ddf877ecb9a0ba4cf725218000655a6551369f94aefd3c34a4_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Type:admin_type_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 57,  188 => 56,  181 => 52,  177 => 51,  168 => 45,  164 => 44,  159 => 42,  152 => 38,  147 => 36,  143 => 35,  138 => 33,  133 => 31,  129 => 30,  123 => 27,  119 => 26,  113 => 23,  109 => 22,  103 => 19,  99 => 18,  90 => 14,  86 => 13,  81 => 11,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    <i class=\"fa fa-fw fa-wrench\"></i> {{ 'Edit'|trans }}
{% endblock operation %}
{% block body -%} 
    <h3> {{ 'Update'|trans }} {{ 'Type'|trans }} : </h3>
    <h1 style=\"color: blue\" class=\"text-center\"><b>{{entity.libelle}}</b></h1>
    <table class=\"table-responsive\" >        
        {{ form_start(edit_form) }}  
        <form class=\"well\" action=\"{{ path('admin_type_edit', { 'id': entity.id }) }}\" method=\"post\" {{ form_enctype(edit_form) }}>
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
            <table class=\"table table-condensed\">
                <tr>                   
                    <th class=\"col-sm-3\"> {{ 'Wording'|trans }} </th>
                    <td>{{ form_widget(edit_form.libelle) }} </td>
                </tr>                
                <tr>                   
                    <th> {{ 'Description'|trans }} </th>
                    <td class=\"col-sm-9\">{{ form_widget(edit_form.description) }} </td>
                </tr>
                <tr>                   
                    <th> {{ 'State'|trans }} </th>
                    <td>{{ form_widget(edit_form.etat) }} </td>
                </tr>
                <tr>                   
                    <th> {{ 'Creation Date'|trans }} </th>
                    <td>{{ form_widget(edit_form.dateCreation) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datecreation|date('d/m/Y H:i:s') }}\">
                <tr>                   
                    <th> {{ 'Modification Date'|trans }} </th>
                    <td>{{ form_widget(edit_form.dateModification) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datemodification|date('d/m/Y H:i:s') }}\">

            </table>
            <table>
                {{ form_widget(edit_form._token) }}
                <th class=\"col-sm-3\">   
                    <a href=\"{{ path('admin_type_search') }}\">
                        <button type=\"submit\" class=\"btn btn-default fa fa-check\"> {{ 'Update'|trans}}</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"{{ path('admin_type_search') }}\">
                <button type=\"button\" class=\"btn btn-default fa fa-list\"> {{ 'All Types'|trans }} </button>
            </a>
        </th>
        <th>
            <a href=\"{{ path('admin_type_delete', { 'id': entity.id }) }}\"class=\"text-danger\">
                {{ form(delete_form) }}
            </a>
        </th>
    </table>
{% endblock %}
", "OrionEventBundle:Admin_Type:admin_type_edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Type/admin_type_edit.html.twig");
    }
}
