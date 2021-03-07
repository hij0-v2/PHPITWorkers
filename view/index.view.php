<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

use ITWorkersApp\Render;
use ITWorkersApp\Managers;
use ITWorkersApp\Programmers;
use ITWorkersApp\Testers;

$manager = new Managers('Romas', 'Folis', 'Design', 1300, 'Design Team Lead', 'Yes');
$manager->addComment('Very good team lead');
$programmer = new Programmers('Julius', 'Cesar', 'Design', 1000, 'Average', '2 Years');
$programmer->addComment('Still a rookie');
$tester = new Testers('Nida', 'Lee', 'Design', 1100, "Senior QA Tester", "Yes");
$tester->addComment("Very reliable tester");
?>

<table>
    <tr>
        <td style="text-align: center"><strong>Worker List</strong></td>
    </tr>
    <tr>
        <td><?php Render::Show($manager->showWorker()) ?></td>
    </tr>
    <tr>
        <td><?php Render::Show($programmer->showWorker()) ?></td>
    </tr>
    <tr>
        <td><?php Render::Show($tester->showWorker()) ?></td>
    </tr>
</table>
</body>
</html>


