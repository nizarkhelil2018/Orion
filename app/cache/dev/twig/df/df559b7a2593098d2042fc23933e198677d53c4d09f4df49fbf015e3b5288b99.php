<?php

/* @OrionForum/topic.html.twig */
class __TwigTemplate_78c3e7e7f4467a0bb1fa1d04b63d1d133227bbd6eb5df1544298d12089a09868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionForumBundle::layout.html.twig", "@OrionForum/topic.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23350f316b027b1c7fa65238425cc1c726ba71d5817f25565862e805f1b406c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23350f316b027b1c7fa65238425cc1c726ba71d5817f25565862e805f1b406c4->enter($__internal_23350f316b027b1c7fa65238425cc1c726ba71d5817f25565862e805f1b406c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionForum/topic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23350f316b027b1c7fa65238425cc1c726ba71d5817f25565862e805f1b406c4->leave($__internal_23350f316b027b1c7fa65238425cc1c726ba71d5817f25565862e805f1b406c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4708f10e6ae9a39dd1821c21d8b8680a7751a54a4ea7fa45177603b9552b5ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4708f10e6ae9a39dd1821c21d8b8680a7751a54a4ea7fa45177603b9552b5ddd->enter($__internal_4708f10e6ae9a39dd1821c21d8b8680a7751a54a4ea7fa45177603b9552b5ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name", array()), "html", null, true);
        
        $__internal_4708f10e6ae9a39dd1821c21d8b8680a7751a54a4ea7fa45177603b9552b5ddd->leave($__internal_4708f10e6ae9a39dd1821c21d8b8680a7751a54a4ea7fa45177603b9552b5ddd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab9f11131f95e6d80234e05049ec25f1553aaf05abf66c4251c8584c899d8f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9f11131f95e6d80234e05049ec25f1553aaf05abf66c4251c8584c899d8f2f->enter($__internal_ab9f11131f95e6d80234e05049ec25f1553aaf05abf66c4251c8584c899d8f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name", array()), "html", null, true);
        echo " <small>(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " topics)</small></h1>
    <p class=\"text-center\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "description", array()), "html", null, true);
        echo "</p>
    ";
        // line 8
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 10
            echo "        <div class=\"list-group-item\" id=\"Topic";
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "id", array()), "html", null, true);
            echo "\">
          <div class=\"row\">
            <div id=\"content";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "id", array()), "html", null, true);
            echo "\" class=\"col-md-4 col-xs-12 topic-content\">
              <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_post", array("slug" => $this->getAttribute($context["topic"], "slug", array()))), "html", null, true);
            echo "\">
                <h2 class=\"topic-title\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "title", array()), "html", null, true);
            echo "</h2>
                ";
            // line 15
            if ( !(null === $this->getAttribute($context["topic"], "user", array()))) {
                // line 16
                echo "                  ";
                $context["username"] = $this->getAttribute($this->getAttribute($context["topic"], "user", array()), "username", array());
                // line 17
                echo "                ";
            } else {
                // line 18
                echo "                  ";
                $context["username"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.deleted.user");
                // line 19
                echo "                ";
            }
            // line 20
            echo "                <span class=\"small\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.by"), "html", null, true);
            echo " <strong>";
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
            echo "</strong>
                  ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.on"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["topic"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
                </span>
              </a>
            </div>
            <div class=\"col-md-2 topic-msg-count\">
              ";
            // line 26
            $context["posts_count"] = twig_length_filter($this->env, $this->getAttribute($context["topic"], "posts", array()));
            // line 27
            echo "              <p><span class=\"badge\">";
            echo twig_escape_filter($this->env, (isset($context["posts_count"]) ? $context["posts_count"] : $this->getContext($context, "posts_count")), "html", null, true);
            echo " ";
            if (((isset($context["posts_count"]) ? $context["posts_count"] : $this->getContext($context, "posts_count")) > 1)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.posts"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.post"), "html", null, true);
            }
            echo "</span></p>
              <p>
                ";
            // line 29
            if (($this->getAttribute($context["topic"], "resolved", array()) == true)) {
                echo "<br />";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.label.issolved"), "html", null, true);
            }
            // line 30
            echo "                ";
            if (($this->getAttribute($context["topic"], "pinned", array()) == true)) {
                echo "<br />";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.label.ispinned"), "html", null, true);
            }
            // line 31
            echo "                ";
            if (($this->getAttribute($context["topic"], "closed", array()) == true)) {
                echo "<br />";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.label.isclosed"), "html", null, true);
            }
            // line 32
            echo "              </p>
            </div>
            <div class=\"col-md-4 col-xs-12\">
              ";
            // line 35
            if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute($context["topic"], "posts", array()), "last", array()), "poster", array()))) {
                // line 36
                echo "                ";
                $context["username"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["topic"], "posts", array()), "last", array()), "poster", array()), "username", array());
                // line 37
                echo "              ";
            } else {
                // line 38
                echo "                ";
                $context["username"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.deleted.user");
                // line 39
                echo "              ";
            }
            // line 40
            echo "              <a class=\"lastComment\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_post", array("slug" => $this->getAttribute($context["topic"], "slug", array()))), "html", null, true);
            echo "\">
                <p class=\"topic-poster\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.lastpostby"), "html", null, true);
            echo " <strong>";
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
            echo "</strong></p>
                <p class=\"topic-lastpost-date\">";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["topic"], "posts", array()), "last", array()), "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
              </a>
            </div>
          </div>
          ";
            // line 46
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MODERATOR")) {
                echo "  
            <div class=\"row admin\">
              <ul class=\"pull-right list-inline\">
                <li><a id=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "id", array()), "html", null, true);
                echo "\" class=\"editAction\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_topic_edit", array("id" => $this->getAttribute($context["topic"], "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-edit\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.edit"), "html", null, true);
                echo "</a></li>
                <li><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_topic_delete", array("id" => $this->getAttribute($context["topic"], "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-remove\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.remove"), "html", null, true);
                echo "</a></li>  
              </ul>
            </div>
          ";
            }
            // line 54
            echo "        </div>    
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "        <div class=\"list-group-item text-center\"><h5>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.null"), "html", null, true);
            echo "</h5></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo " 

  ";
        // line 60
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
  
  ";
        // line 62
        if ( !(null === (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
            $this->loadTemplate("OrionForumBundle:Form:Topic.html.twig", "@OrionForum/topic.html.twig", 62)->display($context);
        }
        
        $__internal_ab9f11131f95e6d80234e05049ec25f1553aaf05abf66c4251c8584c899d8f2f->leave($__internal_ab9f11131f95e6d80234e05049ec25f1553aaf05abf66c4251c8584c899d8f2f_prof);

    }

    public function getTemplateName()
    {
        return "@OrionForum/topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 62,  232 => 60,  228 => 58,  219 => 56,  213 => 54,  204 => 50,  196 => 49,  190 => 46,  183 => 42,  177 => 41,  172 => 40,  169 => 39,  166 => 38,  163 => 37,  160 => 36,  158 => 35,  153 => 32,  147 => 31,  141 => 30,  136 => 29,  124 => 27,  122 => 26,  112 => 21,  105 => 20,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  91 => 15,  87 => 14,  83 => 13,  79 => 12,  73 => 10,  68 => 9,  64 => 8,  60 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OrionForumBundle::layout.html.twig\" %}

{% block title %}{{ forum.name }}{% endblock %}

{% block body %}
    <h1 class=\"text-center\">{{ forum.name }} <small>({{ pagination.getTotalItemCount }} topics)</small></h1>
    <p class=\"text-center\">{{ forum.description }}</p>
    {{ knp_pagination_render(pagination) }}
      {% for topic in pagination %}
        <div class=\"list-group-item\" id=\"Topic{{ topic.id }}\">
          <div class=\"row\">
            <div id=\"content{{ topic.id }}\" class=\"col-md-4 col-xs-12 topic-content\">
              <a href=\"{{ path('orion_forum_post', {'slug': topic.slug}) }}\">
                <h2 class=\"topic-title\">{{ topic.title }}</h2>
                {% if topic.user is not null %}
                  {% set username = topic.user.username %}
                {% else %}
                  {% set username = 'orion.forum.deleted.user'|trans %}
                {% endif %}
                <span class=\"small\">{{ 'orion.forum.by'|trans }} <strong>{{ username }}</strong>
                  {{ 'orion.forum.on'|trans }} {{ topic.date|date(\"Y-m-d H:i:s\") }}
                </span>
              </a>
            </div>
            <div class=\"col-md-2 topic-msg-count\">
              {% set posts_count = topic.posts|length %}
              <p><span class=\"badge\">{{ posts_count }} {% if posts_count > 1 %}{{ 'orion.forum.posts'|trans }}{% else %}{{ 'orion.forum.post'|trans }}{% endif %}</span></p>
              <p>
                {% if topic.resolved == true %}<br />{{ 'orion.forum.label.issolved'|trans }}{% endif %}
                {% if topic.pinned == true %}<br />{{ 'orion.forum.label.ispinned'|trans }}{% endif %}
                {% if topic.closed == true %}<br />{{ 'orion.forum.label.isclosed'|trans }}{% endif %}
              </p>
            </div>
            <div class=\"col-md-4 col-xs-12\">
              {% if topic.posts.last.poster is not null %}
                {% set username = topic.posts.last.poster.username %}
              {% else %}
                {% set username = 'orion.forum.deleted.user'|trans %}
              {% endif %}
              <a class=\"lastComment\" href=\"{{ path('orion_forum_post', {'slug': topic.slug}) }}\">
                <p class=\"topic-poster\">{{ 'orion.forum.lastpostby'|trans }} <strong>{{ username }}</strong></p>
                <p class=\"topic-lastpost-date\">{{ topic.posts.last.date|date(\"Y-m-d H:i:s\") }}</p>
              </a>
            </div>
          </div>
          {% if is_granted('ROLE_MODERATOR') %}  
            <div class=\"row admin\">
              <ul class=\"pull-right list-inline\">
                <li><a id=\"{{ topic.id }}\" class=\"editAction\" href=\"{{ path(\"orion_forum_topic_edit\", {'id': topic.id}) }}\"><i class=\"glyphicon glyphicon-edit\"></i> {{ 'orion.forum.edit'|trans }}</a></li>
                <li><a href=\"{{ path('orion_forum_topic_delete', {'id': topic.id}) }}\"><i class=\"glyphicon glyphicon-remove\"></i> {{ 'orion.forum.remove'|trans }}</a></li>  
              </ul>
            </div>
          {% endif %}
        </div>    
      {% else %}
        <div class=\"list-group-item text-center\"><h5>{{ 'orion.forum.null'|trans }}</h5></div>
      {% endfor %}
 

  {{ knp_pagination_render(pagination) }}
  
  {% if form is not null %}{% include 'OrionForumBundle:Form:Topic.html.twig' %}{% endif %}
{% endblock %}
", "@OrionForum/topic.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle\\Resources\\views\\topic.html.twig");
    }
}
