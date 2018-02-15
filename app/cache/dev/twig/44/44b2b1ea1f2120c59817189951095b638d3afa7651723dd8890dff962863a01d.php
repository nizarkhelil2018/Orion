<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c293090a44a25c35157475fd70e1889a8f6c514eb1d605990c9d83d466bac206 extends Twig_Template
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
        $__internal_64afad256d08a0f665c12ae0ddb2b29c6cdbfc39f0983ba904b6ee708c337d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64afad256d08a0f665c12ae0ddb2b29c6cdbfc39f0983ba904b6ee708c337d26->enter($__internal_64afad256d08a0f665c12ae0ddb2b29c6cdbfc39f0983ba904b6ee708c337d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_64afad256d08a0f665c12ae0ddb2b29c6cdbfc39f0983ba904b6ee708c337d26->leave($__internal_64afad256d08a0f665c12ae0ddb2b29c6cdbfc39f0983ba904b6ee708c337d26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
