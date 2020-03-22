<?php
print '===>Starting PSIPHON<===';
@system('am start -a android.intent.action.MAIN -n com.psiphon3.subscription/com.psiphon3.StatusActivity');
print '
===>Wait 20 Seconds<===';
sleep(20);

while(true){
	print '
===Checking Connection<===';
$urlcheckw = "http://kenzie.com/INSTALL.txt";
$nyancurlw = curl_init(); 
curl_setopt ($nyancurlw, CURLOPT_URL, $urlcheckw); 
curl_setopt ($nyancurlw, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
curl_setopt ($nyancurlw, CURLOPT_TIMEOUT, 60); 
curl_setopt ($nyancurlw, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($nyancurlw, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($nyancurlw, CURLOPT_FOLLOWLOCATION, 1);
$resultcheckw = curl_exec ($nyancurlw);
curl_close($nyancurlw);
if(preg_match("/NYAN/", $resultcheckw)) {
	print '
===>Connection OKAYY<===';
	sleep(30);
}else{
		print '
===>Connection FAIL<===
===>RESETING PSIPHON<===';
shell_exec('bash a');
print '
===>Starting PSIPHON<===';
@system('am start -a android.intent.action.MAIN -n com.psiphon3.subscription/com.psiphon3.StatusActivity');
print '
===>Wait 20 Seconds<===';
sleep(20);
}

}

?>
