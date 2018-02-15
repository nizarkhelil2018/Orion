<?php

/* OrionEventBundle:Default:index.html.twig */
class __TwigTemplate_c4dc2cadc7d6213618cf21021641ffb8220d4cb56c132be3f8a88928b0ed51e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_front_user.html.twig", "OrionEventBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'module' => array($this, 'block_module'),
            'operation' => array($this, 'block_operation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionEventBundle::layout_front_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11ebe41bee12c465d52a48b503a7b3f634c3519cd818d78bb1486b762a4aacc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ebe41bee12c465d52a48b503a7b3f634c3519cd818d78bb1486b762a4aacc2->enter($__internal_11ebe41bee12c465d52a48b503a7b3f634c3519cd818d78bb1486b762a4aacc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11ebe41bee12c465d52a48b503a7b3f634c3519cd818d78bb1486b762a4aacc2->leave($__internal_11ebe41bee12c465d52a48b503a7b3f634c3519cd818d78bb1486b762a4aacc2_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_c8c82d209b1fc5d7ee28e58de52ba910730d017ff91b92dd5e0e5d33ad3029a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c82d209b1fc5d7ee28e58de52ba910730d017ff91b92dd5e0e5d33ad3029a9->enter($__internal_c8c82d209b1fc5d7ee28e58de52ba910730d017ff91b92dd5e0e5d33ad3029a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_c8c82d209b1fc5d7ee28e58de52ba910730d017ff91b92dd5e0e5d33ad3029a9->leave($__internal_c8c82d209b1fc5d7ee28e58de52ba910730d017ff91b92dd5e0e5d33ad3029a9_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_30970b39d0c102a97599812147a48d7e54ec1b685c03e8f774a5f1036694ebb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30970b39d0c102a97599812147a48d7e54ec1b685c03e8f774a5f1036694ebb0->enter($__internal_30970b39d0c102a97599812147a48d7e54ec1b685c03e8f774a5f1036694ebb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-fw fa-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_30970b39d0c102a97599812147a48d7e54ec1b685c03e8f774a5f1036694ebb0->leave($__internal_30970b39d0c102a97599812147a48d7e54ec1b685c03e8f774a5f1036694ebb0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_22a40167ca8c4a603edcf57b5232f8baf6de4f568a0469e4a5d32de83089064b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a40167ca8c4a603edcf57b5232f8baf6de4f568a0469e4a5d32de83089064b->enter($__internal_22a40167ca8c4a603edcf57b5232f8baf6de4f568a0469e4a5d32de83089064b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_22a40167ca8c4a603edcf57b5232f8baf6de4f568a0469e4a5d32de83089064b->leave($__internal_22a40167ca8c4a603edcf57b5232f8baf6de4f568a0469e4a5d32de83089064b_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  68 => 8,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OrionEventBundle::layout_front_user.html.twig' %}
{% block module %}
    {{ 'Home Page'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-fw fa-home\"></i> {{ 'Home Page'|trans }}
{% endblock operation %}
{% block body -%} 
Hello {{ name }}!
{% endblock %}








", "OrionEventBundle:Default:index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Default/index.html.twig");
    }
}
