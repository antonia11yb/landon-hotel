<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class DateCalculator
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function yearsDifference($year){
        $curYear = date('Y');
        $diff = $curYear - $year;
        return $diff;
    }
}