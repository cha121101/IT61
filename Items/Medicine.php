<?php

    //Import "Product.php"
    require_once "Product.php";


    //Inheritance
    class Medicine extends Products{

        //Init a variables
        private $ProductDose;
        private $ProductType;
        private $ProductExpirationDate;

        //Create a algorithm (Function) when the Programmer wants to reuse this.
        //Setter and Getter
        function SetProductDose($PDose){
            $this->ProductDose = $PDose;
        }
        function SetProductType($PType){
            $this->ProductType = $PType;
        }
        function SetProductExpirationDate($PExpirationDate){
            $this->ProductExpirationDate = $PExpirationDate;
        }

        function GetProductDose(){
           return $this->ProductDose;
        }
        function GetProductType(){
           return $this->ProductType;
        }
        function GetProductExpirationDate(){
           return $this->ProductExpirationDate;
        }

        //This function will compute the SRP of the Product
        function GetSRP(){
            return $this->GetPrice() * 2;
        }
        

    } 



?>