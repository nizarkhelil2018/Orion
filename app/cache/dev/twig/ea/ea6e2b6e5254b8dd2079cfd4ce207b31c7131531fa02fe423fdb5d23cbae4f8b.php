<?php

/* OrionEventBundle:User_Reservation:user_billet_reserve_choice.html.twig */
class __TwigTemplate_69fd16cb994d0a7b7dc4261ed2fe834310fb528aa6afcf8901abacd178f0931d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_front_user.html.twig", "OrionEventBundle:User_Reservation:user_billet_reserve_choice.html.twig", 1);
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
        $__internal_853d6c295d9238b62b5bda270278b9dcae032a02aabac37c74743e5984fa7e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853d6c295d9238b62b5bda270278b9dcae032a02aabac37c74743e5984fa7e17->enter($__internal_853d6c295d9238b62b5bda270278b9dcae032a02aabac37c74743e5984fa7e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Reservation:user_billet_reserve_choice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_853d6c295d9238b62b5bda270278b9dcae032a02aabac37c74743e5984fa7e17->leave($__internal_853d6c295d9238b62b5bda270278b9dcae032a02aabac37c74743e5984fa7e17_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_60d8c60650cf9c1b038b63da3388a2f7756b34b48925999a27fc50f7e38b507e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d8c60650cf9c1b038b63da3388a2f7756b34b48925999a27fc50f7e38b507e->enter($__internal_60d8c60650cf9c1b038b63da3388a2f7756b34b48925999a27fc50f7e38b507e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_60d8c60650cf9c1b038b63da3388a2f7756b34b48925999a27fc50f7e38b507e->leave($__internal_60d8c60650cf9c1b038b63da3388a2f7756b34b48925999a27fc50f7e38b507e_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_93f1ce9694cff6c2f5e2baf597d0fe755f63304d70433c55fcaa7e0a1c638c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f1ce9694cff6c2f5e2baf597d0fe755f63304d70433c55fcaa7e0a1c638c3e->enter($__internal_93f1ce9694cff6c2f5e2baf597d0fe755f63304d70433c55fcaa7e0a1c638c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-ticket\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reserve"), "html", null, true);
        echo "
";
        
        $__internal_93f1ce9694cff6c2f5e2baf597d0fe755f63304d70433c55fcaa7e0a1c638c3e->leave($__internal_93f1ce9694cff6c2f5e2baf597d0fe755f63304d70433c55fcaa7e0a1c638c3e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fc4be8407d7e0955949193f85434867080303f8a95fa8f19df740ad8e1e0ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc4be8407d7e0955949193f85434867080303f8a95fa8f19df740ad8e1e0ad2->enter($__internal_8fc4be8407d7e0955949193f85434867080303f8a95fa8f19df740ad8e1e0ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<script>


    function callAlert() {
        swal({
            title: \"Etes vous sur de vouloir réserver?\",
            text: \"\",
            type: \"warning\",
            showCancelButton: true,
            confirmButtonColor: \"#DD6B55\",
            confirmButtonText: \"Oui, Réserver!\",
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
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_reserve_end", array("idBillet" => $this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "id", array()), "nbBillet" => "nbBilletC")), "html", null, true);
        echo "';
        url = url.replace(\"nbBilletC\", document.getElementById('number').value);
        window.location.href = url;

    }
</script>

<div class=\"text-center\"><h3>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
        echo " :  <b class=\"text-purple\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "titre", array()), "html", null, true);
        echo "</b></h3></div>
<table class=\"table table-responsive table-bordered\">

    <tr>
        <th class=\"col-sm-2\"><h4 class=\"text-purple text-bold\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "titre", array()), "html", null, true);
        echo "</h4></th>
<td rowspan=\"6\"><b class=\"text-info \">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo ":</b></br>
    <p class=\"text-justify\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "description", array()), "html", null, true);
        echo "</p></td></td>
<th class=\"col-sm-2 text-info\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</th>
<td class=\"col-sm-3\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "theme", array()), "html", null, true);
        echo "</td>

</tr>
<tr>
    <td rowspan=\"5\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "path", array()))), "html", null, true);
        echo "\"class=\"img-rounded img-responsive\" alt=\"billet.evenement.titre\"></td>    
    <th class=\"text-info\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</th>
    <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "type", array()), "html", null, true);
        echo "</td>    
</tr>
<tr>   
    <th class=\"text-info\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starts the"), "html", null, true);
        echo "</th>
    <td>";
        // line 58
        if ($this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "horaireDebut", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "horaireDebut", array()), "d/m/Y"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "horaireDebut", array()), "H:i"), "html", null, true);
        }
        echo "</td>
</tr>
<tr>    
    <th class=\"text-info\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ends the"), "html", null, true);
        echo "</th>
    <td>";
        // line 62
        if ($this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "HoraireFin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "HoraireFin", array()), "d/m/Y"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "HoraireFin", array()), "H:i"), "html", null, true);
        }
        echo "</td>
</tr>
<tr>    
    <th class=\"text-info\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
        echo "</th>
    <td>GMT + ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "fuseauHoraire", array()), "html", null, true);
        echo "</td>
</tr>
<tr>    
    <th class=\"text-info\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Address"), "html", null, true);
        echo "</th>
    <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "adresse", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "ville", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "codePostal", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "pays", array()), "html", null, true);
        echo "</td>
</tr>

</table></br>
                <div class=\"text-center\"><h3>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket"), "html", null, true);
        echo " :  <b class=\"text-purple\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "libelle", array()), "html", null, true);
        echo "</b></h3></div>
                <table class=\"table table-responsive\">
                    <tr>
                        <th class=\"col-sm-4 text-primary\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket"), "html", null, true);
        echo "</th>
                        <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "libelle", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"col-sm-4 text-primary\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price"), "html", null, true);
        echo "</th>
                        <td>";
        // line 82
        if (($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "type", array()) == 1)) {
            echo "<b class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "prix", array()), "html", null, true);
            echo " €</b></p>                                   
                            ";
        } else {
            // line 83
            echo "<p class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free"), "html", null, true);
            echo "</p>                                    
                            ";
        }
        // line 84
        echo "</td>
                    </tr>
                    <tr>
                        <th class=\"text-primary\">Nombre des billets à reserver </th>
                        <td><input id=\"number\" type=\"number\" value=\"1\" name=\"quantity\" min=\"1\" max=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "attente", array()), "html", null, true);
        echo "\">&nbsp; ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket"), "html", null, true);
        echo "(s)
                        </br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                    <button onclick=\"callAlert()\" type=\"button\" class=\"btn-sm btn-success btn-group fa fa-check\"> 
            ";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reserve"), "html", null, true);
        echo "
                        </button> 
                        </td>
                    </tr>

                </table>
                
                <div class=\"text-left\">
            <a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_par_event_reserve", array("id" => $this->getAttribute($this->getAttribute((isset($context["billet"]) ? $context["billet"] : $this->getContext($context, "billet")), "evenement", array()), "id", array()))), "html", null, true);
        echo "\">
                <button class=\"btn  btn-default fa fa-list\"> ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Tickets"), "html", null, true);
        echo "</button>
            </a>
        \t\t\t\t
                </div>



";
        
        $__internal_8fc4be8407d7e0955949193f85434867080303f8a95fa8f19df740ad8e1e0ad2->leave($__internal_8fc4be8407d7e0955949193f85434867080303f8a95fa8f19df740ad8e1e0ad2_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Reservation:user_billet_reserve_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 104,  278 => 103,  267 => 95,  255 => 88,  249 => 84,  243 => 83,  236 => 82,  232 => 81,  226 => 78,  222 => 77,  214 => 74,  201 => 70,  197 => 69,  191 => 66,  187 => 65,  175 => 62,  171 => 61,  159 => 58,  155 => 57,  149 => 54,  145 => 53,  141 => 52,  134 => 48,  130 => 47,  126 => 46,  122 => 45,  118 => 44,  109 => 40,  99 => 33,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
<i class=\"fa fa-ticket\"></i> {{ 'Reserve'|trans }}
{% endblock operation %}
{% block body -%}   
<script>


    function callAlert() {
        swal({
            title: \"Etes vous sur de vouloir réserver?\",
            text: \"\",
            type: \"warning\",
            showCancelButton: true,
            confirmButtonColor: \"#DD6B55\",
            confirmButtonText: \"Oui, Réserver!\",
            closeOnConfirm: false
        },
        function() {
//redirect
            updateUrl();
            return true;
        });
    }


    function updateUrl() {

        var url = '{{ path(\"user_billet_reserve_end\", {'idBillet': billet.id,'nbBillet': 'nbBilletC'}) }}';
        url = url.replace(\"nbBilletC\", document.getElementById('number').value);
        window.location.href = url;

    }
</script>

<div class=\"text-center\"><h3>{{'Event'|trans}} :  <b class=\"text-purple\">{{ billet.evenement.titre }}</b></h3></div>
<table class=\"table table-responsive table-bordered\">

    <tr>
        <th class=\"col-sm-2\"><h4 class=\"text-purple text-bold\">{{ billet.evenement.titre }}</h4></th>
<td rowspan=\"6\"><b class=\"text-info \">{{ 'Description'|trans }}:</b></br>
    <p class=\"text-justify\">{{ billet.evenement.description }}</p></td></td>
<th class=\"col-sm-2 text-info\">{{ 'Theme'|trans }}</th>
<td class=\"col-sm-3\">{{ billet.evenement.theme }}</td>

</tr>
<tr>
    <td rowspan=\"5\"><img src=\"{{ asset('uploads/' ~ billet.evenement.path) }}\"class=\"img-rounded img-responsive\" alt=\"billet.evenement.titre\"></td>    
    <th class=\"text-info\">{{ 'Type'|trans }}</th>
    <td>{{ billet.evenement.type }}</td>    
</tr>
<tr>   
    <th class=\"text-info\">{{ 'Starts the'|trans }}</th>
    <td>{% if billet.evenement.horaireDebut %}{{ billet.evenement.horaireDebut|date('d/m/Y') }} {{ 'at'|trans }} {{ billet.evenement.horaireDebut|date('H:i') }}{% endif %}</td>
</tr>
<tr>    
    <th class=\"text-info\">{{ 'Ends the'|trans }}</th>
    <td>{% if billet.evenement.HoraireFin %}{{ billet.evenement.HoraireFin|date('d/m/Y') }} {{ 'at'|trans }} {{ billet.evenement.HoraireFin|date('H:i') }}{% endif %}</td>
</tr>
<tr>    
    <th class=\"text-info\">{{ 'Time zone'|trans }}</th>
    <td>GMT + {{ billet.evenement.fuseauHoraire }}</td>
</tr>
<tr>    
    <th class=\"text-info\">{{ 'Address'|trans }}</th>
    <td>{{ billet.evenement.adresse }}, {{ billet.evenement.ville }} {{ billet.evenement.codePostal }}, {{ billet.evenement.pays }}</td>
</tr>

</table></br>
                <div class=\"text-center\"><h3>{{'Ticket'|trans}} :  <b class=\"text-purple\">{{ billet.libelle}}</b></h3></div>
                <table class=\"table table-responsive\">
                    <tr>
                        <th class=\"col-sm-4 text-primary\">{{'Ticket'|trans}}</th>
                        <td>{{billet.libelle}}</td>
                    </tr>
                    <tr>
                        <th class=\"col-sm-4 text-primary\">{{'Price'|trans}}</th>
                        <td>{% if billet.type == 1 %}<b class=\"text-danger\">{{ billet.prix }} €</b></p>                                   
                            {% else %}<p class=\"text-success\">{{ 'Free'|trans }}</p>                                    
                            {% endif %}</td>
                    </tr>
                    <tr>
                        <th class=\"text-primary\">Nombre des billets à reserver </th>
                        <td><input id=\"number\" type=\"number\" value=\"1\" name=\"quantity\" min=\"1\" max=\"{{ billet.attente }}\">&nbsp; {{'Ticket'|trans}}(s)
                        </br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                    <button onclick=\"callAlert()\" type=\"button\" class=\"btn-sm btn-success btn-group fa fa-check\"> 
            {{'Reserve'|trans}}
                        </button> 
                        </td>
                    </tr>

                </table>
                
                <div class=\"text-left\">
            <a href=\"{{ path('user_billet_par_event_reserve', { 'id': billet.evenement.id }) }}\">
                <button class=\"btn  btn-default fa fa-list\"> {{'All Tickets'|trans}}</button>
            </a>
        \t\t\t\t
                </div>



{% endblock %}
", "OrionEventBundle:User_Reservation:user_billet_reserve_choice.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Reservation/user_billet_reserve_choice.html.twig");
    }
}
