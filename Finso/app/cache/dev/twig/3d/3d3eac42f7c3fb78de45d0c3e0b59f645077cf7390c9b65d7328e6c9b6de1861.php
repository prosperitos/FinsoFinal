<?php

/* structure/index.html.twig */
class __TwigTemplate_85645f0d3a694770cf6aef7b2c863bf2b06397a76e7cbefbfd2bafba6e465d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "structure/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac7f55eb2742a48ae086786c878a8f9a812e6a99958b81734a97e04e9a28ea9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7f55eb2742a48ae086786c878a8f9a812e6a99958b81734a97e04e9a28ea9d->enter($__internal_ac7f55eb2742a48ae086786c878a8f9a812e6a99958b81734a97e04e9a28ea9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "structure/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac7f55eb2742a48ae086786c878a8f9a812e6a99958b81734a97e04e9a28ea9d->leave($__internal_ac7f55eb2742a48ae086786c878a8f9a812e6a99958b81734a97e04e9a28ea9d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b817cc937c6581d8faea3a39efcb5a8e54e64a6c506c5e704880bbab452abb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b817cc937c6581d8faea3a39efcb5a8e54e64a6c506c5e704880bbab452abb05->enter($__internal_b817cc937c6581d8faea3a39efcb5a8e54e64a6c506c5e704880bbab452abb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Structures list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Telephone</th>
                <th>Secteur</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Siteweb</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["structures"] ?? $this->getContext($context, "structures")));
        foreach ($context['_seq'] as $context["_key"] => $context["structure"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_show", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "secteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "siteweb", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_show", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_edit", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['structure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_new");
        echo "\">Create a new structure</a>
        </li>
    </ul>
";
        
        $__internal_b817cc937c6581d8faea3a39efcb5a8e54e64a6c506c5e704880bbab452abb05->leave($__internal_b817cc937c6581d8faea3a39efcb5a8e54e64a6c506c5e704880bbab452abb05_prof);

    }

    public function getTemplateName()
    {
        return "structure/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  121 => 43,  109 => 37,  103 => 34,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Structures list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Telephone</th>
                <th>Secteur</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Siteweb</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for structure in structures %}
            <tr>
                <td><a href=\"{{ path('structure_show', { 'id': structure.id }) }}\">{{ structure.id }}</a></td>
                <td>{{ structure.nom }}</td>
                <td>{{ structure.type }}</td>
                <td>{{ structure.telephone }}</td>
                <td>{{ structure.secteur }}</td>
                <td>{{ structure.adresse }}</td>
                <td>{{ structure.email }}</td>
                <td>{{ structure.siteweb }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('structure_show', { 'id': structure.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('structure_edit', { 'id': structure.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('structure_new') }}\">Create a new structure</a>
        </li>
    </ul>
{% endblock %}
", "structure/index.html.twig", "/Users/kiemde/Sites/FinsoFinal/Finso/app/Resources/views/structure/index.html.twig");
    }
}
