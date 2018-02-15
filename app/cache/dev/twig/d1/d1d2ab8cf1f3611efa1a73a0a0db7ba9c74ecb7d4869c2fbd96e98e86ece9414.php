<?php

/* @DForum/Post/edit_post.html.twig */
class __TwigTemplate_78461669803673d7870d9194b2482c0fbfcad334a443f0d90467d04ea2b73b23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "@DForum/Post/edit_post.html.twig", 1);
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
        $__internal_216559cc4f050b8c4f85985fe5e849f7bcaab0bc4f1d03f4601723ae4e23f249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216559cc4f050b8c4f85985fe5e849f7bcaab0bc4f1d03f4601723ae4e23f249->enter($__internal_216559cc4f050b8c4f85985fe5e849f7bcaab0bc4f1d03f4601723ae4e23f249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DForum/Post/edit_post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_216559cc4f050b8c4f85985fe5e849f7bcaab0bc4f1d03f4601723ae4e23f249->leave($__internal_216559cc4f050b8c4f85985fe5e849f7bcaab0bc4f1d03f4601723ae4e23f249_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_689853b3b85b8f6a7654435d00cc67319a2e4f9f40058a4282c325f14ccf8e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689853b3b85b8f6a7654435d00cc67319a2e4f9f40058a4282c325f14ccf8e13->enter($__internal_689853b3b85b8f6a7654435d00cc67319a2e4f9f40058a4282c325f14ccf8e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_689853b3b85b8f6a7654435d00cc67319a2e4f9f40058a4282c325f14ccf8e13->leave($__internal_689853b3b85b8f6a7654435d00cc67319a2e4f9f40058a4282c325f14ccf8e13_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_794c61333961ff57a6f575a81546820a7838358673b6647e9306ba6897c4e5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794c61333961ff57a6f575a81546820a7838358673b6647e9306ba6897c4e5f3->enter($__internal_794c61333961ff57a6f575a81546820a7838358673b6647e9306ba6897c4e5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  
    
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DForumBundle/Resources/public/css/post.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  
  
";
        
        $__internal_794c61333961ff57a6f575a81546820a7838358673b6647e9306ba6897c4e5f3->leave($__internal_794c61333961ff57a6f575a81546820a7838358673b6647e9306ba6897c4e5f3_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_31ad3fcc0c2e04f5fccf4745e9763ac23f07f9a1973b27f44b20693114c92198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ad3fcc0c2e04f5fccf4745e9763ac23f07f9a1973b27f44b20693114c92198->enter($__internal_31ad3fcc0c2e04f5fccf4745e9763ac23f07f9a1973b27f44b20693114c92198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            $this->loadTemplate("DForumBundle:Post:preview-post.html.twig", "@DForum/Post/edit_post.html.twig", 20)->display($context);
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
            $this->loadTemplate("DForumBundle:Form:Post.html.twig", "@DForum/Post/edit_post.html.twig", 29)->display($context);
            // line 30
            echo "
  ";
        }
        // line 32
        echo "  <div class=\"clearfix\"></div>

</div>
";
        
        $__internal_31ad3fcc0c2e04f5fccf4745e9763ac23f07f9a1973b27f44b20693114c92198->leave($__internal_31ad3fcc0c2e04f5fccf4745e9763ac23f07f9a1973b27f44b20693114c92198_prof);

    }

    // line 38
    public function block_js($context, array $blocks = array())
    {
        $__internal_8156c6c4de5b2c87f69e87106012febc17359c4900877e6f01c2501a7ed318e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8156c6c4de5b2c87f69e87106012febc17359c4900877e6f01c2501a7ed318e0->enter($__internal_8156c6c4de5b2c87f69e87106012febc17359c4900877e6f01c2501a7ed318e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_8156c6c4de5b2c87f69e87106012febc17359c4900877e6f01c2501a7ed318e0->leave($__internal_8156c6c4de5b2c87f69e87106012febc17359c4900877e6f01c2501a7ed318e0_prof);

    }

    public function getTemplateName()
    {
        return "@DForum/Post/edit_post.html.twig";
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
", "@DForum/Post/edit_post.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\Post\\edit_post.html.twig");
    }
}
