<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_56ada9beacf95c48b4872d97805ee2c94b74fda0736f20e69d64ae93f607c86f extends Twig_Template
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
        $__internal_fed0a1810c3e7b854748933263fba941b98acb64bd50be7c2b0d18f3b1888c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed0a1810c3e7b854748933263fba941b98acb64bd50be7c2b0d18f3b1888c3a->enter($__internal_fed0a1810c3e7b854748933263fba941b98acb64bd50be7c2b0d18f3b1888c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_fed0a1810c3e7b854748933263fba941b98acb64bd50be7c2b0d18f3b1888c3a->leave($__internal_fed0a1810c3e7b854748933263fba941b98acb64bd50be7c2b0d18f3b1888c3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
