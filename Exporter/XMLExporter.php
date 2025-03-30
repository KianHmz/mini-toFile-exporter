<?php

namespace Exporter;

class XMLExporter extends Exporter
{
    protected $type = 'xml';
    public function export()
    {
        $data = "<title>{$this->data['title']}</title>\n<content>{$this->data['content']}</content>";
        $filePath = __DIR__ . "\\..\\exported-files\\" . strtoupper($this->type) . "-" . rand(100, 999) . "." . strtolower($this->type);
        if (file_put_contents($filePath, $data)) {
            echo "{$this->type} file successfully exported !!!";
        } else {
            die("Error: couldn't export the {$this->type} file !!!");
        }
    }
}
