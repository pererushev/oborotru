<?php

require_once 'Tree.php';

    class Garden
    {
        public $apples, $pears;

        public function __construct($connection, $trees)
        {
            $this->apples = $this->pears = 0;
            foreach ($trees as $type => $qty)
            {
                for ($i = 0; $i < $qty; $i++)
                {
                    new Tree($connection, $type);
                    if ($type == 'apples') $this->apples += $qty;
                    else $this->pears += $qty;
                }
            }
        }
    }