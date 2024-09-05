import express from "express";
import { Book } from "../models/booksModel.js";

const router = express.Router();

// Route for adding a new Book
router.post("/", async (request, response) => {
  try {
    console.log(request.body);
    if (
      !request.body.title ||
      !request.body.author ||
      !request.body.publishYear
    ) {
      return response.status(400).send({
        message: `Send all required fields: title, author and publish year.`,
      });
    }
    const newBook = {
      title: request.body.title,
      author: request.body.author,
      publishYear: request.body.publishYear,
    };
    const book = await Book.create(newBook);
    return response.status(201).send(book);
  } catch (err) {
    console.log(err.message);
    response.status(500).send({ message: err.message });
  }
});

// Get all books from the database
router.get("/", async (request, response) => {
  try {
    const books = await Book.find({});
    return response.status(200).json({
      count: books.length,
      data: books,
    });
  } catch (error) {
    response.status(500).send({
      message: `Encountered error when fetching the books. ${error.message}`,
    });
  }
});

// Get a book by its ID
router.get("/:id", async (request, response) => {
  try {
    const bookId = request.params.id;
    const book = await Book.findById(bookId);
    console.log(book);
    return response.status(200).json({
      data: book,
    });
  } catch (error) {
    response.status(500).send({
      message: `Encountered error when fetching the book by Id. ${error.message}`,
    });
  }
});

// Delete a book by its ID
router.delete("/:id", async (request, response) => {
  try {
    const bookId = request.params.id;
    const book = await Book.findByIdAndDelete(bookId);
    return response.status(200).json({
      message: `Book deleted from database.`,
    });
  } catch (error) {
    response.status(500).send({
      message: `Encountered error when fetching the book by Id. ${error.message}`,
    });
  }
});

// Edit a book's records by ID
router.put("/:id", async (request, response) => {
  try {
    const bookId = request.params.id;
    const updatedData = request.body;
    const updatedBook = await Book.findByIdAndUpdate(bookId, updatedData, {
      new: true,
      runValidators: true,
    });
    if (!updatedBook) {
      return res.status(404).json({ message: "Book not found" });
    }
    console.log("updatedBook", updatedBook);
    response
      .status(200)
      .json({ message: "Book updated successfully", updatedBook });
  } catch (error) {
    console.error(`Error updating book: ${error.message}`);
    response.status(500).json({ message: "Internal Server Error" });
  }
});

export default router;
