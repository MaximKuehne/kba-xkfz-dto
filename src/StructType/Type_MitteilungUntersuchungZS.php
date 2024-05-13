<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.MitteilungUntersuchungZS StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_MitteilungUntersuchungZS extends AbstractStructBase
{
    /**
     * The identifizierungFahrzeug
     */
    public ?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS $identifizierungFahrzeug = null;

    /**
     * The beschreibungFahrzeug
     */
    public ?\THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS $beschreibungFahrzeug = null;

    /**
     * The identifizierungUntersuchung
     */
    public ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS $identifizierungUntersuchung = null;

    /**
     * The ergebnisUntersuchung
     */
    public ?\THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS $ergebnisUntersuchung = null;

    /**
     * The listeMaengel
     */
    public ?\THAG\XKfz\StructType\Type_ListeMaengel $listeMaengel = null;

    /**
     * The listeUmruestungen
     */
    public ?\THAG\XKfz\StructType\Type_ListeUmruestungen $listeUmruestungen = null;

    /**
     * The technischePruefergebnisse
     */
    public ?string $technischePruefergebnisse = null;

    /**
     * Constructor method for Type.MitteilungUntersuchungZS
     *
     * @uses Type_MitteilungUntersuchungZS::setIdentifizierungFahrzeug()
     * @uses Type_MitteilungUntersuchungZS::setBeschreibungFahrzeug()
     * @uses Type_MitteilungUntersuchungZS::setIdentifizierungUntersuchung()
     * @uses Type_MitteilungUntersuchungZS::setErgebnisUntersuchung()
     * @uses Type_MitteilungUntersuchungZS::setListeMaengel()
     * @uses Type_MitteilungUntersuchungZS::setListeUmruestungen()
     * @uses Type_MitteilungUntersuchungZS::setTechnischePruefergebnisse()
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
     */
    public function getIdentifizierungFahrzeug(): ?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS
    {
        return $this->identifizierungFahrzeug;
    }

    /**
     * Set identifizierungFahrzeug value
     */
    public function setIdentifizierungFahrzeug(?\THAG\XKfz\StructType\Type_IdentifizierungFahrzeugZS $identifizierungFahrzeug = null): self
    {
        $this->identifizierungFahrzeug = $identifizierungFahrzeug;

        return $this;
    }

    /**
     * Get beschreibungFahrzeug value
     */
    public function getBeschreibungFahrzeug(): ?\THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS
    {
        return $this->beschreibungFahrzeug;
    }

    /**
     * Set beschreibungFahrzeug value
     */
    public function setBeschreibungFahrzeug(?\THAG\XKfz\StructType\Type_BeschreibungFahrzeugZS $beschreibungFahrzeug = null): self
    {
        $this->beschreibungFahrzeug = $beschreibungFahrzeug;

        return $this;
    }

    /**
     * Get identifizierungUntersuchung value
     */
    public function getIdentifizierungUntersuchung(): ?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS
    {
        return $this->identifizierungUntersuchung;
    }

    /**
     * Set identifizierungUntersuchung value
     */
    public function setIdentifizierungUntersuchung(?\THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS $identifizierungUntersuchung = null): self
    {
        $this->identifizierungUntersuchung = $identifizierungUntersuchung;

        return $this;
    }

    /**
     * Get ergebnisUntersuchung value
     */
    public function getErgebnisUntersuchung(): ?\THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS
    {
        return $this->ergebnisUntersuchung;
    }

    /**
     * Set ergebnisUntersuchung value
     */
    public function setErgebnisUntersuchung(?\THAG\XKfz\StructType\Type_ErgebnisUntersuchungZS $ergebnisUntersuchung = null): self
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
     * Get listeUmruestungen value
     */
    public function getListeUmruestungen(): ?\THAG\XKfz\StructType\Type_ListeUmruestungen
    {
        return $this->listeUmruestungen;
    }

    /**
     * Set listeUmruestungen value
     */
    public function setListeUmruestungen(?\THAG\XKfz\StructType\Type_ListeUmruestungen $listeUmruestungen = null): self
    {
        $this->listeUmruestungen = $listeUmruestungen;

        return $this;
    }

    /**
     * Get technischePruefergebnisse value
     */
    public function getTechnischePruefergebnisse(): ?string
    {
        return $this->technischePruefergebnisse;
    }

    /**
     * Set technischePruefergebnisse value
     */
    public function setTechnischePruefergebnisse(?string $technischePruefergebnisse = null): self
    {
        $this->technischePruefergebnisse = $technischePruefergebnisse;

        return $this;
    }
}
