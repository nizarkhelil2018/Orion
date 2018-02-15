<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_132badc0a56bd2929677ac7c260096b2237097831732084e69781eef624680c1 extends Twig_Template
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
        $__internal_a488d0620f2f56cb696f0bc978319589d8b3ee6c5d8832f1bf3ad160177f0d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a488d0620f2f56cb696f0bc978319589d8b3ee6c5d8832f1bf3ad160177f0d17->enter($__internal_a488d0620f2f56cb696f0bc978319589d8b3ee6c5d8832f1bf3ad160177f0d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a488d0620f2f56cb696f0bc978319589d8b3ee6c5d8832f1bf3ad160177f0d17->leave($__internal_a488d0620f2f56cb696f0bc978319589d8b3ee6c5d8832f1bf3ad160177f0d17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
