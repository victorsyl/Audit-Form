<?php
   require("../test1.php");
   ?>
<html>
    <title></title>
    <head></head>
    <body>
<table align="center" border="0" cellspacing="3" cellpadding="4" border-collapse="collapse">
    <tr>
        <th><img src="supaloaf.png" style="width:80px;height:80px;"></th></tr>
        <tr><th>MINI BAKERIES (N) LTD</th></tr>
        <tr><th>BAKERY VISIT CHECKLIST</th></tr>
</table>

<table align="center" border="1" cellspacing="3" cellpadding="4">
    <tr>
        <th>#</th>
        <th align="left">Branch Name:  </th><td><?php echo $row["branchname"]; ?>'</td>
        <th align="left">Branch Mananger</th>
        <th>4A</th>
    </tr>
    <tr>
        <td>1</td>
        <td bgcolor="#cccccc" align="center" colspan="2">A1 ex<i>amp</i>le <a href="http://www.tcpdf.org">link</a> column span. One two tree four five six seven eight nine ten.<br />line after br<br /><small>small text</small> normal <sub>subscript</sub> normal <sup>superscript</sup> normal  bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla<ol><li>first<ol><li>sublist</li><li>sublist</li></ol></li><li>second</li></ol><small color="#FF0000" bgcolor="#FFFF00">small small small small small small small small small small small small small small small small small small small small</small></td>
        <td>4B</td>
    </tr>
    <tr>
        <td>'.$subtable.'</td>
        <td bgcolor="#0000FF" color="yellow" align="center">A2 € &euro; &#8364; &amp; è &egrave;<br/>A2 € &euro; &#8364; &amp; è &egrave;</td>
        <td bgcolor="#FFFF00" align="left"><font color="#FF0000">Red</font> Yellow BG</td>
        <td>4C</td>
    </tr>
    <tr>
        <td>1A</td>
        <td rowspan="2" colspan="2" bgcolor="#FFFFCC">2AA<br />2AB<br />2AC</td>
        <td bgcolor="#FF0000">4D</td>
    </tr>
    <tr>
        <td>1B</td>
        <td>4E</td>
    </tr>
    <tr>
        <td>1C</td>
        <td>2C</td>
        <td>3C</td>
        <td>4F</td>
    </tr>
</table>
    </body>
</html>