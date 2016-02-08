<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_367b055f4a6eba91145e2fd819ebc0a3c868a10cf93c6bbead87a878daa2692b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff43047236c668f3412a30f6e4d4c67f9ea9e2a0e1f6edc247d5e5850d0b7d0c = $this->env->getExtension("native_profiler");
        $__internal_ff43047236c668f3412a30f6e4d4c67f9ea9e2a0e1f6edc247d5e5850d0b7d0c->enter($__internal_ff43047236c668f3412a30f6e4d4c67f9ea9e2a0e1f6edc247d5e5850d0b7d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff43047236c668f3412a30f6e4d4c67f9ea9e2a0e1f6edc247d5e5850d0b7d0c->leave($__internal_ff43047236c668f3412a30f6e4d4c67f9ea9e2a0e1f6edc247d5e5850d0b7d0c_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2ee87540dc3726a543448445e49bdc155fb60f24038c1fd6aa7fb2db2c7f208a = $this->env->getExtension("native_profiler");
        $__internal_2ee87540dc3726a543448445e49bdc155fb60f24038c1fd6aa7fb2db2c7f208a->enter($__internal_2ee87540dc3726a543448445e49bdc155fb60f24038c1fd6aa7fb2db2c7f208a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 16)->display($context);
        echo "</li>
";
        
        $__internal_2ee87540dc3726a543448445e49bdc155fb60f24038c1fd6aa7fb2db2c7f208a->leave($__internal_2ee87540dc3726a543448445e49bdc155fb60f24038c1fd6aa7fb2db2c7f208a_prof);

    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_9d5195851e937a6e1b67d8c19db52b56652df42a00d12553c767d358884f6d4f = $this->env->getExtension("native_profiler");
        $__internal_9d5195851e937a6e1b67d8c19db52b56652df42a00d12553c767d358884f6d4f->enter($__internal_9d5195851e937a6e1b67d8c19db52b56652df42a00d12553c767d358884f6d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_9d5195851e937a6e1b67d8c19db52b56652df42a00d12553c767d358884f6d4f->leave($__internal_9d5195851e937a6e1b67d8c19db52b56652df42a00d12553c767d358884f6d4f_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_37da5bbd8630d64aeaf4a8f9bf58425eeefdfb3aed4ebd67499a9746a808f5dd = $this->env->getExtension("native_profiler");
        $__internal_37da5bbd8630d64aeaf4a8f9bf58425eeefdfb3aed4ebd67499a9746a808f5dd->enter($__internal_37da5bbd8630d64aeaf4a8f9bf58425eeefdfb3aed4ebd67499a9746a808f5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "    <div class=\"sonata-ba-delete\">
        <h1>";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_batch_confirmation", array("%action%" => (isset($context["action_label"]) ? $context["action_label"] : $this->getContext($context, "action_label"))), "SonataAdminBundle");
        echo "</h1>

        ";
        // line 25
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "all_elements", array())) {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        ";
        } else {
            // line 28
            echo "            ";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx", array())), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx", array()))), "SonataAdminBundle");
            // line 29
            echo "        ";
        }
        // line 30
        echo "
        <div class=\"well well-small form-actions\">
            <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\" >
                <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                <input type=\"hidden\" name=\"data\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                <div style=\"display: none\">
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </div>

                <button type=\"submit\" class=\"btn btn-danger\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                ";
        // line 43
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 44
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                    <a class=\"btn btn-success\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-th-list\"></i> ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 50
        echo "            </form>
        </div>
    </div>
";
        
        $__internal_37da5bbd8630d64aeaf4a8f9bf58425eeefdfb3aed4ebd67499a9746a808f5dd->leave($__internal_37da5bbd8630d64aeaf4a8f9bf58425eeefdfb3aed4ebd67499a9746a808f5dd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 50,  137 => 47,  133 => 46,  127 => 44,  125 => 43,  120 => 41,  114 => 38,  108 => 35,  104 => 34,  99 => 32,  95 => 30,  92 => 29,  89 => 28,  83 => 26,  81 => 25,  76 => 23,  73 => 22,  67 => 21,  55 => 19,  46 => 16,  41 => 15,  35 => 14,  20 => 12,);
    }
}
