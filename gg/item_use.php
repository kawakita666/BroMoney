<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once "includes/jail_check.php";
logincheck();
echo "$style";
$username=$_SESSION['username'];
$item_id=strip_tags($_GET['item_id']);
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
$item=mysql_query("SELECT * FROM items WHERE id='$item_id'");
$num=mysql_num_rows($item);
$item_fetch=mysql_fetch_object($item);
if ($num == "0"){
echo "This item does not belong to you!";
exit();
}


if ($item_fetch->item == "Bandanna"){ $a="No"; $b="No"; $c="Yes"; $d="Yes"; $e="Yes";   }
elseif ($item_fetch->item == "Black boots"){ $a="No"; $b="No"; $c="Yes"; $d="Yes"; $e="Yes";   }
elseif ($item_fetch->item == "Bling"){ $a="No"; $b="No"; $c="Yes"; $d="Yes"; $e="Yes";   }
elseif ($item_fetch->item == "Chain"){ $a="No"; $b="No"; $c="Yes"; $d="Yes"; $e="Yes";   }
elseif ($item_fetch->item == "Yellow Pages"){ $a="No"; $b="No"; $c="Yes"; $d="No"; $e="Yes";   }
elseif ($item_fetch->item == "Tracking Device"){ $a="No"; $b="No"; $c="Yes"; $d="No"; $e="Yes";   }
elseif ($item_fetch->item == "Cheese Burger"){ $a="Yes"; $b="No"; $c="Yes"; $d="No"; $e="Yes";   }
elseif ($item_fetch->item == "Fries"){ $a="Yes"; $b="No"; $c="Yes"; $d="No"; $e="Yes";   }
elseif ($item_fetch->item == "Chicken Nuggets"){ $a="Yes"; $b="No"; $c="Yes"; $d="No"; $e="Yes";   }
elseif ($item_fetch->item == "Crisps"){ $a="Yes"; $b="No"; $c="Yes"; $d="No"; $e="Yes";   }
elseif ($item_fetch->item == "Curry"){ $a="Yes"; $b="No"; $c="Yes"; $d="No"; $e="Yes";   }
elseif ($item_fetch->item == "Fish"){ $a="Yes"; $b="No"; $c="Yes"; $d="No"; $e="Yes";   }


if (strip_tags($_POST['option'])){

$option=strip_tags($_POST['option']);
if ($option == "Eat" && $a == "Yes"){
if ($item_fetch->item == "Cheese Burger"){ $new= rand(10,20);  }
elseif ($item_fetch->item == "Fries"){   $new= rand(5,10);  }
elseif ($item_fetch->item == "Chicken Nuggets"){ $new= rand(5,10);   }
elseif ($item_fetch->item == "Crisps"){ $new= rand(1,6);     }
elseif ($item_fetch->item == "Curry"){ $new= rand(30,50);    }
elseif ($item_fetch->item == "Fish"){ $new= rand(50,100);   }

$new_energy=$fetch->energy + $new;
if ($new_energy >= "100"){
mysql_query("UPDATE users SET energy='100' WHERE username='$username'");
echo "You ate the item.";
mysql_query("DELETE FROM items WHERE id='$item_id'");
}else{
mysql_query("UPDATE users SET energy='$new_energy' WHERE username='$username'");
echo "You ate the item!";
mysql_query("DELETE FROM items WHERE id='$item_id'");
echo "<BODY onLoad=\"javascript:window.close();\">";
}

}
elseif ($option == "Throw" && $c == "Yes"){
echo "You threw away the item!";
mysql_query("DELETE FROM items WHERE id='$item_id'");
echo "<BODY onLoad=\"javascript:window.close();\">";
}elseif ($option == "Wear" && $d == "Yes"){
echo "You put on the item!";
if ($item_fetch->item == "Black boots"){ $type="Footware";    }
elseif ($item_fetch->item == "Bling"){  $type="Jewl";  }
elseif ($item_fetch->item == "Chain"){ $type="Jewl";  }
if ($type="Jewl"){
mysql_query("UPDATE user_info SET jewl='$item_fetch->item' WHERE username='$username'");
}elseif ($type="Footware"){
mysql_query("UPDATE user_info SET foot='$item_fetch->item' WHERE username='$username'");
}

}elseif ($option == "Sell" && $e == "Yes"){
echo "You sold the item!";
$for=$item_fetch->value;
$new_money=$fetch->money + $for;
mysql_query("UPDATE users SET money='$new_money' WHERE username='$username'");
mysql_query("DELETE FROM items WHERE id='$item_id'");

echo "<BODY onLoad=\"javascript:window.close();\">";
}
}


?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="">
  <table width="65%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>">
    <tr> 
      <td height=23 background="<?php echo"$gradient"; ?>"> <center class="TableHeading">
          <strong>Item information</strong> </center></td>
    </tr>
    <tr> 
      <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr> 
            <td width="51%">Item</td>
            <td colspan="2"><?php echo "$item_fetch->item"; ?></td>
          </tr>
          <tr> 
            <td>Value</td>
            <td colspan="2"><?php echo "£".makecomma($item_fetch->value).""; ?></td>
          </tr>
          <tr> 
            <td>Action</td>
            <td width="19%"><select name="option">
                <?php if ($a == "Yes"){ echo " <option value='Eat'>Eat</option>"; }
             if ($b == "Yes"){ echo " <option value='Drink'>Drink</option>"; }
              if ($c == "Yes"){ echo "<option value='Throw'>Throw away</option>"; }
              if ($d == "Yes"){ echo "<option value='Wear'>Wear</option>"; }
              if ($e == "Yes"){ echo "<option value='Sell'>Sell</option>"; } ?>
              </select></td>
            <td width="30%"><input type="submit" name="Submit" value="Submit"></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>
