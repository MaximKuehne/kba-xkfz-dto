<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sabrinaErgebnisPosteingang StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SabrinaErgebnisPosteingang extends AbstractStructBase
{
    /**
     * The kommunikationskanal
     */
    public ?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null;

    /**
     * The anzahlDerNachrichten
     */
    public ?int $anzahlDerNachrichten = null;

    /**
     * The listeNachrichtenInfo
     */
    public ?\THAG\XKfz\StructType\Type_ListeNachrichtenInfo $listeNachrichtenInfo = null;

    /**
     * Constructor method for sabrinaErgebnisPosteingang
     *
     * @uses SabrinaErgebnisPosteingang::setKommunikationskanal()
     * @uses SabrinaErgebnisPosteingang::setAnzahlDerNachrichten()
     * @uses SabrinaErgebnisPosteingang::setListeNachrichtenInfo()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null, ?int $anzahlDerNachrichten = null, ?\THAG\XKfz\StructType\Type_ListeNachrichtenInfo $listeNachrichtenInfo = null)
    {
        $this
            ->setKommunikationskanal($kommunikationskanal)
            ->setAnzahlDerNachrichten($anzahlDerNachrichten)
            ->setListeNachrichtenInfo($listeNachrichtenInfo);
    }

    /**
     * Get kommunikationskanal value
     */
    public function getKommunikationskanal(): ?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA
    {
        return $this->kommunikationskanal;
    }

    /**
     * Set kommunikationskanal value
     */
    public function setKommunikationskanal(?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null): self
    {
        $this->kommunikationskanal = $kommunikationskanal;

        return $this;
    }

    /**
     * Get anzahlDerNachrichten value
     */
    public function getAnzahlDerNachrichten(): ?int
    {
        return $this->anzahlDerNachrichten;
    }

    /**
     * Set anzahlDerNachrichten value
     */
    public function setAnzahlDerNachrichten(?int $anzahlDerNachrichten = null): self
    {
        $this->anzahlDerNachrichten = $anzahlDerNachrichten;

        return $this;
    }

    /**
     * Get listeNachrichtenInfo value
     */
    public function getListeNachrichtenInfo(): ?\THAG\XKfz\StructType\Type_ListeNachrichtenInfo
    {
        return $this->listeNachrichtenInfo;
    }

    /**
     * Set listeNachrichtenInfo value
     */
    public function setListeNachrichtenInfo(?\THAG\XKfz\StructType\Type_ListeNachrichtenInfo $listeNachrichtenInfo = null): self
    {
        $this->listeNachrichtenInfo = $listeNachrichtenInfo;

        return $this;
    }
}
