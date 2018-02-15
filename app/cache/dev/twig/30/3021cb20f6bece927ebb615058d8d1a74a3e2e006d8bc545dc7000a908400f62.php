<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_ba48f7fba131e1ffe6ff48ce803151a917c6496480fac7401772df6299ae8145 extends Twig_Template
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
        $__internal_b83ee7d391be99ec445b73a010c993343b7ebe16eee3464c430a634b420f9cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83ee7d391be99ec445b73a010c993343b7ebe16eee3464c430a634b420f9cbe->enter($__internal_b83ee7d391be99ec445b73a010c993343b7ebe16eee3464c430a634b420f9cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "<div class=\"wrapper\">
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request form-signin\">
    <div class=\"form-signin-heading text-center text-warning\"><h2>Réinitialisation Compte</h2></div>
    <div>
        ";
        // line 6
        if (array_key_exists("invalid_username", $context)) {
            // line 7
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 9
        echo "        
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" required=\"required\"  placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
    </div>
    </br>
    <div>
        <input type=\"submit\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " \" class=\"btn btn-lg btn-warning btn-block\" />
    </div>
</form>
</div>";
        
        $__internal_b83ee7d391be99ec445b73a010c993343b7ebe16eee3464c430a634b420f9cbe->leave($__internal_b83ee7d391be99ec445b73a010c993343b7ebe16eee3464c430a634b420f9cbe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"wrapper\">
<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request form-signin\">
    <div class=\"form-signin-heading text-center text-warning\"><h2>Réinitialisation Compte</h2></div>
    <div>
        {% if invalid_username is defined %}
            <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>
        {% endif %}
        
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" required=\"required\"  placeholder=\"{{ 'resetting.request.username'|trans }}\"/>
    </div>
    </br>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }} \" class=\"btn btn-lg btn-warning btn-block\" />
    </div>
</form>
</div>", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
