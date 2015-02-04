<?php

class SyntaxHighlightedPage extends DataExtension
{
    function contentcontrollerInit()
    {
        Requirements::javascript("framework/thirdparty/jquery/jquery.js");

        Requirements::css(SYNTAX_DIR . "/thirdparty/syntaxhighlighter/styles/shCore.css");
        Requirements::css(SYNTAX_DIR . "/thirdparty/syntaxhighlighter/styles/shThemeDefault.css");

        Requirements::javascript(SYNTAX_DIR . "/thirdparty/syntaxhighlighter/scripts/XRegExp.js");
        Requirements::javascript(SYNTAX_DIR . "/thirdparty/syntaxhighlighter/scripts/shCore.js");
        Requirements::javascript(SYNTAX_DIR . "/thirdparty/syntaxhighlighter/scripts/shAutoloader.js");
        Requirements::javascript(SYNTAX_DIR . "/js/syntaxhighlighter-plugin.js");
        $syntax_dir = SYNTAX_DIR;
        Requirements::customScript(<<<JS
    (function ($) {
        $(document).ready(function () {
            $('body').setupSyntaxhighlighter('{$syntax_dir}/thirdparty/syntaxhighlighter/scripts/');
        });
    })($);
JS
        );
    }
}
