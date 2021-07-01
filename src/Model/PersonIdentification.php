<?php


namespace App\Model;

/**
 * Class PersonIdentification
 * @package App\Model
 */
class PersonIdentification
{
    private $ID;
    private $Name;
    private $SSN;
    private $DOB;

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     * @return PersonIdentification
     */
    public function setID($ID)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     * @return PersonIdentification
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSSN()
    {
        return $this->SSN;
    }

    /**
     * @param mixed $SSN
     * @return PersonIdentification
     */
    public function setSSN($SSN)
    {
        $this->SSN = $SSN;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDOB()
    {
        return $this->DOB;
    }

    /**
     * @param mixed $DOB
     * @return PersonIdentification
     */
    public function setDOB($DOB)
    {
        $this->DOB = $DOB;
        return $this;
    }
}