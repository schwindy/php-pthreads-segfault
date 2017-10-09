<?php
require('__Pool.php');
require('__Task.php');
require('BugTask.php');
ini_set("memory_limit", "40G");

function init () {
    $p = new __Pool(8);

    for ($i = 0; $i < 8000; ++$i) {
        $p->submit(new BugTask('heartbeat'));
    }

    $p->process();
    $p->shutdown();
}

init();
