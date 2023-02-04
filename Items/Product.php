<?php

    //Create a class for Products
    class Products{

        //Create a variables
        private $ProductName;
        private $ProductDescription;
        private $ProductPrice;
        private $ProductSRP;

        //Create a algorithm (Function) when the Programmer wants to reuse this.
        //Setter and Getter

        function SetProductName($Pname){
            $this->ProductName = $Pname;
        }
        function SetProductDescription($PDescription){
            $this->ProductDescription = $PDescription;
        }

        function SetProductPrice($PPrice){
            $this->ProductPrice = $PPrice;
        }

        function GetProductName(){
            return $this->ProductName;
        }

        function GetProductDescription(){
            return $this->ProductDescription;
        }
        function GetProductPrice(){
            return $this->ProductPrice;
        }

    }


?>