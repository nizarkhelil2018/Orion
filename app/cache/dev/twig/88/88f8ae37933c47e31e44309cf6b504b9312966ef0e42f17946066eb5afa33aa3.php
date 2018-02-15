<?php

/* @OrionEvent/Evenement2/show.html.twig */
class __TwigTemplate_e967ed32460d7741ada7e17967400d6ca732ad413a5aac185ae43dc660b1d98b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@OrionEvent/Evenement2/show.html.twig", 1);
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
        $__internal_257652f7d7bd986f946d0bb5503e88959ecd74daf460103da1f0f8ef97b91e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257652f7d7bd986f946d0bb5503e88959ecd74daf460103da1f0f8ef97b91e78->enter($__internal_257652f7d7bd986f946d0bb5503e88959ecd74daf460103da1f0f8ef97b91e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Evenement2/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_257652f7d7bd986f946d0bb5503e88959ecd74daf460103da1f0f8ef97b91e78->leave($__internal_257652f7d7bd986f946d0bb5503e88959ecd74daf460103da1f0f8ef97b91e78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a54101569677ac52985ec90333f526e81a293fab9e40b4dd10a96bceb32231c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a54101569677ac52985ec90333f526e81a293fab9e40b4dd10a96bceb32231c->enter($__internal_9a54101569677ac52985ec90333f526e81a293fab9e40b4dd10a96bceb32231c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Evenement</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codepostal</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codePostal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pays", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Horairedebut</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Horairefin</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fuseauhoraire</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fuseauHoraire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updateat</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updateAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 78
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_9a54101569677ac52985ec90333f526e81a293fab9e40b4dd10a96bceb32231c->leave($__internal_9a54101569677ac52985ec90333f526e81a293fab9e40b4dd10a96bceb32231c_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Evenement2/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 78,  157 => 74,  149 => 69,  139 => 62,  132 => 58,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Evenement</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ entity.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ entity.titre }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ entity.description }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ entity.etat }}</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>{{ entity.dateCreation|date('Y-m-d H:i:s') }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ entity.adresse }}</td>
            </tr>
            <tr>
                <th>Codepostal</th>
                <td>{{ entity.codePostal }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ entity.ville }}</td>
            </tr>
            <tr>
                <th>Pays</th>
                <td>{{ entity.pays }}</td>
            </tr>
            <tr>
                <th>Horairedebut</th>
                <td>{{ entity.horaireDebut|date('Y-m-d H:i:s') }}</td>
            </tr>
            <tr>
                <th>Horairefin</th>
                <td>{{ entity.HoraireFin|date('Y-m-d H:i:s') }}</td>
            </tr>
            <tr>
                <th>Fuseauhoraire</th>
                <td>{{ entity.fuseauHoraire }}</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>{{ entity.path }}</td>
            </tr>
            <tr>
                <th>Updateat</th>
                <td>{{ entity.updateAt|date('Y-m-d H:i:s') }}</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('evenement') }}\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"{{ path('evenement_edit', { 'id': entity.id }) }}\">
            Edit
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "@OrionEvent/Evenement2/show.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Evenement2\\show.html.twig");
    }
}
