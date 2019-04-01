<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    table {
width:70%;
}
table, th, td {
border: 1px solid black;
border-collapse: collapse;
}
th, td {
padding: 15px;
text-align: left;
}
table#t01 tr:nth-child(even) {
background-color: #eee;
}
table#t01 tr:nth-child(odd) {
background-color: #fff;
}
table#t01 th {
background-color: black;
color: white;
}
    </style>
    <meta charset="utf-8">
    <title>Müşteri Listesi</title>
    <script src="https://code.jquery.com/jquery-3.2.1.js"> </script>
  </head>
  <body>
    <table id="t01">
  <tr>
    <th>Müşteri Adı</th>
    <th>Müşteri Soyadı</th>
    <th>Müşteri e-mail</th>
    <th>Telefon Numarası</th>
    <th>Şehir / Adres</th>
    <th>Cinsiyet</th>
  </tr>
  <tr class="hasan">
    <td>Hasan</td>
    <td>mayok</td>
    <td>hasnmyk47@gmail.com</td>
    <td>0546201657</td>
    <td>Erzincan / mamak 454 sk no 7</td>
    <td>Erkek</td>
    <td><button type="button" id="1">Sil</button></td>

  </tr>
  <tr class="recep">
    <td>Recep</td>
    <td>Erca</td>
    <td>ercareco56@gmail.com</td>
    <td>0535012597</td>
    <td>İstanbul /Beşiktaş 2448sk no 47</td>
    <td>Erkek</td>
    <td><button type="button" id="2">Sil</button></td>
  </tr>
  <tr class="tanser">
    <td>Tanser</td>
    <td>Sansa</td>
    <td>tanserbey355@gmail.com</td>
    <td>057436945</td>
    <td>İzmir / Bornova 4557 sk no 94</td>
    <td>Erkek</td>
    <td><button type="button" id="3">Sil</button></td>
  </tr>
  <tr class="bulut">
    <td>Bulut</td>
    <td>Kaya</td>
    <td>kayabulut1@gmail.com</td>
    <td>0521364017</td>
    <td>Ankra / Bandırma 5775sk no 75</td>
    <td>Erkek</td>
    <td><button type="button" id="4">Sil</button></td>
  </tr>
  <tr class="cemre">
    <td>Cemre</td>
    <td>Gencer</td>
    <td>gencersqs79@gmail.com</td>
    <td>0597043212</td>
    <td>Edirne / bolukapısı 5455sk no 45</td>
    <td>Kadın</td>
    <td><button type="button" id="5">Sil</button></td>
  </tr>
  <tr class="hakan">
    <td>Hakan</td>
    <td>Daldan</td>
    <td>dalanhakan@gmail.com</td>
    <td>0567554510</td>
    <td>Bursa / yeniçay 5487sk no 54</td>
    <td>Erkek</td>
    <td><button type="button" id="6">Sil</button></td>
  </tr>
</table>
<script type="text/javascript">
  $('#1').click(function(){
    $('.hasan').remove();
  });
  $('#2').click(function(){
    $('.recep').remove();
  });
  $('#3').click(function(){
    $('.tanser').remove();
  });
  $('#4').click(function(){
    $('.bulut').remove();
  });
  $('#5').click(function(){
    $('.cemre').remove();
  });
  $('#6').click(function(){
    $('.hakan').remove();
  });


</script>
  </body>
</html>
