<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_158e18c613f24cb9140e9f900f52a83d946efc112a771f25cbfaeb4102fc74b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c33108bdca2dc9528602e204552ef3836eb3ce0c21904e6b52be62fa792e54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c33108bdca2dc9528602e204552ef3836eb3ce0c21904e6b52be62fa792e54c->enter($__internal_0c33108bdca2dc9528602e204552ef3836eb3ce0c21904e6b52be62fa792e54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c33108bdca2dc9528602e204552ef3836eb3ce0c21904e6b52be62fa792e54c->leave($__internal_0c33108bdca2dc9528602e204552ef3836eb3ce0c21904e6b52be62fa792e54c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_02aa87157c18a05fcf160689dbc2e0e05c2191f7c5e512c410378d31f4122f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02aa87157c18a05fcf160689dbc2e0e05c2191f7c5e512c410378d31f4122f92->enter($__internal_02aa87157c18a05fcf160689dbc2e0e05c2191f7c5e512c410378d31f4122f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_02aa87157c18a05fcf160689dbc2e0e05c2191f7c5e512c410378d31f4122f92->leave($__internal_02aa87157c18a05fcf160689dbc2e0e05c2191f7c5e512c410378d31f4122f92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41fccfa8b78ccb9e49b7ead9ed8b588e4e47db2ddd7ca95afc78ad77ad968d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41fccfa8b78ccb9e49b7ead9ed8b588e4e47db2ddd7ca95afc78ad77ad968d03->enter($__internal_41fccfa8b78ccb9e49b7ead9ed8b588e4e47db2ddd7ca95afc78ad77ad968d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_41fccfa8b78ccb9e49b7ead9ed8b588e4e47db2ddd7ca95afc78ad77ad968d03->leave($__internal_41fccfa8b78ccb9e49b7ead9ed8b588e4e47db2ddd7ca95afc78ad77ad968d03_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fcfecc63607c84cc68cd4ce012b46400a0fcb6600e0ddcac3ab9e50ef54cd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fcfecc63607c84cc68cd4ce012b46400a0fcb6600e0ddcac3ab9e50ef54cd68->enter($__internal_2fcfecc63607c84cc68cd4ce012b46400a0fcb6600e0ddcac3ab9e50ef54cd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2fcfecc63607c84cc68cd4ce012b46400a0fcb6600e0ddcac3ab9e50ef54cd68->leave($__internal_2fcfecc63607c84cc68cd4ce012b46400a0fcb6600e0ddcac3ab9e50ef54cd68_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
