<html>
<title>welcome</title>
<body>
<h1>welcome to db</h1>
<table border="1">
<tr><th>AccountName</th><th>AccountNumber</th></tr>
<?php foreach($user as $users)?>
<tr><td><?php echo $users['firstname'];?></td><td><?php echo $users['Accountnumber'];?></td></tr>
</table>
</body>
</html>