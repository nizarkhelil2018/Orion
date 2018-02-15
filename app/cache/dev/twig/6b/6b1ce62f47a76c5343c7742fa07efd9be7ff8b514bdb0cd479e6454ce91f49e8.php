<?php

/* OrionEventBundle:User_Reservation:user_myReservation.html.twig */
class __TwigTemplate_201ab043deb92b87d64ea6344496dc72e058375804b0bba335e2db2e2654237d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_front_user.html.twig", "OrionEventBundle:User_Reservation:user_myReservation.html.twig", 1);
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
        $__internal_9f23dcabd02e477e22ce426c778a506558e8426b78b3e539b8b115085126a1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f23dcabd02e477e22ce426c778a506558e8426b78b3e539b8b115085126a1ef->enter($__internal_9f23dcabd02e477e22ce426c778a506558e8426b78b3e539b8b115085126a1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Reservation:user_myReservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f23dcabd02e477e22ce426c778a506558e8426b78b3e539b8b115085126a1ef->leave($__internal_9f23dcabd02e477e22ce426c778a506558e8426b78b3e539b8b115085126a1ef_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_a5d1c2f47f044a5b8673d20a42219926465698993b7bdfd2d8cdcd13f7fc517d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d1c2f47f044a5b8673d20a42219926465698993b7bdfd2d8cdcd13f7fc517d->enter($__internal_a5d1c2f47f044a5b8673d20a42219926465698993b7bdfd2d8cdcd13f7fc517d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reservations Management"), "html", null, true);
        echo "
";
        
        $__internal_a5d1c2f47f044a5b8673d20a42219926465698993b7bdfd2d8cdcd13f7fc517d->leave($__internal_a5d1c2f47f044a5b8673d20a42219926465698993b7bdfd2d8cdcd13f7fc517d_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_c6d27adf32d022f69a39989601abf8bbe7369a3d4ff97eb8e8be4a3a3ae9816b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d27adf32d022f69a39989601abf8bbe7369a3d4ff97eb8e8be4a3a3ae9816b->enter($__internal_c6d27adf32d022f69a39989601abf8bbe7369a3d4ff97eb8e8be4a3a3ae9816b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_c6d27adf32d022f69a39989601abf8bbe7369a3d4ff97eb8e8be4a3a3ae9816b->leave($__internal_c6d27adf32d022f69a39989601abf8bbe7369a3d4ff97eb8e8be4a3a3ae9816b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e2acbba59568f9746ef0c8d473ed6cc7238ca46d12252288aa47ea4935dea5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2acbba59568f9746ef0c8d473ed6cc7238ca46d12252288aa47ea4935dea5c->enter($__internal_2e2acbba59568f9746ef0c8d473ed6cc7238ca46d12252288aa47ea4935dea5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<h1 class=\"text-center text-primary\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reservations List"), "html", null, true);
        echo "</b></h1>

    ";
        // line 13
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 14
            echo "<div class=\"text-danger text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Reservation Found"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 16
            echo "
<table class=\"table table-striped\">
    <thead>
        <tr class=\"info\">
            <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
            echo "</th>
            <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket"), "html", null, true);
            echo "</th>                   


            <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reservation date"), "html", null, true);
            echo "</th>
            <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number"), "html", null, true);
            echo "</th>
            <th> Action </th>
        </tr>
    </thead>
    <tbody>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 31
                echo "        <tr>
            <td><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_event_show", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "billet", array()), "evenement", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "billet", array()), "evenement", array()), "titre", array()), "html", null, true);
                echo "</a></td>
            <td><a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_reserve", array("id" => $this->getAttribute($this->getAttribute($context["entity"], "billet", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "billet", array()), "libelle", array()), "html", null, true);
                echo "</a></td>
            <td>";
                // line 34
                if ($this->getAttribute($context["entity"], "dateReservation", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateReservation", array()), "d/m/Y"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateReservation", array()), "H:i"), "html", null, true);
                }
                echo "</td>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "number", array()), "html", null, true);
                echo "</td>   
            <td>
                <a   onclick=\"callAlert()\"  class=\"fa fa-close fa-2x text-danger\">";
                // line 37
                echo "</a>
                <script>
                    function callAlert() {
                        swal({
                            title: \"Etes vous sur de vouloir annuler la réservation?\",
                            text: \"\",
                            type: \"warning\",
                            showCancelButton: true,
                            confirmButtonColor: \"#DD6B55\",
                            confirmButtonText: \"Oui, Annuler réservation!\",
                            closeOnConfirm: false
                        },
                        function() {
                    //redirect
                            updateUrl();
                            return true;
                        });
                    }
                    function updateUrl() {
                        var url = '";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_reservation_cancell", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "';
                        window.location.href = url;
                    }
                </script>
            </td>    
        </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    </tbody>
</table>


    ";
        }
        
        $__internal_2e2acbba59568f9746ef0c8d473ed6cc7238ca46d12252288aa47ea4935dea5c->leave($__internal_2e2acbba59568f9746ef0c8d473ed6cc7238ca46d12252288aa47ea4935dea5c_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Reservation:user_myReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 63,  171 => 56,  150 => 37,  145 => 35,  135 => 34,  129 => 33,  123 => 32,  120 => 31,  116 => 30,  108 => 25,  104 => 24,  98 => 21,  94 => 20,  88 => 16,  82 => 14,  80 => 13,  74 => 11,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    {{ 'Reservations Management'|trans }}
{% endblock module %}
{% block operation %}
<i class=\"fa fa-list\"></i> {{ 'List'|trans }}
{% endblock operation %}
{% block body -%}   

<h1 class=\"text-center text-primary\"><b>{{ 'Reservations List'|trans }}</b></h1>

    {% if entities is empty %}
<div class=\"text-danger text-center\">{{ 'No Reservation Found'|trans }}</div>
    {% else %}

<table class=\"table table-striped\">
    <thead>
        <tr class=\"info\">
            <th>{{ 'Event'|trans }}</th>
            <th>{{ 'Ticket'|trans }}</th>                   


            <th>{{ 'Reservation date'|trans }}</th>
            <th>{{ 'Number'|trans }}</th>
            <th> Action </th>
        </tr>
    </thead>
    <tbody>
                {% for entity in entities %}
        <tr>
            <td><a href=\"{{path('user_event_show', { 'id': entity.billet.evenement.id })}}\">{{entity.billet.evenement.titre}}</a></td>
            <td><a href=\"{{path('user_billet_reserve', { 'id': entity.billet.id })}}\">{{entity.billet.libelle}}</a></td>
            <td>{% if entity.dateReservation %}{{ entity.dateReservation|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateReservation|date('H:i') }}{% endif %}</td>
            <td>{{entity.number}}</td>   
            <td>
                <a   onclick=\"callAlert()\"  class=\"fa fa-close fa-2x text-danger\">{#{{'Cancel'|trans}}#}</a>
                <script>
                    function callAlert() {
                        swal({
                            title: \"Etes vous sur de vouloir annuler la réservation?\",
                            text: \"\",
                            type: \"warning\",
                            showCancelButton: true,
                            confirmButtonColor: \"#DD6B55\",
                            confirmButtonText: \"Oui, Annuler réservation!\",
                            closeOnConfirm: false
                        },
                        function() {
                    //redirect
                            updateUrl();
                            return true;
                        });
                    }
                    function updateUrl() {
                        var url = '{{ path(\"user_reservation_cancell\", {'id': entity.id}) }}';
                        window.location.href = url;
                    }
                </script>
            </td>    
        </tr>
            {%endfor%}
    </tbody>
</table>


    {% endif %}
{% endblock %}
", "OrionEventBundle:User_Reservation:user_myReservation.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Reservation/user_myReservation.html.twig");
    }
}
