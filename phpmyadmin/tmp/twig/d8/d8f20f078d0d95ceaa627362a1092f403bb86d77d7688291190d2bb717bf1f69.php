<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* display/results/comment_for_row.twig */
class __TwigTemplate_acb71f1c94bb208dcc1df68698b7c96a5adefe41526ef64381dffd65313a224e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($this->getAttribute((isset($context["comments_map"]) ? $context["comments_map"] : null), $this->getAttribute((isset($context["fields_meta"]) ? $context["fields_meta"] : null), "table", []), [], "array", true, true) && $this->getAttribute($this->getAttribute(        // line 2
(isset($context["comments_map"]) ? $context["comments_map"] : null), $this->getAttribute((isset($context["fields_meta"]) ? $context["fields_meta"] : null), "table", []), [], "array", false, true), $this->getAttribute((isset($context["fields_meta"]) ? $context["fields_meta"] : null), "name", []), [], "array", true, true))) {
            // line 3
            echo "    <span class=\"tblcomment\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comments_map"]) ? $context["comments_map"] : null), $this->getAttribute((isset($context["fields_meta"]) ? $context["fields_meta"] : null), "table", []), [], "array"), $this->getAttribute((isset($context["fields_meta"]) ? $context["fields_meta"] : null), "name", []), [], "array"), "html", null, true);
            echo "\">
        ";
            // line 4
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comments_map"]) ? $context["comments_map"] : null), $this->getAttribute((isset($context["fields_meta"]) ? $context["fields_meta"] : null), "table", []), [], "array"), $this->getAttribute((isset($context["fields_meta"]) ? $context["fields_meta"] : null), "name", []), [], "array")) > (isset($context["limit_chars"]) ? $context["limit_chars"] : null))) {
                // line 5
                echo "            ";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["comments_map"]) ? $context["comments_map"] : null), $this->getAttribute((isset($context["fields_meta"]) ? $context["fields_meta"] : null), "table", []), [], "array"), $this->getAttribute((isset($context["fields_meta"]) ? $context["fields_meta"] : null), "name", []), [], "array"), 0, (isset($context["limit_chars"]) ? $context["limit_chars"] : null)), "html", null, true);
                echo "…
        ";
            } else {
                // line 7
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comments_map"]) ? $context["comments_map"] : null), $this->getAttribute((isset($context["fields_meta"]) ? $context["fields_meta"] : null), "table", []), [], "array"), $this->getAttribute((isset($context["fields_meta"]) ? $context["fields_meta"] : null), "name", []), [], "array"), "html", null, true);
                echo "
        ";
            }
            // line 9
            echo "    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "display/results/comment_for_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  46 => 7,  40 => 5,  38 => 4,  33 => 3,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "display/results/comment_for_row.twig", "/home/wwwroot/default/phpmyadmin/templates/display/results/comment_for_row.twig");
    }
}
