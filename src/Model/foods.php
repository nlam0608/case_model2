<?php

namespace Src\Model;

class foods
{
    private $id;
    private $name;
    private $price;
    private $ingredient;
    private $kind_of;
    private $image;


    public function __construct($id, $name, $price, $ingredient, $kind_of, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->ingredient = $ingredient;
        $this->kind_of = $kind_of;
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * @param mixed $ingredient
     */
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;
    }

    /**
     * @return mixed
     */
    public function getKindOf()
    {
        return $this->kind_of;
    }

    /**
     * @param mixed $kind_of
     */
    public function setKindOf($kind_of)
    {
        $this->kind_of = $kind_of;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


}