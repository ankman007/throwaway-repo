const express = require("express");

const app = express();
const port = 5000;

app.get("/", (req, res) => {
    return res.send('Hello HomePage');
})
app.get("/about", (req, res) => {
    return res.send(`Hello ${req.query.name}!!`);
})

app.listen(port, () => console.log(`Server started in the port ${port}.`));
