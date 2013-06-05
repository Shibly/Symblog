<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_841a9ae67f0a51606a1899efa7a16750 extends Twig_Template
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
        return array (  185 => 62,  177 => 57,  172 => 54,  144 => 32,  116 => 14,  112 => 12,  103 => 7,  96 => 67,  91 => 64,  82 => 57,  68 => 49,  54 => 14,  31 => 4,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  271 => 77,  264 => 74,  256 => 73,  251 => 71,  247 => 70,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  147 => 51,  143 => 49,  134 => 27,  131 => 26,  122 => 37,  102 => 28,  92 => 25,  84 => 58,  76 => 54,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 4,  205 => 70,  199 => 69,  190 => 67,  182 => 61,  179 => 61,  175 => 58,  168 => 57,  164 => 55,  156 => 51,  148 => 47,  138 => 44,  123 => 42,  117 => 36,  108 => 31,  83 => 24,  71 => 19,  64 => 16,  114 => 22,  109 => 11,  106 => 20,  101 => 34,  85 => 16,  77 => 12,  67 => 9,  28 => 1,  39 => 7,  110 => 20,  89 => 61,  65 => 14,  63 => 47,  58 => 44,  34 => 5,  26 => 6,  98 => 68,  88 => 17,  80 => 23,  46 => 12,  44 => 9,  36 => 7,  43 => 11,  57 => 11,  50 => 7,  47 => 7,  38 => 6,  27 => 3,  221 => 90,  207 => 82,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 66,  173 => 63,  162 => 58,  158 => 56,  155 => 55,  152 => 50,  142 => 47,  136 => 44,  133 => 44,  130 => 42,  120 => 15,  105 => 31,  100 => 19,  78 => 55,  75 => 20,  60 => 12,  53 => 19,  40 => 6,  32 => 4,  24 => 4,  25 => 3,  22 => 2,  19 => 1,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 49,  163 => 50,  160 => 47,  157 => 48,  149 => 42,  146 => 41,  140 => 31,  137 => 37,  129 => 36,  124 => 16,  121 => 24,  118 => 33,  115 => 39,  111 => 32,  107 => 28,  104 => 27,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 26,  52 => 10,  49 => 9,  45 => 19,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
