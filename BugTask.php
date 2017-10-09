<?php
class BugTask extends __Task {
    public static function heartbeat () {
        $a = [
            'id'=>'1506573583_9093-DpONCaYvJofMgIpG',
            'user_id'=>'john',
            'profile_name'=>'BlazeItBot420',
            'engine'=>'sim',
            'status'=>'running',
            'fresh'=>'true'
        ];

        $obj = (object)$a;
    }
}
