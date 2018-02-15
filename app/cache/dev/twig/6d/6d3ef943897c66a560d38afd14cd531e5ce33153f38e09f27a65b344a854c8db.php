<?php

/* @DForum/Admin/index.admin.html.twig */
class __TwigTemplate_ab1931ca5fa6134093f93ee4473aa7c67fa78660134a1af79b8bed99e369c97a extends Twig_Template
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
        $__internal_0b6b7063c0c52af11632eb8aef53ba70f1260e6a5d14e4a1e165517e46c52d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6b7063c0c52af11632eb8aef53ba70f1260e6a5d14e4a1e165517e46c52d13->enter($__internal_0b6b7063c0c52af11632eb8aef53ba70f1260e6a5d14e4a1e165517e46c52d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DForum/Admin/index.admin.html.twig"));

        // line 2
        echo "<div class=\"row\">        
  <div class=\"col-xs-12\">
    <div class=\"widget-box\">
      <div class=\"widget-title\">
        <span class=\"icon\"><i class=\"fa fa-file\"></i></span><h5>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.category.manage"), "html", null, true);
        echo "</h5>
        <span title=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.categories"), "html", null, true);
        echo "\" class=\"label label-danger tip-left\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))), "html", null, true);
        echo "</span>
        <span title=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["forums"]) ? $context["forums"] : $this->getContext($context, "forums"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.forums"), "html", null, true);
        echo "\" class=\"label label-warning tip-left\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["forums"]) ? $context["forums"] : $this->getContext($context, "forums"))), "html", null, true);
        echo "</span>      
      </div>
      <div class=\"widget-content nopadding\">
        <ul class=\"recent-posts\">
          <li class=\"viewall\">
            <a class=\"tip-top\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_create_category");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.category.createnew"), "html", null, true);
        echo " </a>
          </li>
          ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "          <li>
            <h4>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo ":</h4>
            <div>
              <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_create_forum", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.category.addforum"), "html", null, true);
            echo "</a>
              <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_edit_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-xs\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.edit"), "html", null, true);
            echo "</a>
              <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_remove_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.remove"), "html", null, true);
            echo "</a>
            </div>
            <br />
            <span class=\"user-info\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.category.position"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "position", array()), "html", null, true);
            echo "</span>
            <span class=\"user-info\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.category.countforum"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["category"], "forums", array())), "html", null, true);
            echo "</span>
            ";
            // line 26
            if ( !(null === $this->getAttribute($context["category"], "readAuthorisedRoles", array()))) {
                // line 27
                echo "              <span class=\"user-info\">(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "readAuthorisedRoles", array()), "html", null, true);
                echo ")</span>
            ";
            }
            // line 29
            echo "            <div class=\"clearfix\"></div>
            <br />
            <div class=\"forums\">
              <h5>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.forum.incat"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</h5>
              <br />
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.title"), "html", null, true);
            echo "</th>
                    <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.description"), "html", null, true);
            echo "</th>
                    <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.topics"), "html", null, true);
            echo "</th>
                    <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.position"), "html", null, true);
            echo "</th>
                    <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.action"), "html", null, true);
            echo "</th>
                  </tr>
                </thead>
                <tbody>
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "forums", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 46
                echo "                  <tr>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "name", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "description", array()), "html", null, true);
                echo "</td>
                    <td class=\"text-center\">";
                // line 49
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["forum"], "topics", array())), "html", null, true);
                echo "</td>
                    <td class=\"text-center\">0</td>
                    <td class=\"text-center\"><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_edit_forum", array("id" => $this->getAttribute($context["forum"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i></a> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_remove_forum", array("id" => $this->getAttribute($context["forum"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-trash\"></i></a></td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                </tbody>
              </table>
            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
          <li class=\"viewall\">
            <a class=\"tip-top\" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_create_category");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.category.createnew"), "html", null, true);
        echo " </a>
          </li>
        </ul>
      </div>
    </div>
</div>
";
        
        $__internal_0b6b7063c0c52af11632eb8aef53ba70f1260e6a5d14e4a1e165517e46c52d13->leave($__internal_0b6b7063c0c52af11632eb8aef53ba70f1260e6a5d14e4a1e165517e46c52d13_prof);

    }

    public function getTemplateName()
    {
        return "@DForum/Admin/index.admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 61,  190 => 59,  180 => 54,  169 => 51,  164 => 49,  160 => 48,  156 => 47,  153 => 46,  149 => 45,  142 => 41,  138 => 40,  134 => 39,  130 => 38,  126 => 37,  116 => 32,  111 => 29,  105 => 27,  103 => 26,  97 => 25,  91 => 24,  83 => 21,  77 => 20,  71 => 19,  66 => 17,  63 => 16,  59 => 15,  52 => 13,  40 => 8,  32 => 7,  28 => 6,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Forums ans Categories #}
<div class=\"row\">        
  <div class=\"col-xs-12\">
    <div class=\"widget-box\">
      <div class=\"widget-title\">
        <span class=\"icon\"><i class=\"fa fa-file\"></i></span><h5>{{ 'discutea.forum.category.manage'|trans }}</h5>
        <span title=\"{{ categories|length }} {{ 'discutea.forum.categories'|trans }}\" class=\"label label-danger tip-left\">{{ categories|length }}</span>
        <span title=\"{{ forums|length }} {{ 'discutea.forum.forums'|trans }}\" class=\"label label-warning tip-left\">{{ forums|length }}</span>      
      </div>
      <div class=\"widget-content nopadding\">
        <ul class=\"recent-posts\">
          <li class=\"viewall\">
            <a class=\"tip-top\" href=\"{{ path('discutea_forum_create_category') }}\"> {{ 'discutea.forum.category.createnew'|trans }} </a>
          </li>
          {% for category in categories %}
          <li>
            <h4>{{ category.name }}:</h4>
            <div>
              <a href=\"{{ path('discutea_forum_create_forum', {'id': category.id}) }}\" class=\"btn btn-success btn-xs\">{{ 'discutea.forum.category.addforum'|trans }}</a>
              <a href=\"{{ path('discutea_forum_edit_category', {'id': category.id}) }}\" class=\"btn btn-warning btn-xs\">{{ 'discutea.forum.edit'|trans }}</a>
              <a href=\"{{ path('discutea_forum_remove_category', {'id': category.id}) }}\" class=\"btn btn-danger btn-xs\">{{ 'discutea.forum.remove'|trans }}</a>
            </div>
            <br />
            <span class=\"user-info\">{{ 'discutea.forum.category.position'|trans }}: {{ category.position }}</span>
            <span class=\"user-info\">{{ 'discutea.forum.category.countforum'|trans }} {{ category.forums|length }}</span>
            {% if category.readAuthorisedRoles is not null %}
              <span class=\"user-info\">({{  category.readAuthorisedRoles }})</span>
            {% endif %}
            <div class=\"clearfix\"></div>
            <br />
            <div class=\"forums\">
              <h5>{{ 'discutea.forum.forum.incat'|trans }} {{ category.name  }}</h5>
              <br />
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th>{{ 'discutea.forum.title'|trans }}</th>
                    <th>{{ 'discutea.forum.description'|trans }}</th>
                    <th>{{ 'discutea.forum.topics'|trans }}</th>
                    <th>{{ 'discutea.forum.position'|trans }}</th>
                    <th>{{ 'discutea.forum.action'|trans }}</th>
                  </tr>
                </thead>
                <tbody>
                {% for forum in category.forums %}
                  <tr>
                    <td>{{ forum.name }}</td>
                    <td>{{ forum.description }}</td>
                    <td class=\"text-center\">{{ forum.topics|length }}</td>
                    <td class=\"text-center\">0</td>
                    <td class=\"text-center\"><a href=\"{{ path('discutea_forum_edit_forum', {'id': forum.id}) }}\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i></a> <a href=\"{{ path('discutea_forum_remove_forum', {'id': forum.id}) }}\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-trash\"></i></a></td>
                  </tr>
                {% endfor %}
                </tbody>
              </table>
            </div>
          </li>
          {% endfor %}

          <li class=\"viewall\">
            <a class=\"tip-top\" href=\"{{ path('discutea_forum_create_category') }}\"> {{ 'discutea.forum.category.createnew'|trans }} </a>
          </li>
        </ul>
      </div>
    </div>
</div>
", "@DForum/Admin/index.admin.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle\\Resources\\views\\Admin\\index.admin.html.twig");
    }
}
