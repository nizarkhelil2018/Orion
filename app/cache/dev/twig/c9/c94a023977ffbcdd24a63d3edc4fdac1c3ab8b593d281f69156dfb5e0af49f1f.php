<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ac97881f9cd54104445fab3295545aac88f6e51191cbbcddbb3f76db4f0e7973 extends Twig_Template
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
        $__internal_e87fcbddfa93ae1a81127e68f0d713747f99999d4125b57f1afa1a4fc76e9e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87fcbddfa93ae1a81127e68f0d713747f99999d4125b57f1afa1a4fc76e9e52->enter($__internal_e87fcbddfa93ae1a81127e68f0d713747f99999d4125b57f1afa1a4fc76e9e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e87fcbddfa93ae1a81127e68f0d713747f99999d4125b57f1afa1a4fc76e9e52->leave($__internal_e87fcbddfa93ae1a81127e68f0d713747f99999d4125b57f1afa1a4fc76e9e52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
