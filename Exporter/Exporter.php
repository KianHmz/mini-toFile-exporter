<?php

/**
 * base model (parent) is here
 */

namespace Exporter;

abstract class Exporter
{
    protected $data;
    protected $type;
    public function __construct(array|object $data)
    {
        $this->data = $data;
    }
    protected abstract function export();
}
