<?php

/* OrionEventBundle:User_Billet:user_billet_index.html.twig */
class __TwigTemplate_39d4e618e328a1a42c80a5854ad6052db9d74a7644f7132dfdad4785b89f711d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "OrionEventBundle:User_Billet:user_billet_index.html.twig", 1);
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
        $__internal_052471d17b08f49a7905818ea158a087369fd53aacc0421735cc837631be3562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052471d17b08f49a7905818ea158a087369fd53aacc0421735cc837631be3562->enter($__internal_052471d17b08f49a7905818ea158a087369fd53aacc0421735cc837631be3562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Billet:user_billet_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_052471d17b08f49a7905818ea158a087369fd53aacc0421735cc837631be3562->leave($__internal_052471d17b08f49a7905818ea158a087369fd53aacc0421735cc837631be3562_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_29eaa38d94c4ce03147b5ee939b4fa511b5e78f1bb207d0194cf16c1b730b0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29eaa38d94c4ce03147b5ee939b4fa511b5e78f1bb207d0194cf16c1b730b0cc->enter($__internal_29eaa38d94c4ce03147b5ee939b4fa511b5e78f1bb207d0194cf16c1b730b0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_29eaa38d94c4ce03147b5ee939b4fa511b5e78f1bb207d0194cf16c1b730b0cc->leave($__internal_29eaa38d94c4ce03147b5ee939b4fa511b5e78f1bb207d0194cf16c1b730b0cc_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_b0b06a93e9126b5ab3c9932a75d4f2697a16c0800aadb28cba35f81344b83a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b06a93e9126b5ab3c9932a75d4f2697a16c0800aadb28cba35f81344b83a9c->enter($__internal_b0b06a93e9126b5ab3c9932a75d4f2697a16c0800aadb28cba35f81344b83a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_b0b06a93e9126b5ab3c9932a75d4f2697a16c0800aadb28cba35f81344b83a9c->leave($__internal_b0b06a93e9126b5ab3c9932a75d4f2697a16c0800aadb28cba35f81344b83a9c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b563efbe940b74acbf4b1d233a186782cb37f04f3bf9b24fe7f9fb74d94b619d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b563efbe940b74acbf4b1d233a186782cb37f04f3bf9b24fe7f9fb74d94b619d->enter($__internal_b563efbe940b74acbf4b1d233a186782cb37f04f3bf9b24fe7f9fb74d94b619d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h1 class=\"text-center text-primary\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets List"), "html", null, true);
        echo "</b></h1>

    ";
        // line 12
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 13
            echo "<div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Tickets Found"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 15
            echo "<table class=\"table table-striped\">
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
            $context["event"] = "";
            // line 31
            echo "
     ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 33
                echo "        
        ";
                // line 34
                if (($this->getAttribute($this->getAttribute($context["entity"], "evenement", array()), "organisateur", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                    // line 35
                    echo "
         ";
                    // line 36
                    if (($this->getAttribute($context["entity"], "evenement", array()) != (isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")))) {
                        // line 37
                        echo "
        ";
                        // line 38
                        $context["event"] = $this->getAttribute($this->getAttribute($context["entity"], "evenement", array()), "titre", array());
                        // line 39
                        echo "        ";
                        $context["idEvent"] = $this->getAttribute($this->getAttribute($context["entity"], "evenement", array()), "id", array());
                        // line 40
                        echo "        <tr>
            <td colspan=\"8\"><h4 class=\"text-center\">";
                        // line 41
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
                        echo " : <b class=\"text-blue\"> 
                        <a href=\"";
                        // line 42
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_show", array("id" => (isset($context["idEvent"]) ? $context["idEvent"] : $this->getContext($context, "idEvent")))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "html", null, true);
                        echo "</a><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_booking_list", array("id" => $this->getAttribute($this->getAttribute($context["entity"], "evenement", array()), "id", array()))), "html", null, true);
                        echo "\" class=\"fa fa-shopping-cart text-purple\">
                                           ";
                        // line 44
                        echo "                                        </a></b></h4> 
           
                
            </td> 
            
        
        </tr>
        ";
                    }
                    // line 52
                    echo "        <tr>
            
            <td><a href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
                    echo "</a></td>
            
            <td>
            ";
                    // line 57
                    if (($this->getAttribute($context["entity"], "type", array()) == 1)) {
                        echo "<p class=\"text-danger\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
                        echo " <b>€</b></p>                                   
            ";
                    } else {
                        // line 58
                        echo "<p class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free"), "html", null, true);
                        echo "</p>                                    
            ";
                    }
                    // line 59
                    echo "</td>
            <td>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
                    echo "</td>
            <td>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "attente", array()), "html", null, true);
                    echo "</td>

            <td>";
                    // line 63
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
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                            <button type=\"button\" class=\"btn-xs btn-default btn-group fa fa-desktop\"> ";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display"), "html", null, true);
                    echo "</button>
                        </a>  
                    </li>
                    <li>
                        <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                            <button type=\"button\" class=\"btn-xs btn-default btn-group fa fa-wrench\"> ";
                    // line 73
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                    echo "</button>
                        </a>
                    </li>
                    <li>
                     
                    </li>


                </ul>
            </td>
        </tr>

        ";
                }
                // line 86
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "    </tbody>
</table>


    ";
        }
        
        $__internal_b563efbe940b74acbf4b1d233a186782cb37f04f3bf9b24fe7f9fb74d94b619d->leave($__internal_b563efbe940b74acbf4b1d233a186782cb37f04f3bf9b24fe7f9fb74d94b619d_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Billet:user_billet_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 87,  256 => 86,  240 => 73,  236 => 72,  229 => 68,  225 => 67,  212 => 63,  207 => 61,  203 => 60,  200 => 59,  194 => 58,  187 => 57,  179 => 54,  175 => 52,  165 => 44,  157 => 42,  153 => 41,  150 => 40,  147 => 39,  145 => 38,  142 => 37,  140 => 36,  137 => 35,  135 => 34,  132 => 33,  128 => 32,  125 => 31,  123 => 30,  116 => 26,  112 => 25,  107 => 23,  103 => 22,  99 => 21,  94 => 19,  88 => 15,  82 => 13,  80 => 12,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
        {% set event=''%}

     {% for entity in entities %}
        
        {% if entity.evenement.organisateur == app.user%}

         {%if entity.evenement!=event%}

        {% set event= entity.evenement.titre%}
        {%set idEvent= entity.evenement.id%}
        <tr>
            <td colspan=\"8\"><h4 class=\"text-center\">{{'Event'|trans}} : <b class=\"text-blue\"> 
                        <a href=\"{{ path('user_owned_event_show', { 'id': idEvent }) }}\">{{event}}</a><a href=\"{{ path('user_owned_event_booking_list', { 'id': entity.evenement.id })}}\" class=\"fa fa-shopping-cart text-purple\">
                                           {# <button type=\"button\" class=\"btn-xs btn-default btn-block text-left btn-group fa fa-list\"> Liste des réservation</button>#}
                                        </a></b></h4> 
           
                
            </td> 
            
        
        </tr>
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
                    <li>
                     
                    </li>


                </ul>
            </td>
        </tr>

        {%endif%}
                {% endfor %}
    </tbody>
</table>


    {% endif %}
{% endblock %}
", "OrionEventBundle:User_Billet:user_billet_index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Billet/user_billet_index.html.twig");
    }
}
