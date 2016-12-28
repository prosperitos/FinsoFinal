<?php

/* utilisateur/show.html.twig */
class __TwigTemplate_cf9f4ae90183683f7a5b0b6ade4ef3f3e7328fa31fa6c88794c0fe736ec5a71c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/show.html.twig", 1);
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
        $__internal_100b7576f33deb982488b65879593ede6408c5e7c29dd4f0b781f7c4a43e4806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100b7576f33deb982488b65879593ede6408c5e7c29dd4f0b781f7c4a43e4806->enter($__internal_100b7576f33deb982488b65879593ede6408c5e7c29dd4f0b781f7c4a43e4806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_100b7576f33deb982488b65879593ede6408c5e7c29dd4f0b781f7c4a43e4806->leave($__internal_100b7576f33deb982488b65879593ede6408c5e7c29dd4f0b781f7c4a43e4806_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e2ce40f73f24519070188245d11b568f7705fff687b22850d47647e42b6438d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2ce40f73f24519070188245d11b568f7705fff687b22850d47647e42b6438d->enter($__internal_0e2ce40f73f24519070188245d11b568f7705fff687b22850d47647e42b6438d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Utilisateur</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "id", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Structure</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "structure", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Nom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Motsdepasse</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "motsdepasse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "structure", array()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "structure", array()), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "structure", array()), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "structure", array()), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Secteur</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "structure", array()), "secteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "structure", array()), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "structure", array()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "structure", array()), "siteweb", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_edit", array("id" => $this->getAttribute(($context["utilisateur"] ?? $this->getContext($context, "utilisateur")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 81
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 83
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0e2ce40f73f24519070188245d11b568f7705fff687b22850d47647e42b6438d->leave($__internal_0e2ce40f73f24519070188245d11b568f7705fff687b22850d47647e42b6438d_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 83,  170 => 81,  164 => 78,  158 => 75,  148 => 68,  141 => 64,  134 => 60,  127 => 56,  120 => 52,  113 => 48,  106 => 44,  99 => 40,  92 => 36,  85 => 32,  78 => 28,  71 => 24,  64 => 20,  56 => 15,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Utilisateur</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ utilisateur.id }}</td>
            </tr>

            <tr>
                <th>Structure</th>
                <td>{{ utilisateur.structure }}</td>
            </tr>

            <tr>
                <th>Nom</th>
                <td>{{ utilisateur.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ utilisateur.prenom }}</td>
            </tr>
            <tr>
                <th>Motsdepasse</th>
                <td>{{ utilisateur.motsdepasse }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ utilisateur.email }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ utilisateur.telephone }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ utilisateur.structure.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ utilisateur.structure.nom }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ utilisateur.structure.type }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ utilisateur.structure.telephone }}</td>
            </tr>
            <tr>
                <th>Secteur</th>
                <td>{{ utilisateur.structure.secteur }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ utilisateur.structure.adresse }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ utilisateur.structure.email }}</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>{{ utilisateur.structure.siteweb }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('utilisateur_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('utilisateur_edit', { 'id': utilisateur.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "utilisateur/show.html.twig", "/Users/kiemde/Sites/FinsoFinal/Finso/app/Resources/views/utilisateur/show.html.twig");
    }
}
