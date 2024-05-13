<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.MitteilungUntersuchungZFZR StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_MitteilungUntersuchungZFZR extends AbstractStructBase
{
    /**
     * The identifizierungFahrzeug
     * @var \THAG\XKfz\StructType\Type_IdentifizierungFahrzeug|null
     */
    public ?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeug $identifizierungFahrzeug = null;
    /**
     * The beschreibungFahrzeug
     * @var \THAG\XKfz\StructType\Type_BeschreibungFahrzeug|null
     */
    public ?\THAG\XKfz\StructType\Type_BeschreibungFahrzeug $beschreibungFahrzeug = null;
    /**
     * The identifizierungUntersuchung
     * @var \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchung $identifizierungUntersuchung = null;
    /**
     * The ergebnisUntersuchung
     * @var \THAG\XKfz\StructType\Type_ErgebnisUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Type_ErgebnisUntersuchung $ergebnisUntersuchung = null;
    /**
     * The listeMaengel
     * @var \THAG\XKfz\StructType\Type_ListeMaengel|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null;
    /**
     * The listeMonetaereEinnahmen
     * @var \THAG\XKfz\StructType\Type_ListeMonetaereEinnahmen|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeMonetaereEinnahmen $listeMonetaereEinnahmen = null;
    /**
     * The listeHinweise
     * @var \THAG\XKfz\StructType\Type_ListeHinweise|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeHinweise $listeHinweise = null;
    /**
     * The annexOBFCM
     * @var \THAG\XKfz\StructType\Type_AnnexOBFCM|null
     */
    public ?\THAG\XKfz\StructType\Type_AnnexOBFCM $annexOBFCM = null;
    /**
     * Constructor method for Type.MitteilungUntersuchungZFZR
     * @uses Type_MitteilungUntersuchungZFZR::setIdentifizierungFahrzeug()
     * @uses Type_MitteilungUntersuchungZFZR::setBeschreibungFahrzeug()
     * @uses Type_MitteilungUntersuchungZFZR::setIdentifizierungUntersuchung()
     * @uses Type_MitteilungUntersuchungZFZR::setErgebnisUntersuchung()
     * @uses Type_MitteilungUntersuchungZFZR::setListeMaengel()
     * @uses Type_MitteilungUntersuchungZFZR::setListeMonetaereEinnahmen()
     * @uses Type_MitteilungUntersuchungZFZR::setListeHinweise()
     * @uses Type_MitteilungUntersuchungZFZR::setAnnexOBFCM()
     * @param \THAG\XKfz\StructType\Type_IdentifizierungFahrzeug $identifizierungFahrzeug
     * @param \THAG\XKfz\StructType\Type_BeschreibungFahrzeug $beschreibungFahrzeug
     * @param \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung $identifizierungUntersuchung
     * @param \THAG\XKfz\StructType\Type_ErgebnisUntersuchung $ergebnisUntersuchung
     * @param \THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel
     * @param \THAG\XKfz\StructType\Type_ListeMonetaereEinnahmen $listeMonetaereEinnahmen
     * @param \THAG\XKfz\StructType\Type_ListeHinweise $listeHinweise
     * @param \THAG\XKfz\StructType\Type_AnnexOBFCM $annexOBFCM
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
     * @return \THAG\XKfz\StructType\Type_IdentifizierungFahrzeug|null
     */
    public function getIdentifizierungFahrzeug(): ?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeug
    {
        return $this->identifizierungFahrzeug;
    }
    /**
     * Set identifizierungFahrzeug value
     * @param \THAG\XKfz\StructType\Type_IdentifizierungFahrzeug $identifizierungFahrzeug
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZFZR
     */
    public function setIdentifizierungFahrzeug(?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeug $identifizierungFahrzeug = null): self
    {
        $this->identifizierungFahrzeug = $identifizierungFahrzeug;
        
        return $this;
    }
    /**
     * Get beschreibungFahrzeug value
     * @return \THAG\XKfz\StructType\Type_BeschreibungFahrzeug|null
     */
    public function getBeschreibungFahrzeug(): ?\THAG\XKfz\StructType\Type_BeschreibungFahrzeug
    {
        return $this->beschreibungFahrzeug;
    }
    /**
     * Set beschreibungFahrzeug value
     * @param \THAG\XKfz\StructType\Type_BeschreibungFahrzeug $beschreibungFahrzeug
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZFZR
     */
    public function setBeschreibungFahrzeug(?\THAG\XKfz\StructType\Type_BeschreibungFahrzeug $beschreibungFahrzeug = null): self
    {
        $this->beschreibungFahrzeug = $beschreibungFahrzeug;
        
        return $this;
    }
    /**
     * Get identifizierungUntersuchung value
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung|null
     */
    public function getIdentifizierungUntersuchung(): ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
    {
        return $this->identifizierungUntersuchung;
    }
    /**
     * Set identifizierungUntersuchung value
     * @param \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung $identifizierungUntersuchung
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZFZR
     */
    public function setIdentifizierungUntersuchung(?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchung $identifizierungUntersuchung = null): self
    {
        $this->identifizierungUntersuchung = $identifizierungUntersuchung;
        
        return $this;
    }
    /**
     * Get ergebnisUntersuchung value
     * @return \THAG\XKfz\StructType\Type_ErgebnisUntersuchung|null
     */
    public function getErgebnisUntersuchung(): ?\THAG\XKfz\StructType\Type_ErgebnisUntersuchung
    {
        return $this->ergebnisUntersuchung;
    }
    /**
     * Set ergebnisUntersuchung value
     * @param \THAG\XKfz\StructType\Type_ErgebnisUntersuchung $ergebnisUntersuchung
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZFZR
     */
    public function setErgebnisUntersuchung(?\THAG\XKfz\StructType\Type_ErgebnisUntersuchung $ergebnisUntersuchung = null): self
    {
        $this->ergebnisUntersuchung = $ergebnisUntersuchung;
        
        return $this;
    }
    /**
     * Get listeMaengel value
     * @return \THAG\XKfz\StructType\Type_ListeMaengel|null
     */
    public function getListeMaengel(): ?\THAG\XKfz\StructType\Type_ListeMaengel
    {
        return $this->listeMaengel;
    }
    /**
     * Set listeMaengel value
     * @param \THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZFZR
     */
    public function setListeMaengel(?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null): self
    {
        $this->listeMaengel = $listeMaengel;
        
        return $this;
    }
    /**
     * Get listeMonetaereEinnahmen value
     * @return \THAG\XKfz\StructType\Type_ListeMonetaereEinnahmen|null
     */
    public function getListeMonetaereEinnahmen(): ?\THAG\XKfz\StructType\Type_ListeMonetaereEinnahmen
    {
        return $this->listeMonetaereEinnahmen;
    }
    /**
     * Set listeMonetaereEinnahmen value
     * @param \THAG\XKfz\StructType\Type_ListeMonetaereEinnahmen $listeMonetaereEinnahmen
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZFZR
     */
    public function setListeMonetaereEinnahmen(?\THAG\XKfz\StructType\Type_ListeMonetaereEinnahmen $listeMonetaereEinnahmen = null): self
    {
        $this->listeMonetaereEinnahmen = $listeMonetaereEinnahmen;
        
        return $this;
    }
    /**
     * Get listeHinweise value
     * @return \THAG\XKfz\StructType\Type_ListeHinweise|null
     */
    public function getListeHinweise(): ?\THAG\XKfz\StructType\Type_ListeHinweise
    {
        return $this->listeHinweise;
    }
    /**
     * Set listeHinweise value
     * @param \THAG\XKfz\StructType\Type_ListeHinweise $listeHinweise
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZFZR
     */
    public function setListeHinweise(?\THAG\XKfz\StructType\Type_ListeHinweise $listeHinweise = null): self
    {
        $this->listeHinweise = $listeHinweise;
        
        return $this;
    }
    /**
     * Get annexOBFCM value
     * @return \THAG\XKfz\StructType\Type_AnnexOBFCM|null
     */
    public function getAnnexOBFCM(): ?\THAG\XKfz\StructType\Type_AnnexOBFCM
    {
        return $this->annexOBFCM;
    }
    /**
     * Set annexOBFCM value
     * @param \THAG\XKfz\StructType\Type_AnnexOBFCM $annexOBFCM
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZFZR
     */
    public function setAnnexOBFCM(?\THAG\XKfz\StructType\Type_AnnexOBFCM $annexOBFCM = null): self
    {
        $this->annexOBFCM = $annexOBFCM;
        
        return $this;
    }
}
