<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4bdaa7774e2ca36065d601d6a80e68386a9624a94b557bf19e240d235e0d77d5 extends Twig_Template
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
        $__internal_36e4d05f307ee7cb64d96b934f3b5b602c3533433d6dfa8c31ba4aec34b2cf2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e4d05f307ee7cb64d96b934f3b5b602c3533433d6dfa8c31ba4aec34b2cf2b->enter($__internal_36e4d05f307ee7cb64d96b934f3b5b602c3533433d6dfa8c31ba4aec34b2cf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_36e4d05f307ee7cb64d96b934f3b5b602c3533433d6dfa8c31ba4aec34b2cf2b->leave($__internal_36e4d05f307ee7cb64d96b934f3b5b602c3533433d6dfa8c31ba4aec34b2cf2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
