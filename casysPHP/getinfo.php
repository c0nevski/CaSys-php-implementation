<?php

$globalpay = 5; // cena sto treba da se plati
$arr2 = "0001/0003/00010"; // unikatni redni broevi na narackata so koi podocna ke se vrsi detekcija dali e plateno ili ne
$mult = $globalpay * 100; // cenata sto treba da se plati pomnozena so 100
$customer_name = "Ime";  // Ime na kupuvacot - podocna ke se zema dinamicno od forma ili od profil
$customer_lastname = "Prezime"; // Prezime na kupuvacot - podocna ke se zema dinamicno od forma ili od profil
$customer_address = "Ulica"; // Adresa na kupuvacot - podocna ke se zema dinamicno od forma ili od profil
$customer_town = "Grad"; // Grad na kupuvacot - podocna ke se zema dinamicno od forma ili od profil
$customer_zip = "postenski-broj"; // Postenski broj - podocna ke se zema dinamicno od forma ili od profil
$customer_tel = "tel-broj"; // Tel broj na kupuvacot - podocna ke se zema dinamicno od forma ili od profil
$customer_email = "email-adresa"; // email na kupuvacot - podocna ke se zema dinamicno od forma ili od profil

//++++++++++++++++++++++++++++++++//
// CheckSum & CheckSumHeader     //
// cekor 1                      //
//+++++++++++++++++++++++++++++//

$AmountToPay = $mult; // cenata sto treba da se plati pomnozena so 100
$PayToMerchant = "Tuka obicno imate dadeno 10 cifren broj - ova e fiksno od caSys"; // ova ne treba da se menuva, ova e dadeno od CaSys
$MerchantName = "Imeto na Merchantot - isto vi e dadeno od casys i e nepromenlivo"; // ova ne treba da se menuva, ova e dadeno od CaSys
$AmountCurrency = "MKD"; // valuta vo koja se vrsi plakjanjeto
$Details1 = "Detali za porackata-produktot"; // Moze da se napise sto bilo - go pisuva vo casys formata za plakanje kako detali 1
$Details2 = $arr2; // unikatni redni broevi
$PaymentOKURL = "http://localhost/casysPHP/proverka.php?state=ok"; // strana kade formata kje prenasocuva koga plakjanjeto e uspeshno
$PaymentFailURL = "http://localhost/casysPHP/proverka.php?state=error"; // strana kade formata kje prenasocuva koga plakjanjeto e neuspeshno
$FirstName = $customer_name;
$LastName = $customer_lastname;
$Address = $customer_address;
$City = $customer_town;
$Zip = $customer_zip;
$Telephone = $customer_tel;
$Email = $customer_email;
$OriginalAmount = $globalpay; // cenata sto treba da se plati
$md5password = "TEST_PASS"; // obicno sekogas ostanuva isto, ova e dadeno od casys

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// cekor 2 - Vo ovie polinja se generira kolku karakteri sodrzi edno pole so zerofill na 3 brojki, primer "Skener" sodrzi 6 bukvi i se generira 006, ova kje bide potrebno podocna za generiranje na CheckSum i CheckSumHeader
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

$AmountToPay2 = sprintf("%03d", mb_strlen($AmountToPay, 'UTF-8')); //ova e za cenata da bide validna i kirilica i latinica
$PayToMerchant2 = sprintf("%03d", strlen($PayToMerchant));
$MerchantName2 = sprintf("%03d", strlen($MerchantName));
$AmountCurrency2 = sprintf("%03d", strlen($AmountCurrency));
$Details12 = sprintf("%03d", strlen($Details1));
$Details22 = sprintf("%03d", strlen($Details2));
$PaymentOKURL2 = sprintf("%03d", strlen($PaymentOKURL));
$PaymentFailURL2 = sprintf("%03d", strlen($PaymentFailURL));
$FirstName2 = sprintf("%03d", strlen($FirstName));
$LastName2 = sprintf("%03d", strlen($LastName));
$Address2 = sprintf("%03d", strlen($Address));
$City2 = sprintf("%03d", strlen($City));
$Zip2 = sprintf("%03d", strlen($Zip));
$Telephone2 = sprintf("%03d", strlen($Telephone));
$Email2 = sprintf("%03d", strlen($Email));
$OriginalAmount2 = sprintf("%03d", strlen($OriginalAmount));

//+++++++++++++++++++++++++++++++//
// cekor 3                      //
//+++++++++++++++++++++++++++++//

$CheckSumHeader = "16AmountToPay,PayToMerchant,MerchantName,AmountCurrency,Details1,Details2,PaymentOKURL,PaymentFailURL,FirstName,LastName,Address,City,Zip,Telephone,Email,OriginalAmount," . $AmountToPay2 . $PayToMerchant2 . $MerchantName2 . $AmountCurrency2 . $Details12 . $Details22 . $PaymentOKURL2 . $PaymentFailURL2 . $FirstName2 . $LastName2 . $Address2 . $City2 . $Zip2 . $Telephone2 . $Email2 . $OriginalAmount2;
$CheckSumHeader2 = $CheckSumHeader . $AmountToPay . $PayToMerchant . $MerchantName . $AmountCurrency . $Details1 . $Details2 . $PaymentOKURL . $PaymentFailURL . $FirstName . $LastName . $Address . $City . $Zip . $Telephone . $Email . $OriginalAmount . $md5password;
$CheckSum = md5($CheckSumHeader2);  //ova generira md5 od checkshumheader
$language = "mk-MK"; // ova go setira jazikot, moze da se napravi dinamicno da se setira od cookies

?>