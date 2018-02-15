<?php

/* @OrionForum/Admin/remove_forum.html.twig */
class __TwigTemplate_ebfee0f1b9589e823d6bbece82dcc75bfaed67c59e1b3d0047feaa8d31a904b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionForumBundle::layout_user.html.twig", "@OrionForum/Admin/remove_forum.html.twig", 1);
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
        $__internal_e21c7af23c396a7bb7b7516dc2fbaf6232b0a6038bb60cbe726319dfa24edfba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21c7af23c396a7bb7b7516dc2fbaf6232b0a6038bb60cbe726319dfa24edfba->enter($__internal_e21c7af23c396a7bb7b7516dc2fbaf6232b0a6038bb60cbe726319dfa24edfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionForum/Admin/remove_forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e21c7af23c396a7bb7b7516dc2fbaf6232b0a6038bb60cbe726319dfa24edfba->leave($__internal_e21c7af23c396a7bb7b7516dc2fbaf6232b0a6038bb60cbe726319dfa24edfba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3aa1689d1a3e16be2a6043957ed72efa1dedd565744a0dbe6c01bfedb80f3ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa1689d1a3e16be2a6043957ed72efa1dedd565744a0dbe6c01bfedb80f3ee9->enter($__internal_3aa1689d1a3e16be2a6043957ed72efa1dedd565744a0dbe6c01bfedb80f3ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new category";
        
        $__internal_3aa1689d1a3e16be2a6043957ed72efa1dedd565744a0dbe6c01bfedb80f3ee9->leave($__internal_3aa1689d1a3e16be2a6043957ed72efa1dedd565744a0dbe6c01bfedb80f3ee9_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_093aedb3700c93228fe31c53fd32547e9a6abee68ac28e9f774c1069df7d1bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093aedb3700c93228fe31c53fd32547e9a6abee68ac28e9f774c1069df7d1bf2->enter($__internal_093aedb3700c93228fe31c53fd32547e9a6abee68ac28e9f774c1069df7d1bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_093aedb3700c93228fe31c53fd32547e9a6abee68ac28e9f774c1069df7d1bf2->leave($__internal_093aedb3700c93228fe31c53fd32547e9a6abee68ac28e9f774c1069df7d1bf2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_203be4a709072a6216c9d15565b5b0ef70782a1b58b60685d0d5730bc25ae137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203be4a709072a6216c9d15565b5b0ef70782a1b58b60685d0d5730bc25ae137->enter($__internal_203be4a709072a6216c9d15565b5b0ef70782a1b58b60685d0d5730bc25ae137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_203be4a709072a6216c9d15565b5b0ef70782a1b58b60685d0d5730bc25ae137->leave($__internal_203be4a709072a6216c9d15565b5b0ef70782a1b58b60685d0d5730bc25ae137_prof);

    }

    // line 37
    public function block_js($context, array $blocks = array())
    {
        $__internal_de3cb84c68744a74fc1da175abbf13e869c0d5fd8934a01624d10323ae33072e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3cb84c68744a74fc1da175abbf13e869c0d5fd8934a01624d10323ae33072e->enter($__internal_de3cb84c68744a74fc1da175abbf13e869c0d5fd8934a01624d10323ae33072e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_de3cb84c68744a74fc1da175abbf13e869c0d5fd8934a01624d10323ae33072e->leave($__internal_de3cb84c68744a74fc1da175abbf13e869c0d5fd8934a01624d10323ae33072e_prof);

    }

    public function getTemplateName()
    {
        return "@OrionForum/Admin/remove_forum.html.twig";
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
", "@OrionForum/Admin/remove_forum.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle\\Resources\\views\\Admin\\remove_forum.html.twig");
    }
}
