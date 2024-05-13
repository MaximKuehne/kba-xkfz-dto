<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Kennzeichen.ErgebnisKennzeichenreservierungPruefen.0613 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_ErgebnisKennzeichenreservierungPruefen_0613 extends AbstractStructBase
{
    /**
     * The datenKennzeichenreservierung
     */
    public ?\THAG\XKfz\StructType\DatenKennzeichenreservierung $datenKennzeichenreservierung = null;

    /**
     * Constructor method for
     * Type.Kennzeichen.ErgebnisKennzeichenreservierungPruefen.0613
     *
     * @uses Type_Kennzeichen_ErgebnisKennzeichenreservierungPruefen_0613::setDatenKennzeichenreservierung()
     */
    public function __construct(?\THAG\XKfz\StructType\DatenKennzeichenreservierung $datenKennzeichenreservierung = null)
    {
        $this
            ->setDatenKennzeichenreservierung($datenKennzeichenreservierung);
    }

    /**
     * Get datenKennzeichenreservierung value
     */
    public function getDatenKennzeichenreservierung(): ?\THAG\XKfz\StructType\DatenKennzeichenreservierung
    {
        return $this->datenKennzeichenreservierung;
    }

    /**
     * Set datenKennzeichenreservierung value
     */
    public function setDatenKennzeichenreservierung(?\THAG\XKfz\StructType\DatenKennzeichenreservierung $datenKennzeichenreservierung = null): self
    {
        $this->datenKennzeichenreservierung = $datenKennzeichenreservierung;

        return $this;
    }
}
