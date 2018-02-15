<?php

/* OrionEventBundle:Admin_Events:admin_event_edit_Etat.html.twig */
class __TwigTemplate_b9aeead17b182793420ada0d0ecb7a76b93dc58e2c1782a0ea49bfe3750746cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Admin_Events:admin_event_edit_Etat.html.twig", 1);
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
        $__internal_c10694b0b89ed94446a9417c06a2b6cd00c69d83afb1c8d7657dc80914fb1105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10694b0b89ed94446a9417c06a2b6cd00c69d83afb1c8d7657dc80914fb1105->enter($__internal_c10694b0b89ed94446a9417c06a2b6cd00c69d83afb1c8d7657dc80914fb1105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Admin_Events:admin_event_edit_Etat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c10694b0b89ed94446a9417c06a2b6cd00c69d83afb1c8d7657dc80914fb1105->leave($__internal_c10694b0b89ed94446a9417c06a2b6cd00c69d83afb1c8d7657dc80914fb1105_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_b7995b3b18e80dad28d37ffb6e14f5fcdc523f1c0d052d6246b3beaf898e80af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7995b3b18e80dad28d37ffb6e14f5fcdc523f1c0d052d6246b3beaf898e80af->enter($__internal_b7995b3b18e80dad28d37ffb6e14f5fcdc523f1c0d052d6246b3beaf898e80af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "
";
        
        $__internal_b7995b3b18e80dad28d37ffb6e14f5fcdc523f1c0d052d6246b3beaf898e80af->leave($__internal_b7995b3b18e80dad28d37ffb6e14f5fcdc523f1c0d052d6246b3beaf898e80af_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_d349cb0d29133bebaf97551321985b179857c5ead02639a7a5693dd6f1232b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d349cb0d29133bebaf97551321985b179857c5ead02639a7a5693dd6f1232b7c->enter($__internal_d349cb0d29133bebaf97551321985b179857c5ead02639a7a5693dd6f1232b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-dashboard\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State Edit"), "html", null, true);
        echo "
";
        
        $__internal_d349cb0d29133bebaf97551321985b179857c5ead02639a7a5693dd6f1232b7c->leave($__internal_d349cb0d29133bebaf97551321985b179857c5ead02639a7a5693dd6f1232b7c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_04cc041d995ba357f80f2e3f7146bd6c8fbb965ffc2649131eb2c309b221d040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cc041d995ba357f80f2e3f7146bd6c8fbb965ffc2649131eb2c309b221d040->enter($__internal_04cc041d995ba357f80f2e3f7146bd6c8fbb965ffc2649131eb2c309b221d040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div >

        <h1>
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State Edit"), "html", null, true);
        echo " <p class=\"text-center\" style=\"color: blue\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</p>
        </h1>

    </div>
    <table class=\"table table-condensed\">

        <tbody align=\"left\">
            <tr>
                <th class=\"text-info col-sm-2\">Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>

            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "html", null, true);
        echo "</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</th>
                <td class=\"text-justify\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("State"), "html", null, true);
        echo "</th>
                <td>
                    ";
        // line 36
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 2)) {
            echo "<p class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Public"), "html", null, true);
            echo "</p>
                    ";
        } elseif (($this->getAttribute(        // line 37
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 1)) {
            echo "<p class=\"text-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registred"), "html", null, true);
            echo "</p>
                    ";
        } elseif (($this->getAttribute(        // line 38
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()) == 0)) {
            echo " <p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancelled"), "html", null, true);
            echo "</p>
                    ";
        }
        // line 40
        echo "                </td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme"), "html", null, true);
        echo "</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "theme", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starting Schedule"), "html", null, true);
        echo "</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaireDebut", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ending Schedule"), "html", null, true);
        echo "</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "HoraireFin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class=\"text-info\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time zone"), "html", null, true);
        echo "</th>
                <td>GMT + ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fuseauHoraire", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>


    <table class=\"table-responsive\" >

        <tbody align=\"right\">



        <th>
            <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_publish", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" >                
                <button type=\"button\" class=\"btn btn-success\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Publish"), "html", null, true);
        echo "</button>
            </a>        
        </th>
        <th>
            <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_hide", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                <button type=\"button\" class=\"btn btn-warning\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hide"), "html", null, true);
        echo "</button>
            </a> 
        </th>
        <th>
            <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_cancel", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                <button type=\"button\" class=\"btn btn-danger\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>
            </a>
        </th>


        <th> 


            <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                <button type=\"button\" class=\"btn btn-default\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "</button>
            </a>
        </th>
        <th class=\"col-sm-3 text-center\">
            <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_search");
        echo "\">
                <button type=\"button\" class=\"btn btn-info\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Events"), "html", null, true);
        echo "</button>
            </a>

        </th>

    </tbody>
</table>
";
        
        $__internal_04cc041d995ba357f80f2e3f7146bd6c8fbb965ffc2649131eb2c309b221d040->leave($__internal_04cc041d995ba357f80f2e3f7146bd6c8fbb965ffc2649131eb2c309b221d040_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Admin_Events:admin_event_edit_Etat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 102,  267 => 101,  260 => 97,  256 => 96,  245 => 88,  241 => 87,  234 => 83,  230 => 82,  223 => 78,  219 => 77,  203 => 64,  199 => 63,  193 => 60,  189 => 59,  183 => 56,  179 => 55,  173 => 52,  169 => 51,  163 => 48,  159 => 47,  153 => 44,  149 => 43,  144 => 40,  137 => 38,  131 => 37,  125 => 36,  120 => 34,  114 => 31,  110 => 30,  104 => 27,  100 => 26,  93 => 22,  79 => 13,  74 => 10,  68 => 8,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
    <i class=\"fa fa-dashboard\"></i>{{ 'State Edit'|trans }}
{% endblock operation %}
{% block body -%}  

    <div >

        <h1>
            {{ 'State Edit'|trans }} <p class=\"text-center\" style=\"color: blue\">{{entity.titre}}</p>
        </h1>

    </div>
    <table class=\"table table-condensed\">

        <tbody align=\"left\">
            <tr>
                <th class=\"text-info col-sm-2\">Id</th>
                <td>{{ entity.id }}</td>

            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Title'|trans }}</th>
                <td>{{ entity.titre }}</td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Description'|trans }}</th>
                <td class=\"text-justify\">{{ entity.description }}</td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'State'|trans }}</th>
                <td>
                    {% if entity.etat == 2 %}<p class=\"text-success\">{{ 'Public'|trans }}</p>
                    {% elseif entity.etat == 1 %}<p class=\"text-primary\">{{ 'Registred'|trans }}</p>
                    {% elseif entity.etat ==0 %} <p class=\"text-danger\">{{ 'Cancelled'|trans }}</p>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Theme'|trans }}</th>
                <td>{{ entity.theme }}</td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Type'|trans }}</th>
                <td>{{ entity.type }}</td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Creation date'|trans }}</th>
                <td>{{ entity.dateCreation|date('Y-m-d H:i:s') }}</td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Starting Schedule'|trans }}</th>
                <td>{{ entity.horaireDebut|date('Y-m-d H:i:s') }}</td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Ending Schedule'|trans }}</th>
                <td>{{ entity.HoraireFin|date('Y-m-d H:i:s') }}</td>
            </tr>
            <tr>
                <th class=\"text-info\">{{ 'Time zone'|trans }}</th>
                <td>GMT + {{ entity.fuseauHoraire }}</td>
            </tr>
        </tbody>
    </table>


    <table class=\"table-responsive\" >

        <tbody align=\"right\">



        <th>
            <a href=\"{{ path('admin_event_publish', { 'id': entity.id }) }}\" >                
                <button type=\"button\" class=\"btn btn-success\">{{ 'Publish'|trans }}</button>
            </a>        
        </th>
        <th>
            <a href=\"{{ path('admin_event_hide', { 'id': entity.id }) }}\">
                <button type=\"button\" class=\"btn btn-warning\">{{ 'Hide'|trans }}</button>
            </a> 
        </th>
        <th>
            <a href=\"{{ path('admin_event_cancel', { 'id': entity.id }) }}\">
                <button type=\"button\" class=\"btn btn-danger\">{{ 'Cancel'|trans }}</button>
            </a>
        </th>


        <th> 


            <a href=\"{{ path('admin_event_edit', { 'id': entity.id }) }}\">
                <button type=\"button\" class=\"btn btn-default\">{{ 'Edit'|trans }}</button>
            </a>
        </th>
        <th class=\"col-sm-3 text-center\">
            <a href=\"{{ path('admin_event_search') }}\">
                <button type=\"button\" class=\"btn btn-info\">{{ 'All Events'|trans }}</button>
            </a>

        </th>

    </tbody>
</table>
{% endblock %}
", "OrionEventBundle:Admin_Events:admin_event_edit_Etat.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Admin_Events/admin_event_edit_Etat.html.twig");
    }
}
