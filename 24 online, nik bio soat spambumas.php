
<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$time=date("H:i",strtotime("5 hour"));
$MadelineProto->account->updateProfile(['first_name'=>"$time ᴅᴇᴠᴇʟᴏᴘᴇʀы",'about'=>"👨‍💻Bizning Aniq Vaqt:⌚️ $time "]);
$Bool = $MadelineProto->account->updateStatus(['offline' => false ]);
?>

