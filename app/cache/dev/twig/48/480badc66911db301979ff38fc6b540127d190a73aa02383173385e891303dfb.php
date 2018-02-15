<?php

/* DForumBundle:Admin:remove_forum.html.twig */
class __TwigTemplate_46843f3866881ad0cd330852d5a2c4a2e196f7735a56133c9e716c6f71b06b0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "DForumBundle:Admin:remove_forum.html.twig", 1);
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
        $__internal_b22f2680bfcf8cbd76292065f2571f7e2b15ab10c99e1b0f081e18b35cd9d99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22f2680bfcf8cbd76292065f2571f7e2b15ab10c99e1b0f081e18b35cd9d99c->enter($__internal_b22f2680bfcf8cbd76292065f2571f7e2b15ab10c99e1b0f081e18b35cd9d99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DForumBundle:Admin:remove_forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b22f2680bfcf8cbd76292065f2571f7e2b15ab10c99e1b0f081e18b35cd9d99c->leave($__internal_b22f2680bfcf8cbd76292065f2571f7e2b15ab10c99e1b0f081e18b35cd9d99c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_187d83cd1c83906002eda0bac0412ee25f6375487ec2997f5387fe1ac681dad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187d83cd1c83906002eda0bac0412ee25f6375487ec2997f5387fe1ac681dad9->enter($__internal_187d83cd1c83906002eda0bac0412ee25f6375487ec2997f5387fe1ac681dad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new category";
        
        $__internal_187d83cd1c83906002eda0bac0412ee25f6375487ec2997f5387fe1ac681dad9->leave($__internal_187d83cd1c83906002eda0bac0412ee25f6375487ec2997f5387fe1ac681dad9_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eedb63bd38f18a496ae3fffc1e186dde461df7c001d62bf625535160868c32c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedb63bd38f18a496ae3fffc1e186dde461df7c001d62bf625535160868c32c5->enter($__internal_eedb63bd38f18a496ae3fffc1e186dde461df7c001d62bf625535160868c32c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eedb63bd38f18a496ae3fffc1e186dde461df7c001d62bf625535160868c32c5->leave($__internal_eedb63bd38f18a496ae3fffc1e186dde461df7c001d62bf625535160868c32c5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_524f903fbccf1c0b001ee0d613c0abfa8c0a199fd6cea8e8816a5712d925e158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524f903fbccf1c0b001ee0d613c0abfa8c0a199fd6cea8e8816a5712d925e158->enter($__internal_524f903fbccf1c0b001ee0d613c0abfa8c0a199fd6cea8e8816a5712d925e158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_524f903fbccf1c0b001ee0d613c0abfa8c0a199fd6cea8e8816a5712d925e158->leave($__internal_524f903fbccf1c0b001ee0d613c0abfa8c0a199fd6cea8e8816a5712d925e158_prof);

    }

    // line 37
    public function block_js($context, array $blocks = array())
    {
        $__internal_6c7218cb3998cf11f6890211ab7b09c057d1dd640a96fd316e18f336eddb7020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7218cb3998cf11f6890211ab7b09c057d1dd640a96fd316e18f336eddb7020->enter($__internal_6c7218cb3998cf11f6890211ab7b09c057d1dd640a96fd316e18f336eddb7020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_6c7218cb3998cf11f6890211ab7b09c057d1dd640a96fd316e18f336eddb7020->leave($__internal_6c7218cb3998cf11f6890211ab7b09c057d1dd640a96fd316e18f336eddb7020_prof);

    }

    public function getTemplateName()
    {
        return "DForumBundle:Admin:remove_forum.html.twig";
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
", "DForumBundle:Admin:remove_forum.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle/Resources/views/Admin/remove_forum.html.twig");
    }
}
