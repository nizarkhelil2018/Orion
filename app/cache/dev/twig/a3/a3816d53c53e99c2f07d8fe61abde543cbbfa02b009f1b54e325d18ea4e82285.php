<?php

/* OrionEventBundle::layout_front_user.html.twig */
class __TwigTemplate_2ed7fc9f5f9953dcd1d002b8a3e70522074c5de4a569aa45aa7f6a507593915c extends Twig_Template
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
        $__internal_c118173c8e6703addf2684dbefc6c7cdabd9a86d9331e141f3ee55efd2216e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c118173c8e6703addf2684dbefc6c7cdabd9a86d9331e141f3ee55efd2216e5c->enter($__internal_c118173c8e6703addf2684dbefc6c7cdabd9a86d9331e141f3ee55efd2216e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle::layout_front_user.html.twig"));

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
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
     ";
        // line 22
        $this->displayBlock('head', $context, $blocks);
        // line 24
        echo "    </head>
    <body class=\"hold-transition skin-blue-light sidebar-collapse\">
        <!-- Site wrapper -->
        <div class=\"wrapper\">
            <header class=\"main-header\">
                <!-- Logo -->               
                <a href=\"";
        // line 30
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
                            
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\" />
                                    <span class=\"hidden-xs\">";
        // line 52
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">                                        
                                        <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>    
                                        <p>
                                            ";
        // line 59
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "
                                        </p>
                                    </li>
                                    
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        <div class=\"pull-left\">
                                            <a href=\"#\" class=\"btn btn-default btn-flat\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
        echo "</a>
                                        </div>
                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 69
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
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
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
                                        <i class=\"fa fa-th fa text-aqua\"></i>
                                        <span>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>

                                    <ul class=\"treeview-menu\">   
                                <li><a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_event_index");
        echo "\"><i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Events"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 131
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
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Events"), "html", null, true);
        echo "</span>
                                <span class=\"fa fa-angle-left pull-right\"></span>
                            </a>
                                    <ul class=\"treeview-menu\">   
                                <li><a href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_all");
        echo "\"><i class=\"fa fa-list text-lime\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All My Events"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_published");
        echo "\"><i class=\"fa fa-check text-success\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Public Events"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_cancelled");
        echo "\"><i class=\"fa fa-remove text-danger\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Cancelled Events"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_registred");
        echo "\"><i class=\"fa fa-save text-blue\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Registred Events"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_search");
        echo "\"><i class=\"fa fa-search text-orange\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Search"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 148
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
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Tickets"), "html", null, true);
        echo "</span>
                                <span class=\"fa fa-angle-left pull-right\"></span>
                            </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_index");
        echo "\"><i class=\"fa fa-list text-lime\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All My Tickets"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_search");
        echo "\"><i class=\"fa fa-search text-orange\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Search"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-plus\"></i> ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a Ticket"), "html", null, true);
        echo "</a></li>
                                    </ul>
                                </li>
                                <!------------------------------Mes Réservations-------------------------->
                                <li>
                                    <a href=\"";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_my_reservation");
        echo "\">
                                        <i class=\"fa fa-shopping-cart fa-lg text-gray\"></i>
                                        <span>";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Reservations"), "html", null, true);
        echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>

                                </li>

                                
                            </ul>
                        </li>
                        <!-------------------Orion Forum ------------------>
                        <li class=\"treeview\">
                            <a href=\" ";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discutea_forum_homepage");
        echo "\">
                               
                                <i class=\"fa fa-lg fa-indent text-green\"></i> <span>Orion Forum</span>
                               ";
        // line 184
        echo "                            </a>
                           ";
        // line 237
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
        // line 259
        $this->displayBlock('module', $context, $blocks);
        // line 261
        echo "                            
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li class=\"active\">
                                ";
        // line 265
        $this->displayBlock('operation', $context, $blocks);
        // line 267
        echo "                  
                            </li>
                        </ol>
                    </div>
                </div>
                            ";
        // line 272
        $this->displayBlock('body', $context, $blocks);
        // line 274
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
        // line 287
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
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- SlimScroll -->
        <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_c118173c8e6703addf2684dbefc6c7cdabd9a86d9331e141f3ee55efd2216e5c->leave($__internal_c118173c8e6703addf2684dbefc6c7cdabd9a86d9331e141f3ee55efd2216e5c_prof);

    }

    // line 22
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b6b7007c98ba8ac221e45c27c35a088d848e015cb5a6866e7b8f525ae19407e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6b7007c98ba8ac221e45c27c35a088d848e015cb5a6866e7b8f525ae19407e->enter($__internal_0b6b7007c98ba8ac221e45c27c35a088d848e015cb5a6866e7b8f525ae19407e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 23
        echo "      ";
        
        $__internal_0b6b7007c98ba8ac221e45c27c35a088d848e015cb5a6866e7b8f525ae19407e->leave($__internal_0b6b7007c98ba8ac221e45c27c35a088d848e015cb5a6866e7b8f525ae19407e_prof);

    }

    // line 259
    public function block_module($context, array $blocks = array())
    {
        $__internal_a6d476509ebdb6af40135198bc9d17973c4e28dfccaf467481c462109127e5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d476509ebdb6af40135198bc9d17973c4e28dfccaf467481c462109127e5fb->enter($__internal_a6d476509ebdb6af40135198bc9d17973c4e28dfccaf467481c462109127e5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 260
        echo "                            ";
        
        $__internal_a6d476509ebdb6af40135198bc9d17973c4e28dfccaf467481c462109127e5fb->leave($__internal_a6d476509ebdb6af40135198bc9d17973c4e28dfccaf467481c462109127e5fb_prof);

    }

    // line 265
    public function block_operation($context, array $blocks = array())
    {
        $__internal_9e99c54f852d532533e502b1ad2d02a4bc2539be81d6a5dda369d2ee09118e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e99c54f852d532533e502b1ad2d02a4bc2539be81d6a5dda369d2ee09118e5e->enter($__internal_9e99c54f852d532533e502b1ad2d02a4bc2539be81d6a5dda369d2ee09118e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 266
        echo "                                ";
        
        $__internal_9e99c54f852d532533e502b1ad2d02a4bc2539be81d6a5dda369d2ee09118e5e->leave($__internal_9e99c54f852d532533e502b1ad2d02a4bc2539be81d6a5dda369d2ee09118e5e_prof);

    }

    // line 272
    public function block_body($context, array $blocks = array())
    {
        $__internal_d312b30eac4810024d6113a13957be99fdb6ab6039fea5bd8d9cd55ed53c3849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d312b30eac4810024d6113a13957be99fdb6ab6039fea5bd8d9cd55ed53c3849->enter($__internal_d312b30eac4810024d6113a13957be99fdb6ab6039fea5bd8d9cd55ed53c3849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 273
        echo "                            ";
        
        $__internal_d312b30eac4810024d6113a13957be99fdb6ab6039fea5bd8d9cd55ed53c3849->leave($__internal_d312b30eac4810024d6113a13957be99fdb6ab6039fea5bd8d9cd55ed53c3849_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle::layout_front_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 273,  491 => 272,  484 => 266,  478 => 265,  471 => 260,  465 => 259,  458 => 23,  452 => 22,  441 => 311,  437 => 310,  432 => 308,  427 => 306,  422 => 304,  417 => 302,  412 => 300,  394 => 287,  379 => 274,  377 => 272,  370 => 267,  368 => 265,  362 => 261,  360 => 259,  336 => 237,  333 => 184,  327 => 180,  313 => 169,  308 => 167,  300 => 162,  294 => 161,  288 => 160,  281 => 156,  268 => 148,  262 => 147,  256 => 146,  250 => 145,  244 => 144,  238 => 143,  231 => 139,  218 => 131,  212 => 130,  204 => 125,  173 => 97,  169 => 96,  163 => 93,  134 => 69,  128 => 66,  118 => 59,  113 => 57,  105 => 52,  101 => 51,  77 => 30,  69 => 24,  67 => 22,  63 => 21,  59 => 20,  53 => 17,  48 => 15,  43 => 13,  38 => 11,  26 => 1,);
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
        <link href=\"{{ asset('sweetalert.css')}}\" rel=\"stylesheet\">
     {% block head %}
      {% endblock head %}
    </head>
    <body class=\"hold-transition skin-blue-light sidebar-collapse\">
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
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
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
                        <li class=\"treeview\">
                            <a href=\" {{path ('discutea_forum_homepage')}}\">
                               
                                <i class=\"fa fa-lg fa-indent text-green\"></i> <span>Orion Forum</span>
                               {# <i class=\"fa fa-angle-left pull-right\"></i>#}
                            </a>
                           {# <ul class=\"treeview-menu\">
                                <!------------------------------Gestion des Evénements-------------------------->
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-th text-aqua\"></i>
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
        <script src=\"{{ asset('sweetalert.min.js')}}\"></script>
    </body>
</html>
", "OrionEventBundle::layout_front_user.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/layout_front_user.html.twig");
    }
}
