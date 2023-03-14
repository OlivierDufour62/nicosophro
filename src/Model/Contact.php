<?php

namespace App\Model;

use Core\Model;
use DateTimeImmutable;

class Contact extends Model
{
    
    private int $id;

    private string $lastname;

    private string $firstname;

    private string $email;

    private string $content;

    private string $phone;

    private DateTimeImmutable $date_create;

    private DateTimeImmutable $date_read;

    private bool $read;

    protected $table = 'contact';

    public function __construct()
    {   
        $this->setDate_create(new DateTimeImmutable());
        $this->setDate_read(new DateTimeImmutable());
    }
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent(string $content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone(string $phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of date_create
     */ 
    public function getDate_create(): ?DateTimeImmutable
    {
        return $this->date_create;
    }

    /**
     * Set the value of date_create
     *
     * @return  self
     */ 
    public function setDate_create(DateTimeImmutable $date_create)
    {
        $this->date_create = $date_create;

        return $this;
    }

    /**
     * Get the value of date_read
     */ 
    public function getDate_read(): ?DateTimeImmutable
    {
        return $this->date_read;
    }

    /**
     * Set the value of date_read
     *
     * @return  self
     */ 
    public function setDate_read(DateTimeImmutable $date_read)
    {
        $this->date_read = $date_read;

        return $this;
    }

    /**
     * Get the value of read
     */ 
    public function getRead(): ?bool
    {
        return $this->read;
    }

    /**
     * Set the value of read
     *
     * @return  self
     */ 
    public function setRead(bool $read)
    {
        $this->read = $read;

        return $this;
    }
}