<?php

/* base.html.twig */
class __TwigTemplate_b596735b00017c1c1b07620c1cb3ac9fb0b788f76b55beee83b5b920b6af9b6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86336ce39c2d0f58b1fe1e204e0beee6874a284876d46e99bb566a4efb4dd4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86336ce39c2d0f58b1fe1e204e0beee6874a284876d46e99bb566a4efb4dd4c3->enter($__internal_86336ce39c2d0f58b1fe1e204e0beee6874a284876d46e99bb566a4efb4dd4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_86336ce39c2d0f58b1fe1e204e0beee6874a284876d46e99bb566a4efb4dd4c3->leave($__internal_86336ce39c2d0f58b1fe1e204e0beee6874a284876d46e99bb566a4efb4dd4c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d327e7374ee6b3bbae1740bba495b23dafe3f384f5ba4fab1bb5913f46604b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d327e7374ee6b3bbae1740bba495b23dafe3f384f5ba4fab1bb5913f46604b1->enter($__internal_2d327e7374ee6b3bbae1740bba495b23dafe3f384f5ba4fab1bb5913f46604b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2d327e7374ee6b3bbae1740bba495b23dafe3f384f5ba4fab1bb5913f46604b1->leave($__internal_2d327e7374ee6b3bbae1740bba495b23dafe3f384f5ba4fab1bb5913f46604b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c4e770050b5358a1c4daf5b1e194693dcbd9f39fd29f8b41bd459d1160e72eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4e770050b5358a1c4daf5b1e194693dcbd9f39fd29f8b41bd459d1160e72eb->enter($__internal_5c4e770050b5358a1c4daf5b1e194693dcbd9f39fd29f8b41bd459d1160e72eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5c4e770050b5358a1c4daf5b1e194693dcbd9f39fd29f8b41bd459d1160e72eb->leave($__internal_5c4e770050b5358a1c4daf5b1e194693dcbd9f39fd29f8b41bd459d1160e72eb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_646ff62013ee442fc8dcbf59ec871cf62442b20b9ae5cf5db31c8a5bf25dc207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646ff62013ee442fc8dcbf59ec871cf62442b20b9ae5cf5db31c8a5bf25dc207->enter($__internal_646ff62013ee442fc8dcbf59ec871cf62442b20b9ae5cf5db31c8a5bf25dc207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_646ff62013ee442fc8dcbf59ec871cf62442b20b9ae5cf5db31c8a5bf25dc207->leave($__internal_646ff62013ee442fc8dcbf59ec871cf62442b20b9ae5cf5db31c8a5bf25dc207_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60571f52f85da4fa77ca83a3244e3b57cdd8c5e999a644f7148aa9c9429ebb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60571f52f85da4fa77ca83a3244e3b57cdd8c5e999a644f7148aa9c9429ebb07->enter($__internal_60571f52f85da4fa77ca83a3244e3b57cdd8c5e999a644f7148aa9c9429ebb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_60571f52f85da4fa77ca83a3244e3b57cdd8c5e999a644f7148aa9c9429ebb07->leave($__internal_60571f52f85da4fa77ca83a3244e3b57cdd8c5e999a644f7148aa9c9429ebb07_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\views\\base.html.twig");
    }
}
