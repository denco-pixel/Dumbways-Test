<?php
function drawLine($line)
{
    for ($i = 0; $i < $line; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;";
        }
        echo "*<br/>";
    }
}

drawLine(10);
