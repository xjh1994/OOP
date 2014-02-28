<?php

/**
 * 留言本模型，负责管理留言本
 * $bookPath: 留言本属性
 * @author xjh1994
 */

class bookModel {

    private $bookPath;
    private $data;

    public function setBookPath($bookPath) {
        $this->bookPath = $bookPath;
    }

    public function getBookPath() {
        return $this->bookPath;
    }

    public function open() {

    }

    public function close() {

    }

    public function read() {
        return file_get_contents($this->bookPath);
    }

    public function write($data) {
        // @$this->data = self::safe($data)->name . "&" . self::safe($data)->email . "\r\nsaid:\r\n" . self::safe($data)->content;
        $this->data = $data->name . "&" . $data->email . "\r\nsaid:\r\n" . $data->content;

        return file_put_contents($this->bookPath, $this->data, FILE_APPEND);
    }

    public static function safe($data) {
        $reflect = new ReflectionObject($data);
        $props = $reflect->getProperties();
        $messagebox = new stdClass();
        foreach ($props as $prop) {
            $ivar = $prop->getName();
            $messagebox = $ivar = trim($prop->getValue($data));
        }

        return $messagebox;
    }

    public function delete() {
        file_put_contents($this->bookPath, "it's empty now");
    }
}