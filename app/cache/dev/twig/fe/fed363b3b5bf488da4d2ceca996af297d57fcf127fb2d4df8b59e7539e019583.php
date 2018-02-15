<?php

/* OrionEventBundle::layout_admin.html.twig */
class __TwigTemplate_e882039c9a0a8f3f4c08b131579bddc0c3db3ab45872a1e11995b6c69df188c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'module' => array($this, 'block_module'),
            'operation' => array($this, 'block_operation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ccee5f90f4c437df81320adefd3151f74c52a06609f1d159cc66de9751a4698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ccee5f90f4c437df81320adefd3151f74c52a06609f1d159cc66de9751a4698->enter($__internal_4ccee5f90f4c437df81320adefd3151f74c52a06609f1d159cc66de9751a4698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle::layout_admin.html.twig"));

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
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Ionicons -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Theme style -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
     ";
        // line 23
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "    </head>
    <body class=\"hold-transition skin-blue-light sidebar-mini\">
        <!-- Site wrapper -->
        <div class=\"wrapper\">
            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"";
        // line 31
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
                               <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\" />
                                    <span class=\"hidden-xs\">";
        // line 53
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">                                        
                                        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>    
                                        <p>
                                            ";
        // line 60
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "
                                        </p>
                                    </li>
                                   
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        <div class=\"pull-left\">
                                            <a href=\"#\" class=\"btn btn-default btn-flat\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
        echo "</a>
                                        </div>
                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 70
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
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\" />                            
                        </div>
                        <div class=\"pull-left info\">
                            <p>";
        // line 96
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "</p>
                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Online"), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("\"Search...\""), "html", null, true);
        echo ">
                            <span class=\"input-group-btn\">
                                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">Orion</li>

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
                                        <span>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>

                                    <ul class=\"treeview-menu\">

                                        <li><a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_index");
        echo "\"><i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Events"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_event_search");
        echo "\"><i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Search"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"";
        // line 133
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
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Themes Management"), "html", null, true);
        echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_index");
        echo "\"><i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Themes"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_search");
        echo "\"><i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Themes Search"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"";
        // line 148
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
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Types Management"), "html", null, true);
        echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_index");
        echo "\"><i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Types"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_type_search");
        echo "\"><i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Types Search"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"";
        // line 161
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
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Management"), "html", null, true);
        echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_index");
        echo "\"><i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Tickets"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_search");
        echo "\"><i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Search"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_billet_new");
        echo "\"><i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a Ticket"), "html", null, true);
        echo "</a></li>
                                    </ul>
                                </li>

                                
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_admin_dashboard");
        echo "\">
                                <i class=\"fa fa-lg fa-indent text-green\"></i> <span>Orion Forum</span>
                               ";
        // line 185
        echo "                            </a>
                            ";
        // line 249
        echo "                </section>
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
        // line 271
        $this->displayBlock('module', $context, $blocks);
        // line 273
        echo "
                                    </h1>
                                    <ol class=\"breadcrumb\">
                                        <li class=\"active\">
                                ";
        // line 277
        $this->displayBlock('operation', $context, $blocks);
        // line 279
        echo "
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            ";
        // line 284
        $this->displayBlock('body', $context, $blocks);
        // line 286
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
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copyright © 2017"), "html", null, true);
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
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- SlimScroll -->
        <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sweetalert.min.js"), "html", null, true);
        echo "\"></script>
        
        
    </body>
</html>
";
        
        $__internal_4ccee5f90f4c437df81320adefd3151f74c52a06609f1d159cc66de9751a4698->leave($__internal_4ccee5f90f4c437df81320adefd3151f74c52a06609f1d159cc66de9751a4698_prof);

    }

    // line 23
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c87d63f6195e0255ae85960efa443f8524740ba6d57a8a4945cab1fe47fc514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c87d63f6195e0255ae85960efa443f8524740ba6d57a8a4945cab1fe47fc514->enter($__internal_9c87d63f6195e0255ae85960efa443f8524740ba6d57a8a4945cab1fe47fc514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 24
        echo "      ";
        
        $__internal_9c87d63f6195e0255ae85960efa443f8524740ba6d57a8a4945cab1fe47fc514->leave($__internal_9c87d63f6195e0255ae85960efa443f8524740ba6d57a8a4945cab1fe47fc514_prof);

    }

    // line 271
    public function block_module($context, array $blocks = array())
    {
        $__internal_090077315cf0209055ec02acd2fc1397fa1b8678938aec46fafe4b53a52c0bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090077315cf0209055ec02acd2fc1397fa1b8678938aec46fafe4b53a52c0bdc->enter($__internal_090077315cf0209055ec02acd2fc1397fa1b8678938aec46fafe4b53a52c0bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 272
        echo "                            ";
        
        $__internal_090077315cf0209055ec02acd2fc1397fa1b8678938aec46fafe4b53a52c0bdc->leave($__internal_090077315cf0209055ec02acd2fc1397fa1b8678938aec46fafe4b53a52c0bdc_prof);

    }

    // line 277
    public function block_operation($context, array $blocks = array())
    {
        $__internal_271ddb103a4670367b4d8eb8b065fd91a10df478dee874e90083a0da1c10057b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271ddb103a4670367b4d8eb8b065fd91a10df478dee874e90083a0da1c10057b->enter($__internal_271ddb103a4670367b4d8eb8b065fd91a10df478dee874e90083a0da1c10057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 278
        echo "                                ";
        
        $__internal_271ddb103a4670367b4d8eb8b065fd91a10df478dee874e90083a0da1c10057b->leave($__internal_271ddb103a4670367b4d8eb8b065fd91a10df478dee874e90083a0da1c10057b_prof);

    }

    // line 284
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bad3d829dbbd1f8d23bbd064024a01c5bed0545f2dfe16a6e94a5a5c07baa9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bad3d829dbbd1f8d23bbd064024a01c5bed0545f2dfe16a6e94a5a5c07baa9b->enter($__internal_0bad3d829dbbd1f8d23bbd064024a01c5bed0545f2dfe16a6e94a5a5c07baa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 285
        echo "                            ";
        
        $__internal_0bad3d829dbbd1f8d23bbd064024a01c5bed0545f2dfe16a6e94a5a5c07baa9b->leave($__internal_0bad3d829dbbd1f8d23bbd064024a01c5bed0545f2dfe16a6e94a5a5c07baa9b_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle::layout_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 285,  505 => 284,  498 => 278,  492 => 277,  485 => 272,  479 => 271,  472 => 24,  466 => 23,  453 => 324,  449 => 323,  445 => 322,  440 => 320,  435 => 318,  430 => 316,  425 => 314,  420 => 312,  402 => 299,  387 => 286,  385 => 284,  378 => 279,  376 => 277,  370 => 273,  368 => 271,  344 => 249,  341 => 185,  336 => 182,  323 => 174,  317 => 173,  311 => 172,  304 => 168,  292 => 161,  286 => 160,  280 => 159,  273 => 155,  261 => 148,  255 => 147,  249 => 146,  242 => 142,  228 => 133,  222 => 132,  216 => 131,  207 => 125,  182 => 103,  173 => 97,  169 => 96,  163 => 93,  135 => 70,  129 => 67,  119 => 60,  114 => 58,  106 => 53,  102 => 52,  78 => 31,  70 => 25,  68 => 23,  63 => 21,  57 => 18,  52 => 16,  47 => 14,  43 => 13,  38 => 11,  26 => 1,);
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
        <link href=\"{{ asset('sweetalert.css')}}\" rel=\"stylesheet\">
        <!-- Ionicons -->
        <link href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')}}\" rel=\"stylesheet\">
        <!-- Theme style -->
        <link href=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/css/AdminLTE.min.css')}}\" rel=\"stylesheet\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/css/skins/_all-skins.min.css')}}\" rel=\"stylesheet\">
        
     {% block head %}
      {% endblock head %}
    </head>
    <body class=\"hold-transition skin-blue-light sidebar-mini\">
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
                               <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg') }}\" class=\"user-image\" alt=\"User Image\" />
                                    <span class=\"hidden-xs\">{{ app.user.username |capitalize}}</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">                                        
                                        <img src=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\"/>    
                                        <p>
                                            {{ app.user.username |capitalize}}
                                        </p>
                                    </li>
                                   
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
                            <p>{{ app.user.username |capitalize}}</p>
                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> {{ 'Online'|trans }}</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder={{ '\"Search...\"'|trans }}>
                            <span class=\"input-group-btn\">
                                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">Orion</li>

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
                        <li class=\"treeview\">
                            <a href=\"{{path('discutea_forum_admin_dashboard')}}\">
                                <i class=\"fa fa-lg fa-indent text-green\"></i> <span>Orion Forum</span>
                               {# <i class=\"fa fa-angle-left pull-right\"></i>#}
                            </a>
                            {#<ul class=\"treeview-menu\">
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

                    </ul>#}
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
                <strong>{{ 'Copyright © 2017'|trans }} <a href=\"http://orion.com\">Orion</a>.</strong> {{ 'All rights are reserved.'|trans }}
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
        <script src=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/js/demo.js')}}\"></script>
        <script src=\"{{ asset('sweetalert.min.js')}}\"></script>
        
        
    </body>
</html>
", "OrionEventBundle::layout_admin.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/layout_admin.html.twig");
    }
}
