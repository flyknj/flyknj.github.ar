<!DOCTYPE html>
<html>
  <head>
<meta charset="UTF-8">

 　　 <title>JAZZ | 商品一覧 | ATTICA RECORDS</title>
<link href="https://fonts.googleapis.com/css?family=Bitter:400,700&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <header>
  
<div class="itemslogo">
<img src="logo.png" alt="LP・SPレコード専門店 ATTICA RECORDS">
</div>
    </header>
  
    </head>
<body>
    
    <?php
  $record1 = new Item('Albert Ayler Quartet/<br>Copenhagen Live 1964',"7,190",'XATW-00143071.jpg');

$record2 = new Item('Archie Shepp/<br>Attica Blues',"3,670",'R-11052191-1510429606-3867.jpg');

$record3 = new Item('Kimiko Kasai/<br>Love Connection',"3,150",'R-8004228-1453306387-7055.jpg');

$record4 = new Item('Lee Morgan/<br>The Sidewinder',"2,480",'81dzoktM8sL._SY355_.jpg');
  
$record5 = new Item('Leon Thomas/Spirits Known And Unknown',"2,630",'XATW-00128151.jpg');
  
$record6 = new Item('Esther Phillips/Alone Again,Naturally',"3,330",'638.jpg');
  
$record7 = new Item('Wayne Shorter/<br>Native Dancer',"4,680",'41rvJxK0zML._SY355_.jpg');
  
$record8 = new Item('Carmen McRae/<br>The Complete 1946-1955',"3,240",'3149024224324_600.jpg');

$items = array($record1, $record2, $record3, $record4, $record5, $record6, $record7, $record8);
  
class Item {
  private $name;
  public $price;
  private $image;
  private $orderCount = 0;
  private static $count = 0;
  
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    self::$count++;
    
  }
  
  public function hello() {
    echo '商品の名前は'.$this->name.'です';
  }
  
  public function getName() {
    return $this->name;
  }
  public function getImage() {
    return $this->image;
  }
  public function getOrderCount() {
    return $this->orderCount;
  }
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  public static function getCount() {
    return self::$count;
  }
  
  
}
?>
                 <div class="item">
               <h1 class="recname">全<?php echo Item::getCount() ?>商品</h1>      
        <div class="itemlist1">
      <?php foreach ($items as $item): ?>
         <div class="item_rec">
  <img class="itemimage" src="<?php echo $item->getImage() ?>">
    <h2 class="itemname"><?php echo $item->getName() ?></h2>
      <p class="price">￥<?php echo $item->price ?>（税込）</p>
          </div>
                  <?php endforeach ?>
            
             </div>
                  
    </div>
   <footer>
          <ul class="footer-nav">
            <li><a href="">お支払い方法について ｜</a></li>
            <li><a href="">特定商取引法に基づく表記 ｜</a></li>
            <li><a href="">プライバシーポリシー ｜</a></li>
            <li><a href="contact.html">お問い合わせ ｜</a></li>
          </ul>
     
      <small>©2019 Attica Records.</small>
  </footer>
    </body>
</html>
