<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_d511e085ab7beed6f01e6fb0bf3860a811bbca86a6a3c1ad1d9ce2a22d56e1a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d569d42b842fd6daf4a359c317295fdbea6ef6cab4f198dae81abe5270bd1d7 = $this->env->getExtension("native_profiler");
        $__internal_8d569d42b842fd6daf4a359c317295fdbea6ef6cab4f198dae81abe5270bd1d7->enter($__internal_8d569d42b842fd6daf4a359c317295fdbea6ef6cab4f198dae81abe5270bd1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_8d569d42b842fd6daf4a359c317295fdbea6ef6cab4f198dae81abe5270bd1d7->leave($__internal_8d569d42b842fd6daf4a359c317295fdbea6ef6cab4f198dae81abe5270bd1d7_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_7f49efc5e6ff396f0823ae7bd38f77ad24f2236fe4ac1895114cd273fc4fd79c = $this->env->getExtension("native_profiler");
        $__internal_7f49efc5e6ff396f0823ae7bd38f77ad24f2236fe4ac1895114cd273fc4fd79c->enter($__internal_7f49efc5e6ff396f0823ae7bd38f77ad24f2236fe4ac1895114cd273fc4fd79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_7f49efc5e6ff396f0823ae7bd38f77ad24f2236fe4ac1895114cd273fc4fd79c->leave($__internal_7f49efc5e6ff396f0823ae7bd38f77ad24f2236fe4ac1895114cd273fc4fd79c_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_911d4ec28de0bdfcecb4433246f22090be8888f440bce3fc8d82902b74583fbb = $this->env->getExtension("native_profiler");
        $__internal_911d4ec28de0bdfcecb4433246f22090be8888f440bce3fc8d82902b74583fbb->enter($__internal_911d4ec28de0bdfcecb4433246f22090be8888f440bce3fc8d82902b74583fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_911d4ec28de0bdfcecb4433246f22090be8888f440bce3fc8d82902b74583fbb->leave($__internal_911d4ec28de0bdfcecb4433246f22090be8888f440bce3fc8d82902b74583fbb_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_d06aceb79f5b3d956c39ade37d5d5d3a1868b0e8054a11c97ec2fcf08609a9cc = $this->env->getExtension("native_profiler");
        $__internal_d06aceb79f5b3d956c39ade37d5d5d3a1868b0e8054a11c97ec2fcf08609a9cc->enter($__internal_d06aceb79f5b3d956c39ade37d5d5d3a1868b0e8054a11c97ec2fcf08609a9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_d06aceb79f5b3d956c39ade37d5d5d3a1868b0e8054a11c97ec2fcf08609a9cc->leave($__internal_d06aceb79f5b3d956c39ade37d5d5d3a1868b0e8054a11c97ec2fcf08609a9cc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
    }
}
