<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.MitteilungUntersuchungZFZR StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_MitteilungUntersuchungZFZR extends AbstractStructBase
{
    /**
     * The identifizierungFahrzeug
     */
    public ?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeug $identifizierungFahrzeug = null;

    /**
     * The beschreibungFahrzeug
     */
    public ?\THAG\XKfz\StructType\Type_BeschreibungFahrzeug $beschreibungFahrzeug = null;

    /**
     * The identifizierungUntersuchung
     */
    public ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchung $identifizierungUntersuchung = null;

    /**
     * The ergebnisUntersuchung
     */
    public ?\THAG\XKfz\StructType\Type_ErgebnisUntersuchung $ergebnisUntersuchung = null;

    /**
     * The listeMaengel
     */
    public ?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null;

    /**
     * The listeMonetaereEinnahmen
     */
    public ?\THAG\XKfz\StructType\Type_ListeMonetaereEinnahmen $listeMonetaereEinnahmen = null;

    /**
     * The listeHinweise
     */
    public ?\THAG\XKfz\StructType\Type_ListeHinweise $listeHinweise = null;

    /**
     * The annexOBFCM
     */
    public ?\THAG\XKfz\StructType\Type_AnnexOBFCM $annexOBFCM = null;

    /**
     * Constructor method for Type.MitteilungUntersuchungZFZR
     *
     * @uses Type_MitteilungUntersuchungZFZR::setIdentifizierungFahrzeug()
     * @uses Type_MitteilungUntersuchungZFZR::setBeschreibungFahrzeug()
     * @uses Type_MitteilungUntersuchungZFZR::setIdentifizierungUntersuchung()
     * @uses Type_MitteilungUntersuchungZFZR::setErgebnisUntersuchung()
     * @uses Type_MitteilungUntersuchungZFZR::setListeMaengel()
     * @uses Type_MitteilungUntersuchungZFZR::setListeMonetaereEinnahmen()
     * @uses Type_MitteilungUntersuchungZFZR::setListeHinweise()
     * @uses Type_MitteilungUntersuchungZFZR::setAnnexOBFCM()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeug $identifizierungFahrzeug = null, ?\THAG\XKfz\StructType\Type_BeschreibungFahrzeug $beschreibungFahrzeug = null, ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchung $identifizierungUntersuchung = null, ?\THAG\XKfz\StructType\Type_ErgebnisUntersuchung $ergebnisUntersuchung = null, ?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null, ?\THAG\XKfz\StructType\Type_ListeMonetaereEinnahmen $listeMonetaereEinnahmen = null, ?\THAG\XKfz\StructType\Type_ListeHinweise $listeHinweise = null, ?\THAG\XKfz\StructType\Type_AnnexOBFCM $annexOBFCM = null)
    {
        $this
            ->setIdentifizierungFahrzeug($identifizierungFahrzeug)
            ->setBeschreibungFahrzeug($beschreibungFahrzeug)
            ->setIdentifizierungUntersuchung($identifizierungUntersuchung)
            ->setErgebnisUntersuchung($ergebnisUntersuchung)
            ->setListeMaengel($listeMaengel)
            ->setListeMonetaereEinnahmen($listeMonetaereEinnahmen)
            ->setListeHinweise($listeHinweise)
            ->setAnnexOBFCM($annexOBFCM);
    }

    /**
     * Get identifizierungFahrzeug value
     */
    public function getIdentifizierungFahrzeug(): ?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeug
    {
        return $this->identifizierungFahrzeug;
    }

    /**
     * Set identifizierungFahrzeug value
     */
    public function setIdentifizierungFahrzeug(?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeug $identifizierungFahrzeug = null): self
    {
        $this->identifizierungFahrzeug = $identifizierungFahrzeug;

        return $this;
    }

    /**
     * Get beschreibungFahrzeug value
     */
    public function getBeschreibungFahrzeug(): ?\THAG\XKfz\StructType\Type_BeschreibungFahrzeug
    {
        return $this->beschreibungFahrzeug;
    }

    /**
     * Set beschreibungFahrzeug value
     */
    public function setBeschreibungFahrzeug(?\THAG\XKfz\StructType\Type_BeschreibungFahrzeug $beschreibungFahrzeug = null): self
    {
        $this->beschreibungFahrzeug = $beschreibungFahrzeug;

        return $this;
    }

    /**
     * Get identifizierungUntersuchung value
     */
    public function getIdentifizierungUntersuchung(): ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
    {
        return $this->identifizierungUntersuchung;
    }

    /**
     * Set identifizierungUntersuchung value
     */
    public function setIdentifizierungUntersuchung(?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchung $identifizierungUntersuchung = null): self
    {
        $this->identifizierungUntersuchung = $identifizierungUntersuchung;

        return $this;
    }

    /**
     * Get ergebnisUntersuchung value
     */
    public function getErgebnisUntersuchung(): ?\THAG\XKfz\StructType\Type_ErgebnisUntersuchung
    {
        return $this->ergebnisUntersuchung;
    }

    /**
     * Set ergebnisUntersuchung value
     */
    public function setErgebnisUntersuchung(?\THAG\XKfz\StructType\Type_ErgebnisUntersuchung $ergebnisUntersuchung = null): self
    {
        $this->ergebnisUntersuchung = $ergebnisUntersuchung;

        return $this;
    }

    /**
     * Get listeMaengel value
     */
    public function getListeMaengel(): ?\THAG\XKfz\StructType\Type_ListeMaengel
    {
        return $this->listeMaengel;
    }

    /**
     * Set listeMaengel value
     */
    public function setListeMaengel(?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null): self
    {
        $this->listeMaengel = $listeMaengel;

        return $this;
    }

    /**
     * Get listeMonetaereEinnahmen value
     */
    public function getListeMonetaereEinnahmen(): ?\THAG\XKfz\StructType\Type_ListeMonetaereEinnahmen
    {
        return $this->listeMonetaereEinnahmen;
    }

    /**
     * Set listeMonetaereEinnahmen value
     */
    public function setListeMonetaereEinnahmen(?\THAG\XKfz\StructType\Type_ListeMonetaereEinnahmen $listeMonetaereEinnahmen = null): self
    {
        $this->listeMonetaereEinnahmen = $listeMonetaereEinnahmen;

        return $this;
    }

    /**
     * Get listeHinweise value
     */
    public function getListeHinweise(): ?\THAG\XKfz\StructType\Type_ListeHinweise
    {
        return $this->listeHinweise;
    }

    /**
     * Set listeHinweise value
     */
    public function setListeHinweise(?\THAG\XKfz\StructType\Type_ListeHinweise $listeHinweise = null): self
    {
        $this->listeHinweise = $listeHinweise;

        return $this;
    }

    /**
     * Get annexOBFCM value
     */
    public function getAnnexOBFCM(): ?\THAG\XKfz\StructType\Type_AnnexOBFCM
    {
        return $this->annexOBFCM;
    }

    /**
     * Set annexOBFCM value
     */
    public function setAnnexOBFCM(?\THAG\XKfz\StructType\Type_AnnexOBFCM $annexOBFCM = null): self
    {
        $this->annexOBFCM = $annexOBFCM;

        return $this;
    }
}
