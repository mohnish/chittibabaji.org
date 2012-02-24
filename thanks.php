<?php
$to = "info@chittibabaji.org"; // this is  the email address on which we will recive feedback from visitors.
$subject = "Feed back / Enquiry.."; // Replace with suitable subject

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$country = $_POST['country'];
$message = $_POST['message'];

$headers = "From: " . $_POST['email'] . "\r\n";
$headers .= "Reply-To: " . $_POST['email'] . "\r\n";
$headers .= "Return-Path: " .$_POST['email'] . "\r\n";

$body = "Name : ".$name."\n\n"."Email : ".$email."\n\n"."Phone : ".$phone."\n\n"."Address : ".$address."\n\n"."Enquiry / Feedback : ".$message;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>:: -- Welcome to Sadguru Chittibabaji --- ::</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
	background-color: #000000;
}
-->
</style>
<link href="images/css/fontstyles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #EFA911}
-->
</style>
</head>

<body>
<table width="779" border="0" align="center" cellpadding="0" cellspacing="0" background="images/bg_tem.gif">
  <tr>
    <td width="30" valign="top">&nbsp;</td>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="15%" valign="top"><img src="images/logo.gif" width="113" height="131" alt="" /></td>
            <td width="85%" valign="top"><img src="images/toptext.gif" width="602" height="131" alt="" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="74%" valign="top"><img src="images/banner.jpg" width="535" height="254" alt="" /></td>
            <td width="26%" valign="middle"><img src="images/button.gif" alt="" width="180" height="222" border="0" usemap="#Map" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="51" valign="middle" class="redsub"><p><strong><em>Contact Us </em></strong></p></td>
      </tr>
      <tr>
        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="518" height="467" valign="top"><p align="justify" class="login">&nbsp;</p>
              <p class="redsub">Thanks</p>
              <p><span class="fontbanner">
                <?php 
								
									if(mail($to,$subject,$body,$headers,'-f info@chittibabaji.org')) { 
											echo "Thank you for your interest. We will get back to shortly...";
									}
									else
									{
									echo "Sorry. we are unable to process your request.";
									}
							?>
              </span><span class="redsub">For contact us ,we will contact you later </span></p></td>
            <td width="20" valign="top">&nbsp;</td>
            <td width="181" valign="top"><table width="181" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="top"><img src="images/box_01.jpg" width="10" height="11" /></td>
                <td width="160" valign="top"><img src="images/box_02.jpg" width="160" height="11" /></td>
                <td valign="top"><img src="images/box_03.jpg" width="10" height="11" /></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#9B7335"><img src="images/box_04.jpg" width="10" height="233" /></td>
                <td valign="top" bgcolor="#9B7335"><table width="160" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><h2 class="supp">Support Us </h2></td>
                    </tr>
                    <tr>
                      <td height="159" valign="top"><p align="justify" class="bodycopy">The only source of income for worship, maintenance, Annadana and  construction work is, donations from devotees,their friends and their  acquaintances.&nbsp; After several deliberations the management has decided  to request and appeal to all for donations and framed a set of <a href="support_us.html">guidelines</a>.  </p>
                        <p align="justify" class="bodycopy">Dear  viewer your contribution to the cause of the Ashram will go a  long way in helping the Ashram, in enhancing your prosperity and providing  internal peace and tranquility and would also bring you and your loved ones,  blessing of Babaji.</p>
                        <p align="justify" class="bodycopy">Now you can also Donate Online using your Credit Card </p></td>
                    </tr>
                </table></td>
                <td valign="top" bgcolor="#9B7335"><img src="images/box_06.jpg" width="10" height="233" /></td>
              </tr>
              <tr>
                <td valign="top"><img src="images/box_07.jpg" width="10" height="10" /></td>
                <td width="160" valign="top"><img src="images/box_08.jpg" width="160" height="10" /></td>
                <td valign="top"><img src="images/box_09.jpg" width="10" height="10" /></td>
              </tr>
            </table>
              <br />
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                
                <tr>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><img src="images/box_01.jpg" width="10" height="11" /></td>
                      <td bgcolor="#9B7335"><img src="images/box_02.jpg" /></td>
                      <td><img src="images/box_03.jpg" /></td>
                    </tr>
                    <tr>
                      <td bgcolor="#9B7335">&nbsp;</td>
                      <td height="55" valign="top" bgcolor="#9B7335" class="bodycopy style1"><p>Experience &amp; Evolve<br />
                              <span class="bodycopy">Can one find solace in a materialistic world and yet lead a spiritual path?The answer is YES!</span><br />
                              <a href="../ChittiBabaji/Corrections/INVOLVE &amp; EVOLVE-5-04-09.pdf">More&gt;&gt;</a><br />
                              <br />
                      </p></td>
                      <td bgcolor="#9B7335">&nbsp;</td>
                    </tr>
                    <tr>
                      <td><img src="images/box_07.jpg" width="10" height="10" /></td>
                      <td bgcolor="#9B7335"><img src="images/box_08.jpg" /></td>
                      <td><img src="images/box_09.jpg" /></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top" class="login"><a href="index_new.html">Home</a> | <a href="bio.html">Bio</a> | <a href="baba.html">Babu</a> | <a href="mysticism.html">Mysticim</a> | <a href="practice.html">Practice</a> | <a href="samasthanam.html">Samasthanam</a><a href="temple.html"><br />
          The Temple</a> | <a href="the_sthupas.html">The Sthupas</a> | <a href="annadana.html">Annadana</a> | <a href="gosala.html">Gosala</a> | <a href="support_us.html">Support Us</a> | <a href="contact_us.html">Contact Us</a> </td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top" class="help-text"><div align="center">Copyright &copy; 2009 Sadguru Chittibabji. All Rights Reserved. <br />
          </div></td>
      </tr>
    </table></td>
    <td width="30" valign="top">&nbsp;</td>
  </tr>
</table>


<map name="Map" id="Map"><area shape="rect" coords="26,11,80,29" href="index_new.html" />
<area shape="rect" coords="27,48,65,64" href="bio.html" />
<area shape="rect" coords="28,83,73,101" href="baba.html" />
<area shape="rect" coords="27,118,109,137" href="mysticism.html" />
<area shape="rect" coords="26,156,93,172" href="practice.html" />
<area shape="rect" coords="28,190,144,207" href="samasthanam.html" />
</map>
<map name="Map2" id="Map2"><area shape="rect" coords="28,35,77,51" href="index.html" />
<area shape="rect" coords="95,34,127,51" href="bio.html" />
<area shape="rect" coords="164,35,208,51" href="baba.html" />
<area shape="rect" coords="228,34,298,52" href="mysticim.html" />
<area shape="rect" coords="320,35,382,50" href="practice.html" />
<area shape="rect" coords="400,35,512,53" href="samasthanam.html" />
</map></body>
</html>