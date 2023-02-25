<?php

    class Tree
    {

        public $reg, $type, $qty;


        private function qty($type)
        {
            if($type == 'apples') return random_int(40, 50);
            else return random_int(0, 20);
        }

        public function __construct($connection, $type)
        {
            $this->type = $type;
            $this->qty = $this->qty($type);
            $query = "INSERT INTO `garden` (`type`, `fruits`) VALUES ('$type', '$this->qty')";
            if (!$connection->query($query)) echo 'DB query error!';
            $query = "SELECT `id` FROM `garden` ORDER BY `id` DESC LIMIT 1";
            $this->reg = $connection->query($query);
            if (!$this->reg) echo 'DB query error!';
        }

    }