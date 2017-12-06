<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>VMUUI.COM 劲驰网络管理中心</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="/Web/System/Public/css/index.css" rel="stylesheet" type="text/css" />
		<script  src="/Public/jquery.js"></script>
		<script  src="/Web/System/Public/js/Index.js"></script>
	</head>
	<body scroll="no" style="overflow:hidden">
		<img src="/Web/System/Public/images/Login/bg0.jpg" class="logbg" />
		<div class="log_head"><a href="www.vmuui.com" target="_blank"><img src="/Web/System/Public/images/Login/logo.png" /></a></div>
		<div class="login_img"><img src="/Web/System/Public/images/Login/fengcao.png" /></div>
		<div class="login_div">

		<table class="tab_login">
          <tbody>
          <tr>
            <td class="rs"><font color=white>管理员姓名：</font></td>
            <td colspan="2">
                <input id="user_name" class="input1"  type="text"/>
            </td></tr>
          <tr>
            <td  class="rs"><font color=white>管理员密码：</font></td>
            <td colspan="2">
             <input id="user_pwd" class="input1" type="password"/>
             </td></tr>
          <tr >
            <td align="right" class="rs"><font color=white>验 证 码 ：</font></td>
            <td style="width:72px;">
                <input id="vcode" class="input1" type="text"  style="width:50px" maxlength="4" />
             </td>
            <td><img src="<?php echo U('/System/Index/verify');?>" style="width:88px; height:30px" id="codeimg" title="点击刷新" /></td>
          </tr>
          <tr>
			<td align=right colSpan=3 style="height:25px">
            <div class="msg" id="msg"></div>
            </td></tr>
            <td colspan="3" style="text-align:center">
            	 <a class="btnlog" id="Button1" ></a> 
             </td></tr>
          <tr>
            </tbody></table>
          </div>
      <div class="footer2">
              <p>Copyright by <a href="http://www.vmuui.com" target="_blank" style="color:#888; text-decoration:underline; font-family:'宋体'; font-weight:bold; letter-spacing:1px">劲驰网络</a></p>
          </div>
  </body>
  </html>