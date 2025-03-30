<?php

namespace Exporter;

class TXTExporter extends Exporter
{
    protected $type = 'txt';
    public function export()
    {
        $data = "*** title: ***\n{$this->data['title']}\n\n*** content: ***\n{$this->data['content']}";
        $filePath = __DIR__ . "\\..\\exported-files\\" . strtoupper($this->type) . "-" . rand(100, 999) . "." . strtolower($this->type);
        if (file_put_contents($filePath, $data)) {
            echo "{$this->type} file successfully exported !!!";
        } else {
            die("Error: couldn't export the {$this->type} file !!!");
        }
    }
}
