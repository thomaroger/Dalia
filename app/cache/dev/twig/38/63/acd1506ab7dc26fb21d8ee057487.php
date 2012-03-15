<?php

/* DaliaMepBundle:Default:index.html.twig */
class __TwigTemplate_3863acd1506ab7dc26fb21d8ee057487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "   Dalia 
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "
     <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a>
";
    }

    public function getTemplateName()
    {
        return "DaliaMepBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
