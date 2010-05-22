<?php
class cPanelEmailMgr
{
	private $cpUser;
	private $cpPassword;
	private $cpDomain;
	private $cpSkin;
	private $protocol;
	private $port;
	public function __construct($args)
	{
		$this->cpUser = 		$args['cpUser'];
		$this->cpPassword = 	$args['cpPassword'];
		$this->cpDomain = 		$args['cpDomain'];
		$this->cpSkin = 		$args['cpSkin'];
		$this->protocol = 		($args['useHttps'] == true) ? 'https' : 'http';
		$this->port = 			($args['useHttps'] == true) ? '2083' : '2082';
	}
	function createAccount($accountName, $accountPassword, $accountQuota)
	{
		$url = $this->protocol . '://' 
			. $this->cpUser . ':' 
			. $this->cpPassword . '@'
			. $this->cpDomain . ':'
			. $this->port . '/frontend/'
			. $this->cpSkin . '/mail/doaddpop.html?'
			. 'quota='. $quota 
			. '&email=' . $accountName
			. '&domain=' . $this->cpDomain
			. '&password=' . $accountPassword;
		
		if($f != fopen($url,"r")) 
		{
			return false;
		}

		while (!feof ($f))
		{
			$line = fgets ($f, 1024);
			
			//  Does this account already exist?
			if (ereg ("already exists!", $line, $out))  
			{
				//  this email account already exists
				return false;
			}
		}
		
		fclose($f);
		return true;
	}
	public function deleteAccount($accountName, $accountDomain)
	{
		$url = $this->protocol . '://' 
			. $this->cpUser . ':' 
			. $this->cpPassword . '@'
			. $this->cpDomain . ':'
			. $this->port . '/frontend/'
			. $this->cpSkin . '/mail/realdelpop.html?'
			. '&email=' . $accountName
			. '&domain=' . $accountDomain;

		if($f != @fopen($url)) 
		{
			return false;
		}
		
		fclose($f);
		return true;
	}
}
?>