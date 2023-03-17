<?php

namespace App\Model;

use Core\Model;
use DateTimeImmutable;

class Users extends Model
{
    
    private int $id;

    private string $lastname;

    private string $firstname;

    private string $email;
    
    private string $address;

    private string $zip_code;

    private string $city;

    private string $date_birthday;

    private string $role;

    private string $phone;

    private DateTimeImmutable $date_create;

    private bool $active;

    protected $table = 'users';

    public function __construct()
    {   
        $this->setDate_create(new DateTimeImmutable());
    }
    

    /**
     * Get the value of id
     */ 
    public function getId(): ?int
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
     * Get the value of address
     */ 
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress(string $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of zip_code
     */ 
    public function getZip_code(): ?string
    {
        return $this->zip_code;
    }

    /**
     * Set the value of zip_code
     *
     * @return  self
     */ 
    public function setZip_code(string $zip_code)
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity(string $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of date_birthday
     */ 
    public function getDate_birthday(): ?string
    {
        return $this->date_birthday;
    }

    /**
     * Set the value of date_birthday
     *
     * @return  self
     */ 
    public function setDate_birthday(string $date_birthday)
    {
        $this->date_birthday = $date_birthday;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole(string $role)
    {
        $this->role = $role;

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
    public function setDate_create($date_create)
    {
        $this->date_create = $date_create;

        return $this;
    }

    /**
     * Get the value of active
     */ 
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Set the value of active
     *
     * @return  self
     */ 
    public function setActive(bool $active)
    {
        $this->active = $active;

        return $this;
    }
}