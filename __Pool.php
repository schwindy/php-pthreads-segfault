<?php

if (class_exists('Pool', true)) {
    class __Pool extends Pool
    {
        public $data;
        public $work;

        function __construct($size=5, $class="Worker", array $args=[])
        {
            $this->data = [];
            parent::__construct($size, $class, $args);
        }

        public function process()
        {
            while(count($this->work))
            {
                $this->collect
                (
                    function(__Task $task)
                    {
                        $obj = new stdClass();
                        $obj->data = $task->data;
                        $this->data[] = $obj;
                    }
                );
            }

            $this->shutdown();
            return $this->data;
        }
    }
}
