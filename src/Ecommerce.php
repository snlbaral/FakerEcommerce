<?php

namespace FakerEcommerce;

class Ecommerce extends \Faker\Provider\Base
{
    protected static $televisions = [
        'Samsung 65 Inch Curved QLED Ultra HD', 'Samsung 75″ Crystal UHD 4K Smart TV', 'LG 65" OLED 4K UHD Smart TV', 'LG 65" UHD 4K Smart LED TV', 'SONY Bravia 65” 4K UHD Led Smart TV', 'Panasonic 65" 4K UHD HDR Led TV', 'Toshiba Pro Theatre 4K Android Smart TV' 
    ];

    protected static $mobilePhones = [
        'Apple iPhone 12 mini', 'Samsung Galaxy S20 FE 5G', 'Alcatel Go Flip 3', 'Apple iPhone 12 Pro', 'Nokia 5.3', 'Motorola Moto G Power', 'Google Pixel 4a', 'OnePlus 8T', 'Samsung Galaxy S21', 'Samsung Galaxy S21 Ultra', 'iPhone 11', 'iPhone SE', 'Samsung Galaxy Fold'
    ];

    protected static $laptops = [
        'Alienware m15 R4', 'Apple MacBook Air', 'Asus ROG Zephyrus G14', 'Dell XPS 13', 'HP Spectre x360 14', 'Lenovo IdeaPad Flex 5 14', 'Lenovo ThinkPad X1 Carbon Gen 8', 'Razer Book 13', 'HP Spectre x360 15', 'Lenovo Chromebook Duet', 'Asus ZenBook 13', 'HP Envy x360 13 (2020)', 'Microsoft Surface Pro 7', 'Acer Swift 3', 'LG Gram 17'
    ];

    protected static $cameras = [
        'Fujifilm X-T4', 'Sony a7 III', 'Fujifilm X-T30', 'Sony a6400', 'Canon PowerShot G5 X Mark II', 'Canon PowerShot SX70 HS', 'Olympus Tough TG-6', 'Canon EOS R6', 'Canon PowerShot G9 X Mark II', 
    ];

    protected static $mensClothing = [
        "Levi's Men's 505 Regular Fit Jeans", "Men's Standard Full-Zip Hooded Fleece Sweatshirt", "Men's Waffle Shawl Robe", "Levi's Men's 550 Relaxed Fit Jeans", "Men's Heavyweight Hooded Puffer Coat", "Men's Fleece Crewneck Sweatshirt", "Men's Regular-fit Cotton Pique Polo Shirt", "Men's Straight-Fit Woven Pajama Pant", "Men's Regular-Fit Long-Sleeve Flannel Shirt", "Men's Quick-Dry Swim Trunk", "Men's Jogger"
    ];

    protected static $womensClothing = [
        "Women's Lightweight Long-Sleeve Full-Zip Water-Resistant Packable Hooded Puffer Jacket", "Pinzon Terry Bathrobe 100% Cotton", "Women's Studio Terry Relaxed-Fit Jogger Pant", "Women's Classic Fit Lightweight Long-Sleeve V-Neck Sweater", "Women's 2-Pack Slim-Fit Tank", "Women's Blake Long Blazer", "BTFBM Women Fashion Ruched Elegant Bodycon Long Sleeve Wrap Front Solid Color Casual Basic Fitted Short Dress", "Core 10 Women's Spectrum Yoga High Waist Full-Length Legging", "The Drop Women's Reversible Sherpa Jacket"
    ];

    protected static $jewelry = [
        "AGS Certified 14k White Gold Diamond with Screw Back and Post Stud Earrings", "Sterling Silver Pressed Flower Teardrop Earrings", "14k Yellow Gold-Filled Engraved Flowers Heart Locket", "Sterling Silver Filigree Hoop Earrings", "10k Diamond Pendant Necklace", "Sterling Silver Diamond Band Ring", "Platinum-Plated Sterling Silver Swarovski Zirconia Flower Halo Ring", "Plated Sterling Silver Filigree Ball Leverback Dangle Earrings", 
    ];

    protected static $watches = [
        "Breguet Double Tourbillon Rose Gold Watch", "Patek Philippe World Time Men's Watch", "Franck Muller Vanguard Mens Automatic 18K Rose Gold Skeleton Blue Face Blue Rubber Strap Watch", "Rolex Sky Dweller Sundust Dial 18kt Everose Gold Mens Watch", "IWC Men's Portuguese Minute Repeater Gold Watch", "Rolex Day-Date 40 President White Gold Watch"
    ];

    /**
     * A random Televisions.
     * @return string
     */
    public function televisions()
    {
        return static::randomElement(static::$televisions);
    }

    /**
     * A random Mobile Phone Name.
     * @return string
     */
    public function mobilePhones()
    {
        return static::randomElement(static::$mobilePhones);
    }

    /**
     * A random laptop Name.
     * @return string
     */
    public function laptops()
    {
        return static::randomElement(static::$laptops);
    }

    /**
     * A random camera Name.
     * @return string
     */
    public function cameras()
    {
        return static::randomElement(static::$cameras);
    }

    /**
     * A random mens clothing Name.
     * @return string
     */
    public function mensClothing()
    {
        return static::randomElement(static::$mensClothing);
    }

    /**
     * A random woment's clothing Name.
     * @return string
     */
    public function womensClothing()
    {
        return static::randomElement(static::$womensClothing);
    }

    /**
     * A random watches Name.
     * @return string
     */
    public function watches()
    {
        return static::randomElement(static::$watches);
    }

    /**
     * A random jewelry Name.
     * @return string
     */
    public function jewelry()
    {
        return static::randomElement(static::$jewelry);
    }
}