<?php

/* OrionEventBundle:User_Owned_Events:user_owned_events_index2.html.twig */
class __TwigTemplate_9680153e173429ef506398a12c0c31a0437baec95fd50054bb447b855cacb0cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "OrionEventBundle:User_Owned_Events:user_owned_events_index2.html.twig", 1);
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
        $__internal_4a1be7f6b58f9f42199e2e506f2de416e37d3383f52a41c99cb327850ad9063c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1be7f6b58f9f42199e2e506f2de416e37d3383f52a41c99cb327850ad9063c->enter($__internal_4a1be7f6b58f9f42199e2e506f2de416e37d3383f52a41c99cb327850ad9063c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:User_Owned_Events:user_owned_events_index2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a1be7f6b58f9f42199e2e506f2de416e37d3383f52a41c99cb327850ad9063c->leave($__internal_4a1be7f6b58f9f42199e2e506f2de416e37d3383f52a41c99cb327850ad9063c_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_22193a3e39b58ec7ffda7f500c1bae478bd3c0af77007936a083b809ae6067ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22193a3e39b58ec7ffda7f500c1bae478bd3c0af77007936a083b809ae6067ee->enter($__internal_22193a3e39b58ec7ffda7f500c1bae478bd3c0af77007936a083b809ae6067ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_22193a3e39b58ec7ffda7f500c1bae478bd3c0af77007936a083b809ae6067ee->leave($__internal_22193a3e39b58ec7ffda7f500c1bae478bd3c0af77007936a083b809ae6067ee_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_0f58f99d62e5d1c78bc253e95911d2c615383412d26306395b9fab6596b7e55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f58f99d62e5d1c78bc253e95911d2c615383412d26306395b9fab6596b7e55a->enter($__internal_0f58f99d62e5d1c78bc253e95911d2c615383412d26306395b9fab6596b7e55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List"), "html", null, true);
        echo "
";
        
        $__internal_0f58f99d62e5d1c78bc253e95911d2c615383412d26306395b9fab6596b7e55a->leave($__internal_0f58f99d62e5d1c78bc253e95911d2c615383412d26306395b9fab6596b7e55a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f55dc29ebf053e2a82660fc742398d7031284a9c393ee23ca71b5c00c2128a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f55dc29ebf053e2a82660fc742398d7031284a9c393ee23ca71b5c00c2128a4->enter($__internal_2f55dc29ebf053e2a82660fc742398d7031284a9c393ee23ca71b5c00c2128a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h1 class=\"text-center text-primary\"><b>Liste des Evenements</b></h1>

    <table class=\"table table-striped\">
        <thead>
            <tr class=\"info text-muted\">
                <th>Titre</th>
                <th>Description</th>
                <th class=\"col-sm-1\">Etat</th>
                <th class=\"col-sm-1\">Theme</th>
                <th class=\"col-sm-1\">Type</th>
                <th class=\"col-sm-1\">Horaire de Debut</th>
                <th class=\"col-sm-1\">Horaire de Fin</th>
                <th class=\"col-sm-1\">Fuseau Horaire</th>
                <th class=\"col-sm-2\">Adresse</th>
                <th class=\"col-sm-1\">Actions</th>
            </tr>
        </thead>

        <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "                <tr>
                    <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</b></a></td>
                    <td class=\"text-justify\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>

                    <td>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_edit_State", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                            ";
            // line 36
            if (($this->getAttribute($context["entity"], "etat", array()) == 2)) {
                echo "<b><p class=\"text-success\">Public</p></b>
                            ";
            } elseif (($this->getAttribute(            // line 37
$context["entity"], "etat", array()) == 1)) {
                echo "<b><p class=\"text-warning\">Enregistré</br>(Non Publié)</p><b>
                                    ";
            } elseif (($this->getAttribute(            // line 38
$context["entity"], "etat", array()) == 0)) {
                echo " <b><p class=\"text-danger\">Annulé</p></b>
                                    ";
            }
            // line 40
            echo "                                    <a>
                                        </td>
                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "theme", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 44
            if ($this->getAttribute($context["entity"], "horaireDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 45
            if ($this->getAttribute($context["entity"], "HoraireFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "HoraireFin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                        <td>GMT + ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fuseauHoraire", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ville", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codePostal", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pays", array()), "html", null, true);
            echo "</td>
                                        <td>               
                                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" class=\"btn-xs btn-success\">Afficher</button>
                                            </a>

                                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" class=\"btn-xs btn-primary\">Modifier</button>
                                            </a>

                                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_publish", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" class=\"btn-xs btn-info\">Publier</button>
                                            </a>

                                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_hide", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" class=\"btn-xs btn-warning\">Dépublier</button>
                                            </a> 
                                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_cancel", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" class=\"btn-xs btn-danger\">Annuler</button>
                                            </a>

                                        </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                    </tbody>
                                    </table>


                                    <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_new");
        echo "\">
                                        <button type=\"button\" class=\"btn btn-info \"> <h5>+ Nouveau Evenement</h5></button>
                                    </a>

                                ";
        
        $__internal_2f55dc29ebf053e2a82660fc742398d7031284a9c393ee23ca71b5c00c2128a4->leave($__internal_2f55dc29ebf053e2a82660fc742398d7031284a9c393ee23ca71b5c00c2128a4_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:User_Owned_Events:user_owned_events_index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 75,  210 => 71,  197 => 64,  191 => 61,  184 => 57,  177 => 53,  170 => 49,  159 => 47,  155 => 46,  149 => 45,  143 => 44,  139 => 43,  135 => 42,  131 => 40,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  108 => 32,  102 => 31,  99 => 30,  95 => 29,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    {{ 'Events Management'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-list\"></i> {{ 'List'|trans }}
{% endblock operation %}
{% block body -%}
    <h1 class=\"text-center text-primary\"><b>Liste des Evenements</b></h1>

    <table class=\"table table-striped\">
        <thead>
            <tr class=\"info text-muted\">
                <th>Titre</th>
                <th>Description</th>
                <th class=\"col-sm-1\">Etat</th>
                <th class=\"col-sm-1\">Theme</th>
                <th class=\"col-sm-1\">Type</th>
                <th class=\"col-sm-1\">Horaire de Debut</th>
                <th class=\"col-sm-1\">Horaire de Fin</th>
                <th class=\"col-sm-1\">Fuseau Horaire</th>
                <th class=\"col-sm-2\">Adresse</th>
                <th class=\"col-sm-1\">Actions</th>
            </tr>
        </thead>

        <tbody>
            {% for entity in entities %}
                <tr>
                    <td><a href=\"{{ path('user_owned_event_show', { 'id': entity.id }) }}\"><b>{{ entity.titre }}</b></a></td>
                    <td class=\"text-justify\">{{ entity.description }}</td>

                    <td>
                        <a href=\"{{ path('user_owned_event_edit_State', { 'id': entity.id }) }}\">
                            {% if entity.etat == 2 %}<b><p class=\"text-success\">Public</p></b>
                            {% elseif entity.etat == 1 %}<b><p class=\"text-warning\">Enregistré</br>(Non Publié)</p><b>
                                    {% elseif entity.etat ==0 %} <b><p class=\"text-danger\">Annulé</p></b>
                                    {% endif %}
                                    <a>
                                        </td>
                                        <td>{{ entity.theme }}</td>
                                        <td>{{ entity.type }}</td>
                                        <td>{% if entity.horaireDebut %}{{ entity.horaireDebut|date('Y-m-d H:i:s') }}{% endif %}</td>
                                        <td>{% if entity.HoraireFin %}{{ entity.HoraireFin|date('Y-m-d H:i:s') }}{% endif %}</td>
                                        <td>GMT + {{ entity.fuseauHoraire }}</td>
                                        <td>{{ entity.adresse }}, {{ entity.ville }} {{ entity.codePostal }}, {{ entity.pays }}</td>
                                        <td>               
                                            <a href=\"{{ path('user_owned_event_show', { 'id': entity.id }) }}\">
                                                <button type=\"button\" class=\"btn-xs btn-success\">Afficher</button>
                                            </a>

                                            <a href=\"{{ path('user_owned_event_edit', { 'id': entity.id }) }}\">
                                                <button type=\"button\" class=\"btn-xs btn-primary\">Modifier</button>
                                            </a>

                                            <a href=\"{{ path('user_owned_event_publish', { 'id': entity.id }) }}\">
                                                <button type=\"button\" class=\"btn-xs btn-info\">Publier</button>
                                            </a>

                                            <a href=\"{{ path('user_owned_event_hide', { 'id': entity.id }) }}\">
                                                <button type=\"button\" class=\"btn-xs btn-warning\">Dépublier</button>
                                            </a> 
                                            <a href=\"{{ path('user_owned_event_cancel', { 'id': entity.id }) }}\">
                                                <button type=\"button\" class=\"btn-xs btn-danger\">Annuler</button>
                                            </a>

                                        </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                    </table>


                                    <a href=\"{{ path('user_owned_event_new') }}\">
                                        <button type=\"button\" class=\"btn btn-info \"> <h5>+ Nouveau Evenement</h5></button>
                                    </a>

                                {% endblock %}
", "OrionEventBundle:User_Owned_Events:user_owned_events_index2.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/User_Owned_Events/user_owned_events_index2.html.twig");
    }
}
