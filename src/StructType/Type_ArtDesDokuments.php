<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ArtDesDokuments StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ArtDesDokuments extends AbstractStructBase
{
    /**
     * The code
     */
    public ?\THAG\XKfz\StructType\Code_ArtDesDokuments $code = null;

    /**
     * The nichtGelisteterWert
     */
    public ?string $nichtGelisteterWert = null;

    /**
     * Constructor method for Type.ArtDesDokuments
     *
     * @uses Type_ArtDesDokuments::setCode()
     * @uses Type_ArtDesDokuments::setNichtGelisteterWert()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_ArtDesDokuments $code = null, ?string $nichtGelisteterWert = null)
    {
        $this
            ->setCode($code)
            ->setNichtGelisteterWert($nichtGelisteterWert);
    }

    /**
     * Get code value
     */
    public function getCode(): ?\THAG\XKfz\StructType\Code_ArtDesDokuments
    {
        return $this->code;
    }

    /**
     * Set code value
     */
    public function setCode(?\THAG\XKfz\StructType\Code_ArtDesDokuments $code = null): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get nichtGelisteterWert value
     */
    public function getNichtGelisteterWert(): ?string
    {
        return $this->nichtGelisteterWert;
    }

    /**
     * Set nichtGelisteterWert value
     */
    public function setNichtGelisteterWert(?string $nichtGelisteterWert = null): self
    {
        $this->nichtGelisteterWert = $nichtGelisteterWert;

        return $this;
    }
}
