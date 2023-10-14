<?php

$dsn = "mysql:host=localhost;dbname=xtdtuuht_m4;charset=UTF8";
$pdo = new PDO($dsn, 'xtdtuuht', 'uK7SkJ');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class ShopProduct{
    public function __construct(private string $title, private string $producerFirstName, private string $producerMainName, private float $price){
    }

    public function getSProductTitle():string{
        return $this->title;
    }
    public function getSProductProducerFirstName():string{
        return $this->producerFirstName;
    }
    public function getSProductProducerMainName():string{
        return $this->producerMainName;
    }
    public function getSProductPrice():float{
        return $this->price;
    }

    public function setProductTitle(float $title):void{
        $this->title = $title;
    }

    public function setProductPrice(float $price):void{
        $this->price = $price;
    }

    public function setProductProducerFirstName(string $producerFirstName):void{
        $this->producerFirstName = $producerFirstName;
    }

    public function setProductProducerMainName(string $producerMainName):void{
        $this->producerMainName = $producerMainName;
    }

    public function actionCreate(PDO $pdo): void
    {
        $stmt = $pdo->prepare("INSERT INTO ShopProduct(title, producerFirstName, producerMainName, price) VALUES (?, ?, ?, ?)");
        $stmt->execute([$this->title, $this->producerFirstName, $this->producerMainName, $this->price]);
    }
}

class CDProduct extends ShopProduct{
    public function __construct(string $title, string $producerFirstName, string $producerMainName, float $price, private float $playLenght = 0){
        parent::__construct($title, $producerFirstName, $producerMainName, $price);
    }

    public function getCDProduct():float{
        return $this->playLenght;
    }

    public function setCDProduct(float $playLenght):void{
        $this->playLenght = $playLenght;
    }
    public function actionCreate(PDO $pdo): void
    {
        parent::actionCreate($pdo);
        $stmt = $pdo->query("SELECT id FROM ShopProduct ORDER BY id DESC");
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = $pdo->prepare("INSERT INTO CDProduct(cdProduct_id, playLenght) VALUES (?, ?)");
        $stmt->execute([$product['id'], $this->playLenght]);
    }

}

class BookProduct extends ShopProduct{
    public function __construct(string $title, string $producerFirstName, string $producerMainName, float $price, private int $pages = 0){
        parent::__construct($title, $producerFirstName, $producerMainName, $price);
    }
    public function getBookProduct():int{
        return $this->pages;
    }

    public function setBookProduct(int $pages):void{
        $this->pages = $pages;
    }

    public function actionCreate(PDO $pdo): void
    {
        parent::actionCreate($pdo);
        $stmt = $pdo->query("SELECT id FROM ShopProduct ORDER BY id DESC");
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = $pdo->prepare("INSERT INTO BookProduct(bookProduct_id, pages) VALUES (?, ?)");
        $stmt->execute([$product['id'], $this->pages]);
    }
}

class ShopProductWriter{
    public function writeCDProduct(CDProduct $cdProduct):void{
        $str = "{$cdProduct->getSProductTitle()}: {$cdProduct->getSProductProducerFirstName()} {$cdProduct->getSProductProducerMainName()}, {$cdProduct->getSProductPrice()}, {$cdProduct->getCDProduct()}";
        print $str;
    }

    public function writeBookProduct(BookProduct $bookProduct):void{
        $str = "{$bookProduct->getSProductTitle()}: {$bookProduct->getSProductProducerFirstName()} {$bookProduct->getSProductProducerMainName()}, {$bookProduct->getSProductPrice()}, {$bookProduct->getBookProduct()}";
        print $str;
    }
}

$product1 = new CDProduct("Алиса в стране чудес", "Тим", "Бёртон", 2600, 1.4);
$product2 = new BookProduct("Белоснежка", "Якоб", "Гримм", 5200, 265);

$writer = new ShopProductWriter;
$writer -> writeCDProduct($product1);
print("<br>");
$writer -> writeBookProduct($product2);

$product1->actionCreate($pdo);
$product2->actionCreate($pdo);


