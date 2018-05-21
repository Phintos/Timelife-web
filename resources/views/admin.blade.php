<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<div id="pop-div"></div>
<?= Lava::render('GeoChart', 'Popularity', 'pop-div') ?>


<div id="chart-div"></div>
<?= Lava::render('PieChart', 'IMDB', 'chart-div') ?>

<div id="temps_div"></div>
<?= Lava::render('DonutChart', 'IMDB', 'temps_div') ?>

</body>
</html>