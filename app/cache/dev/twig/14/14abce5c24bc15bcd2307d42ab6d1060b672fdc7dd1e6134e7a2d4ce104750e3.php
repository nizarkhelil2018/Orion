<?php

/* @OrionEvent/User_Billet/user_billet_edit.html.twig */
class __TwigTemplate_b26468407227d45ecb24a4342651e1ea2537055450d4394b9e888db0daa80170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "@OrionEvent/User_Billet/user_billet_edit.html.twig", 2);
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
        $__internal_2d7979d100ba94116fe4938b2de419f37b994699a51aa09742c3a60408ba3765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7979d100ba94116fe4938b2de419f37b994699a51aa09742c3a60408ba3765->enter($__internal_2d7979d100ba94116fe4938b2de419f37b994699a51aa09742c3a60408ba3765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/User_Billet/user_billet_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d7979d100ba94116fe4938b2de419f37b994699a51aa09742c3a60408ba3765->leave($__internal_2d7979d100ba94116fe4938b2de419f37b994699a51aa09742c3a60408ba3765_prof);

    }

    // line 3
    public function block_module($context, array $blocks = array())
    {
        $__internal_30492e9a248498c827ffe4206e0f6c4a50c9d0fc2350f30f771dffa68e387f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30492e9a248498c827ffe4206e0f6c4a50c9d0fc2350f30f771dffa68e387f75->enter($__internal_30492e9a248498c827ffe4206e0f6c4a50c9d0fc2350f30f771dffa68e387f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "
";
        
        $__internal_30492e9a248498c827ffe4206e0f6c4a50c9d0fc2350f30f771dffa68e387f75->leave($__internal_30492e9a248498c827ffe4206e0f6c4a50c9d0fc2350f30f771dffa68e387f75_prof);

    }

    // line 6
    public function block_operation($context, array $blocks = array())
    {
        $__internal_e68700df3f5d0bab5f5d5a673df2578fd0948cf3ea95b766db21175682ce1c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68700df3f5d0bab5f5d5a673df2578fd0948cf3ea95b766db21175682ce1c43->enter($__internal_e68700df3f5d0bab5f5d5a673df2578fd0948cf3ea95b766db21175682ce1c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 7
        echo "    <i class=\"fa fa-fw fa-wrench\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "
";
        
        $__internal_e68700df3f5d0bab5f5d5a673df2578fd0948cf3ea95b766db21175682ce1c43->leave($__internal_e68700df3f5d0bab5f5d5a673df2578fd0948cf3ea95b766db21175682ce1c43_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6fefbe363f0bcc65ac0a10031a3539897e15a13d1e6a9f2eef1e1db0d7a9b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fefbe363f0bcc65ac0a10031a3539897e15a13d1e6a9f2eef1e1db0d7a9b15->enter($__internal_f6fefbe363f0bcc65ac0a10031a3539897e15a13d1e6a9f2eef1e1db0d7a9b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo " : </h3>
    <div >
        <h2 class=\"text-center\" style=\"color: blue\"><b>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Event"), "html", null, true);
        echo ": </b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "evenement", array()), "html", null, true);
        echo "</h2></Br>
    <h4 class=\"text-center text-aqua \" ><b class=\"text-bold\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket"), "html", null, true);
        echo ": </b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array()), "html", null, true);
        echo "</h4>
</div>
    <table class=\"table-responsive\" >        
       
        <form class=\"well\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
            <table class=\"table table-condensed\">
                <tr>                   
                    <th class=\"col-sm-3\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wording"), "html", null, true);
        echo "</th>
                    <td>";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libelle", array()), 'widget');
        echo " </td>
                </tr>                
                <tr>                   
                    <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type"), "html", null, true);
        echo "</th>
                    <td class=\"col-sm-9\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "type", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price"), "html", null, true);
        echo "</th>
                    <td>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prix", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number"), "html", null, true);
        echo "</th>
                    <td>";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget');
        echo " </td>
                </tr>
                <tr>                   
                    <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Waiting List"), "html", null, true);
        echo "</th>
                    <td>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "attente", array()), 'widget');
        echo " </td>
                </tr>   
                
                <tr>                   
                    <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Creation date"), "html", null, true);
        echo "</th>
                    <td>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCreation", array()), 'widget');
        echo " </td>
                </tr>
                <input type=\"hidden\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "\">

            </table>
            <table>
                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "
                <th class=\"col-sm-3\">   
                    <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_search");
        echo "\">
                        <button type=\"submit\" class=\"btn btn-success\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo "</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_search");
        echo "\">
                <button type=\"button\" class=\"btn btn-group-sm\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Tickets"), "html", null, true);
        echo "</button>
            </a>
        </th>
        <th>
            <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"text-danger\">
                ";
        // line 64
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
            </a>
        </th>
    </table>
";
        
        $__internal_f6fefbe363f0bcc65ac0a10031a3539897e15a13d1e6a9f2eef1e1db0d7a9b15->leave($__internal_f6fefbe363f0bcc65ac0a10031a3539897e15a13d1e6a9f2eef1e1db0d7a9b15_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/User_Billet/user_billet_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 64,  200 => 63,  193 => 59,  189 => 58,  180 => 52,  176 => 51,  171 => 49,  164 => 45,  159 => 43,  155 => 42,  148 => 38,  144 => 37,  138 => 34,  134 => 33,  128 => 30,  124 => 29,  118 => 26,  114 => 25,  108 => 22,  104 => 21,  95 => 17,  86 => 13,  80 => 12,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'OrionEventBundle::layout_user.html.twig' %}
{% block module %}
    {{ 'Tickets Management'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-fw fa-wrench\"></i> {{ 'Edit'|trans }}
{% endblock operation %}
{% block body -%}  
    <h3>{{ 'Update'|trans }} : </h3>
    <div >
        <h2 class=\"text-center\" style=\"color: blue\"><b>{{ 'Event'|trans }}: </b>{{entity.evenement}}</h2></Br>
    <h4 class=\"text-center text-aqua \" ><b class=\"text-bold\">{{ 'Ticket'|trans }}: </b>{{entity.libelle}}</h4>
</div>
    <table class=\"table-responsive\" >        
       
        <form class=\"well\" action=\"{{ path('user_billet_edit', { 'id': entity.id }) }}\" method=\"post\" {{ form_enctype(edit_form) }}>
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
            <table class=\"table table-condensed\">
                <tr>                   
                    <th class=\"col-sm-3\">{{ 'Wording'|trans }}</th>
                    <td>{{ form_widget(edit_form.libelle) }} </td>
                </tr>                
                <tr>                   
                    <th>{{ 'Type'|trans }}</th>
                    <td class=\"col-sm-9\">{{ form_widget(edit_form.type) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'Price'|trans }}</th>
                    <td>{{ form_widget(edit_form.prix) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'Number'|trans }}</th>
                    <td>{{ form_widget(edit_form.nombre) }} </td>
                </tr>
                <tr>                   
                    <th>{{ 'Waiting List'|trans }}</th>
                    <td>{{ form_widget(edit_form.attente) }} </td>
                </tr>   
                
                <tr>                   
                    <th>{{ 'Creation date'|trans }}</th>
                    <td>{{ form_widget(edit_form.dateCreation) }} </td>
                </tr>
                <input type=\"hidden\" value=\"{{ entity.dateCreation|date('Y-m-d H:i:s') }}\">

            </table>
            <table>
                {{ form_widget(edit_form._token) }}
                <th class=\"col-sm-3\">   
                    <a href=\"{{ path('user_billet_search') }}\">
                        <button type=\"submit\" class=\"btn btn-success\">{{ 'Update'|trans }}</button>
                    </a>
                </th>
        </form>

        <th>
            <a href=\"{{ path('user_billet_search') }}\">
                <button type=\"button\" class=\"btn btn-group-sm\">{{ 'All Tickets'|trans }}</button>
            </a>
        </th>
        <th>
            <a href=\"{{ path('user_billet_delete', { 'id': entity.id }) }}\" class=\"text-danger\">
                {{ form(delete_form) }}
            </a>
        </th>
    </table>
{% endblock %}
", "@OrionEvent/User_Billet/user_billet_edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\User_Billet\\user_billet_edit.html.twig");
    }
}
