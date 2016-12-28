<?php

/* utilisateur/new.html.twig */
class __TwigTemplate_e8f89d7d2d5b8bef913897eb3ea20764e987c2429eca3781b45ee3039f4612eb extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"col-md-8\">
 <center><h5 class=\"panel-heading alert-danger\">Formulaire d'inscription </h5></center>

  ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    ";
        // line 10
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form1"] ?? null), 'errors');
        echo "
    <hr>
    <div class=\"form-group\">
      ";
        // line 15
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "nom"));
        echo "

      ";
        // line 18
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 22
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>

    <div class=\"form-group\">
        ";
        // line 28
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prenom"));
        echo "

        ";
        // line 31
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prenom", array()), 'errors');
        echo "

        <div class=\"col-sm-6\">
            ";
        // line 35
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    

    <div class=\"form-group\">
        ";
        // line 43
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "motsdepasse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Mots de Passe"));
        echo "

        ";
        // line 46
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "motsdepasse", array()), 'errors');
        echo "

        <div class=\"col-sm-6\">
            ";
        // line 50
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "motsdepasse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>



    <div class=\"form-group\">
        ";
        // line 58
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Email"));
        echo "

        ";
        // line 61
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors');
        echo "

        <div class=\"col-sm-6\">
            ";
        // line 65
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
   <div class=\"form-group\">
        ";
        // line 70
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Telephone"));
        echo "

        ";
        // line 73
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telephone", array()), 'errors');
        echo "

        <div class=\"col-sm-6\">
            ";
        // line 77
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    
    
  <div class=\"form-group\">
      ";
        // line 84
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Nom Structure"));
        echo "
    
      ";
        // line 87
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "nom", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 91
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>


  <div class=\"form-group\">
      ";
        // line 98
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "type", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Type"));
        echo "
    
      ";
        // line 101
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "type", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 105
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>

  
  <div class=\"form-group\">
      ";
        // line 112
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Telephone"));
        echo "
    
      ";
        // line 115
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "telephone", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 119
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>



  <div class=\"form-group\">
      ";
        // line 127
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Adresse"));
        echo "
    
      ";
        // line 130
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "adresse", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 134
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>


 <div class=\"form-group\">
      ";
        // line 141
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Email"));
        echo "
    
      ";
        // line 144
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "email", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 148
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>


  <div class=\"form-group\">
        ";
        // line 155
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "secteur", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Secteur"));
        echo "

        ";
        // line 158
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "secteur", array()), 'errors');
        echo "

        <div class=\"col-sm-6\">
            ";
        // line 162
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "secteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>


  <div class=\"form-group\">
      ";
        // line 169
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "siteweb", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Siteweb"));
        echo "
    
      ";
        // line 172
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "siteweb", array()), 'errors');
        echo "

      <div class=\"col-sm-6\">
          ";
        // line 176
        echo "          ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "siteweb", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
  </div>

  <div class=\"form-group\">
      
      <div class=\"col-sm-6\">
      
      </div>

      <div class=\"col-sm-6\">
      ";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

      ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form1"] ?? null), "annuler", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
      </div>
  </div>

  <div class=\"form-group\">
      <div class=\"col-sm-6\">
      </div>
      <div class=\"col-sm-6\">
      ";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
      </div>
  </div>
";
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
        return array (  349 => 197,  338 => 189,  333 => 187,  318 => 176,  311 => 172,  305 => 169,  295 => 162,  288 => 158,  282 => 155,  272 => 148,  265 => 144,  259 => 141,  249 => 134,  242 => 130,  236 => 127,  225 => 119,  218 => 115,  212 => 112,  202 => 105,  195 => 101,  189 => 98,  179 => 91,  172 => 87,  166 => 84,  156 => 77,  149 => 73,  143 => 70,  135 => 65,  128 => 61,  122 => 58,  111 => 50,  104 => 46,  98 => 43,  87 => 35,  80 => 31,  74 => 28,  65 => 22,  58 => 18,  52 => 15,  46 => 11,  41 => 10,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "utilisateur/new.html.twig", "/Users/kiemde/Sites/FinsoFinal/Finso/app/Resources/views/utilisateur/new.html.twig");
    }
}
