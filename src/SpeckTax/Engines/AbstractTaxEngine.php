<?php

namespace SpeckTax\Engines;

use SpeckTax\Interfaces\CalculateTaxInterface;

class AbstractTaxEngine implements CalculateTaxInterface
{
    public function calculateTax()
    {
        ;
    }
    
    /**
     * Should put commonly-used functions in here, for example
     * code to load the rules from the database, determine what 
     * tax engine to use, and so forth.
     */
}
