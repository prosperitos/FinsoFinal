<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4e014c7e0396e00cfcfb37c450fc25e60da1d00c671431e1ecac1c2105b690b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad892e92c50b37b1c989c2c68ff7bedc07f83f51c8fee32cafd3b52f2e1661aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad892e92c50b37b1c989c2c68ff7bedc07f83f51c8fee32cafd3b52f2e1661aa->enter($__internal_ad892e92c50b37b1c989c2c68ff7bedc07f83f51c8fee32cafd3b52f2e1661aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad892e92c50b37b1c989c2c68ff7bedc07f83f51c8fee32cafd3b52f2e1661aa->leave($__internal_ad892e92c50b37b1c989c2c68ff7bedc07f83f51c8fee32cafd3b52f2e1661aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b48ff3bd949216d2b18a484b6cde505d4b1584be03799ee3686725962b4b867f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48ff3bd949216d2b18a484b6cde505d4b1584be03799ee3686725962b4b867f->enter($__internal_b48ff3bd949216d2b18a484b6cde505d4b1584be03799ee3686725962b4b867f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b48ff3bd949216d2b18a484b6cde505d4b1584be03799ee3686725962b4b867f->leave($__internal_b48ff3bd949216d2b18a484b6cde505d4b1584be03799ee3686725962b4b867f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_63228b762d9be854069d6bc3225a62de9b565ed8d7ff3276feded7434e8d4d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63228b762d9be854069d6bc3225a62de9b565ed8d7ff3276feded7434e8d4d6d->enter($__internal_63228b762d9be854069d6bc3225a62de9b565ed8d7ff3276feded7434e8d4d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_63228b762d9be854069d6bc3225a62de9b565ed8d7ff3276feded7434e8d4d6d->leave($__internal_63228b762d9be854069d6bc3225a62de9b565ed8d7ff3276feded7434e8d4d6d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_730a39788043ebe1e1d66a733e0b5ddfb9851a530268b84132d9084f11c6d1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730a39788043ebe1e1d66a733e0b5ddfb9851a530268b84132d9084f11c6d1c6->enter($__internal_730a39788043ebe1e1d66a733e0b5ddfb9851a530268b84132d9084f11c6d1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_730a39788043ebe1e1d66a733e0b5ddfb9851a530268b84132d9084f11c6d1c6->leave($__internal_730a39788043ebe1e1d66a733e0b5ddfb9851a530268b84132d9084f11c6d1c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/kiemde/Sites/FinsoFinal/Finso/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
