<?php

/* @DForum/post.html.twig */
class __TwigTemplate_0b16815f1dbc04a9313fda62a970d2c44f16500c529cc21ce7e3f0bf53b95d78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "@DForum/post.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_678a752ca418ab2aeb0e4eac9ecee5103dafd58477ba6ff5d55735e360c06bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678a752ca418ab2aeb0e4eac9ecee5103dafd58477ba6ff5d55735e360c06bc0->enter($__internal_678a752ca418ab2aeb0e4eac9ecee5103dafd58477ba6ff5d55735e360c06bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DForum/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_678a752ca418ab2aeb0e4eac9ecee5103dafd58477ba6ff5d55735e360c06bc0->leave($__internal_678a752ca418ab2aeb0e4eac9ecee5103dafd58477ba6ff5d55735e360c06bc0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_807e24759c934e17bb38bc997c4ccc6e9b88db416673e026c8318883ef5a8d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807e24759c934e17bb38bc997c4ccc6e9b88db416673e026c8318883ef5a8d3d->enter($__internal_807e24759c934e17bb38bc997c4ccc6e9b88db416673e026c8318883ef5a8d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "title", array()), "html", null, true);
        
        $__internal_807e24759c934e17bb38bc997c4ccc6e9b88db416673e026c8318883ef5a8d3d->leave($__internal_807e24759c934e17bb38bc997c4ccc6e9b88db416673e026c8318883ef5a8d3d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5898259ba2440a79ad1cc89798da65f0b567c40e1a92d7b174638391b2b5084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5898259ba2440a79ad1cc89798da65f0b567c40e1a92d7b174638391b2b5084->enter($__internal_c5898259ba2440a79ad1cc89798da65f0b567c40e1a92d7b174638391b2b5084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <h1 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "title", array()), "html", null, true);
        echo "</h1>
  ";
        // line 7
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        echo "
  
  ";
        // line 9
        if (($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "closed", array()) == true)) {
            // line 10
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.label.isclosed"), "html", null, true);
            echo "</div>
  ";
        }
        // line 12
        echo "  ";
        if (($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "resolved", array()) == true)) {
            // line 13
            echo "    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.label.issolved"), "html", null, true);
            echo "</div>
  ";
        }
        // line 15
        echo "  ";
        if (($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "pinned", array()) == true)) {
            // line 16
            echo "    <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.label.ispinned"), "html", null, true);
            echo "</div>
  ";
        }
        // line 18
        echo "
  <ul class=\"list-unstyled\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            $this->loadTemplate("DForumBundle::Post/single-post.html.twig", "@DForum/post.html.twig", 20)->display($context);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        if ((isset($context["postpreview"]) ? $context["postpreview"] : $this->getContext($context, "postpreview"))) {
            $this->loadTemplate("DForumBundle::Post/preview-post.html.twig", "@DForum/post.html.twig", 21)->display($context);
        }
        // line 22
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("CanEditTopic", (isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")))) {
            $this->loadTemplate("DForumBundle::label.html.twig", "@DForum/post.html.twig", 22)->display($context);
        }
        // line 23
        echo "  </ul>

  ";
        // line 25
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        echo "
  
  ";
        // line 27
        if ( !(null === (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
            // line 28
            echo "    <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "title", array()), "html", null, true);
            echo "</h2>
    ";
            // line 29
            if ((twig_date_converter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "lastpost", array())) < twig_date_converter($this->env, "-1month"))) {
                // line 30
                echo "      <div class=\"alert alert-danger text-center\" role=\"alert\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.post.aged"), "html", null, true);
                echo "</div>
    ";
            }
            // line 32
            echo "    ";
            $this->loadTemplate("DForumBundle::Form/Post.html.twig", "@DForum/post.html.twig", 32)->display($context);
            // line 33
            echo "  ";
        }
        
        $__internal_c5898259ba2440a79ad1cc89798da65f0b567c40e1a92d7b174638391b2b5084->leave($__internal_c5898259ba2440a79ad1cc89798da65f0b567c40e1a92d7b174638391b2b5084_prof);

    }

    public function getTemplateName()
    {
        return "@DForum/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 33,  157 => 32,  151 => 30,  149 => 29,  144 => 28,  142 => 27,  137 => 25,  133 => 23,  128 => 22,  123 => 21,  93 => 20,  89 => 18,  83 => 16,  80 => 15,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}{{ topic.title }}{% endblock %}

{% block body %}
  <h1 class=\"text-center\">{{ topic.title }}</h1>
  {{ knp_pagination_render(posts) }}
  
  {% if topic.closed == true %}
    <div class=\"alert alert-danger\">{{ 'discutea.forum.label.isclosed'|trans }}</div>
  {% endif %}
  {% if topic.resolved == true %}
    <div class=\"alert alert-success\">{{ 'discutea.forum.label.issolved'|trans }}</div>
  {% endif %}
  {% if topic.pinned == true %}
    <div class=\"alert alert-warning\">{{ 'discutea.forum.label.ispinned'|trans }}</div>
  {% endif %}

  <ul class=\"list-unstyled\">
    {% for post in posts %}{% include 'DForumBundle::Post/single-post.html.twig' %}{% endfor %}
    {% if postpreview %}{% include 'DForumBundle::Post/preview-post.html.twig' %}{% endif %}
    {% if is_granted('CanEditTopic', topic) %}{% include 'DForumBundle::label.html.twig' %}{% endif %}
  </ul>

  {{ knp_pagination_render(posts) }}
  
  {% if form is not null %}
    <h2>{{ topic.title }}</h2>
    {% if date(topic.lastpost) < date('-1month') %}
      <div class=\"alert alert-danger text-center\" role=\"alert\">{{ 'discutea.forum.post.aged'|trans }}</div>
    {% endif %}
    {% include 'DForumBundle::Form/Post.html.twig' %}
  {% endif %}
{% endblock %}
", "@DForum/post.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\post.html.twig");
    }
}
