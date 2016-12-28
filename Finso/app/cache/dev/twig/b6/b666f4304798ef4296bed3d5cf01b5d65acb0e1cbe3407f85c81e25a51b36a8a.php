<?php

/* utilisateur/new.html.twig */
class __TwigTemplate_40d72b633f18a6bef36c1311e9fc0329f7a91227384ca401dc1b4cb4432f016c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/new.html.twig", 1);
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
        $__internal_96a9f69df1da9e50a2f8e0e8b186b06fac57066109420f581143d98d4b311daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a9f69df1da9e50a2f8e0e8b186b06fac57066109420f581143d98d4b311daa->enter($__internal_96a9f69df1da9e50a2f8e0e8b186b06fac57066109420f581143d98d4b311daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a9f69df1da9e50a2f8e0e8b186b06fac57066109420f581143d98d4b311daa->leave($__internal_96a9f69df1da9e50a2f8e0e8b186b06fac57066109420f581143d98d4b311daa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55a7c4472ef1f19d00ae320324346a87ca318cd1c26100ba0bb75b32a68d8335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a7c4472ef1f19d00ae320324346a87ca318cd1c26100ba0bb75b32a68d8335->enter($__internal_55a7c4472ef1f19d00ae320324346a87ca318cd1c26100ba0bb75b32a68d8335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"col-md-8\">
 <center><h5 class=\"panel-heading alert-danger\">Formulaire d'inscription </h5></center>

  ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "form", "class" => "form-horizontal")));
        echo "
    ";
        // line 10
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <hr>
    
    
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "      <div class=\"alert alert-success alert-dismissable\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a> 
      ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " 
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "

      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreuremail"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "      <div class=\"alert alert-danger alert-dismissable\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a> 
      ";
            // line 25
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " 
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    

    <div class=\"form-group\">
      ";
        // line 32
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "nom"));
        echo "

      ";
        // line 35
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 39
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>

    <div class=\"form-group\">
        ";
        // line 45
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prenom"));
        echo "

        ";
        // line 48
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "

        <div class=\"col-sm-6\">
            ";
        // line 52
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    

    <div class=\"form-group\">
        ";
        // line 60
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motsdepasse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Mots de Passe"));
        echo "

        ";
        // line 63
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motsdepasse", array()), 'errors');
        echo "

        <div class=\"col-sm-6\">
            ";
        // line 67
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motsdepasse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>



    <div class=\"form-group\">
        ";
        // line 75
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Email"));
        echo "

        ";
        // line 78
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

        <div class=\"col-sm-6\">
            ";
        // line 82
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
   <div class=\"form-group\">
        ";
        // line 87
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Telephone"));
        echo "

        ";
        // line 90
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "

        <div class=\"col-sm-6\">
            ";
        // line 94
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    
    
  <div class=\"form-group\">
      ";
        // line 101
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Nom Structure"));
        echo "
    
      ";
        // line 104
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "nom", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 108
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>


  <div class=\"form-group\">
      ";
        // line 115
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "type", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Type"));
        echo "
    
      ";
        // line 118
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "type", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 122
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>

  
  <div class=\"form-group\">
      ";
        // line 129
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Telephone"));
        echo "
    
      ";
        // line 132
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "telephone", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 136
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>



  <div class=\"form-group\">
      ";
        // line 144
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Adresse"));
        echo "
    
      ";
        // line 147
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "adresse", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 151
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>


 <div class=\"form-group\">
      ";
        // line 158
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Email"));
        echo "
    
      ";
        // line 161
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "email", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 165
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>


  <div class=\"form-group\">
        ";
        // line 172
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "secteur", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Secteur"));
        echo "

        ";
        // line 175
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "secteur", array()), 'errors');
        echo "

        <div class=\"col-sm-6\">
            ";
        // line 179
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "secteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>


  <div class=\"form-group\">
      ";
        // line 186
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "siteweb", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Siteweb"));
        echo "
    
      ";
        // line 189
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "siteweb", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 193
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "structure", array()), "siteweb", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>

  <div class=\"form-group\">
      
      <div class=\"col-sm-6\">
      
      </div>

      <div class=\"col-sm-6\">
      ";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valider", array()), 'widget', array("attr" => array("id" => "button", "data-confirm" => "Etes vous sur de faire l'enregistrement", "class" => "btn btn-primary")));
        echo "
      ";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annuler", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
      </div>
  </div>





  <div class=\"form-group\">
      <div class=\"col-sm-6\">
      </div>
      <div class=\"col-sm-6\">
      ";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
      </div>
  </div>
";
        
        $__internal_55a7c4472ef1f19d00ae320324346a87ca318cd1c26100ba0bb75b32a68d8335->leave($__internal_55a7c4472ef1f19d00ae320324346a87ca318cd1c26100ba0bb75b32a68d8335_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 217,  386 => 205,  382 => 204,  367 => 193,  360 => 189,  354 => 186,  344 => 179,  337 => 175,  331 => 172,  321 => 165,  314 => 161,  308 => 158,  298 => 151,  291 => 147,  285 => 144,  274 => 136,  267 => 132,  261 => 129,  251 => 122,  244 => 118,  238 => 115,  228 => 108,  221 => 104,  215 => 101,  205 => 94,  198 => 90,  192 => 87,  184 => 82,  177 => 78,  171 => 75,  160 => 67,  153 => 63,  147 => 60,  136 => 52,  129 => 48,  123 => 45,  114 => 39,  107 => 35,  101 => 32,  96 => 28,  87 => 25,  83 => 23,  79 => 22,  75 => 20,  66 => 17,  62 => 15,  58 => 14,  50 => 10,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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

<div class=\"col-md-8\">
 <center><h5 class=\"panel-heading alert-danger\">Formulaire d'inscription </h5></center>

  {{ form_start(form, {'attr': {'id':'form', 'class': 'form-horizontal'}}) }}
    {# Les erreurs générales du formulaire. #}
    {{ form_errors(form) }}
    <hr>
    
    
    {% for flashMessage in app.session.flashbag.get('success') %}
      <div class=\"alert alert-success alert-dismissable\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a> 
      {{ flashMessage }} 
      </div>
      {% endfor %}


      {% for flashMessage in app.session.flashbag.get('erreuremail') %}
      <div class=\"alert alert-danger alert-dismissable\">
      <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a> 
      {{ flashMessage }} 
      </div>
      {% endfor %}
    

    <div class=\"form-group\">
      {# Génération du label. #}
      {{ form_label(form.nom, \"nom\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

      {# Affichage des erreurs pour ce champ précis. #}
      {{ form_errors(form.nom) }}

      <div class=\"col-sm-6\">
          {# Génération de l'input. #}
          {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
      </div>
  </div>

    <div class=\"form-group\">
        {# Génération du label. #}
        {{ form_label(form.prenom, \"Prenom\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

        {# Affichage des erreurs pour ce champ précis. #}
        {{ form_errors(form.prenom) }}

        <div class=\"col-sm-6\">
            {# Génération de l'input. #}
            {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>

    

    <div class=\"form-group\">
        {# Génération du label. #}
        {{ form_label(form.motsdepasse, \"Mots de Passe\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

        {# Affichage des erreurs pour ce champ précis. #}
        {{ form_errors(form.motsdepasse) }}

        <div class=\"col-sm-6\">
            {# Génération de l'input. #}
            {{ form_widget(form.motsdepasse, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>



    <div class=\"form-group\">
        {# Génération du label. #}
        {{ form_label(form.email, \"Email\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

        {# Affichage des erreurs pour ce champ précis. #}
        {{ form_errors(form.email) }}

        <div class=\"col-sm-6\">
            {# Génération de l'input. #}
            {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
   <div class=\"form-group\">
        {# Génération du label. #}
        {{ form_label(form.telephone, \"Telephone\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

        {# Affichage des erreurs pour ce champ précis. #}
        {{ form_errors(form.telephone) }}

        <div class=\"col-sm-6\">
            {# Génération de l'input. #}
            {{ form_widget(form.telephone, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
    
    
  <div class=\"form-group\">
      {# Génération du label. #}
      {{ form_label(form.structure.nom, \"Nom Structure\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}
    
      {# Affichage des erreurs pour ce champ précis. #}
      {{ form_errors(form.structure.nom) }}

      <div class=\"col-sm-6\">
          {# Génération de l'input. #}
          {{ form_widget(form.structure.nom, {'attr': {'class': 'form-control'}}) }}
      </div>
  </div>


  <div class=\"form-group\">
      {# Génération du label. #}
      {{ form_label(form.structure.type, \"Type\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}
    
      {# Affichage des erreurs pour ce champ précis. #}
      {{ form_errors(form.structure.type) }}

      <div class=\"col-sm-6\">
          {# Génération de l'input. #}
          {{ form_widget(form.structure.type, {'attr': {'class': 'form-control'}}) }}
      </div>
  </div>

  
  <div class=\"form-group\">
      {# Génération du label. #}
      {{ form_label(form.structure.telephone, \"Telephone\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}
    
      {# Affichage des erreurs pour ce champ précis. #}
      {{ form_errors(form.structure.telephone) }}

      <div class=\"col-sm-6\">
          {# Génération de l'input. #}
          {{ form_widget(form.structure.telephone, {'attr': {'class': 'form-control'}}) }}
      </div>
  </div>



  <div class=\"form-group\">
      {# Génération du label. #}
      {{ form_label(form.structure.adresse, \"Adresse\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}
    
      {# Affichage des erreurs pour ce champ précis. #}
      {{ form_errors(form.structure.adresse) }}

      <div class=\"col-sm-6\">
          {# Génération de l'input. #}
          {{ form_widget(form.structure.adresse, {'attr': {'class': 'form-control'}}) }}
      </div>
  </div>


 <div class=\"form-group\">
      {# Génération du label. #}
      {{ form_label(form.structure.email, \"Email\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}
    
      {# Affichage des erreurs pour ce champ précis. #}
      {{ form_errors(form.structure.email) }}

      <div class=\"col-sm-6\">
          {# Génération de l'input. #}
          {{ form_widget(form.structure.email, {'attr': {'class': 'form-control'}}) }}
      </div>
  </div>


  <div class=\"form-group\">
        {# Génération du label. #}
        {{ form_label(form.structure.secteur, \"Secteur\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

        {# Affichage des erreurs pour ce champ précis. #}
        {{ form_errors(form.structure.secteur) }}

        <div class=\"col-sm-6\">
            {# Génération de l'input. #}
            {{ form_widget(form.structure.secteur, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>


  <div class=\"form-group\">
      {# Génération du label. #}
      {{ form_label(form.structure.siteweb, \"Siteweb\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}
    
      {# Affichage des erreurs pour ce champ précis. #}
      {{ form_errors(form.structure.siteweb) }}

      <div class=\"col-sm-6\">
          {# Génération de l'input. #}
          {{ form_widget(form.structure.siteweb, {'attr': {'class': 'form-control'}}) }}
      </div>
  </div>

  <div class=\"form-group\">
      
      <div class=\"col-sm-6\">
      
      </div>

      <div class=\"col-sm-6\">
      {{ form_widget(form.valider, {'attr': {'id':'button', 'data-confirm':\"Etes vous sur de faire l'enregistrement\", 'class': 'btn btn-primary'}}) }}
      {{ form_widget(form.annuler, {'attr': {'class': 'btn btn-danger'}}) }}
      </div>
  </div>





  <div class=\"form-group\">
      <div class=\"col-sm-6\">
      </div>
      <div class=\"col-sm-6\">
      {{ form_rest(form) }}
      </div>
  </div>
{% endblock %}
", "utilisateur/new.html.twig", "/Users/kiemde/Sites/FinsoFinal/Finso/app/Resources/views/utilisateur/new.html.twig");
    }
}
