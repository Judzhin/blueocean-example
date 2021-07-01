<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
declare(strict_types=1);

namespace App\Model;

/**
 * Class PersonIdentification
 *
 * @package App\Model
 */
class PersonIdentification
{
    /** @var string */
    private string $ID;

    /** @var string */
    private string $Name;

    /** @var string */
    private string $SSN;

    /** @var string */
    private string $DOB;

    /**
     * @return string
     */
    public function getID(): string
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     * @return PersonIdentification
     */
    public function setID(string $ID): PersonIdentification
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return PersonIdentification
     */
    public function setName(string $Name): PersonIdentification
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSSN(): string
    {
        return $this->SSN;
    }

    /**
     * @param string $SSN
     * @return PersonIdentification
     */
    public function setSSN(string $SSN): PersonIdentification
    {
        $this->SSN = $SSN;
        return $this;
    }

    /**
     * @return string
     */
    public function getDOB(): string
    {
        return $this->DOB;
    }

    /**
     * @param string $DOB
     * @return PersonIdentification
     */
    public function setDOB(string $DOB): PersonIdentification
    {
        $this->DOB = $DOB;
        return $this;
    }
}