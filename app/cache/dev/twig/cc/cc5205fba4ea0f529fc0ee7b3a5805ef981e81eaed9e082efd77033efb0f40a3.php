<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_537c714b2c09a8813bfa5a83d4a81b637753ef227eb4ac2903dc9f1543718ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c512463a6cee5c9b3e27b9a7b17a54c763e62c3c2e5b20b6b22060169e9d1728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c512463a6cee5c9b3e27b9a7b17a54c763e62c3c2e5b20b6b22060169e9d1728->enter($__internal_c512463a6cee5c9b3e27b9a7b17a54c763e62c3c2e5b20b6b22060169e9d1728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c512463a6cee5c9b3e27b9a7b17a54c763e62c3c2e5b20b6b22060169e9d1728->leave($__internal_c512463a6cee5c9b3e27b9a7b17a54c763e62c3c2e5b20b6b22060169e9d1728_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff1b66f9279a244ca341679eb92eaa6273eca150128eb5a904832eaa2d59f141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1b66f9279a244ca341679eb92eaa6273eca150128eb5a904832eaa2d59f141->enter($__internal_ff1b66f9279a244ca341679eb92eaa6273eca150128eb5a904832eaa2d59f141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ff1b66f9279a244ca341679eb92eaa6273eca150128eb5a904832eaa2d59f141->leave($__internal_ff1b66f9279a244ca341679eb92eaa6273eca150128eb5a904832eaa2d59f141_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
