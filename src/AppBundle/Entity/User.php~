<?php

	namespace AppBundle\Entity;

       // use FOS\UserBundle\Model\User as BaseUser;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;
//use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Common\Collections\ArrayCollection; 

        /**
         * @ORM\Entity
         * @ORM\Table(name="fos_user")
         */
        class User extends BaseUser
        {
            /**
             * @ORM\Id
             * @ORM\Column(type="integer")
             * @ORM\GeneratedValue(strategy="AUTO")
             */
            protected $id;

   /**
     * @Assert\Regex(
     *  pattern="/^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/",
     *  message="Enter only Alphabet."
     * )
     * @ORM\Column(name="fullname", type="string", length=100,nullable=false )t
     */
    protected $fullname;


  /**
     * @var string $mobileNo
     *
     *
     * @ORM\Column(name="mobileNo", type="string", length=45)
	 *
     * @Assert\Length(
     *      min = "10",
     *      max = "10",
     *      minMessage = "Enter a valid 10 digit mobile number",
     *      maxMessage = "Enter a valid 10 digit mobile number"
     * )
     *
     *
     * @Assert\Regex(
     *     pattern="^(0|[1-9][0-9]*)$^",
     *     match=true,
     *     message="phone no can contain only digits"
     * )
     * 
     */
    protected $mobileNo;

    /**
     * @Assert\Regex(
     *  pattern="/^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/",
     *  message="Enter only Alfabetas."
     * )
     * @ORM\Column(name="country", type="string", length=100,nullable=false )
     */
    protected $country;

   /**
     * @Assert\Regex(
     *  pattern="^(0|[1-9][0-9]*)$^",
     *  message="Enter CountryCode in correct formate."
     * )
     * @ORM\Column(name="countryCode", type="string", length=3,nullable=false )
     */
    protected $countryCode;


   /**
 * @ORM\ManyToMany(targetEntity="Groups", inversedBy="users")
 * @ORM\JoinTable(name="fos_user_user_group",
 *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
 *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
 * )
 */
protected $groups;





            public function __construct()
            {
                parent::__construct();
                // your own logic
            }


 public function setEmail($email)
    {
        parent::setUsername($email);
        return parent::setEmail($email);
    }

    public function setEmailCanonical($emailCanonical)
    {
        parent::setUsernameCanonical($emailCanonical);
        return parent::setEmailCanonical($emailCanonical);
    }
        

    /**
     * Set mobileNo
     *
     * @param string $mobileNo
     * @return User
     */
    public function setMobileNo($mobileNo)
    {
        $this->mobileNo = $mobileNo;

        return $this;
    }

    /**
     * Get mobileNo
     *
     * @return string 
     */
    public function getMobileNo()
    {
        return $this->mobileNo;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     * @return User
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string 
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }



    /**
     * Set fullname
     *
     * @param string $fullname
     * @return User
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

 /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set group
     *
     * @param GroupInterface $group
     * @return User
     */
    public function setGroup(GroupInterface $group = null)
    {
        $this->addGroup($group);

        return $this;
    }
    
        public function hasRole($role)
    {
        return parent::hasRole($role);
    }


    public function getGroups()
    {
        return $this->groups ?: $this->groups = new ArrayCollection();
    }


    /**
     * Sets the user groups
     *
     * @param array $groups
     */
    public function setGroups($groups)
    {
        foreach ($groups as $group) {
            $this->addGroup($group);
        }
    }


}
