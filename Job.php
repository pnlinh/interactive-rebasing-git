<?php

class Job
{
    protected $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function title()
    {
        return $this->title;
    }
}
