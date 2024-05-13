<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichenliste StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichenliste extends AbstractStructBase
{
    /**
     * The anzahlKennzeichen
     */
    public ?int $anzahlKennzeichen = null;

    /**
     * The kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null;

    /**
     * Constructor method for Type.Kennzeichenliste
     *
     * @uses Type_Kennzeichenliste::setAnzahlKennzeichen()
     * @uses Type_Kennzeichenliste::setKennzeichen()
     */
    public function __construct(?int $anzahlKennzeichen = null, ?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null)
    {
        $this
            ->setAnzahlKennzeichen($anzahlKennzeichen)
            ->setKennzeichen($kennzeichen);
    }

    /**
     * Get anzahlKennzeichen value
     */
    public function getAnzahlKennzeichen(): ?int
    {
        return $this->anzahlKennzeichen;
    }

    /**
     * Set anzahlKennzeichen value
     */
    public function setAnzahlKennzeichen(?int $anzahlKennzeichen = null): self
    {
        $this->anzahlKennzeichen = $anzahlKennzeichen;

        return $this;
    }

    /**
     * Get kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen_1
    {
        return $this->kennzeichen;
    }

    /**
     * Set kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;

        return $this;
    }
}
