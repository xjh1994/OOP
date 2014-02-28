<?php

/**
 * @author xjh1994
 */

class leaveModel {

    public function write(bookModel $b, $data) {
        $book = $b->getBookPath();
        $b->write($data);
    }
}