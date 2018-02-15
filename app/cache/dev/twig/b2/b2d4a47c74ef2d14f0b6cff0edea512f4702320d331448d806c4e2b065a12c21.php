<?php

/* @OrionForum/index.html.twig */
class __TwigTemplate_cc51f3064fd8e84cff7a6a99f0bac6aeb24df42d7de5f1d411d852076354f415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionForumBundle::layout_user.html.twig", "@OrionForum/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionForumBundle::layout_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_285cfe49c2ad668ec0298d25c31bca62da1af5cf9f6a259cce014df0b6564304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285cfe49c2ad668ec0298d25c31bca62da1af5cf9f6a259cce014df0b6564304->enter($__internal_285cfe49c2ad668ec0298d25c31bca62da1af5cf9f6a259cce014df0b6564304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionForum/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_285cfe49c2ad668ec0298d25c31bca62da1af5cf9f6a259cce014df0b6564304->leave($__internal_285cfe49c2ad668ec0298d25c31bca62da1af5cf9f6a259cce014df0b6564304_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_98a7ad79fe432d3bd19ef3457fa913a77642fcb2a66be21d9e70db8b43c393b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a7ad79fe432d3bd19ef3457fa913a77642fcb2a66be21d9e70db8b43c393b0->enter($__internal_98a7ad79fe432d3bd19ef3457fa913a77642fcb2a66be21d9e70db8b43c393b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index Forums";
        
        $__internal_98a7ad79fe432d3bd19ef3457fa913a77642fcb2a66be21d9e70db8b43c393b0->leave($__internal_98a7ad79fe432d3bd19ef3457fa913a77642fcb2a66be21d9e70db8b43c393b0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0809f4e2a8b617a6bdfc91d3802c5c35c338e8350e71e818cb54968851cc0538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0809f4e2a8b617a6bdfc91d3802c5c35c338e8350e71e818cb54968851cc0538->enter($__internal_0809f4e2a8b617a6bdfc91d3802c5c35c338e8350e71e818cb54968851cc0538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<style>
.category {
    padding-top:30px;
    height:250px;
    margin-top:20px;
}
</style>
";
        
        $__internal_0809f4e2a8b617a6bdfc91d3802c5c35c338e8350e71e818cb54968851cc0538->leave($__internal_0809f4e2a8b617a6bdfc91d3802c5c35c338e8350e71e818cb54968851cc0538_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_656f432967462b82c4cbc9621274f803dc4ed0f909a7f71d9c1e38197e6afc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656f432967462b82c4cbc9621274f803dc4ed0f909a7f71d9c1e38197e6afc97->enter($__internal_656f432967462b82c4cbc9621274f803dc4ed0f909a7f71d9c1e38197e6afc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <h1 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.forumlist"), "html", null, true);
        echo "</h1>
  <div class=\"col-md-12\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("CanReadCategory", $context["category"])) {
                // line 20
                echo "      <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</h2>
      <hr />
      <div class=\"row forum-category-bloc\">
          ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "forums", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                    // line 24
                    echo "            <div class=\"col-xs-12 col-sm-6 col-md-4\">
              <div class=\"category thumbnail text-center forum-box color-dark\">
                <h3><a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_topic", array("slug" => $this->getAttribute($context["forum"], "slug", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "name", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "name", array()), "html", null, true);
                    echo "</a></h3>
                <p>";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "description", array()), "html", null, true);
                    echo "</p>
                <hr />
                <div class=\"text-center\">
                ";
                    // line 30
                    $context["lastTopic"] = $this->env->getExtension('Discutea\DForumBundle\Twig\DForumExtension')->dfLastTopicInForum($context["forum"]);
                    // line 31
                    echo "                ";
                    if ( !(null === (isset($context["lastTopic"]) ? $context["lastTopic"] : $this->getContext($context, "lastTopic")))) {
                        // line 32
                        echo "                    ";
                        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["lastTopic"]) ? $context["lastTopic"] : $this->getContext($context, "lastTopic")), "posts", array()), "last", array()), "poster", array()))) {
                            // line 33
                            echo "                      ";
                            $context["username"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["lastTopic"]) ? $context["lastTopic"] : $this->getContext($context, "lastTopic")), "posts", array()), "last", array()), "poster", array()), "username", array());
                            // line 34
                            echo "                    ";
                        } else {
                            // line 35
                            echo "                      ";
                            $context["username"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.deleted.user");
                            // line 36
                            echo "                    ";
                        }
                        // line 37
                        echo "                    <a class=\"lastComment\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Discutea\DForumBundle\Twig\DForumExtension')->dfLastPostPages($this->getAttribute($this->getAttribute((isset($context["lastTopic"]) ? $context["lastTopic"] : $this->getContext($context, "lastTopic")), "posts", array()), "last", array())), "html", null, true);
                        echo "\">
                      <p>
                        ";
                        // line 39
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.lastpostby"), "html", null, true);
                        echo " <strong>";
                        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
                        echo "</strong>
                        <br />";
                        // line 40
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["lastTopic"]) ? $context["lastTopic"] : $this->getContext($context, "lastTopic")), "posts", array()), "last", array()), "date", array()), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                      </p>
                    </a>
                ";
                    } else {
                        // line 44
                        echo "                    <p>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.null"), "html", null, true);
                        echo "</p>
                ";
                    }
                    // line 46
                    echo "                </div>
              </div>
            </div>
          ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 50
                    echo "            <p class=\"text-center\"><a class=\"btn btn-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_create_forum", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.category.addforum"), "html", null, true);
                    echo "</a></p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "      </div>  
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 54
            echo "      <p class=\"text-center\"><a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_forum_create_category");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.category.createnew"), "html", null, true);
            echo " </a></p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  </div>
";
        
        $__internal_656f432967462b82c4cbc9621274f803dc4ed0f909a7f71d9c1e38197e6afc97->leave($__internal_656f432967462b82c4cbc9621274f803dc4ed0f909a7f71d9c1e38197e6afc97_prof);

    }

    public function getTemplateName()
    {
        return "@OrionForum/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 56,  187 => 54,  180 => 52,  169 => 50,  161 => 46,  155 => 44,  148 => 40,  142 => 39,  136 => 37,  133 => 36,  130 => 35,  127 => 34,  124 => 33,  121 => 32,  118 => 31,  116 => 30,  110 => 27,  102 => 26,  98 => 24,  93 => 23,  86 => 20,  80 => 19,  74 => 17,  68 => 16,  54 => 7,  48 => 6,  36 => 4,  11 => 1,);
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


{% block title %}Index Forums{% endblock %}

{% block stylesheets %}
<style>
.category {
    padding-top:30px;
    height:250px;
    margin-top:20px;
}
</style>
{% endblock %}

{% block body %}
  <h1 class=\"text-center\">{{ 'orion.forum.forumlist'|trans }}</h1>
  <div class=\"col-md-12\">
    {% for category in categories if is_granted('CanReadCategory', category) %}
      <h2>{{ category.name }}</h2>
      <hr />
      <div class=\"row forum-category-bloc\">
          {% for forum in category.forums %}
            <div class=\"col-xs-12 col-sm-6 col-md-4\">
              <div class=\"category thumbnail text-center forum-box color-dark\">
                <h3><a href=\"{{ path('orion_forum_topic', {'slug': forum.slug}) }}\" title=\"{{ forum.name }}\">{{ forum.name }}</a></h3>
                <p>{{ forum.description }}</p>
                <hr />
                <div class=\"text-center\">
                {% set lastTopic = dfLastTopicInForum(forum) %}
                {% if lastTopic is not null %}
                    {% if lastTopic.posts.last.poster is not null %}
                      {% set username = lastTopic.posts.last.poster.username %}
                    {% else %}
                      {% set username = 'orion.forum.deleted.user'|trans %}
                    {% endif %}
                    <a class=\"lastComment\" href=\"{{ dfLastPostPages(lastTopic.posts.last) }}\">
                      <p>
                        {{ 'orion.forum.lastpostby'|trans }} <strong>{{ username }}</strong>
                        <br />{{ lastTopic.posts.last.date|date(\"Y-m-d H:i:s\") }}
                      </p>
                    </a>
                {% else %}
                    <p>{{ 'orion.forum.null'|trans }}</p>
                {% endif %}
                </div>
              </div>
            </div>
          {% else %}
            <p class=\"text-center\"><a class=\"btn btn-primary\" href=\"{{ path('orion_forum_create_forum', {'id': category.id}) }}\">{{ 'orion.forum.category.addforum'|trans }}</a></p>
          {% endfor %}
      </div>  
    {% else %}
      <p class=\"text-center\"><a class=\"btn btn-primary\" href=\"{{ path('orion_forum_create_category') }}\"> {{ 'orion.forum.category.createnew'|trans }} </a></p>
    {% endfor %}
  </div>
{% endblock %}
", "@OrionForum/index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle\\Resources\\views\\index.html.twig");
    }
}
