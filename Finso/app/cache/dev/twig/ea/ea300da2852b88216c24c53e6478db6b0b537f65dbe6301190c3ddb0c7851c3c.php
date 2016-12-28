<?php

/* utilisateur/index.html.twig */
class __TwigTemplate_6ce86c466f38312a8a5ccc9d96b49ed68e24731428f4c4b2751da399f75dfc7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/index.html.twig", 1);
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
        $__internal_102da99b6add39c5c26a268cd7ee6c6aaca6ff41f1ac5f028a2000f846e8db1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102da99b6add39c5c26a268cd7ee6c6aaca6ff41f1ac5f028a2000f846e8db1d->enter($__internal_102da99b6add39c5c26a268cd7ee6c6aaca6ff41f1ac5f028a2000f846e8db1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_102da99b6add39c5c26a268cd7ee6c6aaca6ff41f1ac5f028a2000f846e8db1d->leave($__internal_102da99b6add39c5c26a268cd7ee6c6aaca6ff41f1ac5f028a2000f846e8db1d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95e03bf28adcdf64255ff9bc86ccb3c988f306dbc85ba50a67ebcb2a1f0cae41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e03bf28adcdf64255ff9bc86ccb3c988f306dbc85ba50a67ebcb2a1f0cae41->enter($__internal_95e03bf28adcdf64255ff9bc86ccb3c988f306dbc85ba50a67ebcb2a1f0cae41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Utilisateurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Motsdepasse</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Nom Structure</th>
                <th>Type Structure</th>
                <th>Telephone</th>
                <th>Secteur</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Site Web</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["utilisateurs"] ?? $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "</id>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "motsdepasse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["utilisateur"], "structure", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["utilisateur"], "structure", array()), "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["utilisateur"], "structure", array()), "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["utilisateur"], "structure", array()), "secteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["utilisateur"], "structure", array()), "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["utilisateur"], "structure", array()), "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["utilisateur"], "structure", array()), "siteweb", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_edit", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "


        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_new");
        echo "\">Create a new utilisateur</a>
        </li>
    </ul>
";
        
        $__internal_95e03bf28adcdf64255ff9bc86ccb3c988f306dbc85ba50a67ebcb2a1f0cae41->leave($__internal_95e03bf28adcdf64255ff9bc86ccb3c988f306dbc85ba50a67ebcb2a1f0cae41_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 61,  144 => 53,  132 => 47,  126 => 44,  119 => 40,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  68 => 27,  64 => 26,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Utilisateurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Motsdepasse</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Nom Structure</th>
                <th>Type Structure</th>
                <th>Telephone</th>
                <th>Secteur</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Site Web</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for utilisateur in utilisateurs %}
            <tr>
                <td>{{ utilisateur.id }}</id>
                <td>{{ utilisateur.nom }}</td>
                <td>{{ utilisateur.prenom }}</td>
                <td>{{ utilisateur.motsdepasse }}</td>
                <td>{{ utilisateur.email }}</td>
                <td>{{ utilisateur.telephone }}</td>
                <td>{{ utilisateur.structure.nom }}</td>
                <td>{{ utilisateur.structure.type }}</td>
                <td>{{ utilisateur.structure.telephone }}</td>
                <td>{{ utilisateur.structure.secteur}}</td>
                <td>{{ utilisateur.structure.adresse }}</td>
                <td>{{ utilisateur.structure.email }}</td>
                <td>{{ utilisateur.structure.siteweb }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('utilisateur_show', { 'id': utilisateur.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('utilisateur_edit', { 'id': utilisateur.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}



        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('utilisateur_new') }}\">Create a new utilisateur</a>
        </li>
    </ul>
{% endblock %}
", "utilisateur/index.html.twig", "/Users/kiemde/Sites/FinsoFinal/Finso/app/Resources/views/utilisateur/index.html.twig");
    }
}
