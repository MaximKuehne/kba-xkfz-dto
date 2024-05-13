<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Kontaktdaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Kontaktdaten extends AbstractStructBase
{
    /**
     * The Telefonnummer
     */
    public ?string $Telefonnummer = null;

    /**
     * The Faxnummer
     */
    public ?string $Faxnummer = null;

    /**
     * The Email
     */
    public ?string $Email = null;

    /**
     * Constructor method for Kontaktdaten
     *
     * @uses Kontaktdaten::setTelefonnummer()
     * @uses Kontaktdaten::setFaxnummer()
     * @uses Kontaktdaten::setEmail()
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
     */
    public function getTelefonnummer(): ?string
    {
        return $this->Telefonnummer;
    }

    /**
     * Set Telefonnummer value
     */
    public function setTelefonnummer(?string $telefonnummer = null): self
    {
        $this->Telefonnummer = $telefonnummer;

        return $this;
    }

    /**
     * Get Faxnummer value
     */
    public function getFaxnummer(): ?string
    {
        return $this->Faxnummer;
    }

    /**
     * Set Faxnummer value
     */
    public function setFaxnummer(?string $faxnummer = null): self
    {
        $this->Faxnummer = $faxnummer;

        return $this;
    }

    /**
     * Get Email value
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * Set Email value
     */
    public function setEmail(?string $email = null): self
    {
        $this->Email = $email;

        return $this;
    }
}
