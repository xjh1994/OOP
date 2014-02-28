<?php

/**
 * @author xjh1994
 */

class authorControl {

    public function message(leaveModel $l, bookModel $b, message $data) {
        $l->write($b, $data);
    }

    public function view(bookModel $b) {
        return $b->read();
    }

    public function delete(bookModel $b) {
        $b->delete();
        echo self::view($b);
    }
}