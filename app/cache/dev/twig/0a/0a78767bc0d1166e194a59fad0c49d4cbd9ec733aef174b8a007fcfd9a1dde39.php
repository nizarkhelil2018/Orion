<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_cadefd1b469af8d0cdf794b1aba8c22f4444816a5f4d962ee3a33dfdd117b72e extends Twig_Template
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
        $__internal_3f2e2fa48ae8f98ecaff85335fdc8a6cd38ba9cb17fdcae44327a81f5a287c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2e2fa48ae8f98ecaff85335fdc8a6cd38ba9cb17fdcae44327a81f5a287c95->enter($__internal_3f2e2fa48ae8f98ecaff85335fdc8a6cd38ba9cb17fdcae44327a81f5a287c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3f2e2fa48ae8f98ecaff85335fdc8a6cd38ba9cb17fdcae44327a81f5a287c95->leave($__internal_3f2e2fa48ae8f98ecaff85335fdc8a6cd38ba9cb17fdcae44327a81f5a287c95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
