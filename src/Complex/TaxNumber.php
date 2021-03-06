<?php

declare(strict_types=1);

namespace Olsza\ValueObjects\Complex;

use Illuminate\Support\Str;
use Illuminate\Support\Traits\Conditionable;
use Illuminate\Support\Traits\Macroable;
use MichaelRubel\Formatters\Collection\TaxNumberFormatter;
use Olsza\ValueObjects\ValueObject;

class TaxNumber implements ValueObject
{
    use Macroable, Conditionable;

    /**
     * Create a new value object instance.
     *
     * @param string|null $tax_number
     * @param string|null $country
     */
    final public function __construct(
        public ?string $tax_number = null,
        public ?string $country = null
    ) {
        $this->format();
        $this->transform();
    }

    /**
     * Return a new instance of TaxNumber.
     *
     * @param string|null $tax_number
     * @param string|null $country
     *
     * @return static
     */
    public static function make(
        ?string $tax_number = null,
        ?string $country = null
    ): static {
        return new static($tax_number, $country);
    }

    /**
     * Get the tax number.
     *
     * @return string
     */
    public function getTaxNumber(): string
    {
        return Str::upper($this->tax_number ?? '');
    }

    /**
     * Get the country prefix.
     *
     * @return string
     */
    public function getCountry(): string
    {
        return Str::upper($this->country ?? '');
    }

    /**
     * Get a full tax number for a given value object.
     * The tax number with a country prefix.
     *
     * @return string
     */
    public function getFullTaxNumber(): string
    {
        return $this->getCountry() . $this->getTaxNumber();
    }

    /**
     * Transforms the data to appropriate form.
     *
     * @return void
     */
    protected function transform(): void
    {
        $this->when($this->isWithCountry(), function () {
            $stringable = Str::of($this->tax_number ?? '');

            $this->country = (string) $stringable
                ->substr(0, 2)
                ->upper();

            $this->tax_number = (string) $stringable
                ->substr(2);
        });
    }

    /**
     * Format the tax number.
     *
     * @return void
     */
    protected function format(): void
    {
        $this->tax_number = format(TaxNumberFormatter::class, $this->tax_number, $this->country);
    }

    /**
     * Check if the tax number length is less or equal two.
     *
     * @return bool
     */
    protected function isWithCountry(): bool
    {
        return strlen($this->tax_number ?? '') >= 2
            && ! is_numeric($this->tax_number);
    }

    /**
     * Get the raw string value.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->getFullTaxNumber();
    }
}
