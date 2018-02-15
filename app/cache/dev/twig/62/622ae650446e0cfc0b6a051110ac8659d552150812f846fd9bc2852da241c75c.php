<?php

/* OrionEventBundle:User_Reservation:user_billet_par_event_reserve_index.html.twig */
class __TwigTemplate_f3c2182eda06670399daf0e546d4980b6d2c59257cd12024fa5e4a52b6ca4f5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_front_user.html.twig", "OrionEventBundle:User_Reservation:user_billet_par_event_reserve_index.html.twig", 1);
        $this->blocks = array(
            'module' => array($this, 'block_module'),
            'operation' => array($this, 'block_operation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionEventBundle::layout_front_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_525e5817aa98aaec6c688b23e17a946c60ce5d8570712a36430d49c995fe811f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525e5817aa98aaec6c688b23e17a946c60ce5d8570712a36430d49c995fe811f->enter($__internal_525e5817aa98aaec6c688b23e17a946c60ce5d8570712a36430d49c995fe811f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Reservation:user_billet_par_event_reserve_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_525e5817aa98aaec6c688b23e17a946c60ce5d8570712a36430d49c995fe811f->leave($__internal_525e5817aa98aaec6c688b23e17a946c60ce5d8570712a36430d49c995fe811f_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_33654233486dc3a475a4bada0ab378af9c150219c90f26b28afa2307c47619c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33654233486dc3a475a4bada0ab378af9c150219c90f26b28afa2307c47619c6->enter($__internal_33654233486dc3a475a4bada0ab378af9c150219c90f26b28afa2307c47619c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_33654233486dc3a475a4bada0ab378af9c150219c90f26b28afa2307c47619c6->leave($__internal_33654233486dc3a475a4bada0ab378af9c150219c90f26b28afa2307c47619c6_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_ddfc3a5c4937e7af0263d771b90bc3de05f4c3051f2084c4d305c90a83c32db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfc3a5c4937e7af0263d771b90bc3de05f4c3051f2084c4d305c90a83c32db6->enter($__internal_ddfc3a5c4937e7af0263d771b90bc3de05f4c3051f2084c4d305c90a83c32db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_ddfc3a5c4937e7af0263d771b90bc3de05f4c3051f2084c4d305c90a83c32db6->leave($__internal_ddfc3a5c4937e7af0263d771b90bc3de05f4c3051f2084c4d305c90a83c32db6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_78f890078d0aeae38b0e6a301f9e5691a6d9f1580d72b4fdcedbaa19402d6296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f890078d0aeae38b0e6a301f9e5691a6d9f1580d72b4fdcedbaa19402d6296->enter($__internal_78f890078d0aeae38b0e6a301f9e5691a6d9f1580d72b4fdcedbaa19402d6296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "       
        <table class=\"table table-striped\">
            <thead>
                <tr class=\"info\">
                    <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
            echo "</th>
                    <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
            echo "</th>                   
                    <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price"), "html", null, true);
            echo "</th>                    
                    <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available Tickets"), "html", null, true);
            echo "</th>                  
              
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 29
                echo "                ";
                $context["foo"] = "bar";
                // line 30
                echo "                    <tr>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "evenement", array()), "html", null, true);
                echo "</td>

                        <td><a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
                echo "</a></td>
                        
            <td>
            ";
                // line 36
                if (($this->getAttribute($context["entity"], "type", array()) == 1)) {
                    echo "<p class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
                    echo " <b>€</b></p>                                   
            ";
                } else {
                    // line 37
                    echo "<p class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free"), "html", null, true);
                    echo "</p>                                    
            ";
                }
                // line 38
                echo "</td>
                       
                        <td cl>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "attente", array()), "html", null, true);
                echo "</td>
                     
                       
                        <td>
                            <ul style=\"list-style-type:none\">
                                <li>
                                    <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_reserve", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                        <button type=\"button\" class=\"btn btn-default fa fa-shopping-cart\"> Reserver</button>
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
            // line 56
            echo "            </tbody>
        </table>

        
    ";
        }
        
        $__internal_78f890078d0aeae38b0e6a301f9e5691a6d9f1580d72b4fdcedbaa19402d6296->leave($__internal_78f890078d0aeae38b0e6a301f9e5691a6d9f1580d72b4fdcedbaa19402d6296_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Reservation:user_billet_par_event_reserve_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 56,  164 => 46,  155 => 40,  151 => 38,  145 => 37,  138 => 36,  130 => 33,  125 => 31,  122 => 30,  119 => 29,  115 => 28,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  88 => 15,  82 => 13,  80 => 12,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OrionEventBundle::layout_front_user.html.twig' %}

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
                    <th>{{ 'Event'|trans }}</th>
                    <th>{{ 'Wording'|trans }}</th>                   
                    <th>{{ 'Price'|trans }}</th>                    
                    <th>{{ 'Available Tickets'|trans }}</th>                  
              
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {% for entity in entities %}
                {% set foo = 'bar' %}
                    <tr>
                        <td>{{ entity.evenement }}</td>

                        <td><a href=\"{{ path('user_billet_show', { 'id': entity.id }) }}\">{{ entity.libelle }}</a></td>
                        
            <td>
            {% if entity.type == 1 %}<p class=\"text-danger\">{{ entity.prix }} <b>€</b></p>                                   
            {% else %}<p class=\"text-success\">{{ 'Free'|trans }}</p>                                    
            {% endif %}</td>
                       
                        <td cl>{{ entity.attente }}</td>
                     
                       
                        <td>
                            <ul style=\"list-style-type:none\">
                                <li>
                                    <a href=\"{{ path('user_billet_reserve', { 'id': entity.id }) }}\">
                                        <button type=\"button\" class=\"btn btn-default fa fa-shopping-cart\"> Reserver</button>
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
", "OrionEventBundle:User_Reservation:user_billet_par_event_reserve_index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Reservation/user_billet_par_event_reserve_index.html.twig");
    }
}
