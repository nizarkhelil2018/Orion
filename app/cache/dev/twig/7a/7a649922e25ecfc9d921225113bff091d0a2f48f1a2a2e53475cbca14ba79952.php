<?php

/* OrionForumBundle:Admin:remove_forum.html.twig */
class __TwigTemplate_d7e45e79b45889efc839c90ca8c4b1586b8a05185291a9412a76e315335f7f45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionForumBundle::layout_user.html.twig", "OrionForumBundle:Admin:remove_forum.html.twig", 1);
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
        $__internal_244205de14abb2439276f30b7b016c58644aa431fed1c33eaf78448f06ad5c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244205de14abb2439276f30b7b016c58644aa431fed1c33eaf78448f06ad5c30->enter($__internal_244205de14abb2439276f30b7b016c58644aa431fed1c33eaf78448f06ad5c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionForumBundle:Admin:remove_forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_244205de14abb2439276f30b7b016c58644aa431fed1c33eaf78448f06ad5c30->leave($__internal_244205de14abb2439276f30b7b016c58644aa431fed1c33eaf78448f06ad5c30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c34849b515ce30a726de3941aa2e986217e90451dcef15868566ea05e64c78b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34849b515ce30a726de3941aa2e986217e90451dcef15868566ea05e64c78b0->enter($__internal_c34849b515ce30a726de3941aa2e986217e90451dcef15868566ea05e64c78b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new category";
        
        $__internal_c34849b515ce30a726de3941aa2e986217e90451dcef15868566ea05e64c78b0->leave($__internal_c34849b515ce30a726de3941aa2e986217e90451dcef15868566ea05e64c78b0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5294433673dab2f2f0eeb510e2f86d7d5b7488dc5ff7a9bf51b601ac219204a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5294433673dab2f2f0eeb510e2f86d7d5b7488dc5ff7a9bf51b601ac219204a->enter($__internal_c5294433673dab2f2f0eeb510e2f86d7d5b7488dc5ff7a9bf51b601ac219204a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c5294433673dab2f2f0eeb510e2f86d7d5b7488dc5ff7a9bf51b601ac219204a->leave($__internal_c5294433673dab2f2f0eeb510e2f86d7d5b7488dc5ff7a9bf51b601ac219204a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cfe5542a9ef65de767d9f36e53418870c0a6b3f1914f481ec95caddbc7cd4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfe5542a9ef65de767d9f36e53418870c0a6b3f1914f481ec95caddbc7cd4cc->enter($__internal_8cfe5542a9ef65de767d9f36e53418870c0a6b3f1914f481ec95caddbc7cd4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<hr />
<div class=\"col-md-6\">
  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.forum.form.deletetitle"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
      <div class=\"form-group col-md-12\">
          ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "movedTo", array()), 'label', array("label" => "orion.forum.forum.form.movedto"));
        echo "
          ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "movedTo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"checkbox col-md-12\">
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "purge", array()), 'widget');
        echo "
          ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "purge", array()), 'label', array("label" => "orion.forum.forum.form.purge"));
        echo "
          
      </div>
          
      <div class=\"form-group col-md-12\">
        <br /><br />
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.btn.submit"), "html", null, true);
        echo "</button>
      </div>
      ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
";
        
        $__internal_8cfe5542a9ef65de767d9f36e53418870c0a6b3f1914f481ec95caddbc7cd4cc->leave($__internal_8cfe5542a9ef65de767d9f36e53418870c0a6b3f1914f481ec95caddbc7cd4cc_prof);

    }

    // line 37
    public function block_js($context, array $blocks = array())
    {
        $__internal_73569e5f671b75fd435cac18b33f6b3e7eb8170bff227c38992d71da2434a75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73569e5f671b75fd435cac18b33f6b3e7eb8170bff227c38992d71da2434a75c->enter($__internal_73569e5f671b75fd435cac18b33f6b3e7eb8170bff227c38992d71da2434a75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_73569e5f671b75fd435cac18b33f6b3e7eb8170bff227c38992d71da2434a75c->leave($__internal_73569e5f671b75fd435cac18b33f6b3e7eb8170bff227c38992d71da2434a75c_prof);

    }

    public function getTemplateName()
    {
        return "OrionForumBundle:Admin:remove_forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  110 => 29,  105 => 27,  96 => 21,  92 => 20,  86 => 17,  82 => 16,  77 => 14,  72 => 12,  66 => 8,  60 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
    <div class=\"panel-heading\">{{ 'orion.forum.forum.form.deletetitle'|trans }}</div>
    <div class=\"panel-body\">
      {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
      <div class=\"form-group col-md-12\">
          {{ form_label(form.movedTo, 'orion.forum.forum.form.movedto') }}
          {{ form_widget(form.movedTo, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"checkbox col-md-12\">
        {{ form_widget(form.purge) }}
          {{ form_label(form.purge, 'orion.forum.forum.form.purge') }}
          
      </div>
          
      <div class=\"form-group col-md-12\">
        <br /><br />
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">{{ 'orion.forum.btn.submit'|trans }}</button>
      </div>
      {{ form_end(form) }}
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
{% endblock %}

{% block js %}{% endblock %}
", "OrionForumBundle:Admin:remove_forum.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle/Resources/views/Admin/remove_forum.html.twig");
    }
}
