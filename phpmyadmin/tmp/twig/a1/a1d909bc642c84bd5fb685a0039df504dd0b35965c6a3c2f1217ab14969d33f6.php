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

/* table/structure/display_table_stats.twig */
class __TwigTemplate_348d17f8263d83d6fb7f97acef16b93bd8e38dd4673fc15c732b43108c887397 extends \Twig\Template
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
        echo "<div id=\"tablestatistics\">
    <fieldset>
        <legend>";
        // line 3
        echo _gettext("Information");
        echo "</legend>
        ";
        // line 4
        if ($this->getAttribute((isset($context["showtable"]) ? $context["showtable"] : null), "TABLE_COMMENT", [], "array")) {
            // line 5
            echo "            <p>
                <strong>";
            // line 6
            echo _gettext("Table comments:");
            echo "</strong>
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["showtable"]) ? $context["showtable"] : null), "TABLE_COMMENT", [], "array"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 10
        echo "        <a id=\"showusage\"></a>

        ";
        // line 12
        if (( !(isset($context["tbl_is_view"]) ? $context["tbl_is_view"] : null) &&  !(isset($context["db_is_system_schema"]) ? $context["db_is_system_schema"] : null))) {
            // line 13
            echo "            <table id=\"tablespaceusage\" class=\"width100 data\">
                <caption class=\"tblHeaders\">";
            // line 14
            echo _gettext("Space usage");
            echo "</caption>
                <tbody>
                    <tr>
                        <th class=\"name\">";
            // line 17
            echo _gettext("Data");
            echo "</th>
                        <td class=\"value\">";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["data_size"]) ? $context["data_size"] : null), "html", null, true);
            echo "</td>
                        <td class=\"unit\">";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["data_unit"]) ? $context["data_unit"] : null), "html", null, true);
            echo "</td>
                    </tr>

                ";
            // line 22
            if ((isset($context["index_size"]) || array_key_exists("index_size", $context))) {
                // line 23
                echo "                    <tr>
                        <th class=\"name\">";
                // line 24
                echo _gettext("Index");
                echo "</th>
                        <td class=\"value\">";
                // line 25
                echo twig_escape_filter($this->env, (isset($context["index_size"]) ? $context["index_size"] : null), "html", null, true);
                echo "</td>
                        <td class=\"unit\">";
                // line 26
                echo twig_escape_filter($this->env, (isset($context["index_unit"]) ? $context["index_unit"] : null), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 29
            echo "
                ";
            // line 30
            if ((isset($context["free_size"]) || array_key_exists("free_size", $context))) {
                // line 31
                echo "                    <tr>
                        <th class=\"name\">";
                // line 32
                echo _gettext("Overhead");
                echo "</th>
                        <td class=\"value\">";
                // line 33
                echo twig_escape_filter($this->env, (isset($context["free_size"]) ? $context["free_size"] : null), "html", null, true);
                echo "</td>
                        <td class=\"unit\">";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["free_unit"]) ? $context["free_unit"] : null), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <th class=\"name\">";
                // line 37
                echo _gettext("Effective");
                echo "</th>
                        <td class=\"value\">";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["effect_size"]) ? $context["effect_size"] : null), "html", null, true);
                echo "</td>
                        <td class=\"unit\">";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["effect_unit"]) ? $context["effect_unit"] : null), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            if (((isset($context["tot_size"]) || array_key_exists("tot_size", $context)) && ((isset($context["mergetable"]) ? $context["mergetable"] : null) == false))) {
                // line 44
                echo "                    <tr>
                        <th class=\"name\">";
                // line 45
                echo _gettext("Total");
                echo "</th>
                        <td class=\"value\">";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["tot_size"]) ? $context["tot_size"] : null), "html", null, true);
                echo "</td>
                        <td class=\"unit\">";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["tot_unit"]) ? $context["tot_unit"] : null), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 50
            echo "
                ";
            // line 52
            echo "                ";
            if (((isset($context["free_size"]) || array_key_exists("free_size", $context)) && ((((            // line 53
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null) == "MYISAM") || (            // line 54
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null) == "ARIA")) || (            // line 55
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null) == "MARIA")) || (            // line 56
(isset($context["tbl_storage_engine"]) ? $context["tbl_storage_engine"] : null) == "BDB")))) {
                // line 57
                echo "                    <tr class=\"tblFooters print_ignore\">
                        <td colspan=\"3\" class=\"center\">
                            <a href=\"sql.php\" data-post=\"";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["url_query"]) ? $context["url_query"] : null), "html", null, true);
                echo "&amp;pos=0&amp;sql_query=";
                // line 60
                echo twig_escape_filter($this->env, twig_urlencode_filter(("OPTIMIZE TABLE " . PhpMyAdmin\Util::backquote((isset($context["table"]) ? $context["table"] : null)))), "html", null, true);
                echo "\">
                                ";
                // line 61
                echo PhpMyAdmin\Util::getIcon("b_tbloptimize", _gettext("Optimize table"));
                echo "
                            </a>
                        </td>
                    </tr>
                ";
            }
            // line 66
            echo "                </tbody>
            </table>
        ";
        }
        // line 69
        echo "
        ";
        // line 70
        $this->loadTemplate("table/structure/row_stats_table.twig", "table/structure/display_table_stats.twig", 70)->display(twig_to_array(["showtable" =>         // line 71
(isset($context["showtable"]) ? $context["showtable"] : null), "tbl_collation" =>         // line 72
(isset($context["tbl_collation"]) ? $context["tbl_collation"] : null), "is_innodb" =>         // line 73
(isset($context["is_innodb"]) ? $context["is_innodb"] : null), "mergetable" =>         // line 74
(isset($context["mergetable"]) ? $context["mergetable"] : null), "avg_size" => ((        // line 75
(isset($context["avg_size"]) || array_key_exists("avg_size", $context))) ? ((isset($context["avg_size"]) ? $context["avg_size"] : null)) : (null)), "avg_unit" => ((        // line 76
(isset($context["avg_unit"]) || array_key_exists("avg_unit", $context))) ? ((isset($context["avg_unit"]) ? $context["avg_unit"] : null)) : (null))]));
        // line 78
        echo "    </fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "table/structure/display_table_stats.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 78,  202 => 76,  201 => 75,  200 => 74,  199 => 73,  198 => 72,  197 => 71,  196 => 70,  193 => 69,  188 => 66,  180 => 61,  176 => 60,  173 => 59,  169 => 57,  167 => 56,  166 => 55,  165 => 54,  164 => 53,  162 => 52,  159 => 50,  153 => 47,  149 => 46,  145 => 45,  142 => 44,  140 => 43,  137 => 42,  131 => 39,  127 => 38,  123 => 37,  117 => 34,  113 => 33,  109 => 32,  106 => 31,  104 => 30,  101 => 29,  95 => 26,  91 => 25,  87 => 24,  84 => 23,  82 => 22,  76 => 19,  72 => 18,  68 => 17,  62 => 14,  59 => 13,  57 => 12,  53 => 10,  47 => 7,  43 => 6,  40 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/display_table_stats.twig", "/home/wwwroot/default/phpmyadmin/templates/table/structure/display_table_stats.twig");
    }
}
