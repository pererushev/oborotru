<?php

    require_once 'Tree.php';

        class Test
        {
            public $tree;

            public function __construct(Tree $tree)
            {
                $this->tree = $tree;
            }

            public function assert()
            {
                switch ($this->tree->type)
                {
                    case 'apples':
                        if (($this->tree->qty < 40) or ($this->tree->qty > 50))
                        {
                            echo 'Quantity test failed!';
                        }
                        else
                        {
                            echo 'Quantity test passed!';
                        }
                        break;
                    case 'pears':
                        if (($this->tree->qty < 0) or ($this->tree->qty > 50))
                        {
                            echo 'Quantity test failed!';
                        }
                        else
                        {
                            echo 'Quantity test passed!';
                        }
                        break;
                    default:
                        echo 'Type test failed';

                }
            }
        }