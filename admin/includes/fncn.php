<?php
require("db_connect.php");

function getBranchname($bname)
{
    $array = array();
    $q = mysql_query("SELECT * FROM adminstaffing WHERE branchname = '.$bname'");
    while($r = mysql_fetch_assoc($q))
    {
        $array['id'] = $r['id'];
        $array['branchname'] = $r['branchname'];
        $array['branchmanager'] = $r['branchmanager'];
        $array['opsmanager'] = $r['opsmanager'];
        $array['TransactionDate'] = $r['TransactionDate'];
    }
    return array;
}

?>
