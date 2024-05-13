<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VbRechercheAntwort StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VbRechercheAntwort extends AbstractStructBase
{
    /**
     * The Versicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $Versicherungsbestaetigungsnummer = null;
    /**
     * The VbArt
     * @var string|null
     */
    public ?string $VbArt = null;
    /**
     * The VbAbrufbarBis
     * @var string|null
     */
    public ?string $VbAbrufbarBis = null;
    /**
     * The Zulassungsfahrten
     * @var string|null
     */
    public ?string $Zulassungsfahrten = null;
    /**
     * The Versicherung
     * @var \THAG\XKfz\StructType\Versicherung|null
     */
    public ?\THAG\XKfz\StructType\Versicherung $Versicherung = null;
    /**
     * The Versicherungsnehmer
     * @var \THAG\XKfz\StructType\Versicherungsnehmer|null
     */
    public ?\THAG\XKfz\StructType\Versicherungsnehmer $Versicherungsnehmer = null;
    /**
     * The GDVVermittlernummer
     * @var string|null
     */
    public ?string $GDVVermittlernummer = null;
    /**
     * The Vorgangsnummer
     * @var string|null
     */
    public ?string $Vorgangsnummer = null;
    /**
     * Constructor method for VbRechercheAntwort
     * @uses VbRechercheAntwort::setVersicherungsbestaetigungsnummer()
     * @uses VbRechercheAntwort::setVbArt()
     * @uses VbRechercheAntwort::setVbAbrufbarBis()
     * @uses VbRechercheAntwort::setZulassungsfahrten()
     * @uses VbRechercheAntwort::setVersicherung()
     * @uses VbRechercheAntwort::setVersicherungsnehmer()
     * @uses VbRechercheAntwort::setGDVVermittlernummer()
     * @uses VbRechercheAntwort::setVorgangsnummer()
     * @param string $versicherungsbestaetigungsnummer
     * @param string $vbArt
     * @param string $vbAbrufbarBis
     * @param string $zulassungsfahrten
     * @param \THAG\XKfz\StructType\Versicherung $versicherung
     * @param \THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer
     * @param string $gDVVermittlernummer
     * @param string $vorgangsnummer
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
     * @return string|null
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }
    /**
     * Set Versicherungsbestaetigungsnummer value
     * @param string $versicherungsbestaetigungsnummer
     * @return \THAG\XKfz\StructType\VbRechercheAntwort
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get VbArt value
     * @return string|null
     */
    public function getVbArt(): ?string
    {
        return $this->VbArt;
    }
    /**
     * Set VbArt value
     * @param string $vbArt
     * @return \THAG\XKfz\StructType\VbRechercheAntwort
     */
    public function setVbArt(?string $vbArt = null): self
    {
        $this->VbArt = $vbArt;
        
        return $this;
    }
    /**
     * Get VbAbrufbarBis value
     * @return string|null
     */
    public function getVbAbrufbarBis(): ?string
    {
        return $this->VbAbrufbarBis;
    }
    /**
     * Set VbAbrufbarBis value
     * @param string $vbAbrufbarBis
     * @return \THAG\XKfz\StructType\VbRechercheAntwort
     */
    public function setVbAbrufbarBis(?string $vbAbrufbarBis = null): self
    {
        $this->VbAbrufbarBis = $vbAbrufbarBis;
        
        return $this;
    }
    /**
     * Get Zulassungsfahrten value
     * @return string|null
     */
    public function getZulassungsfahrten(): ?string
    {
        return $this->Zulassungsfahrten;
    }
    /**
     * Set Zulassungsfahrten value
     * @param string $zulassungsfahrten
     * @return \THAG\XKfz\StructType\VbRechercheAntwort
     */
    public function setZulassungsfahrten(?string $zulassungsfahrten = null): self
    {
        $this->Zulassungsfahrten = $zulassungsfahrten;
        
        return $this;
    }
    /**
     * Get Versicherung value
     * @return \THAG\XKfz\StructType\Versicherung|null
     */
    public function getVersicherung(): ?\THAG\XKfz\StructType\Versicherung
    {
        return $this->Versicherung;
    }
    /**
     * Set Versicherung value
     * @param \THAG\XKfz\StructType\Versicherung $versicherung
     * @return \THAG\XKfz\StructType\VbRechercheAntwort
     */
    public function setVersicherung(?\THAG\XKfz\StructType\Versicherung $versicherung = null): self
    {
        $this->Versicherung = $versicherung;
        
        return $this;
    }
    /**
     * Get Versicherungsnehmer value
     * @return \THAG\XKfz\StructType\Versicherungsnehmer|null
     */
    public function getVersicherungsnehmer(): ?\THAG\XKfz\StructType\Versicherungsnehmer
    {
        return $this->Versicherungsnehmer;
    }
    /**
     * Set Versicherungsnehmer value
     * @param \THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer
     * @return \THAG\XKfz\StructType\VbRechercheAntwort
     */
    public function setVersicherungsnehmer(?\THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer = null): self
    {
        $this->Versicherungsnehmer = $versicherungsnehmer;
        
        return $this;
    }
    /**
     * Get GDVVermittlernummer value
     * @return string|null
     */
    public function getGDVVermittlernummer(): ?string
    {
        return $this->GDVVermittlernummer;
    }
    /**
     * Set GDVVermittlernummer value
     * @param string $gDVVermittlernummer
     * @return \THAG\XKfz\StructType\VbRechercheAntwort
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;
        
        return $this;
    }
    /**
     * Get Vorgangsnummer value
     * @return string|null
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }
    /**
     * Set Vorgangsnummer value
     * @param string $vorgangsnummer
     * @return \THAG\XKfz\StructType\VbRechercheAntwort
     */
    public function setVorgangsnummer(?string $vorgangsnummer = null): self
    {
        $this->Vorgangsnummer = $vorgangsnummer;
        
        return $this;
    }
}
