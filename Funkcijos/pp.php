<?php

usort($masyvas, function($a, $b) {
    return $a['user_id'] <=> $b['user_id'];
});

print_r($masyvas);
echo '<br><hr>';