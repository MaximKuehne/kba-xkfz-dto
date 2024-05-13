<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichenliste StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichenliste extends AbstractStructBase
{
    /**
     * The anzahlKennzeichen
     * @var int|null
     */
    public ?int $anzahlKennzeichen = null;
    /**
     * The kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen_1|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null;
    /**
     * Constructor method for Type.Kennzeichenliste
     * @uses Type_Kennzeichenliste::setAnzahlKennzeichen()
     * @uses Type_Kennzeichenliste::setKennzeichen()
     * @param int $anzahlKennzeichen
     * @param \THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen
     */
    public function __construct(?int $anzahlKennzeichen = null, ?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null)
    {
        $this
            ->setAnzahlKennzeichen($anzahlKennzeichen)
            ->setKennzeichen($kennzeichen);
    }
    /**
     * Get anzahlKennzeichen value
     * @return int|null
     */
    public function getAnzahlKennzeichen(): ?int
    {
        return $this->anzahlKennzeichen;
    }
    /**
     * Set anzahlKennzeichen value
     * @param int $anzahlKennzeichen
     * @return \THAG\XKfz\StructType\Type_Kennzeichenliste
     */
    public function setAnzahlKennzeichen(?int $anzahlKennzeichen = null): self
    {
        $this->anzahlKennzeichen = $anzahlKennzeichen;
        
        return $this;
    }
    /**
     * Get kennzeichen value
     * @return \THAG\XKfz\StructType\Kennzeichen_1|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen_1
    {
        return $this->kennzeichen;
    }
    /**
     * Set kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen
     * @return \THAG\XKfz\StructType\Type_Kennzeichenliste
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;
        
        return $this;
    }
}
