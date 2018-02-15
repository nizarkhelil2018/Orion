<?php

/* @OrionEvent/Default/index.html.twig */
class __TwigTemplate_2ac085d13ae59b4626bef8ee64feba41666bafb1c72c75d96f3903121bf770d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_front_user.html.twig", "@OrionEvent/Default/index.html.twig", 1);
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
        $__internal_c24e1339493292c581faa236f42a2a08951527920e817f901aae54d5e8572061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24e1339493292c581faa236f42a2a08951527920e817f901aae54d5e8572061->enter($__internal_c24e1339493292c581faa236f42a2a08951527920e817f901aae54d5e8572061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c24e1339493292c581faa236f42a2a08951527920e817f901aae54d5e8572061->leave($__internal_c24e1339493292c581faa236f42a2a08951527920e817f901aae54d5e8572061_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_b1e1be95e7d1648a95cae168751e562cdc2dfeb86b82292f5e2d6fe89cae6c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e1be95e7d1648a95cae168751e562cdc2dfeb86b82292f5e2d6fe89cae6c2e->enter($__internal_b1e1be95e7d1648a95cae168751e562cdc2dfeb86b82292f5e2d6fe89cae6c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_b1e1be95e7d1648a95cae168751e562cdc2dfeb86b82292f5e2d6fe89cae6c2e->leave($__internal_b1e1be95e7d1648a95cae168751e562cdc2dfeb86b82292f5e2d6fe89cae6c2e_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_ff12fbb4a734ba9b2c7f9ba7d558a4f45a59f9a811c81e3777841b9d87996bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff12fbb4a734ba9b2c7f9ba7d558a4f45a59f9a811c81e3777841b9d87996bd8->enter($__internal_ff12fbb4a734ba9b2c7f9ba7d558a4f45a59f9a811c81e3777841b9d87996bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-fw fa-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_ff12fbb4a734ba9b2c7f9ba7d558a4f45a59f9a811c81e3777841b9d87996bd8->leave($__internal_ff12fbb4a734ba9b2c7f9ba7d558a4f45a59f9a811c81e3777841b9d87996bd8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ae8947050efb47f8eeada3887deb60ccb084dcf6b6bdc1a45087a2aab3dbd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae8947050efb47f8eeada3887deb60ccb084dcf6b6bdc1a45087a2aab3dbd4b->enter($__internal_3ae8947050efb47f8eeada3887deb60ccb084dcf6b6bdc1a45087a2aab3dbd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_3ae8947050efb47f8eeada3887deb60ccb084dcf6b6bdc1a45087a2aab3dbd4b->leave($__internal_3ae8947050efb47f8eeada3887deb60ccb084dcf6b6bdc1a45087a2aab3dbd4b_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Default/index.html.twig";
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








", "@OrionEvent/Default/index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
