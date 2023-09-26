<?php
for ($i = 1; $i < 11; $i++) {
    # code...
    echo "<select>";
    if ($i % 2) {
        echo "<option value='$i'>$i impair</option>";
    } else {
        echo "<option value='$i'>$i pair</option>";
    }
    echo "</select>";
}

?>