import express from "express";
const router = express.Router();

//routes are be here
router.get("/", (req, res) => {
  res.send("hello word");
});

export default router;
