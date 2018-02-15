<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_50399b335f855a49b3fe8df5aaaea3e48a76d1dac9b90f04f46d458685014f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_402c6d6d895518bd7b0f9ee363978ec7b8751afac25ca50cfef22fd2a0971845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402c6d6d895518bd7b0f9ee363978ec7b8751afac25ca50cfef22fd2a0971845->enter($__internal_402c6d6d895518bd7b0f9ee363978ec7b8751afac25ca50cfef22fd2a0971845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<html >
    <head>
        <meta charset=\"UTF-8\">
        <title>Orion</title>   
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-3.3.6-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-3.3.6-dist/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>

    <body>
        <div>

            
            
            ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo " 
                            <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"connexion btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " </a>
                        ";
        } else {
            // line 17
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"linked text-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo " |</a>
                            <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"linked text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 20
        echo "        </div>

        ";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 24
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 25
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 26
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        <div>
            ";
        // line 33
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 35
        echo "        </div>
    </body>";
        
        $__internal_402c6d6d895518bd7b0f9ee363978ec7b8751afac25ca50cfef22fd2a0971845->leave($__internal_402c6d6d895518bd7b0f9ee363978ec7b8751afac25ca50cfef22fd2a0971845_prof);

    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4920de206f003ff2615e617becf014f9dc6b0775e3e3da8022b284fee7cab52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4920de206f003ff2615e617becf014f9dc6b0775e3e3da8022b284fee7cab52->enter($__internal_f4920de206f003ff2615e617becf014f9dc6b0775e3e3da8022b284fee7cab52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 34
        echo "            ";
        
        $__internal_f4920de206f003ff2615e617becf014f9dc6b0775e3e3da8022b284fee7cab52->leave($__internal_f4920de206f003ff2615e617becf014f9dc6b0775e3e3da8022b284fee7cab52_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 34,  122 => 33,  114 => 35,  112 => 33,  108 => 31,  105 => 30,  99 => 29,  90 => 26,  85 => 25,  80 => 24,  75 => 23,  73 => 22,  69 => 20,  62 => 18,  55 => 17,  48 => 15,  44 => 14,  33 => 6,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html >
    <head>
        <meta charset=\"UTF-8\">
        <title>Orion</title>   
        <link href=\"{{ asset('bootstrap-3.3.6-dist/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{ asset('bootstrap-3.3.6-dist/css/style.css')}}\" rel=\"stylesheet\">
    </head>

    <body>
        <div>

            
            
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %} 
                            <a href=\"{{ path('fos_user_security_logout')}}\" class=\"connexion btn btn-primary\">{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} </a>
                        {% else %}
                            <a href=\"{{ path('fos_user_security_login')}}\" class=\"linked text-primary\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }} |</a>
                            <a href=\"{{ path('fos_user_registration_register')}}\" class=\"linked text-success\">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>
                        {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>", "@FOSUser/layout.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
