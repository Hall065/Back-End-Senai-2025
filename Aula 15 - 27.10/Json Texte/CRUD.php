<?php

class CRUD {
    private $file;

    public function __construct($file) {
        $this->file = $file;

        // Cria o arquivo se não existir
        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
        }
    }

    public function readAll() {
        $data = file_get_contents($this->file);
        return json_decode($data, true) ?? [];
    }

    public function saveAll($data) {
        file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }
}
