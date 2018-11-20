<?php

namespace LibraryBundle\Entity;

/**
 * BookAuthor
 */
class BookAuthor
{
    private $bookId;

    /**
     * @var int
     */
    private $authorId;

    /**
     * Set bookId.
     *
     * @param int $bookId
     *
     * @return BookAuthor
     */
    public function setBookId($bookId)
    {
        $this->bookId = $bookId;

        return $this;
    }

    /**
     * Get bookId.
     *
     * @return int
     */
    public function getBookId()
    {
        return $this->bookId;
    }

    /**
     * Set authorId.
     *
     * @param int $authorId
     *
     * @return BookAuthor
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
    /**
     * @var int
     */
    private $id;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
