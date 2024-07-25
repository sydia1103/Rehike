<?php
namespace Rehike\Validation;

/**
 * Validates InnerTube GL values.
 * 
 * @author Isabella <kawapure@gmail.com>
 * @author The Rehike Maintainers
 */
class ValidGeolocations implements IValidator
{
    public function validateString(string $input): bool
    {
        return in_array($input, self::VALID_LANGUAGES);
    }
    
    public const VALID_LANGUAGES = [
        "DZ",
        "AR",
        "AU",
        "AT",
        "AZ",
        "BH",
        "BD",
        "BY",
        "BE",
        "BO",
        "BA",
        "BR",
        "BG",
        "KH",
        "CA",
        "CL",
        "CO",
        "CR",
        "HR",
        "CY",
        "CZ",
        "DK",
        "DO",
        "EC",
        "EG",
        "SV",
        "EE",
        "FI",
        "FR",
        "GE",
        "DE",
        "GH",
        "GR",
        "GT",
        "HN",
        "HK",
        "HU",
        "IS",
        "IN",
        "ID",
        "IQ",
        "IE",
        "IL",
        "IT",
        "JM",
        "JP",
        "JO",
        "KZ",
        "KE",
        "KW",
        "LA",
        "LV",
        "LB",
        "LY",
        "LI",
        "LT",
        "LU",
        "MY",
        "MT",
        "MX",
        "MD",
        "ME",
        "MA",
        "NP",
        "NL",
        "NZ",
        "NI",
        "NG",
        "MK",
        "NO",
        "OM",
        "PK",
        "PA",
        "PG",
        "PY",
        "PE",
        "PH",
        "PL",
        "PT",
        "PR",
        "QA",
        "RO",
        "RU",
        "SA",
        "SN",
        "RS",
        "SG",
        "SK",
        "SI",
        "ZA",
        "KR",
        "ES",
        "LK",
        "SE",
        "CH",
        "TW",
        "TZ",
        "TH",
        "TN",
        "TR",
        "UG",
        "UA",
        "AE",
        "GB",
        "US",
        "UY",
        "VE",
        "VN",
        "YE",
        "ZW",
    ]; 
}