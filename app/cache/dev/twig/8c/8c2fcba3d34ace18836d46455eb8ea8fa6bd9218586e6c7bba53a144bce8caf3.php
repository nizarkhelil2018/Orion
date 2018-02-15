<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d623bf7d1dc165bc9e208738d64fcb5f1435a08ec71981249def325ecebea9d5 extends Twig_Template
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
        $__internal_188dda78ea0f1c68cc85494b9b99d6216649c1ba113e16d3b41eb789cb4086f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188dda78ea0f1c68cc85494b9b99d6216649c1ba113e16d3b41eb789cb4086f4->enter($__internal_188dda78ea0f1c68cc85494b9b99d6216649c1ba113e16d3b41eb789cb4086f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_188dda78ea0f1c68cc85494b9b99d6216649c1ba113e16d3b41eb789cb4086f4->leave($__internal_188dda78ea0f1c68cc85494b9b99d6216649c1ba113e16d3b41eb789cb4086f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
