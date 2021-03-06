<?php

namespace App\Repositories\Writer;

use App\Repositories\BaseRepositoryInterface;

interface WriterRepositoryInterface extends BaseRepositoryInterface
{
    public function getPendingRequests();

    public function getRejectedWriter();
}
