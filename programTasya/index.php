<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php

    $nama   ='Anastasya Febriana Syam';
    $jurusan='Informatika';
    $alamat ='Btn Hamzy';

        $counter = 1;

echo

'<table class="head-hover">'.
'<tr class="head-color">'.
    '<td class="head hoving-1">'. 'No' .'</td>'.
    '<td class="nama hoving-1">'. 'Nama' .'</td>'.
    '<td class="nama hoving-1">'. 'Jurusan' .'</td>'.
    '<td class="nama hoving-1">'. 'Alamat' .'</td>'.
'</tr>'.
'</table>';

 while($counter <= 10){

 echo 
   '<div>'.
     '<table border = 1>'.
     '<table class="tabel">'.
         '<tr>'.
         '<td class="no hoving-2">'. $counter .'</td>'.
         '<td class="nama hoving-2">'. $nama .'</td>'.
         '<td class="nama hoving-2">'. $jurusan .'</td>'.
         '<td class="nama hoving-2">'. $alamat .'</td>'.
     '</tr>'.
    '</table>'.
    '</div>';
 $counter++;
        }
        ?>
        </div>
</body>


</html>
