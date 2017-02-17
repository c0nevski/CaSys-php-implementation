<?php require 'getinfo.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>CaSys test payment gateway</title>
</head>
<body>
	<form name="cpayForm" method="post" action="https://www.cpay.com.mk/client/Page/default.aspx?xml_id=/mk-MK/.loginToPay/.simple/" id="cpayForm" target="cPayFrame">
		<input id='AmountToPay' name='AmountToPay' value='<?php echo $AmountToPay; ?>' type='hidden' />
		<input id='PayToMerchant' name='PayToMerchant' value='<?php echo $PayToMerchant; ?>' type='hidden' />
		<input id='MerchantName' name='MerchantName' value='<?php echo $MerchantName; ?>' type='hidden' />
		<input id='AmountCurrency' name='AmountCurrency' value='<?php echo $AmountCurrency; ?>' type='hidden' />
		<input id='Details1' name='Details1' value='<?php echo $Details1; ?>' type='hidden' />
		<input id='Details2' name='Details2' value='<?php echo $Details2; ?>' type='hidden' />
		<input id='PaymentOKURL' size='10' name='PaymentOKURL' value='<?php echo $PaymentOKURL; ?>' type='hidden' />
		<input id='PaymentFailURL' size='10' name='PaymentFailURL' value='<?php echo $PaymentFailURL; ?>' type='hidden' />
		<input id='CheckSumHeader' name='CheckSumHeader' value='<?php echo $CheckSumHeader; ?>' type='hidden' />
		<input id='CheckSum' name='CheckSum' value='<?php echo $CheckSum; ?>' type='hidden' />
		<input id='FirstName' size='10' name='FirstName' value='<?php echo $FirstName; ?>' type='hidden' />
		<input id='LastName' size='10' name='LastName' value='<?php echo $LastName; ?>' type='hidden' />
		<input id='Address' size='10' name='Address' value='<?php echo $Address; ?>' type='hidden' />
		<input id='City' size='10' name='City' value='<?php echo $City; ?>' type='hidden' />
		<input id='Zip' size='10' name='Zip' value='<?php echo $Zip; ?>' type='hidden' />
		<input id='Telephone' size='10' name='Telephone' value='<?php echo $Telephone; ?>' type='hidden' />
		<input id='Email' size='10' name='Email' value='<?php echo $Email; ?>' type='hidden' />
		<input id='OriginalAmount' name='OriginalAmount' value='<?php echo $OriginalAmount; ?>' type='hidden' />
		<input class='button' value='Плати' type='submit'/>
	</form>

	<iframe src="simple.html" style="width:521px;height:500px;border:medium none;" name="cPayFrame" id="cPayFrame" frameborder="0" scrolling="auto"></iframe>
</body>
</html>