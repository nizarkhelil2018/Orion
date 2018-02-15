<?php

/* DForumBundle::Post/edit_post.html.twig */
class __TwigTemplate_8b3582c5156182ff7040ed065c0d0f79d58988c5b8b71924bf51627656477747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "DForumBundle::Post/edit_post.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69f7b402ecec2dad6ec13536bff6b38abdd0cd7e8cabf3c20cf3716346041c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f7b402ecec2dad6ec13536bff6b38abdd0cd7e8cabf3c20cf3716346041c02->enter($__internal_69f7b402ecec2dad6ec13536bff6b38abdd0cd7e8cabf3c20cf3716346041c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DForumBundle::Post/edit_post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69f7b402ecec2dad6ec13536bff6b38abdd0cd7e8cabf3c20cf3716346041c02->leave($__internal_69f7b402ecec2dad6ec13536bff6b38abdd0cd7e8cabf3c20cf3716346041c02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26f187a53be9edd2206621cd7132028d85201ce99d726833ac5deaa529308c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f187a53be9edd2206621cd7132028d85201ce99d726833ac5deaa529308c93->enter($__internal_26f187a53be9edd2206621cd7132028d85201ce99d726833ac5deaa529308c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_26f187a53be9edd2206621cd7132028d85201ce99d726833ac5deaa529308c93->leave($__internal_26f187a53be9edd2206621cd7132028d85201ce99d726833ac5deaa529308c93_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c943c11e5ddaff42f862c0631598f9db3ad0a48435b05e88166b154692a013a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c943c11e5ddaff42f862c0631598f9db3ad0a48435b05e88166b154692a013a3->enter($__internal_c943c11e5ddaff42f862c0631598f9db3ad0a48435b05e88166b154692a013a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  
    
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DForumBundle/Resources/public/css/post.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  
  
";
        
        $__internal_c943c11e5ddaff42f862c0631598f9db3ad0a48435b05e88166b154692a013a3->leave($__internal_c943c11e5ddaff42f862c0631598f9db3ad0a48435b05e88166b154692a013a3_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c179b4633fe34b367b171668d822254cc305a2cc57e6680da86c7dc671a0295d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c179b4633fe34b367b171668d822254cc305a2cc57e6680da86c7dc671a0295d->enter($__internal_c179b4633fe34b367b171668d822254cc305a2cc57e6680da86c7dc671a0295d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<div class=\"container\">
<h1 class=\"text-center\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.post.editpost"), "html", null, true);
        echo "</h1>
  
  <ul id=\"postsList\" class=\"list-unstyled\">

    ";
        // line 19
        if ((isset($context["postpreview"]) ? $context["postpreview"] : $this->getContext($context, "postpreview"))) {
            // line 20
            echo "        ";
            $this->loadTemplate("DForumBundle:Post:preview-post.html.twig", "DForumBundle::Post/edit_post.html.twig", 20)->display($context);
            // line 21
            echo "    ";
        }
        // line 22
        echo "    
  </ul>

  ";
        // line 25
        if ( !(null === (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
            // line 26
            echo "  <h2>form</h2>

  
   ";
            // line 29
            $this->loadTemplate("DForumBundle:Form:Post.html.twig", "DForumBundle::Post/edit_post.html.twig", 29)->display($context);
            // line 30
            echo "
  ";
        }
        // line 32
        echo "  <div class=\"clearfix\"></div>

</div>
";
        
        $__internal_c179b4633fe34b367b171668d822254cc305a2cc57e6680da86c7dc671a0295d->leave($__internal_c179b4633fe34b367b171668d822254cc305a2cc57e6680da86c7dc671a0295d_prof);

    }

    // line 38
    public function block_js($context, array $blocks = array())
    {
        $__internal_eac9fbc7f50968859ddc6239e75e7a52352101ec9c865810dc2a3aca6198c30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac9fbc7f50968859ddc6239e75e7a52352101ec9c865810dc2a3aca6198c30d->enter($__internal_eac9fbc7f50968859ddc6239e75e7a52352101ec9c865810dc2a3aca6198c30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 39
        echo "  ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 40
            echo "    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MODERATOR")) {
                // line 41
                echo "        <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DForumBundle/Resources/public/js/post.js"), "html", null, true);
                echo "\"></script>
        <script src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DForumBundle/Resources/public/js/moderator/post.js"), "html", null, true);
                echo "\"></script>

    ";
            } else {
                // line 45
                echo "           <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DForumBundle/Resources/public/js/post.js"), "html", null, true);
                echo "\"></script>

    ";
            }
            // line 48
            echo "  ";
        }
        
        $__internal_eac9fbc7f50968859ddc6239e75e7a52352101ec9c865810dc2a3aca6198c30d->leave($__internal_eac9fbc7f50968859ddc6239e75e7a52352101ec9c865810dc2a3aca6198c30d_prof);

    }

    public function getTemplateName()
    {
        return "DForumBundle::Post/edit_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 48,  144 => 45,  138 => 42,  133 => 41,  130 => 40,  127 => 39,  121 => 38,  111 => 32,  107 => 30,  105 => 29,  100 => 26,  98 => 25,  93 => 22,  90 => 21,  87 => 20,  85 => 19,  78 => 15,  75 => 14,  69 => 13,  58 => 8,  54 => 6,  48 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DForumBundle::layout.html.twig\" %}

{% block title %}{% endblock %}

{% block stylesheets %}
  
    
<link href=\"{{ asset('DForumBundle/Resources/public/css/post.css')}}\" rel=\"stylesheet\">
  
  
{% endblock %}

{% block body %}
<div class=\"container\">
<h1 class=\"text-center\">{{ 'discutea.forum.post.editpost'|trans }}</h1>
  
  <ul id=\"postsList\" class=\"list-unstyled\">

    {% if postpreview %}
        {% include 'DForumBundle:Post:preview-post.html.twig' %}
    {% endif %}
    
  </ul>

  {% if form is not null %}
  <h2>form</h2>

  
   {% include 'DForumBundle:Form:Post.html.twig' %}

  {% endif %}
  <div class=\"clearfix\"></div>

</div>
{% endblock %}


{% block js %}
  {% if app.user %}
    {% if is_granted('ROLE_MODERATOR') %}
        <script src=\"{{ asset('DForumBundle/Resources/public/js/post.js')}}\"></script>
        <script src=\"{{ asset('DForumBundle/Resources/public/js/moderator/post.js')}}\"></script>

    {% else %}
           <script src=\"{{ asset('DForumBundle/Resources/public/js/post.js')}}\"></script>

    {% endif %}
  {% endif %}
{% endblock %}
", "DForumBundle::Post/edit_post.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle/Resources/views/Post/edit_post.html.twig");
    }
}
