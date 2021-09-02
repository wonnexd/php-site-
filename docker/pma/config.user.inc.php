<?php

$cfg['NavigationTreeEnableGrouping'] = false;

foreach ($cfg['Servers'] as &$server) {
    $server['hide_db'] = 'information_schema|mysql|performance_schema|sys';
}
