<?php

/* ::base.html.twig */
class __TwigTemplate_fb44a42fae84d039c4ef3882fa4ae159 extends Twig_Template
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
        // line 21
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 28
        $this->displayBlock('navigation', $context, $blocks);
        // line 46
        echo "        </div>

        <hgroup>
            <h2>";
        // line 49
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>

            <h3>";
        // line 51
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 59
        $this->displayBlock('sidebar', $context, $blocks);
        // line 60
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "    </div>
</section>

";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
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
        echo "        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic'
              rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic'
              rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>

    ";
    }

    // line 28
    public function block_navigation($context, array $blocks = array())
    {
        // line 29
        echo "                <div class=\"navbar\">
                    <div class=\"navbar-inner\">
                        <a class=\"brand\" href=\"#\">Symblog</a>
                        <ul class=\"nav\">
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                        <!-- Future approch
                        <form class=\"navbar-search pull-left\">
                            <input type=\"text\" class=\"search-query\" placeholder=\"Search\">
                        </form>
                        -->
                    </div>
                    </div>

            ";
    }

    // line 49
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">symblog</a>";
    }

    // line 51
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">creating a blog in Symfony2</a>";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
    }

    // line 59
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/Shibly\">Shibly</a>
        ";
    }

    // line 69
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
        return array (  186 => 69,  181 => 64,  178 => 63,  173 => 59,  168 => 56,  162 => 51,  156 => 49,  136 => 29,  133 => 28,  126 => 18,  122 => 17,  118 => 16,  112 => 12,  109 => 11,  103 => 7,  98 => 70,  96 => 69,  91 => 66,  89 => 63,  84 => 60,  82 => 59,  78 => 57,  76 => 56,  68 => 51,  63 => 49,  58 => 46,  56 => 28,  45 => 21,  43 => 11,  36 => 7,  28 => 1,);
    }
}
