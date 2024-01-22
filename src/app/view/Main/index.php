<?php

use app\model\MessageModel;
use app\services\MessageServices;

$messageServices = new MessageServices(new MessageModel());
$messages = $messageServices->getMessages();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test-1</title>
</head>
<body>

<form action="<?php echo CONTROLLER_LOCAL . "/messageController.php" ?>" method="POST">
    <input type="text" name="name">
    <br>
    <textarea style="margin-top: 5px;" name="content"></textarea>
    <br>
    <input type="submit" value="Send">
</form>



<?php
foreach ($messages as $message) {

    echo <<<_MESSAGE
        <div>
            <h3>{$message['name']}</h3>
            <p>{$message['content']}</p>
            <hr>
        </div>
    _MESSAGE;

}
?>

</body>
</html>