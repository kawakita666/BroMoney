<?php
/***************************************************************************
 *                         lang_bbcode.php [Thai]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   Translation: SuperToy_nc < SuperToy_nc@yahoo.com > 
 *
 *   $Id: lang_bbcode.php,v 1.3.2.2 2002/12/18 15:40:20 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
 
/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\";
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","�йӡ����ҹ");
$faq[] = array("BBCode �������?", "BBCode �����ǹ˹�觢ͧ���� HTML. �س����ö�� BBCode 㹢�ͤ������س�����. ��Фس����ö¡��ԡ����� BBCode ����Т�ͤ������Ẻ�������͡��ͤ���. BBCode ���ٻẺ������Ѻ���� HTML, ��ͨ�������ͧ���� [ ��� ] ������������ ᷹ &lt; ��� &gt; ����� HTML. �������ö�Ǻ�������ʴ�����ա���. �س����ö��������� BBCode ���Ѻ��ͤ����ͧ�س�¤�ԡ��������觴�ҹ����ͧ��͡��ͤ���.");

$faq[] = array("--","��èѴ�ٻẺ�ͧ����ѡ��");
$faq[] = array("�����ҧ���˹�, ������§ ��Тմ����� �����ҧ��", "BBCode �Ъ������ҧ�ٻẺ���Ѻ����ѡ�� �ѧ���: <ul><li>��Ҩзӵ��˹� ��������ͤ����áŧ������ <b>[b][/b]</b>, ��: <br /><br /><b>[b]</b>���ʴ�<b>[/b]</b><br /><br />������� <b>���ʴ�</b></li><li>��ҨТմ����� ���� <b>[u][/u]</b>, ��:<br /><br /><b>[u]</b>��س���ʴ��<b>[/u]</b><br /><br />������ <u>��س���ʴ��</u></li><li>��Ҩзӵ�����§ ����� <b>[i][/i]</b>, ��:<br /><br /><b>[i]</b>������§<b>[/i]</b><br /><br />������� <i>������§</i></li></ul>");
$faq[] = array("������¹�����͢�Ҵ����ѡ�����ҧ��", "�������¹�����͢�Ҵ�ͧ����ѡ�� �Т������Ѻ����� browser <ul><li>��Ҩ�����¹�յ���ѡ�� ��������� <b>[color=][/color]</b>. ��觤س����ö����¹���� (�� red, blue, yellow, ���) �������Ţ�ҹ 6 ����, �� #FFFFFF, #000000. ¡������ҧ��, �����ҧ����ѡ����ᴧ:<br /><br /><b>[color=red]</b>���ʴ�!<b>[/color]</b><br /><br />����<br /><br /><b>[color=#FF0000]</b>���ʴ�!<b>[/color]</b><br /><br />��駤�������� <span style=\"color:red\">���ʴ�!</span></li><li>�������¹��Ҵ����ѡ�á������������ <b>[size=][/size]</b>. ��Ҵ�ͧ����ѡ�è���˹��� pixels, ������鹷�� 1 (�������ҡ���ͧ������) ���֧ 29 (�˭����ش). ������ҧ��:<br /><br /><b>[size=9]</b>��Ҵ���<b>[/size]</b><br /><br />������� <span style=\"font-size:9px\">��Ҵ���</span><br /><br />���<br /><br /><b>[size=24]</b>��Ҵ�˭�!<b>[/size]</b><br /><br />������� <span style=\"font-size:24px\">��Ҵ�˭�!</span></li></ul>");
$faq[] = array("�������������ѹ���������?", "����, �蹵�ͧ����鹤����Ӥѭ �س�Ҩ��:<br /><br /><b>[size=18][color=red][b]</b>��С��!<b>[/b][/color][/size]</b><br /><br />������� <span style=\"color:red;font-size:18px\"><b>��С��!</b></span><br /><br />����й�����������ѡɳо�����ҡ���Թ� ��Ше�ͧ�Դ�����������º���´���. ������ҧ����繵�����ҧ���Դ (���лԴ����觼Դ�ӴѺ):<br /><br /><b>[b][u]</b>������ҧ���Դ<b>[/b][/u]</b><br /><br /> ��ͧ�����:<br /><br /><b>[b][u]</b>������ҧ���١<b>[/u][/b]</b>");

$faq[] = array("--","��ͤ�����ҧ�ԧ ��е���ѡ�ä������ҧ�����");
$faq[] = array("��ͤ�����ҧ�ԧ㹡�õͺ", "�� 2 Ẻ.<ul><li>Ẻ�ժ�����Ңͧ. ��ͤ�����ҧ�ԧ���������㹤���� <b>[quote=\"\"][/quote]</b>. �� �س��ͧ��þ�����ͤ�����ҧ�ԧ�ͧ Mr. Blobby:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>��ͤ�����ҧ�ԧ�ͧ Mr. Blobby<b>[/quote]</b><br /><br />����͢�ͤ����١�ʴ� ���դ���� Mr. Blobby wrote: ��˹��. �������Ҥس<b>��ͧ</b>���ѹ˹� \"\" �������ͷء����.</li><li>Ẻ����ժ�����Ңͧ. �������� <b>[quote][/quote]</b>. ����������� Quote: ��˹�Ң�ͤ�����ҧ�ԧ.</li></ul>");
$faq[] = array("����ѡ�ä������ҧ�����", "��Ҥس��ͧ��þ�����ͤ�������ͧ��ä������ҧ�����͹ �� �绡յ���. �س����ö������ͤ������ŧ������ҧ����� <b>[code][/code]</b> �� <br /><br /><b>[code]</b>echo \"This is some code\";<b>[/code]</b><br /><br />������������������� <b>[code][/code]</b> (�����) ����ѧ�������.");

$faq[] = array("--","�Ը����ҧ��¡��");
$faq[] = array("������ҧ��¡�÷������������Ţ�ӴѺ", "BBCode ����ö���ҧ��¡���� 2 Ẻ ��� Ẻ����������Ţ�ӴѺ ���Ẻ�������Ţ�ӴѺ. ����͹�Ѻ����� HTML. ������¡�è�������ͧ����ǧ�����˹��. ������ <b>[list][/list]</b> ��й�˹��������¡�ô��¤���� <b>[*]</b>. �蹵�ͧ����ʴ���¡���շ��ͺ �о����ѧ���:<br /><br /><b>[list]</b><br /><b>[*]</b>��ᴧ<br /><b>[*]</b>�չ���Թ<br /><b>[*]</b>������ͧ<br /><b>[/list]</b><br /><br />�������:<ul><li>��ᴧ</li><li>�չ���Թ</li><li>������ͧ</li></ul>");
$faq[] = array("������ҧ��¡�÷���������Ţ�ӴѺ", "Ẻ����ͧ��� �������Ţ�ӴѺ��˹��. ������ <b>[list=1][/list]</b> �������§�ӴѺ����Ţ, <b>[list=a][/list]</b> �������§����ӴѺ����ѡ��. ����դ���觹�˹��������¡�ä�� <b>[*]</b>. ��:<br /><br /><b>[list=1]</b><br /><b>[*]</b>价����ҹ<br /><b>[*]</b>���ͤ���������<br /><b>[*]</b>�������ͤ���������ѧ<br /><b>[/list]</b><br /><br />����Ŵѧ���:<ol type=\"1\"><li>价����ҹ</li><li>���ͤ���������</li><li>�������ͤ���������ѧ</li></ol> �����Ẻ���§�������ѡ�� ��:<br /><br /><b>[list=a]</b><br /><b>[*]</b>�ӵͺ�á<br /><b>[*]</b>�ӵͺ����ͧ<br /><b>[*]</b>�ӵͺ������<br /><b>[/list]</b><br /><br />�������<ol type=\"a\"><li>�ӵͺ�á</li><li>�ӵͺ����ͧ</li><li>�ӵͺ������</li></ol>");

$faq[] = array("--", "������ҧ��ͤ���������§ (links)");
$faq[] = array("���������§��������", "BBCode ����ö�Ӣ�ͤ���������§�������Ը�, Uniform Resource Indicators ���ͪ�����ͤ�� URLs.<ul><li>�Ը��á��������� <b>[url=][/url]</b>, ��觢�ͤ�����ѧ����ͧ������ҡѺ = ���繵��˹� URL. ������ҧ��:<br /><br /><b>[url=http://www.phpbb.com/]</b>��ԡ����� ����价�� phpBB<b>[/url]</b><br /><br />����Ŵѧ��� <a href=\"http://www.phpbb.com/\" target=\"_blank\">��ԡ����� ����价�� phpBB</a> ��觨��Դ˹������������ѵ��ѵ�.</li><li>���Ҥس��ͧ�������ͤ���������§��鹶١�ʴ��͡����� ���������:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />�������, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>����� phpBB �տѧ��ѹ����ɤ�� <i>Magic Links</i> �������ö�ŧ��ͤ���������§���ѵ��ѵ� �·��س����ͧ����� http:// ���. �蹤س�������� www.phpbb.com ŧ㹢�ͤ����ͧ�س ������� <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> ���ѵ��ѵ�.</li><li>��觨�����Ѻ���� e-mail ��:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />������� <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> ���ͤس��������� no.one@domain.adr ��ж١�ŧ������ѵ��ѵ�.</li></ul>�ء����觢ͧ BBCode �س����ö�������Ѻ URLs �� �� <b>[img][/img]</b> (����Ǣ�ͶѴ�), <b>[b][/b]</b>, ���. ��е�ͧ�Դ����觵���ӴѺ���١��ͧ, ��:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />�繤���觷��<u>�Դ</u> ��Шз�����ͤ����ͧ�س�١ź���.");

$faq[] = array("--", "����ʴ��ٻ�Ҿ㹢�ͤ����������ͺ");
$faq[] = array("����á�ٻ�Ҿŧ㹢�ͤ���", "BBCode ����ö�á�ٻ�Ҿŧ㹢�ͤ���. �� 2 ���ҧ����Ӥѭ���; �ҧ�����ͺ�ٻ�Ҿ�����㹢�ͤ��� ����ٻ�Ҿ��鹨е�ͧ����� internet (��������������ͧ����������ͧ�س, ¡�����Ҥس�����ѹ��� server). �ѧ��鹤���� phpBB �֧������������ٻ�Ҿŧ internet. �س�е�ͧ�����˹� URL �ͧ�ٻ�Ҿ��������ҧ����� <b>[img][/img]</b> ��:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />���ҧ�����������ҧ�� ��Ҥس����ö�������Ѻ����觢�ͤ���������§ <b>[url][/url]</b>, ��<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />�������:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "����");
$faq[] = array("��������觢ͧ����ͧ���������?", "����Ѻ phpBB 2.0 �س���ѧ�������ö������觢ͧ����ͧŧ��� ���Ҩ���ա��������� BBCode ��ǹ������ phpBB ��蹵���");

//
// This ends the BBCode guide entries
//

?>