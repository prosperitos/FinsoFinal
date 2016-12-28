<?php

/* AdministrationBundle:Default:index.html.twig */
class __TwigTemplate_648a549e66b8415279e7328a18e8b990b6db4b6e6b63f165a9f1ca1a9844fece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c90ec811c6e3164b3fe7f22ce10f220c1408015244d49d60f31717e3c09d022d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90ec811c6e3164b3fe7f22ce10f220c1408015244d49d60f31717e3c09d022d->enter($__internal_c90ec811c6e3164b3fe7f22ce10f220c1408015244d49d60f31717e3c09d022d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdministrationBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_c90ec811c6e3164b3fe7f22ce10f220c1408015244d49d60f31717e3c09d022d->leave($__internal_c90ec811c6e3164b3fe7f22ce10f220c1408015244d49d60f31717e3c09d022d_prof);

    }

    public function getTemplateName()
    {
        return "AdministrationBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "AdministrationBundle:Default:index.html.twig", "/Users/kiemde/Sites/FinsoFinal/Finso/src/AdministrationBundle/Resources/views/Default/index.html.twig");
    }
}
