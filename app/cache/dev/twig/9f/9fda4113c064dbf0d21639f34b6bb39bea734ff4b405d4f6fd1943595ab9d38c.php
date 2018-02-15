<?php

/* OrionEventBundle:Admin_Type:admin_type_new.html.twig */
class __TwigTemplate_0e9d9c1e887163c2ec2678d4b61ca5a5fef54cd1578121ded9e8e1b93678a2e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Type:admin_type_new.html.twig", 1);
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
        $__internal_93e826b71d8cc17053edb975934df8199e538cf0300f46b36451e9da4cf25b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e826b71d8cc17053edb975934df8199e538cf0300f46b36451e9da4cf25b1d->enter($__internal_93e826b71d8cc17053edb975934df8199e538cf0300f46b36451e9da4cf25b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Type:admin_type_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93e826b71d8cc17053edb975934df8199e538cf0300f46b36451e9da4cf25b1d->leave($__internal_93e826b71d8cc17053edb975934df8199e538cf0300f46b36451e9da4cf25b1d_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_0bf0c2981a891791eb4827e72bf09ae223b786eb3f82587891d9d8a14c33735a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf0c2981a891791eb4827e72bf09ae223b786eb3f82587891d9d8a14c33735a->enter($__internal_0bf0c2981a891791eb4827e72bf09ae223b786eb3f82587891d9d8a14c33735a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Types Management"), "html", null, true);
        echo "
";
        
        $__internal_0bf0c2981a891791eb4827e72bf09ae223b786eb3f82587891d9d8a14c33735a->leave($__internal_0bf0c2981a891791eb4827e72bf09ae223b786eb3f82587891d9d8a14c33735a_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_25ecdbaff37c42a86f97c27a191946b30f73008d9733527ba190f8d9596dcc81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ecdbaff37c42a86f97c27a191946b30f73008d9733527ba190f8d9596dcc81->enter($__internal_25ecdbaff37c42a86f97c27a191946b30f73008d9733527ba190f8d9596dcc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
";
        
        $__internal_25ecdbaff37c42a86f97c27a191946b30f73008d9733527ba190f8d9596dcc81->leave($__internal_25ecdbaff37c42a86f97c27a191946b30f73008d9733527ba190f8d9596dcc81_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_08302eb183c81901ad1363fa90200e48b1267efcd741c0f9f29c5db4288ad192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08302eb183c81901ad1363fa90200e48b1267efcd741c0f9f29c5db4288ad192->enter($__internal_08302eb183c81901ad1363fa90200e48b1267efcd741c0f9f29c5db4288ad192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<h2 style=\"color: silver\" class=\"text-center\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</b></h2>


    <table class=\"table-responsive\" >
        ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "  
        <form class=\"well\" action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <input type=\"hidden\" name=\"_method\" value=\"POST\" />
            <table class=\"table table-condensed table-striped\">
                <tr>                   
                    <th class=\"col-sm-3\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</th>
                    <td>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo " </td>
                </tr>                
                <tr>                   
                    <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>

                    <td class=\"col-sm-9\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
                    <td>";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation Date"), "html", null, true);
        echo "</th>
                    <td>";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreation", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "\">
                <tr>                   
                    <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modification Date"), "html", null, true);
        echo "</th>
                    <td>";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateModification", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datemodification", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "\">

            </table>
            <table>

                ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                <th class=\"col-sm-3\">   
                    <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_search");
        echo "\">
                        <button type=\"submit\" class=\"btn btn-group-sm btn-success fa fa-plus\" >  ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create"), "html", null, true);
        echo " 
                        </button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_search");
        echo "\">
                <button type=\"button\" class=\"btn btn-group-sm fa fa-list\"> ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Types"), "html", null, true);
        echo "</button>
            </a>
        </th>              

    </table>                        

";
        
        $__internal_08302eb183c81901ad1363fa90200e48b1267efcd741c0f9f29c5db4288ad192->leave($__internal_08302eb183c81901ad1363fa90200e48b1267efcd741c0f9f29c5db4288ad192_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Type:admin_type_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 56,  179 => 55,  169 => 48,  165 => 47,  159 => 44,  151 => 39,  146 => 37,  142 => 36,  137 => 34,  132 => 32,  128 => 31,  122 => 28,  118 => 27,  112 => 24,  107 => 22,  101 => 19,  97 => 18,  88 => 14,  84 => 13,  74 => 9,  68 => 8,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
    <i class=\"fa fa-plus\"></i> {{ 'Add'|trans }}
{% endblock operation %}
{% block body -%}
    <h2 style=\"color: silver\" class=\"text-center\"><b>{{ 'New'|trans }} {{ 'Type'|trans }}</b></h2>


    <table class=\"table-responsive\" >
        {{ form_start(form) }}  
        <form class=\"well\" action=\"{{ path('admin_type_new') }}\" method=\"post\" {{ form_enctype(form) }}>
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
                    <th>{{ 'Creation Date'|trans }}</th>
                    <td>{{ form_widget(form.dateCreation) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datecreation|date('d/m/Y H:i:s') }}\">
                <tr>                   
                    <th>{{ 'Modification Date'|trans }}</th>
                    <td>{{ form_widget(form.dateModification) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datemodification|date('d/m/Y H:i:s') }}\">

            </table>
            <table>

                {{ form_widget(form._token) }}

                <th class=\"col-sm-3\">   
                    <a href=\"{{ path('admin_type_search') }}\">
                        <button type=\"submit\" class=\"btn btn-group-sm btn-success fa fa-plus\" >  {{ 'Create'|trans }} 
                        </button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"{{ path('admin_type_search') }}\">
                <button type=\"button\" class=\"btn btn-group-sm fa fa-list\"> {{ 'All Types'|trans }}</button>
            </a>
        </th>              

    </table>                        

{% endblock %}
", "OrionEventBundle:Admin_Type:admin_type_new.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Type/admin_type_new.html.twig");
    }
}
