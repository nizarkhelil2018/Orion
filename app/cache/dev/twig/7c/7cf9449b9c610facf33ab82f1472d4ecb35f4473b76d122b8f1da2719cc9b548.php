<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b6e8bff6c353b7bdcc3216790386201a9158e829d4beb3df40b8949b029e820e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_afdfd2aa2730a68b156f53dba02d6efdeb4ccead1ca9c1cd61f4b6d227db82bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdfd2aa2730a68b156f53dba02d6efdeb4ccead1ca9c1cd61f4b6d227db82bb->enter($__internal_afdfd2aa2730a68b156f53dba02d6efdeb4ccead1ca9c1cd61f4b6d227db82bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afdfd2aa2730a68b156f53dba02d6efdeb4ccead1ca9c1cd61f4b6d227db82bb->leave($__internal_afdfd2aa2730a68b156f53dba02d6efdeb4ccead1ca9c1cd61f4b6d227db82bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4a9fa65b6a7622f56efda7e7e6d9c3f88fb53eeafd4729fe84216a605dd5417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a9fa65b6a7622f56efda7e7e6d9c3f88fb53eeafd4729fe84216a605dd5417->enter($__internal_b4a9fa65b6a7622f56efda7e7e6d9c3f88fb53eeafd4729fe84216a605dd5417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "         
        <div class=\"wrapper\">
            ";
        // line 7
        echo "            ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 10
        echo "            <div class=\"wrapper\">
                <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
                    <h2 class=\"form-signin-heading text-center text-primary\">Orion : Connexion</h2>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                    
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>

                    
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>


                    <label class=\"checkbox\" for=\"remember_me\"><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "        
                    </label>

                    <input  class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
             
                <div class=\"span10\">
                    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Added.reset", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                </div>
                   </form>
            </div>

";
        
        $__internal_b4a9fa65b6a7622f56efda7e7e6d9c3f88fb53eeafd4729fe84216a605dd5417->leave($__internal_b4a9fa65b6a7622f56efda7e7e6d9c3f88fb53eeafd4729fe84216a605dd5417_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  87 => 25,  81 => 22,  75 => 19,  67 => 16,  61 => 13,  56 => 11,  53 => 10,  47 => 8,  44 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
         
        <div class=\"wrapper\">
            {% trans_default_domain 'FOSUserBundle' %}
            {% if error %}
                <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
            <div class=\"wrapper\">
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
                    <h2 class=\"form-signin-heading text-center text-primary\">Orion : Connexion</h2>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

                    
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"{{ 'security.login.username'|trans }}\"/>

                    
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"{{ 'security.login.password'|trans }}\"/>


                    <label class=\"checkbox\" for=\"remember_me\"><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> {{ 'security.login.remember_me'|trans }}        
                    </label>

                    <input  class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
             
                <div class=\"span10\">
                    <a href=\"{{ path('fos_user_resetting_request') }}\">{{ 'Added.reset'|trans }}</a>
                </div>
                   </form>
            </div>

{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
