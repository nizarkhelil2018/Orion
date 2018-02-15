<?php

/* @DForum/Admin/remove_category.html.twig */
class __TwigTemplate_a5287a0f58e80506ba299ea60bce32ed357df71e0fdb0cc58abb268a4ad77b80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "@DForum/Admin/remove_category.html.twig", 1);
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
        $__internal_1bd62a093c35722f6c05be05dad96116df76f231bbf698d02400df87dc2f7c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd62a093c35722f6c05be05dad96116df76f231bbf698d02400df87dc2f7c22->enter($__internal_1bd62a093c35722f6c05be05dad96116df76f231bbf698d02400df87dc2f7c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DForum/Admin/remove_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bd62a093c35722f6c05be05dad96116df76f231bbf698d02400df87dc2f7c22->leave($__internal_1bd62a093c35722f6c05be05dad96116df76f231bbf698d02400df87dc2f7c22_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bf3c69f93a415d63d041fddac82af30e78d9b93efe03170137b29e0325159d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf3c69f93a415d63d041fddac82af30e78d9b93efe03170137b29e0325159d7->enter($__internal_5bf3c69f93a415d63d041fddac82af30e78d9b93efe03170137b29e0325159d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new category";
        
        $__internal_5bf3c69f93a415d63d041fddac82af30e78d9b93efe03170137b29e0325159d7->leave($__internal_5bf3c69f93a415d63d041fddac82af30e78d9b93efe03170137b29e0325159d7_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e2d259011ec224d4d4723974fc3d7540a9e373a453e2a034d378204ab873760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2d259011ec224d4d4723974fc3d7540a9e373a453e2a034d378204ab873760->enter($__internal_9e2d259011ec224d4d4723974fc3d7540a9e373a453e2a034d378204ab873760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9e2d259011ec224d4d4723974fc3d7540a9e373a453e2a034d378204ab873760->leave($__internal_9e2d259011ec224d4d4723974fc3d7540a9e373a453e2a034d378204ab873760_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb364f84710a53ce34c45e3146f233e5b60d11670e0027f4c08156fc49c4efca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb364f84710a53ce34c45e3146f233e5b60d11670e0027f4c08156fc49c4efca->enter($__internal_cb364f84710a53ce34c45e3146f233e5b60d11670e0027f4c08156fc49c4efca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<hr />
<div class=\"col-md-6\">
  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.category.form.deletetitle"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
      <div class=\"form-group col-md-12\">
          ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "movedTo", array()), 'label', array("label" => "discutea.forum.category.form.movedto"));
        echo "
          ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "movedTo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"checkbox col-md-12\">
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "purge", array()), 'widget');
        echo "
          ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "purge", array()), 'label', array("label" => "discutea.forum.category.form.purge"));
        echo "
          
      </div>
          
      <div class=\"form-group col-md-12\">
        <br /><br />
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.btn.submit"), "html", null, true);
        echo "</button>
      </div>
      ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
";
        
        $__internal_cb364f84710a53ce34c45e3146f233e5b60d11670e0027f4c08156fc49c4efca->leave($__internal_cb364f84710a53ce34c45e3146f233e5b60d11670e0027f4c08156fc49c4efca_prof);

    }

    // line 36
    public function block_js($context, array $blocks = array())
    {
        $__internal_4ca1939a3885b40377e6f5743bffbd07e7be1f6fd8eb3917600cce951d5cecc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca1939a3885b40377e6f5743bffbd07e7be1f6fd8eb3917600cce951d5cecc5->enter($__internal_4ca1939a3885b40377e6f5743bffbd07e7be1f6fd8eb3917600cce951d5cecc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_4ca1939a3885b40377e6f5743bffbd07e7be1f6fd8eb3917600cce951d5cecc5->leave($__internal_4ca1939a3885b40377e6f5743bffbd07e7be1f6fd8eb3917600cce951d5cecc5_prof);

    }

    public function getTemplateName()
    {
        return "@DForum/Admin/remove_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 36,  109 => 28,  104 => 26,  95 => 20,  91 => 19,  85 => 16,  81 => 15,  76 => 13,  71 => 11,  66 => 8,  60 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
    <div class=\"panel-heading\">{{ 'discutea.forum.category.form.deletetitle'|trans }}</div>
    <div class=\"panel-body\">
      {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
      <div class=\"form-group col-md-12\">
          {{ form_label(form.movedTo, 'discutea.forum.category.form.movedto') }}
          {{ form_widget(form.movedTo, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"checkbox col-md-12\">
        {{ form_widget(form.purge) }}
          {{ form_label(form.purge, 'discutea.forum.category.form.purge') }}
          
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
", "@DForum/Admin/remove_category.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\Admin\\remove_category.html.twig");
    }
}
