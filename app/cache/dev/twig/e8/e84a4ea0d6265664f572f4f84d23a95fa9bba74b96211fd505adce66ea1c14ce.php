<?php

/* @OrionEvent/Default/index_admin.html.twig */
class __TwigTemplate_7948e04b9baadbf8df79435689fbee95922095b43c43ad3520e6af81f4804726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Default/index_admin.html.twig", 1);
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
        $__internal_56ad506c3ef1aa0c8b1ca8c4245b49d4f64e878900811c53d191ee71f4987b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ad506c3ef1aa0c8b1ca8c4245b49d4f64e878900811c53d191ee71f4987b65->enter($__internal_56ad506c3ef1aa0c8b1ca8c4245b49d4f64e878900811c53d191ee71f4987b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Default/index_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56ad506c3ef1aa0c8b1ca8c4245b49d4f64e878900811c53d191ee71f4987b65->leave($__internal_56ad506c3ef1aa0c8b1ca8c4245b49d4f64e878900811c53d191ee71f4987b65_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_80c197f591e5a5c29cbe226bdabf9270e10998fd46c32d0882d6c15f4a3da646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c197f591e5a5c29cbe226bdabf9270e10998fd46c32d0882d6c15f4a3da646->enter($__internal_80c197f591e5a5c29cbe226bdabf9270e10998fd46c32d0882d6c15f4a3da646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_80c197f591e5a5c29cbe226bdabf9270e10998fd46c32d0882d6c15f4a3da646->leave($__internal_80c197f591e5a5c29cbe226bdabf9270e10998fd46c32d0882d6c15f4a3da646_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_5d3489408d128a1f3c36bdbc82f70b2da90c0173bd098237767a2f6db7d89dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3489408d128a1f3c36bdbc82f70b2da90c0173bd098237767a2f6db7d89dfb->enter($__internal_5d3489408d128a1f3c36bdbc82f70b2da90c0173bd098237767a2f6db7d89dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-fw fa-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_5d3489408d128a1f3c36bdbc82f70b2da90c0173bd098237767a2f6db7d89dfb->leave($__internal_5d3489408d128a1f3c36bdbc82f70b2da90c0173bd098237767a2f6db7d89dfb_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ee24b774764ed6932583a008a49b08f314573fec93594c6e7fa06f61bbba9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee24b774764ed6932583a008a49b08f314573fec93594c6e7fa06f61bbba9d5->enter($__internal_4ee24b774764ed6932583a008a49b08f314573fec93594c6e7fa06f61bbba9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </h3></br>
    
<h4 class=\"text-blue\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orion is a platform for managing business opportunities."), "html", null, true);
        echo "</h5></br>
";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Being administrator, Orion Event gives you the opportunity to manage all entities. You are the only responsible for managing themes and types of events. You can also manage events, tickets and bookings made by other users.
                    For the Orion Forum module, you have the opportunity to manage forums and their categories as well as topics and answers to them."), "html", null, true);
        // line 13
        echo "
";
        
        $__internal_4ee24b774764ed6932583a008a49b08f314573fec93594c6e7fa06f61bbba9d5->leave($__internal_4ee24b774764ed6932583a008a49b08f314573fec93594c6e7fa06f61bbba9d5_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Default/index_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 13,  86 => 12,  82 => 11,  74 => 9,  68 => 8,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
    {{ 'Home Page'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-fw fa-home\"></i> {{ 'Home Page'|trans }}
{% endblock operation %}
{% block body -%} 
<h3>{{ 'Hello'|trans }} {{ app.user.username}} </h3></br>
    
<h4 class=\"text-blue\">{{ 'Orion is a platform for managing business opportunities.'|trans }}</h5></br>
{{ 'Being administrator, Orion Event gives you the opportunity to manage all entities. You are the only responsible for managing themes and types of events. You can also manage events, tickets and bookings made by other users.
                    For the Orion Forum module, you have the opportunity to manage forums and their categories as well as topics and answers to them.'|trans }}
{% endblock %}", "@OrionEvent/Default/index_admin.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Default\\index_admin.html.twig");
    }
}
