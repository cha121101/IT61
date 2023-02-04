<?php

        require_once './Items/Medicine.php';
        require_once './Items/Product.php';
        require_once 'Cart.php';
        require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

        //Create a Variable where The Products That are in the cart is stored
        $medicine = [];    

        //Create a algorithm (Nested For lool) that loop all the elements that in the Cart
        foreach($data as $key => $value){
            $medicine[$key] = new Medicine;
            if(is_array($value)){
                foreach($value as $a => $b){
                    if(is_array($b)){
                        foreach($b as $c => $d){
                            if(is_array($d)){
                                foreach($d as $e => $f){
                                    if(is_array($f)){
                                        foreach($f as $g => $h){
                                            if(is_array($h)){
                                                foreach($h as $i => $j){
                                                    if(is_array($j)){
                                                        foreach($j as $k => $l){
                                                            if(is_array($l)){
                                                                //no other data here lol.
                                                            }else{
                                                                $medicine[$key]->SetProductExpirationDate($l);
                                                            }
                                                        }
                                                    }else{
                                                       $medicine[$key]->SetProductType($j);
                                                    }
                                                }
                                            }else{
                                               $medicine[$key]->SetProductDose($h);
                                            }
                                        }
                                    }else{
                                        $medicine[$key]->SetProductPrice($f);
                                    }
                                }
                            }else{
                                $medicine[$key]->SetProductDescription($d);
                            }
                        }
                    }else{
                        $medicine[$key]->SetProductName($b);   
                    }
                    
                }
            }else{
            }

        }

        //Create a command where all the data that stored in "$medicine will process and all the data will render"
        $cart = new Cart;
        $cart->AddCart($medicine[0]);
        $cart->AddCart($medicine[1]);
        $cart->Carts();
        $cart->GetTotalCost();
    ?>
</body>
</html>