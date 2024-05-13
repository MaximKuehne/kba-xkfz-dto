<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDV_ITD_060.ListeVkzProduktionsauftrag.Ansprechpartner
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner extends AbstractStructBase
{
    /**
     * The Name1
     * @var string|null
     */
    public ?string $Name1 = null;
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
     * Constructor method for GDV_ITD_060.ListeVkzProduktionsauftrag.Ansprechpartner
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner::setName1()
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner::setTelefonnummer()
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner::setFaxnummer()
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner::setEmail()
     * @param string $name1
     * @param string $telefonnummer
     * @param string $faxnummer
     * @param string $email
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
     * @return string|null
     */
    public function getName1(): ?string
    {
        return $this->Name1;
    }
    /**
     * Set Name1 value
     * @param string $name1
     * @return \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner
     */
    public function setName1(?string $name1 = null): self
    {
        $this->Name1 = $name1;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner
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
     * @return \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner
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
     * @return \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner
     */
    public function setEmail(?string $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
}
