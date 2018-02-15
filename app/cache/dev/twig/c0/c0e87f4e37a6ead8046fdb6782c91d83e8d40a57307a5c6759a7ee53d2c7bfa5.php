<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f2bfd555cd592abf022936a0b10f7550a93a0882d68d225d8acee357bfa1d141 extends Twig_Template
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
        $__internal_82548c8efb8e3d668be8e296c03f14a3d1e3b37dbcdb2cb51e9348d89ded54ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82548c8efb8e3d668be8e296c03f14a3d1e3b37dbcdb2cb51e9348d89ded54ca->enter($__internal_82548c8efb8e3d668be8e296c03f14a3d1e3b37dbcdb2cb51e9348d89ded54ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_82548c8efb8e3d668be8e296c03f14a3d1e3b37dbcdb2cb51e9348d89ded54ca->leave($__internal_82548c8efb8e3d668be8e296c03f14a3d1e3b37dbcdb2cb51e9348d89ded54ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
