<?php exit; ?>
1344940599
SELECT * FROM phpbb_bbcodes WHERE bbcode_id = 32
885
a:1:{i:0;a:15:{s:9:"bbcode_id";s:2:"32";s:10:"bbcode_tag";s:5:"right";s:15:"bbcode_helpline";s:105:"Выравнивание текста справа: [right]Сюда вставляем текст[/right]";s:18:"display_on_posting";s:1:"1";s:12:"bbcode_match";s:21:"[right]{TEXT}[/right]";s:10:"bbcode_tpl";s:42:"<div style="text-align:right">{TEXT}</div>";s:16:"first_pass_match";s:29:"!\[right\](.*?)\[/right\]!ies";s:18:"first_pass_replace";s:138:"'[right:$uid]'.str_replace(array("\r\n", '\"', '\'', '(', ')'), array("\n", '"', '&#39;', '&#40;', '&#41;'), trim('${1}')).'[/right:$uid]'";s:17:"second_pass_match";s:37:"!\[right:$uid\](.*?)\[/right:$uid\]!s";s:19:"second_pass_replace";s:40:"<div style="text-align:right">${1}</div>";s:13:"display_on_pm";s:1:"0";s:14:"display_on_sig";s:1:"0";s:7:"abbcode";s:1:"1";s:12:"bbcode_image";s:9:"right.gif";s:12:"bbcode_order";s:2:"32";}}