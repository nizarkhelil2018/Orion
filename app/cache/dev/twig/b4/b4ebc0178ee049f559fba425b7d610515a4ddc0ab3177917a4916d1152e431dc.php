<?php

/* DForumBundle::Form/topic_edit.html.twig */
class __TwigTemplate_de48f7baf4249ff5a38c525b75d6db54d1e8d93a48a2621bcb4146f3295df086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "DForumBundle::Form/topic_edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bb51eaf86264f11208aabf5e304e76c30febcfc0f45f00ed0fe96827f8de36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb51eaf86264f11208aabf5e304e76c30febcfc0f45f00ed0fe96827f8de36b->enter($__internal_2bb51eaf86264f11208aabf5e304e76c30febcfc0f45f00ed0fe96827f8de36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DForumBundle::Form/topic_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bb51eaf86264f11208aabf5e304e76c30febcfc0f45f00ed0fe96827f8de36b->leave($__internal_2bb51eaf86264f11208aabf5e304e76c30febcfc0f45f00ed0fe96827f8de36b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59fcf20f7b0ac527779bc74dbede6dcf9ad67c11815094d1465332a6d38053b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fcf20f7b0ac527779bc74dbede6dcf9ad67c11815094d1465332a6d38053b8->enter($__internal_59fcf20f7b0ac527779bc74dbede6dcf9ad67c11815094d1465332a6d38053b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_59fcf20f7b0ac527779bc74dbede6dcf9ad67c11815094d1465332a6d38053b8->leave($__internal_59fcf20f7b0ac527779bc74dbede6dcf9ad67c11815094d1465332a6d38053b8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_935af9c65c4bd0e9e498d34d64838e765c0b34c7605db9f5151dcfbaeaa09a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935af9c65c4bd0e9e498d34d64838e765c0b34c7605db9f5151dcfbaeaa09a41->enter($__internal_935af9c65c4bd0e9e498d34d64838e765c0b34c7605db9f5151dcfbaeaa09a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <button type=\"submit\" class=\"btn btn-success fa fa-check\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.btn.submit"), "html", null, true);
        echo "</button>
      </div>
    </div>
      ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div> </div>
";
        
        $__internal_935af9c65c4bd0e9e498d34d64838e765c0b34c7605db9f5151dcfbaeaa09a41->leave($__internal_935af9c65c4bd0e9e498d34d64838e765c0b34c7605db9f5151dcfbaeaa09a41_prof);

    }

    public function getTemplateName()
    {
        return "DForumBundle::Form/topic_edit.html.twig";
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
        return new Twig_Source("{% extends \"DForumBundle::layout.html.twig\" %}

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
        <button type=\"submit\" class=\"btn btn-success fa fa-check\">{{ 'discutea.forum.btn.submit'|trans }}</button>
      </div>
    </div>
      {{ form_end(form) }}
    </div> </div>
{% endblock %}
", "DForumBundle::Form/topic_edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle/Resources/views/Form/topic_edit.html.twig");
    }
}
