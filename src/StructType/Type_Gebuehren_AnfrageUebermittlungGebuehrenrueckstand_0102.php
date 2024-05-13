<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Gebuehren.AnfrageUebermittlungGebuehrenrueckstand.0102 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gebuehren_AnfrageUebermittlungGebuehrenrueckstand_0102 extends AbstractStructBase
{
    /**
     * The gebuehrenrueckstandFuerPersonAnfragen
     * @var \THAG\XKfz\StructType\GebuehrenrueckstandFuerPersonAnfragen|null
     */
    public ?\THAG\XKfz\StructType\GebuehrenrueckstandFuerPersonAnfragen $gebuehrenrueckstandFuerPersonAnfragen = null;
    /**
     * The gebuehrenrueckstandBeiHKRAnfragen
     * @var \THAG\XKfz\StructType\GebuehrenrueckstandBeiHKRAnfragen|null
     */
    public ?\THAG\XKfz\StructType\GebuehrenrueckstandBeiHKRAnfragen $gebuehrenrueckstandBeiHKRAnfragen = null;
    /**
     * Constructor method for
     * Type.Gebuehren.AnfrageUebermittlungGebuehrenrueckstand.0102
     * @uses Type_Gebuehren_AnfrageUebermittlungGebuehrenrueckstand_0102::setGebuehrenrueckstandFuerPersonAnfragen()
     * @uses Type_Gebuehren_AnfrageUebermittlungGebuehrenrueckstand_0102::setGebuehrenrueckstandBeiHKRAnfragen()
     * @param \THAG\XKfz\StructType\GebuehrenrueckstandFuerPersonAnfragen $gebuehrenrueckstandFuerPersonAnfragen
     * @param \THAG\XKfz\StructType\GebuehrenrueckstandBeiHKRAnfragen $gebuehrenrueckstandBeiHKRAnfragen
     */
    public function __construct(?\THAG\XKfz\StructType\GebuehrenrueckstandFuerPersonAnfragen $gebuehrenrueckstandFuerPersonAnfragen = null, ?\THAG\XKfz\StructType\GebuehrenrueckstandBeiHKRAnfragen $gebuehrenrueckstandBeiHKRAnfragen = null)
    {
        $this
            ->setGebuehrenrueckstandFuerPersonAnfragen($gebuehrenrueckstandFuerPersonAnfragen)
            ->setGebuehrenrueckstandBeiHKRAnfragen($gebuehrenrueckstandBeiHKRAnfragen);
    }
    /**
     * Get gebuehrenrueckstandFuerPersonAnfragen value
     * @return \THAG\XKfz\StructType\GebuehrenrueckstandFuerPersonAnfragen|null
     */
    public function getGebuehrenrueckstandFuerPersonAnfragen(): ?\THAG\XKfz\StructType\GebuehrenrueckstandFuerPersonAnfragen
    {
        return $this->gebuehrenrueckstandFuerPersonAnfragen;
    }
    /**
     * Set gebuehrenrueckstandFuerPersonAnfragen value
     * @param \THAG\XKfz\StructType\GebuehrenrueckstandFuerPersonAnfragen $gebuehrenrueckstandFuerPersonAnfragen
     * @return \THAG\XKfz\StructType\Type_Gebuehren_AnfrageUebermittlungGebuehrenrueckstand_0102
     */
    public function setGebuehrenrueckstandFuerPersonAnfragen(?\THAG\XKfz\StructType\GebuehrenrueckstandFuerPersonAnfragen $gebuehrenrueckstandFuerPersonAnfragen = null): self
    {
        $this->gebuehrenrueckstandFuerPersonAnfragen = $gebuehrenrueckstandFuerPersonAnfragen;
        
        return $this;
    }
    /**
     * Get gebuehrenrueckstandBeiHKRAnfragen value
     * @return \THAG\XKfz\StructType\GebuehrenrueckstandBeiHKRAnfragen|null
     */
    public function getGebuehrenrueckstandBeiHKRAnfragen(): ?\THAG\XKfz\StructType\GebuehrenrueckstandBeiHKRAnfragen
    {
        return $this->gebuehrenrueckstandBeiHKRAnfragen;
    }
    /**
     * Set gebuehrenrueckstandBeiHKRAnfragen value
     * @param \THAG\XKfz\StructType\GebuehrenrueckstandBeiHKRAnfragen $gebuehrenrueckstandBeiHKRAnfragen
     * @return \THAG\XKfz\StructType\Type_Gebuehren_AnfrageUebermittlungGebuehrenrueckstand_0102
     */
    public function setGebuehrenrueckstandBeiHKRAnfragen(?\THAG\XKfz\StructType\GebuehrenrueckstandBeiHKRAnfragen $gebuehrenrueckstandBeiHKRAnfragen = null): self
    {
        $this->gebuehrenrueckstandBeiHKRAnfragen = $gebuehrenrueckstandBeiHKRAnfragen;
        
        return $this;
    }
}
