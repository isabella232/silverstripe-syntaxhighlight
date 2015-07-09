<?php

define("SYNTAX_DIR",basename(__DIR__));

Object::add_extension("Page", "SyntaxHighlightedPage");

HtmlEditorConfig::get('cms')->enablePlugins(array('syntaxhl' => '../../../'.SYNTAX_DIR.'/thirdparty/syntaxhl/editor_plugin.js'));
HtmlEditorConfig::get('cms')->insertButtonsAfter('formatselect', 'syntaxhl');