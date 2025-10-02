<?php

for($i = 0 ; $i < count($ROW) ; $i++){?>
    <div>
        <div><?=$ROW[$i]['name'];?></div>
        <div><?=$ROW[$i]['family'];?></div>
        <div><?=$ROW[$i]['phonNumber'];?></div>
    </div>
<?php
}