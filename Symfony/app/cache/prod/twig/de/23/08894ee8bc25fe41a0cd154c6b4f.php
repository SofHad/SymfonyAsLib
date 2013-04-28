<?php

/* TestUnBundle:Default:layout.html.twig */
class __TwigTemplate_de2308894ee8bc25fe41a0cd154c6b4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7efd285_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7efd285_0") : $this->env->getExtension('assets')->getAssetUrl("js/7efd285_part_1_main_1.js");
            // line 7
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "7efd285"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7efd285") : $this->env->getExtension('assets')->getAssetUrl("js/7efd285.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4c6854c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c6854c_0") : $this->env->getExtension('assets')->getAssetUrl("css/4c6854c_part_1_main_1.css");
            // line 11
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "4c6854c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c6854c") : $this->env->getExtension('assets')->getAssetUrl("css/4c6854c.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Symfony logo\" />
                </a>
                <form id=\"symfony-search\" method=\"GET\" action=\"http://symfony.com/search\">
                    <label for=\"symfony-search-field\"><span>Search on Symfony Website</span></label>
                    <input name=\"q\" id=\"symfony-search-field\" type=\"search\" placeholder=\"Search on Symfony website\" class=\"medium_txt\" />
                    <input type=\"submit\" class=\"symfony-button-grey\" value=\"OK\" />
                </form>
            </div>
                <h1></h1>

            ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "            <div class=\"flash-message\">
                <em>Notice</em>: ";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "
            ";
        // line 34
        $this->displayBlock('content_header', $context, $blocks);
        // line 43
        echo "
                    <div class=\"symfony-content\">
                ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "                        </div>

            ";
        // line 49
        if (array_key_exists("code", $context)) {
            // line 50
            echo "                        <h2>Code behind this page</h2>
                        <div class=\"symfony-content\">";
            // line 51
            echo (isset($context["code"]) ? $context["code"] : null);
            echo "</div>
            ";
        }
        // line 53
        echo "                    </div>
                </body>
            </html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 34
    public function block_content_header($context, array $blocks = array())
    {
        // line 35
        echo "            <ul id=\"menu\">
                    ";
        // line 36
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 39
        echo "                    </ul>

                    <div style=\"clear: both\"></div>
            ";
    }

    // line 36
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 37
        echo "                    <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Demo Home</a></li>
                    ";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "                ";
    }

    public function getTemplateName()
    {
        return "TestUnBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 46,  174 => 45,  167 => 37,  164 => 36,  157 => 39,  155 => 36,  152 => 35,  149 => 34,  143 => 5,  136 => 53,  131 => 51,  128 => 50,  126 => 49,  122 => 47,  120 => 45,  116 => 43,  114 => 34,  111 => 33,  102 => 30,  99 => 29,  95 => 28,  82 => 18,  78 => 17,  72 => 13,  58 => 11,  54 => 10,  51 => 9,  37 => 7,  33 => 6,  29 => 5,  23 => 1,  28 => 2,);
    }
}
