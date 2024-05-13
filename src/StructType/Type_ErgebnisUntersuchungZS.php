<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ErgebnisUntersuchungZS StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ErgebnisUntersuchungZS extends AbstractStructBase
{
    /**
     * The ergebnisVorMaengelschleife
     */
    public ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife = null;

    /**
     * The messwerteUntersuchung
     */
    public ?\THAG\XKfz\StructType\Type_MesswerteUntersuchungZS $messwerteUntersuchung = null;

    /**
     * Constructor method for Type.ErgebnisUntersuchungZS
     *
     * @uses Type_ErgebnisUntersuchungZS::setErgebnisVorMaengelschleife()
     * @uses Type_ErgebnisUntersuchungZS::setMesswerteUntersuchung()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife = null, ?\THAG\XKfz\StructType\Type_MesswerteUntersuchungZS $messwerteUntersuchung = null)
    {
        $this
            ->setErgebnisVorMaengelschleife($ergebnisVorMaengelschleife)
            ->setMesswerteUntersuchung($messwerteUntersuchung);
    }

    /**
     * Get ergebnisVorMaengelschleife value
     */
    public function getErgebnisVorMaengelschleife(): ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung
    {
        return $this->ergebnisVorMaengelschleife;
    }

    /**
     * Set ergebnisVorMaengelschleife value
     */
    public function setErgebnisVorMaengelschleife(?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife = null): self
    {
        $this->ergebnisVorMaengelschleife = $ergebnisVorMaengelschleife;

        return $this;
    }

    /**
     * Get messwerteUntersuchung value
     */
    public function getMesswerteUntersuchung(): ?\THAG\XKfz\StructType\Type_MesswerteUntersuchungZS
    {
        return $this->messwerteUntersuchung;
    }

    /**
     * Set messwerteUntersuchung value
     */
    public function setMesswerteUntersuchung(?\THAG\XKfz\StructType\Type_MesswerteUntersuchungZS $messwerteUntersuchung = null): self
    {
        $this->messwerteUntersuchung = $messwerteUntersuchung;

        return $this;
    }
}
