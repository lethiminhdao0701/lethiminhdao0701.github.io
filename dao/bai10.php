<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bài 10. Trang làm quen với xử lý Form</title>
</head>

<body bgcolor="<?php echo $_GET['mauchon']; ?>">
	<form action="bai10.php" method="get">
<table width="49%" border="0" align="center" cellpadding="0" cellspacing="0">
  <caption>
    trang xử lí form
  </caption>
  <tbody>
    <tr>
      <td width="25%">bạn hãy nhập thông số màu nền</td>
      <td width="70%"><label for="mauchon"></label>
      <input name="mauchon" type="text" id="mauchon" value="<?php echo $_GET['mauchon']; ?>">
      Cấu trúc thông số màu: #RBG<br />
		(ví dụ: #FF0000)</td>
      <td width="5%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="submit" type="submit" id="submit" formaction="bai10.php" formmethod="GET" value="Xác nhận"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
		</form>
</body>
</html>