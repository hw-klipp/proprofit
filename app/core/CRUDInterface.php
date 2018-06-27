<?php

namespace app\core;

interface CRUDInterface
{
    public function insert();
    public function update();
    public function save();
    public function delete();
}