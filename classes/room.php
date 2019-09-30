<?php

class room{
    protected $preis=0;
    protected $name="";

    /**
     * product constructor.
     * @param float $preis
     * @param string $name
     */
    public function __construct(float $preis, string $name)
    {
        $this->preis = $preis;
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPreis() : float
    {
        return $this->preis;
    }

    /**
     * @return string
     */
    public function getName() :string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}