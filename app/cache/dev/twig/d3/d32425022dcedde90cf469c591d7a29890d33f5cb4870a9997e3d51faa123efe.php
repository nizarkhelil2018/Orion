<?php

/* @OrionForum/Post/preview-post.html.twig */
class __TwigTemplate_3633d44c44842f16a211bfb23f2a6729f707027a22f94ef295a16d0273cd4aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39ce2b804ae5518be451cd75b3b04ce0b86832bb2c1812afb7c4352edc138965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ce2b804ae5518be451cd75b3b04ce0b86832bb2c1812afb7c4352edc138965->enter($__internal_39ce2b804ae5518be451cd75b3b04ce0b86832bb2c1812afb7c4352edc138965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionForum/Post/preview-post.html.twig"));

        // line 1
        echo "<div class=\"alert alert-danger text-center\" role=\"alert\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.warning.preview"), "html", null, true);
        echo "</div>

<li id=\"post-preview\" class=\"list-group-item topics\">
  <div class=\"row\">
    <div class=\"col-sm-2 text-center\">
      <p><strong>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["postpreview"]) ? $context["postpreview"] : $this->getContext($context, "postpreview")), "poster", array()), "username", array()), "html", null, true);
        echo "</strong></p>
    </div>
    <div class=\"col-sm-10\">
      <div class=\"raw\">
        <span class=\"small\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("orion.forum.on"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["postpreview"]) ? $context["postpreview"] : $this->getContext($context, "postpreview")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>
        <br /><br />
      </div>
              
        <div class=\"raw\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postpreview"]) ? $context["postpreview"] : $this->getContext($context, "postpreview")), "content", array()), "html", null, true);
        echo "</div>

    </div>
  </div>
</li>
";
        
        $__internal_39ce2b804ae5518be451cd75b3b04ce0b86832bb2c1812afb7c4352edc138965->leave($__internal_39ce2b804ae5518be451cd75b3b04ce0b86832bb2c1812afb7c4352edc138965_prof);

    }

    public function getTemplateName()
    {
        return "@OrionForum/Post/preview-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  38 => 10,  31 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"alert alert-danger text-center\" role=\"alert\">{{ 'orion.forum.warning.preview'|trans }}</div>

<li id=\"post-preview\" class=\"list-group-item topics\">
  <div class=\"row\">
    <div class=\"col-sm-2 text-center\">
      <p><strong>{{ postpreview.poster.username }}</strong></p>
    </div>
    <div class=\"col-sm-10\">
      <div class=\"raw\">
        <span class=\"small\">{{ 'orion.forum.on'|trans }} {{ postpreview.date|date(\"Y-m-d H:i:s\") }}</span>
        <br /><br />
      </div>
              
        <div class=\"raw\">{{ postpreview.content }}</div>

    </div>
  </div>
</li>
", "@OrionForum/Post/preview-post.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle\\Resources\\views\\Post\\preview-post.html.twig");
    }
}
