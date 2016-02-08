<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_ad960d0b33441b8e902f62afca55f2620c366478bb1a470b0046ab686b6d28d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e5514bfb5515dfed5a92946cc2b9d1e94094d2b56f37212aab24bb51d0b494e = $this->env->getExtension("native_profiler");
        $__internal_7e5514bfb5515dfed5a92946cc2b9d1e94094d2b56f37212aab24bb51d0b494e->enter($__internal_7e5514bfb5515dfed5a92946cc2b9d1e94094d2b56f37212aab24bb51d0b494e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e5514bfb5515dfed5a92946cc2b9d1e94094d2b56f37212aab24bb51d0b494e->leave($__internal_7e5514bfb5515dfed5a92946cc2b9d1e94094d2b56f37212aab24bb51d0b494e_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_1ccb00b1ad184cf02991770ba7ce155a24101746add9a4acc93900ed64c889de = $this->env->getExtension("native_profiler");
        $__internal_1ccb00b1ad184cf02991770ba7ce155a24101746add9a4acc93900ed64c889de->enter($__internal_1ccb00b1ad184cf02991770ba7ce155a24101746add9a4acc93900ed64c889de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_1ccb00b1ad184cf02991770ba7ce155a24101746add9a4acc93900ed64c889de->leave($__internal_1ccb00b1ad184cf02991770ba7ce155a24101746add9a4acc93900ed64c889de_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_4c407f4410af2a645299b495268415663d15039ad9782b69d24054df3071bce4 = $this->env->getExtension("native_profiler");
        $__internal_4c407f4410af2a645299b495268415663d15039ad9782b69d24054df3071bce4->enter($__internal_4c407f4410af2a645299b495268415663d15039ad9782b69d24054df3071bce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4c407f4410af2a645299b495268415663d15039ad9782b69d24054df3071bce4->leave($__internal_4c407f4410af2a645299b495268415663d15039ad9782b69d24054df3071bce4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  88 => 31,  82 => 29,  79 => 28,  76 => 27,  70 => 26,  63 => 23,  56 => 21,  51 => 20,  48 => 19,  42 => 18,  35 => 12,  32 => 17,  30 => 15,  28 => 14,  19 => 12,);
    }
}
