<?php

namespace Flobbos\Pagebuilder\Contracts;

interface ElementContract
{
    public function get();

    public function find($id);

    public function create(array $element_data);

    public function update($id, array $element_data);

    public function delete($id);
}
