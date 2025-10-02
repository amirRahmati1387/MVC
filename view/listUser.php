<?php


for($i = 0 ; $i < count($ROW) ; $i++){?>
    <div>
        <div><?=$ROW[$i]['name'];?></div>
        <div><?=$ROW[$i]['family'];?></div>
        <div><?=$ROW[$i]['phonNumber'];?></div>
    </div>
    <a href = "http://localhost/MVC/deleteUser/<?=$ROW[$i]['id'];?>">Delete</a>
    <a href = "http://localhost/MVC/editeUser/<?=$ROW[$i]['id'];?>">Update</a>
    <a href = "http://localhost/MVC/singleUser/<?=$ROW[$i]['id'];?>">Single</a>
<?php
}