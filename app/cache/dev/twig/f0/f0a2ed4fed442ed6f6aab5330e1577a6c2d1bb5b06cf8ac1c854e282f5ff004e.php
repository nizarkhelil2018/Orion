<?php

/* OrionEventBundle:User_Billet:user_billet_search.html.twig */
class __TwigTemplate_cb513bd87d2ebbf9a53ae2b9fb50972ff2f38feb2c953758b27092f0e6013926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "OrionEventBundle:User_Billet:user_billet_search.html.twig", 1);
        $this->blocks = array(
            'module' => array($this, 'block_module'),
            'operation' => array($this, 'block_operation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionEventBundle::layout_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6a6756b075205b0db907e142e55686b7e598a2fef993f67894571cf7508db20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a6756b075205b0db907e142e55686b7e598a2fef993f67894571cf7508db20->enter($__internal_b6a6756b075205b0db907e142e55686b7e598a2fef993f67894571cf7508db20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Billet:user_billet_search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6a6756b075205b0db907e142e55686b7e598a2fef993f67894571cf7508db20->leave($__internal_b6a6756b075205b0db907e142e55686b7e598a2fef993f67894571cf7508db20_prof);

    }

    // line 4
    public function block_module($context, array $blocks = array())
    {
        $__internal_b7f81774ce0d7d6f00613b6e05037a359aa2fd2249df59ab0c6137b9ce593293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f81774ce0d7d6f00613b6e05037a359aa2fd2249df59ab0c6137b9ce593293->enter($__internal_b7f81774ce0d7d6f00613b6e05037a359aa2fd2249df59ab0c6137b9ce593293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_b7f81774ce0d7d6f00613b6e05037a359aa2fd2249df59ab0c6137b9ce593293->leave($__internal_b7f81774ce0d7d6f00613b6e05037a359aa2fd2249df59ab0c6137b9ce593293_prof);

    }

    // line 7
    public function block_operation($context, array $blocks = array())
    {
        $__internal_89a419364efcbf08e68f8a4a9c2da670ae07d854caf80897d36e70818db6dc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a419364efcbf08e68f8a4a9c2da670ae07d854caf80897d36e70818db6dc2c->enter($__internal_89a419364efcbf08e68f8a4a9c2da670ae07d854caf80897d36e70818db6dc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 8
        echo "    <i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "
";
        
        $__internal_89a419364efcbf08e68f8a4a9c2da670ae07d854caf80897d36e70818db6dc2c->leave($__internal_89a419364efcbf08e68f8a4a9c2da670ae07d854caf80897d36e70818db6dc2c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ec90c93836b52db3ed326c33d2234fdbc1e6ae713bdd9a6d4df56e5ce87177c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec90c93836b52db3ed326c33d2234fdbc1e6ae713bdd9a6d4df56e5ce87177c->enter($__internal_5ec90c93836b52db3ed326c33d2234fdbc1e6ae713bdd9a6d4df56e5ce87177c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<form method=\"POST\" action=\"\" class=\"text-center\">
        <table>
            <tr>
                <td>
                    <label>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</label>
                    <input type='text' name=\"input_libellet\" />
                </td>
                <td class=\"col-sm-3\">
                    <label>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</label>
                    <ul style=\"list-style-type:none\">
                        <li>
                            <input type=\"checkbox\" name=\"input_type\" value=\"1\"> ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Paying"), "html", null, true);
        echo "
                        </li>
                        <li>
                            <input type=\"checkbox\" name=\"input_type\" value=\"0\" > ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free"), "html", null, true);
        echo "
                        </li>
                </td> 
            </tr>
        </table>
        <input type=\"submit\" class=\"btn btn-success\" name=\"rechercher\" value=\" Rechercher\"/>
    </form>
    </br>

    ";
        // line 35
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 36
            echo "        <div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Tickets Found"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 38
            echo "        <table class=\"table table-striped\">
            <thead>
                <tr class=\"info\">

                    <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
            echo "</th>
                    <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
            echo "</th>
                    <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price"), "html", null, true);
            echo "</th>
                    <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number"), "html", null, true);
            echo "</th>
                    <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Waiting list"), "html", null, true);
            echo "</th>
                    <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
            echo "</th>
                    <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
            echo "</th>
                    <th>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 54
                echo "                ";
                if (($this->getAttribute($this->getAttribute($context["entity"], "evenement", array()), "organisateur", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                    // line 55
                    echo "                    <tr>

                        <td><a href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
                    echo "</a></td>
                        <td>
            ";
                    // line 59
                    if (($this->getAttribute($context["entity"], "type", array()) == 1)) {
                        echo "<p class=\"text-danger\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Paying"), "html", null, true);
                        echo "</p>                                   
            ";
                    } else {
                        // line 60
                        echo "<p class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free"), "html", null, true);
                        echo "</p>                                    
            ";
                    }
                    // line 61
                    echo "</td>
            <td>
            ";
                    // line 63
                    if (($this->getAttribute($context["entity"], "type", array()) == 1)) {
                        echo "<p class=\"text-danger\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
                        echo " <b>€</b></p>                                   
            ";
                    } else {
                        // line 64
                        echo "<p class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free"), "html", null, true);
                        echo "</p>                                    
            ";
                    }
                    // line 65
                    echo "</td>
                        <td>";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "attente", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "evenement", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 69
                    if ($this->getAttribute($context["entity"], "dateCreation", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
                    }
                    echo "</td>
                        <td>
                            <ul style=\"list-style-type:none\">
                                <li>
                                    <a href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                        <button type=\"button\" class=\"btn-xs btn-default btn-group fa fa-desktop\"> ";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display"), "html", null, true);
                    echo "</button>
                                    </a>  
                                </li>
                                <li>
                                    <a href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                        <button type=\"button\" class=\"btn-xs btn-default btn-group fa fa-wrench\"> ";
                    // line 79
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</button>
                                    </a>                                    
                                </li>
                                
                            </ul>
                        </td>
                    </tr>
                    ";
                }
                // line 87
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "            </tbody>
        </table>

        <table>
            
    </table>
";
        }
        
        $__internal_5ec90c93836b52db3ed326c33d2234fdbc1e6ae713bdd9a6d4df56e5ce87177c->leave($__internal_5ec90c93836b52db3ed326c33d2234fdbc1e6ae713bdd9a6d4df56e5ce87177c_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Billet:user_billet_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 88,  258 => 87,  247 => 79,  243 => 78,  236 => 74,  232 => 73,  223 => 69,  219 => 68,  215 => 67,  211 => 66,  208 => 65,  202 => 64,  195 => 63,  191 => 61,  185 => 60,  178 => 59,  171 => 57,  167 => 55,  164 => 54,  160 => 53,  153 => 49,  149 => 48,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  129 => 43,  125 => 42,  119 => 38,  113 => 36,  111 => 35,  99 => 26,  93 => 23,  87 => 20,  80 => 16,  74 => 12,  68 => 10,  58 => 8,  52 => 7,  42 => 5,  36 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OrionEventBundle::layout_user.html.twig' %}


{% block module %}
    {{ 'Tickets Management'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-search\"></i> {{ 'Search'|trans }}
{% endblock operation %}
{% block body -%}

    <form method=\"POST\" action=\"\" class=\"text-center\">
        <table>
            <tr>
                <td>
                    <label>{{ 'Wording'|trans }}</label>
                    <input type='text' name=\"input_libellet\" />
                </td>
                <td class=\"col-sm-3\">
                    <label>{{ 'Type'|trans }}</label>
                    <ul style=\"list-style-type:none\">
                        <li>
                            <input type=\"checkbox\" name=\"input_type\" value=\"1\"> {{ 'Paying'|trans }}
                        </li>
                        <li>
                            <input type=\"checkbox\" name=\"input_type\" value=\"0\" > {{ 'Free'|trans }}
                        </li>
                </td> 
            </tr>
        </table>
        <input type=\"submit\" class=\"btn btn-success\" name=\"rechercher\" value=\" Rechercher\"/>
    </form>
    </br>

    {% if entities is empty %}
        <div class=\"text-danger text-center\">{{ 'No Tickets Found'|trans }}</div>
    {% else %}
        <table class=\"table table-striped\">
            <thead>
                <tr class=\"info\">

                    <th>{{ 'Wording'|trans }}</th>
                    <th>{{ 'Type'|trans }}</th>
                    <th>{{ 'Price'|trans }}</th>
                    <th>{{ 'Number'|trans }}</th>
                    <th>{{ 'Waiting list'|trans }}</th>
                    <th>{{ 'Event'|trans }}</th>
                    <th>{{ 'Creation date'|trans }}</th>
                    <th>{{ 'Action'|trans }}</th>
                </tr>
            </thead>
            <tbody>
                {% for entity in entities %}
                {% if entity.evenement.organisateur == app.user%}
                    <tr>

                        <td><a href=\"{{ path('user_billet_show', { 'id': entity.id }) }}\">{{ entity.libelle }}</a></td>
                        <td>
            {% if entity.type == 1 %}<p class=\"text-danger\">{{ 'Paying'|trans }}</p>                                   
            {% else %}<p class=\"text-success\">{{ 'Free'|trans }}</p>                                    
            {% endif %}</td>
            <td>
            {% if entity.type == 1 %}<p class=\"text-danger\">{{ entity.prix }} <b>€</b></p>                                   
            {% else %}<p class=\"text-success\">{{ 'Free'|trans }}</p>                                    
            {% endif %}</td>
                        <td>{{ entity.nombre }}</td>
                        <td>{{ entity.attente }}</td>
                        <td>{{ entity.evenement }}</td>
                        <td>{% if entity.dateCreation %}{{ entity.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>
                        <td>
                            <ul style=\"list-style-type:none\">
                                <li>
                                    <a href=\"{{ path('user_billet_show', { 'id': entity.id }) }}\">
                                        <button type=\"button\" class=\"btn-xs btn-default btn-group fa fa-desktop\"> {{ 'Display'|trans }}</button>
                                    </a>  
                                </li>
                                <li>
                                    <a href=\"{{ path('user_billet_edit', { 'id': entity.id }) }}\">
                                        <button type=\"button\" class=\"btn-xs btn-default btn-group fa fa-wrench\"> {{ 'Edit'|trans }}</button>
                                    </a>                                    
                                </li>
                                
                            </ul>
                        </td>
                    </tr>
                    {%endif%}
                {% endfor %}
            </tbody>
        </table>

        <table>
            
    </table>
{% endif %}
{% endblock %}
", "OrionEventBundle:User_Billet:user_billet_search.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Billet/user_billet_search.html.twig");
    }
}
