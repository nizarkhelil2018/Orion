<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_dab2ac8e90b6d827d8c5b8690ca8a273f7175470d8a4fae450b24a949af17cfd extends Twig_Template
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
        $__internal_d1d5c3f75a3fb9928938bfe2c87433c8f32211bb2a126fa4610b52af6785a061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d5c3f75a3fb9928938bfe2c87433c8f32211bb2a126fa4610b52af6785a061->enter($__internal_d1d5c3f75a3fb9928938bfe2c87433c8f32211bb2a126fa4610b52af6785a061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
        
        $__internal_d1d5c3f75a3fb9928938bfe2c87433c8f32211bb2a126fa4610b52af6785a061->leave($__internal_d1d5c3f75a3fb9928938bfe2c87433c8f32211bb2a126fa4610b52af6785a061_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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

", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
