<?php

/* @DForum/Admin/category.html.twig */
class __TwigTemplate_6a61294adf5be0af713bb1b96aeeb934c476a626d9cf3d15ac1faa7c3ada92bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "@DForum/Admin/category.html.twig", 1);
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
        $__internal_7252d94361b08dcf380216e9e838a60873c57e478ec1d71403fdf2e3eefa7114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7252d94361b08dcf380216e9e838a60873c57e478ec1d71403fdf2e3eefa7114->enter($__internal_7252d94361b08dcf380216e9e838a60873c57e478ec1d71403fdf2e3eefa7114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DForum/Admin/category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7252d94361b08dcf380216e9e838a60873c57e478ec1d71403fdf2e3eefa7114->leave($__internal_7252d94361b08dcf380216e9e838a60873c57e478ec1d71403fdf2e3eefa7114_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3c360303eb54e323e4da212d9e3a4b2fd5868aaf9e2890251848f484c0e37e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c360303eb54e323e4da212d9e3a4b2fd5868aaf9e2890251848f484c0e37e5->enter($__internal_d3c360303eb54e323e4da212d9e3a4b2fd5868aaf9e2890251848f484c0e37e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new category";
        
        $__internal_d3c360303eb54e323e4da212d9e3a4b2fd5868aaf9e2890251848f484c0e37e5->leave($__internal_d3c360303eb54e323e4da212d9e3a4b2fd5868aaf9e2890251848f484c0e37e5_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27fc7fcd2da77f2b646af3968d92d25e64b2bad32180ef2f463e4a1a138b0f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fc7fcd2da77f2b646af3968d92d25e64b2bad32180ef2f463e4a1a138b0f94->enter($__internal_27fc7fcd2da77f2b646af3968d92d25e64b2bad32180ef2f463e4a1a138b0f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_27fc7fcd2da77f2b646af3968d92d25e64b2bad32180ef2f463e4a1a138b0f94->leave($__internal_27fc7fcd2da77f2b646af3968d92d25e64b2bad32180ef2f463e4a1a138b0f94_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b18610dd7733562f580daec24782f4e1448dfbf1498fd82e884651944f2b468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b18610dd7733562f580daec24782f4e1448dfbf1498fd82e884651944f2b468->enter($__internal_1b18610dd7733562f580daec24782f4e1448dfbf1498fd82e884651944f2b468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<hr />
<div class=\"col-md-6\">
  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.category.form.title"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
      <div class=\"form-group col-md-12\">
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"form-group\">
        <div class=\"col-md-4\">
          ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label', array("label" => "discutea.forum.category.position"));
        echo "
          ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-8\">
          ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "readAuthorisedRoles", array()), 'label');
        echo "
          ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "readAuthorisedRoles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
      </div>
      <div class=\"form-group col-md-12\">
        <button type=\"submit\" class=\"btn btn-success fa fa-check\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.btn.submit"), "html", null, true);
        echo "</button>
      </div>
      ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
";
        
        $__internal_1b18610dd7733562f580daec24782f4e1448dfbf1498fd82e884651944f2b468->leave($__internal_1b18610dd7733562f580daec24782f4e1448dfbf1498fd82e884651944f2b468_prof);

    }

    // line 39
    public function block_js($context, array $blocks = array())
    {
        $__internal_238b925f6f5e3ea9b8b386cef9290dceffbdce0c70583fdf82fb5b4619e55c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238b925f6f5e3ea9b8b386cef9290dceffbdce0c70583fdf82fb5b4619e55c79->enter($__internal_238b925f6f5e3ea9b8b386cef9290dceffbdce0c70583fdf82fb5b4619e55c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_238b925f6f5e3ea9b8b386cef9290dceffbdce0c70583fdf82fb5b4619e55c79->leave($__internal_238b925f6f5e3ea9b8b386cef9290dceffbdce0c70583fdf82fb5b4619e55c79_prof);

    }

    public function getTemplateName()
    {
        return "@DForum/Admin/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  118 => 31,  113 => 29,  106 => 25,  102 => 24,  96 => 21,  92 => 20,  85 => 16,  81 => 15,  76 => 13,  71 => 11,  66 => 8,  60 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
    <div class=\"panel-heading\">{{ 'discutea.forum.category.form.title'|trans }}</div>
    <div class=\"panel-body\">
      {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
      <div class=\"form-group col-md-12\">
        {{ form_label(form.name) }}
        {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"form-group\">
        <div class=\"col-md-4\">
          {{ form_label(form.position, 'discutea.forum.category.position') }}
          {{ form_widget(form.position, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col-md-8\">
          {{ form_label(form.readAuthorisedRoles) }}
          {{ form_widget(form.readAuthorisedRoles, {'attr': {'class': 'form-control'}}) }}
        </div>
      </div>
      <div class=\"form-group col-md-12\">
        <button type=\"submit\" class=\"btn btn-success fa fa-check\">{{ 'discutea.forum.btn.submit'|trans }}</button>
      </div>
      {{ form_end(form) }}
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
{% endblock %}

{% block js %}{% endblock %}
", "@DForum/Admin/category.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\Admin\\category.html.twig");
    }
}
