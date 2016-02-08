<?php

/* FirstAdminBundle:ProductUpload:productUpload.html.twig */
class __TwigTemplate_70e4d2b645bc24cfb6896631beede99eec054d75721919b3b972b7ff161498f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "FirstAdminBundle:ProductUpload:productUpload.html.twig", 2);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15406d5d3f334a85f1dbd09704ae0f3d8771f5a9fbc3f48295b715bc5b75dc0a = $this->env->getExtension("native_profiler");
        $__internal_15406d5d3f334a85f1dbd09704ae0f3d8771f5a9fbc3f48295b715bc5b75dc0a->enter($__internal_15406d5d3f334a85f1dbd09704ae0f3d8771f5a9fbc3f48295b715bc5b75dc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FirstAdminBundle:ProductUpload:productUpload.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15406d5d3f334a85f1dbd09704ae0f3d8771f5a9fbc3f48295b715bc5b75dc0a->leave($__internal_15406d5d3f334a85f1dbd09704ae0f3d8771f5a9fbc3f48295b715bc5b75dc0a_prof);

    }

    // line 4
    public function block_form($context, array $blocks = array())
    {
        $__internal_58055cb7477dc6ab0ebda98ad4e2dffe9c85283841596bd372166a1ce89a18ed = $this->env->getExtension("native_profiler");
        $__internal_58055cb7477dc6ab0ebda98ad4e2dffe9c85283841596bd372166a1ce89a18ed->enter($__internal_58055cb7477dc6ab0ebda98ad4e2dffe9c85283841596bd372166a1ce89a18ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 5
        echo "
<form class=\"form\" method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ProductUpload"), "method"), "html", null, true);
        echo "\" > 
\t<table>
\t\t<th>FILE MANAGEMENT SYSTEM </th>
\t </table>
\t <br>
\t<div style=\"color:red\">";
        // line 11
        if (array_key_exists("status", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
        }
        echo "</div>
         <br>


     <input type=\"file\" name=\"img\" style=\"color:#000;width:600px;margin-left:10px;margin-right:10px;height:40px;font-weight:bold\" /><br/>
\t <p>
        <button type=\"submit\" style=\"color:#000;width:100px;margin-left:10px;margin-right:10px;height:40px;font-weight:bold\">UPLOAD</button>
    </p>
</form>

";
        
        $__internal_58055cb7477dc6ab0ebda98ad4e2dffe9c85283841596bd372166a1ce89a18ed->leave($__internal_58055cb7477dc6ab0ebda98ad4e2dffe9c85283841596bd372166a1ce89a18ed_prof);

    }

    public function getTemplateName()
    {
        return "FirstAdminBundle:ProductUpload:productUpload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
