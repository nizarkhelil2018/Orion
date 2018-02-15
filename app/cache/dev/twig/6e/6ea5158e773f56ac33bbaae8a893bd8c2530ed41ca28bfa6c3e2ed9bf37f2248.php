<?php

/* @OrionForum/Admin/remove_category.html.twig */
class __TwigTemplate_f75e3a6ba4f14ee8bb861d2b64fc58bf6b53b279df241c7e2d1b1b6707db25bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionForumBundle::layout_user.html.twig", "@OrionForum/Admin/remove_category.html.twig", 1);
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
        $__internal_8822f21e8dbf5bea770f2167ddacc6ebbe214a5541554f23d3f6d4f42546b2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8822f21e8dbf5bea770f2167ddacc6ebbe214a5541554f23d3f6d4f42546b2f9->enter($__internal_8822f21e8dbf5bea770f2167ddacc6ebbe214a5541554f23d3f6d4f42546b2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionForum/Admin/remove_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8822f21e8dbf5bea770f2167ddacc6ebbe214a5541554f23d3f6d4f42546b2f9->leave($__internal_8822f21e8dbf5bea770f2167ddacc6ebbe214a5541554f23d3f6d4f42546b2f9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3377a7ab0bc49e94728c32104167e4c8e4f7875eb30c823e150e08673976fa87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3377a7ab0bc49e94728c32104167e4c8e4f7875eb30c823e150e08673976fa87->enter($__internal_3377a7ab0bc49e94728c32104167e4c8e4f7875eb30c823e150e08673976fa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new category";
        
        $__internal_3377a7ab0bc49e94728c32104167e4c8e4f7875eb30c823e150e08673976fa87->leave($__internal_3377a7ab0bc49e94728c32104167e4c8e4f7875eb30c823e150e08673976fa87_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8b8d7d929dd742bcbad55cb99794603b48faf20b87a23f97832e0961efc747b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b8d7d929dd742bcbad55cb99794603b48faf20b87a23f97832e0961efc747b->enter($__internal_c8b8d7d929dd742bcbad55cb99794603b48faf20b87a23f97832e0961efc747b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c8b8d7d929dd742bcbad55cb99794603b48faf20b87a23f97832e0961efc747b->leave($__internal_c8b8d7d929dd742bcbad55cb99794603b48faf20b87a23f97832e0961efc747b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_60d964f92f06aee2d028cae2e10e1f4a7f06ef02c95cf55716611a9cd368e1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d964f92f06aee2d028cae2e10e1f4a7f06ef02c95cf55716611a9cd368e1f5->enter($__internal_60d964f92f06aee2d028cae2e10e1f4a7f06ef02c95cf55716611a9cd368e1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<hr />
<div class=\"col-md-6\">
  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.category.form.deletetitle"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
      <div class=\"form-group col-md-12\">
          ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "movedTo", array()), 'label', array("label" => "orion.forum.category.form.movedto"));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "purge", array()), 'label', array("label" => "orion.forum.category.form.purge"));
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
        
        $__internal_60d964f92f06aee2d028cae2e10e1f4a7f06ef02c95cf55716611a9cd368e1f5->leave($__internal_60d964f92f06aee2d028cae2e10e1f4a7f06ef02c95cf55716611a9cd368e1f5_prof);

    }

    // line 37
    public function block_js($context, array $blocks = array())
    {
        $__internal_4fb4e030b2a0c181d8128411757daf28c0c79cf9951bd709147e4f3423fad899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb4e030b2a0c181d8128411757daf28c0c79cf9951bd709147e4f3423fad899->enter($__internal_4fb4e030b2a0c181d8128411757daf28c0c79cf9951bd709147e4f3423fad899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_4fb4e030b2a0c181d8128411757daf28c0c79cf9951bd709147e4f3423fad899->leave($__internal_4fb4e030b2a0c181d8128411757daf28c0c79cf9951bd709147e4f3423fad899_prof);

    }

    public function getTemplateName()
    {
        return "@OrionForum/Admin/remove_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 37,  109 => 29,  104 => 27,  95 => 21,  91 => 20,  85 => 17,  81 => 16,  76 => 14,  71 => 12,  66 => 9,  60 => 8,  49 => 6,  37 => 4,  11 => 1,);
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
    <div class=\"panel-heading\">{{ 'orion.forum.category.form.deletetitle'|trans }}</div>
    <div class=\"panel-body\">
      {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
      <div class=\"form-group col-md-12\">
          {{ form_label(form.movedTo, 'orion.forum.category.form.movedto') }}
          {{ form_widget(form.movedTo, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"checkbox col-md-12\">
        {{ form_widget(form.purge) }}
          {{ form_label(form.purge, 'orion.forum.category.form.purge') }}
          
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
", "@OrionForum/Admin/remove_category.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle\\Resources\\views\\Admin\\remove_category.html.twig");
    }
}
