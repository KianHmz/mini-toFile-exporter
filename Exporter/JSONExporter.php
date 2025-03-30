<?php

namespace Exporter;

class JSONExporter extends Exporter
{
    protected $type = 'json';
    public function export()
    {
        $data = json_encode($this->data);
        $filePath = __DIR__ . "\\..\\exported-files\\" . strtoupper($this->type) . "-" . rand(100, 999) . "." . strtolower($this->type);
        if (file_put_contents($filePath, $data)) {
            echo "{$this->type} file successfully exported !!!";
        } else {
            die("Error: couldn't export the {$this->type} file !!!");
        }
    }
}
