const express = require("express");
const app = express();

const port = 5000;

app.get("/", (req, res) => {
  //   res.send("Hello World!!!");
  res.status(200).send("Hello World!!!");
});

app.listen(port, () => {
  //   document.write(`Server is running on port ${port}`);
  console.log(`Server is running on port ${port}`);
});
