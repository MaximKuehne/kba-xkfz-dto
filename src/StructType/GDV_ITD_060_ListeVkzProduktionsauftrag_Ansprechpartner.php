<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDV_ITD_060.ListeVkzProduktionsauftrag.Ansprechpartner
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner extends AbstractStructBase
{
    /**
     * The Name1
     */
    public ?string $Name1 = null;

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
     * Constructor method for GDV_ITD_060.ListeVkzProduktionsauftrag.Ansprechpartner
     *
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner::setName1()
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner::setTelefonnummer()
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner::setFaxnummer()
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner::setEmail()
     */
    public function __construct(?string $name1 = null, ?string $telefonnummer = null, ?string $faxnummer = null, ?string $email = null)
    {
        $this
            ->setName1($name1)
            ->setTelefonnummer($telefonnummer)
            ->setFaxnummer($faxnummer)
            ->setEmail($email);
    }

    /**
     * Get Name1 value
     */
    public function getName1(): ?string
    {
        return $this->Name1;
    }

    /**
     * Set Name1 value
     */
    public function setName1(?string $name1 = null): self
    {
        $this->Name1 = $name1;

        return $this;
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
