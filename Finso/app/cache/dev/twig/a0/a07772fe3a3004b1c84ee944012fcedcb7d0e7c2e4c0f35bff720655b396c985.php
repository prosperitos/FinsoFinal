<?php

/* base.html.twig */
class __TwigTemplate_7d65774393e1f053c11e86a7ee9c792c1a2f29e65d52f008e1e722cbff6ad2b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba5fe6e8009bd27928047a6189fcf0229a9f71c65d784438301a57c674a12c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5fe6e8009bd27928047a6189fcf0229a9f71c65d784438301a57c674a12c40->enter($__internal_ba5fe6e8009bd27928047a6189fcf0229a9f71c65d784438301a57c674a12c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "</body>
</html>
";
        
        $__internal_ba5fe6e8009bd27928047a6189fcf0229a9f71c65d784438301a57c674a12c40->leave($__internal_ba5fe6e8009bd27928047a6189fcf0229a9f71c65d784438301a57c674a12c40_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_27da1fdf447822c4378e5e40570e7fc52da73e131c9232e9fb68fd2ab6fb5f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27da1fdf447822c4378e5e40570e7fc52da73e131c9232e9fb68fd2ab6fb5f66->enter($__internal_27da1fdf447822c4378e5e40570e7fc52da73e131c9232e9fb68fd2ab6fb5f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_27da1fdf447822c4378e5e40570e7fc52da73e131c9232e9fb68fd2ab6fb5f66->leave($__internal_27da1fdf447822c4378e5e40570e7fc52da73e131c9232e9fb68fd2ab6fb5f66_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e96f318eadb1d033ada4a67ad7d134c1dfe5ed14a57dd40e7007934258535ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96f318eadb1d033ada4a67ad7d134c1dfe5ed14a57dd40e7007934258535ece->enter($__internal_e96f318eadb1d033ada4a67ad7d134c1dfe5ed14a57dd40e7007934258535ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script  type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://use.fontawesome.com/c9ea00b40c.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e96f318eadb1d033ada4a67ad7d134c1dfe5ed14a57dd40e7007934258535ece->leave($__internal_e96f318eadb1d033ada4a67ad7d134c1dfe5ed14a57dd40e7007934258535ece_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8e5a010dd3365194ee4d599a287ea1d5611b94a899ae376b70ace279435b1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e5a010dd3365194ee4d599a287ea1d5611b94a899ae376b70ace279435b1f8->enter($__internal_b8e5a010dd3365194ee4d599a287ea1d5611b94a899ae376b70ace279435b1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b8e5a010dd3365194ee4d599a287ea1d5611b94a899ae376b70ace279435b1f8->leave($__internal_b8e5a010dd3365194ee4d599a287ea1d5611b94a899ae376b70ace279435b1f8_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f9a8802d757ff3f735cab6c1413af957349f2836bed408058c9c328d6ae7130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9a8802d757ff3f735cab6c1413af957349f2836bed408058c9c328d6ae7130->enter($__internal_6f9a8802d757ff3f735cab6c1413af957349f2836bed408058c9c328d6ae7130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "        <script type=\"text/javascript\">
       \$(function() {
       \$('[data-confirm]').click(function(ev) {
        var href = \$(this).attr('href');
        
        if (!\$('#dataConfirmModal').length) {
            \$('body').append('<div id=\"dataConfirmModal\" class=\"modal\" role=\"dialog\" aria-labelledby=\"dataConfirmLabel\" aria-hidden=\"true\"><div class=\"modal-dialog\"><div class=\"modal-content\"><div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button><h3 id=\"dataConfirmLabel\">Merci de confirmer</h3></div><div class=\"modal-body\"></div><div class=\"modal-footer\"><button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class=\"fa fa-check-square\" aria-hidden=\"true\"></i>Non</button><a class=\"btn btn-danger\" id=\"dataConfirmOK\"><i class=\"fa fa-check-square\" aria-hidden=\"true\" style=\"color:green;\"></i>Oui</a></div></div></div></div>');
        }
        \$('#dataConfirmModal').find('.modal-body').text(\$(this).attr('data-confirm'));
        \$('#dataConfirmOK').attr('href', href);
        \$('#dataConfirmModal').modal({show:true});
        
        return false;
    });

});   

      \$(function(){
      \$(document).on('click','#dataConfirmOK',function(e) {
      e.preventDefault();

      jQuery(document).ready(function(\$){
      \$('#form').submit();
      });
     })
     })

\$(document).ready(function() {             
    \$(\"#dataConfirmModal\").modal(\"show\");
});
</script>
";
        
        $__internal_6f9a8802d757ff3f735cab6c1413af957349f2836bed408058c9c328d6ae7130->leave($__internal_6f9a8802d757ff3f735cab6c1413af957349f2836bed408058c9c328d6ae7130_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 21,  125 => 20,  114 => 18,  105 => 14,  101 => 13,  97 => 12,  93 => 11,  89 => 10,  85 => 9,  81 => 8,  76 => 7,  70 => 6,  58 => 5,  49 => 53,  47 => 20,  44 => 19,  42 => 18,  38 => 16,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"{{ asset('public/css/bootstrap.min.css')}} \" rel=\"stylesheet\">
        <link href=\"{{asset('public/css/bootstrap.css')}}\" rel=\"stylesheet\">
        <script  type=\"text/javascript\" src=\"{{asset('https://code.jquery.com/jquery-1.11.0.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('https://code.jquery.com/jquery-migrate-1.2.1.min.js')}}\"></script>
        <script src=\"{{asset('https://use.fontawesome.com/c9ea00b40c.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('public/js/bootstrap.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('public/js/bootstrap.js')}}\"></script>
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}

        {% block javascripts %}
        <script type=\"text/javascript\">
       \$(function() {
       \$('[data-confirm]').click(function(ev) {
        var href = \$(this).attr('href');
        
        if (!\$('#dataConfirmModal').length) {
            \$('body').append('<div id=\"dataConfirmModal\" class=\"modal\" role=\"dialog\" aria-labelledby=\"dataConfirmLabel\" aria-hidden=\"true\"><div class=\"modal-dialog\"><div class=\"modal-content\"><div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button><h3 id=\"dataConfirmLabel\">Merci de confirmer</h3></div><div class=\"modal-body\"></div><div class=\"modal-footer\"><button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class=\"fa fa-check-square\" aria-hidden=\"true\"></i>Non</button><a class=\"btn btn-danger\" id=\"dataConfirmOK\"><i class=\"fa fa-check-square\" aria-hidden=\"true\" style=\"color:green;\"></i>Oui</a></div></div></div></div>');
        }
        \$('#dataConfirmModal').find('.modal-body').text(\$(this).attr('data-confirm'));
        \$('#dataConfirmOK').attr('href', href);
        \$('#dataConfirmModal').modal({show:true});
        
        return false;
    });

});   

      \$(function(){
      \$(document).on('click','#dataConfirmOK',function(e) {
      e.preventDefault();

      jQuery(document).ready(function(\$){
      \$('#form').submit();
      });
     })
     })

\$(document).ready(function() {             
    \$(\"#dataConfirmModal\").modal(\"show\");
});
</script>
{% endblock %}
</body>
</html>
", "base.html.twig", "/Users/kiemde/Sites/FinsoFinal/Finso/app/Resources/views/base.html.twig");
    }
}
