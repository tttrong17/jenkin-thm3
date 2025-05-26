<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Đồ Ăn Vặt</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fff8f0;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #ff6f61;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      padding: 20px;
      justify-content: center;
    }

    .item {
      background: white;
      width: 250px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;
      overflow: hidden;
    }

    .item img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .item h3 {
      margin: 10px 0 5px;
    }

    .item p {
      margin: 0 10px 10px;
    }

    .price {
      color: #e67e22;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <header>
    <h1>Danh Sách Đồ Ăn Vặt</h1>
  </header>

  <div class="container">
    <?php
      $foods = [
        [
          'name' => 'Bánh Tráng Trộn',
          'desc' => 'Bánh tráng, khô bò, trứng cút, xoài, rau răm...',
          'price' => '20.000đ',
          'img' => 'https://i.imgur.com/o8QfHRF.jpg'
        ],
        [
          'name' => 'Xoài Lắc Muối Ớt',
          'desc' => 'Xoài chua, ngọt, cay hấp dẫn.',
          'price' => '15.000đ',
          'img' => 'https://i.imgur.com/3ZCqD3Z.jpg'
        ],
        [
          'name' => 'Khô Gà Lá Chanh',
          'desc' => 'Gà xé cay, thơm lá chanh.',
          'price' => '35.000đ',
          'img' => 'https://i.imgur.com/Cyo7Jmc.jpg'
        ],
        [
          'name' => 'Chân Gà Sả Tắc',
          'desc' => 'Ngâm chua ngọt, giòn ngon.',
          'price' => '40.000đ',
          'img' => 'https://i.imgur.com/FMIbwZk.jpg'
        ]
      ];

      foreach ($foods as $food) {
        echo "<div class='item'>";
        echo "<img src='{$food['img']}' alt='{$food['name']}'>";
        echo "<h3>{$food['name']}</h3>";
        echo "<p>{$food['desc']}</p>";
        echo "<p class='price'>{$food['price']}</p>";
        echo "</div>";
      }
    ?>
  </div>
</body>
</html>
