<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bonitaetsdaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Bonitaetsdaten extends AbstractStructBase
{
    /**
     * The Bonitaetsdienstleisternummer
     * @var string|null
     */
    public ?string $Bonitaetsdienstleisternummer = null;
    /**
     * The Bonitaetsanfragezeitpunkt
     * @var string|null
     */
    public ?string $Bonitaetsanfragezeitpunkt = null;
    /**
     * The Bonitaetsfehlercode
     * @var string|null
     */
    public ?string $Bonitaetsfehlercode = null;
    /**
     * The Bonitaetsfehlertext
     * @var string|null
     */
    public ?string $Bonitaetsfehlertext = null;
    /**
     * The Bonitaetsscore
     * @var string|null
     */
    public ?string $Bonitaetsscore = null;
    /**
     * The ListeBonitaetsmerkmal
     * @var \THAG\XKfz\StructType\ListeBonitaetsmerkmal|null
     */
    public ?\THAG\XKfz\StructType\ListeBonitaetsmerkmal $ListeBonitaetsmerkmal = null;
    /**
     * The BonitaetspruefungPositiv
     * @var string|null
     */
    public ?string $BonitaetspruefungPositiv = null;
    /**
     * The ErmitteltePersonendaten
     * @var \THAG\XKfz\StructType\ErmitteltePersonendaten|null
     */
    public ?\THAG\XKfz\StructType\ErmitteltePersonendaten $ErmitteltePersonendaten = null;
    /**
     * The ListeAbweichungPersonendaten
     * @var \THAG\XKfz\StructType\ListeAbweichungPersonendaten|null
     */
    public ?\THAG\XKfz\StructType\ListeAbweichungPersonendaten $ListeAbweichungPersonendaten = null;
    /**
     * Constructor method for Bonitaetsdaten
     * @uses Bonitaetsdaten::setBonitaetsdienstleisternummer()
     * @uses Bonitaetsdaten::setBonitaetsanfragezeitpunkt()
     * @uses Bonitaetsdaten::setBonitaetsfehlercode()
     * @uses Bonitaetsdaten::setBonitaetsfehlertext()
     * @uses Bonitaetsdaten::setBonitaetsscore()
     * @uses Bonitaetsdaten::setListeBonitaetsmerkmal()
     * @uses Bonitaetsdaten::setBonitaetspruefungPositiv()
     * @uses Bonitaetsdaten::setErmitteltePersonendaten()
     * @uses Bonitaetsdaten::setListeAbweichungPersonendaten()
     * @param string $bonitaetsdienstleisternummer
     * @param string $bonitaetsanfragezeitpunkt
     * @param string $bonitaetsfehlercode
     * @param string $bonitaetsfehlertext
     * @param string $bonitaetsscore
     * @param \THAG\XKfz\StructType\ListeBonitaetsmerkmal $listeBonitaetsmerkmal
     * @param string $bonitaetspruefungPositiv
     * @param \THAG\XKfz\StructType\ErmitteltePersonendaten $ermitteltePersonendaten
     * @param \THAG\XKfz\StructType\ListeAbweichungPersonendaten $listeAbweichungPersonendaten
     */
    public function __construct(?string $bonitaetsdienstleisternummer = null, ?string $bonitaetsanfragezeitpunkt = null, ?string $bonitaetsfehlercode = null, ?string $bonitaetsfehlertext = null, ?string $bonitaetsscore = null, ?\THAG\XKfz\StructType\ListeBonitaetsmerkmal $listeBonitaetsmerkmal = null, ?string $bonitaetspruefungPositiv = null, ?\THAG\XKfz\StructType\ErmitteltePersonendaten $ermitteltePersonendaten = null, ?\THAG\XKfz\StructType\ListeAbweichungPersonendaten $listeAbweichungPersonendaten = null)
    {
        $this
            ->setBonitaetsdienstleisternummer($bonitaetsdienstleisternummer)
            ->setBonitaetsanfragezeitpunkt($bonitaetsanfragezeitpunkt)
            ->setBonitaetsfehlercode($bonitaetsfehlercode)
            ->setBonitaetsfehlertext($bonitaetsfehlertext)
            ->setBonitaetsscore($bonitaetsscore)
            ->setListeBonitaetsmerkmal($listeBonitaetsmerkmal)
            ->setBonitaetspruefungPositiv($bonitaetspruefungPositiv)
            ->setErmitteltePersonendaten($ermitteltePersonendaten)
            ->setListeAbweichungPersonendaten($listeAbweichungPersonendaten);
    }
    /**
     * Get Bonitaetsdienstleisternummer value
     * @return string|null
     */
    public function getBonitaetsdienstleisternummer(): ?string
    {
        return $this->Bonitaetsdienstleisternummer;
    }
    /**
     * Set Bonitaetsdienstleisternummer value
     * @param string $bonitaetsdienstleisternummer
     * @return \THAG\XKfz\StructType\Bonitaetsdaten
     */
    public function setBonitaetsdienstleisternummer(?string $bonitaetsdienstleisternummer = null): self
    {
        $this->Bonitaetsdienstleisternummer = $bonitaetsdienstleisternummer;
        
        return $this;
    }
    /**
     * Get Bonitaetsanfragezeitpunkt value
     * @return string|null
     */
    public function getBonitaetsanfragezeitpunkt(): ?string
    {
        return $this->Bonitaetsanfragezeitpunkt;
    }
    /**
     * Set Bonitaetsanfragezeitpunkt value
     * @param string $bonitaetsanfragezeitpunkt
     * @return \THAG\XKfz\StructType\Bonitaetsdaten
     */
    public function setBonitaetsanfragezeitpunkt(?string $bonitaetsanfragezeitpunkt = null): self
    {
        $this->Bonitaetsanfragezeitpunkt = $bonitaetsanfragezeitpunkt;
        
        return $this;
    }
    /**
     * Get Bonitaetsfehlercode value
     * @return string|null
     */
    public function getBonitaetsfehlercode(): ?string
    {
        return $this->Bonitaetsfehlercode;
    }
    /**
     * Set Bonitaetsfehlercode value
     * @param string $bonitaetsfehlercode
     * @return \THAG\XKfz\StructType\Bonitaetsdaten
     */
    public function setBonitaetsfehlercode(?string $bonitaetsfehlercode = null): self
    {
        $this->Bonitaetsfehlercode = $bonitaetsfehlercode;
        
        return $this;
    }
    /**
     * Get Bonitaetsfehlertext value
     * @return string|null
     */
    public function getBonitaetsfehlertext(): ?string
    {
        return $this->Bonitaetsfehlertext;
    }
    /**
     * Set Bonitaetsfehlertext value
     * @param string $bonitaetsfehlertext
     * @return \THAG\XKfz\StructType\Bonitaetsdaten
     */
    public function setBonitaetsfehlertext(?string $bonitaetsfehlertext = null): self
    {
        $this->Bonitaetsfehlertext = $bonitaetsfehlertext;
        
        return $this;
    }
    /**
     * Get Bonitaetsscore value
     * @return string|null
     */
    public function getBonitaetsscore(): ?string
    {
        return $this->Bonitaetsscore;
    }
    /**
     * Set Bonitaetsscore value
     * @param string $bonitaetsscore
     * @return \THAG\XKfz\StructType\Bonitaetsdaten
     */
    public function setBonitaetsscore(?string $bonitaetsscore = null): self
    {
        $this->Bonitaetsscore = $bonitaetsscore;
        
        return $this;
    }
    /**
     * Get ListeBonitaetsmerkmal value
     * @return \THAG\XKfz\StructType\ListeBonitaetsmerkmal|null
     */
    public function getListeBonitaetsmerkmal(): ?\THAG\XKfz\StructType\ListeBonitaetsmerkmal
    {
        return $this->ListeBonitaetsmerkmal;
    }
    /**
     * Set ListeBonitaetsmerkmal value
     * @param \THAG\XKfz\StructType\ListeBonitaetsmerkmal $listeBonitaetsmerkmal
     * @return \THAG\XKfz\StructType\Bonitaetsdaten
     */
    public function setListeBonitaetsmerkmal(?\THAG\XKfz\StructType\ListeBonitaetsmerkmal $listeBonitaetsmerkmal = null): self
    {
        $this->ListeBonitaetsmerkmal = $listeBonitaetsmerkmal;
        
        return $this;
    }
    /**
     * Get BonitaetspruefungPositiv value
     * @return string|null
     */
    public function getBonitaetspruefungPositiv(): ?string
    {
        return $this->BonitaetspruefungPositiv;
    }
    /**
     * Set BonitaetspruefungPositiv value
     * @param string $bonitaetspruefungPositiv
     * @return \THAG\XKfz\StructType\Bonitaetsdaten
     */
    public function setBonitaetspruefungPositiv(?string $bonitaetspruefungPositiv = null): self
    {
        $this->BonitaetspruefungPositiv = $bonitaetspruefungPositiv;
        
        return $this;
    }
    /**
     * Get ErmitteltePersonendaten value
     * @return \THAG\XKfz\StructType\ErmitteltePersonendaten|null
     */
    public function getErmitteltePersonendaten(): ?\THAG\XKfz\StructType\ErmitteltePersonendaten
    {
        return $this->ErmitteltePersonendaten;
    }
    /**
     * Set ErmitteltePersonendaten value
     * @param \THAG\XKfz\StructType\ErmitteltePersonendaten $ermitteltePersonendaten
     * @return \THAG\XKfz\StructType\Bonitaetsdaten
     */
    public function setErmitteltePersonendaten(?\THAG\XKfz\StructType\ErmitteltePersonendaten $ermitteltePersonendaten = null): self
    {
        $this->ErmitteltePersonendaten = $ermitteltePersonendaten;
        
        return $this;
    }
    /**
     * Get ListeAbweichungPersonendaten value
     * @return \THAG\XKfz\StructType\ListeAbweichungPersonendaten|null
     */
    public function getListeAbweichungPersonendaten(): ?\THAG\XKfz\StructType\ListeAbweichungPersonendaten
    {
        return $this->ListeAbweichungPersonendaten;
    }
    /**
     * Set ListeAbweichungPersonendaten value
     * @param \THAG\XKfz\StructType\ListeAbweichungPersonendaten $listeAbweichungPersonendaten
     * @return \THAG\XKfz\StructType\Bonitaetsdaten
     */
    public function setListeAbweichungPersonendaten(?\THAG\XKfz\StructType\ListeAbweichungPersonendaten $listeAbweichungPersonendaten = null): self
    {
        $this->ListeAbweichungPersonendaten = $listeAbweichungPersonendaten;
        
        return $this;
    }
}
