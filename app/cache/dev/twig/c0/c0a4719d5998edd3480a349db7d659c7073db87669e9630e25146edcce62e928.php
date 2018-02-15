<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6b434ddae05ca64fa81fa19cd866e29330b622bf2eb99a11d5cedb1eafc2c73a extends Twig_Template
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
        $__internal_220b2afcf787adde5604ce3ed4eb08c3a44c028d9deae61e1df82fe0136fcf06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220b2afcf787adde5604ce3ed4eb08c3a44c028d9deae61e1df82fe0136fcf06->enter($__internal_220b2afcf787adde5604ce3ed4eb08c3a44c028d9deae61e1df82fe0136fcf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_220b2afcf787adde5604ce3ed4eb08c3a44c028d9deae61e1df82fe0136fcf06->leave($__internal_220b2afcf787adde5604ce3ed4eb08c3a44c028d9deae61e1df82fe0136fcf06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
