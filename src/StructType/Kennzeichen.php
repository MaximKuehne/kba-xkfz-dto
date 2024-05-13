<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Kennzeichen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Kennzeichen extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The KennzeichenBisher
     * @var string|null
     */
    public ?string $KennzeichenBisher = null;
    /**
     * The MerkmalKennzeichenart
     * @var string|null
     */
    public ?string $MerkmalKennzeichenart = null;
    /**
     * The ListeMerkmalKennzeichenart
     * @var \THAG\XKfz\StructType\ListeMerkmalKennzeichenart|null
     */
    public ?\THAG\XKfz\StructType\ListeMerkmalKennzeichenart $ListeMerkmalKennzeichenart = null;
    /**
     * The MerkmalWechselkennzeichen
     * @var string|null
     */
    public ?string $MerkmalWechselkennzeichen = null;
    /**
     * The DatumAblaufKennzeichenreservierung
     * @var string|null
     */
    public ?string $DatumAblaufKennzeichenreservierung = null;
    /**
     * The BetriebszeitraumVon
     * @var string|null
     */
    public ?string $BetriebszeitraumVon = null;
    /**
     * The BetriebszeitraumBis
     * @var string|null
     */
    public ?string $BetriebszeitraumBis = null;
    /**
     * The ZeitpunktZuteilungKennzeichen
     * @var string|null
     */
    public ?string $ZeitpunktZuteilungKennzeichen = null;
    /**
     * The DatumKennzeichenGueltigBis
     * @var string|null
     */
    public ?string $DatumKennzeichenGueltigBis = null;
    /**
     * The AblauftageKurzzeitkennzeichen
     * @var string|null
     */
    public ?string $AblauftageKurzzeitkennzeichen = null;
    /**
     * The MerkmalElektrokennzeichen
     * @var string|null
     */
    public ?string $MerkmalElektrokennzeichen = null;
    /**
     * Constructor method for Kennzeichen
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
     * @param string $kennzeichen
     * @param string $kennzeichenBisher
     * @param string $merkmalKennzeichenart
     * @param \THAG\XKfz\StructType\ListeMerkmalKennzeichenart $listeMerkmalKennzeichenart
     * @param string $merkmalWechselkennzeichen
     * @param string $datumAblaufKennzeichenreservierung
     * @param string $betriebszeitraumVon
     * @param string $betriebszeitraumBis
     * @param string $zeitpunktZuteilungKennzeichen
     * @param string $datumKennzeichenGueltigBis
     * @param string $ablauftageKurzzeitkennzeichen
     * @param string $merkmalElektrokennzeichen
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
     * @return string|null
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param string $kennzeichen
     * @return \THAG\XKfz\StructType\Kennzeichen
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get KennzeichenBisher value
     * @return string|null
     */
    public function getKennzeichenBisher(): ?string
    {
        return $this->KennzeichenBisher;
    }
    /**
     * Set KennzeichenBisher value
     * @param string $kennzeichenBisher
     * @return \THAG\XKfz\StructType\Kennzeichen
     */
    public function setKennzeichenBisher(?string $kennzeichenBisher = null): self
    {
        $this->KennzeichenBisher = $kennzeichenBisher;
        
        return $this;
    }
    /**
     * Get MerkmalKennzeichenart value
     * @return string|null
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }
    /**
     * Set MerkmalKennzeichenart value
     * @param string $merkmalKennzeichenart
     * @return \THAG\XKfz\StructType\Kennzeichen
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;
        
        return $this;
    }
    /**
     * Get ListeMerkmalKennzeichenart value
     * @return \THAG\XKfz\StructType\ListeMerkmalKennzeichenart|null
     */
    public function getListeMerkmalKennzeichenart(): ?\THAG\XKfz\StructType\ListeMerkmalKennzeichenart
    {
        return $this->ListeMerkmalKennzeichenart;
    }
    /**
     * Set ListeMerkmalKennzeichenart value
     * @param \THAG\XKfz\StructType\ListeMerkmalKennzeichenart $listeMerkmalKennzeichenart
     * @return \THAG\XKfz\StructType\Kennzeichen
     */
    public function setListeMerkmalKennzeichenart(?\THAG\XKfz\StructType\ListeMerkmalKennzeichenart $listeMerkmalKennzeichenart = null): self
    {
        $this->ListeMerkmalKennzeichenart = $listeMerkmalKennzeichenart;
        
        return $this;
    }
    /**
     * Get MerkmalWechselkennzeichen value
     * @return string|null
     */
    public function getMerkmalWechselkennzeichen(): ?string
    {
        return $this->MerkmalWechselkennzeichen;
    }
    /**
     * Set MerkmalWechselkennzeichen value
     * @param string $merkmalWechselkennzeichen
     * @return \THAG\XKfz\StructType\Kennzeichen
     */
    public function setMerkmalWechselkennzeichen(?string $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;
        
        return $this;
    }
    /**
     * Get DatumAblaufKennzeichenreservierung value
     * @return string|null
     */
    public function getDatumAblaufKennzeichenreservierung(): ?string
    {
        return $this->DatumAblaufKennzeichenreservierung;
    }
    /**
     * Set DatumAblaufKennzeichenreservierung value
     * @param string $datumAblaufKennzeichenreservierung
     * @return \THAG\XKfz\StructType\Kennzeichen
     */
    public function setDatumAblaufKennzeichenreservierung(?string $datumAblaufKennzeichenreservierung = null): self
    {
        $this->DatumAblaufKennzeichenreservierung = $datumAblaufKennzeichenreservierung;
        
        return $this;
    }
    /**
     * Get BetriebszeitraumVon value
     * @return string|null
     */
    public function getBetriebszeitraumVon(): ?string
    {
        return $this->BetriebszeitraumVon;
    }
    /**
     * Set BetriebszeitraumVon value
     * @param string $betriebszeitraumVon
     * @return \THAG\XKfz\StructType\Kennzeichen
     */
    public function setBetriebszeitraumVon(?string $betriebszeitraumVon = null): self
    {
        $this->BetriebszeitraumVon = $betriebszeitraumVon;
        
        return $this;
    }
    /**
     * Get BetriebszeitraumBis value
     * @return string|null
     */
    public function getBetriebszeitraumBis(): ?string
    {
        return $this->BetriebszeitraumBis;
    }
    /**
     * Set BetriebszeitraumBis value
     * @param string $betriebszeitraumBis
     * @return \THAG\XKfz\StructType\Kennzeichen
     */
    public function setBetriebszeitraumBis(?string $betriebszeitraumBis = null): self
    {
        $this->BetriebszeitraumBis = $betriebszeitraumBis;
        
        return $this;
    }
    /**
     * Get ZeitpunktZuteilungKennzeichen value
     * @return string|null
     */
    public function getZeitpunktZuteilungKennzeichen(): ?string
    {
        return $this->ZeitpunktZuteilungKennzeichen;
    }
    /**
     * Set ZeitpunktZuteilungKennzeichen value
     * @param string $zeitpunktZuteilungKennzeichen
     * @return \THAG\XKfz\StructType\Kennzeichen
     */
    public function setZeitpunktZuteilungKennzeichen(?string $zeitpunktZuteilungKennzeichen = null): self
    {
        $this->ZeitpunktZuteilungKennzeichen = $zeitpunktZuteilungKennzeichen;
        
        return $this;
    }
    /**
     * Get DatumKennzeichenGueltigBis value
     * @return string|null
     */
    public function getDatumKennzeichenGueltigBis(): ?string
    {
        return $this->DatumKennzeichenGueltigBis;
    }
    /**
     * Set DatumKennzeichenGueltigBis value
     * @param string $datumKennzeichenGueltigBis
     * @return \THAG\XKfz\StructType\Kennzeichen
     */
    public function setDatumKennzeichenGueltigBis(?string $datumKennzeichenGueltigBis = null): self
    {
        $this->DatumKennzeichenGueltigBis = $datumKennzeichenGueltigBis;
        
        return $this;
    }
    /**
     * Get AblauftageKurzzeitkennzeichen value
     * @return string|null
     */
    public function getAblauftageKurzzeitkennzeichen(): ?string
    {
        return $this->AblauftageKurzzeitkennzeichen;
    }
    /**
     * Set AblauftageKurzzeitkennzeichen value
     * @param string $ablauftageKurzzeitkennzeichen
     * @return \THAG\XKfz\StructType\Kennzeichen
     */
    public function setAblauftageKurzzeitkennzeichen(?string $ablauftageKurzzeitkennzeichen = null): self
    {
        $this->AblauftageKurzzeitkennzeichen = $ablauftageKurzzeitkennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalElektrokennzeichen value
     * @return string|null
     */
    public function getMerkmalElektrokennzeichen(): ?string
    {
        return $this->MerkmalElektrokennzeichen;
    }
    /**
     * Set MerkmalElektrokennzeichen value
     * @param string $merkmalElektrokennzeichen
     * @return \THAG\XKfz\StructType\Kennzeichen
     */
    public function setMerkmalElektrokennzeichen(?string $merkmalElektrokennzeichen = null): self
    {
        $this->MerkmalElektrokennzeichen = $merkmalElektrokennzeichen;
        
        return $this;
    }
}
