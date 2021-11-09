<?php
require 'lib/phpQuery.php';
require('lib/simple_html_dom.php');

//include"simple_html_DOM.php";
$html=file_get_html('http://hronika.su/kratkij-analiz-stihotvoreniya-u-lukomorya-dub-po-planu/');

$list = $html->find('div[class="entry-content"]',0);
echo preg_replace("/<p[^>]*>[\s|&nbsp;]*<\/p>/", '', $list);
