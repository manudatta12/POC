<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_77dfc2cc5be2c7c836cbcb6689a736820c08b3a79fd7410afde687623a5c1e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e138bc766a4cf747f82aa3e3d656ba9a7c7e612ad440d2c0ba4e3adc1c6863d6 = $this->env->getExtension("native_profiler");
        $__internal_e138bc766a4cf747f82aa3e3d656ba9a7c7e612ad440d2c0ba4e3adc1c6863d6->enter($__internal_e138bc766a4cf747f82aa3e3d656ba9a7c7e612ad440d2c0ba4e3adc1c6863d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e138bc766a4cf747f82aa3e3d656ba9a7c7e612ad440d2c0ba4e3adc1c6863d6->leave($__internal_e138bc766a4cf747f82aa3e3d656ba9a7c7e612ad440d2c0ba4e3adc1c6863d6_prof);

    }

    // line 14
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_0ae4b8fdebf24e0a1d713929aaa480c21c0d00158be0f9a4c16a7c6530d85cc8 = $this->env->getExtension("native_profiler");
        $__internal_0ae4b8fdebf24e0a1d713929aaa480c21c0d00158be0f9a4c16a7c6530d85cc8->enter($__internal_0ae4b8fdebf24e0a1d713929aaa480c21c0d00158be0f9a4c16a7c6530d85cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 15
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 16
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help")))) {
            // line 17
            echo "        <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help"));
            echo "</span>
    ";
        }
        
        $__internal_0ae4b8fdebf24e0a1d713929aaa480c21c0d00158be0f9a4c16a7c6530d85cc8->leave($__internal_0ae4b8fdebf24e0a1d713929aaa480c21c0d00158be0f9a4c16a7c6530d85cc8_prof);

    }

    // line 21
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_cb74d57d10618615f10d74bd5df61329a378d105cdf1083e46bebaab61f88d0e = $this->env->getExtension("native_profiler");
        $__internal_cb74d57d10618615f10d74bd5df61329a378d105cdf1083e46bebaab61f88d0e->enter($__internal_cb74d57d10618615f10d74bd5df61329a378d105cdf1083e46bebaab61f88d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 22
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 23
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_cb74d57d10618615f10d74bd5df61329a378d105cdf1083e46bebaab61f88d0e->leave($__internal_cb74d57d10618615f10d74bd5df61329a378d105cdf1083e46bebaab61f88d0e_prof);

    }

    // line 26
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9228cf150d9e725ea3871244a90cfbf62ccbcdc2b03821fba4fa7bcdde77c5cc = $this->env->getExtension("native_profiler");
        $__internal_9228cf150d9e725ea3871244a90cfbf62ccbcdc2b03821fba4fa7bcdde77c5cc->enter($__internal_9228cf150d9e725ea3871244a90cfbf62ccbcdc2b03821fba4fa7bcdde77c5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 27
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 28
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_9228cf150d9e725ea3871244a90cfbf62ccbcdc2b03821fba4fa7bcdde77c5cc->leave($__internal_9228cf150d9e725ea3871244a90cfbf62ccbcdc2b03821fba4fa7bcdde77c5cc_prof);

    }

    // line 32
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_bb0aa5a01558a3ee31a65cc8638154833f8dc67d5fd9be2b378c8527161a3c35 = $this->env->getExtension("native_profiler");
        $__internal_bb0aa5a01558a3ee31a65cc8638154833f8dc67d5fd9be2b378c8527161a3c35->enter($__internal_bb0aa5a01558a3ee31a65cc8638154833f8dc67d5fd9be2b378c8527161a3c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 33
        ob_start();
        // line 34
        echo "
    ";
        // line 35
        $context["label_class"] = "";
        // line 36
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 37
            echo "        ";
            $context["label_class"] = " control-label col-sm-3";
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "        ";
            $context["label_class"] = " control-label";
            // line 40
            echo "    ";
        }
        // line 41
        echo "
    ";
        // line 43
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 44
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))));
            // line 45
            echo "
        ";
            // line 46
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 47
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 48
                echo "        ";
            }
            // line 49
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 50
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 51
                echo "        ";
            }
            // line 52
            echo "
        ";
            // line 53
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 54
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 55
                echo "        ";
            }
            // line 56
            echo "
        ";
            // line 57
            if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : $this->getContext($context, "in_list_checkbox"))) && array_key_exists("widget", $context))) {
                // line 58
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 59
                echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                echo "
                <span>
                    ";
                // line 61
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 66
                echo "                </span>
            </label>
        ";
            } else {
                // line 69
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 70
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 73
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 75
                echo "            </label>
        ";
            }
            // line 77
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bb0aa5a01558a3ee31a65cc8638154833f8dc67d5fd9be2b378c8527161a3c35->leave($__internal_bb0aa5a01558a3ee31a65cc8638154833f8dc67d5fd9be2b378c8527161a3c35_prof);

    }

    // line 81
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        $__internal_2ca9f607f8608d569171e7101b4ac919d48b02712c02d0777a3c72df4d697bbf = $this->env->getExtension("native_profiler");
        $__internal_2ca9f607f8608d569171e7101b4ac919d48b02712c02d0777a3c72df4d697bbf->enter($__internal_2ca9f607f8608d569171e7101b4ac919d48b02712c02d0777a3c72df4d697bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes_choice_widget"));

        // line 82
        echo "    ";
        ob_start();
        // line 83
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"
        ";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            if (($context["attrname"] == "class")) {
                echo "list-unstyled ";
            }
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        ";
        if (!twig_in_filter("class", (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")))) {
            echo "class=\"list-unstyled\"";
        }
        // line 86
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2ca9f607f8608d569171e7101b4ac919d48b02712c02d0777a3c72df4d697bbf->leave($__internal_2ca9f607f8608d569171e7101b4ac919d48b02712c02d0777a3c72df4d697bbf_prof);

    }

    // line 89
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_be9d6eefca68e7e6e439371cdf8c3c6ada3e06186494f8cfcce8c781e55e92b1 = $this->env->getExtension("native_profiler");
        $__internal_be9d6eefca68e7e6e439371cdf8c3c6ada3e06186494f8cfcce8c781e55e92b1->enter($__internal_be9d6eefca68e7e6e439371cdf8c3c6ada3e06186494f8cfcce8c781e55e92b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 90
        ob_start();
        // line 91
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 93
            echo "            <li>
                ";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 95
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_be9d6eefca68e7e6e439371cdf8c3c6ada3e06186494f8cfcce8c781e55e92b1->leave($__internal_be9d6eefca68e7e6e439371cdf8c3c6ada3e06186494f8cfcce8c781e55e92b1_prof);

    }

    // line 102
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_b79879438c16b8aa1a01e873929f5e549a49aeb90a74a9a96e7eb4cc306be8b8 = $this->env->getExtension("native_profiler");
        $__internal_b79879438c16b8aa1a01e873929f5e549a49aeb90a74a9a96e7eb4cc306be8b8->enter($__internal_b79879438c16b8aa1a01e873929f5e549a49aeb90a74a9a96e7eb4cc306be8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 103
        ob_start();
        // line 104
        echo "    ";
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 105
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 107
                echo "            <li>
                ";
                // line 108
                ob_start();
                // line 109
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
                echo " ";
                // line 110
                echo "                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 111
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : $this->getContext($context, "form_widget_content"))) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "label", array()), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "        </ul>
    ";
        } else {
            // line 116
            echo "    ";
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "use_select2"), "method"))) {
                // line 117
                echo "        ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
                // line 118
                echo "    ";
            }
            // line 119
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 120
            if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
                // line 121
                echo "            <option value=\"\">
                ";
                // line 122
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 125
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 127
                echo "            </option>
        ";
            }
            // line 129
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 130
                echo "            ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 131
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 132
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0)) {
                    // line 133
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
            ";
                }
                // line 135
                echo "        ";
            }
            // line 136
            echo "        ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 137
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b79879438c16b8aa1a01e873929f5e549a49aeb90a74a9a96e7eb4cc306be8b8->leave($__internal_b79879438c16b8aa1a01e873929f5e549a49aeb90a74a9a96e7eb4cc306be8b8_prof);

    }

    // line 143
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1228449312cafdee2ba95e466a402b1bcd9fdbea65d0eede123fef397586d1a8 = $this->env->getExtension("native_profiler");
        $__internal_1228449312cafdee2ba95e466a402b1bcd9fdbea65d0eede123fef397586d1a8->enter($__internal_1228449312cafdee2ba95e466a402b1bcd9fdbea65d0eede123fef397586d1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 144
        echo "    ";
        $context["label_class"] = "";
        // line 145
        echo "    ";
        $context["div_class"] = "";
        // line 146
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 147
            echo "        ";
            $context["label_class"] = "control-label col-sm-3";
            // line 148
            echo "        ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 149
            echo "    ";
        } else {
            // line 150
            echo "        ";
            $context["label_class"] = "control-label";
            // line 151
            echo "    ";
        }
        // line 152
        echo "
    ";
        // line 153
        if ((( !array_key_exists("sonata_admin", $context) ||  !(isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled"))) ||  !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 154
            echo "        <div class=\"form-group ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo " has-error";
            }
            echo "\">
            ";
            // line 155
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"";
            // line 156
            if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 158
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 159
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 160
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                    </div>
                ";
            }
            // line 163
            echo "            </div>
        </div>
    ";
        } else {
            // line 166
            echo "        <div class=\"form-group";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo " has-error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
            ";
            // line 167
            $this->displayBlock('label', $context, $blocks);
            // line 174
            echo "
            ";
            // line 175
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) ||  !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false));
            // line 176
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
            echo " sonata-ba-field sonata-ba-field-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if ( !(isset($context["has_label"]) ? $context["has_label"] : $this->getContext($context, "has_label"))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 178
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 179
            echo "
                ";
            // line 180
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 181
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 182
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                    </div>
                ";
            }
            // line 185
            echo "
                ";
            // line 186
            if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array())) {
                // line 187
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array()), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method");
                echo "</span>
                ";
            }
            // line 189
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_1228449312cafdee2ba95e466a402b1bcd9fdbea65d0eede123fef397586d1a8->leave($__internal_1228449312cafdee2ba95e466a402b1bcd9fdbea65d0eede123fef397586d1a8_prof);

    }

    // line 167
    public function block_label($context, array $blocks = array())
    {
        $__internal_05ed0cdd6771955d8108f2625b500abdc49d2d780b84d5e8413b6ae20b520c44 = $this->env->getExtension("native_profiler");
        $__internal_05ed0cdd6771955d8108f2625b500abdc49d2d780b84d5e8413b6ae20b520c44->enter($__internal_05ed0cdd6771955d8108f2625b500abdc49d2d780b84d5e8413b6ae20b520c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 168
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 169
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 171
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 173
        echo "            ";
        
        $__internal_05ed0cdd6771955d8108f2625b500abdc49d2d780b84d5e8413b6ae20b520c44->leave($__internal_05ed0cdd6771955d8108f2625b500abdc49d2d780b84d5e8413b6ae20b520c44_prof);

    }

    // line 194
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        $__internal_cfebcd3d8b92302488f1e3ebfeb8c64639a0b0cdd18745cbcfe7356d846eacad = $this->env->getExtension("native_profiler");
        $__internal_cfebcd3d8b92302488f1e3ebfeb8c64639a0b0cdd18745cbcfe7356d846eacad->enter($__internal_cfebcd3d8b92302488f1e3ebfeb8c64639a0b0cdd18745cbcfe7356d846eacad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 195
        ob_start();
        // line 196
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 197
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 198
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"fa fa-minus-circle\"></i></a>
        ";
        }
        // line 200
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cfebcd3d8b92302488f1e3ebfeb8c64639a0b0cdd18745cbcfe7356d846eacad->leave($__internal_cfebcd3d8b92302488f1e3ebfeb8c64639a0b0cdd18745cbcfe7356d846eacad_prof);

    }

    // line 205
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        $__internal_a5de3b0910da045c9da339cc271515eca22c1e1df8f5a7bc6be4387b2986f1b9 = $this->env->getExtension("native_profiler");
        $__internal_a5de3b0910da045c9da339cc271515eca22c1e1df8f5a7bc6be4387b2986f1b9->enter($__internal_a5de3b0910da045c9da339cc271515eca22c1e1df8f5a7bc6be4387b2986f1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 206
        ob_start();
        // line 207
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 208
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 209
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array()), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 210
            echo "    ";
        }
        // line 211
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 213
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 214
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 217
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 218
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"fa fa-plus-circle\"></i></a></div>
        ";
        }
        // line 220
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a5de3b0910da045c9da339cc271515eca22c1e1df8f5a7bc6be4387b2986f1b9->leave($__internal_a5de3b0910da045c9da339cc271515eca22c1e1df8f5a7bc6be4387b2986f1b9_prof);

    }

    // line 224
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        $__internal_b501e7a9db922489ef76e4d8ffeeeb1b2a54473b37b3ca8a6f9f672e5ac5b194 = $this->env->getExtension("native_profiler");
        $__internal_b501e7a9db922489ef76e4d8ffeeeb1b2a54473b37b3ca8a6f9f672e5ac5b194->enter($__internal_b501e7a9db922489ef76e4d8ffeeeb1b2a54473b37b3ca8a6f9f672e5ac5b194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 225
        echo "    ";
        ob_start();
        // line 226
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 229
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 230
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "
            ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b501e7a9db922489ef76e4d8ffeeeb1b2a54473b37b3ca8a6f9f672e5ac5b194->leave($__internal_b501e7a9db922489ef76e4d8ffeeeb1b2a54473b37b3ca8a6f9f672e5ac5b194_prof);

    }

    // line 238
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        $__internal_855e084c5917d467ce6032332823aa9cae0b0dab239917f690a44c98d9b71d34 = $this->env->getExtension("native_profiler");
        $__internal_855e084c5917d467ce6032332823aa9cae0b0dab239917f690a44c98d9b71d34->enter($__internal_855e084c5917d467ce6032332823aa9cae0b0dab239917f690a44c98d9b71d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 239
        echo "    ";
        ob_start();
        // line 240
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
        echo "\">

            ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 244
        $context["div_class"] = "";
        // line 245
        echo "            ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 246
            echo "                ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 247
            echo "            ";
        }
        // line 248
        echo "
            <div class=\"";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 251
        echo "            </div>

            ";
        // line 253
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 254
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 255
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 258
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_855e084c5917d467ce6032332823aa9cae0b0dab239917f690a44c98d9b71d34->leave($__internal_855e084c5917d467ce6032332823aa9cae0b0dab239917f690a44c98d9b71d34_prof);

    }

    // line 262
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_b66fe5f7e3f5710179f350bc32f9990dfabd194ccce1d8ed759b2d0bd181bb69 = $this->env->getExtension("native_profiler");
        $__internal_b66fe5f7e3f5710179f350bc32f9990dfabd194ccce1d8ed759b2d0bd181bb69->enter($__internal_b66fe5f7e3f5710179f350bc32f9990dfabd194ccce1d8ed759b2d0bd181bb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 263
        ob_start();
        // line 264
        echo "
    ";
        // line 265
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "

    ";
        // line 267
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 268
            echo "        ";
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 269
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
            }
            // line 271
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "
    <script>
        (function (\$) {
            var autocompleteInput = \$(\"#";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\");
            autocompleteInput.select2({
                placeholder: \"";
        // line 277
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
        echo "\",
                allowClear: ";
        // line 278
        echo (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 279
        echo (((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 280
        echo (((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) ? ("true") : ("false"));
        echo ",
                minimumInputLength: ";
        // line 281
        echo twig_escape_filter($this->env, (isset($context["minimum_input_length"]) ? $context["minimum_input_length"] : $this->getContext($context, "minimum_input_length")), "html", null, true);
        echo ",
                multiple: ";
        // line 282
        echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("true") : ("false"));
        echo ",
                ajax: {
                    url:  \"";
        // line 284
        echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) ? ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) : (twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "name", array()), (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array()), array())) : (array()))), "js"))), "html", null, true);
        echo "\",
                    dataType: 'json',
                    quietMillis: 100,
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        return {
                                //search term
                                \"";
        // line 290
        echo twig_escape_filter($this->env, (isset($context["req_param_name_search"]) ? $context["req_param_name_search"] : $this->getContext($context, "req_param_name_search")), "html", null, true);
        echo "\": term,

                                // page size
                                \"";
        // line 293
        echo twig_escape_filter($this->env, (isset($context["req_param_name_items_per_page"]) ? $context["req_param_name_items_per_page"] : $this->getContext($context, "req_param_name_items_per_page")), "html", null, true);
        echo "\": ";
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) ? $context["items_per_page"] : $this->getContext($context, "items_per_page")), "html", null, true);
        echo ",

                                // page number
                                \"";
        // line 296
        echo twig_escape_filter($this->env, (isset($context["req_param_name_page_number"]) ? $context["req_param_name_page_number"] : $this->getContext($context, "req_param_name_page_number")), "html", null, true);
        echo "\": page,

                                // admin
                                'uniqid': \"";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "uniqid", array()), "html", null, true);
        echo "\",
                                'code':   \"";
        // line 300
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "code", array()), "html", null, true);
        echo "\",
                                'field':  \"";
        // line 301
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\"

                                // other parameters
                                ";
        // line 304
        if ( !twig_test_empty((isset($context["req_params"]) ? $context["req_params"] : $this->getContext($context, "req_params")))) {
            echo ",";
            // line 305
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["req_params"]) ? $context["req_params"] : $this->getContext($context, "req_params")));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 306
                echo "\"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["key"], "js"), "html", null, true);
                echo "\": \"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["value"], "js"), "html", null, true);
                echo "\"";
                // line 307
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 310
        echo "                            };
                    },
                    results: function (data, page) {
                        // notice we return the value of more so Select2 knows if more results can be loaded
                        return {results: data.items, more: data.more};
                    }
                },
                formatResult: function (item) {
                    return ";
        // line 318
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        echo ";// format of one dropdown item
                },
                formatSelection: function (item) {
                    return ";
        // line 321
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        echo ";// format selected item '<b>'+item.label+'</b>';
                },
                dropdownCssClass: \"";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["dropdown_css_class"]) ? $context["dropdown_css_class"] : $this->getContext($context, "dropdown_css_class")), "html", null, true);
        echo "\",
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            });

            autocompleteInput.on(\"change\", function(e) {

                // console.log(\"change \"+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    if(!\$.isArray(addedItems)) {
                        addedItems = [addedItems];
                    }

                    var length = addedItems.length;
                    for (var i = 0; i < length; i++) {
                        el = addedItems[i];
                        \$(\"#";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiers", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\").append('<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiers", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "[]\" value=\"'+el.id+'\" />');
                    }
                }

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    if(!\$.isArray(removedItems)) {
                        removedItems = [removedItems];
                    }

                    var length = removedItems.length;
                    for (var i = 0; i < length; i++) {
                        el = removedItems[i];
                        \$('#";
        // line 359
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiers", array()), "vars", array()), "id", array()), "html", null, true);
        echo " input:hidden[value=\"'+el.id+'\"]').remove();
                    }
                }
            });

            // Initialise the autocomplete
            var data = [];
            ";
        // line 366
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 367
            echo "data = [";
            // line 368
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "labels", array()));
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
            foreach ($context['_seq'] as $context["key"] => $context["label_text"]) {
                // line 369
                echo "{id: '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "identifiers", array()), $context["key"], array(), "array"), "js"), "html", null, true);
                echo "', label:'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["label_text"], "js"), "html", null, true);
                echo "'}";
                // line 370
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['label_text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "];";
        } elseif ($this->getAttribute($this->getAttribute(        // line 373
(isset($context["value"]) ? $context["value"] : null), "labels", array(), "any", false, true), 0, array(), "array", true, true)) {
            // line 374
            echo "data = {id: '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "identifiers", array()), 0, array(), "array"), "js"), "html", null, true);
            echo "', label:'";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "labels", array()), 0, array(), "array"), "js"), "html", null, true);
            echo "'};";
        }
        // line 376
        echo "            if (undefined==data.length || 0<data.length) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }
        })(jQuery);
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b66fe5f7e3f5710179f350bc32f9990dfabd194ccce1d8ed759b2d0bd181bb69->leave($__internal_b66fe5f7e3f5710179f350bc32f9990dfabd194ccce1d8ed759b2d0bd181bb69_prof);

    }

    // line 318
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        $__internal_ea311db007abdf0af806158c05f7ece123adfc54b9b2bafc31fc8dcba866a306 = $this->env->getExtension("native_profiler");
        $__internal_ea311db007abdf0af806158c05f7ece123adfc54b9b2bafc31fc8dcba866a306->enter($__internal_ea311db007abdf0af806158c05f7ece123adfc54b9b2bafc31fc8dcba866a306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        echo "'<div class=\"sonata-autocomplete-dropdown-item\">'+item.label+'</div>'";
        
        $__internal_ea311db007abdf0af806158c05f7ece123adfc54b9b2bafc31fc8dcba866a306->leave($__internal_ea311db007abdf0af806158c05f7ece123adfc54b9b2bafc31fc8dcba866a306_prof);

    }

    // line 321
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        $__internal_6a381f2587b4265c73a03eae030ee1aa2c9979e95faed900eb8459fccbb6036d = $this->env->getExtension("native_profiler");
        $__internal_6a381f2587b4265c73a03eae030ee1aa2c9979e95faed900eb8459fccbb6036d->enter($__internal_6a381f2587b4265c73a03eae030ee1aa2c9979e95faed900eb8459fccbb6036d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        echo "item.label";
        
        $__internal_6a381f2587b4265c73a03eae030ee1aa2c9979e95faed900eb8459fccbb6036d->leave($__internal_6a381f2587b4265c73a03eae030ee1aa2c9979e95faed900eb8459fccbb6036d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1199 => 321,  1187 => 318,  1174 => 376,  1167 => 374,  1165 => 373,  1163 => 372,  1147 => 370,  1141 => 369,  1124 => 368,  1122 => 367,  1120 => 366,  1110 => 359,  1090 => 344,  1066 => 323,  1061 => 321,  1055 => 318,  1045 => 310,  1028 => 307,  1022 => 306,  1005 => 305,  1002 => 304,  996 => 301,  992 => 300,  988 => 299,  982 => 296,  974 => 293,  968 => 290,  959 => 284,  954 => 282,  950 => 281,  946 => 280,  942 => 279,  938 => 278,  934 => 277,  929 => 275,  924 => 272,  918 => 271,  912 => 269,  909 => 268,  905 => 267,  900 => 265,  897 => 264,  895 => 263,  889 => 262,  880 => 258,  874 => 255,  871 => 254,  869 => 253,  865 => 251,  862 => 250,  850 => 249,  847 => 248,  844 => 247,  841 => 246,  838 => 245,  836 => 244,  831 => 242,  819 => 240,  816 => 239,  810 => 238,  799 => 233,  796 => 232,  779 => 230,  762 => 229,  757 => 227,  752 => 226,  749 => 225,  743 => 224,  734 => 220,  730 => 218,  728 => 217,  723 => 216,  706 => 214,  689 => 213,  685 => 212,  680 => 211,  677 => 210,  674 => 209,  671 => 208,  668 => 207,  666 => 206,  660 => 205,  648 => 200,  644 => 198,  642 => 197,  639 => 196,  637 => 195,  631 => 194,  624 => 173,  618 => 171,  612 => 169,  609 => 168,  603 => 167,  593 => 189,  587 => 187,  585 => 186,  582 => 185,  576 => 182,  573 => 181,  571 => 180,  568 => 179,  565 => 178,  547 => 176,  545 => 175,  542 => 174,  540 => 167,  531 => 166,  526 => 163,  520 => 160,  517 => 159,  514 => 158,  511 => 157,  505 => 156,  501 => 155,  494 => 154,  492 => 153,  489 => 152,  486 => 151,  483 => 150,  480 => 149,  477 => 148,  474 => 147,  471 => 146,  468 => 145,  465 => 144,  459 => 143,  446 => 137,  443 => 136,  440 => 135,  434 => 133,  432 => 132,  427 => 131,  424 => 130,  421 => 129,  417 => 127,  414 => 125,  411 => 123,  409 => 122,  406 => 121,  404 => 120,  396 => 119,  393 => 118,  390 => 117,  387 => 116,  383 => 114,  373 => 111,  370 => 110,  366 => 109,  364 => 108,  361 => 107,  357 => 106,  352 => 105,  349 => 104,  347 => 103,  341 => 102,  332 => 98,  322 => 95,  319 => 94,  316 => 93,  312 => 92,  307 => 91,  305 => 90,  299 => 89,  291 => 86,  286 => 85,  271 => 84,  266 => 83,  263 => 82,  257 => 81,  248 => 77,  244 => 75,  238 => 73,  235 => 71,  233 => 70,  217 => 69,  212 => 66,  209 => 64,  206 => 62,  204 => 61,  199 => 59,  183 => 58,  181 => 57,  178 => 56,  175 => 55,  172 => 54,  170 => 53,  167 => 52,  164 => 51,  161 => 50,  158 => 49,  155 => 48,  152 => 47,  150 => 46,  147 => 45,  144 => 44,  141 => 43,  138 => 41,  135 => 40,  132 => 39,  129 => 38,  126 => 37,  123 => 36,  121 => 35,  118 => 34,  116 => 33,  110 => 32,  100 => 28,  97 => 27,  91 => 26,  81 => 23,  78 => 22,  72 => 21,  61 => 17,  59 => 16,  55 => 15,  49 => 14,  11 => 12,);
    }
}
