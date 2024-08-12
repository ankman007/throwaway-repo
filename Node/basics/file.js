const fs = require("fs");

const os = require("os");
console.log(os.cpus().length);

// Sync write
// fs.writeFileSync("./text.txt", "Hi there");

// Async write
// fs.writeFile("./test.txt", "Hello World Async", (err) => {})


// Sync read
// const res = fs.readFileSync("./test.txt", "utf-8");
// console.log(res);

// Async read
// fs.readFile("./test.txt", "utf-8", (error, data) => {
//     if (error){
//         console.log("there was error with the reading file operation: ", error);
//     }
//     else {
//         console.log("Here is the contents of the file: ", data);
//     }
// })


// Sync append
// fs.appendFileSync("./test.txt", `\n${Date.now()} Hey there`);


// Copy
// fs.cpSync("./test.txt", "./copy.txt");


// Delete
// fs.unlinkSync("./copy.txt");


// Status
// const stats = fs.statSync("./test.txt");
// console.log(stats);