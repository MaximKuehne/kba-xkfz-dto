<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Kennzeichen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Kennzeichen extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The KennzeichenBisher
     */
    public ?string $KennzeichenBisher = null;

    /**
     * The MerkmalKennzeichenart
     */
    public ?string $MerkmalKennzeichenart = null;

    /**
     * The ListeMerkmalKennzeichenart
     */
    public ?\THAG\XKfz\StructType\ListeMerkmalKennzeichenart $ListeMerkmalKennzeichenart = null;

    /**
     * The MerkmalWechselkennzeichen
     */
    public ?string $MerkmalWechselkennzeichen = null;

    /**
     * The DatumAblaufKennzeichenreservierung
     */
    public ?string $DatumAblaufKennzeichenreservierung = null;

    /**
     * The BetriebszeitraumVon
     */
    public ?string $BetriebszeitraumVon = null;

    /**
     * The BetriebszeitraumBis
     */
    public ?string $BetriebszeitraumBis = null;

    /**
     * The ZeitpunktZuteilungKennzeichen
     */
    public ?string $ZeitpunktZuteilungKennzeichen = null;

    /**
     * The DatumKennzeichenGueltigBis
     */
    public ?string $DatumKennzeichenGueltigBis = null;

    /**
     * The AblauftageKurzzeitkennzeichen
     */
    public ?string $AblauftageKurzzeitkennzeichen = null;

    /**
     * The MerkmalElektrokennzeichen
     */
    public ?string $MerkmalElektrokennzeichen = null;

    /**
     * Constructor method for Kennzeichen
     *
     * @uses Kennzeichen::setKennzeichen()
     * @uses Kennzeichen::setKennzeichenBisher()
     * @uses Kennzeichen::setMerkmalKennzeichenart()
     * @uses Kennzeichen::setListeMerkmalKennzeichenart()
     * @uses Kennzeichen::setMerkmalWechselkennzeichen()
     * @uses Kennzeichen::setDatumAblaufKennzeichenreservierung()
     * @uses Kennzeichen::setBetriebszeitraumVon()
     * @uses Kennzeichen::setBetriebszeitraumBis()
     * @uses Kennzeichen::setZeitpunktZuteilungKennzeichen()
     * @uses Kennzeichen::setDatumKennzeichenGueltigBis()
     * @uses Kennzeichen::setAblauftageKurzzeitkennzeichen()
     * @uses Kennzeichen::setMerkmalElektrokennzeichen()
     */
    public function __construct(?string $kennzeichen = null, ?string $kennzeichenBisher = null, ?string $merkmalKennzeichenart = null, ?\THAG\XKfz\StructType\ListeMerkmalKennzeichenart $listeMerkmalKennzeichenart = null, ?string $merkmalWechselkennzeichen = null, ?string $datumAblaufKennzeichenreservierung = null, ?string $betriebszeitraumVon = null, ?string $betriebszeitraumBis = null, ?string $zeitpunktZuteilungKennzeichen = null, ?string $datumKennzeichenGueltigBis = null, ?string $ablauftageKurzzeitkennzeichen = null, ?string $merkmalElektrokennzeichen = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setKennzeichenBisher($kennzeichenBisher)
            ->setMerkmalKennzeichenart($merkmalKennzeichenart)
            ->setListeMerkmalKennzeichenart($listeMerkmalKennzeichenart)
            ->setMerkmalWechselkennzeichen($merkmalWechselkennzeichen)
            ->setDatumAblaufKennzeichenreservierung($datumAblaufKennzeichenreservierung)
            ->setBetriebszeitraumVon($betriebszeitraumVon)
            ->setBetriebszeitraumBis($betriebszeitraumBis)
            ->setZeitpunktZuteilungKennzeichen($zeitpunktZuteilungKennzeichen)
            ->setDatumKennzeichenGueltigBis($datumKennzeichenGueltigBis)
            ->setAblauftageKurzzeitkennzeichen($ablauftageKurzzeitkennzeichen)
            ->setMerkmalElektrokennzeichen($merkmalElektrokennzeichen);
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get KennzeichenBisher value
     */
    public function getKennzeichenBisher(): ?string
    {
        return $this->KennzeichenBisher;
    }

    /**
     * Set KennzeichenBisher value
     */
    public function setKennzeichenBisher(?string $kennzeichenBisher = null): self
    {
        $this->KennzeichenBisher = $kennzeichenBisher;

        return $this;
    }

    /**
     * Get MerkmalKennzeichenart value
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }

    /**
     * Set MerkmalKennzeichenart value
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;

        return $this;
    }

    /**
     * Get ListeMerkmalKennzeichenart value
     */
    public function getListeMerkmalKennzeichenart(): ?\THAG\XKfz\StructType\ListeMerkmalKennzeichenart
    {
        return $this->ListeMerkmalKennzeichenart;
    }

    /**
     * Set ListeMerkmalKennzeichenart value
     */
    public function setListeMerkmalKennzeichenart(?\THAG\XKfz\StructType\ListeMerkmalKennzeichenart $listeMerkmalKennzeichenart = null): self
    {
        $this->ListeMerkmalKennzeichenart = $listeMerkmalKennzeichenart;

        return $this;
    }

    /**
     * Get MerkmalWechselkennzeichen value
     */
    public function getMerkmalWechselkennzeichen(): ?string
    {
        return $this->MerkmalWechselkennzeichen;
    }

    /**
     * Set MerkmalWechselkennzeichen value
     */
    public function setMerkmalWechselkennzeichen(?string $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;

        return $this;
    }

    /**
     * Get DatumAblaufKennzeichenreservierung value
     */
    public function getDatumAblaufKennzeichenreservierung(): ?string
    {
        return $this->DatumAblaufKennzeichenreservierung;
    }

    /**
     * Set DatumAblaufKennzeichenreservierung value
     */
    public function setDatumAblaufKennzeichenreservierung(?string $datumAblaufKennzeichenreservierung = null): self
    {
        $this->DatumAblaufKennzeichenreservierung = $datumAblaufKennzeichenreservierung;

        return $this;
    }

    /**
     * Get BetriebszeitraumVon value
     */
    public function getBetriebszeitraumVon(): ?string
    {
        return $this->BetriebszeitraumVon;
    }

    /**
     * Set BetriebszeitraumVon value
     */
    public function setBetriebszeitraumVon(?string $betriebszeitraumVon = null): self
    {
        $this->BetriebszeitraumVon = $betriebszeitraumVon;

        return $this;
    }

    /**
     * Get BetriebszeitraumBis value
     */
    public function getBetriebszeitraumBis(): ?string
    {
        return $this->BetriebszeitraumBis;
    }

    /**
     * Set BetriebszeitraumBis value
     */
    public function setBetriebszeitraumBis(?string $betriebszeitraumBis = null): self
    {
        $this->BetriebszeitraumBis = $betriebszeitraumBis;

        return $this;
    }

    /**
     * Get ZeitpunktZuteilungKennzeichen value
     */
    public function getZeitpunktZuteilungKennzeichen(): ?string
    {
        return $this->ZeitpunktZuteilungKennzeichen;
    }

    /**
     * Set ZeitpunktZuteilungKennzeichen value
     */
    public function setZeitpunktZuteilungKennzeichen(?string $zeitpunktZuteilungKennzeichen = null): self
    {
        $this->ZeitpunktZuteilungKennzeichen = $zeitpunktZuteilungKennzeichen;

        return $this;
    }

    /**
     * Get DatumKennzeichenGueltigBis value
     */
    public function getDatumKennzeichenGueltigBis(): ?string
    {
        return $this->DatumKennzeichenGueltigBis;
    }

    /**
     * Set DatumKennzeichenGueltigBis value
     */
    public function setDatumKennzeichenGueltigBis(?string $datumKennzeichenGueltigBis = null): self
    {
        $this->DatumKennzeichenGueltigBis = $datumKennzeichenGueltigBis;

        return $this;
    }

    /**
     * Get AblauftageKurzzeitkennzeichen value
     */
    public function getAblauftageKurzzeitkennzeichen(): ?string
    {
        return $this->AblauftageKurzzeitkennzeichen;
    }

    /**
     * Set AblauftageKurzzeitkennzeichen value
     */
    public function setAblauftageKurzzeitkennzeichen(?string $ablauftageKurzzeitkennzeichen = null): self
    {
        $this->AblauftageKurzzeitkennzeichen = $ablauftageKurzzeitkennzeichen;

        return $this;
    }

    /**
     * Get MerkmalElektrokennzeichen value
     */
    public function getMerkmalElektrokennzeichen(): ?string
    {
        return $this->MerkmalElektrokennzeichen;
    }

    /**
     * Set MerkmalElektrokennzeichen value
     */
    public function setMerkmalElektrokennzeichen(?string $merkmalElektrokennzeichen = null): self
    {
        $this->MerkmalElektrokennzeichen = $merkmalElektrokennzeichen;

        return $this;
    }
}
