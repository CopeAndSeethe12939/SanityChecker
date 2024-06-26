<?
/*
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@&&&&&&@@@@@@@&@&&&&&&&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@&&#&&&##&&&&&&########&&&&&&&&&&&&&&&&&##&&&&#&&&&&&&&&@&##&&&&&&&&&&@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@#Y!7????7?JJJ??7777777???JY#&&BYJJJJJJJ????J?7?P&&&&&&&&G?!7?JJJJJ???5#@&@@@@@@@@@@@
@@@@@@@@@@@@@@#5!~!777!!77~^^~~!7?J?7!~~!JGBGJ!~~~~~~^^~~!!!7!~YB#&&&#P?!!77!~^^^~~!~7B&&&@@@@@@@@@@
@@@@@@@@@@@@&57!!!!!!!~!!7!~^^^~!77!!!!JPGPJ!!77!~~~~~^^^~!77~^JG###BY!!!!~~!~^^^~~7~7G#&&&@@@@@@@@@
@@@@@@@@@@#GJ!!~~~~~!!!77777!!~~~!!?JJPPJ?7!!7?7!~~~~~~^^^~!7!~JGBGY7!~~^^^^~~~^^^~7!JG#&&&&@@@@@@@@
@@@@@@@@@G7!!!77777?????????777777?YPGY?!!!!!!777!~~!!!~^^^~7!7Y5?!~77?7!~^^^^~^^^~7?YP#&&&&@@@@@@@@
@@@@@@@@&Y!!!YGGGGGGGGGGGGGGGGGGGGG5J?!!!7PGGGGGP?!~~!!!~^^^~!77!!7?5PP5!~~!~~^^^^~!?YP#&&&&@@@@@@@@
@@@@@@@@&J~~~5B&&&&##############BY!~~~!?JP55PBBB5!~!777!^^^~!!!7?JYY5G5!!?JJJJ??J7!!?P#&&&&&@@@@@@@
@@@@@@@@&J!~~5B&&&&&&#B########BP?!!7!~!??J~!7PBB5!~!7???7!~~!??JPJ!!?57~7?777777??!~!P#&&&&&@@@@@@@
@@@@@@@@&Y!7J5PPPPPPGY?Y#####GY7!!?JJJ7~!??!7JPGB5!!?JJJJJJJ7~!JGGJ~!Y57!7~^^^^~~~7!^!GB&&&&&@@@@@@@
@@@@@@@@@BY77!!!~~~!!~7PBB#BY!~7?7777?7~~YJ7!7YGBY!7JJJ??7!!7!^JGBJ~~Y57!7~^^^^^^^77^!GB&&&&&@@@@@@@
@@@@@@@@@@&BPYJJJJJJJYPBB#B?~!??7!!!!?7~~YJ7!~YGB?~7J77!~^^^7!^JGBJ~~Y5!~7??77777!7!^!GB&&&&&@@@@@@@
@@@@@@@@@@@@@@&&##########BJ~7YJ??777?7~~YY7!~YBG!!77~~^^^^^7!^JGBJ~~Y5!~!JYJ?7777!!!7PB&&&&&@@@@@@@
@@@@@@@@@@@@@&&&&&&&&&&&&&#J~!JJJJJJJJ7~~YJ!!!5GG!!7!~~^^^^^!7!YGGJ~~Y5!~7JJ7~^^^^!!7JPB&&&&&@@@@@@@
@@@@@@@@@@@@@@&&&&&&&#G5YJJ7~!?????JJ?!~!?J~!???7!!??7!!!~~^^~~???7!!Y57!777??7!~~!!~7GB&&&&&@@@@@@@
@@@@@@@@@@@@@@@&&&&B5?!~~~!77?????????~~7?Y!~7????JYJJJJJ??777!7777!!?57!7~^^~!77?7!7JPB&&&&&@@@@@@@
@@@@@@@@@@@@@@@&&&P!~!77!!!77????????7~~7?Y7~!?JJJJJJJJJJJJJJJJJJJ?!~!Y7~7?77!!~~~?!^!PB&&&&&@@@@@@@
@@@@@@@@@@@@@@@@&&Y!!5PPGP57~!???????7~~7?Y!~!77?????????????7!!!!~~77YY!~7??JJJJJ?!~7PB&&&&&@@@@@@@
@@@@@@@@@@@@@@@@&&Y!!7P###BJ~!???????7~~7??~!77!!777???????7~~!7!!^~77YY7~!77777??!!?5PB#&&&&&@@@@@@
@@@@@@@@@@@@@@@@&&#Y!~!P##BJ~~7777777!~!??J!7Y555?!~!777777!~!J5Y5Y!~!YY!~!777!!77!!J5PB#&&&&&@@@@@@
@@@@@@@@@@@@@@@@&&&&GGP5GBGJ!~!!!777!~~!??J!7YPGB5!~~!~~!!7!~!J5GBG7~~YY!~!!!!~~~!~!?YPB#&&&&&@@@@@@
@@@@@@@@@@@@@@@@&&&&&BY7!!!!~^~~~~!!!~!77J5!!JPGGJ!~^^^^^^~~~!J5GBG7~~YY7~!7!!!!!~~77YPB#&&&&&@@@@@@
@@@@@@@@@@@@@@@@&&#P?!!!~~^^^^^^^^^~!!~^?55!!75GP7!!^^^^^^^^~!7JPBG7~~Y57~~!!!!!!!~!?5PB##&&&&@@@@@@
@@@@@@@@@@@@@@@@&&5~!J5YJJ?!~^^^^~!!~~!YGGY!!!777!!~~!!!!!!~^~~!!77!~!YY7~~!~~~~~~~77YPB##&&&&@@@@@@
@@@@@@@@@@@@@@@@&&Y~75GBBBGJ!~^~!!!~75GGBBP7!?J??7~~!77???7!~!?Y??7~!!YY7~!77!~~~^~7!JGB##&&&&@@@@@@
@@@@@@@@@@@@@@@@&&Y!~7YB##BJ~~~!77?5GGBB##P77YPGGY!~~!!!777!~!J5GB57!!YY7~!?77!!~~~77JGB##&&&&@@@@@@
@@@@@@@@@@@@@@@&&&#5J77P##G7~!?JY5PGBB####P7?YPGB5!~7777777!~!J5GBP77~YY7~!77777!!~!?5PB##&&&&@@@@@@
@@@@@@@@@@@@@@@&&&&&##BBGY!~7Y55GGBB######G77YPGBY!~!777777!~!J5GBP?7~YJ!~7JJJJ??7~!?5PB###&&&@@@@@@
@@@@@@@@@@@@@@&&&&&&&#PJ7~!?YPGGB#########P!!JPGBJ!~~~!!!77!~!J5GBP?!~YJ!~7JJJ??7!~77JGB&&#&&&&@@@@@
@@@@@@@@@@@@@&&&&#GGPJ!!~~!JJ5PPPPPPPPPPPPY!~?5GBJ7~^~~~~~!~~!J5GBP?!!YJ!~7??7!~^^^~~7Y55P#&&&&@@@@@
@@@@@@@@@@@@&@&#Y7!!~~~~^^~!~~~~~~~~~~~~~~~!!JPGBY!~!!!~!!7!~!J5GBP77?5?~!~!~^^^^^~~~~~~!JG#&&&@@@@@
@@@@@@@@@@@@&B5?!!~~~!!!!!!!!!!!!~~~~~^^^^^!7YPG#Y!!?JJ???7!!775GBP!!JPGPY!^^~~!77?JJJ!!75PB#&&@@@@@
@@@@@@@@@@@&P?!!~^~~~~~~~~~~!!!!7777!~~~~!~!7YPG#G?~7YJJ?!!!!75GGB5!~?PB#BP7^7JJJJJJJJ7!75PB&&&@@@@@
@@@@@@@@@&P?!!!!!!!!!!!!!!!!!!!!!!!!!!!!777!!JPB##GY77!!!!~!YGGBB#P7!YPB###BYJ7!!!!!~~~~?5PB&&&@&@@@
@@@@@@@@@G!~JP5555555555555555555555555YY5Y!!JPB###&#P5YYYYGBB####G?7?5B###&&B5YJJYYJJJYY5GB&&&@@@@@
@@@@@@@@@G??5PB###########################5!!JPB###&&&&&######&&&&P?775B#&&&&&&&&###########&&&@@@@@
@@@@@@@@&P77YPB&&&&&&&&&&&&&&&&&&&&&&&&&&&G77YPB&&&&&&&&&&&&&&&&&&P?7?5B&&&&&&&&&&&&&&&&&&&&&@@@@@@@
@@@@@@@@&5!!?PB&&&&&#GJJ#&&&&&&&&&&&&&&&&&G7!75B&&&&&&&&&&&&&&&&&&G7!75B&&&&&&&&&&&&&&&&@@@@@@@@@@@@
@@@@@@@@@G7!77JJJJJ??!~?#&&&&&&&&&&&&&&&GYJ!~!7YB&&&&&&&&&&&&&&&PJJ!!7JJB&&&&&&&@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@&GYJ7?????JJY5GB#&&&&@@@@@@&&&&GJ?~!!?YP&&&&&@@@@@@@@@&PJ7!!JY?P&&&&@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@&&#B########&&@@@@@@@@@@@@@@&@5!7?PB##&@@@@@@@@@@@@@&&G?7JPB##&@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&##BB#&@@@@@@@@@@@@@@@@@@&#BB#@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

                  			     -=-=-=-=-=--=-=-=-=-=-=--=-=-=-=-=-=-
                               Sanity Checker V3.2 (C) 2017-2024
                                -=-=-=-=--=-=-=-=-=-=--=-=-=-=-
                                Note:NOT for use by US citizens

>Notes;
-Do NOT run this "out of the box". It's a framework that will always be WIP depending on your needs.
-Having skiddies constantly attempt to scan various webservers, I wrote a quick & dirty script to deal with the more-than-obvious proxy connects.
-The routine grew a bit more as I learned more and more tricks, some of which are not 100% (hence "suspect" and other logs).
-I would recommend you read through the script and leave it pure logging mode for now and scan logs for anything that's an obvious giveaway.
-Changing of filenames in logs (and the script itself) is highly encouraged.
-Should you enable the "auto add to .htaccess" at the end of this file, should $proxy = 4 then it will add to the list. Edit this code to suit your needs.

Usage;
Merely "include ('SanityV3.php');" at the start of your entry page, you really only need to run this once per visit, I would suggest you
also check for sessions and such otherwise you'll fill your log files up REALLY fast.

Currently can test for obvious, potential, and suspect proxies. Will spill most Elite Anon proxies.

The logs are split into 4 files;
found_log	-   Obviously a proxy
name_log	-   Hostname indicates it could be a proxy
suspect_log     -   Suspect. Some ISPs don't use hostname resolve, but could also be a proxy. This is 
                    where you need to manually check the IP against hosts.
request_log	-   Check the request type - "HEAD" can indicate a lame script attempt                    

*/

// Name of log files by type - Might want to change these filenames to hide them better
$found_log = 'proxy_found.txt';		// Yes, it's a proxy (or possibly a virtual machine or VPN (yes, those leak too))
$suspect_log = 'suspect.txt';		// Worth keeping an eye on
$name_log = 'named.txt';		// Obviously a webcache or mailer or some obvious named thing
$request_log = 'request.txt';		// Found via "Request_Method" below - may want to keep disabled for casual users
$useragent_log = 'user_agent.txt';	// Found via "User_Agent" - ban those pesky UA_spammer companies/scanners


// Ban by REQUEST_METHOD - uncomment to use. Add and remove for your own use
/*
$rm = $_SERVER['REQUEST_METHOD'];
foreach (array("HEAD","TRACE","DELETE","OPTIONS","MOVE","COPY","UPDATE","MERGE") as $t1)
{
if ($rm == $t1) 
	{
	// Remove comments on 3 lines below to add IP block
	// $logme=fopen('.htaccess','a');
	// fwrite($logme,"deny from " . $_SERVER['REMOTE_ADDR'] . "\n");
	// fclose($logme);
$now = date("d-m-y H:i:s OT");
$logme=fopen($request_log,'a');
fwrite($logme,"REQ: " . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n");
fclose($logme);
	}
}
*/

// Ban by USER_AGENT - uncomment to use. Add and remove for your own use
/*
$ua = $_SERVER['HTTP_USER_AGENT'];
foreach (array("IonCrawl","Palo Alto","Go-http-client/1.1","Symfony BrowserKit","NetcraftSurveyAgent","fasthttp") as $t1)
{
if ($ua == $t1) 
	{
	// Remove comments on 3 lines below to add IP block
	// $logme=fopen('.htaccess','a');
	// fwrite($logme,"deny from " . $_SERVER['REMOTE_ADDR'] . "\n");
	// fclose($logme);
$now = date("d-m-y H:i:s OT");
$logme=fopen($useragent_log,'a');
fwrite($logme,"UAB: " . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n");
fclose($logme);
	}
}
*/

$remo = $_SERVER['REMOTE_ADDR'];
$proxy = "Checkme";

// Safe list (Do not check) which you may want to keep an eye on
foreach (array("1.2.3.4") as $t1)
{
$subtest1 = stristr($remo,$t1);
$blab1 = strlen($remo)-strlen($subtest1);
if ($blab1 == 0) $proxy="DontCheck";
}


// HEADER tests. Using a list of known (and some lessor known) headers, may spill originating IP
if ($proxy == "Checkme")
{
$now = date("d-m-y H:i:s OT");

$logme=fopen($found_log,'a');
$proxy = 0;
if (isset ($_SERVER['HTTP_VIA'])) { fwrite($logme,"P00: " . $_SERVER['HTTP_VIA'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['VIA'])) { fwrite($logme,"P01: " . $_SERVER['VIA'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_X_FORWARDED_FOR'])) { fwrite($logme,"P02: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_FORWARDED'])) { fwrite($logme,"P03: " . $_SERVER['HTTP_FORWARDED'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_FORWARDED_FOR'])) { fwrite($logme,"P04: " . $_SERVER['HTTP_FORWARDED_FOR'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_X_FORWARDED'])) { fwrite($logme,"P05: " . $_SERVER['HTTP_X_FORWARDED'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['FORWARDED'])) { fwrite($logme,"P06: " . $_SERVER['FORWARDED'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_X_BLUECOAT_VIA'])) { fwrite($logme,"P07: " . $_SERVER['HTTP_X_BLUECOAT_VIA'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_PROXY____']))	{ fwrite($logme,"P08: " . $_SERVER['HTTP_PROXY____'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_PROXY___________'])) { fwrite($logme,"P09: " . $_SERVER['HTTP_PROXY___________'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_PROXY_CONNECTION'])) { fwrite($logme,"P10: " . $_SERVER['HTTP_PROXY_CONNECTION'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_X_HOST'])) { fwrite($logme,"P11: " . $_SERVER['HTTP_X_HOST'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_X_REFERER'])) { fwrite($logme,"P12: " . $_SERVER['HTTP_X_REFERER'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_X_SERVER_HOSTNAME'])) { fwrite($logme,"P13: " . $_SERVER['HTTP_X_SERVER_HOSTNAME'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['PROXY_HOST'])) { fwrite($logme,"P14: " . $_SERVER['PROXY_HOST'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['PROXY_PORT'])) { fwrite($logme,"P15: " . $_SERVER['PROXY_PORT'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['PROXY_REQUEST'])) { fwrite($logme,"P16: " . $_SERVER['PROXY_REQUEST'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_CLIENT_IP'])) { fwrite($logme,"P17: " . $_SERVER['HTTP_CLIENT_IP'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
// Removed this one as too many false positives, but up to you if you want to use it
//if (isset ($_SERVER['HTTP_PRAGMA'])) { fwrite($logme,"P18: " . $_SERVER['HTTP_PRAGMA'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_X_COMING_FROM'])) { fwrite($logme,"P19: " . $_SERVER['HTTP_X_COMING_FROM'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }
if (isset ($_SERVER['HTTP_COMING_FROM'])) { fwrite($logme,"P20: " . $_SERVER['HTTP_COMING_FROM'] . ":" . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy = 4; }

if ((isset ($_SERVER['HTTP_VIA'])) ||
(isset ($_SERVER['VIA'])) ||
(isset ($_SERVER['HTTP_X_FORWARDED_FOR'])) || 
(isset ($_SERVER['HTTP_FORWARDED'])) || 
(isset ($_SERVER['HTTP_FORWARDED_FOR'])) || 
(isset ($_SERVER['HTTP_X_FORWARDED'])) || 
(isset ($_SERVER['FORWARDED'])) || 
(isset ($_SERVER['HTTP_X_BLUECOAT_VIA'])) || // This seems to spill Elite Proxies
(isset ($_SERVER['HTTP_PROXY____']))	 || 
(isset ($_SERVER['HTTP_PROXY___________'])) || // Lessor known tag
(isset ($_SERVER['HTTP_PROXY_CONNECTION'])) || 
(isset ($_SERVER['HTTP_X_HOST'])) || 
(isset ($_SERVER['HTTP_X_REFERER'])) || 
(isset ($_SERVER['HTTP_X_SERVER_HOSTNAME'])) || 
(isset ($_SERVER['PROXY_HOST'])) || 
(isset ($_SERVER['PROXY_PORT'])) || 
(isset ($_SERVER['PROXY_REQUEST'])) || 
(isset ($_SERVER['HTTP_CLIENT_IP'])) || 
(isset ($_SERVER['HTTP_PRAGMA'])) || 
(isset ($_SERVER['HTTP_X_COMING_FROM'])) || 
(isset ($_SERVER['HTTP_COMING_FROM'])))
{
$proxy = 4;
}
else
{
$proxy = 2;
}
fclose($logme);


// Does the IP resolve ?
$ip = $_SERVER['REMOTE_ADDR'];
$host = @gethostbyaddr($ip);

// These are suspect due to hostname resolve issues
$logme=fopen($suspect_log,'a');

// No hostname, this COULD be a crappy server config so likely to give false positives - hence suspect file
if ($host == $ip) { fwrite($logme,"S00: " . $host . " : " . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy=4; }
if (strlen($host) <= 8) { fwrite($logme,"S01: " . $host . " : "  . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy=4; }
$temp = explode(".",$host);
$tempx = count($temp);
if ($tempx <= 1) { fwrite($logme,"S02: "  . $host . " : " . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy=4; }
fclose($logme);

// Look for keywords that may possibly indicate a proxy in the hostname
$logme=fopen($name_log,'a');
$host = @gethostbyaddr($ip);
$host = strtolower($host);

/*
	Although these appear in the hostname, it's not always 100% a proxy. 
	Prox	- If this appears anywhere, it's pretty obvious it's a proxy
	cache	- Another proxy giveaway
	www	- Who uses a "www" anything in a hostname ?
	mail	- Often used as proxies
	web 	- See www
	news	- Likely a BNC
*/

if(strstr($host,"prox")) { fwrite($logme,"N00: "  . $host . " : " . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy=4;}
if(strstr($host,"cache")) { fwrite($logme,"N01: "  . $host . " : " . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy=4;}
if(strstr($host,"www")) { fwrite($logme,"N02: "  . $host . " : " . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy=4;}
if(strstr($host,"mail")) { fwrite($logme,"N03: "  . $host . " : " . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy=4;}
if(strstr($host,"web")) { fwrite($logme,"N05: "  . $host . " : " . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy=4;}
if(strstr($host,"news")) { fwrite($logme,"N06: "  . $host . " : " . $_SERVER['REMOTE_ADDR'] . " - " . $now . " REQ:" . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . " - REF: " . $_SERVER['HTTP_REFERER'] . " - UA: " . $_SERVER['HTTP_USER_AGENT'] . "\n"); $proxy=4;}
fclose($logme);


// Add to .htaccess ? Uncomment below and check path for .htaccess automatic blacklisting

/*
if ($proxy == 4)
{
$logme=fopen('.htaccess','a');
fwrite($logme,"deny from " . $_SERVER['REMOTE_ADDR'] . "\n");
fclose($logme);
}
*/
}
/* End of sanity, we return to madness */
?>
