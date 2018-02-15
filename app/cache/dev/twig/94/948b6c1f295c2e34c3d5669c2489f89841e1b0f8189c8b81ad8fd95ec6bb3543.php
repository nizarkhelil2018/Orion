<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_d15f145bffeb2091b68de9c79c0ff0e5821d613f36962c492f78cf3118b43c5e extends Twig_Template
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
        $__internal_347f9e76c3aa3ffb4ade50ac9f17b9b27580b86003764c30b487b7f8cdda1407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347f9e76c3aa3ffb4ade50ac9f17b9b27580b86003764c30b487b7f8cdda1407->enter($__internal_347f9e76c3aa3ffb4ade50ac9f17b9b27580b86003764c30b487b7f8cdda1407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "<div class=\"wrapper\">
<div class=\"form-signin\">
    <h2 class=\"form-signin-heading text-center text-success\">Orion : Inscription</h2>
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
   <div class=\"form-control\">
";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
   </div>
</div>
</div>

";
        
        $__internal_347f9e76c3aa3ffb4ade50ac9f17b9b27580b86003764c30b487b7f8cdda1407->leave($__internal_347f9e76c3aa3ffb4ade50ac9f17b9b27580b86003764c30b487b7f8cdda1407_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  37 => 9,  32 => 7,  27 => 5,  22 => 2,);
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
<div class=\"form-signin\">
    <h2 class=\"form-signin-heading text-center text-success\">Orion : Inscription</h2>
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
   <div class=\"form-control\">
{{ form_widget(form) }}
    <div>
        <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
   </div>
</div>
</div>

", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
