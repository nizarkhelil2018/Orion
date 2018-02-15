<?php

/* @OrionForum/Admin/forum.html.twig */
class __TwigTemplate_646089016063b5f275e010c75574a14d7961e95edd036893183befaa9fbb823d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionForumBundle::layout_user.html.twig", "@OrionForum/Admin/forum.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionForumBundle::layout_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0022cc087ed43ea118fb8a05c62b15f4b1512fb702f7c4bfde3ab3b098332a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0022cc087ed43ea118fb8a05c62b15f4b1512fb702f7c4bfde3ab3b098332a9->enter($__internal_b0022cc087ed43ea118fb8a05c62b15f4b1512fb702f7c4bfde3ab3b098332a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionForum/Admin/forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0022cc087ed43ea118fb8a05c62b15f4b1512fb702f7c4bfde3ab3b098332a9->leave($__internal_b0022cc087ed43ea118fb8a05c62b15f4b1512fb702f7c4bfde3ab3b098332a9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1da4fbf1f54ad135c72d3b5775066b37c0818d55cbe77cfe6c86ea5bf3be27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1da4fbf1f54ad135c72d3b5775066b37c0818d55cbe77cfe6c86ea5bf3be27e->enter($__internal_e1da4fbf1f54ad135c72d3b5775066b37c0818d55cbe77cfe6c86ea5bf3be27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new category";
        
        $__internal_e1da4fbf1f54ad135c72d3b5775066b37c0818d55cbe77cfe6c86ea5bf3be27e->leave($__internal_e1da4fbf1f54ad135c72d3b5775066b37c0818d55cbe77cfe6c86ea5bf3be27e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_785101f02db1fbe6400278747ac225944925289ba4cb81ac821ec285e9602f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785101f02db1fbe6400278747ac225944925289ba4cb81ac821ec285e9602f02->enter($__internal_785101f02db1fbe6400278747ac225944925289ba4cb81ac821ec285e9602f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_785101f02db1fbe6400278747ac225944925289ba4cb81ac821ec285e9602f02->leave($__internal_785101f02db1fbe6400278747ac225944925289ba4cb81ac821ec285e9602f02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c3d2a57489016c082812524df91828601e7e233b79cf1bc2f133a2a12ac352e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3d2a57489016c082812524df91828601e7e233b79cf1bc2f133a2a12ac352e->enter($__internal_3c3d2a57489016c082812524df91828601e7e233b79cf1bc2f133a2a12ac352e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<hr />
<div class=\"col-md-6\">
  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.forum.form.title"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
      <div class=\"form-group col-md-12\">
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"form-group col-md-12\">
        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"form-group col-md-12\">
        <div class=\"col-md-8\">
        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-4\">
          ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label', array("label" => "orion.forum.position"));
        echo "
          ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>       
      </div>
      <div class=\"form-group col-md-12\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.btn.submit"), "html", null, true);
        echo "</button>
      </div>
      ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
";
        
        $__internal_3c3d2a57489016c082812524df91828601e7e233b79cf1bc2f133a2a12ac352e->leave($__internal_3c3d2a57489016c082812524df91828601e7e233b79cf1bc2f133a2a12ac352e_prof);

    }

    public function getTemplateName()
    {
        return "@OrionForum/Admin/forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 37,  123 => 35,  116 => 31,  112 => 30,  106 => 27,  102 => 26,  95 => 22,  91 => 21,  85 => 18,  81 => 17,  76 => 15,  71 => 13,  65 => 9,  59 => 8,  48 => 6,  36 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OrionForumBundle::layout_user.html.twig' %}


{% block title %}new category{% endblock %}

{% block stylesheets %}{% endblock %}

{% block body %}

<hr />
<div class=\"col-md-6\">
  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">{{ 'orion.forum.forum.form.title'|trans }}</div>
    <div class=\"panel-body\">
      {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
      <div class=\"form-group col-md-12\">
        {{ form_label(form.name) }}
        {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"form-group col-md-12\">
        {{ form_label(form.description) }}
        {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"form-group col-md-12\">
        <div class=\"col-md-8\">
        {{ form_label(form.category) }}
        {{ form_widget(form.category, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col-md-4\">
          {{ form_label(form.position, 'orion.forum.position') }}
          {{ form_widget(form.position, {'attr': {'class': 'form-control'}}) }}
        </div>       
      </div>
      <div class=\"form-group col-md-12\">
        <button type=\"submit\" class=\"btn btn-primary\">{{ 'orion.forum.btn.submit'|trans }}</button>
      </div>
      {{ form_end(form) }}
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
{% endblock %}
", "@OrionForum/Admin/forum.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle\\Resources\\views\\Admin\\forum.html.twig");
    }
}
