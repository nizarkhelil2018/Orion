<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_31aba50e4c523e4b5777b8437264013c33a9f4dae1336d073e2b29e36e2f7ba3 extends Twig_Template
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
        $__internal_2f9527fd9ce2a665f41e7f1608784f889872f77ed55c4141424c7c4c20ba4a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9527fd9ce2a665f41e7f1608784f889872f77ed55c4141424c7c4c20ba4a36->enter($__internal_2f9527fd9ce2a665f41e7f1608784f889872f77ed55c4141424c7c4c20ba4a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f9527fd9ce2a665f41e7f1608784f889872f77ed55c4141424c7c4c20ba4a36->leave($__internal_2f9527fd9ce2a665f41e7f1608784f889872f77ed55c4141424c7c4c20ba4a36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c67b8beeedf54f3338e247472b9c164eaaff3397f11dd85840797c7356ac779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c67b8beeedf54f3338e247472b9c164eaaff3397f11dd85840797c7356ac779->enter($__internal_4c67b8beeedf54f3338e247472b9c164eaaff3397f11dd85840797c7356ac779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c67b8beeedf54f3338e247472b9c164eaaff3397f11dd85840797c7356ac779->leave($__internal_4c67b8beeedf54f3338e247472b9c164eaaff3397f11dd85840797c7356ac779_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fabfac21483ca24ae64aeb8de756cebc2c8649f38c247ebf42597c1c58443668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabfac21483ca24ae64aeb8de756cebc2c8649f38c247ebf42597c1c58443668->enter($__internal_fabfac21483ca24ae64aeb8de756cebc2c8649f38c247ebf42597c1c58443668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fabfac21483ca24ae64aeb8de756cebc2c8649f38c247ebf42597c1c58443668->leave($__internal_fabfac21483ca24ae64aeb8de756cebc2c8649f38c247ebf42597c1c58443668_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4582e0d011c28e081e4f150ef506210e42907a0fa8c11899c81abae7c13d935d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4582e0d011c28e081e4f150ef506210e42907a0fa8c11899c81abae7c13d935d->enter($__internal_4582e0d011c28e081e4f150ef506210e42907a0fa8c11899c81abae7c13d935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4582e0d011c28e081e4f150ef506210e42907a0fa8c11899c81abae7c13d935d->leave($__internal_4582e0d011c28e081e4f150ef506210e42907a0fa8c11899c81abae7c13d935d_prof);

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
