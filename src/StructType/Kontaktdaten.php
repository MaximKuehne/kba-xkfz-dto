<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Kontaktdaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Kontaktdaten extends AbstractStructBase
{
    /**
     * The Telefonnummer
     * @var string|null
     */
    public ?string $Telefonnummer = null;
    /**
     * The Faxnummer
     * @var string|null
     */
    public ?string $Faxnummer = null;
    /**
     * The Email
     * @var string|null
     */
    public ?string $Email = null;
    /**
     * Constructor method for Kontaktdaten
     * @uses Kontaktdaten::setTelefonnummer()
     * @uses Kontaktdaten::setFaxnummer()
     * @uses Kontaktdaten::setEmail()
     * @param string $telefonnummer
     * @param string $faxnummer
     * @param string $email
     */
    public function __construct(?string $telefonnummer = null, ?string $faxnummer = null, ?string $email = null)
    {
        $this
            ->setTelefonnummer($telefonnummer)
            ->setFaxnummer($faxnummer)
            ->setEmail($email);
    }
    /**
     * Get Telefonnummer value
     * @return string|null
     */
    public function getTelefonnummer(): ?string
    {
        return $this->Telefonnummer;
    }
    /**
     * Set Telefonnummer value
     * @param string $telefonnummer
     * @return \THAG\XKfz\StructType\Kontaktdaten
     */
    public function setTelefonnummer(?string $telefonnummer = null): self
    {
        $this->Telefonnummer = $telefonnummer;
        
        return $this;
    }
    /**
     * Get Faxnummer value
     * @return string|null
     */
    public function getFaxnummer(): ?string
    {
        return $this->Faxnummer;
    }
    /**
     * Set Faxnummer value
     * @param string $faxnummer
     * @return \THAG\XKfz\StructType\Kontaktdaten
     */
    public function setFaxnummer(?string $faxnummer = null): self
    {
        $this->Faxnummer = $faxnummer;
        
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \THAG\XKfz\StructType\Kontaktdaten
     */
    public function setEmail(?string $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
}
