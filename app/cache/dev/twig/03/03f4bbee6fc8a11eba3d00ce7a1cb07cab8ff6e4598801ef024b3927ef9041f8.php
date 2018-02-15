<?php

/* OrionForumBundle:Moderator:index.moderator.html.twig */
class __TwigTemplate_aa93db6a6b5d62ba8c8ef068e2a48c3a589258680a98c020c68a34e8f95beeb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionForumBundle::layout_user.html.twig", "OrionForumBundle:Moderator:index.moderator.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionForumBundle::layout_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de8e6af93d5165cb5d37aeaff38d67c2892dc2e01a971fff865690bc73fb61b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8e6af93d5165cb5d37aeaff38d67c2892dc2e01a971fff865690bc73fb61b2->enter($__internal_de8e6af93d5165cb5d37aeaff38d67c2892dc2e01a971fff865690bc73fb61b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionForumBundle:Moderator:index.moderator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8e6af93d5165cb5d37aeaff38d67c2892dc2e01a971fff865690bc73fb61b2->leave($__internal_de8e6af93d5165cb5d37aeaff38d67c2892dc2e01a971fff865690bc73fb61b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_865ce170d3716811a079e1703570949d614a8a14a94080b8bab4af4866f8cab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865ce170d3716811a079e1703570949d614a8a14a94080b8bab4af4866f8cab5->enter($__internal_865ce170d3716811a079e1703570949d614a8a14a94080b8bab4af4866f8cab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Admin
";
        
        $__internal_865ce170d3716811a079e1703570949d614a8a14a94080b8bab4af4866f8cab5->leave($__internal_865ce170d3716811a079e1703570949d614a8a14a94080b8bab4af4866f8cab5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b46f05658b41363e1162d0b91d41f6540314ab8c60dd56e893dc596d26ff7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b46f05658b41363e1162d0b91d41f6540314ab8c60dd56e893dc596d26ff7cd->enter($__internal_9b46f05658b41363e1162d0b91d41f6540314ab8c60dd56e893dc596d26ff7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 10
        echo "<div class=\"row\">

  <div class=\"col-xs-12 col-sm-6\">
    <div class=\"widget-box\">
      <div class=\"widget-title\">
        <span class=\"icon\"><i class=\"fa fa-file\"></i></span><h5>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.post.recent"), "html", null, true);
        echo "</h5>
        <span title=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))), "html", null, true);
        echo " Posts\" class=\"label label-success tip-left\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))), "html", null, true);
        echo "</span>
      </div>
      <div class=\"widget-content nopadding\">
        <ul class=\"recent-posts\">

          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 22
            echo "          <li>
            <div class=\"user-thumb\">
              <img width=\"40\" height=\"40\" alt=\"User\" src=\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ1kn09Jy4NdTZmgv4issVLY4M3w_dLz5EGUfDk1DGHN1LKsfDa8A\">
            </div>
            <div class=\"article-post\">
              ";
            // line 27
            if ( !(null === $this->getAttribute($context["post"], "poster", array()))) {
                // line 28
                echo "                ";
                $context["username"] = $this->getAttribute($this->getAttribute($context["post"], "poster", array()), "username", array());
                // line 29
                echo "                ";
                $context["email"] = "-";
                // line 30
                echo "              ";
            } else {
                // line 31
                echo "                ";
                $context["username"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.deleted.user");
                // line 32
                echo "                ";
                $context["email"] = $this->getAttribute($this->getAttribute($context["post"], "poster", array()), "email", array());
                // line 33
                echo "              ";
            }
            // line 34
            echo "              <p>
                <span class=\"user-info\">";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.by"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.on"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
            echo "</span><br />
                <span class=\"user-info\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.location"), "html", null, true);
            echo ": <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_topic", array("slug" => $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "topic", array()), "forum", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "topic", array()), "forum", array()), "name", array()), "html", null, true);
            echo "</a> > <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_post", array("slug" => $this->getAttribute($this->getAttribute($context["post"], "topic", array()), "slug", array()))), "html", null, true);
            echo "#content";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "topic", array()), "title", array()), "html", null, true);
            echo "</a> </span>
              </p>
              <p class=\"content\">
                ";
            // line 39
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["post"], "content", array())) > 150)) ? ((twig_slice($this->env, $this->getAttribute($context["post"], "content", array()), 0, 150) . "...")) : ($this->getAttribute($context["post"], "content", array()))), "html", null, true);
            echo "
              </p>
              <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_post", array("slug" => $this->getAttribute($this->getAttribute($context["post"], "topic", array()), "slug", array()))), "html", null, true);
            echo "#content";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.see"), "html", null, true);
            echo "</a>
              <div class=\"clearfix\"></div>
            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
        </ul>
      </div>
    </div>
  </div>
          
  <div class=\"col-xs-12 col-sm-6\">
    <div class=\"widget-box\">
      <div class=\"widget-title\">
        <span class=\"icon\"><i class=\"fa fa-file\"></i></span><h5>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.topic.recent"), "html", null, true);
        echo "</h5>
        <span title=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["topics"]) ? $context["topics"] : $this->getContext($context, "topics"))), "html", null, true);
        echo " Topics\" class=\"label label-info tip-left\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["topics"]) ? $context["topics"] : $this->getContext($context, "topics"))), "html", null, true);
        echo "</span>
      </div>
      <div class=\"widget-content nopadding\">
        <ul class=\"recent-posts\">

          ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["topics"]) ? $context["topics"] : $this->getContext($context, "topics")), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 62
            echo "          <li>
            <div class=\"user-thumb\">
              <img width=\"40\" height=\"40\" alt=\"User\" src=\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ1kn09Jy4NdTZmgv4issVLY4M3w_dLz5EGUfDk1DGHN1LKsfDa8A\">
            </div>
            <div class=\"article-post\">
              <p>
                <span class=\"user-info\">";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.by"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["topic"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span><br />
                <span class=\"user-info\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.location"), "html", null, true);
            echo ": <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_topic", array("slug" => $this->getAttribute($this->getAttribute($context["topic"], "forum", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["topic"], "forum", array()), "name", array()), "html", null, true);
            echo "</a> > <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_post", array("slug" => $this->getAttribute($context["topic"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "title", array()), "html", null, true);
            echo "</a> </span>
              </p>
              <p class=\"content\">
                ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "title", array()), "html", null, true);
            echo "
              </p>
              <div class=\"pull-right\">
                <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_topic", array("slug" => $this->getAttribute($this->getAttribute($context["topic"], "forum", array()), "slug", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.see"), "html", null, true);
            echo "</a>
              </div>
              <div class=\"clearfix\"></div>
            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
        </ul>
      </div>
    </div>
  </div>

</div>

";
        // line 89
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MODERATOR")) {
            // line 90
            echo "  ";
            $this->loadTemplate("OrionForumBundle:Admin:index.admin.html.twig", "OrionForumBundle:Moderator:index.moderator.html.twig", 90)->display($context);
        }
        // line 92
        echo " 
";
        
        $__internal_9b46f05658b41363e1162d0b91d41f6540314ab8c60dd56e893dc596d26ff7cd->leave($__internal_9b46f05658b41363e1162d0b91d41f6540314ab8c60dd56e893dc596d26ff7cd_prof);

    }

    public function getTemplateName()
    {
        return "OrionForumBundle:Moderator:index.moderator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 92,  250 => 90,  248 => 89,  238 => 81,  224 => 75,  218 => 72,  204 => 69,  198 => 68,  190 => 62,  186 => 61,  176 => 56,  172 => 55,  161 => 46,  146 => 41,  141 => 39,  125 => 36,  113 => 35,  110 => 34,  107 => 33,  104 => 32,  101 => 31,  98 => 30,  95 => 29,  92 => 28,  90 => 27,  83 => 22,  79 => 21,  69 => 16,  65 => 15,  58 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OrionForumBundle::layout_user.html.twig' %}

{% block title %}
  Admin
{% endblock %}

{% block body %}

{# Posts and Topic #}
<div class=\"row\">

  <div class=\"col-xs-12 col-sm-6\">
    <div class=\"widget-box\">
      <div class=\"widget-title\">
        <span class=\"icon\"><i class=\"fa fa-file\"></i></span><h5>{{ 'orion.forum.post.recent'|trans }}</h5>
        <span title=\"{{ posts|length }} Posts\" class=\"label label-success tip-left\">{{ posts|length }}</span>
      </div>
      <div class=\"widget-content nopadding\">
        <ul class=\"recent-posts\">

          {% for post in posts|slice(0, 5) %}
          <li>
            <div class=\"user-thumb\">
              <img width=\"40\" height=\"40\" alt=\"User\" src=\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ1kn09Jy4NdTZmgv4issVLY4M3w_dLz5EGUfDk1DGHN1LKsfDa8A\">
            </div>
            <div class=\"article-post\">
              {% if post.poster is not null %}
                {% set username = post.poster.username %}
                {% set email = '-' %}
              {% else %}
                {% set username = 'orion.forum.deleted.user'|trans %}
                {% set email = post.poster.email %}
              {% endif %}
              <p>
                <span class=\"user-info\">{{ 'orion.forum.by'|trans }}: {{ username }} {{ 'orion.forum.on'|trans }} {{ post.date|date(\"Y-m-d H:i:s\") }}, {{ email }}</span><br />
                <span class=\"user-info\">{{ 'orion.forum.location'|trans }}: <a href=\"{{ path('orion_forum_topic', {'slug': post.topic.forum.slug}) }}\">{{ post.topic.forum.name }}</a> > <a href=\"{{ path('orion_forum_post', {'slug': post.topic.slug}) }}#content{{ post.id }}\">{{ post.topic.title }}</a> </span>
              </p>
              <p class=\"content\">
                {{ post.content|length > 150 ? post.content|slice(0, 150) ~ '...' : post.content  }}
              </p>
              <a href=\"{{ path('orion_forum_post', {'slug': post.topic.slug}) }}#content{{ post.id }}\" class=\"btn btn-primary btn-xs pull-right\">{{ 'orion.forum.see'|trans }}</a>
              <div class=\"clearfix\"></div>
            </div>
          </li>
          {% endfor %}

        </ul>
      </div>
    </div>
  </div>
          
  <div class=\"col-xs-12 col-sm-6\">
    <div class=\"widget-box\">
      <div class=\"widget-title\">
        <span class=\"icon\"><i class=\"fa fa-file\"></i></span><h5>{{ 'orion.forum.topic.recent'|trans }}</h5>
        <span title=\"{{ topics|length }} Topics\" class=\"label label-info tip-left\">{{ topics|length }}</span>
      </div>
      <div class=\"widget-content nopadding\">
        <ul class=\"recent-posts\">

          {% for topic in topics|slice(0, 5) %}
          <li>
            <div class=\"user-thumb\">
              <img width=\"40\" height=\"40\" alt=\"User\" src=\"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ1kn09Jy4NdTZmgv4issVLY4M3w_dLz5EGUfDk1DGHN1LKsfDa8A\">
            </div>
            <div class=\"article-post\">
              <p>
                <span class=\"user-info\">{{ 'orion.forum.by'|trans }}: {{ topic.date|date(\"Y-m-d H:i:s\") }}</span><br />
                <span class=\"user-info\">{{ 'orion.forum.location'|trans }}: <a href=\"{{ path('orion_forum_topic', {'slug': topic.forum.slug}) }}\">{{ topic.forum.name }}</a> > <a href=\"{{ path('orion_forum_post', {'slug': topic.slug}) }}\">{{ topic.title }}</a> </span>
              </p>
              <p class=\"content\">
                {{ topic.title }}
              </p>
              <div class=\"pull-right\">
                <a href=\"{{ path('orion_forum_topic', {'slug': topic.forum.slug}) }}\" class=\"btn btn-primary btn-xs\">{{ 'orion.forum.see'|trans }}</a>
              </div>
              <div class=\"clearfix\"></div>
            </div>
          </li>
          {% endfor %}

        </ul>
      </div>
    </div>
  </div>

</div>

{% if is_granted('ROLE_MODERATOR') %}
  {% include 'OrionForumBundle:Admin:index.admin.html.twig' %}
{% endif %}
 
{% endblock %}
", "OrionForumBundle:Moderator:index.moderator.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle/Resources/views/Moderator/index.moderator.html.twig");
    }
}
