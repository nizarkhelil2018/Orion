<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_2c35fd9eb310eed3890a5c549a21772e828bcb5d4900c89478d9905884248aae extends Twig_Template
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
        $__internal_2d5b9dfdd8e22cc191f9a09b1d5e3c040b7f56cd25206bea34478e5ee44ef5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5b9dfdd8e22cc191f9a09b1d5e3c040b7f56cd25206bea34478e5ee44ef5c3->enter($__internal_2d5b9dfdd8e22cc191f9a09b1d5e3c040b7f56cd25206bea34478e5ee44ef5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_2d5b9dfdd8e22cc191f9a09b1d5e3c040b7f56cd25206bea34478e5ee44ef5c3->leave($__internal_2d5b9dfdd8e22cc191f9a09b1d5e3c040b7f56cd25206bea34478e5ee44ef5c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
