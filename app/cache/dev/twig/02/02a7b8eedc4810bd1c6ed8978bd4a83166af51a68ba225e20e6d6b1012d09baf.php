<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d1a656014a5e734dfd3d1546994c0df238d7b903b610833995a032528b6d177a extends Twig_Template
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
        $__internal_300a24f056c7d5d9f559c4b718b138d7454f79d73935a257d54f6b43b2a7a08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300a24f056c7d5d9f559c4b718b138d7454f79d73935a257d54f6b43b2a7a08f->enter($__internal_300a24f056c7d5d9f559c4b718b138d7454f79d73935a257d54f6b43b2a7a08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_300a24f056c7d5d9f559c4b718b138d7454f79d73935a257d54f6b43b2a7a08f->leave($__internal_300a24f056c7d5d9f559c4b718b138d7454f79d73935a257d54f6b43b2a7a08f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
