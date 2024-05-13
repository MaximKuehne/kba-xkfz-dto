<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AuskunftsdatenHalterauskunft StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AuskunftsdatenHalterauskunft extends AbstractStructBase
{
    /**
     * The halter
     */
    public ?\THAG\XKfz\StructType\HalterZCTyp $halter = null;

    /**
     * The versicherungsdaten
     */
    public ?\THAG\XKfz\StructType\VersicherungsdatenZVTyp $versicherungsdaten = null;

    /**
     * The SchluesselFahrzeugklasse
     */
    public ?string $SchluesselFahrzeugklasse = null;

    /**
     * The TextFahrzeugklasse
     */
    public ?string $TextFahrzeugklasse = null;

    /**
     * The SchluesselHersteller
     */
    public ?string $SchluesselHersteller = null;

    /**
     * The TextHersteller
     */
    public ?string $TextHersteller = null;

    /**
     * The SchluesselTyp
     */
    public ?string $SchluesselTyp = null;

    /**
     * The TextTyp
     */
    public ?string $TextTyp = null;

    /**
     * Constructor method for Type.AuskunftsdatenHalterauskunft
     *
     * @uses Type_AuskunftsdatenHalterauskunft::setHalter()
     * @uses Type_AuskunftsdatenHalterauskunft::setVersicherungsdaten()
     * @uses Type_AuskunftsdatenHalterauskunft::setSchluesselFahrzeugklasse()
     * @uses Type_AuskunftsdatenHalterauskunft::setTextFahrzeugklasse()
     * @uses Type_AuskunftsdatenHalterauskunft::setSchluesselHersteller()
     * @uses Type_AuskunftsdatenHalterauskunft::setTextHersteller()
     * @uses Type_AuskunftsdatenHalterauskunft::setSchluesselTyp()
     * @uses Type_AuskunftsdatenHalterauskunft::setTextTyp()
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
     */
    public function getHalter(): ?\THAG\XKfz\StructType\HalterZCTyp
    {
        return $this->halter;
    }

    /**
     * Set halter value
     */
    public function setHalter(?\THAG\XKfz\StructType\HalterZCTyp $halter = null): self
    {
        $this->halter = $halter;

        return $this;
    }

    /**
     * Get versicherungsdaten value
     */
    public function getVersicherungsdaten(): ?\THAG\XKfz\StructType\VersicherungsdatenZVTyp
    {
        return $this->versicherungsdaten;
    }

    /**
     * Set versicherungsdaten value
     */
    public function setVersicherungsdaten(?\THAG\XKfz\StructType\VersicherungsdatenZVTyp $versicherungsdaten = null): self
    {
        $this->versicherungsdaten = $versicherungsdaten;

        return $this;
    }

    /**
     * Get SchluesselFahrzeugklasse value
     */
    public function getSchluesselFahrzeugklasse(): ?string
    {
        return $this->SchluesselFahrzeugklasse;
    }

    /**
     * Set SchluesselFahrzeugklasse value
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;

        return $this;
    }

    /**
     * Get TextFahrzeugklasse value
     */
    public function getTextFahrzeugklasse(): ?string
    {
        return $this->TextFahrzeugklasse;
    }

    /**
     * Set TextFahrzeugklasse value
     */
    public function setTextFahrzeugklasse(?string $textFahrzeugklasse = null): self
    {
        $this->TextFahrzeugklasse = $textFahrzeugklasse;

        return $this;
    }

    /**
     * Get SchluesselHersteller value
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }

    /**
     * Set SchluesselHersteller value
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;

        return $this;
    }

    /**
     * Get TextHersteller value
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }

    /**
     * Set TextHersteller value
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;

        return $this;
    }

    /**
     * Get SchluesselTyp value
     */
    public function getSchluesselTyp(): ?string
    {
        return $this->SchluesselTyp;
    }

    /**
     * Set SchluesselTyp value
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;

        return $this;
    }

    /**
     * Get TextTyp value
     */
    public function getTextTyp(): ?string
    {
        return $this->TextTyp;
    }

    /**
     * Set TextTyp value
     */
    public function setTextTyp(?string $textTyp = null): self
    {
        $this->TextTyp = $textTyp;

        return $this;
    }
}
