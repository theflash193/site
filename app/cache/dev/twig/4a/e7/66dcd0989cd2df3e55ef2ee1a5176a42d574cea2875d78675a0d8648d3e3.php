<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_4ae766dcd0989cd2df3e55ef2ee1a5176a42d574cea2875d78675a0d8648d3e3 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                <a class=\"brand\" href=\"index.php\">DevAndClick</a>
                <div class=\"nav-collapse collapse\">
                    <form class=\"navbar-form form-search pull-right\">
                        <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                        <button type=\"submit\" class=\"btn\">Rechercher</button>
                    </form>
                </div>
                </div>
            </div>
        </div>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
            <hr />
        }

    <footer id=\"footer\" class=\"vspace20\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4 offset1\">
                    <h4>Informations</h4>
                    <ul class=\"nav nav-stacked\">
                        <li><a href=\"texte.php\">CGV</a>
                        <li><a href=\"texte.php\">Mentions légales</a>
                    </ul>
                </div> 

                <div class=\"span4\">
                    <h4>Notre entrepôt</h4>
                    <p><i class=\"icon-map-marker\"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>
                </div>

                <div class=\"span2\">
                    <h4>Nous contacter</h4>
                    <p><i class=\"icon-phone\"></i>&nbsp;Tel: 02 35 00 00 00</p>
                    <p><i class=\"icon-print\"></i>&nbsp;Fax: 02 35 00 00 00</p>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"span4\">
                    <p>&copy; Copyright 2014 - DevAndClick</p>
                </div>
            </div>
        </div>
    </footer>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo " \"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "La fille en vert";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 70,  142 => 33,  137 => 10,  131 => 5,  125 => 71,  123 => 70,  119 => 69,  115 => 68,  79 => 34,  77 => 33,  51 => 11,  49 => 10,  45 => 9,  37 => 7,  33 => 6,  29 => 5,  23 => 1,  63 => 23,  41 => 8,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
