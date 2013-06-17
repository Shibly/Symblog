<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_9f57d4b28487be6e16066da5fe446daa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BloggerBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "About";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <header>
        <h2>About My Blog<h2>
    </header>
    <article>
        <p>Hi. I'm Shibly. I'm a web developer and work basically in AMP stack.
            I love coding. Coding is fun and poetry to me. Obsessed with Symfony and love it's
            architecture. This is my personal blog. Creating for development purpose and for learning !</p>
    </article>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 4,);
    }
}
