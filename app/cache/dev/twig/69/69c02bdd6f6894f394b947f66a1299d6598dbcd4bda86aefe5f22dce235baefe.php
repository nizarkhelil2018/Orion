<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_fdac0a84656fd4446c8c91a264a91005347406ca29a0d45effcc2722dfb980b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a338fd3db4bb352b5f15c40afbc71ba7662ccd1ccc7752dc1dbbf06663c2839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a338fd3db4bb352b5f15c40afbc71ba7662ccd1ccc7752dc1dbbf06663c2839->enter($__internal_2a338fd3db4bb352b5f15c40afbc71ba7662ccd1ccc7752dc1dbbf06663c2839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a338fd3db4bb352b5f15c40afbc71ba7662ccd1ccc7752dc1dbbf06663c2839->leave($__internal_2a338fd3db4bb352b5f15c40afbc71ba7662ccd1ccc7752dc1dbbf06663c2839_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32a783cdd7d7c858538055f2aa9e76ef3599a12f3ae069d32680a4ba15d55ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a783cdd7d7c858538055f2aa9e76ef3599a12f3ae069d32680a4ba15d55ff3->enter($__internal_32a783cdd7d7c858538055f2aa9e76ef3599a12f3ae069d32680a4ba15d55ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        // line 5
        echo "
";
        
        $__internal_32a783cdd7d7c858538055f2aa9e76ef3599a12f3ae069d32680a4ba15d55ff3->leave($__internal_32a783cdd7d7c858538055f2aa9e76ef3599a12f3ae069d32680a4ba15d55ff3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}

{% endblock fos_user_content %}", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
