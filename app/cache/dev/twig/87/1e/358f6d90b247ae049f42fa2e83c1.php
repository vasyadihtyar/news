<?php

/* ::base.html.twig */
class __TwigTemplate_871e358f6d90b247ae049f42fa2e83c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\" />
\t<!--[if lt IE 9]><script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->
\t<title>News</title>
\t<meta name=\"keywords\" content=\"\" />
\t<meta name=\"description\" content=\"\" />
\t<link href=\"css/style.css\" rel=\"stylesheet\">
</head>
<body>

<div class=\"wrapper\">

\t<header class=\"header\">
\t\t<h1><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(""), "html", null, true);
        echo "\">news</a></h1>
\t</header><!-- .header-->

\t<div class=\"middle\">

\t\t<div class=\"container\">
\t\t\t<main class=\"content\">\t\t\t
\t\t\t\t";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "\t\t\t</main><!-- .content -->
\t\t</div><!-- .container-->

\t\t<aside class=\"right-sidebar\">
\t\t\t<a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_new"), "html", null, true);
        echo "\"><button class=\"button\">Добавить новость</button></a>
\t\t</aside><!-- .right-sidebar -->

\t</div><!-- .middle-->

\t<footer class=\"footer\">
\t\t
\t</footer><!-- .footer -->

</div><!-- .wrapper -->

</body>
</html>";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  55 => 28,  49 => 24,  47 => 23,  37 => 16,  20 => 1,);
    }
}
