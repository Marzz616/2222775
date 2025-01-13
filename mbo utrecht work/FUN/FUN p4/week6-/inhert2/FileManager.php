<?php

class FileManager {
    private $filepath;

    public function __construct($filepath) {
        $this->filepath = $filepath;
    }

    public function updateFile($animals) {
        $data = [];
        foreach ($animals as $animal) {
            $data[] = (string)$animal;
        }
        return file_put_contents($this->filepath, implode("\n", $data)) !== false;
    }

    public function readFile() {
        return file($this->filepath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
}
?>
