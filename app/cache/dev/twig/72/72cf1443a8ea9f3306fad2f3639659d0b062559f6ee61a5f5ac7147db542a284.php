<?php

/* DForumBundle::label.html.twig */
class __TwigTemplate_ef74eedb0293fb1a909b288af282388835d522aeb02ee72ab08e35cd87a985af extends Twig_Template
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
        $__internal_00746b31a48c93ea6f8f753186fe8d7d4ee91c0420c755ecfaa321b1e118e4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00746b31a48c93ea6f8f753186fe8d7d4ee91c0420c755ecfaa321b1e118e4a8->enter($__internal_00746b31a48c93ea6f8f753186fe8d7d4ee91c0420c755ecfaa321b1e118e4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DForumBundle::label.html.twig"));

        // line 1
        echo "<div class=\"raw\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_label_solved", array("slug" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "slug", array()))), "html", null, true);
        echo "\" class=\"fa fa-check text-success\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.label.solved"), "html", null, true);
        echo "</a>
    ";
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MODERATOR")) {
            // line 4
            echo "  
    <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_label_closed", array("slug" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "slug", array()))), "html", null, true);
            echo "\"class=\"fa fa-close text-danger\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.label.closed"), "html", null, true);
            echo "</a>
      ";
            // line 6
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 7
                echo "   
    <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_label_pinned", array("slug" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "slug", array()))), "html", null, true);
                echo "\"class=\"glyphicon glyphicon-pushpin text-orange\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.label.pinned"), "html", null, true);
                echo "</a>
      ";
            }
            // line 10
            echo "    ";
        }
        // line 11
        echo "</div>
";
        
        $__internal_00746b31a48c93ea6f8f753186fe8d7d4ee91c0420c755ecfaa321b1e118e4a8->leave($__internal_00746b31a48c93ea6f8f753186fe8d7d4ee91c0420c755ecfaa321b1e118e4a8_prof);

    }

    public function getTemplateName()
    {
        return "DForumBundle::label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  54 => 10,  47 => 8,  44 => 7,  42 => 6,  36 => 5,  33 => 4,  31 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"raw\">
    <a href=\"{{ path('discutea_label_solved', {'slug': topic.slug}) }}\" class=\"fa fa-check text-success\"> {{ 'discutea.forum.label.solved'|trans }}</a>
    {% if is_granted('ROLE_MODERATOR') %}
  
    <a href=\"{{ path('discutea_label_closed', {'slug': topic.slug}) }}\"class=\"fa fa-close text-danger\"> {{ 'discutea.forum.label.closed'|trans }}</a>
      {% if is_granted('ROLE_ADMIN') %}
   
    <a href=\"{{ path('discutea_label_pinned', {'slug': topic.slug}) }}\"class=\"glyphicon glyphicon-pushpin text-orange\">{{ 'discutea.forum.label.pinned'|trans }}</a>
      {% endif %}
    {% endif %}
</div>
", "DForumBundle::label.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle/Resources/views/label.html.twig");
    }
}
