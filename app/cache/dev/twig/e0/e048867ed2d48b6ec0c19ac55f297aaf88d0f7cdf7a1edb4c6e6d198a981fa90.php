<?php

/* @DForum/Form/topic_edit.html.twig */
class __TwigTemplate_71f14d0af25069f548e3dd2e54109848149179e00695d0d2fe8199c41a39d5dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "@DForum/Form/topic_edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2f744ecf9f177f4946ed616aa76a72637199be199ceb0c4f16895426a060dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f744ecf9f177f4946ed616aa76a72637199be199ceb0c4f16895426a060dc7->enter($__internal_d2f744ecf9f177f4946ed616aa76a72637199be199ceb0c4f16895426a060dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DForum/Form/topic_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f744ecf9f177f4946ed616aa76a72637199be199ceb0c4f16895426a060dc7->leave($__internal_d2f744ecf9f177f4946ed616aa76a72637199be199ceb0c4f16895426a060dc7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8154a41beb3e2268667ab5ad972fb33d27f23810f4491af5a58385aa4e846ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8154a41beb3e2268667ab5ad972fb33d27f23810f4491af5a58385aa4e846ca->enter($__internal_b8154a41beb3e2268667ab5ad972fb33d27f23810f4491af5a58385aa4e846ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b8154a41beb3e2268667ab5ad972fb33d27f23810f4491af5a58385aa4e846ca->leave($__internal_b8154a41beb3e2268667ab5ad972fb33d27f23810f4491af5a58385aa4e846ca_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba8796f1e06448a9117521ce7f55038a9722ada8854fbe83261487e04b5511a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8796f1e06448a9117521ce7f55038a9722ada8854fbe83261487e04b5511a2->enter($__internal_ba8796f1e06448a9117521ce7f55038a9722ada8854fbe83261487e04b5511a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
      <br /> 
    <div class=\"col-xs-12\">
      ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
      <div class=\"form-group\">
      ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
      ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "forum", array()), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "forum", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    <div class=\"form-group\">
      <div class=\"pull-right\">
        <button type=\"submit\" class=\"btn btn-success fa fa-check\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.btn.submit"), "html", null, true);
        echo "</button>
      </div>
    </div>
      ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div> </div>
";
        
        $__internal_ba8796f1e06448a9117521ce7f55038a9722ada8854fbe83261487e04b5511a2->leave($__internal_ba8796f1e06448a9117521ce7f55038a9722ada8854fbe83261487e04b5511a2_prof);

    }

    public function getTemplateName()
    {
        return "@DForum/Form/topic_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  83 => 20,  76 => 16,  72 => 15,  66 => 12,  62 => 11,  57 => 9,  52 => 6,  46 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DForumBundle::layout.html.twig\" %}

{% block title %}{% endblock %}

{% block body %}
    <div class=\"container\">
      <br /> 
    <div class=\"col-xs-12\">
      {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
      <div class=\"form-group\">
      {{ form_label(form.title) }}
      {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"form-group\">
        {{ form_label(form.forum) }}
        {{ form_widget(form.forum, {'attr': {'class': 'form-control'}}) }}
      </div>
    <div class=\"form-group\">
      <div class=\"pull-right\">
        <button type=\"submit\" class=\"btn btn-success fa fa-check\">{{ 'discutea.forum.btn.submit'|trans }}</button>
      </div>
    </div>
      {{ form_end(form) }}
    </div> </div>
{% endblock %}
", "@DForum/Form/topic_edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\Form\\topic_edit.html.twig");
    }
}
