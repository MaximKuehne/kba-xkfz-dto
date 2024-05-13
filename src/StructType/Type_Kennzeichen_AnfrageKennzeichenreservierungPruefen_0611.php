<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Kennzeichen.AnfrageKennzeichenreservierungPruefen.0611 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageKennzeichenreservierungPruefen_0611 extends AbstractStructBase
{
    /**
     * The pruefungKennzeichenreservierung
     */
    public ?\THAG\XKfz\StructType\PruefungKennzeichenreservierung $pruefungKennzeichenreservierung = null;

    /**
     * Constructor method for
     * Type.Kennzeichen.AnfrageKennzeichenreservierungPruefen.0611
     *
     * @uses Type_Kennzeichen_AnfrageKennzeichenreservierungPruefen_0611::setPruefungKennzeichenreservierung()
     */
    public function __construct(?\THAG\XKfz\StructType\PruefungKennzeichenreservierung $pruefungKennzeichenreservierung = null)
    {
        $this
            ->setPruefungKennzeichenreservierung($pruefungKennzeichenreservierung);
    }

    /**
     * Get pruefungKennzeichenreservierung value
     */
    public function getPruefungKennzeichenreservierung(): ?\THAG\XKfz\StructType\PruefungKennzeichenreservierung
    {
        return $this->pruefungKennzeichenreservierung;
    }

    /**
     * Set pruefungKennzeichenreservierung value
     */
    public function setPruefungKennzeichenreservierung(?\THAG\XKfz\StructType\PruefungKennzeichenreservierung $pruefungKennzeichenreservierung = null): self
    {
        $this->pruefungKennzeichenreservierung = $pruefungKennzeichenreservierung;

        return $this;
    }
}
