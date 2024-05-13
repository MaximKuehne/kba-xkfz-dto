<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AuskunftsdatenHalterauskunft StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AuskunftsdatenHalterauskunft extends AbstractStructBase
{
    /**
     * The halter
     * @var \THAG\XKfz\StructType\HalterZCTyp|null
     */
    public ?\THAG\XKfz\StructType\HalterZCTyp $halter = null;
    /**
     * The versicherungsdaten
     * @var \THAG\XKfz\StructType\VersicherungsdatenZVTyp|null
     */
    public ?\THAG\XKfz\StructType\VersicherungsdatenZVTyp $versicherungsdaten = null;
    /**
     * The SchluesselFahrzeugklasse
     * @var string|null
     */
    public ?string $SchluesselFahrzeugklasse = null;
    /**
     * The TextFahrzeugklasse
     * @var string|null
     */
    public ?string $TextFahrzeugklasse = null;
    /**
     * The SchluesselHersteller
     * @var string|null
     */
    public ?string $SchluesselHersteller = null;
    /**
     * The TextHersteller
     * @var string|null
     */
    public ?string $TextHersteller = null;
    /**
     * The SchluesselTyp
     * @var string|null
     */
    public ?string $SchluesselTyp = null;
    /**
     * The TextTyp
     * @var string|null
     */
    public ?string $TextTyp = null;
    /**
     * Constructor method for Type.AuskunftsdatenHalterauskunft
     * @uses Type_AuskunftsdatenHalterauskunft::setHalter()
     * @uses Type_AuskunftsdatenHalterauskunft::setVersicherungsdaten()
     * @uses Type_AuskunftsdatenHalterauskunft::setSchluesselFahrzeugklasse()
     * @uses Type_AuskunftsdatenHalterauskunft::setTextFahrzeugklasse()
     * @uses Type_AuskunftsdatenHalterauskunft::setSchluesselHersteller()
     * @uses Type_AuskunftsdatenHalterauskunft::setTextHersteller()
     * @uses Type_AuskunftsdatenHalterauskunft::setSchluesselTyp()
     * @uses Type_AuskunftsdatenHalterauskunft::setTextTyp()
     * @param \THAG\XKfz\StructType\HalterZCTyp $halter
     * @param \THAG\XKfz\StructType\VersicherungsdatenZVTyp $versicherungsdaten
     * @param string $schluesselFahrzeugklasse
     * @param string $textFahrzeugklasse
     * @param string $schluesselHersteller
     * @param string $textHersteller
     * @param string $schluesselTyp
     * @param string $textTyp
     */
    public function __construct(?\THAG\XKfz\StructType\HalterZCTyp $halter = null, ?\THAG\XKfz\StructType\VersicherungsdatenZVTyp $versicherungsdaten = null, ?string $schluesselFahrzeugklasse = null, ?string $textFahrzeugklasse = null, ?string $schluesselHersteller = null, ?string $textHersteller = null, ?string $schluesselTyp = null, ?string $textTyp = null)
    {
        $this
            ->setHalter($halter)
            ->setVersicherungsdaten($versicherungsdaten)
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setTextFahrzeugklasse($textFahrzeugklasse)
            ->setSchluesselHersteller($schluesselHersteller)
            ->setTextHersteller($textHersteller)
            ->setSchluesselTyp($schluesselTyp)
            ->setTextTyp($textTyp);
    }
    /**
     * Get halter value
     * @return \THAG\XKfz\StructType\HalterZCTyp|null
     */
    public function getHalter(): ?\THAG\XKfz\StructType\HalterZCTyp
    {
        return $this->halter;
    }
    /**
     * Set halter value
     * @param \THAG\XKfz\StructType\HalterZCTyp $halter
     * @return \THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZCTyp $halter = null): self
    {
        $this->halter = $halter;
        
        return $this;
    }
    /**
     * Get versicherungsdaten value
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp|null
     */
    public function getVersicherungsdaten(): ?\THAG\XKfz\StructType\VersicherungsdatenZVTyp
    {
        return $this->versicherungsdaten;
    }
    /**
     * Set versicherungsdaten value
     * @param \THAG\XKfz\StructType\VersicherungsdatenZVTyp $versicherungsdaten
     * @return \THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft
     */
    public function setVersicherungsdaten(?\THAG\XKfz\StructType\VersicherungsdatenZVTyp $versicherungsdaten = null): self
    {
        $this->versicherungsdaten = $versicherungsdaten;
        
        return $this;
    }
    /**
     * Get SchluesselFahrzeugklasse value
     * @return string|null
     */
    public function getSchluesselFahrzeugklasse(): ?string
    {
        return $this->SchluesselFahrzeugklasse;
    }
    /**
     * Set SchluesselFahrzeugklasse value
     * @param string $schluesselFahrzeugklasse
     * @return \THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get TextFahrzeugklasse value
     * @return string|null
     */
    public function getTextFahrzeugklasse(): ?string
    {
        return $this->TextFahrzeugklasse;
    }
    /**
     * Set TextFahrzeugklasse value
     * @param string $textFahrzeugklasse
     * @return \THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft
     */
    public function setTextFahrzeugklasse(?string $textFahrzeugklasse = null): self
    {
        $this->TextFahrzeugklasse = $textFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get SchluesselHersteller value
     * @return string|null
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }
    /**
     * Set SchluesselHersteller value
     * @param string $schluesselHersteller
     * @return \THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;
        
        return $this;
    }
    /**
     * Get TextHersteller value
     * @return string|null
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }
    /**
     * Set TextHersteller value
     * @param string $textHersteller
     * @return \THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;
        
        return $this;
    }
    /**
     * Get SchluesselTyp value
     * @return string|null
     */
    public function getSchluesselTyp(): ?string
    {
        return $this->SchluesselTyp;
    }
    /**
     * Set SchluesselTyp value
     * @param string $schluesselTyp
     * @return \THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;
        
        return $this;
    }
    /**
     * Get TextTyp value
     * @return string|null
     */
    public function getTextTyp(): ?string
    {
        return $this->TextTyp;
    }
    /**
     * Set TextTyp value
     * @param string $textTyp
     * @return \THAG\XKfz\StructType\Type_AuskunftsdatenHalterauskunft
     */
    public function setTextTyp(?string $textTyp = null): self
    {
        $this->TextTyp = $textTyp;
        
        return $this;
    }
}
