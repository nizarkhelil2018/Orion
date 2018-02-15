<?php

/* @DForum/Admin/remove_forum.html.twig */
class __TwigTemplate_fd789097a0db7b128deea3ca9ec4ccfa6518160dc006cc8010bbcf677eba0a8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "@DForum/Admin/remove_forum.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d31e80ec87d9fc2d7228089f97f3545eb67bc37d14bc3bad7bb6c421d69d0a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31e80ec87d9fc2d7228089f97f3545eb67bc37d14bc3bad7bb6c421d69d0a15->enter($__internal_d31e80ec87d9fc2d7228089f97f3545eb67bc37d14bc3bad7bb6c421d69d0a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DForum/Admin/remove_forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d31e80ec87d9fc2d7228089f97f3545eb67bc37d14bc3bad7bb6c421d69d0a15->leave($__internal_d31e80ec87d9fc2d7228089f97f3545eb67bc37d14bc3bad7bb6c421d69d0a15_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_703b77b58d878cec92a2fb95515650c10c4db39fc47f5be1dfc92a2ed931b9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703b77b58d878cec92a2fb95515650c10c4db39fc47f5be1dfc92a2ed931b9dc->enter($__internal_703b77b58d878cec92a2fb95515650c10c4db39fc47f5be1dfc92a2ed931b9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new category";
        
        $__internal_703b77b58d878cec92a2fb95515650c10c4db39fc47f5be1dfc92a2ed931b9dc->leave($__internal_703b77b58d878cec92a2fb95515650c10c4db39fc47f5be1dfc92a2ed931b9dc_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c00bb4c43995f7926bf500bafa2acb9501be6e4409610d8de782c13372c17b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00bb4c43995f7926bf500bafa2acb9501be6e4409610d8de782c13372c17b83->enter($__internal_c00bb4c43995f7926bf500bafa2acb9501be6e4409610d8de782c13372c17b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c00bb4c43995f7926bf500bafa2acb9501be6e4409610d8de782c13372c17b83->leave($__internal_c00bb4c43995f7926bf500bafa2acb9501be6e4409610d8de782c13372c17b83_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_caf6cd407c09436dd8a6514843f092178bf54310307006392ffc15389feebcfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf6cd407c09436dd8a6514843f092178bf54310307006392ffc15389feebcfe->enter($__internal_caf6cd407c09436dd8a6514843f092178bf54310307006392ffc15389feebcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<hr />
<div class=\"col-md-6\">
  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.forum.form.deletetitle"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
      <div class=\"form-group col-md-12\">
          ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "movedTo", array()), 'label', array("label" => "discutea.forum.forum.form.movedto"));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "purge", array()), 'label', array("label" => "discutea.forum.forum.form.purge"));
        echo "
          
      </div>
          
      <div class=\"form-group col-md-12\">
        <br /><br />
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.btn.submit"), "html", null, true);
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
        
        $__internal_caf6cd407c09436dd8a6514843f092178bf54310307006392ffc15389feebcfe->leave($__internal_caf6cd407c09436dd8a6514843f092178bf54310307006392ffc15389feebcfe_prof);

    }

    // line 37
    public function block_js($context, array $blocks = array())
    {
        $__internal_84eb64cc596bd4d8f126dd3027618544cd927abfea0fe34dc5ec941df37ef3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84eb64cc596bd4d8f126dd3027618544cd927abfea0fe34dc5ec941df37ef3e5->enter($__internal_84eb64cc596bd4d8f126dd3027618544cd927abfea0fe34dc5ec941df37ef3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_84eb64cc596bd4d8f126dd3027618544cd927abfea0fe34dc5ec941df37ef3e5->leave($__internal_84eb64cc596bd4d8f126dd3027618544cd927abfea0fe34dc5ec941df37ef3e5_prof);

    }

    public function getTemplateName()
    {
        return "@DForum/Admin/remove_forum.html.twig";
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
        return new Twig_Source("{% extends \"DForumBundle::layout.html.twig\" %}

{% block title %}new category{% endblock %}

{% block stylesheets %}{% endblock %}

{% block body %}

<hr />
<div class=\"col-md-6\">
  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">{{ 'discutea.forum.forum.form.deletetitle'|trans }}</div>
    <div class=\"panel-body\">
      {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
      <div class=\"form-group col-md-12\">
          {{ form_label(form.movedTo, 'discutea.forum.forum.form.movedto') }}
          {{ form_widget(form.movedTo, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"checkbox col-md-12\">
        {{ form_widget(form.purge) }}
          {{ form_label(form.purge, 'discutea.forum.forum.form.purge') }}
          
      </div>
          
      <div class=\"form-group col-md-12\">
        <br /><br />
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">{{ 'discutea.forum.btn.submit'|trans }}</button>
      </div>
      {{ form_end(form) }}
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
{% endblock %}

{% block js %}{% endblock %}
", "@DForum/Admin/remove_forum.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\Admin\\remove_forum.html.twig");
    }
}
