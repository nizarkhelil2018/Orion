<?php

/* DForumBundle::topic.html.twig */
class __TwigTemplate_3024da612db5baf07fdf71bdba199549d75d82db6e1b8a481cb654b5b203470f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "DForumBundle::topic.html.twig", 1);
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
        $__internal_cc298206c1f12ef48e411d23ad677c11309cb6f0bf6b6ef60cbf6da33c7c9af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc298206c1f12ef48e411d23ad677c11309cb6f0bf6b6ef60cbf6da33c7c9af5->enter($__internal_cc298206c1f12ef48e411d23ad677c11309cb6f0bf6b6ef60cbf6da33c7c9af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DForumBundle::topic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc298206c1f12ef48e411d23ad677c11309cb6f0bf6b6ef60cbf6da33c7c9af5->leave($__internal_cc298206c1f12ef48e411d23ad677c11309cb6f0bf6b6ef60cbf6da33c7c9af5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97cd10a0aa175305662e133611cb540c35a4e01d09210abb1645a7599650baa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cd10a0aa175305662e133611cb540c35a4e01d09210abb1645a7599650baa8->enter($__internal_97cd10a0aa175305662e133611cb540c35a4e01d09210abb1645a7599650baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name", array()), "html", null, true);
        
        $__internal_97cd10a0aa175305662e133611cb540c35a4e01d09210abb1645a7599650baa8->leave($__internal_97cd10a0aa175305662e133611cb540c35a4e01d09210abb1645a7599650baa8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_734a8806277325ed620dbab20a30f7669fe2a9819b06762632030429735443bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734a8806277325ed620dbab20a30f7669fe2a9819b06762632030429735443bf->enter($__internal_734a8806277325ed620dbab20a30f7669fe2a9819b06762632030429735443bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_post", array("slug" => $this->getAttribute($context["topic"], "slug", array()))), "html", null, true);
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
                $context["username"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.deleted.user");
                // line 19
                echo "                ";
            }
            // line 20
            echo "                <span class=\"small\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.by"), "html", null, true);
            echo " <strong>";
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
            echo "</strong>
                  ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.on"), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.posts"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.post"), "html", null, true);
            }
            echo "</span></p>
              <p>
                ";
            // line 29
            if (($this->getAttribute($context["topic"], "resolved", array()) == true)) {
                echo "<br /><i class=\" text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.label.issolved"), "html", null, true);
                echo "</i>";
            }
            // line 30
            echo "                ";
            if (($this->getAttribute($context["topic"], "pinned", array()) == true)) {
                echo "<br /><i class=\"text-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.label.ispinned"), "html", null, true);
                echo "</i>";
            }
            // line 31
            echo "                ";
            if (($this->getAttribute($context["topic"], "closed", array()) == true)) {
                echo "<br /><i class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.label.isclosed"), "html", null, true);
                echo "</i>";
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
                $context["username"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.deleted.user");
                // line 39
                echo "              ";
            }
            // line 40
            echo "              <a class=\"lastComment\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_post", array("slug" => $this->getAttribute($context["topic"], "slug", array()))), "html", null, true);
            echo "\">
                <p class=\"topic-poster\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.lastpostby"), "html", null, true);
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
                echo "\" class=\"editAction \" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_topic_edit", array("id" => $this->getAttribute($context["topic"], "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-edit text-warning\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.edit"), "html", null, true);
                echo "</i></a></li>
                <li><a  href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_topic_delete", array("id" => $this->getAttribute($context["topic"], "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-remove text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.remove"), "html", null, true);
                echo "</i> </a></li>  
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.null"), "html", null, true);
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
            $this->loadTemplate("DForumBundle:Form:Topic.html.twig", "DForumBundle::topic.html.twig", 62)->display($context);
        }
        
        $__internal_734a8806277325ed620dbab20a30f7669fe2a9819b06762632030429735443bf->leave($__internal_734a8806277325ed620dbab20a30f7669fe2a9819b06762632030429735443bf_prof);

    }

    public function getTemplateName()
    {
        return "DForumBundle::topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 62,  235 => 60,  231 => 58,  222 => 56,  216 => 54,  207 => 50,  199 => 49,  193 => 46,  186 => 42,  180 => 41,  175 => 40,  172 => 39,  169 => 38,  166 => 37,  163 => 36,  161 => 35,  156 => 32,  149 => 31,  142 => 30,  136 => 29,  124 => 27,  122 => 26,  112 => 21,  105 => 20,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  91 => 15,  87 => 14,  83 => 13,  79 => 12,  73 => 10,  68 => 9,  64 => 8,  60 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}{{ forum.name }}{% endblock %}

{% block body %}
    <h1 class=\"text-center\">{{ forum.name }} <small>({{ pagination.getTotalItemCount }} topics)</small></h1>
    <p class=\"text-center\">{{ forum.description }}</p>
    {{ knp_pagination_render(pagination) }}
      {% for topic in pagination %}
        <div class=\"list-group-item\" id=\"Topic{{ topic.id }}\">
          <div class=\"row\">
            <div id=\"content{{ topic.id }}\" class=\"col-md-4 col-xs-12 topic-content\">
              <a href=\"{{ path('discutea_forum_post', {'slug': topic.slug}) }}\">
                <h2 class=\"topic-title\">{{ topic.title }}</h2>
                {% if topic.user is not null %}
                  {% set username = topic.user.username %}
                {% else %}
                  {% set username = 'discutea.forum.deleted.user'|trans %}
                {% endif %}
                <span class=\"small\">{{ 'discutea.forum.by'|trans }} <strong>{{ username }}</strong>
                  {{ 'discutea.forum.on'|trans }} {{ topic.date|date(\"Y-m-d H:i:s\") }}
                </span>
              </a>
            </div>
            <div class=\"col-md-2 topic-msg-count\">
              {% set posts_count = topic.posts|length %}
              <p><span class=\"badge\">{{ posts_count }} {% if posts_count > 1 %}{{ 'discutea.forum.posts'|trans }}{% else %}{{ 'discutea.forum.post'|trans }}{% endif %}</span></p>
              <p>
                {% if topic.resolved == true %}<br /><i class=\" text-success\">{{ 'discutea.forum.label.issolved'|trans }}</i>{% endif %}
                {% if topic.pinned == true %}<br /><i class=\"text-primary\">{{ 'discutea.forum.label.ispinned'|trans }}</i>{% endif %}
                {% if topic.closed == true %}<br /><i class=\"text-danger\">{{ 'discutea.forum.label.isclosed'|trans }}</i>{% endif %}
              </p>
            </div>
            <div class=\"col-md-4 col-xs-12\">
              {% if topic.posts.last.poster is not null %}
                {% set username = topic.posts.last.poster.username %}
              {% else %}
                {% set username = 'discutea.forum.deleted.user'|trans %}
              {% endif %}
              <a class=\"lastComment\" href=\"{{ path('discutea_forum_post', {'slug': topic.slug}) }}\">
                <p class=\"topic-poster\">{{ 'discutea.forum.lastpostby'|trans }} <strong>{{ username }}</strong></p>
                <p class=\"topic-lastpost-date\">{{ topic.posts.last.date|date(\"Y-m-d H:i:s\") }}</p>
              </a>
            </div>
          </div>
          {% if is_granted('ROLE_MODERATOR') %}  
            <div class=\"row admin\">
              <ul class=\"pull-right list-inline\">
                <li><a id=\"{{ topic.id }}\" class=\"editAction \" href=\"{{ path(\"discutea_forum_topic_edit\", {'id': topic.id}) }}\"><i class=\"glyphicon glyphicon-edit text-warning\"> {{ 'discutea.forum.edit'|trans }}</i></a></li>
                <li><a  href=\"{{ path('discutea_forum_topic_delete', {'id': topic.id}) }}\"><i class=\"glyphicon glyphicon-remove text-danger\">{{ 'discutea.forum.remove'|trans }}</i> </a></li>  
              </ul>
            </div>
          {% endif %}
        </div>    
      {% else %}
        <div class=\"list-group-item text-center\"><h5>{{ 'discutea.forum.null'|trans }}</h5></div>
      {% endfor %}
 

  {{ knp_pagination_render(pagination) }}
  
  {% if form is not null %}{% include 'DForumBundle:Form:Topic.html.twig' %}{% endif %}
{% endblock %}
", "DForumBundle::topic.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle/Resources/views/topic.html.twig");
    }
}
