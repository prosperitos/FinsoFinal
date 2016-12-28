<?php

/* utilisateur/show.html.twig */
class __TwigTemplate_94644a100ddfb72a133e00655463c1b44510b49da84337fee3ef5f06ce5c5f21 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Utilisateur</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? null), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? null), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Motsdepasse</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? null), "motsdepasse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? null), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["utilisateur"] ?? null), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? null), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? null), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? null), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Secteur</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? null), "secteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? null), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? null), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? null), "siteweb", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_edit", array("id" => $this->getAttribute(($context["utilisateur"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 75
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 77
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
        </li>
    </ul>
";
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
        return array (  157 => 77,  152 => 75,  146 => 72,  140 => 69,  130 => 62,  123 => 58,  116 => 54,  109 => 50,  102 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "utilisateur/show.html.twig", "/Users/kiemde/Sites/FinsoFinal/Finso/app/Resources/views/utilisateur/show.html.twig");
    }
}
