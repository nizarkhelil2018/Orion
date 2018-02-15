<?php

/* @OrionForum/Admin/category.html.twig */
class __TwigTemplate_1ef32d02c1626888c89879e81f0dc753a2d327f66908dd3fc118472f281536e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionForumBundle::layout_user.html.twig", "@OrionForum/Admin/category.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionForumBundle::layout_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bed1d3eb350d48cffce0614836129ef6756c2985a1d7245086f444d132c6971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bed1d3eb350d48cffce0614836129ef6756c2985a1d7245086f444d132c6971->enter($__internal_1bed1d3eb350d48cffce0614836129ef6756c2985a1d7245086f444d132c6971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionForum/Admin/category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bed1d3eb350d48cffce0614836129ef6756c2985a1d7245086f444d132c6971->leave($__internal_1bed1d3eb350d48cffce0614836129ef6756c2985a1d7245086f444d132c6971_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b74d0368882722b5ae16de11339a8db3b5ce6eb9283914fc3b6736bf8def021d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74d0368882722b5ae16de11339a8db3b5ce6eb9283914fc3b6736bf8def021d->enter($__internal_b74d0368882722b5ae16de11339a8db3b5ce6eb9283914fc3b6736bf8def021d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new category";
        
        $__internal_b74d0368882722b5ae16de11339a8db3b5ce6eb9283914fc3b6736bf8def021d->leave($__internal_b74d0368882722b5ae16de11339a8db3b5ce6eb9283914fc3b6736bf8def021d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a08c6ed1579cfad74dbf4c5605426aa2f76b304d24ccf15d8ef16ba46ee6fdd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08c6ed1579cfad74dbf4c5605426aa2f76b304d24ccf15d8ef16ba46ee6fdd4->enter($__internal_a08c6ed1579cfad74dbf4c5605426aa2f76b304d24ccf15d8ef16ba46ee6fdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a08c6ed1579cfad74dbf4c5605426aa2f76b304d24ccf15d8ef16ba46ee6fdd4->leave($__internal_a08c6ed1579cfad74dbf4c5605426aa2f76b304d24ccf15d8ef16ba46ee6fdd4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c84770a65c1a104a96b55fa2c428bc7d680ed9e35ae788b63e0eb205b82eedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c84770a65c1a104a96b55fa2c428bc7d680ed9e35ae788b63e0eb205b82eedf->enter($__internal_8c84770a65c1a104a96b55fa2c428bc7d680ed9e35ae788b63e0eb205b82eedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<hr />
<div class=\"col-md-6\">
  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.category.form.title"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
      <div class=\"form-group col-md-12\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"form-group\">
        <div class=\"col-md-4\">
          ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label', array("label" => "orion.forum.category.position"));
        echo "
          ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-8\">
          ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "readAuthorisedRoles", array()), 'label');
        echo "
          ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "readAuthorisedRoles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group col-md-12\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.btn.submit"), "html", null, true);
        echo "</button>
      </div>
      ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
";
        
        $__internal_8c84770a65c1a104a96b55fa2c428bc7d680ed9e35ae788b63e0eb205b82eedf->leave($__internal_8c84770a65c1a104a96b55fa2c428bc7d680ed9e35ae788b63e0eb205b82eedf_prof);

    }

    // line 40
    public function block_js($context, array $blocks = array())
    {
        $__internal_fe39a659c77673dd971dbdc91148baf9741d19005c3d061369b770a1bb9e7299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe39a659c77673dd971dbdc91148baf9741d19005c3d061369b770a1bb9e7299->enter($__internal_fe39a659c77673dd971dbdc91148baf9741d19005c3d061369b770a1bb9e7299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_fe39a659c77673dd971dbdc91148baf9741d19005c3d061369b770a1bb9e7299->leave($__internal_fe39a659c77673dd971dbdc91148baf9741d19005c3d061369b770a1bb9e7299_prof);

    }

    public function getTemplateName()
    {
        return "@OrionForum/Admin/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  118 => 32,  113 => 30,  106 => 26,  102 => 25,  96 => 22,  92 => 21,  85 => 17,  81 => 16,  76 => 14,  71 => 12,  66 => 9,  60 => 8,  49 => 6,  37 => 4,  11 => 1,);
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
    <div class=\"panel-heading\">{{ 'orion.forum.category.form.title'|trans }}</div>
    <div class=\"panel-body\">
      {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
      <div class=\"form-group col-md-12\">
        {{ form_label(form.name) }}
        {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"form-group\">
        <div class=\"col-md-4\">
          {{ form_label(form.position, 'orion.forum.category.position') }}
          {{ form_widget(form.position, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col-md-8\">
          {{ form_label(form.readAuthorisedRoles) }}
          {{ form_widget(form.readAuthorisedRoles, {'attr': {'class': 'form-control'}}) }}
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

{% block js %}{% endblock %}
", "@OrionForum/Admin/category.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle\\Resources\\views\\Admin\\category.html.twig");
    }
}
