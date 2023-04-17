<?php

class Index extends Controlador
{
    public function __construct()
    {
    }
    public function index()
    {
        $this->vista('index');
    }
}