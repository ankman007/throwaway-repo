<!-- Suppose you are developing an online bookstore application in PHP. Create a class named Book with the following attributes: 
title, author, price, and quantity. Implement appropriate methods to set and get the values of these attributes.

Now, create an array of Book objects to represent a collection of books available in the bookstore. Use a loop to initialize the books 
with sample data.

Next, implement a method in the Book class named displayBookDetails that displays the details of a book, including its title, author, price, 
and quantity.

Finally, use a loop to iterate over the array of books and call the displayBookDetails method for each book to display their details.

Ensure that your program demonstrates the use of OOP principles, proper syntax, and various types of loops in PHP. -->

<?php

class Book {
    protected $title, $author, $price, $quantity;

    public function __construct($title="", $author="", $price=0, $quantity=0){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getValues(){
        return array($this->title, $this->author, $this->price, $this->quantity);
    }

    public function setValues(int $title, string $author, int $price, int $quantity){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function displayBookDetailsHTML(){
        return "<h3>Book Details</h3>" . 
            "Book title: " . $this->title . 
            "<br>Price: Rs. " . $this->price . 
            "<br>Author: " . $this->author . 
            "<br>Quantity: " . $this->quantity . " units";
    }
}

$books = [
    new Book("2 States", "Chetan Bhagat", 400, 6),
    new Book("Harry Potter", "J.K. Rowiling", 800, 20),
    new Book("Metamorphis", "Franz Kafka", 300, 3),
    new Book("Kite Runner", "Khalid Hussani", 600, 20)
];

foreach ($books as $book){
    echo $book->displayBookDetailsHTML();
}
?>
