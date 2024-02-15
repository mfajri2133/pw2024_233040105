<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Pertemuan 6 - Latihan 1</title>
     <style>
          .main {
               display: grid;
               grid-template-columns: repeat(3, 100px);
          }

          .square1 {
               width: 100px;
               height: 100px;
               text-align: center;
               line-height: 100px;
               border: 1px solid black;
               color: white;
               grid-area: 1 / 1;
               background-color: rosybrown;
          }

          .square2 {
               width: 100px;
               height: 100px;
               text-align: center;
               line-height: 100px;
               border: 1px solid black;
               color: black;
               grid-area: 2 / span 1;
               background-color: royalblue;
          }

          .square3 {
               width: 100px;
               height: 100px;
               text-align: center;
               line-height: 100px;
               border: 1px solid black;
               color: white;
               grid-area: 3 / span 1;
               background-color: seagreen;
          }
     </style>
</head>

<body>
     <div class="main">
          <div class="square1">1</div>
          <div class="square2">2</div>
          <div class="square2">2</div>
          <div class="square3">3</div>
          <div class="square3">3</div>
          <div class="square3">3</div>
     </div>
</body>

</html>