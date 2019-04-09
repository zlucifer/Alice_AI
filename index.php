<title>Alice</title>

<?php
error_reporting(0);
/*
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
////                       _            _  __                              ////
////                      | |          (_)/ _|                             ////
////                   ___| |_   _  ___ _| |_ ___ _ __                     ////
////                  |_  / | | | |/ __| |  _/ _ \ '__|                    ////
////                   / /| | |_| | (__| | ||  __/ |                       ////
////                  /___|_|\__,_|\___|_|_| \___|_|                       ////
////                                                                       ////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
*/
if(isset($_GET['input']) && isset($_GET['api'])){
  //API
  $input = trim($_GET['input']);
  $input = str_replace('_',' ',$input);
  ///////////////////////////////////////////////////////////////////////////////
  $kecilin = strtolower($input); // huruf input jadi kecil semua
  $filter = str_replace('?',' ?',$kecilin);
  $filter = str_replace('!',' !',$filter);
  $filter = str_replace(' ','|',$filter); // ubah spasi jadi |
  $filter = str_replace('%20','|',$filter); // ubah spasi jadi
  $kata = explode('|', $filter); // memecah kata
  $banyak = count($kata);
  ///////////////////////////////////////////////////////////////////////////////
  //kamus
  include("kamus.php");
  ///////////////////////////////////////////////////////////////////////////////
  // bot jawab
  echo '{"jawab":"'.$bot_jawab.'"}';
}else if($_GET['input']){
    echo '<form method="get" action="./index.php?input=">
    Input<br>
    <input type="text" name="input" autocomplete="off"><br>
    <button type="submit">Input</button>
      </form>';
    echo $_GET['input'].'<hr>';
    $input = trim($_GET['input']);
    $input = str_replace('_',' ',$input);
    ///////////////////////////////////////////////////////////////////////////////
    $kecilin = strtolower($input); // huruf input jadi kecil semua
    $filter = str_replace('?',' ?',$kecilin);
    $filter = str_replace('!',' !',$filter);
    $filter = str_replace(' ','|',$filter); // ubah spasi jadi |
    $filter = str_replace('%20','|',$filter); // ubah spasi jadi
    $kata = explode('|', $filter); // memecah kata
    $banyak = count($kata);
    ///////////////////////////////////////////////////////////////////////////////
    //kamus
    include("kamus.php");
    ///////////////////////////////////////////////////////////////////////////////
    // bot jawab
    echo $bot_jawab;
}else{
  echo '<form method="get" action="./index.php?input=">
  Input<br>
  <input type="text" name="input" autocomplete="off"><br>
  <button type="submit">Input</button>
    </form>';
}

?>
