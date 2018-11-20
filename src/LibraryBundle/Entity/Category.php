<?php

namespace LibraryBundle\Entity;

/**
 * Category
 */
class Category
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $id;


    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Category
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
