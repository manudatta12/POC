<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_b52cbe05b559d4249aae2bc7a429079b1da760a60c6b89f04c711b4b60f6789b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 36);
        // line 36
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0325116e13336c919f83a828846c688314b4b891acb5c714f7559d47af3d14a0 = $this->env->getExtension("native_profiler");
        $__internal_0325116e13336c919f83a828846c688314b4b891acb5c714f7559d47af3d14a0->enter($__internal_0325116e13336c919f83a828846c688314b4b891acb5c714f7559d47af3d14a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 37
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 37);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0325116e13336c919f83a828846c688314b4b891acb5c714f7559d47af3d14a0->leave($__internal_0325116e13336c919f83a828846c688314b4b891acb5c714f7559d47af3d14a0_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5f5151fd52c0671d5674c1689a3f354aee7b224771fe8da5cf553afcf11ebed = $this->env->getExtension("native_profiler");
        $__internal_a5f5151fd52c0671d5674c1689a3f354aee7b224771fe8da5cf553afcf11ebed->enter($__internal_a5f5151fd52c0671d5674c1689a3f354aee7b224771fe8da5cf553afcf11ebed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_a5f5151fd52c0671d5674c1689a3f354aee7b224771fe8da5cf553afcf11ebed->leave($__internal_a5f5151fd52c0671d5674c1689a3f354aee7b224771fe8da5cf553afcf11ebed_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_e819afd5b423e3edc0a8d3a98b1dfda17d68bd3ce76f6fdd3baebdef63326293 = $this->env->getExtension("native_profiler");
        $__internal_e819afd5b423e3edc0a8d3a98b1dfda17d68bd3ce76f6fdd3baebdef63326293->enter($__internal_e819afd5b423e3edc0a8d3a98b1dfda17d68bd3ce76f6fdd3baebdef63326293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e819afd5b423e3edc0a8d3a98b1dfda17d68bd3ce76f6fdd3baebdef63326293->leave($__internal_e819afd5b423e3edc0a8d3a98b1dfda17d68bd3ce76f6fdd3baebdef63326293_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_62ef5b3a416ced2b8ab53e3c73dd587d0876fa8c9e8c79682075ced09103a494 = $this->env->getExtension("native_profiler");
        $__internal_62ef5b3a416ced2b8ab53e3c73dd587d0876fa8c9e8c79682075ced09103a494->enter($__internal_62ef5b3a416ced2b8ab53e3c73dd587d0876fa8c9e8c79682075ced09103a494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:show_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        echo "</li>
    <li>";
        // line 28
        $this->loadTemplate("SonataAdminBundle:Button:history_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        echo "</li>
    <li>";
        // line 29
        $this->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 29)->display($context);
        echo "</li>
    <li>";
        // line 30
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 30)->display($context);
        echo "</li>
    <li>";
        // line 31
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 31)->display($context);
        echo "</li>
";
        
        $__internal_62ef5b3a416ced2b8ab53e3c73dd587d0876fa8c9e8c79682075ced09103a494->leave($__internal_62ef5b3a416ced2b8ab53e3c73dd587d0876fa8c9e8c79682075ced09103a494_prof);

    }

    // line 34
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_ce9ce9ff696d4b3cdb1e9cc730c8c3421169e23e341e138a55fcaa09c5ff8765 = $this->env->getExtension("native_profiler");
        $__internal_ce9ce9ff696d4b3cdb1e9cc730c8c3421169e23e341e138a55fcaa09c5ff8765->enter($__internal_ce9ce9ff696d4b3cdb1e9cc730c8c3421169e23e341e138a55fcaa09c5ff8765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_ce9ce9ff696d4b3cdb1e9cc730c8c3421169e23e341e138a55fcaa09c5ff8765->leave($__internal_ce9ce9ff696d4b3cdb1e9cc730c8c3421169e23e341e138a55fcaa09c5ff8765_prof);

    }

    // line 39
    public function block_form($context, array $blocks = array())
    {
        $__internal_9423832be19e39bb4ce07c68aa2f8bbd895f61cf391babc0cdbef1e6421c9a09 = $this->env->getExtension("native_profiler");
        $__internal_9423832be19e39bb4ce07c68aa2f8bbd895f61cf391babc0cdbef1e6421c9a09->enter($__internal_9423832be19e39bb4ce07c68aa2f8bbd895f61cf391babc0cdbef1e6421c9a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 40
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_9423832be19e39bb4ce07c68aa2f8bbd895f61cf391babc0cdbef1e6421c9a09->leave($__internal_9423832be19e39bb4ce07c68aa2f8bbd895f61cf391babc0cdbef1e6421c9a09_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  144 => 39,  132 => 34,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 37,  40 => 12,  12 => 36,);
    }
}
