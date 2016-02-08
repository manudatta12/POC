<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_053fc1f2072a21684720a48a279c0ace72601454bbdcdb420435b1d5ac7a7811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f01b8012d37335e02e454a4c4d31a5e747a583851055fd615e5bd33d67b76d44 = $this->env->getExtension("native_profiler");
        $__internal_f01b8012d37335e02e454a4c4d31a5e747a583851055fd615e5bd33d67b76d44->enter($__internal_f01b8012d37335e02e454a4c4d31a5e747a583851055fd615e5bd33d67b76d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        echo "<!DOCTYPE html>
<html ";
        // line 23
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 25
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "
        <title>
        ";
        // line 68
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 88
        echo "        </title>
    </head>
    <body ";
        // line 90
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 91
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 175
        echo "
        ";
        // line 176
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 333
        echo "    </body>
</html>
";
        
        $__internal_f01b8012d37335e02e454a4c4d31a5e747a583851055fd615e5bd33d67b76d44->leave($__internal_f01b8012d37335e02e454a4c4d31a5e747a583851055fd615e5bd33d67b76d44_prof);

    }

    // line 23
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_e2741af851b7fb7935a827a68f3a7f08b8379634c56375882968f1388d4e2f23 = $this->env->getExtension("native_profiler");
        $__internal_e2741af851b7fb7935a827a68f3a7f08b8379634c56375882968f1388d4e2f23->enter($__internal_e2741af851b7fb7935a827a68f3a7f08b8379634c56375882968f1388d4e2f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_e2741af851b7fb7935a827a68f3a7f08b8379634c56375882968f1388d4e2f23->leave($__internal_e2741af851b7fb7935a827a68f3a7f08b8379634c56375882968f1388d4e2f23_prof);

    }

    // line 25
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_ee05ea4cb507a926548054b3670ab2962e9e78e8cfbd15b9bb7d9de6df932d8e = $this->env->getExtension("native_profiler");
        $__internal_ee05ea4cb507a926548054b3670ab2962e9e78e8cfbd15b9bb7d9de6df932d8e->enter($__internal_ee05ea4cb507a926548054b3670ab2962e9e78e8cfbd15b9bb7d9de6df932d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 26
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_ee05ea4cb507a926548054b3670ab2962e9e78e8cfbd15b9bb7d9de6df932d8e->leave($__internal_ee05ea4cb507a926548054b3670ab2962e9e78e8cfbd15b9bb7d9de6df932d8e_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20b948364f56a4f78ae6dd886eb10cd871b082efbda24b20fcf39fe0f166d699 = $this->env->getExtension("native_profiler");
        $__internal_20b948364f56a4f78ae6dd886eb10cd871b082efbda24b20fcf39fe0f166d699->enter($__internal_20b948364f56a4f78ae6dd886eb10cd871b082efbda24b20fcf39fe0f166d699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "
            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 33
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        ";
        
        $__internal_20b948364f56a4f78ae6dd886eb10cd871b082efbda24b20fcf39fe0f166d699->leave($__internal_20b948364f56a4f78ae6dd886eb10cd871b082efbda24b20fcf39fe0f166d699_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22ea957d4bf62ded0a56b6a481d695d303242d0c7ef42711a6e0109b98f6e468 = $this->env->getExtension("native_profiler");
        $__internal_22ea957d4bf62ded0a56b6a481d695d303242d0c7ef42711a6e0109b98f6e468->enter($__internal_22ea957d4bf62ded0a56b6a481d695d303242d0c7ef42711a6e0109b98f6e468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 41
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 42
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 44
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 51
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
            ";
        // line 55
        echo "            ";
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            // line 56
            echo "                ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
            // line 57
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 58
            echo "
                ";
            // line 60
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 61
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("bundles/sonataadmin/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 63
            echo "            ";
        }
        // line 64
        echo "
        ";
        
        $__internal_22ea957d4bf62ded0a56b6a481d695d303242d0c7ef42711a6e0109b98f6e468->leave($__internal_22ea957d4bf62ded0a56b6a481d695d303242d0c7ef42711a6e0109b98f6e468_prof);

    }

    // line 68
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_a364f1c76dabd9a9e0ee5fc43089d2c035f2a7f8d90596e0336cc243db5d89be = $this->env->getExtension("native_profiler");
        $__internal_a364f1c76dabd9a9e0ee5fc43089d2c035f2a7f8d90596e0336cc243db5d89be->enter($__internal_a364f1c76dabd9a9e0ee5fc43089d2c035f2a7f8d90596e0336cc243db5d89be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 69
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 71
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 72
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 74
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 75
                echo "                    -
                    ";
                // line 76
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 77
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 78
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 79
                            echo "                                &gt;
                            ";
                        }
                        // line 81
                        echo "
                            ";
                        // line 82
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 84
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_a364f1c76dabd9a9e0ee5fc43089d2c035f2a7f8d90596e0336cc243db5d89be->leave($__internal_a364f1c76dabd9a9e0ee5fc43089d2c035f2a7f8d90596e0336cc243db5d89be_prof);

    }

    // line 90
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_0930905b5634c7b6794008705f15fd95fbacab5bfc2966ff598f916b2b584067 = $this->env->getExtension("native_profiler");
        $__internal_0930905b5634c7b6794008705f15fd95fbacab5bfc2966ff598f916b2b584067->enter($__internal_0930905b5634c7b6794008705f15fd95fbacab5bfc2966ff598f916b2b584067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_0930905b5634c7b6794008705f15fd95fbacab5bfc2966ff598f916b2b584067->leave($__internal_0930905b5634c7b6794008705f15fd95fbacab5bfc2966ff598f916b2b584067_prof);

    }

    // line 91
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_fa15a2368bb50b05411ea59a3b0046d49b021bd7ef91a53b66247720d2c24861 = $this->env->getExtension("native_profiler");
        $__internal_fa15a2368bb50b05411ea59a3b0046d49b021bd7ef91a53b66247720d2c24861->enter($__internal_fa15a2368bb50b05411ea59a3b0046d49b021bd7ef91a53b66247720d2c24861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 92
        echo "            <header class=\"header\">
                ";
        // line 93
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 100
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 112
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 173
        echo "            </header>
        ";
        
        $__internal_fa15a2368bb50b05411ea59a3b0046d49b021bd7ef91a53b66247720d2c24861->leave($__internal_fa15a2368bb50b05411ea59a3b0046d49b021bd7ef91a53b66247720d2c24861_prof);

    }

    // line 93
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_b15adc5f31cb9ea852fe0ec3fcced905a672d2f32f4c8551f8c1983ff7d6e431 = $this->env->getExtension("native_profiler");
        $__internal_b15adc5f31cb9ea852fe0ec3fcced905a672d2f32f4c8551f8c1983ff7d6e431->enter($__internal_b15adc5f31cb9ea852fe0ec3fcced905a672d2f32f4c8551f8c1983ff7d6e431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 94
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_b15adc5f31cb9ea852fe0ec3fcced905a672d2f32f4c8551f8c1983ff7d6e431->leave($__internal_b15adc5f31cb9ea852fe0ec3fcced905a672d2f32f4c8551f8c1983ff7d6e431_prof);

    }

    // line 100
    public function block_logo($context, array $blocks = array())
    {
        $__internal_dd9386f6355fc7b3f7e16fbc9a32760dce6d6df2e7e9edf13231224d2a0c3f38 = $this->env->getExtension("native_profiler");
        $__internal_dd9386f6355fc7b3f7e16fbc9a32760dce6d6df2e7e9edf13231224d2a0c3f38->enter($__internal_dd9386f6355fc7b3f7e16fbc9a32760dce6d6df2e7e9edf13231224d2a0c3f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 101
        echo "                    ";
        ob_start();
        // line 102
        echo "                    <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 103
        if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 104
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "\">
                        ";
        }
        // line 106
        echo "                        ";
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 107
            echo "                            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "</span>
                        ";
        }
        // line 109
        echo "                    </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 111
        echo "                ";
        
        $__internal_dd9386f6355fc7b3f7e16fbc9a32760dce6d6df2e7e9edf13231224d2a0c3f38->leave($__internal_dd9386f6355fc7b3f7e16fbc9a32760dce6d6df2e7e9edf13231224d2a0c3f38_prof);

    }

    // line 112
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_0c8eeff4417f52631948133cf1751b60acf0b1baaa7a82d3b9e5d5e53fd7e9b5 = $this->env->getExtension("native_profiler");
        $__internal_0c8eeff4417f52631948133cf1751b60acf0b1baaa7a82d3b9e5d5e53fd7e9b5->enter($__internal_0c8eeff4417f52631948133cf1751b60acf0b1baaa7a82d3b9e5d5e53fd7e9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 113
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 114
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 123
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 148
            echo "                            </div>

                            ";
            // line 150
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 170
            echo "                        </nav>
                    ";
        }
        // line 172
        echo "                ";
        
        $__internal_0c8eeff4417f52631948133cf1751b60acf0b1baaa7a82d3b9e5d5e53fd7e9b5->leave($__internal_0c8eeff4417f52631948133cf1751b60acf0b1baaa7a82d3b9e5d5e53fd7e9b5_prof);

    }

    // line 123
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_7ccda2703cbf7fc2f929f6d20131391197b0a819e3f76baa800f3dbe3080dee8 = $this->env->getExtension("native_profiler");
        $__internal_7ccda2703cbf7fc2f929f6d20131391197b0a819e3f76baa800f3dbe3080dee8->enter($__internal_7ccda2703cbf7fc2f929f6d20131391197b0a819e3f76baa800f3dbe3080dee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 124
        echo "                                    ";
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 125
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 126
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 127
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 128
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 129
                        echo "                                                        ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 130
                            echo "                                                            <li>
                                                                ";
                            // line 131
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 132
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                                ";
                            } else {
                                // line 134
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 136
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 138
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 140
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "                                                ";
                }
                // line 142
                echo "                                            ";
            } else {
                // line 143
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 145
            echo "                                        </ol>
                                    ";
        }
        // line 147
        echo "                                ";
        
        $__internal_7ccda2703cbf7fc2f929f6d20131391197b0a819e3f76baa800f3dbe3080dee8->leave($__internal_7ccda2703cbf7fc2f929f6d20131391197b0a819e3f76baa800f3dbe3080dee8_prof);

    }

    // line 150
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_f6a478fcb062a3847305759fa947e7210ecef7315e841dd534e2dc28dd05d576 = $this->env->getExtension("native_profiler");
        $__internal_f6a478fcb062a3847305759fa947e7210ecef7315e841dd534e2dc28dd05d576->enter($__internal_f6a478fcb062a3847305759fa947e7210ecef7315e841dd534e2dc28dd05d576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 151
        echo "                                <div class=\"navbar-right\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 157
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 157)->display($context);
        // line 158
        echo "                                        </li>
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 164
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 164)->display($context);
        // line 165
        echo "                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
        
        $__internal_f6a478fcb062a3847305759fa947e7210ecef7315e841dd534e2dc28dd05d576->leave($__internal_f6a478fcb062a3847305759fa947e7210ecef7315e841dd534e2dc28dd05d576_prof);

    }

    // line 176
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_39ec53739234f9f1f8160de0127b9cfce195a09ce35608a202c31f45cce71341 = $this->env->getExtension("native_profiler");
        $__internal_39ec53739234f9f1f8160de0127b9cfce195a09ce35608a202c31f45cce71341->enter($__internal_39ec53739234f9f1f8160de0127b9cfce195a09ce35608a202c31f45cce71341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 177
        echo "            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                ";
        // line 178
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 250
        echo "
                <aside class=\"right-side\">
                    ";
        // line 252
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 329
        echo "                </aside>

            </div>
        ";
        
        $__internal_39ec53739234f9f1f8160de0127b9cfce195a09ce35608a202c31f45cce71341->leave($__internal_39ec53739234f9f1f8160de0127b9cfce195a09ce35608a202c31f45cce71341_prof);

    }

    // line 178
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_ca40c2e5de5629db6b9f0ded2008ca70e82a7a446528a1dbfaee658ba13f3a5e = $this->env->getExtension("native_profiler");
        $__internal_ca40c2e5de5629db6b9f0ded2008ca70e82a7a446528a1dbfaee658ba13f3a5e->enter($__internal_ca40c2e5de5629db6b9f0ded2008ca70e82a7a446528a1dbfaee658ba13f3a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 179
        echo "                    <aside class=\"left-side sidebar-offcanvas\">
                        <section class=\"sidebar\">
                            ";
        // line 181
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 247
        echo "                        </section>
                    </aside>
                ";
        
        $__internal_ca40c2e5de5629db6b9f0ded2008ca70e82a7a446528a1dbfaee658ba13f3a5e->leave($__internal_ca40c2e5de5629db6b9f0ded2008ca70e82a7a446528a1dbfaee658ba13f3a5e_prof);

    }

    // line 181
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_0472b5b725ff40ddef647b269ba1fb8f589d4ada58af06e058b8ec5d6b8bedeb = $this->env->getExtension("native_profiler");
        $__internal_0472b5b725ff40ddef647b269ba1fb8f589d4ada58af06e058b8ec5d6b8bedeb->enter($__internal_0472b5b725ff40ddef647b269ba1fb8f589d4ada58af06e058b8ec5d6b8bedeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 182
        echo "                                ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 196
        echo "
                                ";
        // line 197
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 198
        echo "                                ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 243
        echo "                                ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 246
        echo "                            ";
        
        $__internal_0472b5b725ff40ddef647b269ba1fb8f589d4ada58af06e058b8ec5d6b8bedeb->leave($__internal_0472b5b725ff40ddef647b269ba1fb8f589d4ada58af06e058b8ec5d6b8bedeb_prof);

    }

    // line 182
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_c65bdb216a1cb43684073aec8dcdf249208947b84c5cc9bd408eff91f6299a47 = $this->env->getExtension("native_profiler");
        $__internal_c65bdb216a1cb43684073aec8dcdf249208947b84c5cc9bd408eff91f6299a47->enter($__internal_c65bdb216a1cb43684073aec8dcdf249208947b84c5cc9bd408eff91f6299a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 183
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 184
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                            <div class=\"input-group custom-search-form\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-flat\" type=\"submit\">
                                                            <i class=\"fa fa-search\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </form>
                                    ";
        }
        // line 195
        echo "                                ";
        
        $__internal_c65bdb216a1cb43684073aec8dcdf249208947b84c5cc9bd408eff91f6299a47->leave($__internal_c65bdb216a1cb43684073aec8dcdf249208947b84c5cc9bd408eff91f6299a47_prof);

    }

    // line 197
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_c312007ff56d9713c9e7dd2a1ef5cf4c662603aaeb8c29eb78c6eb68eaeaf744 = $this->env->getExtension("native_profiler");
        $__internal_c312007ff56d9713c9e7dd2a1ef5cf4c662603aaeb8c29eb78c6eb68eaeaf744->enter($__internal_c312007ff56d9713c9e7dd2a1ef5cf4c662603aaeb8c29eb78c6eb68eaeaf744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_c312007ff56d9713c9e7dd2a1ef5cf4c662603aaeb8c29eb78c6eb68eaeaf744->leave($__internal_c312007ff56d9713c9e7dd2a1ef5cf4c662603aaeb8c29eb78c6eb68eaeaf744_prof);

    }

    // line 198
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_5885b5796ed703f4cf32a28293b4d77ca2d6ee40274f082082f57f8308b37b3c = $this->env->getExtension("native_profiler");
        $__internal_5885b5796ed703f4cf32a28293b4d77ca2d6ee40274f082082f57f8308b37b3c->enter($__internal_5885b5796ed703f4cf32a28293b4d77ca2d6ee40274f082082f57f8308b37b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 199
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 200
            echo "                                        <ul class=\"sidebar-menu\">
                                            ";
            // line 201
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 202
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 203
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 204
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                        // line 205
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "
                                                ";
                // line 208
                echo "                                                ";
                $context["item_count"] = 0;
                // line 209
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 210
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 211
                            echo "                                                        ";
                            if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                                // line 212
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 213
                                echo "                                                        ";
                            }
                            // line 214
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 215
                    echo "                                                ";
                }
                // line 216
                echo "
                                                ";
                // line 217
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 218
                    echo "                                                    ";
                    $context["active"] = false;
                    // line 219
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 220
                        echo "                                                        ";
                        if ((($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array())))) {
                            // line 221
                            echo "                                                            ";
                            $context["active"] = true;
                            // line 222
                            echo "                                                        ";
                        }
                        // line 223
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 224
                    echo "                                                    <li class=\"treeview";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                        <a href=\"#\">
                                                            ";
                    // line 226
                    if ((($this->getAttribute($context["group"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group"], "icon", array()))) : (""))) {
                        echo $this->getAttribute($context["group"], "icon", array());
                    }
                    // line 227
                    echo "                                                            <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                    echo "</span>
                                                            <i class=\"fa pull-right fa-angle-left\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu";
                    // line 230
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                            ";
                    // line 231
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 232
                        echo "                                                                ";
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                            // line 233
                            echo "                                                                    <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array()))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 235
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 236
                    echo "                                                        </ul>
                                                    </li>
                                                ";
                }
                // line 239
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "                                        </ul>
                                    ";
        }
        // line 242
        echo "                                ";
        
        $__internal_5885b5796ed703f4cf32a28293b4d77ca2d6ee40274f082082f57f8308b37b3c->leave($__internal_5885b5796ed703f4cf32a28293b4d77ca2d6ee40274f082082f57f8308b37b3c_prof);

    }

    // line 243
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_3169c56b4eb9f10f87809f8670c34d70ffd796d51139f0dc5822253a01093563 = $this->env->getExtension("native_profiler");
        $__internal_3169c56b4eb9f10f87809f8670c34d70ffd796d51139f0dc5822253a01093563->enter($__internal_3169c56b4eb9f10f87809f8670c34d70ffd796d51139f0dc5822253a01093563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 244
        echo "                                    <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a></p>
                                ";
        
        $__internal_3169c56b4eb9f10f87809f8670c34d70ffd796d51139f0dc5822253a01093563->leave($__internal_3169c56b4eb9f10f87809f8670c34d70ffd796d51139f0dc5822253a01093563_prof);

    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_7f7fe1f0274b04a540f9cc587b4fdc67fe87ebbfe4ae88c240f03475e3beb9e4 = $this->env->getExtension("native_profiler");
        $__internal_7f7fe1f0274b04a540f9cc587b4fdc67fe87ebbfe4ae88c240f03475e3beb9e4->enter($__internal_7f7fe1f0274b04a540f9cc587b4fdc67fe87ebbfe4ae88c240f03475e3beb9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 253
        echo "                        <section class=\"content-header\">
                            ";
        // line 254
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 288
        echo "                        </section>

                        <section class=\"content\">
                            ";
        // line 291
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 327
        echo "                        </section>
                    ";
        
        $__internal_7f7fe1f0274b04a540f9cc587b4fdc67fe87ebbfe4ae88c240f03475e3beb9e4->leave($__internal_7f7fe1f0274b04a540f9cc587b4fdc67fe87ebbfe4ae88c240f03475e3beb9e4_prof);

    }

    // line 254
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_4a0754e4582065088ebc841cfe3263f550a51abc068cd8a1ed7cbab265071906 = $this->env->getExtension("native_profiler");
        $__internal_4a0754e4582065088ebc841cfe3263f550a51abc068cd8a1ed7cbab265071906->enter($__internal_4a0754e4582065088ebc841cfe3263f550a51abc068cd8a1ed7cbab265071906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 255
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 286
        echo "
                            ";
        
        $__internal_4a0754e4582065088ebc841cfe3263f550a51abc068cd8a1ed7cbab265071906->leave($__internal_4a0754e4582065088ebc841cfe3263f550a51abc068cd8a1ed7cbab265071906_prof);

    }

    // line 255
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_92b0a466a6a4ede1484df7028c52e97ea482cf7d10f129cc49b0fde887f45997 = $this->env->getExtension("native_profiler");
        $__internal_92b0a466a6a4ede1484df7028c52e97ea482cf7d10f129cc49b0fde887f45997->enter($__internal_92b0a466a6a4ede1484df7028c52e97ea482cf7d10f129cc49b0fde887f45997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 256
        echo "                                    ";
        if (( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
            // line 257
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            ";
            // line 258
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 265
            echo "                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 267
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 268
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 270
            echo "                                                </div>

                                                ";
            // line 272
            if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
                // line 273
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 275
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 277
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 282
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 285
        echo "                                ";
        
        $__internal_92b0a466a6a4ede1484df7028c52e97ea482cf7d10f129cc49b0fde887f45997->leave($__internal_92b0a466a6a4ede1484df7028c52e97ea482cf7d10f129cc49b0fde887f45997_prof);

    }

    // line 258
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_175537d736dfe1245ff47fca0525d41a749abe31bbf2a661d4f615bdb8857f8f = $this->env->getExtension("native_profiler");
        $__internal_175537d736dfe1245ff47fca0525d41a749abe31bbf2a661d4f615bdb8857f8f->enter($__internal_175537d736dfe1245ff47fca0525d41a749abe31bbf2a661d4f615bdb8857f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 259
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 260
            echo "                                                    <div class=\"navbar-header\">
                                                        <span class=\"navbar-brand\">";
            // line 261
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</span>
                                                    </div>
                                                ";
        }
        // line 264
        echo "                                            ";
        
        $__internal_175537d736dfe1245ff47fca0525d41a749abe31bbf2a661d4f615bdb8857f8f->leave($__internal_175537d736dfe1245ff47fca0525d41a749abe31bbf2a661d4f615bdb8857f8f_prof);

    }

    // line 291
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_11db4f8b40389d5cd20ac78287ffb23a5a8d9da3284ec2507beecf2a8f5672ba = $this->env->getExtension("native_profiler");
        $__internal_11db4f8b40389d5cd20ac78287ffb23a5a8d9da3284ec2507beecf2a8f5672ba->enter($__internal_11db4f8b40389d5cd20ac78287ffb23a5a8d9da3284ec2507beecf2a8f5672ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 292
        echo "
                                ";
        // line 293
        $this->displayBlock('notice', $context, $blocks);
        // line 296
        echo "
                                ";
        // line 297
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 298
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                ";
        }
        // line 300
        echo "
                                ";
        // line 301
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 302
            echo "                                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                ";
        }
        // line 304
        echo "
                                ";
        // line 305
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 306
            echo "                                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                ";
        }
        // line 308
        echo "
                                ";
        // line 309
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 310
            echo "                                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                ";
        }
        // line 312
        echo "
                                ";
        // line 313
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 314
            echo "                                    <div class=\"row\">
                                        <div class=\"sonata-ba-list ";
            // line 315
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 316
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                        </div>

                                        ";
            // line 319
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 320
                echo "                                            <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 321
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                            </div>
                                        ";
            }
            // line 324
            echo "                                    </div>
                                ";
        }
        // line 326
        echo "                            ";
        
        $__internal_11db4f8b40389d5cd20ac78287ffb23a5a8d9da3284ec2507beecf2a8f5672ba->leave($__internal_11db4f8b40389d5cd20ac78287ffb23a5a8d9da3284ec2507beecf2a8f5672ba_prof);

    }

    // line 293
    public function block_notice($context, array $blocks = array())
    {
        $__internal_9c29f4ca9b9c6462b4355dfa7ecec62f6d63c1b3c17d131de439a4755de052b1 = $this->env->getExtension("native_profiler");
        $__internal_9c29f4ca9b9c6462b4355dfa7ecec62f6d63c1b3c17d131de439a4755de052b1->enter($__internal_9c29f4ca9b9c6462b4355dfa7ecec62f6d63c1b3c17d131de439a4755de052b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 294
        echo "                                    ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 294)->display($context);
        // line 295
        echo "                                ";
        
        $__internal_9c29f4ca9b9c6462b4355dfa7ecec62f6d63c1b3c17d131de439a4755de052b1->leave($__internal_9c29f4ca9b9c6462b4355dfa7ecec62f6d63c1b3c17d131de439a4755de052b1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1182 => 295,  1179 => 294,  1173 => 293,  1166 => 326,  1162 => 324,  1156 => 321,  1153 => 320,  1151 => 319,  1145 => 316,  1137 => 315,  1134 => 314,  1132 => 313,  1129 => 312,  1123 => 310,  1121 => 309,  1118 => 308,  1112 => 306,  1110 => 305,  1107 => 304,  1101 => 302,  1099 => 301,  1096 => 300,  1090 => 298,  1088 => 297,  1085 => 296,  1083 => 293,  1080 => 292,  1074 => 291,  1067 => 264,  1061 => 261,  1058 => 260,  1055 => 259,  1049 => 258,  1042 => 285,  1037 => 282,  1029 => 277,  1024 => 275,  1020 => 273,  1018 => 272,  1014 => 270,  1008 => 268,  1006 => 267,  1002 => 265,  1000 => 258,  997 => 257,  994 => 256,  988 => 255,  980 => 286,  977 => 255,  971 => 254,  963 => 327,  961 => 291,  956 => 288,  954 => 254,  951 => 253,  945 => 252,  937 => 244,  931 => 243,  924 => 242,  920 => 240,  914 => 239,  909 => 236,  903 => 235,  891 => 233,  888 => 232,  884 => 231,  878 => 230,  871 => 227,  867 => 226,  859 => 224,  853 => 223,  850 => 222,  847 => 221,  844 => 220,  839 => 219,  836 => 218,  834 => 217,  831 => 216,  828 => 215,  821 => 214,  818 => 213,  815 => 212,  812 => 211,  806 => 210,  803 => 209,  800 => 208,  797 => 206,  790 => 205,  787 => 204,  781 => 203,  778 => 202,  774 => 201,  771 => 200,  768 => 199,  762 => 198,  750 => 197,  743 => 195,  729 => 186,  723 => 184,  720 => 183,  714 => 182,  707 => 246,  704 => 243,  701 => 198,  699 => 197,  696 => 196,  693 => 182,  687 => 181,  678 => 247,  676 => 181,  672 => 179,  666 => 178,  656 => 329,  654 => 252,  650 => 250,  648 => 178,  645 => 177,  639 => 176,  628 => 165,  626 => 164,  618 => 158,  616 => 157,  608 => 151,  602 => 150,  595 => 147,  591 => 145,  585 => 143,  582 => 142,  579 => 141,  565 => 140,  559 => 138,  555 => 136,  549 => 134,  541 => 132,  539 => 131,  536 => 130,  533 => 129,  515 => 128,  512 => 127,  510 => 126,  507 => 125,  504 => 124,  498 => 123,  491 => 172,  487 => 170,  485 => 150,  481 => 148,  479 => 123,  468 => 114,  465 => 113,  459 => 112,  452 => 111,  448 => 109,  442 => 107,  439 => 106,  431 => 104,  429 => 103,  424 => 102,  421 => 101,  415 => 100,  404 => 96,  400 => 94,  394 => 93,  386 => 173,  383 => 112,  380 => 100,  378 => 93,  375 => 92,  369 => 91,  357 => 90,  350 => 87,  347 => 86,  344 => 85,  330 => 84,  325 => 82,  322 => 81,  318 => 79,  315 => 78,  312 => 77,  295 => 76,  292 => 75,  289 => 74,  283 => 72,  281 => 71,  275 => 69,  269 => 68,  261 => 64,  258 => 63,  252 => 61,  249 => 60,  246 => 58,  241 => 57,  238 => 56,  235 => 55,  232 => 53,  223 => 51,  219 => 50,  212 => 46,  208 => 44,  202 => 43,  194 => 42,  186 => 41,  182 => 39,  176 => 38,  168 => 35,  159 => 33,  155 => 32,  152 => 31,  146 => 30,  137 => 26,  131 => 25,  119 => 23,  110 => 333,  108 => 176,  105 => 175,  103 => 91,  99 => 90,  95 => 88,  93 => 68,  89 => 66,  87 => 38,  84 => 37,  82 => 30,  79 => 29,  77 => 25,  72 => 23,  69 => 22,  67 => 21,  65 => 20,  63 => 19,  61 => 18,  59 => 17,  57 => 16,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  47 => 11,);
    }
}
