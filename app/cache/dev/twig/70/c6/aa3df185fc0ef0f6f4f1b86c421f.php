<?php

/* ::base.html.twig */
class __TwigTemplate_70c6aa3df185fc0ef0f6f4f1b86c421f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"
    ; charset=utf-8\" />
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 26
        $this->displayBlock('navigation', $context, $blocks);
        // line 39
        echo "        </div>

        <hgroup>
            <h2>";
        // line 42
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>

            <h3>";
        // line 44
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 52
        $this->displayBlock('sidebar', $context, $blocks);
        // line 53
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo "    </div>
</section>

";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic' rel='stylesheet'
              type='text/css'>
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>

    ";
    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        // line 27
        echo "                <div class=\"navbar\">
                    <div class=\"navbar-inner\">
                        <a class=\"brand\" href=\"#\">Symblog</a>
                        <ul class=\"nav\">
                            <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blogger_blog_homepage"), "html", null, true);
        echo "\">Home</a></li>
                            <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blogger_blog_about"), "html", null, true);
        echo "\">About</a></li>
                            <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blogger_blog_contact"), "html", null, true);
        echo "\">Contact</a></li>
                        </ul>
                    </div>
                </div>

            ";
    }

    // line 42
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">Symblog</a>";
    }

    // line 44
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">Creating a blog in Symfony2</a>";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/Shibly\">Shibly</a>
        ";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  188 => 62,  183 => 57,  180 => 56,  175 => 52,  170 => 49,  164 => 44,  158 => 42,  148 => 33,  144 => 32,  140 => 31,  134 => 27,  131 => 26,  124 => 16,  120 => 15,  116 => 14,  112 => 12,  109 => 11,  103 => 7,  98 => 63,  96 => 62,  91 => 59,  89 => 56,  84 => 53,  82 => 52,  78 => 50,  76 => 49,  68 => 44,  63 => 42,  58 => 39,  56 => 26,  36 => 7,  28 => 1,  46 => 8,  37 => 5,  32 => 4,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  54 => 13,  48 => 10,  45 => 19,  43 => 11,  38 => 5,  35 => 4,  29 => 3,);
    }
}
