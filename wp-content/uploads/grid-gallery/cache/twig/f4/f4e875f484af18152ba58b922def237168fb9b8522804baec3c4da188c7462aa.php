<?php

/* @galleries/index.twig */
class __TwigTemplate_4e43ac1e3bdef46b830158f865f27f22cd7ed9ef134c1860c50b43993e3a7377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/index.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "
    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        ";
        // line 7
        echo "        ";
        // line 8
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
    </nav>

";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
    <section id=\"gg-galleries\">

        <div class=\"row\">
            <div class=\"col-xs-12\">

                ";
        // line 20
        $context["columns"] = array(0 => "ID", 1 => $this->getAttribute(        // line 22
($context["environment"] ?? null), "translate", array(0 => "Title"), "method"), 2 => $this->getAttribute(        // line 23
($context["environment"] ?? null), "translate", array(0 => "Thumbnail"), "method"), 3 => $this->getAttribute(        // line 24
($context["environment"] ?? null), "translate", array(0 => "Shortcode"), "method"), 4 => $this->getAttribute(        // line 25
($context["environment"] ?? null), "translate", array(0 => "PHP"), "method"), 5 => $this->getAttribute(        // line 26
($context["environment"] ?? null), "translate", array(0 => "Actions"), "method"));
        // line 28
        echo "
                <table id=\"galleries\" class=\"wp-list-galleries\" style=\"min-width: 100%;\">
                    <thead>
                        <tr>
                            <th scope=\"col\">
                                <input type=\"checkbox\" id=\"check_all\" name=\"check_all\">
                            </th>
                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 36
            echo "                                <th scope=\"col\">";
            echo twig_escape_filter($this->env, $context["column"], "html", null, true);
            echo "</th>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["galleries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 42
            echo "                        <tr id=\"gallery-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
            echo "\" data-gallery-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
            echo "\">
                            <td>
                                <input type=\"checkbox\" class=\"tableCheckbox\" id=\"check_";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
            echo "\" data-gallery-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
            echo "\" name=\"check_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
            echo "\">
                            </td>
                            <td>
                                ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("gallery_id" => $this->getAttribute($context["gallery"], "id", array()))), "method"), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Edit gallery \"%s\""), "method"), $this->getAttribute($context["gallery"], "title", array())), "html", null, true);
            echo "\">
                                    ";
            // line 51
            echo twig_title_string_filter($this->env, $this->getAttribute($context["gallery"], "title", array()));
            echo "
                                </a>
                                <i class=\"fa fa-fw fa-pencil\"></i>
                            </td>
                            <td>
                                ";
            // line 56
            $context["cover"] = call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($context["gallery"], "attachment_id", array()), "155", "100", "true"));
            // line 57
            echo "
                                ";
            // line 58
            if ((twig_length_filter($this->env, ($context["cover"] ?? null)) < 1)) {
                // line 59
                echo "                                    ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["gallery"], "settings", array()), "posts", array()), "postCover", array())) > 1)) {
                    // line 60
                    echo "                                        ";
                    $context["cover"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["gallery"], "settings", array()), "posts", array()), "postCover", array());
                    // line 61
                    echo "                                    ";
                }
                // line 62
                echo "                                ";
            }
            // line 63
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("cover", $context)) ? (_twig_default_filter(($context["cover"] ?? null), ("holder.js/350x220?theme=gray&text=" . $this->getAttribute($context["gallery"], "title", array())))) : (("holder.js/350x220?theme=gray&text=" . $this->getAttribute($context["gallery"], "title", array())))), "html", null, true);
            echo "\" alt=\"";
            echo $this->getAttribute($context["gallery"], "title", array());
            echo "\" width=\"155px\" height=\"100px\"/>
                            </td>
                            <td>
                                <input type=\"text\" id=\"shortcode-";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
            echo "\" class=\"ggCopyTextCode shortcode\" value=\"[supsystic-gallery id='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
            echo "']\">
                            </td>
                            <td>
                                <input type=\"text\" id=\"phpcode-";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
            echo "\" class=\"ggCopyTextCode phpcode\"
                                       value=\"";
            // line 70
            echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute($context["gallery"], "id", array())) . "]') ?>"), "html", null, true);
            echo "\">
                            </td>
                            <td>
                                <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("gallery_id" => $this->getAttribute($context["gallery"], "id", array()))), "method"), "html", null, true);
            echo "\"
                                   class=\"button background sggActionButtons\">
                                    <i class=\"fa fa-cogs\"></i>
                                    ";
            // line 76
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Settings")), "html", null, true);
            echo "
                                </a>
                                <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute($context["gallery"], "id", array()))), "method"), "html", null, true);
            echo "\"
                                   class=\"button background sggActionButtons\">
                                    <i class=\"fa fa-bars\"></i>
                                    ";
            // line 81
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
            echo "
                                </a>
                                <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute($context["gallery"], "id", array()))), "method"), "html", null, true);
            echo "\"
                                   class=\"button background sggActionButtons\">
                                    <i class=\"fa fa-eye\"></i>
                                    ";
            // line 86
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
            echo "
                                </a>
                                <br>
                                <button class=\"button button-primary gallery import-to-gallery sggActionButtons\" data-folder-id=\"0\"
                                        data-gallery-id=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "id", array()), "html", null, true);
            echo "\" ";
            echo ">
                                    <i class=\"fa fa-fw fa-camera\"></i>
                                    ";
            // line 92
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
            echo "
                                </button>
                                <a id=\"delete-gallery\" data-confirm=\"";
            // line 94
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you sure you want to delete this gallery?")), "html", null, true);
            echo "\" class=\"button button-primary sggActionButtons\" title=\"Delete this gallery\"
                                   href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "delete", 2 => array("gallery_id" => $this->getAttribute($context["gallery"], "id", array()), "_wpnonce" => ($context["_wpnonce"] ?? null))), "method"), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i>
                                    ";
            // line 97
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete gallery")), "html", null, true);
            echo "
                                </a>
                                ";
            // line 100
            echo "                                ";
            // line 101
            echo "                                ";
            // line 102
            echo "                                ";
            // line 103
            echo "                                ";
            // line 104
            echo "                                ";
            // line 105
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                    </tbody>
                </table>

            </div>
            <div class=\"col-xs-12\">
                <button class=\"button group_button\" id=\"delete-group\" disabled>
                    <i class=\"fa fa-fw fa-trash-o\"></i>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Delete selected"), "method"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
    </section>

    ";
        // line 141
        echo "


    ";
        // line 144
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/index.twig", 144);
        // line 145
        echo "    <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
        ";
        // line 146
        echo $context["importTypes"]->getshow(400);
        echo "
    </div>

\t";
        // line 149
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/index.twig", 149);
        // line 150
        echo "\t<div id=\"videoUrlAddDialog\" title=\"";
        echo "Add video url";
        echo "\" style=\"display:none;\" data-gallery-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "\">
\t\t<div class=\"sggVideoUrlAddWr\">
\t\t\t<div class=\"sggTableRow\">
\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t<div class=\"sggDlgVideoTypeH3\">";
        // line 154
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video type:")), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t";
        // line 157
        echo ((((        // line 158
$context["form"]->getradio("sggDlgVideoType", "youtube", array("id" => "sggDlgYoutubeVideoType", "class" => "sggDlgVideoTypeRadio", "checked" => "checked")) .         // line 163
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Youtube url")), "sggDlgYoutubeVideoType")) . "<br/>") .         // line 167
$context["form"]->getradio("sggDlgVideoType", "vimeo", array("id" => "sggDlgVimeoVideoType", "class" => "sggDlgVideoTypeRadio"))) .         // line 172
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Vimeo url")), "sggDlgVimeoVideoType"));
        // line 176
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sggTableRow\">
\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t<div class=\"sggDlgVideoTypeH3\">";
        // line 181
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video url:")), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sggTableColumn6\">
\t\t\t\t\t";
        // line 184
        echo         // line 185
$context["form"]->getinput("text", "sggDlgUrlVideoValue", "", array("id" => "sggDlgUrlVideoInp", "class" => ""));
        // line 191
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sggTableRow sggAduHiden\" id=\"sggAduErrorText\"></div>
\t\t</div>
\t</div>

";
    }

    // line 120
    public function getputPreset($__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 121
            echo "        <div class=\"preset ";
            if ((($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false) && $this->getAttribute(($context["data"] ?? null), "pro", array()))) {
                echo "disabled";
            }
            echo "\"
             data-preset=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "value", array()), "html", null, true);
            echo "\">
            <p>";
            // line 123
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute(($context["data"] ?? null), "title", array())), "html", null, true);
            echo "</p>
            <img src=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "getModule", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
            echo "/assets/img/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "image", array()), "html", null, true);
            echo "\" alt=\"\"/>
            ";
            // line 125
            if (($this->getAttribute(($context["data"] ?? null), "pro", array()) && ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false))) {
                // line 126
                echo "                <a class=\"button button-primary inPro\"
                    ";
                // line 127
                if (($this->getAttribute(($context["data"] ?? null), "title", array()) == "Categories")) {
                    // line 128
                    echo "                        href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\">
                    ";
                }
                // line 130
                echo "                    ";
                if (($this->getAttribute(($context["data"] ?? null), "title", array()) == "Icons")) {
                    // line 131
                    echo "                        href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\">
                    ";
                }
                // line 133
                echo "                    ";
                if (($this->getAttribute(($context["data"] ?? null), "title", array()) == "Pagination")) {
                    // line 134
                    echo "                        href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\">
                    ";
                }
                // line 136
                echo "                    Available in PRO
                </a>
            ";
            }
            // line 139
            echo "        </div>
    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 139,  404 => 136,  400 => 134,  397 => 133,  393 => 131,  390 => 130,  386 => 128,  384 => 127,  381 => 126,  379 => 125,  373 => 124,  369 => 123,  365 => 122,  358 => 121,  346 => 120,  335 => 191,  333 => 185,  332 => 184,  326 => 181,  319 => 176,  317 => 172,  316 => 167,  315 => 163,  314 => 158,  313 => 157,  307 => 154,  297 => 150,  295 => 149,  289 => 146,  284 => 145,  282 => 144,  277 => 141,  268 => 114,  260 => 108,  252 => 105,  250 => 104,  248 => 103,  246 => 102,  244 => 101,  242 => 100,  237 => 97,  232 => 95,  228 => 94,  223 => 92,  217 => 90,  210 => 86,  204 => 83,  199 => 81,  193 => 78,  188 => 76,  182 => 73,  176 => 70,  172 => 69,  164 => 66,  155 => 63,  152 => 62,  149 => 61,  146 => 60,  143 => 59,  141 => 58,  138 => 57,  136 => 56,  128 => 51,  122 => 50,  116 => 47,  106 => 44,  98 => 42,  94 => 41,  89 => 38,  80 => 36,  76 => 35,  67 => 28,  65 => 26,  64 => 25,  63 => 24,  62 => 23,  61 => 22,  60 => 20,  52 => 14,  49 => 13,  38 => 8,  36 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/index.twig", "C:\\laragon\\git\\happylandd\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\index.twig");
    }
}
