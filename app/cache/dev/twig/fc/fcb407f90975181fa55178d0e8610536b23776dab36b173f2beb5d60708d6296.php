<?php

/* OrionForumBundle::layout2.html.twig */
class __TwigTemplate_b775a7ecd1235c1550f3789021615e731b50b2b7b74fb3834952e888878197bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64af86689a50e31a65bca37efad5d8d4d60fccc72ecaebfa26bc3df48257ba8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64af86689a50e31a65bca37efad5d8d4d60fccc72ecaebfa26bc3df48257ba8a->enter($__internal_64af86689a50e31a65bca37efad5d8d4d60fccc72ecaebfa26bc3df48257ba8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionForumBundle::layout2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        ob_start();
        $this->displayBlock('title', $context, $blocks);
        $context["pagetitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 3
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
  <head>
    <meta charset=\"utf-8\" />
    <!--[if lt IE 9]>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <![endif]-->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
    <title>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["pagetitle"]) ? $context["pagetitle"] : $this->getContext($context, "pagetitle")), "html", null, true);
        echo "</title>
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
    <style>
        body {
            padding-top: 50px;
        }
        .starter-template {
            padding: 40px 15px;
        }
    </style>
    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "  </head>
  <body>
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">OrionForumBundle</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_homepage");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_admin_dashboard");
        echo "\">Admin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
      <div class=\"starter-template\">

      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 48
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 49
                echo "          <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
      ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
      </div>
    </div><!-- /.container -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
  </body>
</html>
";
        
        $__internal_64af86689a50e31a65bca37efad5d8d4d60fccc72ecaebfa26bc3df48257ba8a->leave($__internal_64af86689a50e31a65bca37efad5d8d4d60fccc72ecaebfa26bc3df48257ba8a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a290c85aaa8f7d96c5a7d928f8944a943659a291125653a7262ce4f3296d63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a290c85aaa8f7d96c5a7d928f8944a943659a291125653a7262ce4f3296d63c->enter($__internal_3a290c85aaa8f7d96c5a7d928f8944a943659a291125653a7262ce4f3296d63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home.meta.title"), "html", null, true);
        
        $__internal_3a290c85aaa8f7d96c5a7d928f8944a943659a291125653a7262ce4f3296d63c->leave($__internal_3a290c85aaa8f7d96c5a7d928f8944a943659a291125653a7262ce4f3296d63c_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4444f367bf9d0e4522d3afc59a6d7a843ae2cb7600f22a0b5562090047559020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4444f367bf9d0e4522d3afc59a6d7a843ae2cb7600f22a0b5562090047559020->enter($__internal_4444f367bf9d0e4522d3afc59a6d7a843ae2cb7600f22a0b5562090047559020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4444f367bf9d0e4522d3afc59a6d7a843ae2cb7600f22a0b5562090047559020->leave($__internal_4444f367bf9d0e4522d3afc59a6d7a843ae2cb7600f22a0b5562090047559020_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_870e809b9a3d3b2a6f055679466177d8290113657d3d02be3328b31cb8f267f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870e809b9a3d3b2a6f055679466177d8290113657d3d02be3328b31cb8f267f7->enter($__internal_870e809b9a3d3b2a6f055679466177d8290113657d3d02be3328b31cb8f267f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_870e809b9a3d3b2a6f055679466177d8290113657d3d02be3328b31cb8f267f7->leave($__internal_870e809b9a3d3b2a6f055679466177d8290113657d3d02be3328b31cb8f267f7_prof);

    }

    public function getTemplateName()
    {
        return "OrionForumBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 53,  149 => 21,  137 => 2,  123 => 54,  121 => 53,  118 => 52,  112 => 51,  101 => 49,  96 => 48,  92 => 47,  80 => 38,  76 => 37,  59 => 22,  57 => 21,  44 => 11,  32 => 3,  28 => 2,  25 => 1,);
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
{% set pagetitle %}{% block title %}{{ 'home.meta.title'|trans }}{% endblock %}{% endset %}
<html lang=\"{{ app.request.locale }}\">
  <head>
    <meta charset=\"utf-8\" />
    <!--[if lt IE 9]>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <![endif]-->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
    <title>{{ pagetitle }}</title>
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
    <style>
        body {
            padding-top: 50px;
        }
        .starter-template {
            padding: 40px 15px;
        }
    </style>
    {% block stylesheets %}{% endblock %}
  </head>
  <body>
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">OrionForumBundle</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"{{ path('orion_forum_homepage') }}\">Home</a></li>
            <li><a href=\"{{ path('orion_forum_admin_dashboard') }}\">Admin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
      <div class=\"starter-template\">

      {% for label, flashes in app.session.flashbag.all %}
        {% for flash in flashes %}
          <div class=\"alert alert-{{ label }}\">{{ flash }}</div>
        {% endfor %}
      {% endfor %}

      {% block body %}{% endblock %}

      </div>
    </div><!-- /.container -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
  </body>
</html>
", "OrionForumBundle::layout2.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle/Resources/views/layout2.html.twig");
    }
}
