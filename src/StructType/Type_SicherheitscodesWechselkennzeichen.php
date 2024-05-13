<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.SicherheitscodesWechselkennzeichen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_SicherheitscodesWechselkennzeichen extends AbstractStructBase
{
    /**
     * The SicherheitscodeKennzWK
     */
    public ?string $SicherheitscodeKennzWK = null;

    /**
     * The wechselteil
     */
    public ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselteil $wechselteil = null;

    /**
     * Constructor method for Type.SicherheitscodesWechselkennzeichen
     *
     * @uses Type_SicherheitscodesWechselkennzeichen::setSicherheitscodeKennzWK()
     * @uses Type_SicherheitscodesWechselkennzeichen::setWechselteil()
     */
    public function __construct(?string $sicherheitscodeKennzWK = null, ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselteil $wechselteil = null)
    {
        $this
            ->setSicherheitscodeKennzWK($sicherheitscodeKennzWK)
            ->setWechselteil($wechselteil);
    }

    /**
     * Get SicherheitscodeKennzWK value
     */
    public function getSicherheitscodeKennzWK(): ?string
    {
        return $this->SicherheitscodeKennzWK;
    }

    /**
     * Set SicherheitscodeKennzWK value
     */
    public function setSicherheitscodeKennzWK(?string $sicherheitscodeKennzWK = null): self
    {
        $this->SicherheitscodeKennzWK = $sicherheitscodeKennzWK;

        return $this;
    }

    /**
     * Get wechselteil value
     */
    public function getWechselteil(): ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselteil
    {
        return $this->wechselteil;
    }

    /**
     * Set wechselteil value
     */
    public function setWechselteil(?\THAG\XKfz\StructType\Type_SicherheitscodesWechselteil $wechselteil = null): self
    {
        $this->wechselteil = $wechselteil;

        return $this;
    }
}
