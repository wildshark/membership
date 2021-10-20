<?php



function cmbo_region($regions){

    foreach($regions as $i){
        echo "<option value='{$i['region_id']}'>{$i['region_title']}</option>";
    }
}

?>