<?php

/* @OrionForum/label.html.twig */
class __TwigTemplate_68f2d55c752d059a98c58bd7ceb40b9de0a6bf2296031b06791d51e0e217b1b7 extends Twig_Template
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
        $__internal_513b50bcf255a7fa41b30418dd22d3bbc9dd9f48d8051154509ac860d281df4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513b50bcf255a7fa41b30418dd22d3bbc9dd9f48d8051154509ac860d281df4d->enter($__internal_513b50bcf255a7fa41b30418dd22d3bbc9dd9f48d8051154509ac860d281df4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionForum/label.html.twig"));

        // line 1
        echo "<div class=\"raw\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_label_solved", array("slug" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.label.solved"), "html", null, true);
        echo "</a>
    ";
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MODERATOR")) {
            // line 4
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_label_closed", array("slug" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.label.closed"), "html", null, true);
            echo "</a>
      ";
            // line 5
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 6
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_label_pinned", array("slug" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.label.pinned"), "html", null, true);
                echo "</a>
      ";
            }
            // line 8
            echo "    ";
        }
        // line 9
        echo "</div>
";
        
        $__internal_513b50bcf255a7fa41b30418dd22d3bbc9dd9f48d8051154509ac860d281df4d->leave($__internal_513b50bcf255a7fa41b30418dd22d3bbc9dd9f48d8051154509ac860d281df4d_prof);

    }

    public function getTemplateName()
    {
        return "@OrionForum/label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  50 => 8,  42 => 6,  40 => 5,  33 => 4,  31 => 3,  25 => 2,  22 => 1,);
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
    <a href=\"{{ path('orion_label_solved', {'slug': topic.slug}) }}\">{{ 'orion.forum.label.solved'|trans }}</a>
    {% if is_granted('ROLE_MODERATOR') %}
      <a href=\"{{ path('orion_label_closed', {'slug': topic.slug}) }}\">{{ 'orion.forum.label.closed'|trans }}</a>
      {% if is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('orion_label_pinned', {'slug': topic.slug}) }}\">{{ 'orion.forum.label.pinned'|trans }}</a>
      {% endif %}
    {% endif %}
</div>
", "@OrionForum/label.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle\\Resources\\views\\label.html.twig");
    }
}
