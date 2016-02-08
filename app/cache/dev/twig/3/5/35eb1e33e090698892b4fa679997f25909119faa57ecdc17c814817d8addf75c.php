<?php

/* SonataAdminBundle:Core:add_block.html.twig */
class __TwigTemplate_35eb1e33e090698892b4fa679997f25909119faa57ecdc17c814817d8addf75c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b23c2c9fd8bcb3c4bd9fdff9f53cf3eb97bb10682072b413b642cf87d22e276 = $this->env->getExtension("native_profiler");
        $__internal_7b23c2c9fd8bcb3c4bd9fdff9f53cf3eb97bb10682072b413b642cf87d22e276->enter($__internal_7b23c2c9fd8bcb3c4bd9fdff9f53cf3eb97bb10682072b413b642cf87d22e276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:add_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_7b23c2c9fd8bcb3c4bd9fdff9f53cf3eb97bb10682072b413b642cf87d22e276->leave($__internal_7b23c2c9fd8bcb3c4bd9fdff9f53cf3eb97bb10682072b413b642cf87d22e276_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_a43917b2c18fbb18f1ec66bfc5d9f65562ee17a03234f5bc84a2a908926c37f2 = $this->env->getExtension("native_profiler");
        $__internal_a43917b2c18fbb18f1ec66bfc5d9f65562ee17a03234f5bc84a2a908926c37f2->enter($__internal_a43917b2c18fbb18f1ec66bfc5d9f65562ee17a03234f5bc84a2a908926c37f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        $context["items_per_column"] = $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        echo "    ";
        $context["groups"] = array();
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "        ";
            $context["display_group"] = false;
            // line 7
            echo "
        ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                if (((isset($context["display_group"]) ? $context["display_group"] : $this->getContext($context, "display_group")) == false)) {
                    // line 9
                    echo "            ";
                    if (($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 10
                        echo "                ";
                        $context["display_group"] = true;
                        // line 11
                        echo "                ";
                        $context["groups"] = twig_array_merge(array(0 => $context["group"]), (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
                        // line 12
                        echo "            ";
                    }
                    // line 13
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        $context["column_count"] = twig_round((twig_length_filter($this->env, (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) / (isset($context["items_per_column"]) ? $context["items_per_column"] : $this->getContext($context, "items_per_column"))), 0, "ceil");
        // line 17
        echo "
    <div class=\"dropdown-menu multi-column dropdown-add\"
        ";
        // line 19
        if (((isset($context["column_count"]) ? $context["column_count"] : $this->getContext($context, "column_count")) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, ((isset($context["column_count"]) ? $context["column_count"] : $this->getContext($context, "column_count")) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 20
        echo "            >
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 22
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"));
            // line 23
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 24
                    echo "                ";
                    $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                    // line 25
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
            ";
            // line 27
            if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                // line 28
                echo "
                ";
                // line 29
                if (($this->getAttribute($context["loop"], "first", array()) || (($this->getAttribute($context["loop"], "index0", array()) % (isset($context["items_per_column"]) ? $context["items_per_column"] : $this->getContext($context, "items_per_column"))) == 0))) {
                    // line 30
                    echo "                    ";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 31
                        echo "                        <div class=\"container-fluid\">
                            <div class=\"row\">
                    ";
                    } else {
                        // line 34
                        echo "                        </ul>
                    ";
                    }
                    // line 36
                    echo "
                    <ul class=\"dropdown-menu";
                    // line 37
                    if (((isset($context["column_count"]) ? $context["column_count"] : $this->getContext($context, "column_count")) > 1)) {
                        echo " col-md-";
                        echo twig_escape_filter($this->env, twig_round((12 / (isset($context["column_count"]) ? $context["column_count"] : $this->getContext($context, "column_count")))), "html", null, true);
                    }
                    echo "\">
                ";
                }
                // line 39
                echo "
                ";
                // line 40
                if ((($this->getAttribute($context["loop"], "index0", array()) % (isset($context["items_per_column"]) ? $context["items_per_column"] : $this->getContext($context, "items_per_column"))) != 0)) {
                    // line 41
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 43
                echo "                <li role=\"presentation\" class=\"dropdown-header\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                echo "</li>

                ";
                // line 45
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 46
                    echo "                    ";
                    if (($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 47
                        echo "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "create"), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 51
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "
                ";
                // line 53
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 54
                    echo "                            </ul>
                        </div>
                    </div>
                ";
                }
                // line 58
                echo "
            ";
            }
            // line 60
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
";
        
        $__internal_a43917b2c18fbb18f1ec66bfc5d9f65562ee17a03234f5bc84a2a908926c37f2->leave($__internal_a43917b2c18fbb18f1ec66bfc5d9f65562ee17a03234f5bc84a2a908926c37f2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  239 => 61,  225 => 60,  221 => 58,  215 => 54,  213 => 53,  210 => 52,  204 => 51,  196 => 48,  193 => 47,  190 => 46,  186 => 45,  180 => 43,  176 => 41,  174 => 40,  171 => 39,  163 => 37,  160 => 36,  156 => 34,  151 => 31,  148 => 30,  146 => 29,  143 => 28,  141 => 27,  138 => 26,  131 => 25,  128 => 24,  122 => 23,  119 => 22,  102 => 21,  99 => 20,  93 => 19,  89 => 17,  87 => 16,  84 => 15,  78 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  54 => 8,  51 => 7,  48 => 6,  44 => 5,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
