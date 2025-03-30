<?php

namespace Exporter;

class CSVExporter extends Exporter
{
    protected $type = 'csv';
    public function export()
    {
        $data = "{$this->data['title']},{$this->data['content']}";
        $filePath = __DIR__ . "\\..\\exported-files\\" . strtoupper($this->type) . "-" . rand(100, 999) . "." . strtolower($this->type);
        if (file_put_contents($filePath, $data)) {
            echo "{$this->type} file successfully exported !!!";
        } else {
            die("Error: couldn't export the {$this->type} file !!!");
        }
    }
}
