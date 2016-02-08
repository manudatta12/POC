<?php
namespace Finds\UserBundle\Security\Core\User;
 
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
use Symfony\Component\Security\Core\User\UserInterface;
 
class FOSUBUserProvider extends BaseClass
{
 
/**
* {@inheritDoc}
*/
public function connect(UserInterface $user, UserResponseInterface $response)

{
$property = $this->getProperty($response);

$username = $response->getUsername();

//on connect - get the access token and the user ID
$service = $response->getResourceOwner()->getName();

 
$setter = 'set'.ucfirst($service);

$setter_id = $setter.'Id';

$setter_token = $setter.'AccessToken';

 
//we "disconnect" previously connected users
if (null !== $previousUser = $this->userManager->findUserBy(array($property => $username))) {

$previousUser->$setter_id(null);

$previousUser->$setter_token(null);

$this->userManager->updateUser($previousUser);

}
 
//we connect current user

$user->$setter_id($username);

$user->$setter_token($response->getAccessToken());

 
$this->userManager->updateUser($user);

}
 
/**

* {@inheritdoc}
*/
public function loadUserByOAuthUserResponse(UserResponseInterface $response)

{
        $username = $response->getUsername();
        $fbUsername = $response->getRealName();
        $fbNickname = $response->getNickname();
        //echo $fbGender = $response->getResponse()->getFirstName();
        /*echo $fbNickname = $response->getBirthDate();*/
        $fbUserEmail= $response->getEmail();
//echo "<pre>";
//print_r($response->getResponse());
//print_r($response);
//echo "</pre>";
	$resArray = $response->getResponse();
	$fbPic =  $resArray['picture']['data']['url'];
	$fbName = $resArray['name'];
	$fbGender = $resArray['gender'];
	$fbLanguages = $resArray['languages']['0']['name'];
	$fbLocation = $resArray['location']['name'];
	$fbHometown = $resArray['hometown']['name'];
	$str = $fbPic.'-'.$fbName.'-'.$fbGender.'-'.$fbLanguages.'-'.$fbLocation.'-'.$fbHometown; 
//exit('ff');
$user = $this->userManager->findUserBy(array($this->getProperty($response) => $username));

//when the user is registrating
if (null === $user) {

$service = $response->getResourceOwner()->getName();

$setter = 'set'.ucfirst($service);

$setter_id = $setter.'Id';

$setter_token = $setter.'AccessToken';

// create new user here
$user = $this->userManager->createUser();

$user->$setter_id($username);

$user->$setter_token($response->getAccessToken());

//I have set all requested data with the user's username
//modify here with relevant data

//$user->setUsername($username);
//case to handle for blank username
if(preg_match('/\s/',$fbNickname)){
$no= rand(1,99999);
$fbNickname= $fbNickname.$no;
}
            $user->setUsername(str_replace(' ','',$fbNickname));
            $user->setName($fbUsername);
if(isset($fbUserEmail)){
$user->setEmail($response->getEmail($fbUserEmail));	
//exit('defined');
}else{	
$user->setEmail($username);
//exit('undef');
}
//$user->setEmail($username);
$user->setCity($fbLocation);
$user->setLocale($fbLanguages);
$user->setFacebookName($fbName);
$user->setGender($fbGender);
$user->setBiography($str);
$user->setPassword($username);
$user->setEnabled(true);

$this->userManager->updateUser($user);

return $user;
}

 
//if user exists - go with the HWIOAuth way
$user = parent::loadUserByOAuthUserResponse($response);

 
$serviceName = $response->getResourceOwner()->getName();

$setter = 'set' . ucfirst($serviceName) . 'AccessToken';

 
//update access token
$user->$setter($response->getAccessToken());

 
return $user;
}
 
}





