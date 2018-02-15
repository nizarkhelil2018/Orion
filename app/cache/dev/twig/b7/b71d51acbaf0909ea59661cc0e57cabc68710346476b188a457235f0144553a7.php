<?php

/* DForumBundle::Form/Post.html.twig */
class __TwigTemplate_aaa0663ed52e10f859c901ceaf071200b5dfd93a139bcf261a8474803ee0c16e extends Twig_Template
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
        $__internal_9734742bff319ec7d38e8c1b7e161951130abe4666bf61ca76d57e7bdeecf6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9734742bff319ec7d38e8c1b7e161951130abe4666bf61ca76d57e7bdeecf6c1->enter($__internal_9734742bff319ec7d38e8c1b7e161951130abe4666bf61ca76d57e7bdeecf6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DForumBundle::Form/Post.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "discutea_forum_post")));
        echo "
    <div class=\"form-group col-sm-11\">
      ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label');
        echo "
      ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 5)));
        echo "
    </div>
    <div class=\"form-group col-sm-11\">
      <div class=\"pull-right\">
          
        ";
        // line 9
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preview", array(), "any", true, true)) {
            // line 10
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preview", array()), 'widget', array("attr" => array("class" => "btn btn-default btn-sm")));
            echo "
        ";
        }
        // line 12
        echo "        <button type=\"submit\" class=\"btn btn-success fa fa-check\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.btn.submit"), "html", null, true);
        echo "</button>
      </div>
    </div>
";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9734742bff319ec7d38e8c1b7e161951130abe4666bf61ca76d57e7bdeecf6c1->leave($__internal_9734742bff319ec7d38e8c1b7e161951130abe4666bf61ca76d57e7bdeecf6c1_prof);

    }

    public function getTemplateName()
    {
        return "DForumBundle::Form/Post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  47 => 12,  41 => 10,  39 => 9,  31 => 4,  27 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr': {'id': 'discutea_forum_post'}}) }}
    <div class=\"form-group col-sm-11\">
      {{ form_label(form.content) }}
      {{ form_widget(form.content, {'attr': {'class': 'form-control', 'rows': 5}}) }}
    </div>
    <div class=\"form-group col-sm-11\">
      <div class=\"pull-right\">
          
        {% if form.preview is defined %}
        {{ form_widget(form.preview, {'attr': {'class': 'btn btn-default btn-sm'}}) }}
        {% endif %}
        <button type=\"submit\" class=\"btn btn-success fa fa-check\">{{ 'discutea.forum.btn.submit'|trans }}</button>
      </div>
    </div>
{{ form_end(form) }}
", "DForumBundle::Form/Post.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle/Resources/views/Form/Post.html.twig");
    }
}
