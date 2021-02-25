<?php
    use OOP\Director;
    use OOP\Programmer;
    use OOP\Tester;
    use OOP\Render;
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Company</title>
</head>
<body>
    <?php
    $director = new Director('Steve', 'minecraftsteve@director.com', '45');
    $director->addLocation('Danija');

    $programmer = new Programmer('Bob', 'boblol@programmer.com');
    $programmer->addLocation('Olandija');
    $programmer->setSalary(2045);

    $tester = new Tester('Mark', 'markjobs@tester.com');
    $tester->addLocation('Italija');
    $tester->setSalary(1782);
    $tester->addTask('Clear search history');
    $tester->addTask('Test new web page');
   

    
    Render::PrintInfo($director->getInfo());
    echo '<br>';
    Render::PrintInfo($programmer->getInfo());
    echo '<br>';
    Render::PrintInfo($tester->getInfo());
    ?>
</body>
</html>