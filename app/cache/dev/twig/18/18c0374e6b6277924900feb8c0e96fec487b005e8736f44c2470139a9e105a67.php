<?php

/* OrionForumBundle:Form:Post.html.twig */
class __TwigTemplate_4bd9b7663613cbf23ae531d5b9ae710579cae7783a92e975a20417e28ecf8577 extends Twig_Template
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
        $__internal_d773490f181988863aee8dd906fb55e7c9b0d33a10a1512502fb70538c7d1a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d773490f181988863aee8dd906fb55e7c9b0d33a10a1512502fb70538c7d1a14->enter($__internal_d773490f181988863aee8dd906fb55e7c9b0d33a10a1512502fb70538c7d1a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionForumBundle:Form:Post.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "orion_forum_post")));
        echo "
    <div class=\"form-group\">
      ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label');
        echo "
      ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 16)));
        echo "
    </div>
    <div class=\"form-group\">
      <div class=\"pull-right\">
        ";
        // line 8
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "preview", array(), "any", true, true)) {
            // line 9
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preview", array()), 'widget', array("attr" => array("class" => "btn btn-default btn-sm")));
            echo "
        ";
        }
        // line 11
        echo "        <button type=\"submit\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.btn.submit"), "html", null, true);
        echo "</button>
      </div>
    </div>
";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_d773490f181988863aee8dd906fb55e7c9b0d33a10a1512502fb70538c7d1a14->leave($__internal_d773490f181988863aee8dd906fb55e7c9b0d33a10a1512502fb70538c7d1a14_prof);

    }

    public function getTemplateName()
    {
        return "OrionForumBundle:Form:Post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  46 => 11,  40 => 9,  38 => 8,  31 => 4,  27 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr': {'id': 'orion_forum_post'}}) }}
    <div class=\"form-group\">
      {{ form_label(form.content) }}
      {{ form_widget(form.content, {'attr': {'class': 'form-control', 'rows': 16}}) }}
    </div>
    <div class=\"form-group\">
      <div class=\"pull-right\">
        {% if form.preview is defined %}
        {{ form_widget(form.preview, {'attr': {'class': 'btn btn-default btn-sm'}}) }}
        {% endif %}
        <button type=\"submit\" class=\"btn btn-primary\">{{ 'orion.forum.btn.submit'|trans }}</button>
      </div>
    </div>
{{ form_end(form) }}
", "OrionForumBundle:Form:Post.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle/Resources/views/Form/Post.html.twig");
    }
}
