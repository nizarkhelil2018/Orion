<?php

/* @OrionEvent/Admin_Theme/admin_theme_new.html.twig */
class __TwigTemplate_4c33bd2b115b60a38ef2195acd6b0b4bfd5d9ff612b37c31bf89280d104ddb65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Theme/admin_theme_new.html.twig", 1);
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
        $__internal_dde835449ac75540b862e20086d0b54e2117e021113b8b94a3d2c9a74b2803f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde835449ac75540b862e20086d0b54e2117e021113b8b94a3d2c9a74b2803f7->enter($__internal_dde835449ac75540b862e20086d0b54e2117e021113b8b94a3d2c9a74b2803f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Theme/admin_theme_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde835449ac75540b862e20086d0b54e2117e021113b8b94a3d2c9a74b2803f7->leave($__internal_dde835449ac75540b862e20086d0b54e2117e021113b8b94a3d2c9a74b2803f7_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_2628b672d43a590eca672f4b9c59932e6ddc606b8c880018436c56735fea979d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2628b672d43a590eca672f4b9c59932e6ddc606b8c880018436c56735fea979d->enter($__internal_2628b672d43a590eca672f4b9c59932e6ddc606b8c880018436c56735fea979d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Themes Management"), "html", null, true);
        echo "
";
        
        $__internal_2628b672d43a590eca672f4b9c59932e6ddc606b8c880018436c56735fea979d->leave($__internal_2628b672d43a590eca672f4b9c59932e6ddc606b8c880018436c56735fea979d_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_706738f5aa85e7337a425650842c87a38b6202b127e2740180ec2dec1143797d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706738f5aa85e7337a425650842c87a38b6202b127e2740180ec2dec1143797d->enter($__internal_706738f5aa85e7337a425650842c87a38b6202b127e2740180ec2dec1143797d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
";
        
        $__internal_706738f5aa85e7337a425650842c87a38b6202b127e2740180ec2dec1143797d->leave($__internal_706738f5aa85e7337a425650842c87a38b6202b127e2740180ec2dec1143797d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_317911b283b4c9a9a9537c4e56a32a4b43a8cc1477a35c717fc3cb37835ba215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317911b283b4c9a9a9537c4e56a32a4b43a8cc1477a35c717fc3cb37835ba215->enter($__internal_317911b283b4c9a9a9537c4e56a32a4b43a8cc1477a35c717fc3cb37835ba215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h2 style=\"color: silver\" class=\"text-center\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</b></h2>    
    <table class=\"table-responsive\" >
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "  
        <form class=\"well\" action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <input type=\"hidden\" name=\"_method\" value=\"POST\" />
            <table class=\"table table-condensed table-striped\">
                <tr>                   
                    <th class=\"col-sm-3\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</th>
                    <td>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo " </td>
                </tr>                
                <tr>                   
                    <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
                    <td class=\"col-sm-9\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
                    <td>";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
                    <td>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreation", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "\">
                <tr>                   
                    <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification date"), "html", null, true);
        echo "</th>
                    <td>";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateModification", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datemodification", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "\">

            </table>
            <table>

                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                <th class=\"col-sm-3\">   
                    <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_search");
        echo "\">
                        <button type=\"submit\" class=\"btn btn-group-sm btn-success fa fa-plus\"> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create"), "html", null, true);
        echo "</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_search");
        echo "\">
                <button type=\"button\" class=\"btn btn-group-sm fa fa-list\"> ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Themes"), "html", null, true);
        echo "</button>
            </a>
        </th>              

    </table>                        

";
        
        $__internal_317911b283b4c9a9a9537c4e56a32a4b43a8cc1477a35c717fc3cb37835ba215->leave($__internal_317911b283b4c9a9a9537c4e56a32a4b43a8cc1477a35c717fc3cb37835ba215_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Theme/admin_theme_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 53,  175 => 52,  166 => 46,  162 => 45,  156 => 42,  148 => 37,  143 => 35,  139 => 34,  134 => 32,  129 => 30,  125 => 29,  119 => 26,  115 => 25,  109 => 22,  105 => 21,  99 => 18,  95 => 17,  86 => 13,  82 => 12,  74 => 10,  68 => 8,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
    <i class=\"fa fa-plus\"></i> {{ 'Add'|trans }}
{% endblock operation %}
{% block body -%}

    <h2 style=\"color: silver\" class=\"text-center\"><b>{{ 'New'|trans }} {{ 'Theme'|trans }}</b></h2>    
    <table class=\"table-responsive\" >
        {{ form_start(form) }}  
        <form class=\"well\" action=\"{{ path('admin_theme_new') }}\" method=\"post\" {{ form_enctype(form) }}>
            <input type=\"hidden\" name=\"_method\" value=\"POST\" />
            <table class=\"table table-condensed table-striped\">
                <tr>                   
                    <th class=\"col-sm-3\">{{ 'Wording'|trans }}</th>
                    <td>{{ form_widget(form.libelle) }} </td>
                </tr>                
                <tr>                   
                    <th>{{ 'Description'|trans }}</th>
                    <td class=\"col-sm-9\">{{ form_widget(form.description) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'State'|trans }}</th>
                    <td>{{ form_widget(form.etat) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'Creation date'|trans }}</th>
                    <td>{{ form_widget(form.dateCreation) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datecreation|date('d/m/Y H:i:s') }}\">
                <tr>                   
                    <th>{{ 'Modification date'|trans }}</th>
                    <td>{{ form_widget(form.dateModification) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datemodification|date('d/m/Y H:i:s') }}\">

            </table>
            <table>

                {{ form_widget(form._token) }}

                <th class=\"col-sm-3\">   
                    <a href=\"{{ path('admin_theme_search') }}\">
                        <button type=\"submit\" class=\"btn btn-group-sm btn-success fa fa-plus\"> {{ 'Create'|trans }}</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"{{ path('admin_theme_search') }}\">
                <button type=\"button\" class=\"btn btn-group-sm fa fa-list\"> {{ 'All Themes'|trans }}</button>
            </a>
        </th>              

    </table>                        

{% endblock %}
", "@OrionEvent/Admin_Theme/admin_theme_new.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Theme\\admin_theme_new.html.twig");
    }
}
