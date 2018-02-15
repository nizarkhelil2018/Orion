<?php

/* @DForum/Post/single-post.html.twig */
class __TwigTemplate_aa720ae17e40cda9e7f491794f97266b219f0febb86fdd575e6feffc01dc876f extends Twig_Template
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
        $__internal_7cc8d3d74507b2c7ed41d4584a71602ad6d790a7aa69d418d6f92ed7921650aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc8d3d74507b2c7ed41d4584a71602ad6d790a7aa69d418d6f92ed7921650aa->enter($__internal_7cc8d3d74507b2c7ed41d4584a71602ad6d790a7aa69d418d6f92ed7921650aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DForum/Post/single-post.html.twig"));

        // line 1
        echo "<li id=\"post";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" class=\"list-group-item topics\">
  <div class=\"row\">
    <div class=\"col-sm-2 text-center\">
      ";
        // line 4
        if ( !(null === $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "poster", array()))) {
            // line 5
            echo "        ";
            $context["username"] = $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "poster", array()), "username", array());
            // line 6
            echo "      ";
        } else {
            // line 7
            echo "        ";
            $context["username"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.deleted.user");
            // line 8
            echo "      ";
        }
        // line 9
        echo "      <p><strong>";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</strong></p>
    </div>
    <div class=\"col-sm-10\">
      <div class=\"raw\">
        <span class=\"small\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.on"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>

        ";
        // line 15
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && array_key_exists("posts", $context))) {
            // line 16
            echo "          <ul class=\"pull-right list-inline\">
            ";
            // line 17
            if ((($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "poster", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MODERATOR"))) {
                // line 18
                echo "              <li><a id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
                echo "\" class=\"editAction\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
                echo " \"><i class=\"glyphicon glyphicon-edit text-warning\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.edit"), "html", null, true);
                echo "</i></a></li>
            ";
            }
            // line 20
            echo "            ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MODERATOR")) {
                // line 21
                echo "              <li>
                <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_post_delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-remove text-danger\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.remove"), "html", null, true);
                echo "</i></a>
              </li>    
            ";
            }
            // line 25
            echo "          </ul>
        ";
        }
        // line 27
        echo "        <br /><br />
      </div>
              
        <div id=\"content";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "\" class=\"raw\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo "</div>
      ";
        // line 31
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && array_key_exists("posts", $context))) {
            // line 32
            echo "        <ul class=\"pull-right list-inline\">
          <li><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "route", array()), array("slug" => $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "params", array()), "slug", array()), "p" => $this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "pageCount", array()), "quote" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "#discutea_forum_post\"><i class=\"glyphicon glyphicon-tint text-aqua\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.quote"), "html", null, true);
            echo "</i></a></li>
          ";
            // line 34
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "pageCount", array()) != $this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "currentPageNumber", array()))) {
                // line 35
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "route", array()), array("slug" => $this->getAttribute($this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "params", array()), "slug", array()), "p" => $this->getAttribute((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "pageCount", array()))), "html", null, true);
                echo "#discutea_forum_post\"><i class=\"glyphicon glyphicon-thumbs-up text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.reply"), "html", null, true);
                echo "</i> </a></li>
          ";
            } else {
                // line 37
                echo "            <li><a href=\"#discutea_forum_post\"><i class=\"glyphicon glyphicon-thumbs-up text-success\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.reply"), "html", null, true);
                echo "</i></a></li>
          ";
            }
            // line 38
            echo " 
        </ul>
      ";
        }
        // line 41
        echo "    </div>
  </div>
</li>
";
        
        $__internal_7cc8d3d74507b2c7ed41d4584a71602ad6d790a7aa69d418d6f92ed7921650aa->leave($__internal_7cc8d3d74507b2c7ed41d4584a71602ad6d790a7aa69d418d6f92ed7921650aa_prof);

    }

    public function getTemplateName()
    {
        return "@DForum/Post/single-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  131 => 38,  125 => 37,  117 => 35,  115 => 34,  109 => 33,  106 => 32,  104 => 31,  98 => 30,  93 => 27,  89 => 25,  81 => 22,  78 => 21,  75 => 20,  65 => 18,  63 => 17,  60 => 16,  58 => 15,  51 => 13,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  29 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li id=\"post{{ post.id }}\" class=\"list-group-item topics\">
  <div class=\"row\">
    <div class=\"col-sm-2 text-center\">
      {% if post.poster is not null %}
        {% set username = post.poster.username %}
      {% else %}
        {% set username = 'discutea.forum.deleted.user'|trans %}
      {% endif %}
      <p><strong>{{ username }}</strong></p>
    </div>
    <div class=\"col-sm-10\">
      <div class=\"raw\">
        <span class=\"small\">{{ 'discutea.forum.on'|trans }} {{ post.date|date(\"Y-m-d H:i:s\") }}</span>

        {% if app.user and posts is defined %}
          <ul class=\"pull-right list-inline\">
            {% if (post.poster == app.user or is_granted('ROLE_MODERATOR')) %}
              <li><a id=\"{{ post.id }}\" class=\"editAction\" href=\"{{ path(\"discutea_forum_post_edit\", {'id': post.id}) }} \"><i class=\"glyphicon glyphicon-edit text-warning\"> {{ 'discutea.forum.edit'|trans }}</i></a></li>
            {% endif %}
            {% if is_granted('ROLE_MODERATOR') %}
              <li>
                <a href=\"{{ path('discutea_forum_post_delete', {'id': post.id}) }}\"><i class=\"glyphicon glyphicon-remove text-danger\"> {{ 'discutea.forum.remove'|trans }}</i></a>
              </li>    
            {% endif %}
          </ul>
        {% endif %}
        <br /><br />
      </div>
              
        <div id=\"content{{ post.id }}\" class=\"raw\">{{ post.content }}</div>
      {% if app.user and posts is defined %}
        <ul class=\"pull-right list-inline\">
          <li><a href=\"{{ path(posts.route, {'slug': posts.params.slug, 'p': posts.pageCount, 'quote': post.id}) }}#discutea_forum_post\"><i class=\"glyphicon glyphicon-tint text-aqua\"> {{ 'discutea.forum.quote'|trans }}</i></a></li>
          {% if posts.pageCount != posts.currentPageNumber %}
            <li><a href=\"{{ path(posts.route, {'slug': posts.params.slug, 'p': posts.pageCount}) }}#discutea_forum_post\"><i class=\"glyphicon glyphicon-thumbs-up text-info\">{{ 'discutea.forum.reply'|trans }}</i> </a></li>
          {% else %}
            <li><a href=\"#discutea_forum_post\"><i class=\"glyphicon glyphicon-thumbs-up text-success\"> {{ 'discutea.forum.reply'|trans }}</i></a></li>
          {% endif %} 
        </ul>
      {% endif %}
    </div>
  </div>
</li>
", "@DForum/Post/single-post.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\Post\\single-post.html.twig");
    }
}
