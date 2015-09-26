<?php


namespace App\Helpers;

use DateTimeZone;

class Locale extends AbstractHelper
{
    public static $countries = [
        'AF' => 'Afghanistan',
        'AX' => 'Åland Islands',
        'AL' => 'Albania',
        'DZ' => 'Algeria',
        'AS' => 'American Samoa',
        'AD' => 'Andorra',
        'AO' => 'Angola',
        'AI' => 'Anguilla',
        'AQ' => 'Antarctica',
        'AG' => 'Antigua and Barbuda',
        'AR' => 'Argentina',
        'AM' => 'Armenia',
        'AW' => 'Aruba',
        'AU' => 'Australia',
        'AT' => 'Austria',
        'AZ' => 'Azerbaijan',
        'BS' => 'Bahamas',
        'BH' => 'Bahrain',
        'BD' => 'Bangladesh',
        'BB' => 'Barbados',
        'BY' => 'Belarus',
        'BE' => 'Belgium',
        'BZ' => 'Belize',
        'BJ' => 'Benin',
        'BM' => 'Bermuda',
        'BT' => 'Bhutan',
        'BO' => 'Bolivia, Plurinational State of',
        'BQ' => 'Bonaire, Sint Eustatius and Saba',
        'BA' => 'Bosnia and Herzegovina',
        'BW' => 'Botswana',
        'BV' => 'Bouvet Island',
        'BR' => 'Brazil',
        'IO' => 'British Indian Ocean Territory',
        'BN' => 'Brunei Darussalam',
        'BG' => 'Bulgaria',
        'BF' => 'Burkina Faso',
        'BI' => 'Burundi',
        'KH' => 'Cambodia',
        'CM' => 'Cameroon',
        'CA' => 'Canada',
        'CV' => 'Cape Verde',
        'KY' => 'Cayman Islands',
        'CF' => 'Central African Republic',
        'TD' => 'Chad',
        'CL' => 'Chile',
        'CN' => 'China',
        'CX' => 'Christmas Island',
        'CC' => 'Cocos (Keeling) Islands',
        'CO' => 'Colombia',
        'KM' => 'Comoros',
        'CG' => 'Congo',
        'CD' => 'Congo, the Democratic Republic of the',
        'CK' => 'Cook Islands',
        'CR' => 'Costa Rica',
        'CI' => 'Côte d\'Ivoire',
        'HR' => 'Croatia',
        'CU' => 'Cuba',
        'CW' => 'Curaçao',
        'CY' => 'Cyprus',
        'CZ' => 'Czech Republic',
        'DK' => 'Denmark',
        'DJ' => 'Djibouti',
        'DM' => 'Dominica',
        'DO' => 'Dominican Republic',
        'EC' => 'Ecuador',
        'EG' => 'Egypt',
        'SV' => 'El Salvador',
        'GQ' => 'Equatorial Guinea',
        'ER' => 'Eritrea',
        'EE' => 'Estonia',
        'ET' => 'Ethiopia',
        'FK' => 'Falkland Islands (Malvinas)',
        'FO' => 'Faroe Islands',
        'FJ' => 'Fiji',
        'FI' => 'Finland',
        'FR' => 'France',
        'GF' => 'French Guiana',
        'PF' => 'French Polynesia',
        'TF' => 'French Southern Territories',
        'GA' => 'Gabon',
        'GM' => 'Gambia',
        'GE' => 'Georgia',
        'DE' => 'Germany',
        'GH' => 'Ghana',
        'GI' => 'Gibraltar',
        'GR' => 'Greece',
        'GL' => 'Greenland',
        'GD' => 'Grenada',
        'GP' => 'Guadeloupe',
        'GU' => 'Guam',
        'GT' => 'Guatemala',
        'GG' => 'Guernsey',
        'GN' => 'Guinea',
        'GW' => 'Guinea-Bissau',
        'GY' => 'Guyana',
        'HT' => 'Haiti',
        'HM' => 'Heard Island and McDonald Islands',
        'VA' => 'Holy See (Vatican City State)',
        'HN' => 'Honduras',
        'HK' => 'Hong Kong',
        'HU' => 'Hungary',
        'IS' => 'Iceland',
        'IN' => 'India',
        'ID' => 'Indonesia',
        'IR' => 'Iran, Islamic Republic of',
        'IQ' => 'Iraq',
        'IE' => 'Ireland',
        'IM' => 'Isle of Man',
        'IL' => 'Israel',
        'IT' => 'Italy',
        'JM' => 'Jamaica',
        'JP' => 'Japan',
        'JE' => 'Jersey',
        'JO' => 'Jordan',
        'KZ' => 'Kazakhstan',
        'KE' => 'Kenya',
        'KI' => 'Kiribati',
        'KP' => 'Korea, Democratic People\'s Republic of',
        'KR' => 'Korea, Republic of',
        'KW' => 'Kuwait',
        'KG' => 'Kyrgyzstan',
        'LA' => 'Lao People\'s Democratic Republic',
        'LV' => 'Latvia',
        'LB' => 'Lebanon',
        'LS' => 'Lesotho',
        'LR' => 'Liberia',
        'LY' => 'Libya',
        'LI' => 'Liechtenstein',
        'LT' => 'Lithuania',
        'LU' => 'Luxembourg',
        'MO' => 'Macao',
        'MK' => 'Macedonia, The Former Yugoslav Republic of',
        'MG' => 'Madagascar',
        'MW' => 'Malawi',
        'MY' => 'Malaysia',
        'MV' => 'Maldives',
        'ML' => 'Mali',
        'MT' => 'Malta',
        'MH' => 'Marshall Islands',
        'MQ' => 'Martinique',
        'MR' => 'Mauritania',
        'MU' => 'Mauritius',
        'YT' => 'Mayotte',
        'MX' => 'Mexico',
        'FM' => 'Micronesia, Federated States of',
        'MD' => 'Moldova, Republic of',
        'MC' => 'Monaco',
        'MN' => 'Mongolia',
        'ME' => 'Montenegro',
        'MS' => 'Montserrat',
        'MA' => 'Morocco',
        'MZ' => 'Mozambique',
        'MM' => 'Myanmar',
        'NA' => 'Namibia',
        'NR' => 'Nauru',
        'NP' => 'Nepal',
        'NL' => 'Netherlands',
        'NC' => 'New Caledonia',
        'NZ' => 'New Zealand',
        'NI' => 'Nicaragua',
        'NE' => 'Niger',
        'NG' => 'Nigeria',
        'NU' => 'Niue',
        'NF' => 'Norfolk Island',
        'MP' => 'Northern Mariana Islands',
        'NO' => 'Norway',
        'OM' => 'Oman',
        'PK' => 'Pakistan',
        'PW' => 'Palau',
        'PS' => 'Palestine, State of',
        'PA' => 'Panama',
        'PG' => 'Papua New Guinea',
        'PY' => 'Paraguay',
        'PE' => 'Peru',
        'PH' => 'Philippines',
        'PN' => 'Pitcairn',
        'PL' => 'Poland',
        'PT' => 'Portugal',
        'PR' => 'Puerto Rico',
        'QA' => 'Qatar',
        'RE' => 'Réunion',
        'RO' => 'Romania',
        'RU' => 'Russian Federation',
        'RW' => 'Rwanda',
        'BL' => 'Saint Barthélemy',
        'SH' => 'Saint Helena, Ascension and Tristan da Cunha',
        'KN' => 'Saint Kitts and Nevis',
        'LC' => 'Saint Lucia',
        'MF' => 'Saint Martin (French part)',
        'PM' => 'Saint Pierre and Miquelon',
        'VC' => 'Saint Vincent and the Grenadines',
        'WS' => 'Samoa',
        'SM' => 'San Marino',
        'ST' => 'Sao Tome and Principe',
        'SA' => 'Saudi Arabia',
        'SN' => 'Senegal',
        'RS' => 'Serbia',
        'SC' => 'Seychelles',
        'SL' => 'Sierra Leone',
        'SG' => 'Singapore',
        'SX' => 'Sint Maarten (Dutch part)',
        'SK' => 'Slovakia',
        'SI' => 'Slovenia',
        'SB' => 'Solomon Islands',
        'SO' => 'Somalia',
        'ZA' => 'South Africa',
        'GS' => 'South Georgia and the South Sandwich Islands',
        'SS' => 'South Sudan',
        'ES' => 'Spain',
        'LK' => 'Sri Lanka',
        'SD' => 'Sudan',
        'SR' => 'Suriname',
        'SJ' => 'Svalbard and Jan Mayen',
        'SZ' => 'Swaziland',
        'SE' => 'Sweden',
        'CH' => 'Switzerland',
        'SY' => 'Syrian Arab Republic',
        'TW' => 'Taiwan, Province of China',
        'TJ' => 'Tajikistan',
        'TZ' => 'Tanzania, United Republic of',
        'TH' => 'Thailand',
        'TL' => 'Timor-Leste',
        'TG' => 'Togo',
        'TK' => 'Tokelau',
        'TO' => 'Tonga',
        'TT' => 'Trinidad and Tobago',
        'TN' => 'Tunisia',
        'TR' => 'Turkey',
        'TM' => 'Turkmenistan',
        'TC' => 'Turks and Caicos Islands',
        'TV' => 'Tuvalu',
        'UG' => 'Uganda',
        'UA' => 'Ukraine',
        'AE' => 'United Arab Emirates',
        'GB' => 'United Kingdom',
        'US' => 'United States',
        'UM' => 'United States Minor Outlying Islands',
        'UY' => 'Uruguay',
        'UZ' => 'Uzbekistan',
        'VU' => 'Vanuatu',
        'VE' => 'Venezuela, Bolivarian Republic of',
        'VN' => 'Viet Nam',
        'VG' => 'Virgin Islands, British',
        'VI' => 'Virgin Islands, U.S.',
        'WF' => 'Wallis and Futuna',
        'EH' => 'Western Sahara',
        'YE' => 'Yemen',
        'ZM' => 'Zambia',
        'ZW' => 'Zimbabwe',
    ];

    public static $dialingCodes = [
        '+93' => 'Afghanistan (+93)',
        '+355' => 'Albania (+355)',
        '+213' => 'Algeria (+213)',
        '+1' => 'American Samoa (+1)',
        '+376' => 'Andorra (+376)',
        '+244' => 'Angola (+244)',
        '+1' => 'Anguilla (+1)',
        '+1' => 'Antigua (+1)',
        '+54' => 'Argentina (+54)',
        '+374' => 'Armenia (+374)',
        '+297' => 'Aruba (+297)',
        '+61' => 'Australia (+61)',
        '+43' => 'Austria (+43)',
        '+994' => 'Azerbaijan (+994)',
        '+973' => 'Bahrain (+973)',
        '+880' => 'Bangladesh (+880)',
        '+1' => 'Barbados (+1)',
        '+375' => 'Belarus (+375)',
        '+32' => 'Belgium (+32)',
        '+501' => 'Belize (+501)',
        '+229' => 'Benin (+229)',
        '+1' => 'Bermuda (+1)',
        '+975' => 'Bhutan (+975)',
        '+591' => 'Bolivia (+591)',
        '+387' => 'Bosnia and Herzegovina (+387)',
        '+267' => 'Botswana (+267)',
        '+55' => 'Brazil (+55)',
        '+246' => 'British Indian Ocean Territory (+246)',
        '+1' => 'British Virgin Islands (+1)',
        '+673' => 'Brunei (+673)',
        '+359' => 'Bulgaria (+359)',
        '+226' => 'Burkina Faso (+226)',
        '+95' => 'Burma Myanmar (+95)',
        '+257' => 'Burundi (+257)',
        '+855' => 'Cambodia (+855)',
        '+237' => 'Cameroon (+237)',
        '+1' => 'Canada (+1)',
        '+238' => 'Cape Verde (+238)',
        '+1' => 'Cayman Islands (+1)',
        '+236' => 'Central African Republic (+236)',
        '+235' => 'Chad (+235)',
        '+56' => 'Chile (+56)',
        '+86' => 'China (+86)',
        '+57' => 'Colombia (+57)',
        '+269' => 'Comoros (+269)',
        '+682' => 'Cook Islands (+682)',
        '+506' => 'Costa Rica (+506)',
        '+225' => "Côte d'Ivoire (+225)",
        '+385' => 'Croatia (+385)',
        '+53' => 'Cuba (+53)',
        '+357' => 'Cyprus (+357)',
        '+420' => 'Czech Republic (+420)',
        '+243' => 'Democratic Republic of Congo (+243)',
        '+45' => 'Denmark (+45)',
        '+253' => 'Djibouti (+253)',
        '+1' => 'Dominica (+1)',
        '+1' => 'Dominican Republic (+1)',
        '+593' => 'Ecuador (+593)',
        '+20' => 'Egypt (+20)',
        '+503' => 'El Salvador (+503)',
        '+240' => 'Equatorial Guinea (+240)',
        '+291' => 'Eritrea (+291)',
        '+372' => 'Estonia (+372)',
        '+251' => 'Ethiopia (+251)',
        '+500' => 'Falkland Islands (+500)',
        '+298' => 'Faroe Islands (+298)',
        '+691' => 'Federated States of Micronesia (+691)',
        '+679' => 'Fiji (+679)',
        '+358' => 'Finland (+358)',
        '+33' => 'France (+33)',
        '+594' => 'French Guiana (+594)',
        '+689' => 'French Polynesia (+689)',
        '+241' => 'Gabon (+241)',
        '+995' => 'Georgia (+995)',
        '+49' => 'Germany (+49)',
        '+233' => 'Ghana (+233)',
        '+350' => 'Gibraltar (+350)',
        '+30' => 'Greece (+30)',
        '+299' => 'Greenland (+299)',
        '+1' => 'Grenada (+1)',
        '+590' => 'Guadeloupe (+590)',
        '+1' => 'Guam (+1)',
        '+502' => 'Guatemala (+502)',
        '+224' => 'Guinea (+224)',
        '+245' => 'Guinea-Bissau (+245)',
        '+592' => 'Guyana (+592)',
        '+509' => 'Haiti (+509)',
        '+504' => 'Honduras (+504)',
        '+852' => 'Hong Kong (+852)',
        '+36' => 'Hungary (+36)',
        '+354' => 'Iceland (+354)',
        '+91' => 'India (+91)',
        '+62' => 'Indonesia (+62)',
        '+98' => 'Iran (+98)',
        '+964' => 'Iraq (+964)',
        '+353' => 'Ireland (+353)',
        '+972' => 'Israel (+972)',
        '+39' => 'Italy (+39)',
        '+1' => 'Jamaica (+1)',
        '+81' => 'Japan (+81)',
        '+962' => 'Jordan (+962)',
        '+7' => 'Kazakhstan (+7)',
        '+254' => 'Kenya (+254)',
        '+686' => 'Kiribati (+686)',
        '+381' => 'Kosovo (+381)',
        '+965' => 'Kuwait (+965)',
        '+996' => 'Kyrgyzstan (+996)',
        '+856' => 'Laos (+856)',
        '+371' => 'Latvia (+371)',
        '+961' => 'Lebanon (+961)',
        '+266' => 'Lesotho (+266)',
        '+231' => 'Liberia (+231)',
        '+218' => 'Libya (+218)',
        '+423' => 'Liechtenstein (+423)',
        '+370' => 'Lithuania (+370)',
        '+352' => 'Luxembourg (+352)',
        '+853' => 'Macau (+853)',
        '+389' => 'Macedonia (+389)',
        '+261' => 'Madagascar (+261)',
        '+265' => 'Malawi (+265)',
        '+60' => 'Malaysia (+60)',
        '+960' => 'Maldives (+960)',
        '+223' => 'Mali (+223)',
        '+356' => 'Malta (+356)',
        '+692' => 'Marshall Islands (+692)',
        '+596' => 'Martinique (+596)',
        '+222' => 'Mauritania (+222)',
        '+230' => 'Mauritius (+230)',
        '+262' => 'Mayotte (+262)',
        '+52' => 'Mexico (+52)',
        '+373' => 'Moldova (+373)',
        '+377' => 'Monaco (+377)',
        '+976' => 'Mongolia (+976)',
        '+382' => 'Montenegro (+382)',
        '+1' => 'Montserrat (+1)',
        '+212' => 'Morocco (+212)',
        '+258' => 'Mozambique (+258)',
        '+264' => 'Namibia (+264)',
        '+674' => 'Nauru (+674)',
        '+977' => 'Nepal (+977)',
        '+31' => 'Netherlands (+31)',
        '+599' => 'Netherlands Antilles (+599)',
        '+687' => 'New Caledonia (+687)',
        '+64' => 'New Zealand (+64)',
        '+505' => 'Nicaragua (+505)',
        '+227' => 'Niger (+227)',
        '+234' => 'Nigeria (+234)',
        '+683' => 'Niue (+683)',
        '+672' => 'Norfolk Island (+672)',
        '+850' => 'North Korea (+850)',
        '+1' => 'Northern Mariana Islands (+1)',
        '+47' => 'Norway (+47)',
        '+968' => 'Oman (+968)',
        '+92' => 'Pakistan (+92)',
        '+680' => 'Palau (+680)',
        '+970' => 'Palestine (+970)',
        '+507' => 'Panama (+507)',
        '+675' => 'Papua New Guinea (+675)',
        '+595' => 'Paraguay (+595)',
        '+51' => 'Peru (+51)',
        '+63' => 'Philippines (+63)',
        '+48' => 'Poland (+48)',
        '+351' => 'Portugal (+351)',
        '+1' => 'Puerto Rico (+1)',
        '+974' => 'Qatar (+974)',
        '+242' => 'Republic of the Congo (+242)',
        '+262' => 'Réunion (+262)',
        '+40' => 'Romania (+40)',
        '+7' => 'Russia (+7)',
        '+250' => 'Rwanda (+250)',
        '+590' => 'Saint Barthélemy (+590)',
        '+290' => 'Saint Helena (+290)',
        '+1' => 'Saint Kitts and Nevis (+1)',
        '+590' => 'Saint Martin (+590)',
        '+508' => 'Saint Pierre and Miquelon (+508)',
        '+1' => 'Saint Vincent and the Grenadines (+1)',
        '+685' => 'Samoa (+685)',
        '+378' => 'San Marino (+378)',
        '+239' => 'São Tomé and Príncipe (+239)',
        '+966' => 'Saudi Arabia (+966)',
        '+221' => 'Senegal (+221)',
        '+381' => 'Serbia (+381)',
        '+248' => 'Seychelles (+248)',
        '+232' => 'Sierra Leone (+232)',
        '+65' => 'Singapore (+65)',
        '+421' => 'Slovakia (+421)',
        '+386' => 'Slovenia (+386)',
        '+677' => 'Solomon Islands (+677)',
        '+252' => 'Somalia (+252)',
        '+27' => 'South Africa (+27)',
        '+82' => 'South Korea (+82)',
        '+34' => 'Spain (+34)',
        '+94' => 'Sri Lanka (+94)',
        '+1' => 'St. Lucia (+1)',
        '+249' => 'Sudan (+249)',
        '+597' => 'Suriname (+597)',
        '+268' => 'Swaziland (+268)',
        '+46' => 'Sweden (+46)',
        '+41' => 'Switzerland (+41)',
        '+963' => 'Syria (+963)',
        '+886' => 'Taiwan (+886)',
        '+992' => 'Tajikistan (+992)',
        '+255' => 'Tanzania (+255)',
        '+66' => 'Thailand (+66)',
        '+1' => 'The Bahamas (+1)',
        '+220' => 'The Gambia (+220)',
        '+670' => 'Timor-Leste (+670)',
        '+228' => 'Togo (+228)',
        '+690' => 'Tokelau (+690)',
        '+676' => 'Tonga (+676)',
        '+1' => 'Trinidad and Tobago (+1)',
        '+216' => 'Tunisia (+216)',
        '+90' => 'Turkey (+90)',
        '+993' => 'Turkmenistan (+993)',
        '+1' => 'Turks and Caicos Islands (+1)',
        '+688' => 'Tuvalu (+688)',
        '+256' => 'Uganda (+256)',
        '+380' => 'Ukraine (+380)',
        '+971' => 'United Arab Emirates (+971)',
        '+44' => 'United Kingdom (+44)',
        '+1' => 'United States (+1)',
        '+598' => 'Uruguay (+598)',
        '+1' => 'US Virgin Islands (+1)',
        '+998' => 'Uzbekistan (+998)',
        '+678' => 'Vanuatu (+678)',
        '+39' => 'Vatican City (+39)',
        '+58' => 'Venezuela (+58)',
        '+84' => 'Vietnam (+84)',
        '+681' => 'Wallis and Futuna (+681)',
        '+967' => 'Yemen (+967)',
        '+260' => 'Zambia (+260)',
        '+263' => 'Zimbabwe (+263)',
    ];

    public function getCountry($code)
    {
        $code = strtoupper($code);

        $countries = static::$countries;

        return isset($countries[$code]) ? $countries[$code] : false;
    }

    public function getCountries()
    {
        return static::$countries;
    }

    public function getDialingCode($code)
    {
        $code = strtoupper($code);

        $dialingCodes = static::$dialingCodes;

        return isset($dialingCodes[$code]) ? $dialingCodes[$code] : false;
    }

    public function getTimezones($group = false)
    {
        $output = [];

        $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL);

        foreach ($tzlist as $timezone) {
            if ($group) {
                $zone = explode('/', $timezone); // 0 => Continent, 1 => City

                // Only use "friendly" continent names
                if ($zone[0] == 'Africa' || $zone[0] == 'America' || $zone[0] == 'Antarctica' || $zone[0] == 'Arctic' || $zone[0] == 'Asia' || $zone[0] == 'Atlantic' || $zone[0] == 'Australia' || $zone[0] == 'Europe' || $zone[0] == 'Indian' || $zone[0] == 'Pacific') {
                    if (isset($zone[1]) != '') {
                        $output[$zone[0]][$zone[0].'/'.$zone[1]] = str_replace('_', ' ', $zone[1]); // Creates array(DateTimeZone => 'Friendly name')
                    }
                }
            } else {
                $output[$timezone] = $timezone;
            }
        }

        return $output;
    }
}
