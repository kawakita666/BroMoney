<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/in.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="77%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline bordercolor=black>
  <tr>
    <td class=header><div align="center">Bloodtown Villa</div></td>
  </tr>
  <tr bgcolor=black>
    <td class=tip><div align="center">Welcome to the Bloodtown Villa, here you can
        chat to other people</div></td>
  </tr>
  <tr bgcolor=black>
    <td height=1 colspan=3></td>
  </tr>
  <tr>
    <td>
      <form method=post target=ifr action=chatmsgs.php?action=chat>
        <div align="center">Message:
          <input type=text name=msg size=40 maxlength=200 onBlur=value='' onChange=focus()>
          [<a href="chat.php?p=chat">refresh</a>] </div>
        <tr>
            <td colspan=2 align=center>
      </form></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="18"><div align="center"><p><iframe src=chatmsgs.php width="700px" height="400px" name=ifr frameborder=0></iframe>
            </p>
          </div></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>