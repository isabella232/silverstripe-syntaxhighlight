<?php

class SyntaxHighlightedPage extends DataExtension
{
    function contentcontrollerInit()
    {
        Requirements::javascript('framework/thirdparty/jquery/jquery.js');

        Requirements::combine_files('syntaxhighlighter.css',
            [
                SYNTAX_DIR . '/thirdparty/syntaxhighlighter/styles/shCore.css',
                SYNTAX_DIR . '/thirdparty/syntaxhighlighter/styles/shThemeDefault.css'
            ], 'screen'
        );

        Requirements::combine_files('syntaxhighlighter.js',
            [
                SYNTAX_DIR . '/thirdparty/syntaxhighlighter/scripts/XRegExp.js',
                SYNTAX_DIR . '/thirdparty/syntaxhighlighter/scripts/shCore.js',
                SYNTAX_DIR . '/thirdparty/syntaxhighlighter/scripts/shAutoloader.js',
                SYNTAX_DIR . '/js/syntaxhighlighter-plugin.js'
            ]
        );

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
