<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_132c3dc53c31a6022558963dc63a14c2f010d2150dacfb984d93fa93807dc2e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_994f9ef42752aba4c3c17f1b6eb482c22cd368432658637156fc10985f4c14b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994f9ef42752aba4c3c17f1b6eb482c22cd368432658637156fc10985f4c14b1->enter($__internal_994f9ef42752aba4c3c17f1b6eb482c22cd368432658637156fc10985f4c14b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_994f9ef42752aba4c3c17f1b6eb482c22cd368432658637156fc10985f4c14b1->leave($__internal_994f9ef42752aba4c3c17f1b6eb482c22cd368432658637156fc10985f4c14b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_827272803f3c77c963c862699dc0c4c0648bc7d21d6f1dff5ba5619c8d05dbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827272803f3c77c963c862699dc0c4c0648bc7d21d6f1dff5ba5619c8d05dbf1->enter($__internal_827272803f3c77c963c862699dc0c4c0648bc7d21d6f1dff5ba5619c8d05dbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_827272803f3c77c963c862699dc0c4c0648bc7d21d6f1dff5ba5619c8d05dbf1->leave($__internal_827272803f3c77c963c862699dc0c4c0648bc7d21d6f1dff5ba5619c8d05dbf1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1adea5780b6e15efb11f25b160ad45490235656cdd1780deb62e3285030bb79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1adea5780b6e15efb11f25b160ad45490235656cdd1780deb62e3285030bb79e->enter($__internal_1adea5780b6e15efb11f25b160ad45490235656cdd1780deb62e3285030bb79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1adea5780b6e15efb11f25b160ad45490235656cdd1780deb62e3285030bb79e->leave($__internal_1adea5780b6e15efb11f25b160ad45490235656cdd1780deb62e3285030bb79e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87f2187497ba406009850f5cfd22c1b35882a1b8e5c785b606441b9a794525a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f2187497ba406009850f5cfd22c1b35882a1b8e5c785b606441b9a794525a5->enter($__internal_87f2187497ba406009850f5cfd22c1b35882a1b8e5c785b606441b9a794525a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_87f2187497ba406009850f5cfd22c1b35882a1b8e5c785b606441b9a794525a5->leave($__internal_87f2187497ba406009850f5cfd22c1b35882a1b8e5c785b606441b9a794525a5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/kiemde/Sites/FinsoFinal/Finso/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
