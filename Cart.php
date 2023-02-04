<?php

    //Import the two (2) Files from the "items" Folder
    require_once "./Items/Medicine.php";
    require_once "./Items/Product.php";

    // Create a Class and Inherit the file from the Medicice
    class Cart extends Medicine{
        //Create a Variable that sets all the Products
        private $CartProducts = array();
        
        //this Function show all the products that are in cart
        function Carts(){
            
            //Create a variable for rendering all the Products that are in the cart
            $SetCartProducts = $this->CartProducts;

            //Create a loop that render all the Products that are in the Cart
            foreach($SetCartProducts as $key => $value){
                echo
                '<ul>
                    <li>Name: ' . $value->GetProductName() . '</li>
                    <li>Description: ' . $value->GetProductDescription() . '</li>
                    <li>Price: ₱ ' . number_format($value->GetProductPrice(), 1 ). '</li>
                    <li>Dose: ' . $value->GetProductDose() . ' mg.</li>
                    <li>Type: ' . $value->GetProductType() . '</li>
                    <li>Exp Date: ' . $value->GetProductExpirationDate() . '</li>
                    <li>SRP: ' . number_format($value->GetSRP(), 2) . '</li>
                </ul>
                <hr>';
            }
        }
        //Add the product in the cart
        function AddCart($AddProduct){
            $this->CartProducts[] = $AddProduct;
        }

        //Get all the Cost that are in the Cart
        function GetTotalCost(){
            $TotalCost = 0;
            //Create a Loop to add all the price that are in the Cart
            foreach($this->CartProducts as $key => $value){
                $TotalCost += $value->GetSRP();
            }
            echo '<b>Total Cart Amount: </b> ₱' . number_format($TotalCost,2);
        
        }


    }


?>