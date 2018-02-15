<?php

/* @OrionEvent/Admin_Billet/admin_billet_show.html.twig */
class __TwigTemplate_e2117a1d034c806def7fea54341b4d2fcb65c72e65fc670433393ad0fe767444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "@OrionEvent/Admin_Billet/admin_billet_show.html.twig", 1);
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
        $__internal_3e3b7696386c757ef288c62811cd654d74a34a6dda0bdc8fe9e99958dcfe55ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3b7696386c757ef288c62811cd654d74a34a6dda0bdc8fe9e99958dcfe55ec->enter($__internal_3e3b7696386c757ef288c62811cd654d74a34a6dda0bdc8fe9e99958dcfe55ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Admin_Billet/admin_billet_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e3b7696386c757ef288c62811cd654d74a34a6dda0bdc8fe9e99958dcfe55ec->leave($__internal_3e3b7696386c757ef288c62811cd654d74a34a6dda0bdc8fe9e99958dcfe55ec_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_2dc0a9a0a4558b7dc1643c18c7c7ab462fb3d90a70b108e0719ac22f8d6c62ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc0a9a0a4558b7dc1643c18c7c7ab462fb3d90a70b108e0719ac22f8d6c62ba->enter($__internal_2dc0a9a0a4558b7dc1643c18c7c7ab462fb3d90a70b108e0719ac22f8d6c62ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_2dc0a9a0a4558b7dc1643c18c7c7ab462fb3d90a70b108e0719ac22f8d6c62ba->leave($__internal_2dc0a9a0a4558b7dc1643c18c7c7ab462fb3d90a70b108e0719ac22f8d6c62ba_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_bc5a91d0f90eafd1b37d1c276084b4ed835c78ef6cb8aa37d40f4312ce07e511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5a91d0f90eafd1b37d1c276084b4ed835c78ef6cb8aa37d40f4312ce07e511->enter($__internal_bc5a91d0f90eafd1b37d1c276084b4ed835c78ef6cb8aa37d40f4312ce07e511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-fw fa-desktop\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display"), "html", null, true);
        echo "
";
        
        $__internal_bc5a91d0f90eafd1b37d1c276084b4ed835c78ef6cb8aa37d40f4312ce07e511->leave($__internal_bc5a91d0f90eafd1b37d1c276084b4ed835c78ef6cb8aa37d40f4312ce07e511_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d31c67165b1db4126f2bac105f9d9eff74118a56a756a967c6a8fe5636e5738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d31c67165b1db4126f2bac105f9d9eff74118a56a756a967c6a8fe5636e5738->enter($__internal_2d31c67165b1db4126f2bac105f9d9eff74118a56a756a967c6a8fe5636e5738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"text-center\" style=\"color: blue\">
        <p>
        <h1>
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
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

        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo "</td>
        </tr>
       

        <tr>
            <th class=\"text-info\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price"), "html", null, true);
        echo "</th>
            <td>";
        // line 33
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()) == 1)) {
            echo "<p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
            echo " <b>€</b></p>                                   
            ";
        } else {
            // line 34
            echo "<p class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free"), "html", null, true);
            echo "</p>                                    
            ";
        }
        // line 35
        echo "</td></td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number"), "html", null, true);
        echo "</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Waiting List"), "html", null, true);
        echo "</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "attente", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
        echo "</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "evenement", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th class=\"text-info\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "d/m/Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "H:i"), "html", null, true);
        echo "</td>
        </tr>

    </tbody>
</table>


<table class=\"table-responsive\" >

    <tbody align=\"right\">
    <th class=\"col-sm-3\">   
        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"btn btn-default fa fa-wrench\"> ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "</button>
        </a>
    </th>
    <th class=\"text-danger\">
        ";
        // line 67
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "

        <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_search");
        echo "\" style=\"color: red\">

        </a>           
        ";
        // line 72
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </th>

    <th class=\"col-sm-3\">
    </th>
    <th class=\"col-sm-3 text-center\">
        <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_search");
        echo "\">
            <button type=\"button\" class=\"btn btn-default fa fa-list\"> ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Tickets"), "html", null, true);
        echo "</button>
        </a>

    </th>
    <th>
        <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_new");
        echo "\" >                
            <button type=\"button\" class=\"btn btn-default fa fa-ticket \"> ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a Ticket"), "html", null, true);
        echo "</button>
        </a>
    </th>
</tbody>
</table>
<ul class=\"pager\">
    <li class=\"previous\"><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_show", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) - 1))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Privious Ticket"), "html", null, true);
        echo "</a></li>
    <li class=\"next\"><a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_show", array("id" => ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) + 1))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next Ticket"), "html", null, true);
        echo "</a></li>
</ul>

";
        
        $__internal_2d31c67165b1db4126f2bac105f9d9eff74118a56a756a967c6a8fe5636e5738->leave($__internal_2d31c67165b1db4126f2bac105f9d9eff74118a56a756a967c6a8fe5636e5738_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Admin_Billet/admin_billet_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 92,  240 => 91,  231 => 85,  227 => 84,  219 => 79,  215 => 78,  206 => 72,  200 => 69,  195 => 67,  188 => 63,  184 => 62,  166 => 51,  162 => 50,  156 => 47,  152 => 46,  146 => 43,  142 => 42,  136 => 39,  132 => 38,  127 => 35,  121 => 34,  114 => 33,  110 => 32,  102 => 27,  98 => 26,  91 => 22,  79 => 13,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    {{ 'Tickets Management'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-fw fa-desktop\"></i> {{ 'Display'|trans }}
{% endblock operation %}
{% block body -%}
    <div class=\"text-center\" style=\"color: blue\">
        <p>
        <h1>
            {{entity.libelle}}
        </h1>
    </p>
</div>
<table class=\"table table-condensed\">

    <tbody align=\"left\">
        <tr>
            <th class=\"text-info col-sm-2\">Id</th>
            <td>{{ entity.id }}</td>

        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Wording'|trans }}</th>
            <td>{{ entity.libelle }}</td>
        </tr>
       

        <tr>
            <th class=\"text-info\">{{ 'Price'|trans }}</th>
            <td>{% if entity.type == 1 %}<p class=\"text-danger\">{{ entity.prix }} <b>€</b></p>                                   
            {% else %}<p class=\"text-success\">{{ 'Free'|trans }}</p>                                    
            {% endif %}</td></td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Number'|trans }}</th>
            <td>{{ entity.nombre }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Waiting List'|trans }}</th>
            <td>{{ entity.attente }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Event'|trans }}</th>
            <td>{{ entity.evenement }}</td>
        </tr>
        <tr>
            <th class=\"text-info\">{{ 'Creation date'|trans }}</th>
            <td>{{ entity.dateCreation|date('d/m/Y') }} {{ 'at'|trans }} {{ entity.dateCreation|date('H:i') }}</td>
        </tr>

    </tbody>
</table>


<table class=\"table-responsive\" >

    <tbody align=\"right\">
    <th class=\"col-sm-3\">   
        <a href=\"{{ path('admin_billet_edit', { 'id': entity.id }) }}\">
            <button type=\"button\" class=\"btn btn-default fa fa-wrench\"> {{ 'Edit'|trans }}</button>
        </a>
    </th>
    <th class=\"text-danger\">
        {{ form_start(delete_form) }}

        <a href=\"{{ path('admin_billet_search') }}\" style=\"color: red\">

        </a>           
        {{ form_end(delete_form) }}
    </th>

    <th class=\"col-sm-3\">
    </th>
    <th class=\"col-sm-3 text-center\">
        <a href=\"{{ path('admin_billet_search') }}\">
            <button type=\"button\" class=\"btn btn-default fa fa-list\"> {{ 'All Tickets'|trans }}</button>
        </a>

    </th>
    <th>
        <a href=\"{{ path('admin_billet_new') }}\" >                
            <button type=\"button\" class=\"btn btn-default fa fa-ticket \"> {{ 'Create a Ticket'|trans }}</button>
        </a>
    </th>
</tbody>
</table>
<ul class=\"pager\">
    <li class=\"previous\"><a href=\"{{ path('admin_billet_show', { 'id': entity.id - 1 }) }}\">{{ 'Privious Ticket'|trans }}</a></li>
    <li class=\"next\"><a href=\"{{ path('admin_billet_show', { 'id': entity.id + 1 }) }}\">{{ 'Next Ticket'|trans }}</a></li>
</ul>

{% endblock %}
", "@OrionEvent/Admin_Billet/admin_billet_show.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Admin_Billet\\admin_billet_show.html.twig");
    }
}
