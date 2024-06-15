import express, { Request, Response } from "express";
import { productModel } from "../models/Product";

export const productsRouter = express.Router();

productsRouter.get("/", async (req: Request, res: Response) => {
  const products = await productModel.find();
  res.status(200).json(products);
});

productsRouter.post("/", async (req: Request, res: Response) => {
  const title = req.body.title;
  const description = req.body.description;
  const price = req.body.price;
  const img = req.body.img;
  console.log("Handling POST request", title, description, price, img);

  const newProduct = new productModel({
    title: title,
    description: description,
    price: price,
    img: img,
  });

  try {
    const savedProduct = await newProduct.save();
    res.status(201).json({
      success: true,
      product: savedProduct,
    });
  } catch (error) {
    res
      .status(400)
      .json({
        success: false,
        message: "An error occurred.",
        error: (error as any).message,
      });
  }
});

productsRouter.put("/:id", async (req: Request, res: Response) => {
  try {
    await productModel.findByIdAndUpdate(req.params.id, {
      title: req.body.title,
      description: req.body.description,
      price: req.body.price,
    });

    const product = await productModel.findById(req.params.id);

    res.status(200).json({
      success: true,
      product: product,
    });
  } catch (error) {
    res.status(400).json({
      success: false,
      message: "An error occurred.",
      error: (error as any).message,
    });
  }
});

productsRouter.delete("/:id", async (req: Request, res: Response) => {
  try {
    await productModel.findByIdAndDelete(req.params.id);
    res.status(200).json();
  } catch (error) {
    res.status(400).json(error);
  }
});
