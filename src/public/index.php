<?php

use app\dto\MessageDTO;
use public\MessageApp;
use public\Container;


require_once dirname(__DIR__) . "/config/init.php";

$app = (new Container())->get(MessageApp::class);
$controller = $app->getController();

$name = $_POST['name'] ?? '';
$content = $_POST['content'] ?? '';


if (emptyValue($name) && emptyValue($content)) {
    $controller->addMessage(new MessageDTO($name, $content));

    header('Location: /public/');
    exit;
}

$messages = $controller->getMessages();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Star Messages Sasay Kudasay ! )) </title>
</head>
<body>

<form action="/public/" method="POST">
    <input type="text" name="name" style="margin-bottom: 5px;">
    <br>
    <input type="text" name="content" style="margin-bottom: 5px;">
    <br>
    <input type="submit" name="send" value="Send">
</form>

<?php

foreach ($messages as $message) {
    echo <<<MESSAGE
        <div>
            <h3>{$message->getName()}</h3>
            <p>{$message->getContent()}</p>
        </div>
    MESSAGE;
}

?>

</body>
</html>
