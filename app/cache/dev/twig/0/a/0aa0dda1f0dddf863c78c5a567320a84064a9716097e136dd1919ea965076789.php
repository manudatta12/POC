<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_0aa0dda1f0dddf863c78c5a567320a84064a9716097e136dd1919ea965076789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_526da4ad32ab5f8dec03b0893680e4953595ac3ef67ca2e43d7aa445ecbcb3cd = $this->env->getExtension("native_profiler");
        $__internal_526da4ad32ab5f8dec03b0893680e4953595ac3ef67ca2e43d7aa445ecbcb3cd->enter($__internal_526da4ad32ab5f8dec03b0893680e4953595ac3ef67ca2e43d7aa445ecbcb3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:form_admin_fields.html.twig"));

        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
        
        $__internal_526da4ad32ab5f8dec03b0893680e4953595ac3ef67ca2e43d7aa445ecbcb3cd->leave($__internal_526da4ad32ab5f8dec03b0893680e4953595ac3ef67ca2e43d7aa445ecbcb3cd_prof);

    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        $__internal_ee42a4b14585405c584cfb4eba85fd8872d3b9c79f188917ce60b632343edf33 = $this->env->getExtension("native_profiler");
        $__internal_ee42a4b14585405c584cfb4eba85fd8872d3b9c79f188917ce60b632343edf33->enter($__internal_ee42a4b14585405c584cfb4eba85fd8872d3b9c79f188917ce60b632343edf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices"))) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) ? $context["read_only_choices"] : $this->getContext($context, "read_only_choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ee42a4b14585405c584cfb4eba85fd8872d3b9c79f188917ce60b632343edf33->leave($__internal_ee42a4b14585405c584cfb4eba85fd8872d3b9c79f188917ce60b632343edf33_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  63 => 12,  59 => 11,  54 => 9,  51 => 8,  49 => 7,  44 => 5,  40 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }
}
