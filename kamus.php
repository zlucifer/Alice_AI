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
// contoh kamus bot
// silahkan di custom sendiri :)
*/
$bads = array("motherfucker","fucker","pelacur","sempak","anjeng","pentil","colmek","mia khalifa","gblk","bego","colly","kampang","eek","bacod","bacot","bacok","memek","waria","ewe","kamvret","ndasmu","kampret","bodoh","sex","fck","coli","nekopoi","sue","pekok","goblok","wtf","pler","anjing","babi","lotnok","fuck","najis","mati","gila","pukimak","tai","taik","bangsat","kontol","ngentot","tod","tolol","goblok","asu","njeng");
$sapa = array("woy","halo","hai","hi","hy");
$modus = array("ayo","gemes","cantik","sorry","maaf","jalan","love","cubit","sange","ayuk","sehat","makan","ngapain","tinggal","sayang","beb","pasangan","genit","yuk","modus","say","bebi","cium","tidur");
$ngatain = array("yasudah","mantan","judes","nembak","wkwk","serah","kesel","galau","jones","jomblo","pacar");
$ngeles = array("engga","tidak","ga","gak");
///////////////////////////////////////////////////////////////////////////////
$bot_care = array("nampol","aduh","duh","kasian","cacad");
///////////////////////////////////////////////////////////////////////////////
$zlucifer = array("zlucifer","admin");
$tanya_siapa = array("nama","siapa");
$diri = array("aku","ku","aq","gue","gua","gw");
$bots = array("alice","kamu","bot");
///////////////////////////////////////////////////////////////////////////////
$pengertian = array("pengertian","apa","itu","arti","adalah");
$teknik = array("cara","bagaimana","gimana","metode");
$menjadi = array("menjadi","jadi");
///////////////////////////////////////////////////////////////////////////////
$hacker = array("hacker");
$hack = array("hack");
$hacking = array("hacking");
$hacked = array("hacked");
///////////////////////////////////////////////////////////////////////////////
$carding = array("carding");
$carder = array("carder");
///////////////////////////////////////////////////////////////////////////////
$deface = array("deface");
$defacer = array("defacer");
///////////////////////////////////////////////////////////////////////////////
$crack = array("crack");
$cracker = array("cracker");
///////////////////////////////////////////////////////////////////////////////
$bruteforce = array("bruteforce","brute");
$wordlist = array("wordlist","word list");
$phising = array("phising");
$ddos = array("ddos","dos");
$malware = array("malware");
///////////////////////////////////////////////////////////////////////////////
$propaganda = array("propaganda");
$tor_browser = array("tor","tor browser");
$vpn = array("vpn","virtual private network");
$deep_web = array("deepweb","deep web","darknet","dark net");
$nmap = array("nmap");
///////////////////////////////////////////////////////////////////////////////
$membuat = array("membuat","buat");
$script = array("script","sc");

///////////////////////////////////////////////////////////////////////////////
$termux = array("termux");
$termux_insta = array("insta");
$termux_call = array("call","telp");
///////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////
$hack_sosmed = array("instagram","ig","facebook","fb","twitter");
$hack_whatapp = array("wa","whatsapp","whats app");
///////////////////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////////////
for ($i=0; $i < $banyak; $i++) {
        //echo $kata[$i].'<br>';
///////////////////////////////////////////////////////////////////////////////
//cek bad word
        if (in_array($kata[$i], $bads)) {
              $bad_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek sapa word
        if (in_array($kata[$i], $sapa)) {
              $sapa_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek modus word
        if (in_array($kata[$i], $modus)) {
              $modus_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek tanya siapa word
        if (in_array($kata[$i], $tanya_siapa)) {
              $tanya_word_siapa = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek bots word
        if (in_array($kata[$i], $bots)) {
              $bots_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek diri word
        if (in_array($kata[$i], $diri)) {
              $diri_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek ngatain word
        if (in_array($kata[$i], $ngatain)) {
              $ngatain_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek ngeles word
      if (in_array($kata[$i], $ngeles)) {
              $ngeles_word = '1'; // 1 = yes
      }
///////////////////////////////////////////////////////////////////////////////
//cek pengertian word
        if (in_array($kata[$i], $pengertian)) {
              $pengertian_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek teknik word
        if (in_array($kata[$i], $teknik)) {
              $teknik_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek menjadi word
        if (in_array($kata[$i], $menjadi)) {
                $menjadi_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek hacker word
        if (in_array($kata[$i], $hacker)) {
              $hacker_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek hack word
        if (in_array($kata[$i], $hack)) {
              $hack_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek hacking word
        if (in_array($kata[$i], $hacking)) {
              $hacking_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek hacked word
        if (in_array($kata[$i], $hacked)) {
              $hacked_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek carding word
        if (in_array($kata[$i], $carding)) {
              $carding_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek carder word
        if (in_array($kata[$i], $carder)) {
              $carder_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek deface word
        if (in_array($kata[$i], $deface)) {
              $deface_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek defacer word
        if (in_array($kata[$i], $defacer)) {
              $defacer_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek crack word
        if (in_array($kata[$i], $crack)) {
              $crack_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek cracker word
        if (in_array($kata[$i], $cracker)) {
              $cracker_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek care word
        if (in_array($kata[$i], $bot_care)) {
              $bot_care_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
// cek propaganda word
        if (in_array($kata[$i], $propaganda)) {
              $propaganda_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek zlucifer word
        if (in_array($kata[$i], $zlucifer)) {
              $zlucifer_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek bruteforce word
        if (in_array($kata[$i], $bruteforce)) {
              $bruteforce_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek phising word
        if (in_array($kata[$i], $phising)) {
              $phising_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek sosmed word
        if (in_array($kata[$i], $hack_sosmed)) {
              $hack_sosmed_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek whatsapp word
        if (in_array($kata[$i], $hack_whatapp)) {
              $hack_whatapp_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek termux word
        if (in_array($kata[$i], $termux)) {
              $termux_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek termux insta word
        if (in_array($kata[$i], $termux_insta)) {
              $termux_insta_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek termux call word
        if (in_array($kata[$i], $termux_call)) {
              $termux_call_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek wordlist word
        if (in_array($kata[$i], $wordlist)) {
              $wordlist_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek membuat word
        if (in_array($kata[$i], $membuat)) {
              $membuat_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek script word
        if (in_array($kata[$i], $script)) {
              $script_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek tor word
        if (in_array($kata[$i], $tor_browser)) {
              $tor_browser_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek vpn word
        if (in_array($kata[$i], $vpn)) {
              $vpn_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek vps word
        if (in_array($kata[$i], $vps)) {
              $vps_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek deep web word
        if (in_array($kata[$i], $deep_web)) {
              $deep_web_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek ddos word
        if (in_array($kata[$i], $ddos)) {
              $ddos_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek nmap word
        if (in_array($kata[$i], $nmap)) {
              $nmap_word = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
//cek malware word
        if (in_array($kata[$i], $malware)) {
              $malware_words = '1'; // 1 = yes
        }
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
}
//batas cek word
///////////////////////////////////////////////////////////////////////////////
//filter jawaban bads
if($bad_word == '1'){
      $kata_random = array('Kok kasar sih kak :( ', 'Jangan ngomong kasar kak T_T', 'Yallah kak nyebut :(' );
      $bot_jawab = $kata_random[array_rand($kata_random)];
}else{
///////////////////////////////////////////////////////////////////////////////
//Basa-basi
      if($sapa_word == '1'){
            $kata_random = array('Hi juga nama ku alice', 'Halo juga nama ku alice', 'Hy kamu nama ku alice' );
            $bot_jawab = $kata_random[array_rand($kata_random)];

      }else if($modus_word == '1'){
            $kata_random = array('Ih kaka genit :*','Modus nih kan cubit nih pipinya :3' );
            $bot_jawab = $kata_random[array_rand($kata_random)];

      }else if($ngeles_word == '1'){
            $kata_random = array('Yah jones gamau ngaku! HAHAHA :v','Jones mah jones aja kak :p','Ngeles aja jones :v' );
            $bot_jawab = $kata_random[array_rand($kata_random)];

      }else if($ngatain_word == '1'){
            $kata_random = array('Kaka jones ya? sabar ya HAHAHA :v','Kaka jones kan? Sukur :p','Sabar kak kalo jadi jones :v' );
            $bot_jawab = $kata_random[array_rand($kata_random)];

      }else if($tanya_word_siapa == '1' && $bots_word == '1'){
            $kata_random = array('Aku adalah bot buatan zLucifer nama ku Alice','Aku Alice kak,bot buatan zLucifer Salam kenal :)');
            $bot_jawab = $kata_random[array_rand($kata_random)];

      }else if($tanya_word_siapa == '1' && $diri_word == '1'){
            $kata_random = array('Aku engga kenal sama kaka :p','Aku engga nanya kayanya deh kak :(','Sumpah kak ga nanya! :p');
            $bot_jawab = $kata_random[array_rand($kata_random)];


      }else if($tanya_word_siapa == '1' && $zlucifer_word == '1'){
            $kata_random = array('zLucifer adalah admin tamvan :p','zLucifer admin hack id kak :)');
            $bot_jawab = $kata_random[array_rand($kata_random)];

      }else if($tanya_word_siapa == '1'){
            $kata_random = array('Alice tidak tau kak','Alice engga tau ih :(','Gatau kak :(','Sumpah kak Alice gatau :(');
            $bot_jawab = $kata_random[array_rand($kata_random)];

      }else if($bot_care_word == '1'){
            $kata_random = array('Kaka kenapa? :(','Yaampun kak kenapa sih :(');
            $bot_jawab = $kata_random[array_rand($kata_random)];
///////////////////////////////////////////////////////////////////////////////
//Pengertian
      }else if($pengertian_word == '1' && $hacker_word == '1'){
            $bot_jawab = 'Hacker adalah orang yang mempelajari, menganalisa, memodifikasi, menerobos masuk ke dalam komputer dan jaringan komputer';


      }else if($pengertian_word == '1' && $hack_word == '1'){
            $bot_jawab = 'Pengertian Hack secara umum adalah suatu pekerjaan yang hampir mustahil, mungkin menghabiskan banyak waktu dan pikiran dengan cara menerobos suatu sistem yang ada';

      }else if($pengertian_word == '1' && $hacking_word == '1'){
            $bot_jawab = 'Hacking adalah kegiatan memasuki system melalui system operasional lain yang dijalankan oleh Hacker. Tujuanya untuk mencari hole/bugs pada system yang akan dimasuki. Dalam arti lain mencari titik keamanan system tersebut';


      }else if($pengertian_word == '1' && $hacked_word == '1'){
            $bot_jawab = 'Hacked atau Diretas adalah istilah ketika hacker berhasil masuk suatu jaringan atau sistem yang berhasil ditembus oleh penyerang';


      }else if($pengertian_word == '1' && $carding_word == '1'){
            $bot_jawab = 'Carding adalah berbelanja menggunakan nomor dan identitas kartu kredit orang lain, yang diperoleh secara ilegal, biasanya dengan mencuri data korban melalui internet';


      }else if($pengertian_word == '1' && $carder_word == '1'){
            $bot_jawab = 'Carder adalah sebutan lain untuk orang yang melakukan kejahatan sejenis dengan cyberfroud alias penipuan di dunia maya, tujuannya untuk mencari identitas atau rekening orang lain';


      }else if($pengertian_word == '1' && $deface_word == '1'){
            $bot_jawab = 'Deface adalah teknik mengganti atau menyisipkan file pada server, teknik ini dapat dilakukan karena terdapat lubang pada sistem security yang ada di dalam sebuah sistem. Hal ini bertujuan untuk melakukan perubahan tampilan pada website korban ';


      }else if($pengertian_word == '1' && $defacer_word == '1'){
            $bot_jawab = 'Defacer adalah suatu seseorang yang melakukan teknik deface atau melakukan perubahan tampilan pada suatu website dengan cara ilegal melalui celah atau bug disuatu sistem';


      }else if($pengertian_word == '1' && $crack_word == '1'){
            $bot_jawab = 'Crack adalah suatu aktifitas pembobolan suatu software berbayar agar dalam proses pendaftarannya dapat kita lakukan tanpa harus membeli mau pun membayar lisensi resmi dari si pembuat software tersebut';


      }else if($pengertian_word == '1' && $cracker_word == '1'){
            $bot_jawab = 'Cracker adalah sebutan untuk mereka yang masuk ke sistem orang lain dan cracker lebih bersifat destruktif, biasanya di jaringan komputer, secara sengaja melawan keamanan komputer, untuk mendapatkan suatu keuntungan dari pihak cracker';


      }else if($pengertian_word == '1' && $propaganda_word == '1'){
            $bot_jawab = 'Propaganda adalah rangkaian pesan yang bertujuan untuk memengaruhi pendapat dan kelakuan masyarakat atau sekelompok orang';


      }else if($pengertian_word == '1' && $bruteforce_word == '1'){
            $bot_jawab = 'Bruteforce itu metode untuk meretas password (password cracking) dengan cara mencoba semua kemungkinan kombinasi yang ada pada “wordlist“';


      }else if($pengertian_word == '1' && $phising_word == '1'){
            $bot_jawab = 'Phising kalo gasalah suatu metode untuk melakukan penipuan dengan mengelabui target dengan maksud untuk mencuri akun target. Istilah ini berasal dari kata “fishing” = “memancing” korban untuk terperangkap dijebakannya';


      }else if($pengertian_word == '1' && $wordlist_word == '1'){
            $bot_jawab = 'Wordlist setau alice kumpulan kata-kata yang di kombinasikan untuk tujuan melakukan cracking ke akun si korban , wordlist biasanya di butuhkan di teknik Brutus Force';


      }else if($pengertian_word == '1' && $tor_browser_word == '1'){
            $bot_jawab = 'Tor Browser adalah versi Mozilla Firefox yang termutakhir dan dioptimalkan untuk privasi. Tidak seperti peramban lainnya, Tor Browser: menyediakan anonimitas daring dengan menyembunyikan alamat IP pengguna. menembus sensor daring dengan memampukan pengguna untuk mengakses situs web dan/atau halaman web yang diblokir';


      }else if($pengertian_word == '1' && $vpn_word == '1'){
            $bot_jawab = 'VPN atau Virtual Private Network adalah sebuah teknologi komunikasi yang memungkinkan untuk dapat terkoneksi ke jaringan public dan menggunakannya untuk dapat bergabung dengan jaringan local';


      }else if($pengertian_word == '1' && $vps_word == '1'){
            $bot_jawab = 'VPS sih singkatan dari Virtual Private Server. VPS adalah sebuah tipe server yang menggunakan teknologi virtualisasi untuk membagi hardware server fisik menjadi beberapa server virtual yang di hosting di infrastruktur fisik yang sama';

      }else if($pengertian_word == '1' && $deep_web_word == '1'){
            $bot_jawab = 'Deepweb atau Darknet kan kumpulan konten World Wide Web yang tidak terindex oleh mesin pencari standar (seperti Google, Bing, Yahoo). Meskipun tidak terlihat, konten Deep Web tetap dapat diakses dengan menggunakan tool khusus';

      }else if($pengertian_word == '1' && $ddos_word == '1'){
            $bot_jawab = 'DDOS itu adalah jenis serangan yang dilakukan oleh attacker/hacker terhadap sebuah komputer atau server di dalam jaringan internet dengan cara menghabiskan sumber daya (resource) yang dimiliki oleh komputer tersebut sampai komputer tersebut tidak dapat menjalankan fungsinya dengan benar/error';

      }else if($pengertian_word == '1' && $nmap_word == '1'){
            $bot_jawab = 'Nmap itu adalah sebuah aplikasi atau tool yang berfungsi untuk melakukan port scanning';

      }else if($pengertian_word == '1' && $malware_words == '1'){
            $bot_jawab = 'Malware itu adalah suatu program yang dirancang dengan tujuan untuk merusak dengan menyusup ke sistem komputer';

///////////////////////////////////////////////////////////////////////////////
//Cara membuat
      }else if($teknik_word == '1' && $membuat_word == '1' && $phising_word){
            $bot_jawab = 'Cara membuat script phising pertama kaka harus bisa coding atau menyiapkan script phising, lalu kaka harus punya domain bisa yang gratis seperti dot tk(.tk) atau yang berbayar dot com(.com) dan mempunyai server (hosting) untuk menjalankan script tersebut';

      }else if($teknik_word == '1' && $membuat_word == '1' && $script_word){
            $bot_jawab = 'Cara membuat script kaka harus pelajari coding, untuk membuat script seperti phising (tampilan web) kaka pelajari bahasa php, css dan html.';

      }else if($teknik_word == '1' && $membuat_word == '1' && $termux_word){
            $bot_jawab = 'Cara membuat script termux kaka bisa menggunakan bahasa pemrograman bash shell, dan python';

///////////////////////////////////////////////////////////////////////////////
//Teknik
      }else if($teknik_word == '1' && $menjadi == '1' && $hacker_word == '1'){
            $bot_jawab = 'Cara menjadi seorang hacker yaitu, pertama';

      }else if($teknik_word == '1' && $hack_sosmed_word == '1'){
            $bot_jawab = 'Gampang kak cara pertama yang paling mudah menggunakan metode Phising kak, Cara kedua bisa menggunakan Bruteforce';

      }else if($teknik_word == '1' && $hack_whatapp_word == '1'){
            $bot_jawab = 'Bisa menggunakan mirror project buatan admin, tapi belum di share admin sih kak :(';

      }else if($teknik_word == '1' && $termux_insta_word == '1'){
            $bot_jawab = 'Cara pakai termux insta kalo mau hack target spesifik kasih link www.panelindonesia.xyz ke target yang kaka pengen cari passwordnya, contohnya kaka DM begini : kak coba buka deh panel followers instagram gratis nih www.panelindonesia.xyz aku udah coba dan berhasil loh!. Nah setiap orang yang pakai panel itu bisa di cek username nya di tools termux_insta nanti passwordnya bakal muncul';

      }else if($teknik_word == '1' && $termux_call_word == '1'){
            $bot_jawab = 'Cara pakai termux spam call kaka tinggal masukin aja nomor telp target, nanti bot dari server admin bakal otomatis telp ke nomor yang kaka masukin, ini engga makan pulsa kaka dan kalo engga masuk telp nya mungkin servernya lagi error kak :(';

      }else if($teknik_word == '1' && $termux_word == '1'){
            $bot_jawab = 'Kaka pelajari aja basic termux kak, contohnya untuk menginstall aplikasi menggunakan cmd pkg install nama_aplikas';

      }else if($teknik_word == '1' && $nmap == '1'){
            $bot_jawab = 'Pertama kita harus tau ip target, Cara pakai nya ketik : nmap IP_target';


///////////////////////////////////////////////////////////////////////////////
//Else
      }else{
            $kata_random = array('Alice tidak tau kak','Alice engga tau ih :(','Alice tidak mengerti :(');
            $bot_jawab = $kata_random[array_rand($kata_random)];
      }
///////////////////////////////////////////////////////////////////////////////
}
// Batas bot
///////////////////////////////////////////////////////////////////////////////
// Fungsi log pertanyaan dan jawaban untuk koreksi jika kesalahan
// log disimpan di log_ask.txt
if(isset($_GET['input'])){
      date_default_timezone_set("Asia/Jakarta");
      $jam = date('G:i:s');
      $wew = fopen("./log_ask.txt","a");
      fwrite($wew,("$input#$bot_jawab#$jam\n"));
      fclose($wew);
}
?>
