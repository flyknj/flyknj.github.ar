<!DOCTYPE html>
<html>
  <head>
<meta charset="UTF-8">
 　　 <title>AOR | 商品一覧 | ATTICA RECORDS</title>
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
  $record1 = new Item('Mick Jackson /<br> Step Inside My Rainbow',"8,590",'55913f1d.jpg');

$record2 = new Item('Dave Raynor<br>/Rain or Shine',"4,140",'71h6Kt0FfQL._SS500_.jpg');

$record3 = new Item('James Vincent / Enter In',"5,280",'R-5356211-1391356234-5426.jpeg.jpg');

$record4 = new Item('Archie James Cavanaugh / Black and White Raven',"3,980",'41YXJ78354L.jpg');
  
$record5 = new Item('Brian Elliot /<br>Brian Elliot',"3,200",'81d0h21p3jL__SS500_.jpg');
  
$record6 = new Item('Dalton & Dubarri<br>/Choice',"6,110",'3836.jpg');
  
$record7 = new Item('Jerry Corbetta<br>/Jerry Corbetta',"1,680",'wpcr000017471_LLL.jpg');
  
$record8 = new Item('Michael Franks<br>/The Art Of Tea',"2,240",'81OnGc10aKL._AC_SL1425_.jpg');

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
