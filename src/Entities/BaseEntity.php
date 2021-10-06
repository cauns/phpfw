<?php

namespace MyFrame\Entities;

use Doctrine\ORM\Mapping as ORM;

class BaseEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    public $id;
    /**
     * @ORM\Column(name="title", type="string", length="191", nullable=true)
     */
    public $title;
    /**
     * @ORM\Column(name="status", type="boolean", nullable=true, options={"default": 1})
     */
    public $status;
    /**
     * @ORM\Column(name="publish_at", type="datetime", nullable=true)
     */
    public $publish_at;
    /**
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    public $expires_at;
    /**
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    public $created_at;
    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    public $updated_at;

    public function __construct()
    {
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $publish_at
     */
    public function setPublishAt($publish_at): void
    {
        $this->publish_at = $publish_at;
    }

    /**
     * @return mixed
     */
    public function getPublishAt()
    {
        return $this->publish_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $expires_at
     */
    public function setExpiresAt($expires_at): void
    {
        $this->expires_at = $expires_at;
    }

    /**
     * @return mixed
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
}