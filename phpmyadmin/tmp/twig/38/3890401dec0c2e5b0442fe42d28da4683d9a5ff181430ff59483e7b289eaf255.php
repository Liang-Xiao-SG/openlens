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

/* server/databases/index.twig */
class __TwigTemplate_95d8a4a519136e0bf0700d4fcab471bdfcdef62c7663b21cc112ccf446e4b75c extends \Twig\Template
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
        // line 2
        $this->loadTemplate("server/sub_page_header.twig", "server/databases/index.twig", 2)->display(twig_to_array(["type" => ((        // line 3
(isset($context["dbstats"]) ? $context["dbstats"] : null)) ? ("database_statistics") : ("databases"))]));
        // line 5
        echo "
";
        // line 7
        if ((isset($context["show_create_db"]) ? $context["show_create_db"] : null)) {
            // line 8
            echo "    ";
            $this->loadTemplate("server/databases/create.twig", "server/databases/index.twig", 8)->display(twig_to_array(["is_create_db_priv" =>             // line 9
(isset($context["is_create_db_priv"]) ? $context["is_create_db_priv"] : null), "dbstats" =>             // line 10
(isset($context["dbstats"]) ? $context["dbstats"] : null), "db_to_create" =>             // line 11
(isset($context["db_to_create"]) ? $context["db_to_create"] : null), "server_collation" =>             // line 12
(isset($context["server_collation"]) ? $context["server_collation"] : null), "dbi" =>             // line 13
(isset($context["dbi"]) ? $context["dbi"] : null), "disable_is" =>             // line 14
(isset($context["disable_is"]) ? $context["disable_is"] : null)]));
        }
        // line 17
        echo "
";
        // line 18
        $this->loadTemplate("filter.twig", "server/databases/index.twig", 18)->display(twig_to_array(["filter_value" => ""]));
        // line 19
        echo "
";
        // line 21
        if ( !(null === (isset($context["databases"]) ? $context["databases"] : null))) {
            // line 22
            echo "    ";
            echo (isset($context["databases"]) ? $context["databases"] : null);
            echo "
";
        } else {
            // line 24
            echo "    <p>";
            echo _gettext("No databases");
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "server/databases/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  58 => 22,  56 => 21,  53 => 19,  51 => 18,  48 => 17,  45 => 14,  44 => 13,  43 => 12,  42 => 11,  41 => 10,  40 => 9,  38 => 8,  36 => 7,  33 => 5,  31 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "server/databases/index.twig", "/home/wwwroot/default/phpmyadmin/templates/server/databases/index.twig");
    }
}
