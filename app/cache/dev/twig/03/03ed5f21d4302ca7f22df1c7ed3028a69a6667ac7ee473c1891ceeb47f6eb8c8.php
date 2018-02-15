<?php

/* OrionForumBundle:Form:Topic.html.twig */
class __TwigTemplate_28cf9ec009d8657e61ae499d941a4f91de6b07d860794d4b107056d967f9d7a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95e08dde3806c8303a788b334c8650f1f536b20d91b85b696aebfaa1ba8c8510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e08dde3806c8303a788b334c8650f1f536b20d91b85b696aebfaa1ba8c8510->enter($__internal_95e08dde3806c8303a788b334c8650f1f536b20d91b85b696aebfaa1ba8c8510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionForumBundle:Form:Topic.html.twig"));

        // line 1
        echo "<div class=\"clearfix\"></div>
<hr />

    ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "newTopic", "class" => "form-horizontal")));
        echo "

    <div class=\"form-group\">
              ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
              ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 16)));
        echo "
    </div>
    <div class=\"form-group\">
        <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.btn.submit"), "html", null, true);
        echo "</button>
        </div>
    </div>
    ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<div class=\"clearfix\"></div>
";
        
        $__internal_95e08dde3806c8303a788b334c8650f1f536b20d91b85b696aebfaa1ba8c8510->leave($__internal_95e08dde3806c8303a788b334c8650f1f536b20d91b85b696aebfaa1ba8c8510_prof);

    }

    public function getTemplateName()
    {
        return "OrionForumBundle:Form:Topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 16,  47 => 12,  43 => 11,  37 => 8,  33 => 7,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"clearfix\"></div>
<hr />

    {{ form_start(form, {'attr': {'id': 'newTopic', 'class': 'form-horizontal'}}) }}

    <div class=\"form-group\">
              {{ form_label(form.title) }}
              {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.content) }}
        {{ form_widget(form.content, {'attr': {'class': 'form-control', 'rows': 16}}) }}
    </div>
    <div class=\"form-group\">
        <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\">{{ 'orion.forum.btn.submit'|trans }}</button>
        </div>
    </div>
    {{ form_end(form) }}

<div class=\"clearfix\"></div>
", "OrionForumBundle:Form:Topic.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle/Resources/views/Form/Topic.html.twig");
    }
}
