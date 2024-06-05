<?php
class Product
{
    public $id;
    public $title;
    public $description;
    public $price;
    public $img;

    public function __construct($id, $title, $description, $price, $img)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->img = $img;
    }

    public static function fromArray($array)
    {
        return new self(
            $array['_id'] ?? null,
            $array['title'] ?? '',
            $array['description'] ?? '',
            $array['price'] ?? 0,
            $array['img'] ?? ''
        );
    }
}
