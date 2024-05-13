<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NachrichtenUebersicht StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NachrichtenUebersicht extends AbstractStructBase
{
    /**
     * The Zeitstempel
     */
    public ?string $Zeitstempel = null;

    /**
     * The Nachrichtentyp
     */
    public ?string $Nachrichtentyp = null;

    /**
     * The NachrichtenId
     */
    public ?string $NachrichtenId = null;

    /**
     * Constructor method for NachrichtenUebersicht
     *
     * @uses NachrichtenUebersicht::setZeitstempel()
     * @uses NachrichtenUebersicht::setNachrichtentyp()
     * @uses NachrichtenUebersicht::setNachrichtenId()
     */
    public function __construct(?string $zeitstempel = null, ?string $nachrichtentyp = null, ?string $nachrichtenId = null)
    {
        $this
            ->setZeitstempel($zeitstempel)
            ->setNachrichtentyp($nachrichtentyp)
            ->setNachrichtenId($nachrichtenId);
    }

    /**
     * Get Zeitstempel value
     */
    public function getZeitstempel(): ?string
    {
        return $this->Zeitstempel;
    }

    /**
     * Set Zeitstempel value
     */
    public function setZeitstempel(?string $zeitstempel = null): self
    {
        $this->Zeitstempel = $zeitstempel;

        return $this;
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
     * Get NachrichtenId value
     */
    public function getNachrichtenId(): ?string
    {
        return $this->NachrichtenId;
    }

    /**
     * Set NachrichtenId value
     */
    public function setNachrichtenId(?string $nachrichtenId = null): self
    {
        $this->NachrichtenId = $nachrichtenId;

        return $this;
    }
}
