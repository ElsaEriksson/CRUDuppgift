import cors from "cors";
import express, { json } from "express";
import dotenv from "dotenv";
import mongoose from "mongoose";
import { productsRouter } from "../routes/products";

dotenv.config();
const PORT = process.env.PORT;

const app = express();

app.use(
  cors({
    origin: "https://cru-duppgift.vercel.app/",
    methods: "*",
  })
);

app.use(json());

const url = process.env.MONGO_URL;
if (!url) process.exit(1);

mongoose.connect(url);

const database = mongoose.connection;

database.on("error", (error) => {
  console.log(error);
});

database.on("connected", () => {
  console.log("Connected to the database, we are alive and up and running!");
});

app.get("/", (req, res) => {
  res.send("Hello World");
});

app.use("/products", productsRouter);

app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
