<?php
//if(isset($_POST['btn']))
/*{*/
    $i = 0;
    //$url = $_POST['checkURL'];
    //echo $url."<br/>";
    $btn = $_REQUEST['btn'];
    /*$pattern= '/(\ )?((https:|http:)?\/\/)?(www\.)?([a-zA-Z0-9]+\.?)(host|com|ucp\.edu\.pk)/';*/
    $pattern = '/([a-zA-Z0-9]+\.?)(host|com|ucp\.edu\.pk)/';
    $domain = parse_url($btn, PHP_URL_HOST);
    print_r($domain);
    if(parse_url($btn, PHP_URL_HOST)) {
        $i++;
            //echo $match[1].$match[2]."<br/>";
        echo "  <tr>
                <td>$i</td>
                <td>$domain</td>
                <td align=\"center\"><font color=\"#FF0000\">More info</font></a></td>
                </tr>";

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
