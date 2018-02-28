<?php
include 'func.php';
/*
════════════════╗═══════════════╔═══════════════════
                ║Spam HOOQ  SMS ║
             ╔══╚═══════════════╝══╗
             ║  Creator By : Herry ║
             ╚═════════════════════╝
*/
$init = new Bom();
//Eksekusi Sms Boomber
$init->no = ""; //Nomer Hp. (contoh 81xxxxxxx)
$loop = ""; //Jumlah eksekusi
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
