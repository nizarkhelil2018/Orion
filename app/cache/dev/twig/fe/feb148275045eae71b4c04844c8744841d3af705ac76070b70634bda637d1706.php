<?php

/* ::base.html.twig */
class __TwigTemplate_a775bba646024145055d3588e8670493bee252dadc73fa1f342e04a4e7888e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b56a4ca5a61ae2a57a16a41828ea66b7d4f909ab23d967c55d1ec8a0f6fe9a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56a4ca5a61ae2a57a16a41828ea66b7d4f909ab23d967c55d1ec8a0f6fe9a60->enter($__internal_b56a4ca5a61ae2a57a16a41828ea66b7d4f909ab23d967c55d1ec8a0f6fe9a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b56a4ca5a61ae2a57a16a41828ea66b7d4f909ab23d967c55d1ec8a0f6fe9a60->leave($__internal_b56a4ca5a61ae2a57a16a41828ea66b7d4f909ab23d967c55d1ec8a0f6fe9a60_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df0330364ec6a969a757f65ed07ff4a42a32006edea153d1dac5e4d3a3c9a695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0330364ec6a969a757f65ed07ff4a42a32006edea153d1dac5e4d3a3c9a695->enter($__internal_df0330364ec6a969a757f65ed07ff4a42a32006edea153d1dac5e4d3a3c9a695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_df0330364ec6a969a757f65ed07ff4a42a32006edea153d1dac5e4d3a3c9a695->leave($__internal_df0330364ec6a969a757f65ed07ff4a42a32006edea153d1dac5e4d3a3c9a695_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56b9bf57ee7e415fa8bb79081f87156507e3be35f2dc3b6c88ce4632c81bd791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b9bf57ee7e415fa8bb79081f87156507e3be35f2dc3b6c88ce4632c81bd791->enter($__internal_56b9bf57ee7e415fa8bb79081f87156507e3be35f2dc3b6c88ce4632c81bd791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_56b9bf57ee7e415fa8bb79081f87156507e3be35f2dc3b6c88ce4632c81bd791->leave($__internal_56b9bf57ee7e415fa8bb79081f87156507e3be35f2dc3b6c88ce4632c81bd791_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_127b0de7c64c4df921456402f3a6dca12fba07e3595154d45005ad440ff6f7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127b0de7c64c4df921456402f3a6dca12fba07e3595154d45005ad440ff6f7ac->enter($__internal_127b0de7c64c4df921456402f3a6dca12fba07e3595154d45005ad440ff6f7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_127b0de7c64c4df921456402f3a6dca12fba07e3595154d45005ad440ff6f7ac->leave($__internal_127b0de7c64c4df921456402f3a6dca12fba07e3595154d45005ad440ff6f7ac_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c5d788f611ccebb801b5b0289479338a5336727c3d19be4a2910e07a93e2caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5d788f611ccebb801b5b0289479338a5336727c3d19be4a2910e07a93e2caf->enter($__internal_8c5d788f611ccebb801b5b0289479338a5336727c3d19be4a2910e07a93e2caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8c5d788f611ccebb801b5b0289479338a5336727c3d19be4a2910e07a93e2caf->leave($__internal_8c5d788f611ccebb801b5b0289479338a5336727c3d19be4a2910e07a93e2caf_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources\\views/base.html.twig");
    }
}
