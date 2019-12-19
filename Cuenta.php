<?php

abstract Class Cuenta {
    private $CBU;
    private $Balance;
    private $Fechadeultimomovimiento;
    private $monto;
    private $transaccion;

    



    public function __construct($CBU){
        $this->CBU = $CBU;
    }
    /**
     * Get the value of CBU
     */ 
    public function getCBU()
    {
        return $this->CBU;
    }

    /**
     * Set the value of CBU
     *
     * @return  self
     */ 
    public function setCBU($CBU)
    {
        $this->CBU = $CBU;

        return $this;
    }

    /**
     * Get the value of Balance
     */ 
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * Set the value of Balance
     *
     * @return  self
     */ 
    public function setBalance($Balance)
    {
        $this->Balance = $Balance;

        return $this;
    }

    /**
     * Get the value of Fechadeultimomovimiento
     */ 
    public function getFechadeultimomovimiento()
    {
        return $this->Fechadeultimomovimiento;
    }

    /**
     * Set the value of Fechadeultimomovimiento
     *
     * @return  self
     */ 
    public function setFechadeultimomovimiento($Fechadeultimomovimiento)
    {
        $this->Fechadeultimomovimiento = $Fechadeultimomovimiento;

        return $this;
    }
       
    
    public abstract function debitar($transaccion,$monto);

        
}


?>