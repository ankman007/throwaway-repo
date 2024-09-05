import express from "express";
import { PORT, DB_URL } from "./config.js";
import mongoose from "mongoose";
import booksRoute from "./routes/bookRoutes.js";
import cors from "cors";  

const app = express();

// Middleware for parsing request body
app.use(express.json());

// Middleware for handling CORS POLICY
app.use(cors())

// Home page route
app.get("/", (request, response) => {
  console.log(request);
  return response.status(234).send("request successful");
});

// Using books route as middleware
app.use("/books", booksRoute);

mongoose
  .connect(DB_URL)
  .then(() => {
    console.log("DB connection successful");
    app.listen(PORT, () => {
      console.log(`Server is running in the port: ${PORT}`);
    });
  })
  .catch((error) => {
    console.log("Database connection failed. Error: ", error);
  });
