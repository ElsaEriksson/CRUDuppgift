import express, { Request, Response } from "express";
import { productModel } from "../models/Product";

export const productsRouter = express.Router();

productsRouter.get("/", async (req: Request, res: Response) => {
  // http://localhost:3000/movies

  // Skicka tillbaka hela listan med objekt
  const products = await productModel.find();
  res.status(200).json(products);
});
