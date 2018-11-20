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
   * @var \Doctrine\Common\Collections\Collection|BookAuthor[]
   *
   * @ORM\ManyToMany(targetEntity="BookAuthor", inversedBy="books")
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

   protected $bookAuthors;

   public function __construct()
    {
        $this->bookAuthors = new ArrayCollection();
    }


    /**
     * @param Author $author
     */
    public function addAuthor(Author $author)
    {
        if ( $this->bookAuthors && $this->bookAuthors->contains($author) ) {
            return;
        }
        $this->bookAuthors->add($author);
        //$author->addBook($this);
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
     * @ORM\Column(name="price", type="decimal", precision=2, scale=0)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer")
     */
    private $categoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="author_id", type="integer")
     */
    private $authorId;


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
     * Set categoryId.
     *
     * @param int $categoryId
     *
     * @return Book
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId.
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set authorId.
     *
     * @param int $authorId
     *
     * @return Book
     */
    // public function setAuthorId($authorId)
    // {
    //     $this->authorId = $authorId;
    //
    //     return $this;
    // }

    /**
     * Get authorId.
     *
     * @return int
     */
    // public function getAuthorId()
    // {
    //     return $this->authorId;
    // }

    /**
     * Add bookAuthor.
     *
     * @param \LibraryBundle\Entity\BookAuthor $bookAuthor
     *
     * @return Book
     */
    public function addBookAuthor(\LibraryBundle\Entity\BookAuthor $bookAuthor)
    {
        $this->bookAuthors[] = $bookAuthor;

        return $this;
    }

    /**
     * Remove bookAuthor.
     *
     * @param \LibraryBundle\Entity\BookAuthor $bookAuthor
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeBookAuthor(\LibraryBundle\Entity\BookAuthor $bookAuthor)
    {
        return $this->bookAuthors->removeElement($bookAuthor);
    }

    /**
     * Get bookAuthors.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBookAuthors()
    {
        return $this->bookAuthors;
    }

    /**
     * Set authorId.
     *
     * @param int $authorId
     *
     * @return Book
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId.
     *
     * @return int
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }
}
