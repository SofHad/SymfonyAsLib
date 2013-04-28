<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_a5b199f41f32104553b5de947bc1d01b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_logout"), "html", null, true);
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  40 => 6,  140 => 39,  97 => 45,  86 => 39,  77 => 27,  65 => 23,  49 => 10,  177 => 46,  174 => 45,  167 => 37,  164 => 36,  99 => 29,  82 => 37,  23 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  144 => 53,  141 => 51,  135 => 47,  126 => 49,  109 => 5,  103 => 37,  67 => 15,  61 => 22,  47 => 9,  105 => 24,  93 => 28,  76 => 16,  72 => 13,  68 => 24,  27 => 4,  91 => 20,  84 => 28,  94 => 44,  88 => 41,  79 => 17,  59 => 13,  21 => 2,  44 => 12,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 30,  118 => 29,  114 => 34,  104 => 36,  100 => 34,  78 => 17,  75 => 23,  71 => 19,  58 => 11,  34 => 11,  26 => 11,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 8,  22 => 2,  163 => 59,  155 => 36,  152 => 35,  149 => 34,  145 => 46,  139 => 55,  131 => 51,  123 => 33,  120 => 45,  115 => 28,  106 => 36,  101 => 32,  96 => 21,  83 => 18,  80 => 28,  74 => 16,  66 => 15,  55 => 15,  52 => 10,  50 => 10,  43 => 7,  41 => 7,  37 => 5,  35 => 5,  32 => 4,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 39,  153 => 54,  151 => 53,  143 => 40,  138 => 51,  136 => 53,  133 => 31,  130 => 30,  122 => 47,  119 => 42,  116 => 43,  111 => 33,  108 => 37,  102 => 47,  98 => 31,  95 => 28,  92 => 43,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 12,  54 => 10,  51 => 9,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 3,);
    }
}
