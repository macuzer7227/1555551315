<?php
require_once('cPanel.php');

//Create a cPanel object using SSL
$cPanel = new cPanel('hoppedolancomputers.com', 'hunterhd', 'ginger7227', 2083, true);

echo 'Hosting Package: ' . $cPanel->getHostingPackage() . '<br>';
echo 'Disk Space Used: ' . $cPanel->getSpaceUsed() . ' MB<br>';
echo 'MySQL Space Used: ' . $cPanel->getMySQLSpaceUsed() . ' MB<br>';
echo 'Bandwidth Used: ' . $cPanel->getBandwidthUsed() . ' MB<br>';
echo 'Contact Email: ' . $cPanel->getContactEmail() . ' <br>';
echo 'Free Space: ' . $cPanel->getFreeSpace() . ' MB<br><br>';

echo 'Domains:<ul>';
$domains = $cPanel->listDomains();
foreach($domains as $domain)
{
  echo '<li>' . $domain . '</li>';
  $domain = $cPanel->openDomain($domain);
  echo '<ul>';
  echo '<li>Default Address: ' . $domain->getDefaultAddress();
  echo '</ul>';
}
echo '</ul>';

echo 'Mail Accounts:<ul>';
$accounts = $cPanel->listMailAccounts();
foreach($accounts as $account)
{
  echo '<li>' . $account . '</li>';
  echo '<ul>';
  $account = $cPanel->openEmailAccount($account);
  echo '<li>Quota: ' . $account->getQuota() . '</li>';
  echo '</ul>';
}
echo '</ul>';

echo 'FTP Accounts:<ul>';
$accounts = $cPanel->listFTPAccounts();
foreach($accounts as $account)
{
  echo '<li>' . $account . '</li>';
  $account = $cPanel->openFTPAccount($account);
  echo '<ul>';
  echo '<li>Quota: ' . $account->getQuota() . '</li>';
  echo '</ul>';
}
echo '</ul>';

echo 'Databases:<ul>';
$databases = $cPanel->listDatabases();
foreach($databases as $database)
{
  echo '<li>' . $database . '</li>';
}
echo '</ul>';

echo 'DB Users:<ul>';
$dbusers = $cPanel->listDBUsers();
foreach($dbusers as $dbuser)
{
  echo '<li>' . $dbuser . '</li>';
}
echo '</ul>';

echo 'Redirects:<ul>';
$redirects = $cPanel->listRedirects();
foreach($redirects as $redirect)
{
  echo '<li>' . $redirect . '</li>';
}
echo '</ul>';
?>