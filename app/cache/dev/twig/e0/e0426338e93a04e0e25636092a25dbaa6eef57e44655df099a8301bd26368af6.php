<?php

/* ContactBundle:Contact:new.html.twig */
class __TwigTemplate_923de315dfa9e19631be678d12c85c3257fe36aceb6dcf52fd4f8315b6f945c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ContactBundle::layout.html.twig", "ContactBundle:Contact:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ContactBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"content\">
    
    
    <h1>Ajouter des Contacts</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
<div class=\"breakcrumb-row\">
        <ul class=\"breadcrumb arrow\">
    <li>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">
            Retourner à la liste
        </a>
    </li>
</ul>
            </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "ContactBundle:Contact:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  38 => 10,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends "ContactBundle::layout.html.twig" %}*/
/* */
/* {% block body -%}*/
/*    */
/*         <div id="content">*/
/*     */
/*     */
/*     <h1>Ajouter des Contacts</h1>*/
/* */
/*     {{ form(form) }}*/
/* <div class="breakcrumb-row">*/
/*         <ul class="breadcrumb arrow">*/
/*     <li>*/
/*         <a href="{{ path('contact') }}">*/
/*             Retourner à la liste*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/*             </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
