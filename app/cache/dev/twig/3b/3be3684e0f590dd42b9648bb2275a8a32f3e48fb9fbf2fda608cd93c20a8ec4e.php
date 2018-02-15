<?php

/* OrionForumBundle:Admin:remove_category.html.twig */
class __TwigTemplate_cabe129080340cb17b04b74b462e425d838d0ea97098522b56fed7dfac175d4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionForumBundle::layout_user.html.twig", "OrionForumBundle:Admin:remove_category.html.twig", 1);
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
        $__internal_524c0909608ff820d905bd966c6fb67c595f2f68fc4d6af090355d8c8055afdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524c0909608ff820d905bd966c6fb67c595f2f68fc4d6af090355d8c8055afdf->enter($__internal_524c0909608ff820d905bd966c6fb67c595f2f68fc4d6af090355d8c8055afdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionForumBundle:Admin:remove_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524c0909608ff820d905bd966c6fb67c595f2f68fc4d6af090355d8c8055afdf->leave($__internal_524c0909608ff820d905bd966c6fb67c595f2f68fc4d6af090355d8c8055afdf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_091c41a5e4ed4155008737539bb5ec2acdfb9ca8a3cfae58b447683cdc2f8cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091c41a5e4ed4155008737539bb5ec2acdfb9ca8a3cfae58b447683cdc2f8cb0->enter($__internal_091c41a5e4ed4155008737539bb5ec2acdfb9ca8a3cfae58b447683cdc2f8cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new category";
        
        $__internal_091c41a5e4ed4155008737539bb5ec2acdfb9ca8a3cfae58b447683cdc2f8cb0->leave($__internal_091c41a5e4ed4155008737539bb5ec2acdfb9ca8a3cfae58b447683cdc2f8cb0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1c1cef6442c79438acae6980571fa5c2260bc8f658e671a3d2c43d05408f6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c1cef6442c79438acae6980571fa5c2260bc8f658e671a3d2c43d05408f6d2->enter($__internal_f1c1cef6442c79438acae6980571fa5c2260bc8f658e671a3d2c43d05408f6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f1c1cef6442c79438acae6980571fa5c2260bc8f658e671a3d2c43d05408f6d2->leave($__internal_f1c1cef6442c79438acae6980571fa5c2260bc8f658e671a3d2c43d05408f6d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e125b42b2e02beefbcfedcb5115f2ae9f627c971c8d6458eb34bbe2b55312ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e125b42b2e02beefbcfedcb5115f2ae9f627c971c8d6458eb34bbe2b55312ad1->enter($__internal_e125b42b2e02beefbcfedcb5115f2ae9f627c971c8d6458eb34bbe2b55312ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e125b42b2e02beefbcfedcb5115f2ae9f627c971c8d6458eb34bbe2b55312ad1->leave($__internal_e125b42b2e02beefbcfedcb5115f2ae9f627c971c8d6458eb34bbe2b55312ad1_prof);

    }

    // line 37
    public function block_js($context, array $blocks = array())
    {
        $__internal_4c2bcfd6f3bb50eb7c79d35598f89d7bff0ea605557a91e33d269465bd117f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2bcfd6f3bb50eb7c79d35598f89d7bff0ea605557a91e33d269465bd117f4b->enter($__internal_4c2bcfd6f3bb50eb7c79d35598f89d7bff0ea605557a91e33d269465bd117f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_4c2bcfd6f3bb50eb7c79d35598f89d7bff0ea605557a91e33d269465bd117f4b->leave($__internal_4c2bcfd6f3bb50eb7c79d35598f89d7bff0ea605557a91e33d269465bd117f4b_prof);

    }

    public function getTemplateName()
    {
        return "OrionForumBundle:Admin:remove_category.html.twig";
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
", "OrionForumBundle:Admin:remove_category.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle/Resources/views/Admin/remove_category.html.twig");
    }
}
