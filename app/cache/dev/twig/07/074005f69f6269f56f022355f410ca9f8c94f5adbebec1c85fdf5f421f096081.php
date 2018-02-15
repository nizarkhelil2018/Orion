<?php

/* @OrionForum/Form/topic_edit.html.twig */
class __TwigTemplate_aa2d5ed461e276afcd1f193c62860a8ce5653a67afd990cad5ece31543b511ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionForumBundle::layout_user.html.twig", "@OrionForum/Form/topic_edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionForumBundle::layout_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af02b74d1f17c43744991cee87c015702b0cabb171d5677bbbe60a77e360a9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af02b74d1f17c43744991cee87c015702b0cabb171d5677bbbe60a77e360a9a3->enter($__internal_af02b74d1f17c43744991cee87c015702b0cabb171d5677bbbe60a77e360a9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionForum/Form/topic_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af02b74d1f17c43744991cee87c015702b0cabb171d5677bbbe60a77e360a9a3->leave($__internal_af02b74d1f17c43744991cee87c015702b0cabb171d5677bbbe60a77e360a9a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9bf64c9891ff66733f847167e4b9b4e787a566269d926947265d9038def70c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bf64c9891ff66733f847167e4b9b4e787a566269d926947265d9038def70c3->enter($__internal_a9bf64c9891ff66733f847167e4b9b4e787a566269d926947265d9038def70c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a9bf64c9891ff66733f847167e4b9b4e787a566269d926947265d9038def70c3->leave($__internal_a9bf64c9891ff66733f847167e4b9b4e787a566269d926947265d9038def70c3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7359d42868e170d5bfdfc351ca87af8f337f239bf7be2da5a34c7ca8876c700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7359d42868e170d5bfdfc351ca87af8f337f239bf7be2da5a34c7ca8876c700->enter($__internal_b7359d42868e170d5bfdfc351ca87af8f337f239bf7be2da5a34c7ca8876c700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.btn.submit"), "html", null, true);
        echo "</button>
      </div>
    </div>
      ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div> </div>
";
        
        $__internal_b7359d42868e170d5bfdfc351ca87af8f337f239bf7be2da5a34c7ca8876c700->leave($__internal_b7359d42868e170d5bfdfc351ca87af8f337f239bf7be2da5a34c7ca8876c700_prof);

    }

    public function getTemplateName()
    {
        return "@OrionForum/Form/topic_edit.html.twig";
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
        return new Twig_Source("{% extends 'OrionForumBundle::layout_user.html.twig' %}

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
        <button type=\"submit\" class=\"btn btn-primary\">{{ 'orion.forum.btn.submit'|trans }}</button>
      </div>
    </div>
      {{ form_end(form) }}
    </div> </div>
{% endblock %}
", "@OrionForum/Form/topic_edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle\\Resources\\views\\Form\\topic_edit.html.twig");
    }
}
