<?php

    //Create a class for Products
    class Products{

        //Init a variables
        private $ProductName;
        private $ProductDescription;
        private $ProductPrice;
        private $ProductSRP;

        //Create a algorithm (Function) when the Programmer wants to reuse this.
        //Setter and Getter

        function SetName($Pname){
            $this->ProductName = $Pname;
        }
        function SetDescription($PDescription){
            $this->ProductDescription = $PDescription;
        }

        function SetPrice($PPrice){
            $this->ProductPrice = $PPrice;
        }

        function GetName(){
            return $this->ProductName;
        }

        function GetDescription(){
            return $this->ProductDescription;
        }
        function GetPrice(){
            return $this->ProductPrice;
        }

    }


?>