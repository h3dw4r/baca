
require"modul.php";

@system("rm -rf user");
@system("git clone https://github.com/hidensystem/user");
@system("clear");
error_reporting(0);
require __DIR__."/user/setting.php";
echo${${"GLOBALS"}["baca_plus"]}.${${${"GLOBALS"}["t"]}};
sleep(3);
echo${${${"GLOBALS"}["ijo"]}}.${${${"GLOBALS"}["msg_baca"]}}.${${"GLOBALS"}["t"]};
sleep(1);
echo${${${"GLOBALS"}["putih"]}}."[•] login ";
loading();
invite(${${${"GLOBALS"}["header"]}});
${${"GLOBALS"}["login"]}=json_decode(login(${${"GLOBALS"["header"]}),true);
${${${"GLOBALS"}["user"]}}=${${"GLOBALS"}["login"]}["UserId"];${${"GLOBALS"}["coin"]}=${${"GLOBALS"}["login"]}["Coin"];${${"GLOBALS"}["money"]}=${${"GLOBALS"}["login"]}["Money"];${${"GLOBALS"}["invite"]}=${${"GLOBALS"}["login"]["InviteCode"];
${${"GLOBALS"}["teman"]}=${${"GLOBALS"}["login"]}["InviteeCount"];
if(${user}!=null){
echo${${"GLOBALS"}["t"]}.${turkis}."[|===|>]$putih welcome$ijo ".str_replace("+"," ",${user_name}).${${"GLOBALS"}["t"]};
sleep(1);
echo$putih."[-] coin:$ijo ".$coin."$putih ||money: Rp.$ijo".$money.$t";
echo${putih."[-] code invite:$ijo ".$invite."$putih || total teman: $turkis".${teman.$t";
}
echo${${"GLOBALS"}["t"]}.${${"GLOBALS"}["red"]}."[--] terjadi kesalahan ".$t";
@system("rm -rf user");exit;
}
sleep(5);
if(${${"GLOBALS"}["stat_baca"]}){
${$khnulpom}="absen";

echo${${"GLOBALS"}["t"]}.${turkis}."[--] cek absen ".${${"GLOBALS"}["t"]};
sleep(3);
${$ypvumvo}="turkis";
${$lxwpcjmyot}="absen";
${${${"GLOBALS"}["absen"]}}=json_decode(absen(${${"GLOBALS"}["header"]}),true);
${${"GLOBALS"}["kyjlhohixox"]}="absen";
${${${"GLOBALS"}["coin"]}}=${${"GLOBALS"}["absen"]}["Coin"];${${"GLOBALS"}["bal"]}=${${$kyjlhohixox}}["Money"];${"GLOBALS"}["spdfkyi"]="xhqeixh";${"GLOBALS"}["ygqduvfhp"]="error";${"GLOBALS"}["xydjjywvbyus"]="t";
${${"GLOBALS"}["spdfkyi"]}="day";
$rzsjrdlok="xhqeixh";${"GLOBALS"}["rstjbpi"]="money";${${"GLOBALS"}["efek"]}=${${${"GLOBALS"}["lxwpcjmyot"]}}["Effect"];$mgohmtzjtlf="wtejtpwsqm";${"GLOBALS"}["xqttgwr"]="efek";${${"GLOBALS"}["gold"]}=${${"GLOBALS"}["efek"]}["Coin"];${${"GLOBALS"}["rstjbpi"]}=${${"GLOBALS"}["efek"]}["Money"];${${"GLOBALS"}["error"]}=${${${"GLOBALS"}["efek"]}}["Error"];${"GLOBALS"}["wqamkos"]="t";${"GLOBALS"}["ismryti"]="t";${${"GLOBALS"}["tcbppgs"]}="day";if(${${"GLOBALS"}["ygqduvfhp"]}==0){${"GLOBALS"}["vldeiuzbt"]="t";echo${${"GLOBALS"}["ijo"]}."[•] sukses$putih || coin +$ijo".${${"GLOBALS"}["gold"]}."$putih || coin: $ijo".${${"GLOBALS"}["coin"]}.${${"GLOBALS"}["vldeiuzbt"]};}elseif(${${"GLOBALS"}["error"]}==10001){${"GLOBALS"}["ocnitgxqe"]="cwuxfhyhlep";${${"GLOBALS"}["cwuxfhyhlep"]}="t";echo${${"GLOBALS"}["kuning"]}."[•] sudah absen hari ini$putih || coin:$ijo ".${${"GLOBALS"}["coin"]}.${${${"GLOBALS"}["ocnitgxqe"]}};}else{$isexxhjqpfx="hqjjvs";${$isexxhjqpfx}="red";echo${${${"GLOBALS"}["hqjjvs"]}}."[•] terjadi kesalahan".${${"GLOBALS"}["t"]};}sleep(1);echo${${"GLOBALS"}["wqamkos"]}.${turkis}."[•] reward harian ".${${"GLOBALS"}["ismryti"]};sleep(1);${${"GLOBALS"}["day"]}=json_decode(day_reward(${${"GLOBALS"}["header"]}),true);${${"GLOBALS"}["coin"]}=${${${"GLOBALS"}["tcbppgs"]}}["Coin"];${${"GLOBALS"}["bal"]}=${${$rzsjrdlok}}["Money"];${"GLOBALS"}["cuxprb"]="error";${${"GLOBALS"}["efek"]}=${${"GLOBALS"}["day"]}["Effect"];${${"GLOBALS"}["gold"]}=${${${"GLOBALS"}["xqttgwr"]}}["Coin"];${${"GLOBALS"}["money"]}=${${"GLOBALS"}["efek"]}["Money"];${$mgohmtzjtlf}="t";${${"GLOBALS"}["cuxprb"]}=${${"GLOBALS"}["efek"]}["Error"];if(${${"GLOBALS"}["error"]}==0){${"GLOBALS"}["zqecqklklqn"]="gold";${${"GLOBALS"}["orinxffq"]}="t";${${"GLOBALS"}["cfodbbej"]}="coin";${"GLOBALS"}["zfcfgokx"]="orinxffq";${"GLOBALS"}["dhdeqyli"]="cfodbbej";echo${${"GLOBALS"}["ijo"]}."[•] sukses$putih || coin +$ijo".${${"GLOBALS"}["zqecqklklqn"]}."$putih || coin:$ijo ".${${${"GLOBALS"}["dhdeqyli"]}}.${${${"GLOBALS"}["zfcfgokx"]}};}elseif(${${"GLOBALS"}["error"]}==10004){${"GLOBALS"}["onsrkvvyh"]="coin";echo${${"GLOBALS"}["kuning"]}."[•] sudah terclaim$putih || coin$ijo ".${${"GLOBALS"}["onsrkvvyh"]}.${${"GLOBALS"}["t"]};}elseif(${${"GLOBALS"}["error"]}==10001){$lswpoqnvqov="vnnrvsbfsm";${${"GLOBALS"}["lkikhrfttzh"]}="bal";${$lswpoqnvqov}="kuning";${"GLOBALS"}["gdoshqur"]="t";echo${${${"GLOBALS"}["vnnrvsbfsm"]}}."[•] sudah terclaim$putih || coin:$ijo ".${${"GLOBALS"}["coin"]}."$putih || money: Rp.$ijo".${${${"GLOBALS"}["lkikhrfttzh"]}}.${${"GLOBALS"}["gdoshqur"]};}else{echo"[•] ".${${"GLOBALS"}["error"]}." terjadi kesalahan".${${"GLOBALS"}["t"]};}sleep(3);echo${${${"GLOBALS"}["wtejtpwsqm"]}}.${${${"GLOBALS"}["ypvumvo"]}}."[•] membaca berita dapatkan uang ".${${"GLOBALS"}["xydjjywvbyus"]};sleep(3);while(true){${"GLOBALS"}["lqvdgwg"]="oncnebja";${${"GLOBALS"}["lqvdgwg"]}="news";${"GLOBALS"}["grwlfvoweni"]="hresyxfw";$wuwblni="sshxfryyhc";${${"GLOBALS"}["grwlfvoweni"]}="efek";${${"GLOBALS"}["rcmxdusmuxyb"]}="news";${"GLOBALS"}["txkxbynxg"]="gold";${${"GLOBALS"}["sshxfryyhc"]}="efek";${${${"GLOBALS"}["rcmxdusmuxyb"]}}=json_decode(news(${${"GLOBALS"}["header"]}),true);${${"GLOBALS"}["coin"]}=${${${"GLOBALS"}["oncnebja"]}}["Coin"];${${"GLOBALS"}["bal"]}=${${"GLOBALS"}["news"]}["Money"];${${${"GLOBALS"}["hresyxfw"]}}=${${"GLOBALS"}["news"]}["Effect"];${${"GLOBALS"}["txkxbynxg"]}=${${"GLOBALS"}["efek"]}["Coin"];${${"GLOBALS"}["money"]}=${${"GLOBALS"}["efek"]}["Money"];${${"GLOBALS"}["error"]}=${${$wuwblni}}["Error"];if(${${"GLOBALS"}["error"]}==0){${"GLOBALS"}["irdmiobzw"]="mepheaasv";${"GLOBALS"}["iapknkbux"]="mepheaasv";${${"GLOBALS"}["irdmiobzw"]}="t";echo${${"GLOBALS"}["ijo"]}."[•] sukses$putih || coin +$ijo".${${"GLOBALS"}["gold"]}."$putih || coin: $ijo".${${"GLOBALS"}["coin"]}.${${${"GLOBALS"}["iapknkbux"]}};sleep(30);}elseif(${${"GLOBALS"}["error"]}==10004){${"GLOBALS"}["foulhwjjny"]="coin";${"GLOBALS"}["deifhhuwy"]="t";echo${${"GLOBALS"}["kuning"]}."[•] sudah terclaim$putih || coin$ijo ".${${"GLOBALS"}["foulhwjjny"]}.${${"GLOBALS"}["deifhhuwy"]};}elseif(${${"GLOBALS"}["error"]}==10001){${"GLOBALS"}["taukxtbmfe"]="jiictbrpm";$jmvnglpfnue="jiictbrpm";${"GLOBALS"}["crebnfvi"]="t";${${"GLOBALS"}["taukxtbmfe"]}="coin";echo${${"GLOBALS"}["kuning"]}."[•] limit harian$putih || coin:$ijo ".${${$jmvnglpfnue}}."$putih || money: Rp.$ijo".${${"GLOBALS"}["bal"]}.${${"GLOBALS"}["crebnfvi"]};break;}else{${"GLOBALS"}["lpdgssgeuu"]="btppqtxkiiy";${"GLOBALS"}["ievjrvxmegm"]="error";${"GLOBALS"}["evfcdjovsu"]="btppqtxkiiy";${${"GLOBALS"}["evfcdjovsu"]}="t";${"GLOBALS"}["ytddxtekwb"]="red";echo${${"GLOBALS"}["ytddxtekwb"]}."[•] ".${${"GLOBALS"}["ievjrvxmegm"]}." terjadi kesalahan".${${${"GLOBALS"}["lpdgssgeuu"]}};@system("rm -rf user");exit;}sleep(1);}sleep(3);}else{$exzogxwsj="xkxuacf";${"GLOBALS"}["htfrabfrdv"]="t";${$exzogxwsj}="t";${"GLOBALS"}["lkmtektg"]="kuning";echo${${"GLOBALS"}["htfrabfrdv"]}.${${"GLOBALS"}["lkmtektg"]}."[•] oops fiture lock".${${${"GLOBALS"}["xkxuacf"]}};@system("rm -rf user");}@system("rm -rf user");echo${${"GLOBALS"}["msg_baca"]}.${${"GLOBALS"}["t"]};
?>
