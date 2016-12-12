<?php
class Product
{
    protected $price;
    protected $discountRate = 0.03;

    public function getPrice()
    {
        echo "call";
        $price = $this->price - ($this->price * $this->discountRate);
        return $price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}

class FoodProduct extends Product
{
    private $expire = 15;

    public function getExpire()
    {
        return $this->expire;
    }

    public function decrementExpire()
    {
        $this->expire--;
        return $this->getExpire();
    }

    public function getPrice()
    {
        $price = parent::getPrice();

        if($this->expire <= 10){
            $price = $price / 2;
        }
        return $price;
    }
}


$prd = new FoodProduct();

$prd->setPrice(100);

$expire = $prd->getExpire();

while($expire > 0){
    echo '賞味期限:'.$expire . '日 価格：'.$prd->getPrice().'<br>';
    $expire = $prd->decrementExpire();
}


echo test;
