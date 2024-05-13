<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageGutachtenGenutzt StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageGutachtenGenutzt extends AbstractStructBase
{
    /**
     * The gutachtennummer
     * @var string|null
     */
    public ?string $gutachtennummer = null;
    /**
     * The verwendendeBehoerde
     * @var \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null;
    /**
     * The zeitpunktDerVerwendung
     * @var string|null
     */
    public ?string $zeitpunktDerVerwendung = null;
    /**
     * Constructor method for Type.AnfrageGutachtenGenutzt
     * @uses Type_AnfrageGutachtenGenutzt::setGutachtennummer()
     * @uses Type_AnfrageGutachtenGenutzt::setVerwendendeBehoerde()
     * @uses Type_AnfrageGutachtenGenutzt::setZeitpunktDerVerwendung()
     * @param string $gutachtennummer
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde
     * @param string $zeitpunktDerVerwendung
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
     * @return string|null
     */
    public function getGutachtennummer(): ?string
    {
        return $this->gutachtennummer;
    }
    /**
     * Set gutachtennummer value
     * @param string $gutachtennummer
     * @return \THAG\XKfz\StructType\Type_AnfrageGutachtenGenutzt
     */
    public function setGutachtennummer(?string $gutachtennummer = null): self
    {
        $this->gutachtennummer = $gutachtennummer;
        
        return $this;
    }
    /**
     * Get verwendendeBehoerde value
     * @return \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public function getVerwendendeBehoerde(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->verwendendeBehoerde;
    }
    /**
     * Set verwendendeBehoerde value
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde
     * @return \THAG\XKfz\StructType\Type_AnfrageGutachtenGenutzt
     */
    public function setVerwendendeBehoerde(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $verwendendeBehoerde = null): self
    {
        $this->verwendendeBehoerde = $verwendendeBehoerde;
        
        return $this;
    }
    /**
     * Get zeitpunktDerVerwendung value
     * @return string|null
     */
    public function getZeitpunktDerVerwendung(): ?string
    {
        return $this->zeitpunktDerVerwendung;
    }
    /**
     * Set zeitpunktDerVerwendung value
     * @param string $zeitpunktDerVerwendung
     * @return \THAG\XKfz\StructType\Type_AnfrageGutachtenGenutzt
     */
    public function setZeitpunktDerVerwendung(?string $zeitpunktDerVerwendung = null): self
    {
        $this->zeitpunktDerVerwendung = $zeitpunktDerVerwendung;
        
        return $this;
    }
}
