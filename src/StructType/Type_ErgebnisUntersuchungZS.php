<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ErgebnisUntersuchungZS StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ErgebnisUntersuchungZS extends AbstractStructBase
{
    /**
     * The ergebnisVorMaengelschleife
     * @var \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife = null;
    /**
     * The messwerteUntersuchung
     * @var \THAG\XKfz\StructType\Type_MesswerteUntersuchungZS|null
     */
    public ?\THAG\XKfz\StructType\Type_MesswerteUntersuchungZS $messwerteUntersuchung = null;
    /**
     * Constructor method for Type.ErgebnisUntersuchungZS
     * @uses Type_ErgebnisUntersuchungZS::setErgebnisVorMaengelschleife()
     * @uses Type_ErgebnisUntersuchungZS::setMesswerteUntersuchung()
     * @param \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife
     * @param \THAG\XKfz\StructType\Type_MesswerteUntersuchungZS $messwerteUntersuchung
     */
    public function __construct(?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife = null, ?\THAG\XKfz\StructType\Type_MesswerteUntersuchungZS $messwerteUntersuchung = null)
    {
        $this
            ->setErgebnisVorMaengelschleife($ergebnisVorMaengelschleife)
            ->setMesswerteUntersuchung($messwerteUntersuchung);
    }
    /**
     * Get ergebnisVorMaengelschleife value
     * @return \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung|null
     */
    public function getErgebnisVorMaengelschleife(): ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung
    {
        return $this->ergebnisVorMaengelschleife;
    }
    /**
     * Set ergebnisVorMaengelschleife value
     * @param \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife
     * @return \THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS
     */
    public function setErgebnisVorMaengelschleife(?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife = null): self
    {
        $this->ergebnisVorMaengelschleife = $ergebnisVorMaengelschleife;
        
        return $this;
    }
    /**
     * Get messwerteUntersuchung value
     * @return \THAG\XKfz\StructType\Type_MesswerteUntersuchungZS|null
     */
    public function getMesswerteUntersuchung(): ?\THAG\XKfz\StructType\Type_MesswerteUntersuchungZS
    {
        return $this->messwerteUntersuchung;
    }
    /**
     * Set messwerteUntersuchung value
     * @param \THAG\XKfz\StructType\Type_MesswerteUntersuchungZS $messwerteUntersuchung
     * @return \THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS
     */
    public function setMesswerteUntersuchung(?\THAG\XKfz\StructType\Type_MesswerteUntersuchungZS $messwerteUntersuchung = null): self
    {
        $this->messwerteUntersuchung = $messwerteUntersuchung;
        
        return $this;
    }
}
