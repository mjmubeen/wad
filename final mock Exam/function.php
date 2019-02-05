<?php
//if(isset($_POST['btn']))
/*{*/
    //$url = $_POST['checkURL'];
    //echo $url."<br/>";
    $btn = $_REQUEST['btn'];
    /*$pattern= '/(\ )?((https:|http:)?\/\/)?(www\.)?([a-zA-Z0-9]+\.?)(host|com|ucp\.edu\.pk)/';*/
    $pattern = '/([a-zA-Z0-9]+\.?)(host|com|ucp\.edu\.pk)/';
    $i = 0;
    if(preg_match_all($pattern, $btn, $matches, PREG_SET_ORDER)) {
        foreach($matches as $match) {
        $i++;
            //echo $match[1].$match[2]."<br/>";
        echo "  <tr>
                <td>$i</td>
                <td>$match[1].$match[2]</td>
                <td align=\"center\"><font color=\"#FF0000\">More info</font></a></td>
                </tr>";

        }
    }
   /* echo '<script type="text/javascript">',
    'f();',
    '</script>'
    ;*/
/*}*/
/*else
{
    echo "Error";
}*/
