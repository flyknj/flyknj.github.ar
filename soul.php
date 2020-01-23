<!DOCTYPE html>
<html>
  <head>
<meta charset="UTF-8">

 　　 <title>SOUL | 商品一覧 | ATTICA RECORDS</title>
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
  $record1 = new Item('PLATINUM 900 /<br> Free(at last)',"7,678",'3132GSZNJDL.jpg');

$record2 = new Item('キャロル・ベイヤー・セイガー<br>/私自身',"2,178",'97403.jpg');

$record3 = new Item('CHOCOLATE LIPS / CHOCOLATE LIPS',"5,280",'51Lty9SmISL._SX355_.jpg');

$record4 = new Item('Billy Ocean /<br> Suddenly',"4,980",'41E5ENQBQSL.jpg');
  
$record5 = new Item('Andy Allo /<br>Hello',"1,270",'51PvIJo5SrL._AC_SY355_.jpg');
  
$record6 = new Item('Michael Wycoff/<br>Love Conquers All',"4,330",'51mWa14-WFL._SX466_.jpg');
  
$record7 = new Item('Patrice Rushen/<br>Pizzazz',"1,780",'51vtZ7frKSL.jpg');
  
$record8 = new Item('Delegation/<br>Eau De Vie',"3,450",'118942663.jpg');
  
$record9 = new Item('Will Downing/<br>Soul Survivor',"2,130",'1007492056.jpg');
  
$record10 = new Item('Erykah Badu/<br>Worldwide Underground',"2,300",'R-214916-1437272036-7059.jpeg.jpg');
  
$record11 = new Item('Zoom/Saturday, Saturday Night',"5,610",'510hgNjOE7L._SX425_.jpg');
  
$record12 = new Item('Marva King/<br>Feels Right',"3,200",'3489fbf6.jpg');

$items = array($record1, $record2, $record3, $record4, $record5, $record6, $record7, $record8, $record9, $record10, $record11, $record12);
  
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
