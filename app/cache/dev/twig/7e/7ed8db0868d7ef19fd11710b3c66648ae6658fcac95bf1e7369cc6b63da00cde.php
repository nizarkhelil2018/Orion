<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d6d46382b4c076eeed69544f29ecb8658451d8f1cb9f8f6e00a4edbb06269107 extends Twig_Template
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
        $__internal_9d0df861d7cff32ee145f1fbebb9a97a5a903212aed58bebc7824657c9ed8d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0df861d7cff32ee145f1fbebb9a97a5a903212aed58bebc7824657c9ed8d87->enter($__internal_9d0df861d7cff32ee145f1fbebb9a97a5a903212aed58bebc7824657c9ed8d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_9d0df861d7cff32ee145f1fbebb9a97a5a903212aed58bebc7824657c9ed8d87->leave($__internal_9d0df861d7cff32ee145f1fbebb9a97a5a903212aed58bebc7824657c9ed8d87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
