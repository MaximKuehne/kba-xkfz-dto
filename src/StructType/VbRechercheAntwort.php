<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VbRechercheAntwort StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VbRechercheAntwort extends AbstractStructBase
{
    /**
     * The Versicherungsbestaetigungsnummer
     */
    public ?string $Versicherungsbestaetigungsnummer = null;

    /**
     * The VbArt
     */
    public ?string $VbArt = null;

    /**
     * The VbAbrufbarBis
     */
    public ?string $VbAbrufbarBis = null;

    /**
     * The Zulassungsfahrten
     */
    public ?string $Zulassungsfahrten = null;

    /**
     * The Versicherung
     */
    public ?\THAG\XKfz\StructType\Versicherung $Versicherung = null;

    /**
     * The Versicherungsnehmer
     */
    public ?\THAG\XKfz\StructType\Versicherungsnehmer $Versicherungsnehmer = null;

    /**
     * The GDVVermittlernummer
     */
    public ?string $GDVVermittlernummer = null;

    /**
     * The Vorgangsnummer
     */
    public ?string $Vorgangsnummer = null;

    /**
     * Constructor method for VbRechercheAntwort
     *
     * @uses VbRechercheAntwort::setVersicherungsbestaetigungsnummer()
     * @uses VbRechercheAntwort::setVbArt()
     * @uses VbRechercheAntwort::setVbAbrufbarBis()
     * @uses VbRechercheAntwort::setZulassungsfahrten()
     * @uses VbRechercheAntwort::setVersicherung()
     * @uses VbRechercheAntwort::setVersicherungsnehmer()
     * @uses VbRechercheAntwort::setGDVVermittlernummer()
     * @uses VbRechercheAntwort::setVorgangsnummer()
     */
    public function __construct(?string $versicherungsbestaetigungsnummer = null, ?string $vbArt = null, ?string $vbAbrufbarBis = null, ?string $zulassungsfahrten = null, ?\THAG\XKfz\StructType\Versicherung $versicherung = null, ?\THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer = null, ?string $gDVVermittlernummer = null, ?string $vorgangsnummer = null)
    {
        $this
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setVbArt($vbArt)
            ->setVbAbrufbarBis($vbAbrufbarBis)
            ->setZulassungsfahrten($zulassungsfahrten)
            ->setVersicherung($versicherung)
            ->setVersicherungsnehmer($versicherungsnehmer)
            ->setGDVVermittlernummer($gDVVermittlernummer)
            ->setVorgangsnummer($vorgangsnummer);
    }

    /**
     * Get Versicherungsbestaetigungsnummer value
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }

    /**
     * Set Versicherungsbestaetigungsnummer value
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;

        return $this;
    }

    /**
     * Get VbArt value
     */
    public function getVbArt(): ?string
    {
        return $this->VbArt;
    }

    /**
     * Set VbArt value
     */
    public function setVbArt(?string $vbArt = null): self
    {
        $this->VbArt = $vbArt;

        return $this;
    }

    /**
     * Get VbAbrufbarBis value
     */
    public function getVbAbrufbarBis(): ?string
    {
        return $this->VbAbrufbarBis;
    }

    /**
     * Set VbAbrufbarBis value
     */
    public function setVbAbrufbarBis(?string $vbAbrufbarBis = null): self
    {
        $this->VbAbrufbarBis = $vbAbrufbarBis;

        return $this;
    }

    /**
     * Get Zulassungsfahrten value
     */
    public function getZulassungsfahrten(): ?string
    {
        return $this->Zulassungsfahrten;
    }

    /**
     * Set Zulassungsfahrten value
     */
    public function setZulassungsfahrten(?string $zulassungsfahrten = null): self
    {
        $this->Zulassungsfahrten = $zulassungsfahrten;

        return $this;
    }

    /**
     * Get Versicherung value
     */
    public function getVersicherung(): ?\THAG\XKfz\StructType\Versicherung
    {
        return $this->Versicherung;
    }

    /**
     * Set Versicherung value
     */
    public function setVersicherung(?\THAG\XKfz\StructType\Versicherung $versicherung = null): self
    {
        $this->Versicherung = $versicherung;

        return $this;
    }

    /**
     * Get Versicherungsnehmer value
     */
    public function getVersicherungsnehmer(): ?\THAG\XKfz\StructType\Versicherungsnehmer
    {
        return $this->Versicherungsnehmer;
    }

    /**
     * Set Versicherungsnehmer value
     */
    public function setVersicherungsnehmer(?\THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer = null): self
    {
        $this->Versicherungsnehmer = $versicherungsnehmer;

        return $this;
    }

    /**
     * Get GDVVermittlernummer value
     */
    public function getGDVVermittlernummer(): ?string
    {
        return $this->GDVVermittlernummer;
    }

    /**
     * Set GDVVermittlernummer value
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;

        return $this;
    }

    /**
     * Get Vorgangsnummer value
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }

    /**
     * Set Vorgangsnummer value
     */
    public function setVorgangsnummer(?string $vorgangsnummer = null): self
    {
        $this->Vorgangsnummer = $vorgangsnummer;

        return $this;
    }
}
