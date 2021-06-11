//required modul or NPM
import express from "express";
import bodyParser from "body-parser";
import userRoutes from "./routes/users.js";

//nitialize app as express fuction
const app = express();
// this is our port no
const PORT = 5000;

// middelware will be here
app.use(bodyParser.json());
// routes middelware
app.use("/users", userRoutes);

// Testing
// app.get("/", (req, res) => {
//   console.log("hello word");
//   res.send("hello word");
// });

// listening to server on port
app.listen(PORT, () => {
  console.log(`server runing on ${PORT}`);
});
