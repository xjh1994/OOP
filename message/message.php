<?php

/**
 * message
 * @author xjh1994
 */

class message {

    public $name;
    public $email;
    public $content;

    public function _set($name) {
        $this->$name = $value;
    }

    public function _get($name) {
        if(!isset($this->$name)) {
            $this->$name = NULL;
        }
    }
}