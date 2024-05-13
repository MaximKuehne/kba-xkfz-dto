<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.XKfzQuittung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_XKfzQuittung extends AbstractStructBase
{
    /**
     * The nachrichtentyp
     */
    public ?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp = null;

    /**
     * The nachrichtenid
     */
    public ?string $nachrichtenid = null;

    /**
     * The supportinformation
     */
    public ?\THAG\XKfz\StructType\Type_Supportinformation $supportinformation = null;

    /**
     * The ebene
     */
    public ?\THAG\XKfz\StructType\Code_Quittungsebene $ebene = null;

    /**
     * The art
     */
    public ?\THAG\XKfz\StructType\Code_Quittungsart $art = null;

    /**
     * The code
     */
    public ?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code = null;

    /**
     * Constructor method for Type.XKfzQuittung
     *
     * @uses Type_XKfzQuittung::setNachrichtentyp()
     * @uses Type_XKfzQuittung::setNachrichtenid()
     * @uses Type_XKfzQuittung::setSupportinformation()
     * @uses Type_XKfzQuittung::setEbene()
     * @uses Type_XKfzQuittung::setArt()
     * @uses Type_XKfzQuittung::setCode()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp = null, ?string $nachrichtenid = null, ?\THAG\XKfz\StructType\Type_Supportinformation $supportinformation = null, ?\THAG\XKfz\StructType\Code_Quittungsebene $ebene = null, ?\THAG\XKfz\StructType\Code_Quittungsart $art = null, ?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code = null)
    {
        $this
            ->setNachrichtentyp($nachrichtentyp)
            ->setNachrichtenid($nachrichtenid)
            ->setSupportinformation($supportinformation)
            ->setEbene($ebene)
            ->setArt($art)
            ->setCode($code);
    }

    /**
     * Get nachrichtentyp value
     */
    public function getNachrichtentyp(): ?\THAG\XKfz\StructType\Code_Nachrichtentyp
    {
        return $this->nachrichtentyp;
    }

    /**
     * Set nachrichtentyp value
     */
    public function setNachrichtentyp(?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp = null): self
    {
        $this->nachrichtentyp = $nachrichtentyp;

        return $this;
    }

    /**
     * Get nachrichtenid value
     */
    public function getNachrichtenid(): ?string
    {
        return $this->nachrichtenid;
    }

    /**
     * Set nachrichtenid value
     */
    public function setNachrichtenid(?string $nachrichtenid = null): self
    {
        $this->nachrichtenid = $nachrichtenid;

        return $this;
    }

    /**
     * Get supportinformation value
     */
    public function getSupportinformation(): ?\THAG\XKfz\StructType\Type_Supportinformation
    {
        return $this->supportinformation;
    }

    /**
     * Set supportinformation value
     */
    public function setSupportinformation(?\THAG\XKfz\StructType\Type_Supportinformation $supportinformation = null): self
    {
        $this->supportinformation = $supportinformation;

        return $this;
    }

    /**
     * Get ebene value
     */
    public function getEbene(): ?\THAG\XKfz\StructType\Code_Quittungsebene
    {
        return $this->ebene;
    }

    /**
     * Set ebene value
     */
    public function setEbene(?\THAG\XKfz\StructType\Code_Quittungsebene $ebene = null): self
    {
        $this->ebene = $ebene;

        return $this;
    }

    /**
     * Get art value
     */
    public function getArt(): ?\THAG\XKfz\StructType\Code_Quittungsart
    {
        return $this->art;
    }

    /**
     * Set art value
     */
    public function setArt(?\THAG\XKfz\StructType\Code_Quittungsart $art = null): self
    {
        $this->art = $art;

        return $this;
    }

    /**
     * Get code value
     */
    public function getCode(): ?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz
    {
        return $this->code;
    }

    /**
     * Set code value
     */
    public function setCode(?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code = null): self
    {
        $this->code = $code;

        return $this;
    }
}
