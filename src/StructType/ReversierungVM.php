<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReversierungVM StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ReversierungVM extends AbstractStructBase
{
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
    /**
     * The Reversierungsstatus
     * @var string|null
     */
    public ?string $Reversierungsstatus = null;
    /**
     * The Reversierungszeitstempel
     * @var string|null
     */
    public ?string $Reversierungszeitstempel = null;
    /**
     * The VUInterneVermittlernummer
     * @var string|null
     */
    public ?string $VUInterneVermittlernummer = null;
    /**
     * The ListeReversierungsrecht
     * @var \THAG\XKfz\StructType\ListeReversierungsrecht|null
     */
    public ?\THAG\XKfz\StructType\ListeReversierungsrecht $ListeReversierungsrecht = null;
    /**
     * The Begruendung
     * @var string|null
     */
    public ?string $Begruendung = null;
    /**
     * Constructor method for ReversierungVM
     * @uses ReversierungVM::setVersicherungsunternehmensnummer()
     * @uses ReversierungVM::setReversierungsstatus()
     * @uses ReversierungVM::setReversierungszeitstempel()
     * @uses ReversierungVM::setVUInterneVermittlernummer()
     * @uses ReversierungVM::setListeReversierungsrecht()
     * @uses ReversierungVM::setBegruendung()
     * @param string $versicherungsunternehmensnummer
     * @param string $reversierungsstatus
     * @param string $reversierungszeitstempel
     * @param string $vUInterneVermittlernummer
     * @param \THAG\XKfz\StructType\ListeReversierungsrecht $listeReversierungsrecht
     * @param string $begruendung
     */
    public function __construct(?string $versicherungsunternehmensnummer = null, ?string $reversierungsstatus = null, ?string $reversierungszeitstempel = null, ?string $vUInterneVermittlernummer = null, ?\THAG\XKfz\StructType\ListeReversierungsrecht $listeReversierungsrecht = null, ?string $begruendung = null)
    {
        $this
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setReversierungsstatus($reversierungsstatus)
            ->setReversierungszeitstempel($reversierungszeitstempel)
            ->setVUInterneVermittlernummer($vUInterneVermittlernummer)
            ->setListeReversierungsrecht($listeReversierungsrecht)
            ->setBegruendung($begruendung);
    }
    /**
     * Get Versicherungsunternehmensnummer value
     * @return string|null
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }
    /**
     * Set Versicherungsunternehmensnummer value
     * @param string $versicherungsunternehmensnummer
     * @return \THAG\XKfz\StructType\ReversierungVM
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
        return $this;
    }
    /**
     * Get Reversierungsstatus value
     * @return string|null
     */
    public function getReversierungsstatus(): ?string
    {
        return $this->Reversierungsstatus;
    }
    /**
     * Set Reversierungsstatus value
     * @param string $reversierungsstatus
     * @return \THAG\XKfz\StructType\ReversierungVM
     */
    public function setReversierungsstatus(?string $reversierungsstatus = null): self
    {
        $this->Reversierungsstatus = $reversierungsstatus;
        
        return $this;
    }
    /**
     * Get Reversierungszeitstempel value
     * @return string|null
     */
    public function getReversierungszeitstempel(): ?string
    {
        return $this->Reversierungszeitstempel;
    }
    /**
     * Set Reversierungszeitstempel value
     * @param string $reversierungszeitstempel
     * @return \THAG\XKfz\StructType\ReversierungVM
     */
    public function setReversierungszeitstempel(?string $reversierungszeitstempel = null): self
    {
        $this->Reversierungszeitstempel = $reversierungszeitstempel;
        
        return $this;
    }
    /**
     * Get VUInterneVermittlernummer value
     * @return string|null
     */
    public function getVUInterneVermittlernummer(): ?string
    {
        return $this->VUInterneVermittlernummer;
    }
    /**
     * Set VUInterneVermittlernummer value
     * @param string $vUInterneVermittlernummer
     * @return \THAG\XKfz\StructType\ReversierungVM
     */
    public function setVUInterneVermittlernummer(?string $vUInterneVermittlernummer = null): self
    {
        $this->VUInterneVermittlernummer = $vUInterneVermittlernummer;
        
        return $this;
    }
    /**
     * Get ListeReversierungsrecht value
     * @return \THAG\XKfz\StructType\ListeReversierungsrecht|null
     */
    public function getListeReversierungsrecht(): ?\THAG\XKfz\StructType\ListeReversierungsrecht
    {
        return $this->ListeReversierungsrecht;
    }
    /**
     * Set ListeReversierungsrecht value
     * @param \THAG\XKfz\StructType\ListeReversierungsrecht $listeReversierungsrecht
     * @return \THAG\XKfz\StructType\ReversierungVM
     */
    public function setListeReversierungsrecht(?\THAG\XKfz\StructType\ListeReversierungsrecht $listeReversierungsrecht = null): self
    {
        $this->ListeReversierungsrecht = $listeReversierungsrecht;
        
        return $this;
    }
    /**
     * Get Begruendung value
     * @return string|null
     */
    public function getBegruendung(): ?string
    {
        return $this->Begruendung;
    }
    /**
     * Set Begruendung value
     * @param string $begruendung
     * @return \THAG\XKfz\StructType\ReversierungVM
     */
    public function setBegruendung(?string $begruendung = null): self
    {
        $this->Begruendung = $begruendung;
        
        return $this;
    }
}
