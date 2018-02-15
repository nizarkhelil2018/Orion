<?php

/* @OrionEvent/User_Owned_Events/user_evenement_recherche.html2.twig */
class __TwigTemplate_52cd8f903c4cd0c4cac1db97e8d6a3d32d5e1b73bece172978f86659c95198d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "@OrionEvent/User_Owned_Events/user_evenement_recherche.html2.twig", 1);
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
        $__internal_5180858c76cc1df4b29f0cead495ccdc5b3e79e880167e09bb3b961317bec2a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5180858c76cc1df4b29f0cead495ccdc5b3e79e880167e09bb3b961317bec2a4->enter($__internal_5180858c76cc1df4b29f0cead495ccdc5b3e79e880167e09bb3b961317bec2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/User_Owned_Events/user_evenement_recherche.html2.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5180858c76cc1df4b29f0cead495ccdc5b3e79e880167e09bb3b961317bec2a4->leave($__internal_5180858c76cc1df4b29f0cead495ccdc5b3e79e880167e09bb3b961317bec2a4_prof);

    }

    // line 4
    public function block_module($context, array $blocks = array())
    {
        $__internal_d2a3e9ad2f392073bb8b61ff3acabb280660004153839a6e3a738edb64515b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a3e9ad2f392073bb8b61ff3acabb280660004153839a6e3a738edb64515b18->enter($__internal_d2a3e9ad2f392073bb8b61ff3acabb280660004153839a6e3a738edb64515b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 5
        echo "Gestion des Evénements
";
        
        $__internal_d2a3e9ad2f392073bb8b61ff3acabb280660004153839a6e3a738edb64515b18->leave($__internal_d2a3e9ad2f392073bb8b61ff3acabb280660004153839a6e3a738edb64515b18_prof);

    }

    // line 7
    public function block_operation($context, array $blocks = array())
    {
        $__internal_a624620d3d857039f072005112910cd0c092dce6112cc0e5c1127c80e81985e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a624620d3d857039f072005112910cd0c092dce6112cc0e5c1127c80e81985e5->enter($__internal_a624620d3d857039f072005112910cd0c092dce6112cc0e5c1127c80e81985e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 8
        echo "<i class=\"fa fa-search\"></i> Recherche
";
        
        $__internal_a624620d3d857039f072005112910cd0c092dce6112cc0e5c1127c80e81985e5->leave($__internal_a624620d3d857039f072005112910cd0c092dce6112cc0e5c1127c80e81985e5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0883ed7f1f1b2bb11331b72e4f87a18e69ddb7c3d4f59c545efd2f893a148df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0883ed7f1f1b2bb11331b72e4f87a18e69ddb7c3d4f59c545efd2f893a148df7->enter($__internal_0883ed7f1f1b2bb11331b72e4f87a18e69ddb7c3d4f59c545efd2f893a148df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<form method=\"POST\" action=\"\" class=\"text-center\">
    <table>
        <tr>
            <td class=\"col-sm-3\">
                <label>Titre</label>                
                <input type='text' name=\"input_titre\" value=\"\"/>
            </td>
            <td class=\"col-sm-3\">
                <label>Description</label>
                <input type='text' name=\"input_description\" value=\"\"/>
            </td>
            <td class=\"col-sm-3\">                
                <label>Pays</label>
                <input type='text' name=\"input_pays\" value=\"\"/>
            </td>
        </tr>
        <tr>
            <td class=\"col-sm-3\">
                <label>Type</label>
                <input type='text' name=\"input_type\" value=\"\"/>
            </td>           
            <td class=\"col-sm-3\">
                <label>Thème</label>
                <input type='text' name=\"input_theme\" value=\"\"/>
            </td>          

        </tr>
        <tr>
            <td class=\"col-sm-3\">
                <label>Commence le</label>
                <input type='date' name=\"input_date_debut\" value=\"\"/>
            </td>
        </tr>

    </table> 
    <div class=\"text-center\">
        </br>
        <input type=\"submit\" class=\"btn btn-success\" name=\"rechercher\" value=\" Rechercher\"/>
    </div>
</form>
</br>

    ";
        // line 53
        if (twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))) {
            // line 54
            echo "<div class=\"text-danger text-center\">Aucun Evénement Trouvé</div>
    ";
        } else {
            // line 56
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 57
                echo "<table class=\"table table-bordered\">
    <tr>
        <th class=\"col-sm-2\"><h4 class=\"text-purple text-bold\">";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
                echo "</h4></th>
<td rowspan=\"3\" class=\"col-sm-6\">Image
    <img  src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getAbsolutePath", array()), "html", null, true);
                echo "\" alt=\"\" width=\"200\" height=\"100\" />
    <img src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("web/uploads/" . twig_escape_filter($this->env, $this->getAttribute($context["entity"], "path", array())))), "html", null, true);
                echo "\" alt=\"\" />
</td>
<th class=\"col-sm-2 text-info\">Thème</th>
<td class=\"col-sm-2\">";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "theme", array()), "html", null, true);
                echo "</td>

</tr>
<tr>
    <td rowspan=\"6\">
        <ul style=\"list-style-type:none\">
            <li>
                <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                    <button type=\"button\" class=\"btn-xs btn-default fa fa-desktop\"> Afficher</button>
                </a>
            </li>

        </ul>
    </td>
    <th class=\"text-info\">Type</td>
    <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
                echo "</td>
</tr>
<tr>
    <th class=\"text-info\">Commence le</th>
    <td>";
                // line 84
                if ($this->getAttribute($context["entity"], "horaireDebut", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "d-m-Y à H:i:s"), "html", null, true);
                }
                echo "</td>
</tr>
<tr>
    <td rowspan=\"4\">
        <b class=\"text-info \">Description:</b></br>
        <p class=\"text-justify\">";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
                echo "</p></td>
    <th class=\"text-info\">Se termine le</th>        
    <td>";
                // line 91
                if ($this->getAttribute($context["entity"], "HoraireFin", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "HoraireFin", array()), "d-m-Y à H:i:s"), "html", null, true);
                }
                echo "</td>
</tr>
<tr>
    <th class=\"text-info\">Fuseau Horaire</th>
    <td>GMT + ";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fuseauHoraire", array()), "html", null, true);
                echo "</td>
</tr>
<tr>
    <th class=\"text-info\">Adresse</th>
    <td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ville", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codePostal", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pays", array()), "html", null, true);
                echo "</td>
</tr>

</table>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo " 

                ";
        }
        // line 106
        echo "            ";
        
        $__internal_0883ed7f1f1b2bb11331b72e4f87a18e69ddb7c3d4f59c545efd2f893a148df7->leave($__internal_0883ed7f1f1b2bb11331b72e4f87a18e69ddb7c3d4f59c545efd2f893a148df7_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/User_Owned_Events/user_evenement_recherche.html2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 106,  220 => 103,  203 => 99,  196 => 95,  187 => 91,  182 => 89,  172 => 84,  165 => 80,  154 => 72,  144 => 65,  138 => 62,  134 => 61,  129 => 59,  125 => 57,  120 => 56,  116 => 54,  114 => 53,  70 => 11,  64 => 10,  56 => 8,  50 => 7,  42 => 5,  36 => 4,  11 => 1,);
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
Gestion des Evénements
{% endblock module %}
{% block operation %}
<i class=\"fa fa-search\"></i> Recherche
{% endblock operation %}
{% block body -%}
<form method=\"POST\" action=\"\" class=\"text-center\">
    <table>
        <tr>
            <td class=\"col-sm-3\">
                <label>Titre</label>                
                <input type='text' name=\"input_titre\" value=\"\"/>
            </td>
            <td class=\"col-sm-3\">
                <label>Description</label>
                <input type='text' name=\"input_description\" value=\"\"/>
            </td>
            <td class=\"col-sm-3\">                
                <label>Pays</label>
                <input type='text' name=\"input_pays\" value=\"\"/>
            </td>
        </tr>
        <tr>
            <td class=\"col-sm-3\">
                <label>Type</label>
                <input type='text' name=\"input_type\" value=\"\"/>
            </td>           
            <td class=\"col-sm-3\">
                <label>Thème</label>
                <input type='text' name=\"input_theme\" value=\"\"/>
            </td>          

        </tr>
        <tr>
            <td class=\"col-sm-3\">
                <label>Commence le</label>
                <input type='date' name=\"input_date_debut\" value=\"\"/>
            </td>
        </tr>

    </table> 
    <div class=\"text-center\">
        </br>
        <input type=\"submit\" class=\"btn btn-success\" name=\"rechercher\" value=\" Rechercher\"/>
    </div>
</form>
</br>

    {% if entities is empty %}
<div class=\"text-danger text-center\">Aucun Evénement Trouvé</div>
    {% else %}
        {% for entity in entities %}
<table class=\"table table-bordered\">
    <tr>
        <th class=\"col-sm-2\"><h4 class=\"text-purple text-bold\">{{ entity.titre }}</h4></th>
<td rowspan=\"3\" class=\"col-sm-6\">Image
    <img  src=\"{{entity.getAbsolutePath}}\" alt=\"\" width=\"200\" height=\"100\" />
    <img src=\"{{ asset('web/uploads/'~entity.path|e) }}\" alt=\"\" />
</td>
<th class=\"col-sm-2 text-info\">Thème</th>
<td class=\"col-sm-2\">{{ entity.theme }}</td>

</tr>
<tr>
    <td rowspan=\"6\">
        <ul style=\"list-style-type:none\">
            <li>
                <a href=\"{{ path('user_owned_event_show', { 'id': entity.id }) }}\">
                    <button type=\"button\" class=\"btn-xs btn-default fa fa-desktop\"> Afficher</button>
                </a>
            </li>

        </ul>
    </td>
    <th class=\"text-info\">Type</td>
    <td>{{ entity.type }}</td>
</tr>
<tr>
    <th class=\"text-info\">Commence le</th>
    <td>{% if entity.horaireDebut %}{{ entity.horaireDebut|date('d-m-Y à H:i:s') }}{% endif %}</td>
</tr>
<tr>
    <td rowspan=\"4\">
        <b class=\"text-info \">Description:</b></br>
        <p class=\"text-justify\">{{ entity.description }}</p></td>
    <th class=\"text-info\">Se termine le</th>        
    <td>{% if entity.HoraireFin %}{{ entity.HoraireFin|date('d-m-Y à H:i:s') }}{% endif %}</td>
</tr>
<tr>
    <th class=\"text-info\">Fuseau Horaire</th>
    <td>GMT + {{ entity.fuseauHoraire }}</td>
</tr>
<tr>
    <th class=\"text-info\">Adresse</th>
    <td>{{ entity.adresse }}, {{ entity.ville }} {{ entity.codePostal }}, {{ entity.pays }}</td>
</tr>

</table>
                    {% endfor %} 

                {% endif %}
            {% endblock %}
", "@OrionEvent/User_Owned_Events/user_evenement_recherche.html2.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\User_Owned_Events\\user_evenement_recherche.html2.twig");
    }
}
