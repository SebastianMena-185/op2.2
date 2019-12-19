<?php

    class PYME extends cliente{
        private $cuit;
        private $razonsocial;
        private $direcciondelaempresa;
        private $email;
        private $nombre;
        private $telefono; 
        private $domiciliofiscal;

        

        public function __construct($cuit,$razonsocial,$direcciondelaempresa,$email,$nombre,$telefono,$domiciliofiscal){
            $this->nombre = $nombre;
            $this->cuit = $cuit;
            $this->razonsocial = $razonsocial;
            $this->direcciondelaempresa = $direcciondelaempresa;
            $this->email = $email;
            $this->telefono = $telefono;
            $this->$domiciliofiscal = $domiciliofiscal;
          }
   
   
   
   
   
   

        /**
         * Get the value of cuit
         */ 
        public function getCuit()
        {
                return $this->cuit;
        }

        /**
         * Set the value of cuit
         *
         * @return  self
         */ 
        public function setCuit($cuit)
        {
                $this->cuit = $cuit;

                return $this;
        }

        /**
         * Get the value of razonsocial
         */ 
        public function getRazonsocial()
        {
                return $this->razonsocial;
        }

        /**
         * Set the value of razonsocial
         *
         * @return  self
         */ 
        public function setRazonsocial($razonsocial)
        {
                $this->razonsocial = $razonsocial;

                return $this;
        }

        /**
         * Get the value of direcciondelaempresa
         */ 
        public function getDirecciondelaempresa()
        {
                return $this->direcciondelaempresa;
        }

        /**
         * Set the value of direcciondelaempresa
         *
         * @return  self
         */ 
        public function setDirecciondelaempresa($direcciondelaempresa)
        {
                $this->direcciondelaempresa = $direcciondelaempresa;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of telefono
         */ 
        public function getTelefono()
        {
                return $this->telefono;
        }

        /**
         * Set the value of telefono
         *
         * @return  self
         */ 
        public function setTelefono($telefono)
        {
                $this->telefono = $telefono;

                return $this;
        }

        /**
         * Get the value of domiciliofiscal
         */ 
        public function getDomiciliofiscal()
        {
                return $this->domiciliofiscal;
        }

        /**
         * Set the value of domiciliofiscal
         *
         * @return  self
         */ 
        public function setDomiciliofiscal($domiciliofiscal)
        {
                $this->domiciliofiscal = $domiciliofiscal;

                return $this;
        }
    }



?>