date_default_timezone_set("Asia/Jakarta");
$ehrikznpuj="ua";
@system("clear");

$t="\n";
$r="\n\n";
$biru="[1;34m";
$turkis="[1;36m";
$ijo="[92m";
$putih"="[1;37m";
$pink="[1;35m";
${$red}="[1;31m";
$kuning="[1;33m";
require"config.php";

$header="X-User-Id: $uid\nX-Raw-User-Id: $raw_uid\nX-User-Name: $user_name\nX-Invite-Code: $invite_code\nX-TimeZone: WIB\nX-Net-Type: WiFi\nX-Resolution: 1080*1920\nX-Own-Mac: $own_mac\nX-Installer-App: com.android.vending\nX-App-Name: Baca+Plus\nX-Os-Api: 24\nX-Location: 0.0%2C0.0\nX-Operator-Desc: TELKOMSEL+%2851010%29\nX-Update-Version-code: 0\nX-Google-AD-ID: 9de19880-a117-4531-88f3-21e021dcf955\nX-APP-VERSION: 30308\nX-Channel: GooglePlay\nX-Android-Id: $android_id\nX-Device-Type: $device_type\nX-Google-AD-Status: false\nX-Init-Channel: GooglePlay\nX-Dpi: 480\nX-Device-Platform: android\nX-Web-User-Agent: Mozilla%2F5.0+%28Linux%3B+Android+7.0;+Mi-4c+Build/NRD90M%3B+wv%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko)+Version%2F4.0+Chrome%2F59.0.3071.125+Mobile+Safari%2F537.36\nX-Os-Version: 7.0\nX-App-Package-Id: com.jakarta.baca.lite\nX-Requested-With: com.jakarta.baca.lite";${$ehrikznpuj}="User-Agent: Mozilla/5.0 (Linux; Android 7.0; Mi-4c Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/59.0.3071.125 Mobile Safari/537.36";

$id=[2,4,10005,20001,20004,10001,10002,10006,];

function absen($header){
${$head}=array();
$head[]=$header;

$curl"]}=curl_init();
curl_setopt_array(${${"GLOBALS"}["curl"]},array(CURLOPT_RETURNTRANSFER=true,CURLOPT_URL=>"http://baca.co.id/api/v1/action/reward/1?newsId=0",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>"",CURLOPT_HTTPHEADER=>${${"GLOBALS"}["head"]},CURLOPT_SSL_VERIFYPEER=>true,));
${$result}=curl_exec(${$curl});
curl_close(${${"GLOBALS"}["curl"]});
return${$result};
}
function news($header){
${${"GLOBALS"}["head"]}=array();
${${"GLOBALS"}["head"]}[]=${$header};
${${"GLOBALS"}["curl"]}=curl_init();
curl_setopt_array(${$curl},array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://baca.co.id/api/v1/action/reward/3?newsId=".rand(10000000,99999999),CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>"",CURLOPT_HTTPHEADER=>${${"GLOBALS"}["head"]},CURLOPT_SSL_VERIFYPEER=>true,));
${${"GLOBALS"}["result"]}=curl_exec(${$curl});
curl_close(${${"GLOBALS"}["curl"]});
return${${"GLOBALS"}["result"]};
}
function login($header){
${$head}=array();
${$head}[]=${${"GLOBALS"}["header"]};
${${"GLOBALS"}["curl"]}=curl_init();
curl_setopt_array(${${"GLOBALS"}["curl"]},array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://baca.co.id/api/v1/action/user/status",CURLOPT_TIMEOUT=>30,CURLOPT_HTTPHEADER=>${$head},CURLOPT_SSL_VERIFYPEER=>true,));
${${"GLOBALS"}["result"]}=curl_exec(${${"GLOBALS"}["curl"]});$cosdccilky="result";
curl_close(${${"GLOBALS"}["curl"]})
;return${$cosdccilky};
}
function day_reward($header){
${${"GLOBALS"}["head"]}=array();
${${"GLOBALS"}["head"]}[]=${${"GLOBALS"}["header"]};
$curl}=curl_init();
curl_setopt_array(${${"GLOBALS"}["curl"]},array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://baca.co.id/api/v1/action/reward/2?newsId=0",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>"",CURLOPT_HTTPHEADER=>${$head},CURLOPT_SSL_VERIFYPEER=>true,));
${${"GLOBALS"}["result"]}=curl_exec(${${"GLOBALS"}["curl"]});
curl_close(${$curl});
return${${"GLOBALS"}["result"]};
}
function loading(){
for(${${"GLOBALS"}["i"]}=0;
${${"GLOBALS"}["i"]}<5;
${${"GLOBALS"}["i"]}++){echo".";
sleep(1);
}
}
function invite($header){
${${"GLOBALS"}["head"]}=array();
${${"GLOBALS"}["head"]}[]=${${"GLOBALS"}["header"]};
${${"GLOBALS"}["curl"]}=curl_init();
curl_setopt_array(${$curl},array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://baca.co.id/api/v1/action/code/F9NAmmRD7x",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>"",CURLOPT_HTTPHEADER=>${${"GLOBALS"}["head"]},CURLOPT_SSL_VERIFYPEER=>true,));
${${"GLOBALS"}["result"]}=curl_exec(${${"GLOBALS"}["curl"]});
curl_close(${${"GLOBALS"}["curl"]});
$yxcydslh="js";
${$yxcydslh}=json_decode(${${"GLOBALS"}["result"]},true);
if(${${"GLOBALS"}["js"]}["Effect"]["Error"]==0){echo".";
}else{echo",";}
}
?>
