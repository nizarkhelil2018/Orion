<?php

/* OrionEventBundle:User_Reservation:user_billet_event_booking_list.html.twig */
class __TwigTemplate_e94f48583bf17be5de88df7ea93e20acfc7325bef822774d512a96fc2e645837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_front_user.html.twig", "OrionEventBundle:User_Reservation:user_billet_event_booking_list.html.twig", 1);
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
        $__internal_b71b28c979be9a7a2bfdc395abf2a398b52ee0838daf9c79d0365067637f4a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71b28c979be9a7a2bfdc395abf2a398b52ee0838daf9c79d0365067637f4a57->enter($__internal_b71b28c979be9a7a2bfdc395abf2a398b52ee0838daf9c79d0365067637f4a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Reservation:user_billet_event_booking_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b71b28c979be9a7a2bfdc395abf2a398b52ee0838daf9c79d0365067637f4a57->leave($__internal_b71b28c979be9a7a2bfdc395abf2a398b52ee0838daf9c79d0365067637f4a57_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_571894b8e08f3fa68e96e5360fd632863910ba768683160e8ca659f12c621a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571894b8e08f3fa68e96e5360fd632863910ba768683160e8ca659f12c621a95->enter($__internal_571894b8e08f3fa68e96e5360fd632863910ba768683160e8ca659f12c621a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_571894b8e08f3fa68e96e5360fd632863910ba768683160e8ca659f12c621a95->leave($__internal_571894b8e08f3fa68e96e5360fd632863910ba768683160e8ca659f12c621a95_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_66fbcba89829f7429e7618d41c3277e18092becb2ab9c5a0f6297403b04ad075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fbcba89829f7429e7618d41c3277e18092becb2ab9c5a0f6297403b04ad075->enter($__internal_66fbcba89829f7429e7618d41c3277e18092becb2ab9c5a0f6297403b04ad075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-ticket\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reservations List"), "html", null, true);
        echo "
";
        
        $__internal_66fbcba89829f7429e7618d41c3277e18092becb2ab9c5a0f6297403b04ad075->leave($__internal_66fbcba89829f7429e7618d41c3277e18092becb2ab9c5a0f6297403b04ad075_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d625a2c512fb02c76e4264dfb5a00d08fe662435b8a53ca646e3d6737770c24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d625a2c512fb02c76e4264dfb5a00d08fe662435b8a53ca646e3d6737770c24f->enter($__internal_d625a2c512fb02c76e4264dfb5a00d08fe662435b8a53ca646e3d6737770c24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h2 class=\"text-center text-primary\"><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reservations List"), "html", null, true);
        echo "</b></h2>
";
        // line 13
        echo "<table class=\"table table-bordered\">
    <thead>
        <tr class=\"info\">
    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reserved By"), "html", null, true);
        echo "</th>
    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket"), "html", null, true);
        echo "</th>
    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number"), "html", null, true);
        echo "</th>
    <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reservation date"), "html", null, true);
        echo "</th>
        </tr>
</thead>
<tbody>
    ";
        // line 23
        $context["foo"] =  -3;
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "    ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "billet", array()), "evenement", array()), "organisateur", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "billet", array()), "evenement", array()), "id", array()) == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))))) {
                // line 26
                echo "        ";
                if (((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) != 1)) {
                    // line 27
                    echo "        ";
                    $context["evenement"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "billet", array()), "evenement", array()), "titre", array());
                    echo "   
        ";
                    // line 28
                    $context["foo"] = 1;
                    // line 29
                    echo "<h4 class=\"text-center\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
                    echo " : <b class=\"text-blue\"> ";
                    echo twig_escape_filter($this->env, (isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "html", null, true);
                    echo "</b></h4>
        ";
                }
                // line 31
                echo "    <tr>
    <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "utilisateur", array()), "html", null, true);
                echo "</td> 
    <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "billet", array()), "libelle", array()), "html", null, true);
                echo " </td> 
    <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "number", array()), "html", null, true);
                echo "</td> 
    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateReservation", array()), "d/m/Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateReservation", array()), "H:i"), "html", null, true);
                echo "</td>
    <tr>

";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "<tbody>
</table>
";
        
        $__internal_d625a2c512fb02c76e4264dfb5a00d08fe662435b8a53ca646e3d6737770c24f->leave($__internal_d625a2c512fb02c76e4264dfb5a00d08fe662435b8a53ca646e3d6737770c24f_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Reservation:user_billet_event_booking_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 40,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  130 => 31,  122 => 29,  120 => 28,  115 => 27,  112 => 26,  109 => 25,  105 => 24,  103 => 23,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  79 => 13,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
<i class=\"fa fa-ticket\"></i> {{ 'Reservations List'|trans }}
{% endblock operation %}
{% block body -%}  
<h2 class=\"text-center text-primary\"><b>{{ 'Reservations List'|trans }}</b></h2>
{#{{evenement}}#}
{#{{id}}#}
<table class=\"table table-bordered\">
    <thead>
        <tr class=\"info\">
    <th>{{'Reserved By'|trans}}</th>
    <th>{{'Ticket'|trans}}</th>
    <th>{{'Number'|trans}}</th>
    <th>{{'Reservation date'|trans}}</th>
        </tr>
</thead>
<tbody>
    {% set foo = -3 %}
{% for entity in entities %}
    {% if entity.billet.evenement.organisateur == app.user and entity.billet.evenement.id == id %}
        {% if foo != 1%}
        {% set evenement = entity.billet.evenement.titre%}   
        {% set  foo= 1%}
<h4 class=\"text-center\">{{'Event'|trans}} : <b class=\"text-blue\"> {{evenement}}</b></h4>
        {%endif%}
    <tr>
    <td>{{entity.utilisateur}}</td> 
    <td>{{entity.billet.libelle}} </td> 
    <td>{{entity.number}}</td> 
    <td>{{ entity.dateReservation|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateReservation|date('H:i') }}</td>
    <tr>

{% endif %}
{% endfor %}
<tbody>
</table>
{% endblock %}
", "OrionEventBundle:User_Reservation:user_billet_event_booking_list.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Reservation/user_billet_event_booking_list.html.twig");
    }
}
