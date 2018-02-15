<?php

/* OrionForumBundle:Form:topic_edit.html.twig */
class __TwigTemplate_7b74d20aeedf8bef71745791e13c08d3053b1f79ddbcecb8e057b540627e9cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionForumBundle::layout_user.html.twig", "OrionForumBundle:Form:topic_edit.html.twig", 1);
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
        $__internal_5e3984f75277ee1d2f188a0680b6537a6e35574c2c876d9c6ea94304bdde4eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3984f75277ee1d2f188a0680b6537a6e35574c2c876d9c6ea94304bdde4eda->enter($__internal_5e3984f75277ee1d2f188a0680b6537a6e35574c2c876d9c6ea94304bdde4eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionForumBundle:Form:topic_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e3984f75277ee1d2f188a0680b6537a6e35574c2c876d9c6ea94304bdde4eda->leave($__internal_5e3984f75277ee1d2f188a0680b6537a6e35574c2c876d9c6ea94304bdde4eda_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab68460516484ddd17dbc2cd32749d6ac45a744d194945253d2685b51879e4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab68460516484ddd17dbc2cd32749d6ac45a744d194945253d2685b51879e4f2->enter($__internal_ab68460516484ddd17dbc2cd32749d6ac45a744d194945253d2685b51879e4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ab68460516484ddd17dbc2cd32749d6ac45a744d194945253d2685b51879e4f2->leave($__internal_ab68460516484ddd17dbc2cd32749d6ac45a744d194945253d2685b51879e4f2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2f5699d459f975b9bd46546e160e2c89df8f2e5309c799ec774169412462a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f5699d459f975b9bd46546e160e2c89df8f2e5309c799ec774169412462a91->enter($__internal_c2f5699d459f975b9bd46546e160e2c89df8f2e5309c799ec774169412462a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c2f5699d459f975b9bd46546e160e2c89df8f2e5309c799ec774169412462a91->leave($__internal_c2f5699d459f975b9bd46546e160e2c89df8f2e5309c799ec774169412462a91_prof);

    }

    public function getTemplateName()
    {
        return "OrionForumBundle:Form:topic_edit.html.twig";
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
", "OrionForumBundle:Form:topic_edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle/Resources/views/Form/topic_edit.html.twig");
    }
}
