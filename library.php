<?php

class ActiverecordLibrary extends Sumish\Library {
    public function init() {
        $this->load(__DIR__ . '/ActiveRecord.php');
        return true;
    }
}