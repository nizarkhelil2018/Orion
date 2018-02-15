<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7e3617b7b0f6f290ed644f433426c96459fc99ca72c9be874c903dba774d4404 extends Twig_Template
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
        $__internal_6e908616d35e4c05e5252dcaf2efad364ab2dc65f0c9c7e6bf0b3f7e09818159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e908616d35e4c05e5252dcaf2efad364ab2dc65f0c9c7e6bf0b3f7e09818159->enter($__internal_6e908616d35e4c05e5252dcaf2efad364ab2dc65f0c9c7e6bf0b3f7e09818159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6e908616d35e4c05e5252dcaf2efad364ab2dc65f0c9c7e6bf0b3f7e09818159->leave($__internal_6e908616d35e4c05e5252dcaf2efad364ab2dc65f0c9c7e6bf0b3f7e09818159_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
