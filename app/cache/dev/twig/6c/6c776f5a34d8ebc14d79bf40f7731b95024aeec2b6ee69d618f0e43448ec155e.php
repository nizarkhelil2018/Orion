<?php

/* @OrionForum/layout.html.twig */
class __TwigTemplate_25c52f28c3fc09122076a75b8ecb8adac0500b31dc789dc98c2c543e261a039e extends Twig_Template
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
        $__internal_4cd499f21f150bebb363dc4915b45b5ef6cd667b400ac4991a383da98fa89785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd499f21f150bebb363dc4915b45b5ef6cd667b400ac4991a383da98fa89785->enter($__internal_4cd499f21f150bebb363dc4915b45b5ef6cd667b400ac4991a383da98fa89785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionForum/layout.html.twig"));

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
                                    ";
        // line 134
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 135
            echo "                                    <span class=\"hidden-xs\"> 
                                        ";
            // line 136
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo "</span></a>
                                        ";
        } else {
            // line 138
            echo "                                Annonyme
                                        ";
        }
        // line 139
        echo "                                
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">                                        
                                        <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>    
                                        <p>
                                            ";
        // line 145
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 146
            echo "                                    <span class=\"hidden-xs\"> 
                                        ";
            // line 147
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo "</span></a>
                                        ";
        } else {
            // line 149
            echo "                                Annonyme
                                        ";
        }
        // line 150
        echo " 
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
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
        echo "</a>
                                        </div>
                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 175
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
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\" />                            
                        </div>
                        <div class=\"pull-left info\">
                            <p>";
        // line 201
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 202
            echo "                                    <span class=\"hidden-xs\"> 
                                        ";
            // line 203
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
            echo "</span></a>
                                        ";
        } else {
            // line 205
            echo "                                Annonyme
                                        ";
        }
        // line 206
        echo " </p>
                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> ";
        // line 207
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
        // line 245
        $this->displayBlock('module', $context, $blocks);
        // line 247
        echo "                            
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li class=\"active\">
                                ";
        // line 251
        $this->displayBlock('operation', $context, $blocks);
        // line 253
        echo "                  
                            </li>
                        </ol>
                    </div>
                </div>
                            ";
        // line 258
        $this->displayBlock('body', $context, $blocks);
        // line 260
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
        // line 273
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
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- SlimScroll -->
        <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("AdminLTE-2.3.3_Blue Light/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_4cd499f21f150bebb363dc4915b45b5ef6cd667b400ac4991a383da98fa89785->leave($__internal_4cd499f21f150bebb363dc4915b45b5ef6cd667b400ac4991a383da98fa89785_prof);

    }

    // line 245
    public function block_module($context, array $blocks = array())
    {
        $__internal_a427b59d6ed840e043b30bc42f2838c1abac3a275f1031a18f831630793cc7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a427b59d6ed840e043b30bc42f2838c1abac3a275f1031a18f831630793cc7a1->enter($__internal_a427b59d6ed840e043b30bc42f2838c1abac3a275f1031a18f831630793cc7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 246
        echo "                            ";
        
        $__internal_a427b59d6ed840e043b30bc42f2838c1abac3a275f1031a18f831630793cc7a1->leave($__internal_a427b59d6ed840e043b30bc42f2838c1abac3a275f1031a18f831630793cc7a1_prof);

    }

    // line 251
    public function block_operation($context, array $blocks = array())
    {
        $__internal_9757063adaa30b47ec2f1c830c8fd821d8ebb5ca1efd0a56775103d1d089d4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9757063adaa30b47ec2f1c830c8fd821d8ebb5ca1efd0a56775103d1d089d4ae->enter($__internal_9757063adaa30b47ec2f1c830c8fd821d8ebb5ca1efd0a56775103d1d089d4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 252
        echo "                                ";
        
        $__internal_9757063adaa30b47ec2f1c830c8fd821d8ebb5ca1efd0a56775103d1d089d4ae->leave($__internal_9757063adaa30b47ec2f1c830c8fd821d8ebb5ca1efd0a56775103d1d089d4ae_prof);

    }

    // line 258
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e6c573081d4bcfd49338d7895b7721925ca15ccf397d02c3ebbda4ccd78dbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6c573081d4bcfd49338d7895b7721925ca15ccf397d02c3ebbda4ccd78dbd5->enter($__internal_1e6c573081d4bcfd49338d7895b7721925ca15ccf397d02c3ebbda4ccd78dbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 259
        echo "                            ";
        
        $__internal_1e6c573081d4bcfd49338d7895b7721925ca15ccf397d02c3ebbda4ccd78dbd5->leave($__internal_1e6c573081d4bcfd49338d7895b7721925ca15ccf397d02c3ebbda4ccd78dbd5_prof);

    }

    public function getTemplateName()
    {
        return "@OrionForum/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 259,  459 => 258,  452 => 252,  446 => 251,  439 => 246,  433 => 245,  422 => 296,  417 => 294,  412 => 292,  407 => 290,  402 => 288,  397 => 286,  379 => 273,  364 => 260,  362 => 258,  355 => 253,  353 => 251,  347 => 247,  345 => 245,  304 => 207,  301 => 206,  297 => 205,  292 => 203,  289 => 202,  287 => 201,  281 => 198,  253 => 175,  247 => 172,  223 => 150,  219 => 149,  214 => 147,  211 => 146,  209 => 145,  204 => 143,  198 => 139,  194 => 138,  189 => 136,  186 => 135,  184 => 134,  180 => 133,  106 => 62,  70 => 29,  58 => 20,  52 => 17,  47 => 15,  42 => 13,  37 => 11,  25 => 1,);
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
", "@OrionForum/layout.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle\\Resources\\views\\layout.html.twig");
    }
}
