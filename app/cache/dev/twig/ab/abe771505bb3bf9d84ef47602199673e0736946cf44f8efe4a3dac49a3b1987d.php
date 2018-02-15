<?php

/* @OrionForum/layout_user.html.twig */
class __TwigTemplate_b6c683438c2fa3ae245a01b2232f40cb04c3f1f49a1c286a163a1b15a066acc1 extends Twig_Template
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
        $__internal_ed8c9d1bc5f39af3578754a708e794a7bcf94eb76f00981985f8dccb343d6d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8c9d1bc5f39af3578754a708e794a7bcf94eb76f00981985f8dccb343d6d49->enter($__internal_ed8c9d1bc5f39af3578754a708e794a7bcf94eb76f00981985f8dccb343d6d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionForum/layout_user.html.twig"));

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
    <body class=\"hold-transition skin-blue sidebar-mini\">
        <!-- Site wrapper -->
        <div class=\"wrapper\">
            <header class=\"main-header\">
                <!-- Logo -->
               
                <a href=\"";
        // line 29
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
                            <li class=\"dropdown messages-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-envelope-o\"></i>
                                    <span class=\"label label-success\">4</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                            <li><!-- start message -->
                                                <a href=\"#\">
                                                    <div class=\"pull-left\">
                                                        <img src=\"AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
                                                        <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" />
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                        </ul>
                                    </li>
                                    <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class=\"dropdown notifications-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-bell-o\"></i>
                                    <span class=\"label label-warning\">10</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"footer\"><a href=\"#\">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class=\"dropdown tasks-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-flag-o\"></i>
                                    <span class=\"label label-danger\">9</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 9 tasks</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                            <li><!-- Task item -->
                                                <a href=\"#\">
                                                    <h3>
                                                        Design some buttons
                                                        <small class=\"pull-right\">20%</small>
                                                    </h3>
                                                    <div class=\"progress xs\">
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class=\"footer\">
                                        <a href=\"#\">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\" />
                                    <span class=\"hidden-xs\">";
        // line 134
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">                                        
                                        <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>    
                                        <p>
                                            ";
        // line 141
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo " - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class=\"user-body\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-4 text-center\">
                                                <a href=\"#\">Followers</a>
                                            </div>
                                            <div class=\"col-xs-4 text-center\">
                                                <a href=\"#\">Sales</a>
                                            </div>
                                            <div class=\"col-xs-4 text-center\">
                                                <a href=\"#\">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        <div class=\"pull-left\">
                                            <a href=\"#\" class=\"btn btn-default btn-flat\">";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
        echo "</a>
                                        </div>
                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 166
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
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\" />                            
                        </div>
                        <div class=\"pull-left info\">
                            <p>";
        // line 192
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "</p>
                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> ";
        // line 193
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
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Management"), "html", null, true);
        echo "</span>
                                        <span class=\"fa fa-angle-left pull-right\"></span>
                                    </a>

                                    <ul class=\"treeview-menu\">   
                                <li><a href=\"";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_event_index");
        echo "\"><i class=\"fa fa-list\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All Events"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 227
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
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Events"), "html", null, true);
        echo "</span>
                                <span class=\"fa fa-angle-left pull-right\"></span>
                            </a>
                                    <ul class=\"treeview-menu\">   
                                <li><a href=\"";
        // line 239
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_all");
        echo "\"><i class=\"fa fa-list text-lime\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All My Events"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_published");
        echo "\"><i class=\"fa fa-check text-success\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Public Events"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_cancelled");
        echo "\"><i class=\"fa fa-remove text-danger\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Cancelled Events"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_registred");
        echo "\"><i class=\"fa fa-save text-blue\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Registred Events"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_search");
        echo "\"><i class=\"fa fa-search text-orange\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Events Search"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 244
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
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Tickets"), "html", null, true);
        echo "</span>
                                <span class=\"fa fa-angle-left pull-right\"></span>
                            </a>
                                    <ul class=\"treeview-menu\">
                                        <li><a href=\"";
        // line 256
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_index");
        echo "\"><i class=\"fa fa-list text-lime\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All My Tickets"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_billet_search");
        echo "\"><i class=\"fa fa-search text-orange\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets Search"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-plus\"></i> ";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a Ticket"), "html", null, true);
        echo "</a></li>
                                    </ul>
                                </li>

                                
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"Multilevel\">
                               
                                <i class=\"fa fa-lg fa-indent text-green\"></i> <span>Orion Forum</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>";
        // line 323
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
        // line 345
        $this->displayBlock('module', $context, $blocks);
        // line 347
        echo "                            
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li class=\"active\">
                                ";
        // line 351
        $this->displayBlock('operation', $context, $blocks);
        // line 353
        echo "                  
                            </li>
                        </ol>
                    </div>
                </div>
                            ";
        // line 358
        $this->displayBlock('body', $context, $blocks);
        // line 360
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
        // line 373
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
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- SlimScroll -->
        <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_ed8c9d1bc5f39af3578754a708e794a7bcf94eb76f00981985f8dccb343d6d49->leave($__internal_ed8c9d1bc5f39af3578754a708e794a7bcf94eb76f00981985f8dccb343d6d49_prof);

    }

    // line 345
    public function block_module($context, array $blocks = array())
    {
        $__internal_3b610567a497bcae8d4c3e80deb36bd949f81460d09926cddb1aee24149b3bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b610567a497bcae8d4c3e80deb36bd949f81460d09926cddb1aee24149b3bad->enter($__internal_3b610567a497bcae8d4c3e80deb36bd949f81460d09926cddb1aee24149b3bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 346
        echo "                            ";
        
        $__internal_3b610567a497bcae8d4c3e80deb36bd949f81460d09926cddb1aee24149b3bad->leave($__internal_3b610567a497bcae8d4c3e80deb36bd949f81460d09926cddb1aee24149b3bad_prof);

    }

    // line 351
    public function block_operation($context, array $blocks = array())
    {
        $__internal_a0f84f184567c1ec6de5975fe86d77ba571fc7ba976f4cc463cfcc60a94f48f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f84f184567c1ec6de5975fe86d77ba571fc7ba976f4cc463cfcc60a94f48f3->enter($__internal_a0f84f184567c1ec6de5975fe86d77ba571fc7ba976f4cc463cfcc60a94f48f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 352
        echo "                                ";
        
        $__internal_a0f84f184567c1ec6de5975fe86d77ba571fc7ba976f4cc463cfcc60a94f48f3->leave($__internal_a0f84f184567c1ec6de5975fe86d77ba571fc7ba976f4cc463cfcc60a94f48f3_prof);

    }

    // line 358
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f6834409cfc49bd195b83a4d2967fef2fd8cbbe786c0cf65f1516004d4d2e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6834409cfc49bd195b83a4d2967fef2fd8cbbe786c0cf65f1516004d4d2e9b->enter($__internal_3f6834409cfc49bd195b83a4d2967fef2fd8cbbe786c0cf65f1516004d4d2e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 359
        echo "                            ";
        
        $__internal_3f6834409cfc49bd195b83a4d2967fef2fd8cbbe786c0cf65f1516004d4d2e9b->leave($__internal_3f6834409cfc49bd195b83a4d2967fef2fd8cbbe786c0cf65f1516004d4d2e9b_prof);

    }

    public function getTemplateName()
    {
        return "@OrionForum/layout_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 359,  546 => 358,  539 => 352,  533 => 351,  526 => 346,  520 => 345,  509 => 396,  504 => 394,  499 => 392,  494 => 390,  489 => 388,  484 => 386,  466 => 373,  451 => 360,  449 => 358,  442 => 353,  440 => 351,  434 => 347,  432 => 345,  408 => 323,  393 => 258,  387 => 257,  381 => 256,  374 => 252,  361 => 244,  355 => 243,  349 => 242,  343 => 241,  337 => 240,  331 => 239,  324 => 235,  311 => 227,  305 => 226,  297 => 221,  266 => 193,  262 => 192,  256 => 189,  228 => 166,  222 => 163,  197 => 141,  192 => 139,  184 => 134,  180 => 133,  106 => 62,  70 => 29,  58 => 20,  52 => 17,  47 => 15,  42 => 13,  37 => 11,  25 => 1,);
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
    <body class=\"hold-transition skin-blue sidebar-mini\">
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
                            <li class=\"dropdown messages-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-envelope-o\"></i>
                                    <span class=\"label label-success\">4</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                            <li><!-- start message -->
                                                <a href=\"#\">
                                                    <div class=\"pull-left\">
                                                        <img src=\"AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
                                                        <img src=\"{{ asset('AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg') }}\" />
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                        </ul>
                                    </li>
                                    <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class=\"dropdown notifications-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-bell-o\"></i>
                                    <span class=\"label label-warning\">10</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"footer\"><a href=\"#\">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class=\"dropdown tasks-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-flag-o\"></i>
                                    <span class=\"label label-danger\">9</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 9 tasks</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                            <li><!-- Task item -->
                                                <a href=\"#\">
                                                    <h3>
                                                        Design some buttons
                                                        <small class=\"pull-right\">20%</small>
                                                    </h3>
                                                    <div class=\"progress xs\">
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class=\"footer\">
                                        <a href=\"#\">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
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
                                            {{ app.user.username |capitalize}} - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class=\"user-body\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-4 text-center\">
                                                <a href=\"#\">Followers</a>
                                            </div>
                                            <div class=\"col-xs-4 text-center\">
                                                <a href=\"#\">Sales</a>
                                            </div>
                                            <div class=\"col-xs-4 text-center\">
                                                <a href=\"#\">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
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

                                
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"Multilevel\">
                               
                                <i class=\"fa fa-lg fa-indent text-green\"></i> <span>Orion Forum</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                           {#-- <ul class=\"treeview-menu\">
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
                                {------------------------------Mes Evénements-------------------------->    
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
", "@OrionForum/layout_user.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle\\Resources\\views\\layout_user.html.twig");
    }
}
