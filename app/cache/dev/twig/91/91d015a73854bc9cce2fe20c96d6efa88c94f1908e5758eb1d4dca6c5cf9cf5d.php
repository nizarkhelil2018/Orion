<?php

/* @OrionEvent/Evenement2/index.html.twig */
class __TwigTemplate_cc909c9071727f86d53302883678a816855f0b0454f34de49ac772b9819cd1e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@OrionEvent/Evenement2/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b1395dc98aa2d3a32775863aee5f680f30da751b834a392a9da7e3a341af75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1395dc98aa2d3a32775863aee5f680f30da751b834a392a9da7e3a341af75c->enter($__internal_2b1395dc98aa2d3a32775863aee5f680f30da751b834a392a9da7e3a341af75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Evenement2/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b1395dc98aa2d3a32775863aee5f680f30da751b834a392a9da7e3a341af75c->leave($__internal_2b1395dc98aa2d3a32775863aee5f680f30da751b834a392a9da7e3a341af75c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_949d0d2dea335f34b52b7847238fa659e89490a2c8400c57e31b64493adbc082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949d0d2dea335f34b52b7847238fa659e89490a2c8400c57e31b64493adbc082->enter($__internal_949d0d2dea335f34b52b7847238fa659e89490a2c8400c57e31b64493adbc082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Evenement list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Etat</th>
                <th>Datecreation</th>
                <th>Adresse</th>
                <th>Codepostal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Horairedebut</th>
                <th>Horairefin</th>
                <th>Fuseauhoraire</th>
                <th>Path</th>
                <th>Updateat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["entity"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codePostal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pays", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["entity"], "horaireDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "horaireDebut", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["entity"], "HoraireFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "HoraireFin", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fuseauHoraire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "path", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["entity"], "updateAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "updateAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_949d0d2dea335f34b52b7847238fa659e89490a2c8400c57e31b64493adbc082->leave($__internal_949d0d2dea335f34b52b7847238fa659e89490a2c8400c57e31b64493adbc082_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Evenement2/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  159 => 55,  147 => 49,  141 => 46,  132 => 42,  128 => 41,  124 => 40,  118 => 39,  112 => 38,  108 => 37,  104 => 36,  100 => 35,  96 => 34,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  72 => 29,  69 => 28,  65 => 27,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Evenement list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Etat</th>
                <th>Datecreation</th>
                <th>Adresse</th>
                <th>Codepostal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Horairedebut</th>
                <th>Horairefin</th>
                <th>Fuseauhoraire</th>
                <th>Path</th>
                <th>Updateat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('evenement_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.titre }}</td>
                <td>{{ entity.description }}</td>
                <td>{{ entity.etat }}</td>
                <td>{% if entity.dateCreation %}{{ entity.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ entity.adresse }}</td>
                <td>{{ entity.codePostal }}</td>
                <td>{{ entity.ville }}</td>
                <td>{{ entity.pays }}</td>
                <td>{% if entity.horaireDebut %}{{ entity.horaireDebut|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if entity.HoraireFin %}{{ entity.HoraireFin|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ entity.fuseauHoraire }}</td>
                <td>{{ entity.path }}</td>
                <td>{% if entity.updateAt %}{{ entity.updateAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('evenement_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('evenement_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"{{ path('evenement_new') }}\">
                Create a new entry
            </a>
        </li>
    </ul>
    {% endblock %}
", "@OrionEvent/Evenement2/index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Evenement2\\index.html.twig");
    }
}
