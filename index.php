<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.2.1.js"> </script>
<style>

body{
  margin:0;
  padding:0
}
#message-box{
  background-color:green;
  text-align: center;
  color:white;
}
#header{
  cursor:pointer;
  height:25px;
  padding:10px;
  border-bottom:1px solid #fff;
  font-size: 25px;
}
#content{
  height:200px;
  padding:10px;
  font-size: 20px;
  display:none;
  background-color: #676a6a;
}
hr{
 width: 245px;
}
a{
  text-decoration: none;
  color:white;
}

</style>

  </head>
  <body>

<div id="message-box">
 <div id="header">
   Katagoriler
 </div>
<div id="content">
 <label class="1"><a href="liste.php">Müşteri Listesi</a></label><br/><hr>
 <label class="2"><a href="teklif.php">Müşteri Teklifleri</a></label><br/><hr>
 <label class="3"><a href="eklesil.php">Müşteri Ekleme / Silme</a></label>


  </div>


</div>




<script type="text/javascript">
  $(function(){
    $("#header").click(function(){
       $("#content").toggle("slow");

    });
  });


</script>






</body>

</html>
