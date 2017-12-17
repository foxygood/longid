<?php

$id = 19933; // ваш ид ВК

echo longid($id);

function longid($uid) {
 if($uid > 0) return bcadd((4294967296 * rand(1, 20)), $uid); // беру любое натуральное число от 1 до 20
}

?>
