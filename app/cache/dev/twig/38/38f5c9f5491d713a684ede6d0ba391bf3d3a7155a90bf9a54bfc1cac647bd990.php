<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_b11f1c5b011277a75dff5d339db0a7842199926fabf5b04044576f9d31a7825c extends Twig_Template
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
        $__internal_2e68b200e6eb52b533e1632e1039e2f452c9fe320fffee64cd8c6a8994b0d761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e68b200e6eb52b533e1632e1039e2f452c9fe320fffee64cd8c6a8994b0d761->enter($__internal_2e68b200e6eb52b533e1632e1039e2f452c9fe320fffee64cd8c6a8994b0d761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2e68b200e6eb52b533e1632e1039e2f452c9fe320fffee64cd8c6a8994b0d761->leave($__internal_2e68b200e6eb52b533e1632e1039e2f452c9fe320fffee64cd8c6a8994b0d761_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}