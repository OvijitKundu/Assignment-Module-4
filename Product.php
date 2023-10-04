<?php
class Product {

    
    // Add properties
    private int $id;
    private string $name;
    private float $price;
    
    
    public function __construct(int $id, string $name, float $price) {
        // Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    // Added getFormattedPrice method which returns the price of the product formatted as a string
    public function getFormattedPrice() : string{
        // Format the price with two decimal places
        return "$" . number_format($this->price, 2);
    }
    

    // Added showDetails method which prints the details of the product
    public function showDetails(){
        echo "Product Details:" . PHP_EOL;
        echo "- ID: {$this->id}" . PHP_EOL;
        echo "- Name: {$this->name}" . PHP_EOL;
        echo "- Price: {$this->getFormattedPrice()}" . PHP_EOL;
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();