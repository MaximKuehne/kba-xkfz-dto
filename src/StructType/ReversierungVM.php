<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReversierungVM StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ReversierungVM extends AbstractStructBase
{
    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The Reversierungsstatus
     */
    public ?string $Reversierungsstatus = null;

    /**
     * The Reversierungszeitstempel
     */
    public ?string $Reversierungszeitstempel = null;

    /**
     * The VUInterneVermittlernummer
     */
    public ?string $VUInterneVermittlernummer = null;

    /**
     * The ListeReversierungsrecht
     */
    public ?\THAG\XKfz\StructType\ListeReversierungsrecht $ListeReversierungsrecht = null;

    /**
     * The Begruendung
     */
    public ?string $Begruendung = null;

    /**
     * Constructor method for ReversierungVM
     *
     * @uses ReversierungVM::setVersicherungsunternehmensnummer()
     * @uses ReversierungVM::setReversierungsstatus()
     * @uses ReversierungVM::setReversierungszeitstempel()
     * @uses ReversierungVM::setVUInterneVermittlernummer()
     * @uses ReversierungVM::setListeReversierungsrecht()
     * @uses ReversierungVM::setBegruendung()
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
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }

    /**
     * Set Versicherungsunternehmensnummer value
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;

        return $this;
    }

    /**
     * Get Reversierungsstatus value
     */
    public function getReversierungsstatus(): ?string
    {
        return $this->Reversierungsstatus;
    }

    /**
     * Set Reversierungsstatus value
     */
    public function setReversierungsstatus(?string $reversierungsstatus = null): self
    {
        $this->Reversierungsstatus = $reversierungsstatus;

        return $this;
    }

    /**
     * Get Reversierungszeitstempel value
     */
    public function getReversierungszeitstempel(): ?string
    {
        return $this->Reversierungszeitstempel;
    }

    /**
     * Set Reversierungszeitstempel value
     */
    public function setReversierungszeitstempel(?string $reversierungszeitstempel = null): self
    {
        $this->Reversierungszeitstempel = $reversierungszeitstempel;

        return $this;
    }

    /**
     * Get VUInterneVermittlernummer value
     */
    public function getVUInterneVermittlernummer(): ?string
    {
        return $this->VUInterneVermittlernummer;
    }

    /**
     * Set VUInterneVermittlernummer value
     */
    public function setVUInterneVermittlernummer(?string $vUInterneVermittlernummer = null): self
    {
        $this->VUInterneVermittlernummer = $vUInterneVermittlernummer;

        return $this;
    }

    /**
     * Get ListeReversierungsrecht value
     */
    public function getListeReversierungsrecht(): ?\THAG\XKfz\StructType\ListeReversierungsrecht
    {
        return $this->ListeReversierungsrecht;
    }

    /**
     * Set ListeReversierungsrecht value
     */
    public function setListeReversierungsrecht(?\THAG\XKfz\StructType\ListeReversierungsrecht $listeReversierungsrecht = null): self
    {
        $this->ListeReversierungsrecht = $listeReversierungsrecht;

        return $this;
    }

    /**
     * Get Begruendung value
     */
    public function getBegruendung(): ?string
    {
        return $this->Begruendung;
    }

    /**
     * Set Begruendung value
     */
    public function setBegruendung(?string $begruendung = null): self
    {
        $this->Begruendung = $begruendung;

        return $this;
    }
}
