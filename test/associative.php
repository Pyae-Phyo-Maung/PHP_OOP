<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Address</td>
        </tr>
       
            <?php
                $assoArray = [
                    ['name'=>'pyae','age'=>23,'address'=>'yangon'],
                    ['name'=>'phyo','age'=> 23,'address'=>'mandalay'],
                    ['name'=>'maung','age'=>44,'address'=>'pyinoolwin']
                ];
                foreach( $assoArray as $key=>$arr):
                    $key += 1;
                    echo "<tr>
                            <td>{$key}</td>
                            <td>{$arr['name']}</td>
                            <td>{$arr['address']}</td>
                            </tr>";
                endforeach
            ?>

    </table>
   
</body>
</html>