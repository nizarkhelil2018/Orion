<?php

/* @DForum/Form/Topic.html.twig */
class __TwigTemplate_cc0af5bfb20e62787c1bfc4851d14314c77469cb48d0ad9d9dc0f4f3e72fe3b3 extends Twig_Template
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
        $__internal_fdef750795b6f3c11ab5656c63eb18216652441c2ede303dd385e45830b7685d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdef750795b6f3c11ab5656c63eb18216652441c2ede303dd385e45830b7685d->enter($__internal_fdef750795b6f3c11ab5656c63eb18216652441c2ede303dd385e45830b7685d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DForum/Form/Topic.html.twig"));

        // line 1
        echo "<div class=\"clearfix\"></div>
<hr />

    ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "newTopic", "class" => "form-horizontal")));
        echo "

    <div class=\"form-group-sm\">
              ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
              ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"form-group-sm\">
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 5)));
        echo "
    </div>
    </br>
    <div class=\"form-group-sm\">
        <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-success fa fa-check\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.btn.submit"), "html", null, true);
        echo "</button>
        </div>
    </div>
    ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<div class=\"clearfix\"></div>
";
        
        $__internal_fdef750795b6f3c11ab5656c63eb18216652441c2ede303dd385e45830b7685d->leave($__internal_fdef750795b6f3c11ab5656c63eb18216652441c2ede303dd385e45830b7685d_prof);

    }

    public function getTemplateName()
    {
        return "@DForum/Form/Topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  55 => 17,  47 => 12,  43 => 11,  37 => 8,  33 => 7,  27 => 4,  22 => 1,);
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

    <div class=\"form-group-sm\">
              {{ form_label(form.title) }}
              {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
    </div>
    <div class=\"form-group-sm\">
        {{ form_label(form.content) }}
        {{ form_widget(form.content, {'attr': {'class': 'form-control', 'rows': 5}}) }}
    </div>
    </br>
    <div class=\"form-group-sm\">
        <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-success fa fa-check\">{{ 'discutea.forum.btn.submit'|trans }}</button>
        </div>
    </div>
    {{ form_end(form) }}

<div class=\"clearfix\"></div>
", "@DForum/Form/Topic.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\Form\\Topic.html.twig");
    }
}
