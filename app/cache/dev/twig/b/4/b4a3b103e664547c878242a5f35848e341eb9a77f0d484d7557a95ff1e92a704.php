<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_b4a3b103e664547c878242a5f35848e341eb9a77f0d484d7557a95ff1e92a704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae0ba2dd8c25074a8d05cd31caf7b4519d1cd2a3dca1afac539c5299dfce86d7 = $this->env->getExtension("native_profiler");
        $__internal_ae0ba2dd8c25074a8d05cd31caf7b4519d1cd2a3dca1afac539c5299dfce86d7->enter($__internal_ae0ba2dd8c25074a8d05cd31caf7b4519d1cd2a3dca1afac539c5299dfce86d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_field.html.twig"));

        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        $context["route"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array()), null)) : (null));
        // line 14
        echo "    ";
        $context["action"] = ((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "show")) ? ("VIEW") : (twig_upper_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))));
        // line 15
        echo "
    ";
        // line 16
        if ((((($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) &&         // line 18
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route"))) &&         // line 19
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))) && $this->getAttribute(        // line 20
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route"))), "method")) && $this->getAttribute(        // line 21
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), 1 => ((twig_in_filter((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), array(0 => "VIEW", 1 => "EDIT"))) ? ((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))) : (null))), "method"))) {
            // line 23
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 24
            $this->displayBlock('field', $context, $blocks);
            // line 25
            echo "</a>
    ";
        } else {
            // line 27
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
            // line 28
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
            // line 29
            echo "
        ";
            // line 30
            if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
                // line 31
                echo "            ";
                $context["url"] = $this->env->getExtension('routing')->getPath("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")));
                // line 32
                echo "            <span ";
                $this->displayBlock('field_span_attributes', $context, $blocks);
                echo ">
                ";
                // line 33
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 36
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 38
            echo "    ";
        }
        // line 39
        echo "</td>
";
        
        $__internal_ae0ba2dd8c25074a8d05cd31caf7b4519d1cd2a3dca1afac539c5299dfce86d7->leave($__internal_ae0ba2dd8c25074a8d05cd31caf7b4519d1cd2a3dca1afac539c5299dfce86d7_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_546a4dd06cd79a16e058740a301481b7025afa778d351c09e514a55fcd313ae9 = $this->env->getExtension("native_profiler");
        $__internal_546a4dd06cd79a16e058740a301481b7025afa778d351c09e514a55fcd313ae9->enter($__internal_546a4dd06cd79a16e058740a301481b7025afa778d351c09e514a55fcd313ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        
        $__internal_546a4dd06cd79a16e058740a301481b7025afa778d351c09e514a55fcd313ae9->leave($__internal_546a4dd06cd79a16e058740a301481b7025afa778d351c09e514a55fcd313ae9_prof);

    }

    // line 32
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_a3fad937ccd57911ba4ed817c7947ee4dc19da2da22915c1ad2ac50d15ce7fa2 = $this->env->getExtension("native_profiler");
        $__internal_a3fad937ccd57911ba4ed817c7947ee4dc19da2da22915c1ad2ac50d15ce7fa2->enter($__internal_a3fad937ccd57911ba4ed817c7947ee4dc19da2da22915c1ad2ac50d15ce7fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        echo "class=\"x-editable\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" ";
        
        $__internal_a3fad937ccd57911ba4ed817c7947ee4dc19da2da22915c1ad2ac50d15ce7fa2->leave($__internal_a3fad937ccd57911ba4ed817c7947ee4dc19da2da22915c1ad2ac50d15ce7fa2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  100 => 24,  92 => 39,  89 => 38,  83 => 36,  77 => 33,  72 => 32,  69 => 31,  67 => 30,  64 => 29,  61 => 28,  58 => 27,  54 => 25,  52 => 24,  48 => 23,  46 => 21,  45 => 20,  44 => 19,  43 => 18,  42 => 17,  41 => 16,  38 => 15,  35 => 14,  33 => 13,  27 => 12,  24 => 11,);
    }
}
