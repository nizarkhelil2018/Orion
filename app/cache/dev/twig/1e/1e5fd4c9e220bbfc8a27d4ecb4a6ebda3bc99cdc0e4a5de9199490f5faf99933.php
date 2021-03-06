<?php

/* @DForum/index.html.twig */
class __TwigTemplate_ad9b22a8feb413c70ebc47d8b39d053d0f39a3c8d6dfd468b7f039bf6b52d9af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "@DForum/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8a96d86053596347d5f26d23917e5711b35c764d6ed22c05215bfd7380fe2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a96d86053596347d5f26d23917e5711b35c764d6ed22c05215bfd7380fe2e2->enter($__internal_c8a96d86053596347d5f26d23917e5711b35c764d6ed22c05215bfd7380fe2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DForum/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8a96d86053596347d5f26d23917e5711b35c764d6ed22c05215bfd7380fe2e2->leave($__internal_c8a96d86053596347d5f26d23917e5711b35c764d6ed22c05215bfd7380fe2e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6159d954ac133173e0c0da7cafda870f3f248a42ec04b8638f6ebd2accd48c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6159d954ac133173e0c0da7cafda870f3f248a42ec04b8638f6ebd2accd48c65->enter($__internal_6159d954ac133173e0c0da7cafda870f3f248a42ec04b8638f6ebd2accd48c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Index Forums";
        
        $__internal_6159d954ac133173e0c0da7cafda870f3f248a42ec04b8638f6ebd2accd48c65->leave($__internal_6159d954ac133173e0c0da7cafda870f3f248a42ec04b8638f6ebd2accd48c65_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b3f3a96abbf36a63c3dbca483cfef6abc4230ab84b1c3bec428d537f05cc026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3f3a96abbf36a63c3dbca483cfef6abc4230ab84b1c3bec428d537f05cc026->enter($__internal_3b3f3a96abbf36a63c3dbca483cfef6abc4230ab84b1c3bec428d537f05cc026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<style>
.category {
    padding-top:30px;
    height:250px;
    margin-top:20px;
}
</style>
";
        
        $__internal_3b3f3a96abbf36a63c3dbca483cfef6abc4230ab84b1c3bec428d537f05cc026->leave($__internal_3b3f3a96abbf36a63c3dbca483cfef6abc4230ab84b1c3bec428d537f05cc026_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aa0991994e7e54c56246aadb9a97454613881ca8116427b77ff8c73a2424f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa0991994e7e54c56246aadb9a97454613881ca8116427b77ff8c73a2424f0d->enter($__internal_1aa0991994e7e54c56246aadb9a97454613881ca8116427b77ff8c73a2424f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "  <h1 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.forumlist"), "html", null, true);
        echo "</h1>
  <div class=\"col-md-12\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("CanReadCategory", $context["category"])) {
                // line 19
                echo "      <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</h2>
      <hr />
      <div class=\"row forum-category-bloc\">
          ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "forums", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                    // line 23
                    echo "            <div class=\"col-xs-12 col-sm-6 col-md-4\">
              <div class=\"category thumbnail text-center forum-box color-dark\">
                <h3><a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_topic", array("slug" => $this->getAttribute($context["forum"], "slug", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "name", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "name", array()), "html", null, true);
                    echo "</a></h3>
                <p>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "description", array()), "html", null, true);
                    echo "</p>
                <hr />
                <div class=\"text-center\">
                ";
                    // line 29
                    $context["lastTopic"] = $this->env->getExtension('Discutea\DForumBundle\Twig\DForumExtension')->dfLastTopicInForum($context["forum"]);
                    // line 30
                    echo "                ";
                    if ( !(null === (isset($context["lastTopic"]) ? $context["lastTopic"] : $this->getContext($context, "lastTopic")))) {
                        // line 31
                        echo "                    ";
                        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["lastTopic"]) ? $context["lastTopic"] : $this->getContext($context, "lastTopic")), "posts", array()), "last", array()), "poster", array()))) {
                            // line 32
                            echo "                      ";
                            $context["username"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["lastTopic"]) ? $context["lastTopic"] : $this->getContext($context, "lastTopic")), "posts", array()), "last", array()), "poster", array()), "username", array());
                            // line 33
                            echo "                    ";
                        } else {
                            // line 34
                            echo "                      ";
                            $context["username"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.deleted.user");
                            // line 35
                            echo "                    ";
                        }
                        // line 36
                        echo "                    <a class=\"lastComment\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Discutea\DForumBundle\Twig\DForumExtension')->dfLastPostPages($this->getAttribute($this->getAttribute((isset($context["lastTopic"]) ? $context["lastTopic"] : $this->getContext($context, "lastTopic")), "posts", array()), "last", array())), "html", null, true);
                        echo "\">
                      <p>
                        ";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.lastpostby"), "html", null, true);
                        echo " <strong>";
                        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
                        echo "</strong>
                        <br />";
                        // line 39
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["lastTopic"]) ? $context["lastTopic"] : $this->getContext($context, "lastTopic")), "posts", array()), "last", array()), "date", array()), "Y-m-d H:i:s"), "html", null, true);
                        echo "
                      </p>
                    </a>
                ";
                    } else {
                        // line 43
                        echo "                    <p>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.null"), "html", null, true);
                        echo "</p>
                ";
                    }
                    // line 45
                    echo "                </div>
              </div>
            </div>
          ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 49
                    echo "            <p class=\"text-center\"><a class=\"btn btn-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_create_forum", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.category.addforum"), "html", null, true);
                    echo "</a></p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "      </div>  
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 53
            echo "      <p class=\"text-center\"><a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_create_category");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.category.createnew"), "html", null, true);
            echo " </a></p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  </div>
";
        
        $__internal_1aa0991994e7e54c56246aadb9a97454613881ca8116427b77ff8c73a2424f0d->leave($__internal_1aa0991994e7e54c56246aadb9a97454613881ca8116427b77ff8c73a2424f0d_prof);

    }

    public function getTemplateName()
    {
        return "@DForum/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 55,  187 => 53,  180 => 51,  169 => 49,  161 => 45,  155 => 43,  148 => 39,  142 => 38,  136 => 36,  133 => 35,  130 => 34,  127 => 33,  124 => 32,  121 => 31,  118 => 30,  116 => 29,  110 => 26,  102 => 25,  98 => 23,  93 => 22,  86 => 19,  80 => 18,  74 => 16,  68 => 15,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
  <h1 class=\"text-center\">{{ 'discutea.forum.forumlist'|trans }}</h1>
  <div class=\"col-md-12\">
    {% for category in categories if is_granted('CanReadCategory', category) %}
      <h2>{{ category.name }}</h2>
      <hr />
      <div class=\"row forum-category-bloc\">
          {% for forum in category.forums %}
            <div class=\"col-xs-12 col-sm-6 col-md-4\">
              <div class=\"category thumbnail text-center forum-box color-dark\">
                <h3><a href=\"{{ path('discutea_forum_topic', {'slug': forum.slug}) }}\" title=\"{{ forum.name }}\">{{ forum.name }}</a></h3>
                <p>{{ forum.description }}</p>
                <hr />
                <div class=\"text-center\">
                {% set lastTopic = dfLastTopicInForum(forum) %}
                {% if lastTopic is not null %}
                    {% if lastTopic.posts.last.poster is not null %}
                      {% set username = lastTopic.posts.last.poster.username %}
                    {% else %}
                      {% set username = 'discutea.forum.deleted.user'|trans %}
                    {% endif %}
                    <a class=\"lastComment\" href=\"{{ dfLastPostPages(lastTopic.posts.last) }}\">
                      <p>
                        {{ 'discutea.forum.lastpostby'|trans }} <strong>{{ username }}</strong>
                        <br />{{ lastTopic.posts.last.date|date(\"Y-m-d H:i:s\") }}
                      </p>
                    </a>
                {% else %}
                    <p>{{ 'discutea.forum.null'|trans }}</p>
                {% endif %}
                </div>
              </div>
            </div>
          {% else %}
            <p class=\"text-center\"><a class=\"btn btn-primary\" href=\"{{ path('discutea_forum_create_forum', {'id': category.id}) }}\">{{ 'discutea.forum.category.addforum'|trans }}</a></p>
          {% endfor %}
      </div>  
    {% else %}
      <p class=\"text-center\"><a class=\"btn btn-primary\" href=\"{{ path('discutea_forum_create_category') }}\"> {{ 'discutea.forum.category.createnew'|trans }} </a></p>
    {% endfor %}
  </div>
{% endblock %}
", "@DForum/index.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\index.html.twig");
    }
}
