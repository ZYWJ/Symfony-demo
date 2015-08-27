<?php

namespace AdminBundle\Service;
/**
 * Service CPO
 */
class CPO
{
    private $str;

    public function __construct()
    {
    }

    /**
     * return CPO
     * param string $s
     */
    public function setStr($s)
    {
        $this->str = $s; 
    }


    /**
     * return $str
     */
    public function getStr()
    {
        return $this->str; 
    }
}
