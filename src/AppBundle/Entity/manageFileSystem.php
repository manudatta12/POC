<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * manageFileSystem
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class manageFileSystem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    
    
    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=100, nullable=true)
     */
    private $filename;
    
    /**
     * @var string
     *
     * @ORM\Column(name="filecontent", type="string", length=100, nullable=true)
     */
    private $filecontent;
    
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="postDate", type="datetime", nullable=false)
     */
    private $postDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="datetime", nullable=false)
     */
    private $updateDate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return promocodeBox
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set postDate
     *
     * @param \DateTime $postDate
     * @return promocodeBox
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * Get postDate
     *
     * @return \DateTime 
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return promocodeBox
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return manageFileSystem
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set filecontent
     *
     * @param string $filecontent
     * @return manageFileSystem
     */
    public function setFilecontent($filecontent)
    {
        $this->filecontent = $filecontent;

        return $this;
    }

    /**
     * Get filecontent
     *
     * @return string 
     */
    public function getFilecontent()
    {
        return $this->filecontent;
    }
}
