<?php
if (class_exists('Threaded', true)) {
    class __Task extends Threaded
    {
        public $id;
        public $args;
        public $completed;
        public $data;
        public $db;
        public $headers;
        public $log;
        public $method;
        public $run_elapsed;
        public $run_started;
        public $run_stopped;
        public $started;

        public function __construct($method, $args=[], $headers=[])
        {
            $this->completed = false;
            $this->args = $args;
            $this->headers = $headers;
            $this->data = [];
            $this->log = [];
            $this->method = $method;
            $this->started = false;
        }

        public function run()
        {
            if (method_exists($this, $this->method)) {
                return call_user_func([$this, $this->method], $this->args);
            }

            return false;
        }
    }
}
