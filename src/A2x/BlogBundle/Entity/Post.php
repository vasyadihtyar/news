<?php

namespace A2x\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** 
  * @ORM\Entity(repositoryClass="PostRepository")
  * @ORM\Table(name="a2x_blog_post")
  * @ORM\HasLifecycleCallbacks
  */
class Post
{
	/**
	* @ORM\Id()
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/	
	protected $id;	
	/**
	* @ORM\Column(type="string", length=128)
	*/
	protected $title;	
	/**
	* @ORM\Column(type="text", nullable=true)
	*/
	protected $text;
	
	public function __toString()
	{
		return $this->title;
	}

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
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function settitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function gettitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Post
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }
}