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

/* server/databases/table_header.twig */
class __TwigTemplate_6c6b08eea5c595f5883b62cecce32441648b36e3a17c3b5ac5882bab574a988d extends \Twig\Template
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
        echo "<thead>
    <tr>
        ";
        // line 3
        if (((isset($context["is_superuser"]) ? $context["is_superuser"] : null) || (isset($context["allow_user_drop_database"]) ? $context["allow_user_drop_database"] : null))) {
            // line 4
            echo "            <th></th>
        ";
        }
        // line 6
        echo "        <th>
            <a href=\"server_databases.php";
        // line 7
        echo PhpMyAdmin\Url::getCommon((isset($context["url_params"]) ? $context["url_params"] : null));
        echo "\">
                ";
        // line 8
        echo _gettext("Database");
        // line 9
        echo "                ";
        echo ((((isset($context["sort_by"]) ? $context["sort_by"] : null) == "SCHEMA_NAME")) ? (PhpMyAdmin\Util::getImage(("s_" .         // line 10
(isset($context["sort_order"]) ? $context["sort_order"] : null)),         // line 11
(isset($context["sort_order_text"]) ? $context["sort_order_text"] : null))) : (""));
        // line 12
        echo "
            </a>
        </th>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["column_order"]) ? $context["column_order"] : null));
        foreach ($context['_seq'] as $context["stat_name"] => $context["stat"]) {
            // line 16
            echo "            ";
            if (twig_in_filter($context["stat_name"], twig_get_array_keys_filter((isset($context["first_database"]) ? $context["first_database"] : null)))) {
                // line 17
                echo "                ";
                $context["url_params"] = twig_array_merge((isset($context["url_params"]) ? $context["url_params"] : null), ["sort_by" =>                 // line 18
$context["stat_name"], "sort_order" => ((((                // line 19
(isset($context["sort_by"]) ? $context["sort_by"] : null) == $context["stat_name"]) && ((isset($context["sort_order"]) ? $context["sort_order"] : null) == "desc"))) ? ("asc") : ("desc"))]);
                // line 21
                echo "
                <th";
                // line 22
                echo ((($this->getAttribute($context["stat"], "format", [], "array") === "byte")) ? (" colspan=\"2\"") : (""));
                echo ">
                    <a href=\"server_databases.php";
                // line 23
                echo PhpMyAdmin\Url::getCommon((isset($context["url_params"]) ? $context["url_params"] : null));
                echo "\">
                        ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "disp_name", [], "array"), "html", null, true);
                echo "
                        ";
                // line 25
                echo ((((isset($context["sort_by"]) ? $context["sort_by"] : null) == $context["stat_name"])) ? (PhpMyAdmin\Util::getImage(("s_" .                 // line 26
(isset($context["sort_order"]) ? $context["sort_order"] : null)),                 // line 27
(isset($context["sort_order_text"]) ? $context["sort_order_text"] : null))) : (""));
                // line 28
                echo "
                    </a>
                </th>
            ";
            }
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stat_name'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        ";
        if ((isset($context["master_replication"]) ? $context["master_replication"] : null)) {
            // line 34
            echo "            <th>";
            echo _gettext("Master replication");
            echo "</th>
        ";
        }
        // line 36
        echo "        ";
        if ((isset($context["slave_replication"]) ? $context["slave_replication"] : null)) {
            // line 37
            echo "            <th>";
            echo _gettext("Slave replication");
            echo "</th>
        ";
        }
        // line 39
        echo "        <th>";
        echo _gettext("Action");
        echo "</th>
    </tr>
</thead>
";
    }

    public function getTemplateName()
    {
        return "server/databases/table_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  114 => 37,  111 => 36,  105 => 34,  102 => 33,  96 => 32,  90 => 28,  88 => 27,  87 => 26,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  71 => 21,  69 => 19,  68 => 18,  66 => 17,  63 => 16,  59 => 15,  54 => 12,  52 => 11,  51 => 10,  49 => 9,  47 => 8,  43 => 7,  40 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "server/databases/table_header.twig", "/home/wwwroot/default/phpmyadmin/templates/server/databases/table_header.twig");
    }
}
