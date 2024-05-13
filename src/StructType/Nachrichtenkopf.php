<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Nachrichtenkopf StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Nachrichtenkopf extends AbstractStructBase
{
    /**
     * The Nachrichtentyp
     */
    public ?string $Nachrichtentyp = null;

    /**
     * The Betriebsart
     */
    public ?string $Betriebsart = null;

    /**
     * The ListeNachrichtenId
     */
    public ?\THAG\XKfz\StructType\ListeNachrichtenId $ListeNachrichtenId = null;

    /**
     * The ListeTechnischeAbsenderinformationen
     */
    public ?\THAG\XKfz\StructType\ListeTechnischeAbsenderinformationen $ListeTechnischeAbsenderinformationen = null;

    /**
     * Constructor method for Nachrichtenkopf
     *
     * @uses Nachrichtenkopf::setNachrichtentyp()
     * @uses Nachrichtenkopf::setBetriebsart()
     * @uses Nachrichtenkopf::setListeNachrichtenId()
     * @uses Nachrichtenkopf::setListeTechnischeAbsenderinformationen()
     */
    public function __construct(?string $nachrichtentyp = null, ?string $betriebsart = null, ?\THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId = null, ?\THAG\XKfz\StructType\ListeTechnischeAbsenderinformationen $listeTechnischeAbsenderinformationen = null)
    {
        $this
            ->setNachrichtentyp($nachrichtentyp)
            ->setBetriebsart($betriebsart)
            ->setListeNachrichtenId($listeNachrichtenId)
            ->setListeTechnischeAbsenderinformationen($listeTechnischeAbsenderinformationen);
    }

    /**
     * Get Nachrichtentyp value
     */
    public function getNachrichtentyp(): ?string
    {
        return $this->Nachrichtentyp;
    }

    /**
     * Set Nachrichtentyp value
     */
    public function setNachrichtentyp(?string $nachrichtentyp = null): self
    {
        $this->Nachrichtentyp = $nachrichtentyp;

        return $this;
    }

    /**
     * Get Betriebsart value
     */
    public function getBetriebsart(): ?string
    {
        return $this->Betriebsart;
    }

    /**
     * Set Betriebsart value
     */
    public function setBetriebsart(?string $betriebsart = null): self
    {
        $this->Betriebsart = $betriebsart;

        return $this;
    }

    /**
     * Get ListeNachrichtenId value
     */
    public function getListeNachrichtenId(): ?\THAG\XKfz\StructType\ListeNachrichtenId
    {
        return $this->ListeNachrichtenId;
    }

    /**
     * Set ListeNachrichtenId value
     */
    public function setListeNachrichtenId(?\THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId = null): self
    {
        $this->ListeNachrichtenId = $listeNachrichtenId;

        return $this;
    }

    /**
     * Get ListeTechnischeAbsenderinformationen value
     */
    public function getListeTechnischeAbsenderinformationen(): ?\THAG\XKfz\StructType\ListeTechnischeAbsenderinformationen
    {
        return $this->ListeTechnischeAbsenderinformationen;
    }

    /**
     * Set ListeTechnischeAbsenderinformationen value
     */
    public function setListeTechnischeAbsenderinformationen(?\THAG\XKfz\StructType\ListeTechnischeAbsenderinformationen $listeTechnischeAbsenderinformationen = null): self
    {
        $this->ListeTechnischeAbsenderinformationen = $listeTechnischeAbsenderinformationen;

        return $this;
    }
}
