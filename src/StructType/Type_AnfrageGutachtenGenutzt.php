<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageGutachtenGenutzt StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageGutachtenGenutzt extends AbstractStructBase
{
    /**
     * The gutachtennummer
     */
    public ?string $gutachtennummer = null;

    /**
     * The verwendendeBehoerde
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null;

    /**
     * The zeitpunktDerVerwendung
     */
    public ?string $zeitpunktDerVerwendung = null;

    /**
     * Constructor method for Type.AnfrageGutachtenGenutzt
     *
     * @uses Type_AnfrageGutachtenGenutzt::setGutachtennummer()
     * @uses Type_AnfrageGutachtenGenutzt::setVerwendendeBehoerde()
     * @uses Type_AnfrageGutachtenGenutzt::setZeitpunktDerVerwendung()
     */
    public function __construct(?string $gutachtennummer = null, ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null, ?string $zeitpunktDerVerwendung = null)
    {
        $this
            ->setGutachtennummer($gutachtennummer)
            ->setVerwendendeBehoerde($verwendendeBehoerde)
            ->setZeitpunktDerVerwendung($zeitpunktDerVerwendung);
    }

    /**
     * Get gutachtennummer value
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }

    /**
     * Set gutachtennummer value
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;

        return $this;
    }

    /**
     * Get verwendendeBehoerde value
     */
    public function getVerwendendeBehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->verwendendeBehoerde;
    }

    /**
     * Set verwendendeBehoerde value
     */
    public function setVerwendendeBehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null): self
    {
        $this->verwendendeBehoerde = $verwendendeBehoerde;

        return $this;
    }

    /**
     * Get zeitpunktDerVerwendung value
     */
    public function getZeitpunktDerVerwendung(): ?string
    {
        return $this->zeitpunktDerVerwendung;
    }

    /**
     * Set zeitpunktDerVerwendung value
     */
    public function setZeitpunktDerVerwendung(?string $zeitpunktDerVerwendung = null): self
    {
        $this->zeitpunktDerVerwendung = $zeitpunktDerVerwendung;

        return $this;
    }
}
