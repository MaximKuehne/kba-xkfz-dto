<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.MitteilungUntersuchungZS StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_MitteilungUntersuchungZS extends AbstractStructBase
{
    /**
     * The identifizierungFahrzeug
     * @var \THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS|null
     */
    public ?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS $identifizierungFahrzeug = null;
    /**
     * The beschreibungFahrzeug
     * @var \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS|null
     */
    public ?\THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS $beschreibungFahrzeug = null;
    /**
     * The identifizierungUntersuchung
     * @var \THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS|null
     */
    public ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS $identifizierungUntersuchung = null;
    /**
     * The ergebnisUntersuchung
     * @var \THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS|null
     */
    public ?\THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS $ergebnisUntersuchung = null;
    /**
     * The listeMaengel
     * @var \THAG\XKfz\StructType\Type_ListeMaengel|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null;
    /**
     * The listeUmruestungen
     * @var \THAG\XKfz\StructType\Type_ListeUmruestungen|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeUmruestungen $listeUmruestungen = null;
    /**
     * The technischePruefergebnisse
     * @var string|null
     */
    public ?string $technischePruefergebnisse = null;
    /**
     * Constructor method for Type.MitteilungUntersuchungZS
     * @uses Type_MitteilungUntersuchungZS::setIdentifizierungFahrzeug()
     * @uses Type_MitteilungUntersuchungZS::setBeschreibungFahrzeug()
     * @uses Type_MitteilungUntersuchungZS::setIdentifizierungUntersuchung()
     * @uses Type_MitteilungUntersuchungZS::setErgebnisUntersuchung()
     * @uses Type_MitteilungUntersuchungZS::setListeMaengel()
     * @uses Type_MitteilungUntersuchungZS::setListeUmruestungen()
     * @uses Type_MitteilungUntersuchungZS::setTechnischePruefergebnisse()
     * @param \THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS $identifizierungFahrzeug
     * @param \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS $beschreibungFahrzeug
     * @param \THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS $identifizierungUntersuchung
     * @param \THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS $ergebnisUntersuchung
     * @param \THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel
     * @param \THAG\XKfz\StructType\Type_ListeUmruestungen $listeUmruestungen
     * @param string $technischePruefergebnisse
     */
    public function __construct(?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS $identifizierungFahrzeug = null, ?\THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS $beschreibungFahrzeug = null, ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS $identifizierungUntersuchung = null, ?\THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS $ergebnisUntersuchung = null, ?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null, ?\THAG\XKfz\StructType\Type_ListeUmruestungen $listeUmruestungen = null, ?string $technischePruefergebnisse = null)
    {
        $this
            ->setIdentifizierungFahrzeug($identifizierungFahrzeug)
            ->setBeschreibungFahrzeug($beschreibungFahrzeug)
            ->setIdentifizierungUntersuchung($identifizierungUntersuchung)
            ->setErgebnisUntersuchung($ergebnisUntersuchung)
            ->setListeMaengel($listeMaengel)
            ->setListeUmruestungen($listeUmruestungen)
            ->setTechnischePruefergebnisse($technischePruefergebnisse);
    }
    /**
     * Get identifizierungFahrzeug value
     * @return \THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS|null
     */
    public function getIdentifizierungFahrzeug(): ?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS
    {
        return $this->identifizierungFahrzeug;
    }
    /**
     * Set identifizierungFahrzeug value
     * @param \THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS $identifizierungFahrzeug
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZS
     */
    public function setIdentifizierungFahrzeug(?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS $identifizierungFahrzeug = null): self
    {
        $this->identifizierungFahrzeug = $identifizierungFahrzeug;
        
        return $this;
    }
    /**
     * Get beschreibungFahrzeug value
     * @return \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS|null
     */
    public function getBeschreibungFahrzeug(): ?\THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS
    {
        return $this->beschreibungFahrzeug;
    }
    /**
     * Set beschreibungFahrzeug value
     * @param \THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS $beschreibungFahrzeug
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZS
     */
    public function setBeschreibungFahrzeug(?\THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS $beschreibungFahrzeug = null): self
    {
        $this->beschreibungFahrzeug = $beschreibungFahrzeug;
        
        return $this;
    }
    /**
     * Get identifizierungUntersuchung value
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS|null
     */
    public function getIdentifizierungUntersuchung(): ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS
    {
        return $this->identifizierungUntersuchung;
    }
    /**
     * Set identifizierungUntersuchung value
     * @param \THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS $identifizierungUntersuchung
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZS
     */
    public function setIdentifizierungUntersuchung(?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS $identifizierungUntersuchung = null): self
    {
        $this->identifizierungUntersuchung = $identifizierungUntersuchung;
        
        return $this;
    }
    /**
     * Get ergebnisUntersuchung value
     * @return \THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS|null
     */
    public function getErgebnisUntersuchung(): ?\THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS
    {
        return $this->ergebnisUntersuchung;
    }
    /**
     * Set ergebnisUntersuchung value
     * @param \THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS $ergebnisUntersuchung
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZS
     */
    public function setErgebnisUntersuchung(?\THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS $ergebnisUntersuchung = null): self
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
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZS
     */
    public function setListeMaengel(?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null): self
    {
        $this->listeMaengel = $listeMaengel;
        
        return $this;
    }
    /**
     * Get listeUmruestungen value
     * @return \THAG\XKfz\StructType\Type_ListeUmruestungen|null
     */
    public function getListeUmruestungen(): ?\THAG\XKfz\StructType\Type_ListeUmruestungen
    {
        return $this->listeUmruestungen;
    }
    /**
     * Set listeUmruestungen value
     * @param \THAG\XKfz\StructType\Type_ListeUmruestungen $listeUmruestungen
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZS
     */
    public function setListeUmruestungen(?\THAG\XKfz\StructType\Type_ListeUmruestungen $listeUmruestungen = null): self
    {
        $this->listeUmruestungen = $listeUmruestungen;
        
        return $this;
    }
    /**
     * Get technischePruefergebnisse value
     * @return string|null
     */
    public function getTechnischePruefergebnisse(): ?string
    {
        return $this->technischePruefergebnisse;
    }
    /**
     * Set technischePruefergebnisse value
     * @param string $technischePruefergebnisse
     * @return \THAG\XKfz\StructType\Type_MitteilungUntersuchungZS
     */
    public function setTechnischePruefergebnisse(?string $technischePruefergebnisse = null): self
    {
        $this->technischePruefergebnisse = $technischePruefergebnisse;
        
        return $this;
    }
}
