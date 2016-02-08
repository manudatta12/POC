<?php

/* SonataMediaBundle:MediaAdmin:list.html.twig */
class __TwigTemplate_eaf9c8446144005e71d479d65c17e663d34211eb92aa381ecf53e4e50732b0ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataMediaBundle:MediaAdmin:list.html.twig", 12);
        $this->blocks = array(
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1f15cdad0d7f72df4e95da1d4c89221b1f3d7e6abc833789eef1c51cfc4c02f = $this->env->getExtension("native_profiler");
        $__internal_a1f15cdad0d7f72df4e95da1d4c89221b1f3d7e6abc833789eef1c51cfc4c02f->enter($__internal_a1f15cdad0d7f72df4e95da1d4c89221b1f3d7e6abc833789eef1c51cfc4c02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:MediaAdmin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f15cdad0d7f72df4e95da1d4c89221b1f3d7e6abc833789eef1c51cfc4c02f->leave($__internal_a1f15cdad0d7f72df4e95da1d4c89221b1f3d7e6abc833789eef1c51cfc4c02f_prof);

    }

    // line 15
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_3b47fb2d0dddae3ce27795738fed0135b0aab71fb58642d2e85fd59ade0153ef = $this->env->getExtension("native_profiler");
        $__internal_3b47fb2d0dddae3ce27795738fed0135b0aab71fb58642d2e85fd59ade0153ef->enter($__internal_3b47fb2d0dddae3ce27795738fed0135b0aab71fb58642d2e85fd59ade0153ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 16
        echo "    <div class=\"box box-primary\">
        <div class=\"box-body\">
            <ul class=\"nav nav-pills\">
                <li><a><strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_context", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></a></li>
                ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "contexts", array()));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 21
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["context"], "providers", array())) == 0)) {
                // line 22
                echo "                        ";
                $context["urlParams"] = array("context" => $context["name"]);
                // line 23
                echo "                    ";
            } else {
                // line 24
                echo "                        ";
                $context["urlParams"] = array("context" => $context["name"], "provider" => $this->getAttribute($this->getAttribute($context["context"], "providers", array()), 0, array(), "array"));
                // line 25
                echo "                    ";
            }
            // line 26
            echo "
                    ";
            // line 27
            if (($context["name"] == $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()))) {
                // line 28
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["urlParams"]) ? $context["urlParams"] : $this->getContext($context, "urlParams"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["name"], array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 30
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["urlParams"]) ? $context["urlParams"] : $this->getContext($context, "urlParams"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["name"], array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 32
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                ";
        // line 34
        $context["providers"] = $this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "getProviderNamesByContext", array(0 => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array())), "method");
        // line 35
        echo "
                ";
        // line 36
        if ((twig_length_filter($this->env, (isset($context["providers"]) ? $context["providers"] : $this->getContext($context, "providers"))) > 1)) {
            // line 37
            echo "                        </ul>
                    </div>
                    <div class=\"box-footer\">
                        <ul class=\"nav nav-pills\">
                            <li><a><strong>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_provider", array(), "SonataMediaBundle"), "html", null, true);
            echo "</strong></a></li>

                            ";
            // line 43
            if ( !$this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "provider", array())) {
                // line 44
                echo "                                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()), "provider" => null)), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
                            ";
            } else {
                // line 46
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()), "provider" => null)), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
                            ";
            }
            // line 48
            echo "
                            ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) ? $context["providers"] : $this->getContext($context, "providers")));
            foreach ($context['_seq'] as $context["_key"] => $context["provider_name"]) {
                // line 50
                echo "                                ";
                if (($this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "provider", array()) == $context["provider_name"])) {
                    // line 51
                    echo "                                    <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()), "provider" => $context["provider_name"])), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["provider_name"], array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                                ";
                } else {
                    // line 53
                    echo "                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()), "provider" => $context["provider_name"])), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["provider_name"], array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                                ";
                }
                // line 55
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                ";
        }
        // line 57
        echo "            </ul>
        </div>
    </div>

    ";
        // line 61
        $this->displayParentBlock("list_table", $context, $blocks);
        echo "

";
        
        $__internal_3b47fb2d0dddae3ce27795738fed0135b0aab71fb58642d2e85fd59ade0153ef->leave($__internal_3b47fb2d0dddae3ce27795738fed0135b0aab71fb58642d2e85fd59ade0153ef_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 61,  169 => 57,  166 => 56,  160 => 55,  152 => 53,  144 => 51,  141 => 50,  137 => 49,  134 => 48,  126 => 46,  118 => 44,  116 => 43,  111 => 41,  105 => 37,  103 => 36,  100 => 35,  98 => 34,  95 => 33,  89 => 32,  81 => 30,  73 => 28,  71 => 27,  68 => 26,  65 => 25,  62 => 24,  59 => 23,  56 => 22,  53 => 21,  49 => 20,  45 => 19,  40 => 16,  34 => 15,  11 => 12,);
    }
}
