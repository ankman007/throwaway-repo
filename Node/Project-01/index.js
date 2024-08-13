const express = require("express");
const fs = require("fs");
let users = require("./users.json");

const app = express();
const PORT = 5000;

// MIDDLEWARES
app.use(express.urlencoded({ extended: false }));
app.use(express.json());

app.use((req, res, next) => {
  fs.appendFile(
    "log.txt",
    `
        \n${Date.now()} | ${req.method} | ${req.ip} | ${
      req.path
    } | New request received`,
    (err, data) => {
      next();
    }
  );
});

// ROUTES
app.route("/users").get((req, res) => {
  const html = `
    <table border="1" style="width: 100%; border-collapse: collapse; text-align: left;">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Job Title</th>
        </tr>
        ${users
          .map(
            (user) => `
        <tr>
            <td>${user.first_name}</td>
            <td>${user.last_name}</td>
            <td>${user.email}</td>
            <td>${user.gender}</td>
            <td>${user.job_title}</td>
        </tr>
        `
          )
          .join("")}
    </table>
    `;
  return res.send(html);
});

app
  .route("/api/user/:id")
  .get((req, res) => {
    const id = Number(req.params.id);
    const user = users.find((user) => user.id === id);
    if (!user) return res.status(404).json({ message: "No such user exits." });
    return res.json(user);
  })
  .patch((req, res) => {
    const id = Number(req.params.id);
    const body = req.body;
    const index = users.findIndex((user) => user.id == id);
    users[index] = { id: index + 1, ...body };
    console.log(index, body);

    fs.writeFile("./users.json", JSON.stringify(users), (err, data) => {
      return res.json({ status: "Data edited.", data: body });
    });
  })
  .delete((req, res) => {
    const id = Number(req.params.id);
    users = users.filter((user) => user.id !== id);

    fs.writeFile("./users.json", JSON.stringify(users), (err, data) => {
      return res.json({ status: "Data deleted." });
    });
  });

app
  .route("/api/users")
  .get((req, res) => {
    return res.json(users);
  })
  .post((req, res) => {
    const body = req.body;

    if (
      !body ||
      !body.first_name ||
      !body.last_name ||
      !body.email ||
      !body.gender ||
      !body.job_title
    ) {
      return res.status(400).json({ message: "All fields are required" });
    }
    users.push({ id: users.length + 1, ...body });

    fs.writeFile("./users.json", JSON.stringify(users), (err, data) => {
      return res.json({ status: "Data added.", data: body });
    });
  });

app.listen(PORT, () => console.log(`Server started at the port: ${PORT}`));
