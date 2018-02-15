<?php

/* OrionEventBundle:User_Billet:user_billet_new.html.twig */
class __TwigTemplate_580e3f07066c0a23a08d6ffb5a6fe7804d940cbd89d3cb2372d1911e1512f2d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "OrionEventBundle:User_Billet:user_billet_new.html.twig", 1);
        $this->blocks = array(
            'module' => array($this, 'block_module'),
            'operation' => array($this, 'block_operation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionEventBundle::layout_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad85b3371dde0a1ce25cf88876dcd1fac12391bbefb09d8d6781e6866986f5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad85b3371dde0a1ce25cf88876dcd1fac12391bbefb09d8d6781e6866986f5de->enter($__internal_ad85b3371dde0a1ce25cf88876dcd1fac12391bbefb09d8d6781e6866986f5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Billet:user_billet_new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad85b3371dde0a1ce25cf88876dcd1fac12391bbefb09d8d6781e6866986f5de->leave($__internal_ad85b3371dde0a1ce25cf88876dcd1fac12391bbefb09d8d6781e6866986f5de_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_3c400b4679dcae06f0a7e1188c4eaf5dee8a40bd8800881d121ee90ee15b5abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c400b4679dcae06f0a7e1188c4eaf5dee8a40bd8800881d121ee90ee15b5abd->enter($__internal_3c400b4679dcae06f0a7e1188c4eaf5dee8a40bd8800881d121ee90ee15b5abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_3c400b4679dcae06f0a7e1188c4eaf5dee8a40bd8800881d121ee90ee15b5abd->leave($__internal_3c400b4679dcae06f0a7e1188c4eaf5dee8a40bd8800881d121ee90ee15b5abd_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_53246602d2c8cef847ced710891321f8c07920740be0f65ef44e9151fd21693e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53246602d2c8cef847ced710891321f8c07920740be0f65ef44e9151fd21693e->enter($__internal_53246602d2c8cef847ced710891321f8c07920740be0f65ef44e9151fd21693e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo "
";
        
        $__internal_53246602d2c8cef847ced710891321f8c07920740be0f65ef44e9151fd21693e->leave($__internal_53246602d2c8cef847ced710891321f8c07920740be0f65ef44e9151fd21693e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_93539e67515033eec546286ab9c8600e812b3adea6fd0b93999264dc186b9e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93539e67515033eec546286ab9c8600e812b3adea6fd0b93999264dc186b9e57->enter($__internal_93539e67515033eec546286ab9c8600e812b3adea6fd0b93999264dc186b9e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h2 style=\"color: silver\" class=\"text-center\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket"), "html", null, true);
        echo "</b></h2>    
    <table class=\"table-responsive\" >
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "  
        <form class=\"well\" action=\"\" method=\"post\" ";
        // line 13
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</th>
                    <td class=\"col-sm-9\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price"), "html", null, true);
        echo "</th>
                    <td>";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number"), "html", null, true);
        echo "</th>
                    <td>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo " </td>
                </tr>
                
  
                <tr>                   
                    <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
                    <td>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateCreation", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
            </table>
            <table>
                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                <th class=\"col-sm-3\">   
                    <a href=\"\">
                        <button type=\"submit\" class=\"btn btn-group-sm btn-success fa fa-plus\"> ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create"), "html", null, true);
        echo "</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_search");
        echo "\">
                <button type=\"button\" class=\"btn btn-group-sm fa fa-list\"> ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Tickets"), "html", null, true);
        echo "</button>
            </a>
        </th>              

    </table>                        

";
        
        $__internal_93539e67515033eec546286ab9c8600e812b3adea6fd0b93999264dc186b9e57->leave($__internal_93539e67515033eec546286ab9c8600e812b3adea6fd0b93999264dc186b9e57_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Billet:user_billet_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 51,  165 => 50,  156 => 44,  150 => 41,  144 => 38,  139 => 36,  135 => 35,  127 => 30,  123 => 29,  117 => 26,  113 => 25,  107 => 22,  103 => 21,  97 => 18,  93 => 17,  86 => 13,  82 => 12,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OrionEventBundle::layout_user.html.twig' %}

{% block module %}
    {{ 'Tickets Management'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-plus\"></i> {{ 'Add'|trans }}
{% endblock operation %}
{% block body -%}    
    <h2 style=\"color: silver\" class=\"text-center\"><b>{{ 'Add'|trans }} {{ 'Ticket'|trans }}</b></h2>    
    <table class=\"table-responsive\" >
        {{ form_start(form) }}  
        <form class=\"well\" action=\"\" method=\"post\" {{ form_enctype(form) }}>
            <input type=\"hidden\" name=\"_method\" value=\"POST\" />
            <table class=\"table table-condensed table-striped\">
                <tr>                   
                    <th class=\"col-sm-3\">{{ 'Wording'|trans }}</th>
                    <td>{{ form_widget(form.libelle) }} </td>
                </tr>                
                <tr>                   
                    <th>{{ 'Type'|trans }}</th>
                    <td class=\"col-sm-9\">{{ form_widget(form.type) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'Price'|trans }}</th>
                    <td>{{ form_widget(form.prix) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'Number'|trans }}</th>
                    <td>{{ form_widget(form.nombre) }} </td>
                </tr>
                
  
                <tr>                   
                    <th>{{ 'Creation date'|trans }}</th>
                    <td>{{ form_widget(form.dateCreation) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.datecreation|date('Y-m-d H:i:s') }}\">
            </table>
            <table>
                {{ form_widget(form._token) }}
                <th class=\"col-sm-3\">   
                    <a href=\"\">
                        <button type=\"submit\" class=\"btn btn-group-sm btn-success fa fa-plus\"> {{ 'Create'|trans }}</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"{{ path('user_billet_search') }}\">
                <button type=\"button\" class=\"btn btn-group-sm fa fa-list\"> {{ 'All Tickets'|trans }}</button>
            </a>
        </th>              

    </table>                        

{% endblock %}
", "OrionEventBundle:User_Billet:user_billet_new.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Billet/user_billet_new.html.twig");
    }
}
