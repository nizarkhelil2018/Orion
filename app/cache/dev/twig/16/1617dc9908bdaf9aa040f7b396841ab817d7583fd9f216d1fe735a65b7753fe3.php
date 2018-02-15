<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8bd0a640160b949347ea335e3acfba4f0826e1031ba09835e05edf8ffe6b8ed6 extends Twig_Template
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
        $__internal_28c46fa169e58568e800a0725200a64003b6e05ccd9c9c748fa4ca444b3aff5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c46fa169e58568e800a0725200a64003b6e05ccd9c9c748fa4ca444b3aff5d->enter($__internal_28c46fa169e58568e800a0725200a64003b6e05ccd9c9c748fa4ca444b3aff5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_28c46fa169e58568e800a0725200a64003b6e05ccd9c9c748fa4ca444b3aff5d->leave($__internal_28c46fa169e58568e800a0725200a64003b6e05ccd9c9c748fa4ca444b3aff5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
