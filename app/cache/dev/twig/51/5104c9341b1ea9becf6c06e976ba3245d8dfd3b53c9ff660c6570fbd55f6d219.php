<?php

/* DForumBundle:Admin:remove_category.html.twig */
class __TwigTemplate_76b791d5460ae9caadae15897fefd49891c0628606b1161948db4bc5ded05d68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DForumBundle::layout.html.twig", "DForumBundle:Admin:remove_category.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a1ad3282fee63ca7aa6bbd726a64dcb35c4675b68bbc17c4d1273e9a5ed975e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1ad3282fee63ca7aa6bbd726a64dcb35c4675b68bbc17c4d1273e9a5ed975e->enter($__internal_5a1ad3282fee63ca7aa6bbd726a64dcb35c4675b68bbc17c4d1273e9a5ed975e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DForumBundle:Admin:remove_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a1ad3282fee63ca7aa6bbd726a64dcb35c4675b68bbc17c4d1273e9a5ed975e->leave($__internal_5a1ad3282fee63ca7aa6bbd726a64dcb35c4675b68bbc17c4d1273e9a5ed975e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2349c85d026b2eded60acb2038552dbab933c27433eb18118f8d55a1547d73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2349c85d026b2eded60acb2038552dbab933c27433eb18118f8d55a1547d73e->enter($__internal_c2349c85d026b2eded60acb2038552dbab933c27433eb18118f8d55a1547d73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "new category";
        
        $__internal_c2349c85d026b2eded60acb2038552dbab933c27433eb18118f8d55a1547d73e->leave($__internal_c2349c85d026b2eded60acb2038552dbab933c27433eb18118f8d55a1547d73e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbfe057c317f32e8690df8af496c69a869918b2351838f913cbf4506ba615ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfe057c317f32e8690df8af496c69a869918b2351838f913cbf4506ba615ad9->enter($__internal_cbfe057c317f32e8690df8af496c69a869918b2351838f913cbf4506ba615ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cbfe057c317f32e8690df8af496c69a869918b2351838f913cbf4506ba615ad9->leave($__internal_cbfe057c317f32e8690df8af496c69a869918b2351838f913cbf4506ba615ad9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_36ad58c28af25f19a0cfd68b81879eb5b5695e7e49e264638797dd14bdf7a835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ad58c28af25f19a0cfd68b81879eb5b5695e7e49e264638797dd14bdf7a835->enter($__internal_36ad58c28af25f19a0cfd68b81879eb5b5695e7e49e264638797dd14bdf7a835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<hr />
<div class=\"col-md-6\">
  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.category.form.deletetitle"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
      <div class=\"form-group col-md-12\">
          ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "movedTo", array()), 'label', array("label" => "discutea.forum.category.form.movedto"));
        echo "
          ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "movedTo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"checkbox col-md-12\">
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "purge", array()), 'widget');
        echo "
          ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "purge", array()), 'label', array("label" => "discutea.forum.category.form.purge"));
        echo "
          
      </div>
          
      <div class=\"form-group col-md-12\">
        <br /><br />
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("discutea.forum.btn.submit"), "html", null, true);
        echo "</button>
      </div>
      ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
";
        
        $__internal_36ad58c28af25f19a0cfd68b81879eb5b5695e7e49e264638797dd14bdf7a835->leave($__internal_36ad58c28af25f19a0cfd68b81879eb5b5695e7e49e264638797dd14bdf7a835_prof);

    }

    // line 36
    public function block_js($context, array $blocks = array())
    {
        $__internal_cdb96ff4400d3b27558edf72609fa909f5045cb8b0a85ba1eaf26bbdc3da8fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb96ff4400d3b27558edf72609fa909f5045cb8b0a85ba1eaf26bbdc3da8fcf->enter($__internal_cdb96ff4400d3b27558edf72609fa909f5045cb8b0a85ba1eaf26bbdc3da8fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_cdb96ff4400d3b27558edf72609fa909f5045cb8b0a85ba1eaf26bbdc3da8fcf->leave($__internal_cdb96ff4400d3b27558edf72609fa909f5045cb8b0a85ba1eaf26bbdc3da8fcf_prof);

    }

    public function getTemplateName()
    {
        return "DForumBundle:Admin:remove_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 36,  109 => 28,  104 => 26,  95 => 20,  91 => 19,  85 => 16,  81 => 15,  76 => 13,  71 => 11,  66 => 8,  60 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
    <div class=\"panel-heading\">{{ 'discutea.forum.category.form.deletetitle'|trans }}</div>
    <div class=\"panel-body\">
      {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
      <div class=\"form-group col-md-12\">
          {{ form_label(form.movedTo, 'discutea.forum.category.form.movedto') }}
          {{ form_widget(form.movedTo, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"checkbox col-md-12\">
        {{ form_widget(form.purge) }}
          {{ form_label(form.purge, 'discutea.forum.category.form.purge') }}
          
      </div>
          
      <div class=\"form-group col-md-12\">
        <br /><br />
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">{{ 'discutea.forum.btn.submit'|trans }}</button>
      </div>
      {{ form_end(form) }}
    </div>
  </div>
</div>
<div class=\"clearfix\"></div>
 
{% endblock %}

{% block js %}{% endblock %}
", "DForumBundle:Admin:remove_category.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle/Resources/views/Admin/remove_category.html.twig");
    }
}
