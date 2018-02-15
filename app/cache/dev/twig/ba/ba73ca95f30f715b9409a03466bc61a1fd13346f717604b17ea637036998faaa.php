<?php

/* @DForum/Form/Post.html.twig */
class __TwigTemplate_bd2830d614ee6af409a6c569f1d8c1c856cacc91b9109fcd05d626039cad63fc extends Twig_Template
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
        $__internal_197d5dcdcdab8e1c375951d9885c768c8dc75f087619ca9e958ca5581398a5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197d5dcdcdab8e1c375951d9885c768c8dc75f087619ca9e958ca5581398a5b7->enter($__internal_197d5dcdcdab8e1c375951d9885c768c8dc75f087619ca9e958ca5581398a5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DForum/Form/Post.html.twig"));

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
        
        $__internal_197d5dcdcdab8e1c375951d9885c768c8dc75f087619ca9e958ca5581398a5b7->leave($__internal_197d5dcdcdab8e1c375951d9885c768c8dc75f087619ca9e958ca5581398a5b7_prof);

    }

    public function getTemplateName()
    {
        return "@DForum/Form/Post.html.twig";
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
", "@DForum/Form/Post.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\Form\\Post.html.twig");
    }
}
