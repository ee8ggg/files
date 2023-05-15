<?php
ob_start();
define('API_KEY', '996314089:AAHOLi23cE4R9wmXcdy9-cteMLxSCXlfd40');
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method, $datas = [])
  {
  $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
  $res = curl_exec($ch);
  if (curl_error($ch))
    {
    var_dump(curl_error($ch));
    }
    else
    {
    return json_decode($res);
    }
  }

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$T4TTTT = 210812472;
$SAIED = file_get_contents("SAIED.txt");
$SAIED0 = file_get_contents("SAIED0.txt");
$SAIED1= file_get_contents("SAIED1.txt");
$SAIED5 = file_get_contents("SAIED2.txt");
$SAIED6 = file_get_contents("SAIED3.txt");
$SAIED20 = json_decode(file_get_contents('php://input'));
$SAIED18 = $update->message;
$SAIED13 = $SAIED18->chat->id;
$SAIED17 = $SAIED18->text;
$SAIED19 = $SAIED20->callback_query->data;
$SAIED12 = $SAIED20->callback_query->message->chat->id;
$SAIED14 =  $SAIED20->callback_query->message->message_id;
$SAIED15 = $SAIED18->from->first_name;
$SAIED16 = $SAIED18->from->username;
$SAIED11 = $SAIED18->from->id;
$SAIED2 = explode("\n",file_get_contents("SAIED4.txt"));
$SAIED3 = count($SAIED2)-1;
if ($SAIED18 && !in_array($SAIED11, $SAIED2)) {
    file_put_contents("SAIED4.txt", $SAIED11."\n",FILE_APPEND);
  }
$SAIED9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED0&user_id=".$SAIED11);
$SAIED10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED1&user_id=".$SAIED11);
if($SAIED18 && (strpos($SAIED9,'"status":"left"') or strpos($SAIED9,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED9,'"status":"kicked"') or strpos($SAIED10,'"status":"left"') or strpos($SAIED10,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$SAIED13,
'text'=>'- اشترك في قنوات البوت أولا لتتمكن من إستخدامه 🤖".

'.$SAIED0.'
'.$SAIED1,
]);return false;}
$username = $message->from->username;
mkdir("data");
$id = $message->from->id;
$admin = 210812472;
if (preg_match('/^\/(o)(.*)/', $text) and $id== $admin) {
    $text = str_replace('/add','',$text);
    $ex = explode(' ', $text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• تم تفعيل عضويةه لـ `$ex[1]` بنجاح🧾.
• لـ حذف العضويه ارسل `/d $ex[1]`",
'parse_mode'=>"markdown",
]);
file_put_contents("data/$ex[1].txt",$ex[1]);
bot('sendMessage',[
'chat_id'=>$ex[1],
'text'=>"*★|| تـم تفعيل العضويه الخاصه بك ⚡️

★|| اضغـط /start مجددا 🗣*",
'parse_mode'=>"markdown",
]);return false;}
if($text == "/start" and $id == 210812472){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"*- لـ تفعيل عضويةه شخص ارسل ↙️
• /o + الايدي
- لـ حذف عضوية شخص ارسل ↙️
• /d + الايدي*",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id, 
]);
}

if (preg_match('/^\/(d)(.*)/', $text) and $id== $admin) {
    $text = str_replace('/ad','',$text);
    $ex = explode(' ', $text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• تم حذف عضويةه `$ex[1]` بنجاح⚠️.
• لـ تجديد العضويه ارسل `/o $ex[1]`",
'parse_mode'=>"markdown",
]);
file_put_contents("data/$ex[1].txt","MohaMeD");
bot('sendmessage',[
'chat_id'=> $ex[1],
'text'=> "*- تم حذف صلاحيةه اسخدامك للبوت ⚠️.*
*• BY;* @uiiii",
'parse_mode'=>"markdown",
    ]);
}
$gt =file_get_contents("data/$id.txt");
if($text == "/start" and $gt == $id and $id !==210812472){
bot( sendMessage ,[
chat_id =>$chat_id,
text => "
🙈︙ اهلا بك عزيزي ؛ [$name](t.me/$ch)  ..

★|| في البوت الاول على منصة تلجرام
★|| يقوم البوت بصنع كومبو فيزات عشوائي
𖤓|| عدد الفيزات في الكومبو حسب اختيارك ( 10k - 15k )
ٴ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[🙊 جديدنا للبوتات](t.me/UPPPP)

★|| اضغط ( /co10k ) لتوليد 10k
★|| اضغط ( /co15k ) لتوليد 15k" ,
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
reply_markup =>json_encode([
inline_keyboard =>[
[['text'=> 'قناتنا .' ,'url' => 't.me/UPPPP']],
[[ 'text' => 'المطور.','url' => 't.me/Uiiii' ]],
]])]);}

if($text == "/start" and $gt != $id){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 𖤓 || عذرا عزيزي البوت يعمل بنضام العضويه 🔑
𖤓 || لتفعيل عضويتك قم بتحويل 10$ زينكاش الى الرقم ⬇️⬇️

𖤓 || الرقم ( 07844686639 ) وارسل السكرين الى المطور
𖤓 || المطور ~ @Uiiii
- ايديك `$id` 🆔.",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($text == "/start" and $chat_id !== 210812472){
bot('sendMessage',[
'chat_id'=>210812472,
'text'=>"ضغط ستارت [$username](tg://user?id=$user_id)",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);
}
if($SAIED17 == "/admin" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- أهلا بك في قائمة المطور 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"SAIED0"],['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"SAIED1"]],
[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📢✅".' ,'callback_data'=>"SAIED2"],['text'=>'- حذف القناة 📢❎".' ,'callback_data'=>"SAIED3"]],
[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"SAIED4"]],
[['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"SAIED5"],['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"SAIED7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"SAIED9"],['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"SAIED10"]],
[['text'=>'- توجيه الرسائل من الأعضاء 🔃".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل للتوجيه 🔃✅".' ,'callback_data'=>"SAIED11"],['text'=>'- تعطيل للتوجيه 🔃❎".' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
}
if($SAIED19 == "SAIED" ){
bot('EditMessageText',[
'chat_id'=>$SAIED12,
'message_id'=>$SAIED14,
"text"=>'- أهلا بك في قائمة المطور 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"SAIED0"],['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"SAIED1"]],
[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📢✅".' ,'callback_data'=>"SAIED2"],['text'=>'- حذف القناة 📢❎".' ,'callback_data'=>"SAIED3"]],
[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"SAIED4"]],
[['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"SAIED5"],['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"SAIED7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"SAIED9"],['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"SAIED10"]],
[['text'=>'- توجيه الرسائل من الأعضاء 🔃".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل للتوجيه 🔃✅".' ,'callback_data'=>"SAIED11"],['text'=>'- تعطيل للتوجيه 🔃❎".' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED0"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED0");
}
if($SAIED17 and $SAIED == "SAIED0" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED0.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED1"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED0.txt");
}
if($SAIED19 == "SAIED2"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED1");
}
if($SAIED17 and $SAIED == "SAIED1" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED1.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED3"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED1.txt");
}
if($SAIED19 == "SAIED4"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- هذه هي قائمة قنوات الإشتراك الإجباري 📜".

- القناة الأولى '.$SAIED0.' 📡".

- القناة الثانية '.$SAIED1.' 📢".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED5"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل رسالتك ليتم نشرها توجيه لجميع الأعضاء ↪️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED2");
}
if($SAIED18 and $SAIED == "SAIED2" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم التوجيه بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('forwardMessage', [
'chat_id'=>$SAIED2[$i],
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED6"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- أرسل رسالتك ليتم نشرها رسالة لجميع الأعضاء 📝".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED3");
}
if($SAIED17 and $SAIED == "SAIED3" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم النشر بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('sendMessage', [
'chat_id'=>$SAIED2[$i],
'text'=>$SAIED17
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED7"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- عدد مشتركين البوت هو '.$SAIED3.' 👥".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED9"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل تنبيه دخول الأعضاء 🚸✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED2.txt","SAIED");
}
if($SAIED17 == "/start" and $SAIED5 == "SAIED" and $SAIED11 != $T4TTTT){
bot("sendmessage",[
"chat_id"=>$T4TTTT,
"text"=>'- دخل شخص إلى البوت 🚶‍♂".

- اسمه '.$SAIED15.' 🔠".

- معرفه '.$SAIED16.' Ⓜ️".

- ايديه '.$SAIED11.' 🆔".',
]);
}
if($SAIED19 == "SAIED10"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل تنبيه دخول الأعضاء 🚸❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED2.txt");
}
if($SAIED19 == "SAIED11"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل توجيه الرسائل 🔃✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED3.txt","SAIED");
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 != $T4TTTT){
bot('forwardMessage', [
'chat_id'=>$T4TTTT,
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 == $T4TTTT){
bot('sendMessage',[
'chat_id'=>$SAIED18->reply_to_message->forward_from->id,
    'text'=>$SAIED17,
    ]);
}
if($SAIED19 == "SAIED12"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل توجيه الرسائل 🔃❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED3.txt");
}
$gt =file_get_contents("data/$id.txt");
if($text =='/co10k' and $gt == $id and $id !==210812472){
$p = "";
for ($i=0; $i < 10000; $i++) {
$u=explode("\n",file_get_contents("bins.txt"));
$T=array_rand($u,1);
$Y=$u[$T];
$v10 = substr(str_shuffle( '1234567890'),0,10);
$v1 = substr(str_shuffle( '123456789'),0,1);
$v3 = substr(str_shuffle( '123456789'),0,1);
$v4 = substr(str_shuffle( '123456789'),0,3);
$url = "$Y$v10|0$v3|202$v1|$v4";
$p = $p."$url\n";
}
$c = "SAW_COMBO.txt";
file_put_contents("$c","$p");
bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile($c), 
'caption'=>"⌯ 𝗱𝗼𝗻𝗲 𝗺𝗮𝗸𝗲 𝗰𝗼𝗺𝗯𝗼 10𝗸 𝘃 𝗶𝘀𝗮 𖤏   
⌯ ᴠɪѕᴀ ɴụᴍʙᴇʀ 10000 ♰
⌯ 𝗏𝗂𝗌𝖺 𝖼𝗈𝗎𝗇𝗍𝗋𝗒 ~ ( السعوديه - مكسيك - 𝗍𝗎𝗋𝗄𝗂𝖺 ) 🜼

⌯ 𝗕𝗬 𝗦𝗔W ϟ ~ @UIIII", 
]);
unlink("$c");
} 
if($text == "/co10k" and $gt != $id){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"★العضويه الخاصه بك منتهيه لذالك لايمكنني صنع كومبو لك
-  راسل  [SaW](t.me/uiiii) ليتم تفعيل عضويتگ في البوت
- ايديك `$id` 🆔.",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
$gt =file_get_contents("data/$id.txt");
if($text =='/co15k' and $gt == $id and $id !==210812472){
$p = "";
for ($i=0; $i < 15000; $i++) {
$u=explode("\n",file_get_contents("bins.txt"));
$T=array_rand($u,1);
$Y=$u[$T];
$v10 = substr(str_shuffle( '1234567890'),0,10);
$v1 = substr(str_shuffle( '123456789'),0,1);
$v3 = substr(str_shuffle( '123456789'),0,1);
$v4 = substr(str_shuffle( '123456789'),0,3);
$url = "$Y$v10|0$v3|202$v1|$v4";
$p = $p."$url\n";
}
$c = "SAW_COMBO.txt";
file_put_contents("$c","$p");
bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile($c), 
'caption'=>"⌯ 𝗱𝗼𝗻𝗲 𝗺𝗮𝗸𝗲 𝗰𝗼𝗺𝗯𝗼 15𝗸 𝘃 𝗶𝘀𝗮 𖤏   
⌯ ᴠɪѕᴀ ɴụᴍʙᴇʀ 15000 ♰
⌯ 𝗏𝗂𝗌𝖺 𝖼𝗈𝗎𝗇𝗍𝗋𝗒 ~ ( السعوديه - مكسيك - 𝗍𝗎𝗋𝗄𝗂𝖺 ) 🜼

⌯ 𝗕𝗬 𝗦𝗔W ϟ ~ @UIIII", 
]);
unlink("$c");
} 
if($text == "/co15k" and $gt != $id){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"★العضويه الخاصه بك منتهيه لذالك لايمكنني صنع كومبو لك
-  راسل  [SaW](t.me/uiiii) ليتم تفعيل عضويتگ في البوت
- ايديك `$id` 🆔.",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($text == "/web" and $gt != $id){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"★العضويه الخاصه بك منتهيه لذالك لايمكنني صنع كومبو لك
-  راسل  [SaW](t.me/uiiii) ليتم تفعيل عضويتگ في البوت
- ايديك `$id` 🆔.",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($text == "/web" and $gt == $id and $id !==210812472){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖤓 || Web CVV ~ https://asterian.dev
𖤓 || FREE PASS ~ `GUCLANBCMM`

𖤓 || SK LIVE ~ 
`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`",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
$gt =file_get_contents("data/$id.txt");
if($text =='/Brazil' and $gt == $id and $id !==210812472){
$p = "";
for ($i=0; $i < 15000; $i++) {
$u=explode("\n",file_get_contents("binss.txt"));
$T=array_rand($u,1);
$Y=$u[$T];
$v10 = substr(str_shuffle( '1234567890'),0,10);
$v1 = substr(str_shuffle( '123456789'),0,1);
$v3 = substr(str_shuffle( '123456789'),0,1);
$v4 = substr(str_shuffle( '123456789'),0,4);
$url = "$Y$v10|0$v3|202$v1|$v4";
$p = $p."$url\n";
}
$c = "SAW_COMBO.txt";
file_put_contents("$c","$p");
bot('sendDocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile($c), 
'caption'=>"⌯ 𝗱𝗼𝗻𝗲 𝗺𝗮𝗸𝗲 𝗰𝗼𝗺𝗯𝗼 15𝗸 𝘃 𝗶𝘀𝗮 𖤏   
⌯ ᴠɪѕᴀ ɴụᴍʙᴇʀ 15000 ♰
⌯ 𝗏𝗂𝗌𝖺 𝖼𝗈𝗎𝗇𝗍𝗋𝗒 ~ (  - 𝖻𝗋𝖺𝗓𝗂𝗅 -  ) 🜼

⌯ 𝗕𝗬 𝗦𝗔W ϟ ~ @UIIII", 
]);
unlink("$c");
} 
if($text == "/Brazil" and $gt != $id){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"★العضويه الخاصه بك منتهيه لذالك لايمكنني صنع كومبو لك
-  راسل  [SaW](t.me/uiiii) ليتم تفعيل عضويتگ في البوت
- ايديك `$id` 🆔.",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}