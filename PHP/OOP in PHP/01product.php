<!-- Suppose you are tasked with creating a simple program to manage a list of products. Each product has a name, price, and quantity. 
You need to implement a PHP class called Product with appropriate properties, a constructor, and methods to retrieve and update information about the product.
Additionally, create a loop to demonstrate the functionality of your Product class by creating an array of products, 
initializing them, and then displaying the product information. Use a for loop to iterate over the array and display the product details. -->

<?php
    class Product{
        private $price, $quantity, $brand_name, $item_name;

        public function __construct($item_name, $price, $quantity, $brand_name){
            $this->item_name = $item_name;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->brand_name = $brand_name;
        }

        public function display_product(){
            echo "<h3>Product Description</h3>";
            echo "Item name: " . $this->item_name . "<br>Price: Rs." . $this->price . "<br>Quantity: " . $this->quantity . " units<br>Brand: " . $this->brand_name;
        }
    }

    $products = [
        new Product("Laptop", 200000, 2, "Acer"),
        new Product("Headphones", 5000, 1, "Sony"),
        new Product("Keyboard", 2000, 1, "LogiTech"),
        new Product("Watch", 10000, 4, "Casio")
    ];

    foreach ($products as $product){
        echo $product->display_product();
    }
?>
