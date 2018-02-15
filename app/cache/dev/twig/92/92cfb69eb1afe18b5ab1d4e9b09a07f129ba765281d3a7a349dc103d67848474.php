<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_aa17c89c35cfc051732b5eb8740f663d9b0647db1a2071bd2bd83cb134708367 extends Twig_Template
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
        $__internal_4159fcdfe38a07a24649a2e96bc4dfd6a13b42095355b6733822da5c876a6f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4159fcdfe38a07a24649a2e96bc4dfd6a13b42095355b6733822da5c876a6f4b->enter($__internal_4159fcdfe38a07a24649a2e96bc4dfd6a13b42095355b6733822da5c876a6f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4159fcdfe38a07a24649a2e96bc4dfd6a13b42095355b6733822da5c876a6f4b->leave($__internal_4159fcdfe38a07a24649a2e96bc4dfd6a13b42095355b6733822da5c876a6f4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
