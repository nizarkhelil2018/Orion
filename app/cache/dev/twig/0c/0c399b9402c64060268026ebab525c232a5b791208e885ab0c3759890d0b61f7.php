<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_39da1361f0a94452bba4de540b38263f2a97871e21f7db2765df37d412b60547 extends Twig_Template
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
        $__internal_22b10a40c5f1d34b45cd550602737f5691dedad2f5bc6fa4d773c0e3914d3d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b10a40c5f1d34b45cd550602737f5691dedad2f5bc6fa4d773c0e3914d3d9b->enter($__internal_22b10a40c5f1d34b45cd550602737f5691dedad2f5bc6fa4d773c0e3914d3d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_22b10a40c5f1d34b45cd550602737f5691dedad2f5bc6fa4d773c0e3914d3d9b->leave($__internal_22b10a40c5f1d34b45cd550602737f5691dedad2f5bc6fa4d773c0e3914d3d9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
