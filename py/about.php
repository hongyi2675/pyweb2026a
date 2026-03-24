<!DOCTYPE html>
<html lang="zh-TW">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>吳泓毅簡介</title>
     <style type="text/css">
          * { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
          h1 {color:blue; font-size:60px;}
          h2 {color:#33ff33; font-size:40px;}
     </style>
     <script>
          function change1() {
               document.getElementById("pic").src = "mountain.jpg";
               document.getElementById("h2text").innerText = "靜宜資管";
          }

          function change2() {
               document.getElementById("pic").src = "cliff.jpg";
               document.getElementById("h2text").innerText = "Hong-Yi Wu";
          }
     </script>
</head>
<body>
     <?php echo date("Y-m-d") ?>
     <table width="70%">
         <tr>
             <td>
                 <img src="cliff.jpg" width="110%" id="pic" onmouseover="change1()" onmouseout="change2()">
             </td>

             <td>
                 <h1>吳泓毅</h1>
                 <h2 id="h2text">Hong-Yi Wu</h2>
             </td>
         </tr>
     </table>

     <table width="70%" border="1">
          <tr>
               <td>
                    E-Mail: <a href="mailto:hongyi2675@gmail.com">hongyi2675@gmail.com</a><br>
                    IG: <a href="https://www.instagram.com/zaqajkdr_?igsh=OTJoNXg1ZnFjdmlh&utm_source=qr" target="_blank">zaqajkdr_</a><br>
               </td>

               <td>
                    大象席地而坐電影配樂<br>
                    <audio controls>
                         <source src="elephant.mp3" type="audio/mpeg">
                    </audio><br>
               </td>

               <td>
                    不要去臺灣<br>
                    <iframe width="300" height="200"
                         src="https://www.youtube.com/embed/pW88QFpHXa8"
                         frameborder="0"
                         allowfullscreen>
                    </iframe>
               </td>
          </tr>
     </table>

</body>
</html>