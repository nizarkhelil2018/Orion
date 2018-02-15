<?php

/* OrionEventBundle:Admin_Events:admin_event_show.html.twig */
class __TwigTemplate_f8ab4d0c345d41f9d33c216af0a169f014756beef88c3765787dbf0214d25aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Events:admin_event_show.html.twig", 1);
        $this->blocks = array(
            'module' => array($this, 'block_module'),
            'operation' => array($this, 'block_operation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionEventBundle::layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_036bf8059068f0490cea59444820bc46c0a432ef7442c67bcf13bf73603d0bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036bf8059068f0490cea59444820bc46c0a432ef7442c67bcf13bf73603d0bc8->enter($__internal_036bf8059068f0490cea59444820bc46c0a432ef7442c67bcf13bf73603d0bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Events:admin_event_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_036bf8059068f0490cea59444820bc46c0a432ef7442c67bcf13bf73603d0bc8->leave($__internal_036bf8059068f0490cea59444820bc46c0a432ef7442c67bcf13bf73603d0bc8_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_0e712399b60b7ca243fa18d069c27ca477c9a18a2d532ad4bad847db6710e93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e712399b60b7ca243fa18d069c27ca477c9a18a2d532ad4bad847db6710e93c->enter($__internal_0e712399b60b7ca243fa18d069c27ca477c9a18a2d532ad4bad847db6710e93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_0e712399b60b7ca243fa18d069c27ca477c9a18a2d532ad4bad847db6710e93c->leave($__internal_0e712399b60b7ca243fa18d069c27ca477c9a18a2d532ad4bad847db6710e93c_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_c7852a072afbd7e8d710ac5cc4d4eb4b59ebe61f169df2d178dcfa98698317c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7852a072afbd7e8d710ac5cc4d4eb4b59ebe61f169df2d178dcfa98698317c5->enter($__internal_c7852a072afbd7e8d710ac5cc4d4eb4b59ebe61f169df2d178dcfa98698317c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "<i class=\"fa fa-fw fa-desktop\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display"), "html", null, true);
        echo "
";
        
        $__internal_c7852a072afbd7e8d710ac5cc4d4eb4b59ebe61f169df2d178dcfa98698317c5->leave($__internal_c7852a072afbd7e8d710ac5cc4d4eb4b59ebe61f169df2d178dcfa98698317c5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_efabca21f03fd91db5473b0b849b8901dce54b196c488ce7f5fdd8850f96177f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efabca21f03fd91db5473b0b849b8901dce54b196c488ce7f5fdd8850f96177f->enter($__internal_efabca21f03fd91db5473b0b849b8901dce54b196c488ce7f5fdd8850f96177f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"text-center\" style=\"color: blue\">
    <p>
    <h1>
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "
    </h1>
</p>
</div>
<table class=\"table table-condensed\">

    <tbody align=\"left\">
        <tr>
            <th class=\"text-info col-sm-2\">Id</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            <td rowspan=\"9\"class=\"col-sm-3\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()))), "html", null, true);
        echo "\" class=\"img-responsive\"></td>
        </tr>
        <tr>
            <th class=\"text-info\">Titre</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">Description</th>
            <td class=\"text-justify\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">Etat</th>
            <td>
                ";
        // line 36
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 2)) {
            echo "<strong class=\"text-success str\">Public</strong>
                ";
        } elseif (($this->getAttribute(        // line 37
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 1)) {
            echo "<strong class=\"text-primary\">Enregistré</strong>
                ";
        } elseif (($this->getAttribute(        // line 38
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 0)) {
            echo " <strong class=\"text-danger\">Annulé</strong>
                ";
        }
        // line 40
        echo "            </td>
        </tr>
        <tr>
            <th class=\"text-info\">Theme</th>
            <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "theme", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">Type</th>
            <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">Date de Creation</th>
            <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">Horaire de Debut</th>
            <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">Horaire de Fin</th>
            <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">Fuseau Horaire</th>
            <td>GMT + ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fuseauHoraire", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">Adresse</th>
            <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ville", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codePostal", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pays", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>


<table class=\"table-responsive\" >

    <tbody align=\"right\">
    <th class=\"col-sm-6\">   
        <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"fa fa-2x fa-wrench text-warning\">
            ";
        // line 80
        echo "        </a>
    </th>
    <th class=\"text-danger btn-group-sm col-sm-6\">
        

        
";
        // line 86
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
          
        ";
        // line 89
        echo "    </th>
    ";
        // line 94
        echo "
    <th class=\"col-sm-6\">
        <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_search");
        echo "\" class=\"fa fa-2x fa-list-ul\">
            ";
        // line 98
        echo "        </a>

    </th>
    
</tbody>
</table>
<ul class=\"pager\">
    <li class=\"previous\"><a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_show", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) - 1))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous Event"), "html", null, true);
        echo "</a></li>
    <li class=\"next\"><a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_show", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) + 1))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next Event"), "html", null, true);
        echo "</a></li>
</ul>     
";
        
        $__internal_efabca21f03fd91db5473b0b849b8901dce54b196c488ce7f5fdd8850f96177f->leave($__internal_efabca21f03fd91db5473b0b849b8901dce54b196c488ce7f5fdd8850f96177f_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Events:admin_event_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 106,  233 => 105,  224 => 98,  220 => 96,  216 => 94,  213 => 89,  208 => 86,  200 => 80,  196 => 78,  177 => 68,  170 => 64,  163 => 60,  156 => 56,  149 => 52,  142 => 48,  135 => 44,  129 => 40,  124 => 38,  120 => 37,  116 => 36,  108 => 31,  101 => 27,  94 => 23,  90 => 22,  78 => 13,  73 => 10,  67 => 9,  57 => 7,  51 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OrionEventBundle::layout_admin.html.twig' %}

{% block module %}
{{ 'Events Management'|trans }}
{% endblock module %}
{% block operation %}
<i class=\"fa fa-fw fa-desktop\"></i> {{ 'Display'|trans }}
{% endblock operation %}
{% block body -%}
<div class=\"text-center\" style=\"color: blue\">
    <p>
    <h1>
            {{entity.titre}}
    </h1>
</p>
</div>
<table class=\"table table-condensed\">

    <tbody align=\"left\">
        <tr>
            <th class=\"text-info col-sm-2\">Id</th>
            <td>{{ entity.id }}</td>
            <td rowspan=\"9\"class=\"col-sm-3\"><img src=\"{{ asset('uploads/' ~ entity.path) }}\" class=\"img-responsive\"></td>
        </tr>
        <tr>
            <th class=\"text-info\">Titre</th>
            <td>{{ entity.titre }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">Description</th>
            <td class=\"text-justify\">{{ entity.description }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">Etat</th>
            <td>
                {% if entity.etat == 2 %}<strong class=\"text-success str\">Public</strong>
                {% elseif entity.etat == 1 %}<strong class=\"text-primary\">Enregistré</strong>
                {% elseif entity.etat ==0 %} <strong class=\"text-danger\">Annulé</strong>
                {% endif %}
            </td>
        </tr>
        <tr>
            <th class=\"text-info\">Theme</th>
            <td>{{ entity.theme }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">Type</th>
            <td>{{ entity.type }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">Date de Creation</th>
            <td>{{ entity.dateCreation|date('Y-m-d H:i:s') }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">Horaire de Debut</th>
            <td>{{ entity.horaireDebut|date('Y-m-d H:i:s') }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">Horaire de Fin</th>
            <td>{{ entity.HoraireFin|date('Y-m-d H:i:s') }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">Fuseau Horaire</th>
            <td>GMT + {{ entity.fuseauHoraire }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">Adresse</th>
            <td>{{ entity.adresse }}, {{ entity.ville }} {{ entity.codePostal }}, {{ entity.pays }}</td>
        </tr>
    </tbody>
</table>


<table class=\"table-responsive\" >

    <tbody align=\"right\">
    <th class=\"col-sm-6\">   
        <a href=\"{{ path('admin_event_edit', { 'id': entity.id }) }}\" class=\"fa fa-2x fa-wrench text-warning\">
            {#<button type=\"button\" class=\"btn btn-group-sm btn-default text-warning \">{{'Edit'|trans}}</button>#}
        </a>
    </th>
    <th class=\"text-danger btn-group-sm col-sm-6\">
        

        
{{ form(delete_form) }}
          
        {#{{ form_end(delete_form) }}#}
    </th>
    {#<th class=\"col-sm-6\">
    <a href=\"{{ path('admin_event_delete', { 'id': entity.id }) }}\" class=\"fa fa-2x fa-close text-danger\">
    </a>
    </th>#}

    <th class=\"col-sm-6\">
        <a href=\"{{ path('admin_event_search') }}\" class=\"fa fa-2x fa-list-ul\">
            {#<button type=\"button\" class=\"btn btn-group-sm btn-default\">Tous les Evenements</button>#}
        </a>

    </th>
    
</tbody>
</table>
<ul class=\"pager\">
    <li class=\"previous\"><a href=\"{{ path('admin_event_show', { 'id': entity.id - 1 }) }}\">{{'Previous Event'|trans}}</a></li>
    <li class=\"next\"><a href=\"{{ path('admin_event_show', { 'id': entity.id + 1 }) }}\">{{'Next Event'|trans}}</a></li>
</ul>     
{% endblock %}
", "OrionEventBundle:Admin_Events:admin_event_show.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Events/admin_event_show.html.twig");
    }
}
