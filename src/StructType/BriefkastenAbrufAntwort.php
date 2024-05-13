<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BriefkastenAbrufAntwort StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BriefkastenAbrufAntwort extends AbstractStructBase
{
    /**
     * The ListeNachricht
     */
    public ?\THAG\XKfz\StructType\ListeNachricht $ListeNachricht = null;

    /**
     * The ListeQuittung
     */
    public ?\THAG\XKfz\StructType\ListeQuittung $ListeQuittung = null;

    /**
     * Constructor method for BriefkastenAbrufAntwort
     *
     * @uses BriefkastenAbrufAntwort::setListeNachricht()
     * @uses BriefkastenAbrufAntwort::setListeQuittung()
     */
    public function __construct(?\THAG\XKfz\StructType\ListeNachricht $listeNachricht = null, ?\THAG\XKfz\StructType\ListeQuittung $listeQuittung = null)
    {
        $this
            ->setListeNachricht($listeNachricht)
            ->setListeQuittung($listeQuittung);
    }

    /**
     * Get ListeNachricht value
     */
    public function getListeNachricht(): ?\THAG\XKfz\StructType\ListeNachricht
    {
        return $this->ListeNachricht;
    }

    /**
     * Set ListeNachricht value
     */
    public function setListeNachricht(?\THAG\XKfz\StructType\ListeNachricht $listeNachricht = null): self
    {
        $this->ListeNachricht = $listeNachricht;

        return $this;
    }

    /**
     * Get ListeQuittung value
     */
    public function getListeQuittung(): ?\THAG\XKfz\StructType\ListeQuittung
    {
        return $this->ListeQuittung;
    }

    /**
     * Set ListeQuittung value
     */
    public function setListeQuittung(?\THAG\XKfz\StructType\ListeQuittung $listeQuittung = null): self
    {
        $this->ListeQuittung = $listeQuittung;

        return $this;
    }
}
