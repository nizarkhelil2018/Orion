<?php

/* DForumBundle::layout.html.twig */
class __TwigTemplate_e0a3ac810c210aff6a00dc5890a89e3eec120fa259d18d71f5bedbbc0bf23236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'module' => array($this, 'block_module'),
            'operation' => array($this, 'block_operation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab58009e36ad84241ca6ed622187afc4f450ea8d309cb9d3e33db2861f9e342a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab58009e36ad84241ca6ed622187afc4f450ea8d309cb9d3e33db2861f9e342a->enter($__internal_ab58009e36ad84241ca6ed622187afc4f450ea8d309cb9d3e33db2861f9e342a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DForumBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>Orion | Blank Page</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.6 -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Font Awesome -->        
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Ionicons -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Theme style -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    </head>
    ";
        // line 23
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "    <body class=\"hold-transition skin-blue-light sidebar-mini\">
    ";
        } else {
            // line 26
            echo "    <body class=\"hold-transition skin-blue-light sidebar-collapse \">    
    ";
        }
        // line 28
        echo "   ";
        // line 29
        echo "        <!-- Site wrapper -->
        <div class=\"wrapper\">
            <header class=\"main-header\">
                <!-- Logo -->
               
                <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_event_home");
        echo "\" class=\"logo\">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class=\"logo-mini\"><b>O</b>rion</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class=\"logo-lg\"><b>ORION</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class=\"navbar navbar-static-top\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <!-- Messages: style can be found in dropdown.less-->
                            
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\" />
                                    ";
        // line 58
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 59
            echo "                                    <span class=\"hidden-xs\"> 
                                        ";
            // line 60
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo "</span></a>
                                        ";
        } else {
            // line 62
            echo "                                Annonyme
                                        ";
        }
        // line 63
        echo "                                
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">                                        
                                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>    
                                        <p>
                                            ";
        // line 69
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 70
            echo "                                    <span class=\"hidden-xs\"> 
                                        ";
            // line 71
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo "</span></a>
                                        ";
        } else {
            // line 73
            echo "                                Annonyme
                                        ";
        }
        // line 74
        echo " 
                                        
                                        
                                    </li>
                                    <!-- Menu Body -->
                                    
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        <div class=\"pull-left\">
                                            <a href=\"#\" class=\"btn btn-default btn-flat\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
        echo "</a>
                                        </div>
                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign out"), "html", null, true);
        echo "</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class=\"main-sidebar\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <!-- Sidebar user panel -->
                    <div class=\"user-panel\">
                        <div class=\"pull-left image\">
                            <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\" />                            
                        </div>
                        <div class=\"pull-left info\">
                            <p>";
        // line 112
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 113
            echo "                                    <span class=\"hidden-xs\"> 
                                        ";
            // line 114
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo "</span></a>
                                        ";
        } else {
            // line 116
            echo "                                Annonyme
                                        ";
        }
        // line 117
        echo " </p>
                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Online"), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                            <span class=\"input-group-btn\">
                                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">Orion</li>
                        ";
        // line 134
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 135
            echo "                        <li class=\"treeview\">
                            <a href=\"Multilevel\">
                                <i class=\"fa fa-lg fa-navicon text-red\"></i> <span>Orion Event</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <!------------------------------Gestion des Evénements-------------------------->
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-th fa-lg text-aqua\"></i>
                                        <span>";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
            echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>

                                    <ul class=\"treeview-menu\">

                                        <li><a href=\"";
            // line 151
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_index");
            echo "\"><i class=\"fa fa-list\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Events"), "html", null, true);
            echo "</a></li>
                                        <li><a href=\"";
            // line 152
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_search");
            echo "\"><i class=\"fa fa-search\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Search"), "html", null, true);
            echo "</a></li>
                                        <li><a href=\"";
            // line 153
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_new");
            echo "\"><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create an Event"), "html", null, true);
            echo "</a></li> 


                                    </ul>
                                </li>
                                <!------------------------------Gestion des Thèmes-------------------------->    
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-th-large fa-lg text-purple\"></i>
                                        <span>";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Themes Management"), "html", null, true);
            echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"";
            // line 166
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_index");
            echo "\"><i class=\"fa fa-list\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Themes"), "html", null, true);
            echo "</a></li>
                                        <li><a href=\"";
            // line 167
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_search");
            echo "\"><i class=\"fa fa-search\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Themes Search"), "html", null, true);
            echo "</a></li>
                                        <li><a href=\"";
            // line 168
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_new");
            echo "\"><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a Theme"), "html", null, true);
            echo "</a></li>             
                                    </ul>
                                </li>
                                <!------------------------------Gestion des Types-------------------------->
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-th-list fa-lg text-green\"></i>
                                        <span>";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Types Management"), "html", null, true);
            echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"";
            // line 179
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_index");
            echo "\"><i class=\"fa fa-list\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Types"), "html", null, true);
            echo "</a></li>
                                        <li><a href=\"";
            // line 180
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_search");
            echo "\"><i class=\"fa fa-search\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Types Search"), "html", null, true);
            echo "</a></li>
                                        <li><a href=\"";
            // line 181
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_new");
            echo "\"><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a Type"), "html", null, true);
            echo "</a></li>     
                                    </ul>
                                </li>
                                <!------------------------------Gestion des Billets-------------------------->
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-ticket fa-lg text-orange\"></i>
                                        <span>";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
            echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"";
            // line 192
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_index");
            echo "\"><i class=\"fa fa-list\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Tickets"), "html", null, true);
            echo "</a></li>
                                        <li><a href=\"";
            // line 193
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_search");
            echo "\"><i class=\"fa fa-search\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Search"), "html", null, true);
            echo "</a></li>
                                        <li><a href=\"";
            // line 194
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_new");
            echo "\"><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a Ticket"), "html", null, true);
            echo "</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                         <!-------------------Orion Forum ------------------>
                        <li class=\"treeview\">
                            <a href=\"";
            // line 202
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_admin_dashboard");
            echo "\">
                                <i class=\"fa fa-lg fa-indent text-green\"></i> <span>Orion Forum</span>
                               ";
            // line 205
            echo "                            </a>
                       </li>
                        ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 208
            echo "                        <li class=\"treeview\">
                            <a href=\"Multilevel\">
                                <i class=\"fa fa-lg fa-navicon text-red\"></i> <span>Orion Event</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <!------------------------------Gestion des Evénements-------------------------->
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-th fa text-aqua\"></i>
                                        <span>";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
            echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>

                                    <ul class=\"treeview-menu\">   
                                <li><a href=\"";
            // line 223
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_event_index");
            echo "\"><i class=\"fa fa-list\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Events"), "html", null, true);
            echo "</a></li>
                                <li><a href=\"";
            // line 224
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_event_search");
            echo "\"><i class=\"fa fa-search\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Search"), "html", null, true);
            echo "</a></li>
                                                                
                            </ul>
                                </li>
                                <!------------------------------Mes Evénements-------------------------->    
                                <li>
                                    <a href=\"#\">
                                <i class=\"fa fa-th-large fa-lg text-navy\"></i>
                                <span> ";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Events"), "html", null, true);
            echo "</span>
                                <span class=\"fa fa-angle-left pull-right\"></span>
                            </a>
                                    <ul class=\"treeview-menu\">   
                                <li><a href=\"";
            // line 236
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_all");
            echo "\"><i class=\"fa fa-list text-lime\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All My Events"), "html", null, true);
            echo "</a></li>
                                <li><a href=\"";
            // line 237
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_published");
            echo "\"><i class=\"fa fa-check text-success\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Public Events"), "html", null, true);
            echo "</a></li>
                                <li><a href=\"";
            // line 238
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_cancelled");
            echo "\"><i class=\"fa fa-remove text-danger\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Cancelled Events"), "html", null, true);
            echo "</a></li>
                                <li><a href=\"";
            // line 239
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_registred");
            echo "\"><i class=\"fa fa-save text-blue\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Registred Events"), "html", null, true);
            echo "</a></li>
                                <li><a href=\"";
            // line 240
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_search");
            echo "\"><i class=\"fa fa-search text-orange\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Search"), "html", null, true);
            echo "</a></li>
                                <li><a href=\"";
            // line 241
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_new");
            echo "\"><i class=\"fa fa-plus text-gray\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create an Event"), "html", null, true);
            echo "</a></li>                                
                            </ul>
                                </li>
  
                                <!------------------------------Mes Billets-------------------------->
                                <li>
                                    <a href=\"#\">
                                <i class=\"fa fa-ticket fa-lg text-orange\"></i>
                                <span>";
            // line 249
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Tickets"), "html", null, true);
            echo "</span>
                                <span class=\"fa fa-angle-left pull-right\"></span>
                            </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"";
            // line 253
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_index");
            echo "\"><i class=\"fa fa-list text-lime\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All My Tickets"), "html", null, true);
            echo "</a></li>
                                <li><a href=\"";
            // line 254
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_search");
            echo "\"><i class=\"fa fa-search text-orange\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Search"), "html", null, true);
            echo "</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-plus\"></i> ";
            // line 255
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a Ticket"), "html", null, true);
            echo "</a></li>
                                    </ul>
                                </li>
                                <!------------------------------Mes Réservations-------------------------->
                                <li>
                                    <a href=\"";
            // line 260
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_my_reservation");
            echo "\">
                                        <i class=\"fa fa-shopping-cart fa-lg text-gray\"></i>
                                        <span>";
            // line 262
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Reservations"), "html", null, true);
            echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>

                                </li>
                                
                                
                            </ul>
                        </li>
                         <!-------------------Orion Forum ------------------>
                        <li>
                            <a href=\" ";
            // line 273
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_homepage");
            echo "\">
                               
                                <i class=\"fa fa-lg fa-indent text-green\"></i> <span>Orion Forum</span>
                               ";
            // line 277
            echo "                            </a>
                        </li>
                        
                        ";
        } else {
            // line 281
            echo "                        <li class=\"treeview\">
                            <a href=\"";
            // line 282
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orion_event_home");
            echo "\">
                                <i class=\"fa fa-lg fa-navicon text-red\"></i> <span>Orion Event</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                        </li>
                        
                       <li class=\"treeview\">
                            <a href=\"";
            // line 289
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_admin_dashboard");
            echo "\">
                                <i class=\"fa fa-lg fa-indent text-green\"></i> <span>Orion Forum</span>
                               ";
            // line 292
            echo "                            </a>
                       </li>
                        
                        ";
        }
        // line 296
        echo "                        
                        
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                   
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
    
                </section>

                <!-- Main content -->
                <section class=\"content\">

                    <!-- Default box -->
                    <div class=\"box\">
                        <div class=\"box-body\">
                            <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            ";
        // line 322
        $this->displayBlock('module', $context, $blocks);
        // line 324
        echo "                            
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li class=\"active\">
                                ";
        // line 328
        $this->displayBlock('operation', $context, $blocks);
        // line 330
        echo "                  
                            </li>
                        </ol>
                    </div>
                </div>
                            ";
        // line 335
        $this->displayBlock('body', $context, $blocks);
        // line 337
        echo "                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class=\"main-footer\">
                <div class=\"pull-right hidden-xs\">
                    <b>Esprit TECH</b>
                </div>
                <strong>";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copyright © 2015-2016"), "html", null, true);
        echo " <a href=\"http://orion.com\">Orion</a>.</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All rights are reserved."), "html", null, true);
        echo "
            </footer>

            <!-- Control Sidebar -->


            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class=\"control-sidebar-bg\"></div>
        </div>
        <!-- ./wrapper -->
        <!-- jQuery 2.2.0 -->
        <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- SlimScroll -->
        <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_ab58009e36ad84241ca6ed622187afc4f450ea8d309cb9d3e33db2861f9e342a->leave($__internal_ab58009e36ad84241ca6ed622187afc4f450ea8d309cb9d3e33db2861f9e342a_prof);

    }

    // line 322
    public function block_module($context, array $blocks = array())
    {
        $__internal_09e1205c85928b0a00c432f04e6dbc485028445c80d24233d4064a218d6c6672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e1205c85928b0a00c432f04e6dbc485028445c80d24233d4064a218d6c6672->enter($__internal_09e1205c85928b0a00c432f04e6dbc485028445c80d24233d4064a218d6c6672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 323
        echo "                            ";
        
        $__internal_09e1205c85928b0a00c432f04e6dbc485028445c80d24233d4064a218d6c6672->leave($__internal_09e1205c85928b0a00c432f04e6dbc485028445c80d24233d4064a218d6c6672_prof);

    }

    // line 328
    public function block_operation($context, array $blocks = array())
    {
        $__internal_9e12885fd58964aa66a53f005e5d01442821365f5f3c6b9633bb57698f191b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e12885fd58964aa66a53f005e5d01442821365f5f3c6b9633bb57698f191b96->enter($__internal_9e12885fd58964aa66a53f005e5d01442821365f5f3c6b9633bb57698f191b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 329
        echo "                                ";
        
        $__internal_9e12885fd58964aa66a53f005e5d01442821365f5f3c6b9633bb57698f191b96->leave($__internal_9e12885fd58964aa66a53f005e5d01442821365f5f3c6b9633bb57698f191b96_prof);

    }

    // line 335
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eefb427c231d9945c98ef52751148ced21ee1eda4982798b3b91444c91fd3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eefb427c231d9945c98ef52751148ced21ee1eda4982798b3b91444c91fd3ca->enter($__internal_3eefb427c231d9945c98ef52751148ced21ee1eda4982798b3b91444c91fd3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 336
        echo "                            ";
        
        $__internal_3eefb427c231d9945c98ef52751148ced21ee1eda4982798b3b91444c91fd3ca->leave($__internal_3eefb427c231d9945c98ef52751148ced21ee1eda4982798b3b91444c91fd3ca_prof);

    }

    public function getTemplateName()
    {
        return "DForumBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  711 => 336,  705 => 335,  698 => 329,  692 => 328,  685 => 323,  679 => 322,  668 => 373,  663 => 371,  658 => 369,  653 => 367,  648 => 365,  643 => 363,  625 => 350,  610 => 337,  608 => 335,  601 => 330,  599 => 328,  593 => 324,  591 => 322,  563 => 296,  557 => 292,  552 => 289,  542 => 282,  539 => 281,  533 => 277,  527 => 273,  513 => 262,  508 => 260,  500 => 255,  494 => 254,  488 => 253,  481 => 249,  468 => 241,  462 => 240,  456 => 239,  450 => 238,  444 => 237,  438 => 236,  431 => 232,  418 => 224,  412 => 223,  404 => 218,  392 => 208,  387 => 205,  382 => 202,  369 => 194,  363 => 193,  357 => 192,  350 => 188,  338 => 181,  332 => 180,  326 => 179,  319 => 175,  307 => 168,  301 => 167,  295 => 166,  288 => 162,  274 => 153,  268 => 152,  262 => 151,  253 => 145,  241 => 135,  239 => 134,  220 => 118,  217 => 117,  213 => 116,  208 => 114,  205 => 113,  203 => 112,  197 => 109,  169 => 86,  163 => 83,  152 => 74,  148 => 73,  143 => 71,  140 => 70,  138 => 69,  133 => 67,  127 => 63,  123 => 62,  118 => 60,  115 => 59,  113 => 58,  109 => 57,  83 => 34,  76 => 29,  74 => 28,  70 => 26,  66 => 24,  64 => 23,  58 => 20,  52 => 17,  47 => 15,  42 => 13,  37 => 11,  25 => 1,);
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
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>Orion | Blank Page</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.6 -->
        <link href=\"{{ asset('AdminLTE-2.3.3_Blue Light/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <!-- Font Awesome -->        
        <link href=\"{{ asset('AdminLTE-2.3.3_Blue Light/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
        <!-- Ionicons -->
        <link href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')}}\" rel=\"stylesheet\">
        <!-- Theme style -->
        <link href=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/css/AdminLTE.min.css')}}\" rel=\"stylesheet\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/css/skins/_all-skins.min.css')}}\" rel=\"stylesheet\">

    </head>
    {% if is_granted('ROLE_ADMIN') %}
    <body class=\"hold-transition skin-blue-light sidebar-mini\">
    {%else %}
    <body class=\"hold-transition skin-blue-light sidebar-collapse \">    
    {%endif%}
   {# <body class=\"hold-transition skin-blue-light sidebar-collapse\">#}
        <!-- Site wrapper -->
        <div class=\"wrapper\">
            <header class=\"main-header\">
                <!-- Logo -->
               
                <a href=\"{{ path('orion_event_home') }}\" class=\"logo\">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class=\"logo-mini\"><b>O</b>rion</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class=\"logo-lg\"><b>ORION</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class=\"navbar navbar-static-top\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <!-- Messages: style can be found in dropdown.less-->
                            
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg') }}\" class=\"user-image\" alt=\"User Image\" />
                                    {% if app.user %}
                                    <span class=\"hidden-xs\"> 
                                        {{ app.user.username |capitalize}}</span></a>
                                        {% else %}
                                Annonyme
                                        {% endif %}                                
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">                                        
                                        <img src=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\"/>    
                                        <p>
                                            {% if app.user %}
                                    <span class=\"hidden-xs\"> 
                                        {{ app.user.username |capitalize}}</span></a>
                                        {% else %}
                                Annonyme
                                        {% endif %} 
                                        
                                        
                                    </li>
                                    <!-- Menu Body -->
                                    
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        <div class=\"pull-left\">
                                            <a href=\"#\" class=\"btn btn-default btn-flat\">{{ 'Profile'|trans }}</a>
                                        </div>
                                        <div class=\"pull-right\">
                                            <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-default btn-flat\">{{ 'Sign out'|trans }}</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class=\"main-sidebar\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <!-- Sidebar user panel -->
                    <div class=\"user-panel\">
                        <div class=\"pull-left image\">
                            <img src=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg') }}\" class=\"user-image\" alt=\"User Image\" />                            
                        </div>
                        <div class=\"pull-left info\">
                            <p>{% if app.user %}
                                    <span class=\"hidden-xs\"> 
                                        {{ app.user.username |capitalize}}</span></a>
                                        {% else %}
                                Annonyme
                                        {% endif %} </p>
                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> {{ 'Online'|trans }}</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                            <span class=\"input-group-btn\">
                                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">Orion</li>
                        {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"treeview\">
                            <a href=\"Multilevel\">
                                <i class=\"fa fa-lg fa-navicon text-red\"></i> <span>Orion Event</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <!------------------------------Gestion des Evénements-------------------------->
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-th fa-lg text-aqua\"></i>
                                        <span>{{ 'Events Management'|trans }}</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>

                                    <ul class=\"treeview-menu\">

                                        <li><a href=\"{{ path('admin_event_index') }}\"><i class=\"fa fa-list\"></i> {{ 'All Events'|trans }}</a></li>
                                        <li><a href=\"{{ path('admin_event_search') }}\"><i class=\"fa fa-search\"></i> {{ 'Events Search'|trans }}</a></li>
                                        <li><a href=\"{{ path('admin_event_new') }}\"><i class=\"fa fa-plus\"></i> {{ 'Create an Event'|trans }}</a></li> 


                                    </ul>
                                </li>
                                <!------------------------------Gestion des Thèmes-------------------------->    
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-th-large fa-lg text-purple\"></i>
                                        <span>{{ 'Themes Management'|trans }}</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"{{ path('admin_theme_index') }}\"><i class=\"fa fa-list\"></i> {{ 'All Themes'|trans }}</a></li>
                                        <li><a href=\"{{ path('admin_theme_search') }}\"><i class=\"fa fa-search\"></i> {{ 'Themes Search'|trans }}</a></li>
                                        <li><a href=\"{{ path('admin_theme_new') }}\"><i class=\"fa fa-plus\"></i> {{ 'Create a Theme'|trans }}</a></li>             
                                    </ul>
                                </li>
                                <!------------------------------Gestion des Types-------------------------->
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-th-list fa-lg text-green\"></i>
                                        <span>{{ 'Types Management'|trans }}</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"{{ path('admin_type_index') }}\"><i class=\"fa fa-list\"></i> {{ 'All Types'|trans }}</a></li>
                                        <li><a href=\"{{ path('admin_type_search') }}\"><i class=\"fa fa-search\"></i> {{ 'Types Search'|trans }}</a></li>
                                        <li><a href=\"{{ path('admin_type_new') }}\"><i class=\"fa fa-plus\"></i> {{ 'Create a Type'|trans }}</a></li>     
                                    </ul>
                                </li>
                                <!------------------------------Gestion des Billets-------------------------->
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-ticket fa-lg text-orange\"></i>
                                        <span>{{ 'Tickets Management'|trans }}</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"{{ path('admin_billet_index') }}\"><i class=\"fa fa-list\"></i> {{ 'All Tickets'|trans }}</a></li>
                                        <li><a href=\"{{ path('admin_billet_search') }}\"><i class=\"fa fa-search\"></i> {{ 'Tickets Search'|trans }}</a></li>
                                        <li><a href=\"{{ path('admin_billet_new') }}\"><i class=\"fa fa-plus\"></i> {{ 'Create a Ticket'|trans }}</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                         <!-------------------Orion Forum ------------------>
                        <li class=\"treeview\">
                            <a href=\"{{path('discutea_forum_admin_dashboard')}}\">
                                <i class=\"fa fa-lg fa-indent text-green\"></i> <span>Orion Forum</span>
                               {# <i class=\"fa fa-angle-left pull-right\"></i>#}
                            </a>
                       </li>
                        {% elseif is_granted('ROLE_USER')%}
                        <li class=\"treeview\">
                            <a href=\"Multilevel\">
                                <i class=\"fa fa-lg fa-navicon text-red\"></i> <span>Orion Event</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <!------------------------------Gestion des Evénements-------------------------->
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-th fa text-aqua\"></i>
                                        <span>{{ 'Events Management'|trans }}</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>

                                    <ul class=\"treeview-menu\">   
                                <li><a href=\"{{ path('user_event_index') }}\"><i class=\"fa fa-list\"></i> {{ 'All Events'|trans }}</a></li>
                                <li><a href=\"{{ path('user_event_search') }}\"><i class=\"fa fa-search\"></i> {{ 'Events Search'|trans }}</a></li>
                                                                
                            </ul>
                                </li>
                                <!------------------------------Mes Evénements-------------------------->    
                                <li>
                                    <a href=\"#\">
                                <i class=\"fa fa-th-large fa-lg text-navy\"></i>
                                <span> {{ 'My Events'|trans }}</span>
                                <span class=\"fa fa-angle-left pull-right\"></span>
                            </a>
                                    <ul class=\"treeview-menu\">   
                                <li><a href=\"{{ path('user_owned_events_all') }}\"><i class=\"fa fa-list text-lime\"></i> {{ 'All My Events'|trans }}</a></li>
                                <li><a href=\"{{ path('user_owned_events_published') }}\"><i class=\"fa fa-check text-success\"></i> {{ 'My Public Events'|trans }}</a></li>
                                <li><a href=\"{{ path('user_owned_events_cancelled') }}\"><i class=\"fa fa-remove text-danger\"></i> {{ 'My Cancelled Events'|trans }}</a></li>
                                <li><a href=\"{{ path('user_owned_events_registred') }}\"><i class=\"fa fa-save text-blue\"></i> {{ 'My Registred Events'|trans }}</a></li>
                                <li><a href=\"{{ path('user_owned_event_search') }}\"><i class=\"fa fa-search text-orange\"></i> {{ 'Events Search'|trans }}</a></li>
                                <li><a href=\"{{ path('user_owned_event_new') }}\"><i class=\"fa fa-plus text-gray\"></i> {{ 'Create an Event'|trans }}</a></li>                                
                            </ul>
                                </li>
  
                                <!------------------------------Mes Billets-------------------------->
                                <li>
                                    <a href=\"#\">
                                <i class=\"fa fa-ticket fa-lg text-orange\"></i>
                                <span>{{ 'My Tickets'|trans }}</span>
                                <span class=\"fa fa-angle-left pull-right\"></span>
                            </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"{{ path('user_billet_index') }}\"><i class=\"fa fa-list text-lime\"></i> {{ 'All My Tickets'|trans }}</a></li>
                                <li><a href=\"{{ path('user_billet_search') }}\"><i class=\"fa fa-search text-orange\"></i> {{ 'Tickets Search'|trans }}</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-plus\"></i> {{ 'Create a Ticket'|trans }}</a></li>
                                    </ul>
                                </li>
                                <!------------------------------Mes Réservations-------------------------->
                                <li>
                                    <a href=\"{{path ('user_my_reservation')}}\">
                                        <i class=\"fa fa-shopping-cart fa-lg text-gray\"></i>
                                        <span>{{ 'My Reservations'|trans }}</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>

                                </li>
                                
                                
                            </ul>
                        </li>
                         <!-------------------Orion Forum ------------------>
                        <li>
                            <a href=\" {{path ('discutea_forum_homepage')}}\">
                               
                                <i class=\"fa fa-lg fa-indent text-green\"></i> <span>Orion Forum</span>
                               {# <i class=\"fa fa-angle-left pull-right\"></i>#}
                            </a>
                        </li>
                        
                        {% else %}
                        <li class=\"treeview\">
                            <a href=\"{{path('orion_event_home')}}\">
                                <i class=\"fa fa-lg fa-navicon text-red\"></i> <span>Orion Event</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                        </li>
                        
                       <li class=\"treeview\">
                            <a href=\"{{path('discutea_forum_admin_dashboard')}}\">
                                <i class=\"fa fa-lg fa-indent text-green\"></i> <span>Orion Forum</span>
                               {# <i class=\"fa fa-angle-left pull-right\"></i>#}
                            </a>
                       </li>
                        
                        {% endif %}
                        
                        
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                   
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
    
                </section>

                <!-- Main content -->
                <section class=\"content\">

                    <!-- Default box -->
                    <div class=\"box\">
                        <div class=\"box-body\">
                            <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            {% block module %}
                            {% endblock module %}
                            
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li class=\"active\">
                                {% block operation %}
                                {% endblock operation %}
                  
                            </li>
                        </ol>
                    </div>
                </div>
                            {% block body %}
                            {% endblock body %}
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class=\"main-footer\">
                <div class=\"pull-right hidden-xs\">
                    <b>Esprit TECH</b>
                </div>
                <strong>{{ 'Copyright © 2015-2016'|trans }} <a href=\"http://orion.com\">Orion</a>.</strong> {{ 'All rights are reserved.'|trans }}
            </footer>

            <!-- Control Sidebar -->


            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class=\"control-sidebar-bg\"></div>
        </div>
        <!-- ./wrapper -->
        <!-- jQuery 2.2.0 -->
        <script src=\"{{ asset('AdminLTE-2.3.3_Blue Light/plugins/jQuery/jQuery-2.2.0.min.js')}}\"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src=\"{{ asset('AdminLTE-2.3.3_Blue Light/bootstrap/js/bootstrap.min.js')}}\"></script>
        <!-- SlimScroll -->
        <script src=\"{{ asset('AdminLTE-2.3.3_Blue Light/plugins/slimScroll/jquery.slimscroll.min.js')}}\"></script>
        <!-- FastClick -->
        <script src=\"{{ asset('AdminLTE-2.3.3_Blue Light/plugins/fastclick/fastclick.js')}}\"></script>
        <!-- AdminLTE App -->
        <script src=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/js/app.min.js')}}\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/js/demo.js')}}\"></script>
    </body>
</html>
", "DForumBundle::layout.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\discutea\\forum-bundle\\Discutea\\DForumBundle/Resources/views/layout.html.twig");
    }
}
