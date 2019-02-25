<?php
    class Node
    {
        
        public $data;

        public $next;

        function Node($data)
        {
            $this->data = $data;
            $this->next = NULL;
        }

        function readNode()
        {
            return $this->data;
        }
    }
?>