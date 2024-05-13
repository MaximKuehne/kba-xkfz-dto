<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fehlerhinweise StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Fehlerhinweise extends AbstractStructBase
{
    /**
     * The FehlernummerPlausipruefung
     * @var string|null
     */
    public ?string $FehlernummerPlausipruefung = null;
    /**
     * The FehlernummerUpdate
     * @var string|null
     */
    public ?string $FehlernummerUpdate = null;
    /**
     * The FINZulBeschTeil2Bestaetigt
     * @var string|null
     */
    public ?string $FINZulBeschTeil2Bestaetigt = null;
    /**
     * Constructor method for Fehlerhinweise
     * @uses Fehlerhinweise::setFehlernummerPlausipruefung()
     * @uses Fehlerhinweise::setFehlernummerUpdate()
     * @uses Fehlerhinweise::setFINZulBeschTeil2Bestaetigt()
     * @param string $fehlernummerPlausipruefung
     * @param string $fehlernummerUpdate
     * @param string $fINZulBeschTeil2Bestaetigt
     */
    public function __construct(?string $fehlernummerPlausipruefung = null, ?string $fehlernummerUpdate = null, ?string $fINZulBeschTeil2Bestaetigt = null)
    {
        $this
            ->setFehlernummerPlausipruefung($fehlernummerPlausipruefung)
            ->setFehlernummerUpdate($fehlernummerUpdate)
            ->setFINZulBeschTeil2Bestaetigt($fINZulBeschTeil2Bestaetigt);
    }
    /**
     * Get FehlernummerPlausipruefung value
     * @return string|null
     */
    public function getFehlernummerPlausipruefung(): ?string
    {
        return $this->FehlernummerPlausipruefung;
    }
    /**
     * Set FehlernummerPlausipruefung value
     * @param string $fehlernummerPlausipruefung
     * @return \THAG\XKfz\StructType\Fehlerhinweise
     */
    public function setFehlernummerPlausipruefung(?string $fehlernummerPlausipruefung = null): self
    {
        $this->FehlernummerPlausipruefung = $fehlernummerPlausipruefung;
        
        return $this;
    }
    /**
     * Get FehlernummerUpdate value
     * @return string|null
     */
    public function getFehlernummerUpdate(): ?string
    {
        return $this->FehlernummerUpdate;
    }
    /**
     * Set FehlernummerUpdate value
     * @param string $fehlernummerUpdate
     * @return \THAG\XKfz\StructType\Fehlerhinweise
     */
    public function setFehlernummerUpdate(?string $fehlernummerUpdate = null): self
    {
        $this->FehlernummerUpdate = $fehlernummerUpdate;
        
        return $this;
    }
    /**
     * Get FINZulBeschTeil2Bestaetigt value
     * @return string|null
     */
    public function getFINZulBeschTeil2Bestaetigt(): ?string
    {
        return $this->FINZulBeschTeil2Bestaetigt;
    }
    /**
     * Set FINZulBeschTeil2Bestaetigt value
     * @param string $fINZulBeschTeil2Bestaetigt
     * @return \THAG\XKfz\StructType\Fehlerhinweise
     */
    public function setFINZulBeschTeil2Bestaetigt(?string $fINZulBeschTeil2Bestaetigt = null): self
    {
        $this->FINZulBeschTeil2Bestaetigt = $fINZulBeschTeil2Bestaetigt;
        
        return $this;
    }
}
