<?php

/* DForumBundle::Admin/forum.html.twig */
class __TwigTemplate_3a450042fef6843a029ed6e4690c7a65e9e2818987cac7cf5df19f67f5976d7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "DForumBundle::Admin/forum.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9166a70ae4419fd994cbb8ddb08a9a545da307d3e93a8723be61c6d70fea883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9166a70ae4419fd994cbb8ddb08a9a545da307d3e93a8723be61c6d70fea883->enter($__internal_a9166a70ae4419fd994cbb8ddb08a9a545da307d3e93a8723be61c6d70fea883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DForumBundle::Admin/forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9166a70ae4419fd994cbb8ddb08a9a545da307d3e93a8723be61c6d70fea883->leave($__internal_a9166a70ae4419fd994cbb8ddb08a9a545da307d3e93a8723be61c6d70fea883_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f6e6169ba61050ab726b80b78dc36540cb78424eedd919cea9391273bdd802e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6e6169ba61050ab726b80b78dc36540cb78424eedd919cea9391273bdd802e->enter($__internal_5f6e6169ba61050ab726b80b78dc36540cb78424eedd919cea9391273bdd802e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new category";
        
        $__internal_5f6e6169ba61050ab726b80b78dc36540cb78424eedd919cea9391273bdd802e->leave($__internal_5f6e6169ba61050ab726b80b78dc36540cb78424eedd919cea9391273bdd802e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dbc0db4296b43db995c54aebc7e7bd11b16b69840e6c35b19260b18b1e12c882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc0db4296b43db995c54aebc7e7bd11b16b69840e6c35b19260b18b1e12c882->enter($__internal_dbc0db4296b43db995c54aebc7e7bd11b16b69840e6c35b19260b18b1e12c882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dbc0db4296b43db995c54aebc7e7bd11b16b69840e6c35b19260b18b1e12c882->leave($__internal_dbc0db4296b43db995c54aebc7e7bd11b16b69840e6c35b19260b18b1e12c882_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4752711ea45d57ca4101f69c2dc9fb4addaea52637802b94431171ce5d4d40aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4752711ea45d57ca4101f69c2dc9fb4addaea52637802b94431171ce5d4d40aa->enter($__internal_4752711ea45d57ca4101f69c2dc9fb4addaea52637802b94431171ce5d4d40aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<hr />
<div class=\"col-md-6\">
  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.forum.form.title"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
      <div class=\"form-group col-md-12\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"form-group col-md-12\">
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"form-group col-md-12\">
        <div class=\"col-md-8\">
        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-4\">
          ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label', array("label" => "discutea.forum.position"));
        echo "
          ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>       
      </div>
      <div class=\"form-group col-md-12\">
        <button type=\"submit\" class=\"btn btn-success fa fa-check\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.btn.submit"), "html", null, true);
        echo "</button>
      </div>
      ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
";
        
        $__internal_4752711ea45d57ca4101f69c2dc9fb4addaea52637802b94431171ce5d4d40aa->leave($__internal_4752711ea45d57ca4101f69c2dc9fb4addaea52637802b94431171ce5d4d40aa_prof);

    }

    public function getTemplateName()
    {
        return "DForumBundle::Admin/forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  123 => 34,  116 => 30,  112 => 29,  106 => 26,  102 => 25,  95 => 21,  91 => 20,  85 => 17,  81 => 16,  76 => 14,  71 => 12,  65 => 8,  59 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DForumBundle::layout.html.twig\" %}

{% block title %}new category{% endblock %}

{% block stylesheets %}{% endblock %}

{% block body %}

<hr />
<div class=\"col-md-6\">
  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">{{ 'discutea.forum.forum.form.title'|trans }}</div>
    <div class=\"panel-body\">
      {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
      <div class=\"form-group col-md-12\">
        {{ form_label(form.name) }}
        {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"form-group col-md-12\">
        {{ form_label(form.description) }}
        {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"form-group col-md-12\">
        <div class=\"col-md-8\">
        {{ form_label(form.category) }}
        {{ form_widget(form.category, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col-md-4\">
          {{ form_label(form.position, 'discutea.forum.position') }}
          {{ form_widget(form.position, {'attr': {'class': 'form-control'}}) }}
        </div>       
      </div>
      <div class=\"form-group col-md-12\">
        <button type=\"submit\" class=\"btn btn-success fa fa-check\">{{ 'discutea.forum.btn.submit'|trans }}</button>
      </div>
      {{ form_end(form) }}
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
{% endblock %}
", "DForumBundle::Admin/forum.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle/Resources/views/Admin/forum.html.twig");
    }
}
