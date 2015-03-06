<?php
    class Word
    {
        private $string;

        function __construct($new_string)
        {
            $this->string = $new_string;
        }

        function setString($new_string)
        {
            $this->string = $new_string;
        }

        function getString()
        {
            return $this->string;
        }

        function getLength()
        {
            return strlen($this->string);
        }
    }
?>
