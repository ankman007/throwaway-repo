<!-- Question: Library Management System

Imagine you are tasked with developing a Library Management System in PHP. Create two classes: Book and Library.

Book Class:

The Book class should have the following attributes: title, author, price, quantity, and a unique ISBN (International Standard Book Number).
Implement appropriate methods to get and set the values of these attributes.
Implement a method named displayBookDetails to display the details of a book, including its title, author, price, quantity, and ISBN.
Library Class:

The Library class should have an array to store instances of Book.
Implement methods to add a book to the library, remove a book from the library, and display all books in the library.
Implement a method named calculateTotalValue that calculates and returns the total value of all books in the library (sum of price * quantity).
Usage:

Create an instance of the Library class.
Add at least three instances of Book to the library with different details.
Remove one book from the library.
Display all the books in the library.
Calculate and display the total value of all books in the library.
Ensure that your program demonstrates encapsulation, proper use of class properties and methods, and showcases your understanding of OOP principles in PHP. -->

<?php

class Book {

    private $title, $author, $price, $quantity, $isbn_number;

    public function __construct($title = "", $author = "", $price = 0, $quantity = 0, $isbn_number = null){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->isbn_number = $isbn_number;
    }

    public function getBookDetails(): array{
        return array($this->title, $this->author, $this->price, $this->quantity, $this->isbn_number);
    }

    public function setBookDetails(string $title, string $author, int $price, int $quantity, int $isbn_number){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->isbn_number = $isbn_number;
    }

    public function displayBookDetailsHTML(){
        return "<h3>Book Details</h3>".
        "Book title: " . $this->title . 
        "<br>Price: Rs. " . $this->price . 
        "<br>Author: " . $this->author . 
        "<br>Quantity: " . $this->quantity . " units".
        "<br>ISBN Number: " . $this->isbn_number;
    }
}

class Library {
    public $bookArray = [];
    
    public function addBook($bookToBeAdded){
        $this->bookArray[] = $bookToBeAdded;
    }

    public function removeBook(){
        // array_filter($this->bookArray, function ($value) use ($bookToBeRemoved){
        //     return $value != $bookToBeRemoved;
        // });
        if (empty($this->bookArray))
            return;
        else
            array_pop($this->bookArray);
    }

    public function displayBooks(){
        $bookDisplayArray = [];
        foreach ($this->bookArray as $book)
            $bookDisplayArray[] = $book->displayBookDetailsHTML();

        return $bookDisplayArray;
    }

    public function calculateTotalValue(){
        $totalValue = 0;
        foreach ($this->bookArray as $book){
            $price = $book->getBookDetails()[2];
            $quantity = $book->getBookDetails()[3];
            $totalValue += $price * $quantity;
        }
        return $totalValue;
    }

}

$bookManger = new Library();

$bookManger->addBook(new Book("2 States", "Chetan Bhagat", 400, 6, 007));
$bookManger->addBook(new Book("Harry Potter", "J.K. Rowiling", 800, 20, 89));
$bookManger->addBook(new Book("Metamorphis", "Franz Kafka", 300, 3, 899));
$bookManger->addBook(new Book("Kite Runner", "Khalid Hussani", 600, 20, 78));

$bookManger->removeBook();

echo "Total amount of the books is Rs. " . $bookManger->calculateTotalValue();

foreach ($bookManger->displayBooks() as $value){
    echo $value;
}



?>
