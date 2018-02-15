<?php

/* OrionEventBundle:User_Billet:user_billet_par_event_index.html.twig */
class __TwigTemplate_c0be3361d0edbeb3341fe7254373b02500d814fe7707e759eed23bcfe8f70f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "OrionEventBundle:User_Billet:user_billet_par_event_index.html.twig", 1);
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
        $__internal_28e4193885434f3208cf4a3b3eb9ace4c078cd68333b89a22c8a54b43f4da4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e4193885434f3208cf4a3b3eb9ace4c078cd68333b89a22c8a54b43f4da4c7->enter($__internal_28e4193885434f3208cf4a3b3eb9ace4c078cd68333b89a22c8a54b43f4da4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Billet:user_billet_par_event_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28e4193885434f3208cf4a3b3eb9ace4c078cd68333b89a22c8a54b43f4da4c7->leave($__internal_28e4193885434f3208cf4a3b3eb9ace4c078cd68333b89a22c8a54b43f4da4c7_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_f68d366d47dc2a3456d49ae4ff6e2f65833ec5e90cfd7c52e9c6ec251324d64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68d366d47dc2a3456d49ae4ff6e2f65833ec5e90cfd7c52e9c6ec251324d64e->enter($__internal_f68d366d47dc2a3456d49ae4ff6e2f65833ec5e90cfd7c52e9c6ec251324d64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_f68d366d47dc2a3456d49ae4ff6e2f65833ec5e90cfd7c52e9c6ec251324d64e->leave($__internal_f68d366d47dc2a3456d49ae4ff6e2f65833ec5e90cfd7c52e9c6ec251324d64e_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_e5dd2d513dd5f66595e397f802c755809ed8af774b51408aaf11d77b207621b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dd2d513dd5f66595e397f802c755809ed8af774b51408aaf11d77b207621b7->enter($__internal_e5dd2d513dd5f66595e397f802c755809ed8af774b51408aaf11d77b207621b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_e5dd2d513dd5f66595e397f802c755809ed8af774b51408aaf11d77b207621b7->leave($__internal_e5dd2d513dd5f66595e397f802c755809ed8af774b51408aaf11d77b207621b7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ab87f83f6bc3d2463386f3a3dfd31ac928bb67dc8a7d5f71f94152f3c1f673b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab87f83f6bc3d2463386f3a3dfd31ac928bb67dc8a7d5f71f94152f3c1f673b->enter($__internal_0ab87f83f6bc3d2463386f3a3dfd31ac928bb67dc8a7d5f71f94152f3c1f673b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h1 class=\"text-center text-primary\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets List"), "html", null, true);
        echo "</b></h1>

    ";
        // line 12
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 13
            echo "        <div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Tickets Found"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 15
            echo "        <table class=\"table table-striped\">
            <thead>
                <tr class=\"info\">
                   
                    <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
            echo "</th>
                   
                    <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price"), "html", null, true);
            echo "</th>
                    <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number"), "html", null, true);
            echo "</th>
                    <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Waiting List"), "html", null, true);
            echo "</th>
                   
                    <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
            echo "</th>
                    <th>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Action"), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 30
            $context["foo"] =  -3;
            // line 31
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 32
                echo "                ";
                if (((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) != 1)) {
                    // line 33
                    echo "        ";
                    $context["evenement"] = $this->getAttribute($this->getAttribute($context["entity"], "evenement", array()), "titre", array());
                    echo "   
        ";
                    // line 34
                    $context["foo"] = 1;
                    // line 35
                    echo "<h4 class=\"text-center\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
                    echo " : <b class=\"text-blue\"> ";
                    echo twig_escape_filter($this->env, (isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "html", null, true);
                    echo "</b></h4>
        ";
                }
                // line 37
                echo "                    <tr>
                        

                        <td><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
                echo "</a></td>

            <td>
            ";
                // line 43
                if (($this->getAttribute($context["entity"], "type", array()) == 1)) {
                    echo "<p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
                    echo " <b>€</b></p>                                   
            ";
                } else {
                    // line 44
                    echo "<p class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free"), "html", null, true);
                    echo "</p>                                    
            ";
                }
                // line 45
                echo "</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "attente", array()), "html", null, true);
                echo "</td>
                     
                        <td>";
                // line 49
                if ($this->getAttribute($context["entity"], "dateCreation", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "d/m/Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "H:i"), "html", null, true);
                }
                echo "</td>
                        <td>
                            <ul style=\"list-style-type:none\">
                                <li>
                                    <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                        <button type=\"button\" class=\"btn-xs btn-default btn-group fa fa-desktop\"> ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display"), "html", null, true);
                echo "</button>
                                    </a>  
                                </li>
                                <li>
                                    <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                        <button type=\"button\" class=\"btn-xs btn-default btn-group fa fa-wrench\"> ";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "</button>
                                    </a>
                                </li>
                                
                            </ul>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            </tbody>
        </table>

        
    ";
        }
        
        $__internal_0ab87f83f6bc3d2463386f3a3dfd31ac928bb67dc8a7d5f71f94152f3c1f673b->leave($__internal_0ab87f83f6bc3d2463386f3a3dfd31ac928bb67dc8a7d5f71f94152f3c1f673b_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Billet:user_billet_par_event_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 67,  214 => 59,  210 => 58,  203 => 54,  199 => 53,  186 => 49,  181 => 47,  177 => 46,  174 => 45,  168 => 44,  161 => 43,  153 => 40,  148 => 37,  140 => 35,  138 => 34,  133 => 33,  130 => 32,  125 => 31,  123 => 30,  116 => 26,  112 => 25,  107 => 23,  103 => 22,  99 => 21,  94 => 19,  88 => 15,  82 => 13,  80 => 12,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    <i class=\"fa fa-list\"></i> {{ 'List'|trans }}
{% endblock operation %}
{% block body -%}   
    <h1 class=\"text-center text-primary\"><b>{{ 'Tickets List'|trans }}</b></h1>

    {% if entities is empty %}
        <div class=\"text-danger text-center\">{{ 'No Tickets Found'|trans }}</div>
    {% else %}
        <table class=\"table table-striped\">
            <thead>
                <tr class=\"info\">
                   
                    <th>{{ 'Wording'|trans }}</th>
                   
                    <th>{{ 'Price'|trans }}</th>
                    <th>{{ 'Number'|trans }}</th>
                    <th>{{ 'Waiting List'|trans }}</th>
                   
                    <th>{{ 'Creation date'|trans }}</th>
                    <th>{{ 'Action'|trans }}</th>
                </tr>
            </thead>
            <tbody>
                {% set foo = -3 %}
                {% for entity in entities %}
                {% if foo != 1%}
        {% set evenement = entity.evenement.titre%}   
        {% set  foo= 1%}
<h4 class=\"text-center\">{{'Event'|trans}} : <b class=\"text-blue\"> {{evenement}}</b></h4>
        {%endif%}
                    <tr>
                        

                        <td><a href=\"{{ path('user_billet_show', { 'id': entity.id }) }}\">{{ entity.libelle }}</a></td>

            <td>
            {% if entity.type == 1 %}<p class=\"text-danger\">{{ entity.prix }} <b>€</b></p>                                   
            {% else %}<p class=\"text-success\">{{ 'Free'|trans }}</p>                                    
            {% endif %}</td>
                        <td>{{ entity.nombre }}</td>
                        <td>{{ entity.attente }}</td>
                     
                        <td>{% if entity.dateCreation %}{{ entity.dateCreation|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateCreation|date('H:i') }}{% endif %}</td>
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
                {% endfor %}
            </tbody>
        </table>

        
    {% endif %}
{% endblock %}
", "OrionEventBundle:User_Billet:user_billet_par_event_index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Billet/user_billet_par_event_index.html.twig");
    }
}
