<?php exit; ?>
1344937449
SELECT group_id, group_auto_default, group_min_posts, group_max_posts, group_min_days, group_max_days, group_min_warnings, group_max_warnings FROM phpbb_groups WHERE group_type <> 3 AND ( group_min_posts <> 0 OR group_max_posts <> 0 OR group_min_days <> 0 OR group_max_days <> 0 OR group_min_warnings <> 0 OR group_max_warnings <> 0 )
6
a:0:{}