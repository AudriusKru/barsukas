<?php

echo '5. Uždavinio atsakymas:';
echo '<br>';


<style>
  .kvadratas {
    white-space: nowrap;
  }
  .kvadratas span{
    padding: 3px;
  }
</style>

echo "<div class='kvadratas' id='kvadratas'>";
for ($i = 0 ; $i < $krastine ; $i++)
{
    for ($j = 0 ; $j < $krastine ; $j++)
    {
        if($i==$j){
            echo '<span class="red">* </span>';
        }
        elseif($i+$j == $krastine-1){
            echo '<span class="red">* </span>';
        }
        else {
         echo '<span>* </span>';
        }
    }
    echo '<br>';
}

echo '</div>';

echo '<hr>';