<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bonitaetsdaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Bonitaetsdaten extends AbstractStructBase
{
    /**
     * The Bonitaetsdienstleisternummer
     */
    public ?string $Bonitaetsdienstleisternummer = null;

    /**
     * The Bonitaetsanfragezeitpunkt
     */
    public ?string $Bonitaetsanfragezeitpunkt = null;

    /**
     * The Bonitaetsfehlercode
     */
    public ?string $Bonitaetsfehlercode = null;

    /**
     * The Bonitaetsfehlertext
     */
    public ?string $Bonitaetsfehlertext = null;

    /**
     * The Bonitaetsscore
     */
    public ?string $Bonitaetsscore = null;

    /**
     * The ListeBonitaetsmerkmal
     */
    public ?\THAG\XKfz\StructType\ListeBonitaetsmerkmal $ListeBonitaetsmerkmal = null;

    /**
     * The BonitaetspruefungPositiv
     */
    public ?string $BonitaetspruefungPositiv = null;

    /**
     * The ErmitteltePersonendaten
     */
    public ?\THAG\XKfz\StructType\ErmitteltePersonendaten $ErmitteltePersonendaten = null;

    /**
     * The ListeAbweichungPersonendaten
     */
    public ?\THAG\XKfz\StructType\ListeAbweichungPersonendaten $ListeAbweichungPersonendaten = null;

    /**
     * Constructor method for Bonitaetsdaten
     *
     * @uses Bonitaetsdaten::setBonitaetsdienstleisternummer()
     * @uses Bonitaetsdaten::setBonitaetsanfragezeitpunkt()
     * @uses Bonitaetsdaten::setBonitaetsfehlercode()
     * @uses Bonitaetsdaten::setBonitaetsfehlertext()
     * @uses Bonitaetsdaten::setBonitaetsscore()
     * @uses Bonitaetsdaten::setListeBonitaetsmerkmal()
     * @uses Bonitaetsdaten::setBonitaetspruefungPositiv()
     * @uses Bonitaetsdaten::setErmitteltePersonendaten()
     * @uses Bonitaetsdaten::setListeAbweichungPersonendaten()
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
     */
    public function getBonitaetsdienstleisternummer(): ?string
    {
        return $this->Bonitaetsdienstleisternummer;
    }

    /**
     * Set Bonitaetsdienstleisternummer value
     */
    public function setBonitaetsdienstleisternummer(?string $bonitaetsdienstleisternummer = null): self
    {
        $this->Bonitaetsdienstleisternummer = $bonitaetsdienstleisternummer;

        return $this;
    }

    /**
     * Get Bonitaetsanfragezeitpunkt value
     */
    public function getBonitaetsanfragezeitpunkt(): ?string
    {
        return $this->Bonitaetsanfragezeitpunkt;
    }

    /**
     * Set Bonitaetsanfragezeitpunkt value
     */
    public function setBonitaetsanfragezeitpunkt(?string $bonitaetsanfragezeitpunkt = null): self
    {
        $this->Bonitaetsanfragezeitpunkt = $bonitaetsanfragezeitpunkt;

        return $this;
    }

    /**
     * Get Bonitaetsfehlercode value
     */
    public function getBonitaetsfehlercode(): ?string
    {
        return $this->Bonitaetsfehlercode;
    }

    /**
     * Set Bonitaetsfehlercode value
     */
    public function setBonitaetsfehlercode(?string $bonitaetsfehlercode = null): self
    {
        $this->Bonitaetsfehlercode = $bonitaetsfehlercode;

        return $this;
    }

    /**
     * Get Bonitaetsfehlertext value
     */
    public function getBonitaetsfehlertext(): ?string
    {
        return $this->Bonitaetsfehlertext;
    }

    /**
     * Set Bonitaetsfehlertext value
     */
    public function setBonitaetsfehlertext(?string $bonitaetsfehlertext = null): self
    {
        $this->Bonitaetsfehlertext = $bonitaetsfehlertext;

        return $this;
    }

    /**
     * Get Bonitaetsscore value
     */
    public function getBonitaetsscore(): ?string
    {
        return $this->Bonitaetsscore;
    }

    /**
     * Set Bonitaetsscore value
     */
    public function setBonitaetsscore(?string $bonitaetsscore = null): self
    {
        $this->Bonitaetsscore = $bonitaetsscore;

        return $this;
    }

    /**
     * Get ListeBonitaetsmerkmal value
     */
    public function getListeBonitaetsmerkmal(): ?\THAG\XKfz\StructType\ListeBonitaetsmerkmal
    {
        return $this->ListeBonitaetsmerkmal;
    }

    /**
     * Set ListeBonitaetsmerkmal value
     */
    public function setListeBonitaetsmerkmal(?\THAG\XKfz\StructType\ListeBonitaetsmerkmal $listeBonitaetsmerkmal = null): self
    {
        $this->ListeBonitaetsmerkmal = $listeBonitaetsmerkmal;

        return $this;
    }

    /**
     * Get BonitaetspruefungPositiv value
     */
    public function getBonitaetspruefungPositiv(): ?string
    {
        return $this->BonitaetspruefungPositiv;
    }

    /**
     * Set BonitaetspruefungPositiv value
     */
    public function setBonitaetspruefungPositiv(?string $bonitaetspruefungPositiv = null): self
    {
        $this->BonitaetspruefungPositiv = $bonitaetspruefungPositiv;

        return $this;
    }

    /**
     * Get ErmitteltePersonendaten value
     */
    public function getErmitteltePersonendaten(): ?\THAG\XKfz\StructType\ErmitteltePersonendaten
    {
        return $this->ErmitteltePersonendaten;
    }

    /**
     * Set ErmitteltePersonendaten value
     */
    public function setErmitteltePersonendaten(?\THAG\XKfz\StructType\ErmitteltePersonendaten $ermitteltePersonendaten = null): self
    {
        $this->ErmitteltePersonendaten = $ermitteltePersonendaten;

        return $this;
    }

    /**
     * Get ListeAbweichungPersonendaten value
     */
    public function getListeAbweichungPersonendaten(): ?\THAG\XKfz\StructType\ListeAbweichungPersonendaten
    {
        return $this->ListeAbweichungPersonendaten;
    }

    /**
     * Set ListeAbweichungPersonendaten value
     */
    public function setListeAbweichungPersonendaten(?\THAG\XKfz\StructType\ListeAbweichungPersonendaten $listeAbweichungPersonendaten = null): self
    {
        $this->ListeAbweichungPersonendaten = $listeAbweichungPersonendaten;

        return $this;
    }
}
