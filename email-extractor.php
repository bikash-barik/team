<?php
//$the_url = isset($_REQUEST['url']) ? htmlspecialchars($_REQUEST['url']) : '';
?>




<?php
if (isset($_REQUEST['url']) && !empty($_REQUEST['url'])) {
  // fetch data from specified url
  $text = file_get_contents($_REQUEST['url']);
}
// parse emails
if (!empty($text)) {
  $res = preg_match_all(
    "/[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}/i",
    $text,
    $matches
  );

  if ($res) {
    foreach(array_unique($matches[0]) as $email) {
        
        if (strpos($email, '.png') !== false) {}
        else if (strpos($email, '.jpeg') !== false) {}
        else if (strpos($email, '.jpg') !== false) {}
        else if (strpos($email, '.gif') !== false) {}
        else if (strpos($email, '@domain') !== false) {}
        else if (strpos($email, '@email') !== false) {}
        else if (strpos($email, '@example') !== false) {}
        else if (strpos($email, 'getsentry') !== false) {}
        else if (strpos($email, '@sentry') !== false) {}
        else if (strpos($email, 'hello@') !== false) {}
        else if (strpos($email, 'buy@') !== false) {}
        else if (strpos($email, 'pay@') !== false) {}
        else if (strpos($email, 'payment@') !== false) {}
        else if (strpos($email, 'donate@') !== false) {}
        else if (strpos($email, 'abuse@') !== false) {}
        else if (strpos($email, 'feedback@') !== false) {}
        else if (strpos($email, 'mail@') !== false) {}
        else if (strpos($email, 'office@') !== false) {}
        else if (strpos($email, 'job@') !== false) {}
        else if (strpos($email, 'career@') !== false) {}
        else if (strpos($email, 'hr@') !== false) {}
        else if (strpos($email, 'privacy') !== false) {}
        else if (strpos($email, 'noreply@') !== false) {}
        else if (strpos($email, 'no_reply') !== false) {}
        else if (strpos($email, 'no.reply') !== false) {}
        else if (strpos($email, 'resume') !== false) {}
        else if (strpos($email, 'health') !== false) {}
        else if (strpos($email, 'ask@') !== false) {}
        else if (strpos($email, 'question@') !== false) {}
        else if (strpos($email, 'booking@') !== false) {}
        else if (strpos($email, 'name@') !== false) {}
        else if (strpos($email, 'yourname@') !== false) {}
        else if (strpos($email, 'you@') !== false) {}
        else if (strpos($email, 'your') !== false) {}
        else if (strpos($email, 'myname@') !== false) {}
        else if (strpos($email, 'me@') !== false) {}
        else if (strpos($email, 'prestashop') !== false) {}
        else if (strpos($email, 'customerservice@') !== false) {}
        else if (strpos($email, 'xxx') !== false) {}
        else if (strpos($email, 'president') !== false) {}
        else if (strpos($email, 'team@') !== false) {}
        else if (strpos($email, 'order@') !== false) {}
        else if (strpos($email, 'username@') !== false) {}
        else if (strpos($email, 'inquiry@') !== false) {}
        else if (strpos($email, 'enquiry@') !== false) {}
        else if (strpos($email, 'inquiries@') !== false) {}
        else if (strpos($email, 'enquiries@') !== false) {}
        else if (strpos($email, 'feedback@') !== false) {}
        else if (strpos($email, 'unsubscribe@') !== false) {}
        else if (strpos($email, 'license@') !== false) {}
        else if (strpos($email, 'rating@') !== false) {}
        else if (strpos($email, 'youremail@') !== false) {}
        else if (strpos($email, 'webmaster@') !== false) {}
        else if (strpos($email, 'admission@') !== false) {}
        else if (strpos($email, 'admissions@') !== false) {}
        else if (strpos($email, 'editor@') !== false) {}
        else if (strpos($email, '@mydomain.com') !== false) {}
		else if (strpos($email, 'user@') !== false) {}
		else if (strpos($email, 'john@doe.com') !== false) {}
		else if (strpos($email, 'john@smith.com') !== false) {}
		else if (strpos($email, 'johndoe@gmail.com') !== false) {}
		else if (strpos($email, 'john@company.com') !== false) {}
		else if (strpos($email, 'john@website.com') !== false) {}
		else if (strpos($email, 'test@test.com') !== false) {}
		else if (strpos($email, 'customercare@') !== false) {}
		else if (strpos($email, 'cs@') !== false) {}
		else if (strpos($email, 'CustomerService@') !== false) {}
		else if (strpos($email, 'websales@') !== false) {}
		else if (strpos($email, '@2x-40e435a559.webp') !== false) {}
		else if (strpos($email, 'online@') !== false) {}
		else if (strpos($email, 'ada@chalktv.com') !== false) {}
		else if (strpos($email, '@php.net') !== false) {}
		else if (strpos($email, 'submissions@') !== false) {}
		else if (strpos($email, 'sample@') !== false) {}
		else if (strpos($email, 'Quotes@') !== false) {}
		else if (strpos($email, 'invoice@') !== false) {}
		else if (strpos($email, 'media@') !== false) {}
		else if (strpos($email, 'invoice@') !== false) {}
		else if (strpos($email, 'about.com') !== false) {}
		else if (strpos($email, '.svg') !== false) {}
		else if (strpos($email, 'text@text.com') !== false) {}
		else if (strpos($email, 'press@') !== false) {}
		else if (strpos($email, '@mywebsite.com') !== false) {}
		else if (strpos($email, '@2x.webp') !== false) {}
		else if (strpos($email, '@forbes.com') !== false) {}
		else if (strpos($email, 'do-not-reply@') !== false) {}
		else if (strpos($email, 'help@') !== false) {}
		else if (strpos($email, '.JPG') !== false) {}
		else if (strpos($email, 'Remove@') !== false) {}
		else if (strpos($email, '.css') !== false) {}
		else if (strpos($email, 'Helpdesk@') !== false) {}
		else if (strpos($email, 'abc@') !== false) {}
		else if (strpos($email, 'careers@') !== false) {}
		else if (strpos($email, '@pages.plusgoogle.com') !== false) {}
		else if (strpos($email, 'somebody@') !== false) {}
		else if (strpos($email, 'careers@') !== false) {}
		else if (strpos($email, 'someone@') !== false) {}
		else if (strpos($email, 'Someone@') !== false) {}
		else if (strpos($email, 'billing@') !== false) {}
		else if (strpos($email, 'website@') !== false) {}
		else if (strpos($email, 'customerservices@') !== false) {}
		else if (strpos($email, 'projects@') !== false) {}
		else if (strpos($email, 'web@') !== false) {}
		else if (strpos($email, 'accounts@') !== false) {}
		else if (strpos($email, 'account@') !== false) {}
		else if (strpos($email, 'store@') !== false) {}
		else if (strpos($email, 'xyz@') !== false) {}
		else if (strpos($email, 'example@gmail.com') !== false) {}
		else if (strpos($email, 'example@mail.com') !== false) {}
		else if (strpos($email, 'EXAMPLE@EMAIL.COM') !== false) {}
		else if (strpos($email, 'jobs@') !== false) {}
		else if (strpos($email, 'job@') !== false) {}
		else if (strpos($email, 'orders@') !== false) {}
		else if (strpos($email, 'order@') !== false) {}
		else if (strpos($email, 'test@user.com') !== false) {}
		else if (strpos($email, 'test@gmail.com') !== false) {}
		else if (strpos($email, 'USER@EMAIL.COM') !== false) {}
		else if (strpos($email, 'example@') !== false) {}
		else if (strpos($email, 'Example@') !== false) {}
		else if (strpos($email, '@xyz.com') !== false) {}
		else if (strpos($email, 'john.doe@gmail.com') !== false) {}
		else if (strpos($email, 'EXAMPLE@GMAIL.COM') !== false) {}
		else if (strpos($email, 'joe@gmail.com') !== false) {}
		else if (strpos($email, 'soft') !== false) {}
        else if (strpos($email, 'host') !== false) {}
        else if (strpos($email, 'webdesign') !== false) {}
        else if (strpos($email, 'web-design') !== false) {}
        else if (strpos($email, 'graphics') !== false) {}
        else if (strpos($email, 'editor') !== false) {}
        else if (strpos($email, 'news') !== false) {}
        else if (strpos($email, 'media') !== false) {}
        else if (strpos($email, 'magazine') !== false) {}
        else if (strpos($email, '.webp') !== false) {}
        else{
      echo $email."&nbsp";
        }
    }
  }
  else {
    echo "No emails found.";
  }
}

?>