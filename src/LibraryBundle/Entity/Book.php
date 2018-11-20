<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="LibraryBundle\Repository\BookRepository")
 */
class Book
{

  /**
   * @var \Doctrine\Common\Collections\Collection|Author[]
   *
   * @ORM\ManyToMany(targetEntity="Author", inversedBy="books")
   * @ORM\JoinTable(
   *  name="book_author",
   *  joinColumns={
   *      @ORM\JoinColumn(name="book_id", referencedColumnName="id")
   *  },
   *  inverseJoinColumns={
   *      @ORM\JoinColumn(name="author_id", referencedColumnName="id")
   *  }
   * )
   */

   protected $authors;

   public function __construct()
    {
        $this->authors = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn13", type="string", length=13, unique=true)
     */
    private $isbn13;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;


    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=2, scale=0)
     */
    private $price;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set isbn13.
     *
     * @param string $isbn13
     *
     * @return Book
     */
    public function setIsbn13($isbn13)
    {
        $this->isbn13 = $isbn13;

        return $this;
    }

    /**
     * Get isbn13.
     *
     * @return string
     */
    public function getIsbn13()
    {
        return $this->isbn13;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set price.
     *
     * @param string $price
     *
     * @return Book
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Add author.
     *
     * @param \LibraryBundle\Entity\Author $author
     *
     * @return Book
     */
    public function addAuthor(Author $author)
    {
        $this->authors[] = $author;

        return $this;
    }

    /**
     * Remove author.
     *
     * @param \LibraryBundle\Entity\Author $author
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAuthor(\LibraryBundle\Entity\Author $author)
    {
        return $this->authors->removeElement($author);
    }

    /**
     * Get authors.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

}
