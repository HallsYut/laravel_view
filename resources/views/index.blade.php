<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Index</h1>
    <h3>ชื่อ : <?php echo $name ?> </h3>
    <h3>อายุ : {{ $age }} </h3>
    <h3>อีเมล์ : <?php echo $email ?> </h3>
    <h3>ตำแหน่ง : <?php echo $position ?> </h3>
    <h3>ผลไม้ที่ชอบ : <?php dd($fruits_faverite) ?> </h3>
</body>
</html>