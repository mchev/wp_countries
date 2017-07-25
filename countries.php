<?php
/*
Plugin Name: WP Countries
Plugin URI: https://github.com/mchev/wp_countries
Description: A Wordpress Plugin providing PHP arrays and HTML select list of all countries and states
Author: Martin Chevignard.
Version: 1.0
Author URI: https://www.martinchevignard.com
*/

class WP_Countries {

	private $countries = array(
		['alpha2' => 'AF', 'name' => 'Afghanistan', 'native' => 'غانستان', 'states' => array()],
        ['alpha2' => 'AX', 'name' => 'Åland Islands', 'native' => 'Åland', 'states' => array()],
        ['alpha2' => 'AL', 'name' => 'Albania', 'native' => 'Shqipëri', 'states' => array()],
        ['alpha2' => 'DZ', 'name' => 'Algeria', 'native' => 'الجزائر', 'states' => array()],
        ['alpha2' => 'AS', 'name' => 'American Samoa', 'native' => '', 'states' => array()],
        ['alpha2' => 'AD', 'name' => 'Andorra', 'native' => '', 'states' => array()],
        ['alpha2' => 'AO', 'name' => 'Angola', 'native' => '', 'states' => array()],
        ['alpha2' => 'AI', 'name' => 'Anguilla', 'native' => '', 'states' => array()],
        ['alpha2' => 'AQ', 'name' => 'Antarctica', 'native' => '', 'states' => array()],
        ['alpha2' => 'AG', 'name' => 'Antigua and Barbuda', 'native' => '', 'states' => array()],
        ['alpha2' => 'AR', 'name' => 'Argentina', 'native' => '', 'states' => array()],
        ['alpha2' => 'AM', 'name' => 'Armenia', 'native' => 'Հայաստան', 'states' => array()],
        ['alpha2' => 'AW', 'name' => 'Aruba', 'native' => '', 'states' => array()],
        ['alpha2' => 'AC', 'name' => 'Ascension Island', 'native' => '', 'states' => array()],
        ['alpha2' => 'AU', 'name' => 'Australia', 'native' => '', 'states' => array('AAT' => 'Australian Antarctic Territory', 'ACT' => 'Australian Capital Territory', 'JBT' => 'Jervis Bay Territory', 'NSW' => 'New South Wales', 'NT' => 'Northern Territory', 'QLD' => 'Queensland', 'SA' => 'South Australia', 'TAS' => 'Tasmania', 'VIC' => 'Victoria', 'WA' => 'Western Australia')],         ['alpha2' => 'AT', 'name' => 'Austria', 'native' => 'Österreich', 'states' => array()],
        ['alpha2' => 'AZ', 'name' => 'Azerbaijan', 'native' => 'Azərbaycan', 'states' => array()],
        ['alpha2' => 'BS', 'name' => 'Bahamas', 'native' => '', 'states' => array()],
        ['alpha2' => 'BH', 'name' => 'Bahrain', 'native' => 'البحرين', 'states' => array()],
        ['alpha2' => 'BD', 'name' => 'Bangladesh', 'native' => 'বাংলাদেশ', 'states' => array()],
        ['alpha2' => 'BB', 'name' => 'Barbados', 'native' => '', 'states' => array()],
        ['alpha2' => 'BY', 'name' => 'Belarus', 'native' => 'Беларусь', 'states' => array()],
        ['alpha2' => 'BE', 'name' => 'Belgium', 'native' => 'België', 'states' => array()],
        ['alpha2' => 'BZ', 'name' => 'Belize', 'native' => '', 'states' => array()],
        ['alpha2' => 'BJ', 'name' => 'Benin', 'native' => 'Bénin', 'states' => array()],
        ['alpha2' => 'BM', 'name' => 'Bermuda', 'native' => '', 'states' => array()],
        ['alpha2' => 'BT', 'name' => 'Bhutan', 'native' => 'འབྲུག', 'states' => array()],
        ['alpha2' => 'BO', 'name' => 'Bolivia', 'native' => '', 'states' => array()],
        ['alpha2' => 'BA', 'name' => 'Bosnia and Herzegovina', 'native' => 'Босна и Херцеговина', 'states' => array()],
        ['alpha2' => 'BW', 'name' => 'Botswana', 'native' => '', 'states' => array()],
        ['alpha2' => 'BV', 'name' => 'Bouvet Island', 'native' => '', 'states' => array()],
        ['alpha2' => 'BR', 'name' => 'Brazil', 'native' => 'Brasil', 'states' => array()],
        ['alpha2' => 'IO', 'name' => 'British Indian Ocean Territory', 'native' => '', 'states' => array()],
        ['alpha2' => 'VG', 'name' => 'British Virgin Islands', 'native' => '', 'states' => array()],
        ['alpha2' => 'BN', 'name' => 'Brunei', 'native' => '', 'states' => array()],
        ['alpha2' => 'BG', 'name' => 'Bulgaria', 'native' => 'България', 'states' => array()],
        ['alpha2' => 'BF', 'name' => 'Burkina Faso', 'native' => '', 'states' => array()],
        ['alpha2' => 'BI', 'name' => 'Burundi', 'native' => 'Uburundi', 'states' => array()],
        ['alpha2' => 'KH', 'name' => 'Cambodia', 'native' => 'កម្ពុជា', 'states' => array()],
        ['alpha2' => 'CM', 'name' => 'Cameroon', 'native' => 'Cameroun', 'states' => array()],
        ['alpha2' => 'CA', 'name' => 'Canada', 'native' => '', 'states' => array('AB'	=>	'Alberta', 'BC'	=>	'British Columbia', 'MB' =>	'Manitoba', 'NB' =>	'New Brunswick', 'NF' => 'Newfoundland and Labrador', 'NT' => 'Northwest Territories', 'NS' => 'Nova Scotia', 'NU' => 'Nunavut', 'ON' => 'Ontario',	'PE' => 'Prince Edward Island', 'QC' => 'Quebec', 'SK' => 'Saskatchewan', 'YT' => 'Yukon Territory')],
        ['alpha2' => 'IC', 'name' => 'Canary Islands', 'native' => 'islas Canarias', 'states' => array()],
        ['alpha2' => 'CV', 'name' => 'Cape Verde', 'native' => 'Kabu Verdi', 'states' => array()],
        ['alpha2' => 'BQ', 'name' => 'Caribbean Netherlands', 'native' => '', 'states' => array()],
        ['alpha2' => 'KY', 'name' => 'Cayman Islands', 'native' => '', 'states' => array()],
        ['alpha2' => 'CF', 'name' => 'Central African Republic', 'native' => 'République centrafricaine', 'states' => array()],
        ['alpha2' => 'EA', 'name' => 'Ceuta and Melilla', 'native' => 'Ceuta y Melilla', 'states' => array()],
        ['alpha2' => 'TD', 'name' => 'Chad', 'native' => 'Tchad', 'states' => array()],
        ['alpha2' => 'CL', 'name' => 'Chile', 'native' => '', 'states' => array()],
        ['alpha2' => 'CN', 'name' => 'China', 'native' => '中国', 'states' => array()],
        ['alpha2' => 'CX', 'name' => 'Christmas Island', 'native' => '', 'states' => array()],
        ['alpha2' => 'CP', 'name' => 'Clipperton Island', 'native' => '', 'states' => array()],
        ['alpha2' => 'CC', 'name' => 'Cocos (Keeling) Islands', 'native' => 'Kepulauan Cocos (Keeling)', 'states' => array()],
        ['alpha2' => 'CO', 'name' => 'Colombia', 'native' => '', 'states' => array()],
        ['alpha2' => 'KM', 'name' => 'Comoros', 'native' => 'جزر القمر', 'states' => array()],
        ['alpha2' => 'CD', 'name' => 'Congo (DRC)', 'native' => 'Jamhuri ya Kidemokrasia ya Kongo', 'states' => array()],
        ['alpha2' => 'CG', 'name' => 'Congo (Republic)', 'native' => 'Congo-Brazzaville', 'states' => array()],
        ['alpha2' => 'CK', 'name' => 'Cook Islands', 'native' => '', 'states' => array()],
        ['alpha2' => 'CR', 'name' => 'Costa Rica', 'native' => '', 'states' => array()],
        ['alpha2' => 'CI', 'name' => 'Côte d’Ivoire', 'native' => '', 'states' => array()],
        ['alpha2' => 'HR', 'name' => 'Croatia', 'native' => 'Hrvatska', 'states' => array()],
        ['alpha2' => 'CU', 'name' => 'Cuba', 'native' => '', 'states' => array()],
        ['alpha2' => 'CW', 'name' => 'Curaçao', 'native' => '', 'states' => array()],
        ['alpha2' => 'CY', 'name' => 'Cyprus', 'native' => 'Κύπρος', 'states' => array()],
        ['alpha2' => 'CZ', 'name' => 'Czech Republic', 'native' => 'Česká republika', 'states' => array()],
        ['alpha2' => 'DK', 'name' => 'Denmark', 'native' => 'Danmark', 'states' => array()],
        ['alpha2' => 'DG', 'name' => 'Diego Garcia', 'native' => '', 'states' => array()],
        ['alpha2' => 'DJ', 'name' => 'Djibouti', 'native' => '', 'states' => array()],
        ['alpha2' => 'DM', 'name' => 'Dominica', 'native' => '', 'states' => array()],
        ['alpha2' => 'DO', 'name' => 'Dominican Republic', 'native' => 'República Dominicana', 'states' => array()],
        ['alpha2' => 'EC', 'name' => 'Ecuador', 'native' => '', 'states' => array()],
        ['alpha2' => 'EG', 'name' => 'Egypt', 'native' => 'مصر', 'states' => array()],
        ['alpha2' => 'SV', 'name' => 'El Salvador', 'native' => '', 'states' => array()],
        ['alpha2' => 'GQ', 'name' => 'Equatorial Guinea', 'native' => 'Guinea Ecuatorial', 'states' => array()],
        ['alpha2' => 'ER', 'name' => 'Eritrea', 'native' => '', 'states' => array()],
        ['alpha2' => 'EE', 'name' => 'Estonia', 'native' => 'Eesti', 'states' => array()],
        ['alpha2' => 'ET', 'name' => 'Ethiopia', 'native' => '', 'states' => array()],
        ['alpha2' => 'FK', 'name' => 'Falkland Islands', 'native' => 'Islas Malvinas', 'states' => array()],
        ['alpha2' => 'FO', 'name' => 'Faroe Islands', 'native' => 'Føroyar', 'states' => array()],
        ['alpha2' => 'FJ', 'name' => 'Fiji', 'native' => '', 'states' => array()],
        ['alpha2' => 'FI', 'name' => 'Finland', 'native' => 'Suomi', 'states' => array()],
        ['alpha2' => 'FR', 'name' => 'France', 'native' => '', 'states' => array()],
        ['alpha2' => 'GF', 'name' => 'French Guiana', 'native' => 'Guyane française', 'states' => array()],
        ['alpha2' => 'PF', 'name' => 'French Polynesia', 'native' => 'Polynésie française', 'states' => array()],
        ['alpha2' => 'TF', 'name' => 'French Southern Territories', 'native' => 'Terres australes françaises', 'states' => array()],
        ['alpha2' => 'GA', 'name' => 'Gabon', 'native' => '', 'states' => array()],
        ['alpha2' => 'GM', 'name' => 'Gambia', 'native' => '', 'states' => array()],
        ['alpha2' => 'GE', 'name' => 'Georgia', 'native' => 'საქართველო', 'states' => array()],
        ['alpha2' => 'DE', 'name' => 'Germany', 'native' => 'Deutschland', 'states' => array()],
        ['alpha2' => 'GH', 'name' => 'Ghana', 'native' => 'Gaana', 'states' => array()],
        ['alpha2' => 'GI', 'name' => 'Gibraltar', 'native' => '', 'states' => array()],
        ['alpha2' => 'GR', 'name' => 'Greece', 'native' => 'Ελλάδα', 'states' => array()],
        ['alpha2' => 'GL', 'name' => 'Greenland', 'native' => 'Kalaallit Nunaat', 'states' => array()],
        ['alpha2' => 'GD', 'name' => 'Grenada', 'native' => '', 'states' => array()],
        ['alpha2' => 'GP', 'name' => 'Guadeloupe', 'native' => '', 'states' => array()],
        ['alpha2' => 'GU', 'name' => 'Guam', 'native' => '', 'states' => array()],
        ['alpha2' => 'GT', 'name' => 'Guatemala', 'native' => '', 'states' => array()],
        ['alpha2' => 'GG', 'name' => 'Guernsey', 'native' => '', 'states' => array()],
        ['alpha2' => 'GN', 'name' => 'Guinea', 'native' => 'Guinée', 'states' => array()],
        ['alpha2' => 'GW', 'name' => 'Guinea-Bissau', 'native' => 'Guiné Bissau', 'states' => array()],
        ['alpha2' => 'GY', 'name' => 'Guyana', 'native' => '', 'states' => array()],
        ['alpha2' => 'HT', 'name' => 'Haiti', 'native' => '', 'states' => array()],
        ['alpha2' => 'HM', 'name' => 'Heard & McDonald Islands', 'native' => '', 'states' => array()],
        ['alpha2' => 'HN', 'name' => 'Honduras', 'native' => '', 'states' => array()],
        ['alpha2' => 'HK', 'name' => 'Hong Kong', 'native' => '香港', 'states' => array()],
        ['alpha2' => 'HU', 'name' => 'Hungary', 'native' => 'Magyarország', 'states' => array()],
        ['alpha2' => 'IS', 'name' => 'Iceland', 'native' => 'Ísland', 'states' => array()],
        ['alpha2' => 'IN', 'name' => 'India', 'native' => 'भारत', 'states' => array ('AP' => 'Andhra Pradesh', 'AR' => 'Arunachal Pradesh', 'AS' => 'Assam', 'BR' => 'Bihar', 'CT' => 'Chhattisgarh', 'GA' => 'Goa', 'GJ' => 'Gujarat', 'HR' => 'Haryana', 'HP' => 'Himachal Pradesh', 'JK' => 'Jammu & Kashmir', 'JH' => 'Jharkhand', 'KA' => 'Karnataka', 'KL' => 'Kerala', 'MP' => 'Madhya Pradesh', 'MH' => 'Maharashtra', 'MN' => 'Manipur', 'ML' => 'Meghalaya', 'MZ' => 'Mizoram', 'NL' => 'Nagaland', 'OR' => 'Odisha', 'PB' => 'Punjab', 'RJ' => 'Rajasthan', 'SK' => 'Sikkim', 'TN' => 'Tamil Nadu', 'TR' => 'Tripura', 'UK' => 'Uttarakhand', 'UP' => 'Uttar Pradesh', 'WB' => 'West Bengal', 'AN' => 'Andaman & Nicobar', 'CH' => 'Chandigarh', 'DN' => 'Dadra and Nagar Haveli', 'DD' => 'Daman & Diu', 'DL' => 'Delhi', 'LD' => 'Lakshadweep', 'PY' => 'Puducherry')],
        ['alpha2' => 'ID', 'name' => 'Indonesia', 'native' => '', 'states' => array()],
        ['alpha2' => 'IR', 'name' => 'Iran', 'native' => 'ایران', 'states' => array()],
        ['alpha2' => 'IQ', 'name' => 'Iraq', 'native' => 'العراق', 'states' => array()],
        ['alpha2' => 'IE', 'name' => 'Ireland', 'native' => '', 'states' => array()],
        ['alpha2' => 'IM', 'name' => 'Isle of Man', 'native' => '', 'states' => array()],
        ['alpha2' => 'IL', 'name' => 'Israel', 'native' => 'ישראל', 'states' => array()],
        ['alpha2' => 'IT', 'name' => 'Italy', 'native' => 'Italia', 'states' => array()],
        ['alpha2' => 'JM', 'name' => 'Jamaica', 'native' => '', 'states' => array()],
        ['alpha2' => 'JP', 'name' => 'Japan', 'native' => '日本', 'states' => array()],
        ['alpha2' => 'JE', 'name' => 'Jersey', 'native' => '', 'states' => array()],
        ['alpha2' => 'JO', 'name' => 'Jordan', 'native' => 'الأردن', 'states' => array()],
        ['alpha2' => 'KZ', 'name' => 'Kazakhstan', 'native' => 'Казахстан', 'states' => array()],
        ['alpha2' => 'KE', 'name' => 'Kenya', 'native' => '', 'states' => array()],
        ['alpha2' => 'KI', 'name' => 'Kiribati', 'native' => '', 'states' => array()],
        ['alpha2' => 'XK', 'name' => 'Kosovo', 'native' => 'Kosovë', 'states' => array()],
        ['alpha2' => 'KW', 'name' => 'Kuwait', 'native' => 'الكويت', 'states' => array()],
        ['alpha2' => 'KG', 'name' => 'Kyrgyzstan', 'native' => 'Кыргызстан', 'states' => array()],
        ['alpha2' => 'LA', 'name' => 'Laos', 'native' => 'ລາວ', 'states' => array()],
        ['alpha2' => 'LV', 'name' => 'Latvia', 'native' => 'Latvija', 'states' => array()],
        ['alpha2' => 'LB', 'name' => 'Lebanon', 'native' => 'لبنان', 'states' => array()],
        ['alpha2' => 'LS', 'name' => 'Lesotho', 'native' => '', 'states' => array()],
        ['alpha2' => 'LR', 'name' => 'Liberia', 'native' => '', 'states' => array()],
        ['alpha2' => 'LY', 'name' => 'Libya', 'native' => 'ليبيا', 'states' => array()],
        ['alpha2' => 'LI', 'name' => 'Liechtenstein', 'native' => '', 'states' => array()],
        ['alpha2' => 'LT', 'name' => 'Lithuania', 'native' => 'Lietuva', 'states' => array()],
        ['alpha2' => 'LU', 'name' => 'Luxembourg', 'native' => '', 'states' => array()],
        ['alpha2' => 'MO', 'name' => 'Macau', 'native' => '澳門', 'states' => array()],
        ['alpha2' => 'MK', 'name' => 'Macedonia (FYROM)', 'native' => 'Македонија', 'states' => array()],
        ['alpha2' => 'MG', 'name' => 'Madagascar', 'native' => 'Madagasikara', 'states' => array()],
        ['alpha2' => 'MW', 'name' => 'Malawi', 'native' => '', 'states' => array()],
        ['alpha2' => 'MY', 'name' => 'Malaysia', 'native' => '', 'states' => array()],
        ['alpha2' => 'MV', 'name' => 'Maldives', 'native' => '', 'states' => array()],
        ['alpha2' => 'ML', 'name' => 'Mali', 'native' => '', 'states' => array()],
        ['alpha2' => 'MT', 'name' => 'Malta', 'native' => '', 'states' => array()],
        ['alpha2' => 'MH', 'name' => 'Marshall Islands', 'native' => '', 'states' => array()],
        ['alpha2' => 'MQ', 'name' => 'Martinique', 'native' => '', 'states' => array()],
        ['alpha2' => 'MR', 'name' => 'Mauritania', 'native' => 'موريتانيا', 'states' => array()],
        ['alpha2' => 'MU', 'name' => 'Mauritius', 'native' => 'Moris', 'states' => array()],
        ['alpha2' => 'YT', 'name' => 'Mayotte', 'native' => '', 'states' => array()],
        ['alpha2' => 'MX', 'name' => 'Mexico', 'native' => '', 'states' => array()],
        ['alpha2' => 'FM', 'name' => 'Micronesia', 'native' => '', 'states' => array()],
        ['alpha2' => 'MD', 'name' => 'Moldova', 'native' => 'Republica Moldova', 'states' => array()],
        ['alpha2' => 'MC', 'name' => 'Monaco', 'native' => '', 'states' => array()],
        ['alpha2' => 'MN', 'name' => 'Mongolia', 'native' => 'Монгол', 'states' => array()],
        ['alpha2' => 'ME', 'name' => 'Montenegro', 'native' => 'Crna Gora', 'states' => array()],
        ['alpha2' => 'MS', 'name' => 'Montserrat', 'native' => '', 'states' => array()],
        ['alpha2' => 'MA', 'name' => 'Morocco', 'native' => 'المغرب', 'states' => array()],
        ['alpha2' => 'MZ', 'name' => 'Mozambique', 'native' => 'Moçambique', 'states' => array()],
        ['alpha2' => 'MM', 'name' => 'Myanmar (Burma)', 'native' => 'မြန်မာ', 'states' => array()],
        ['alpha2' => 'NA', 'name' => 'Namibia', 'native' => 'Namibië', 'states' => array()],
        ['alpha2' => 'NR', 'name' => 'Nauru', 'native' => '', 'states' => array()],
        ['alpha2' => 'NP', 'name' => 'Nepal', 'native' => 'नेपाल', 'states' => array()],
        ['alpha2' => 'NL', 'name' => 'Netherlands', 'native' => 'Nederland', 'states' => array()],
        ['alpha2' => 'NC', 'name' => 'New Caledonia', 'native' => 'Nouvelle-Calédonie', 'states' => array()],
        ['alpha2' => 'NZ', 'name' => 'New Zealand', 'native' => '', 'states' => array()],
        ['alpha2' => 'NI', 'name' => 'Nicaragua', 'native' => '', 'states' => array()],
        ['alpha2' => 'NE', 'name' => 'Niger', 'native' => 'Nijar', 'states' => array()],
        ['alpha2' => 'NG', 'name' => 'Nigeria', 'native' => '', 'states' => array()],
        ['alpha2' => 'NU', 'name' => 'Niue', 'native' => '', 'states' => array()],
        ['alpha2' => 'NF', 'name' => 'Norfolk Island', 'native' => '', 'states' => array()],
        ['alpha2' => 'MP', 'name' => 'Northern Mariana Islands', 'native' => '', 'states' => array()],
        ['alpha2' => 'KP', 'name' => 'North Korea', 'native' => '조선 민주주의 인민 공화국', 'states' => array()],
        ['alpha2' => 'NO', 'name' => 'Norway', 'native' => 'Norge', 'states' => array()],
        ['alpha2' => 'OM', 'name' => 'Oman', 'native' => 'عُمان', 'states' => array()],
        ['alpha2' => 'PK', 'name' => 'Pakistan', 'native' => 'پاکستان', 'states' => array()],
        ['alpha2' => 'PW', 'name' => 'Palau', 'native' => '', 'states' => array()],
        ['alpha2' => 'PS', 'name' => 'Palestine', 'native' => 'فلسطين', 'states' => array()],
        ['alpha2' => 'PA', 'name' => 'Panama', 'native' => '', 'states' => array()],
        ['alpha2' => 'PG', 'name' => 'Papua New Guinea', 'native' => '', 'states' => array()],
        ['alpha2' => 'PY', 'name' => 'Paraguay', 'native' => '', 'states' => array()],
        ['alpha2' => 'PE', 'name' => 'Peru', 'native' => 'Perú', 'states' => array()],
        ['alpha2' => 'PH', 'name' => 'Philippines', 'native' => '', 'states' => array()],
        ['alpha2' => 'PN', 'name' => 'Pitcairn Islands', 'native' => '', 'states' => array()],
        ['alpha2' => 'PL', 'name' => 'Poland', 'native' => 'Polska', 'states' => array()],
        ['alpha2' => 'PT', 'name' => 'Portugal', 'native' => '', 'states' => array()],
        ['alpha2' => 'PR', 'name' => 'Puerto Rico', 'native' => '', 'states' => array()],
        ['alpha2' => 'QA', 'name' => 'Qatar', 'native' => 'قطر', 'states' => array()],
        ['alpha2' => 'RE', 'name' => 'Réunion', 'native' => 'La Réunion', 'states' => array()],
        ['alpha2' => 'RO', 'name' => 'Romania', 'native' => 'România', 'states' => array()],
        ['alpha2' => 'RU', 'name' => 'Russia', 'native' => 'Россия', 'states' => array()],
        ['alpha2' => 'RW', 'name' => 'Rwanda', 'native' => '', 'states' => array()],
        ['alpha2' => 'BL', 'name' => 'Saint Barthélemy', 'native' => 'Saint-Barthélemy', 'states' => array()],
        ['alpha2' => 'SH', 'name' => 'Saint Helena', 'native' => '', 'states' => array()],
        ['alpha2' => 'KN', 'name' => 'Saint Kitts and Nevis', 'native' => '', 'states' => array()],
        ['alpha2' => 'LC', 'name' => 'Saint Lucia', 'native' => '', 'states' => array()],
        ['alpha2' => 'MF', 'name' => 'Saint Martin', 'native' => '', 'states' => array()],
        ['alpha2' => 'PM', 'name' => 'Saint Pierre and Miquelon', 'native' => 'Saint-Pierre-et-Miquelon', 'states' => array()],
        ['alpha2' => 'WS', 'name' => 'Samoa', 'native' => '', 'states' => array()],
        ['alpha2' => 'SM', 'name' => 'San Marino', 'native' => '', 'states' => array()],
        ['alpha2' => 'ST', 'name' => 'São Tomé and Príncipe', 'native' => 'São Tomé e Príncipe', 'states' => array()],
        ['alpha2' => 'SA', 'name' => 'Saudi Arabia', 'native' => 'المملكة العربية السعودية', 'states' => array()],
        ['alpha2' => 'SN', 'name' => 'Senegal', 'native' => 'Sénégal', 'states' => array()],
        ['alpha2' => 'RS', 'name' => 'Serbia', 'native' => 'Србија', 'states' => array()],
        ['alpha2' => 'SC', 'name' => 'Seychelles', 'native' => '', 'states' => array()],
        ['alpha2' => 'SL', 'name' => 'Sierra Leone', 'native' => '', 'states' => array()],
        ['alpha2' => 'SG', 'name' => 'Singapore', 'native' => '', 'states' => array()],
        ['alpha2' => 'SX', 'name' => 'Sint Maarten', 'native' => '', 'states' => array()],
        ['alpha2' => 'SK', 'name' => 'Slovakia', 'native' => 'Slovensko', 'states' => array()],
        ['alpha2' => 'SI', 'name' => 'Slovenia', 'native' => 'Slovenija', 'states' => array()],
        ['alpha2' => 'SB', 'name' => 'Solomon Islands', 'native' => '', 'states' => array()],
        ['alpha2' => 'SO', 'name' => 'Somalia', 'native' => 'Soomaaliya', 'states' => array()],
        ['alpha2' => 'ZA', 'name' => 'South Africa', 'native' => '', 'states' => array()],
        ['alpha2' => 'GS', 'name' => 'South Georgia & South Sandwich Islands', 'native' => '', 'states' => array()],
        ['alpha2' => 'KR', 'name' => 'South Korea', 'native' => '대한민국', 'states' => array()],
        ['alpha2' => 'SS', 'name' => 'South Sudan', 'native' => 'جنوب السودان', 'states' => array()],
        ['alpha2' => 'ES', 'name' => 'Spain', 'native' => 'España', 'states' => array()],
        ['alpha2' => 'LK', 'name' => 'Sri Lanka', 'native' => 'ශ්‍රී ලංකාව', 'states' => array()],
        ['alpha2' => 'VC', 'name' => 'St. Vincent & Grenadines', 'native' => '', 'states' => array()],
        ['alpha2' => 'SD', 'name' => 'Sudan', 'native' => 'السودان', 'states' => array()],
        ['alpha2' => 'SR', 'name' => 'Suriname', 'native' => '', 'states' => array()],
        ['alpha2' => 'SJ', 'name' => 'Svalbard and Jan Mayen', 'native' => 'Svalbard og Jan Mayen', 'states' => array()],
        ['alpha2' => 'SZ', 'name' => 'Swaziland', 'native' => '', 'states' => array()],
        ['alpha2' => 'SE', 'name' => 'Sweden', 'native' => 'Sverige', 'states' => array()],
        ['alpha2' => 'CH', 'name' => 'Switzerland', 'native' => 'Schweiz', 'states' => array()],
        ['alpha2' => 'SY', 'name' => 'Syria', 'native' => 'سوريا', 'states' => array()],
        ['alpha2' => 'TW', 'name' => 'Taiwan', 'native' => '台灣', 'states' => array()],
        ['alpha2' => 'TJ', 'name' => 'Tajikistan', 'native' => '', 'states' => array()],
        ['alpha2' => 'TZ', 'name' => 'Tanzania', 'native' => '', 'states' => array()],
        ['alpha2' => 'TH', 'name' => 'Thailand', 'native' => 'ไทย', 'states' => array()],
        ['alpha2' => 'TL', 'name' => 'Timor-Leste', 'native' => '', 'states' => array()],
        ['alpha2' => 'TG', 'name' => 'Togo', 'native' => '', 'states' => array()],
        ['alpha2' => 'TK', 'name' => 'Tokelau', 'native' => '', 'states' => array()],
        ['alpha2' => 'TO', 'name' => 'Tonga', 'native' => '', 'states' => array()],
        ['alpha2' => 'TT', 'name' => 'Trinidad and Tobago', 'native' => '', 'states' => array()],
        ['alpha2' => 'TA', 'name' => 'Tristan da Cunha', 'native' => '', 'states' => array()],
        ['alpha2' => 'TN', 'name' => 'Tunisia', 'native' => 'تونس', 'states' => array()],
        ['alpha2' => 'TR', 'name' => 'Turkey', 'native' => 'Türkiye', 'states' => array()],
        ['alpha2' => 'TM', 'name' => 'Turkmenistan', 'native' => '', 'states' => array()],
        ['alpha2' => 'TC', 'name' => 'Turks and Caicos Islands', 'native' => '', 'states' => array()],
        ['alpha2' => 'TV', 'name' => 'Tuvalu', 'native' => '', 'states' => array()],
        ['alpha2' => 'UM', 'name' => 'U.S. Outlying Islands', 'native' => '', 'states' => array()],
        ['alpha2' => 'VI', 'name' => 'U.S. Virgin Islands', 'native' => '', 'states' => array()],
        ['alpha2' => 'UG', 'name' => 'Uganda', 'native' => '', 'states' => array()],
        ['alpha2' => 'UA', 'name' => 'Ukraine', 'native' => 'Україна', 'states' => array()],
        ['alpha2' => 'AE', 'name' => 'United Arab Emirates', 'native' => 'الإمارات العربية المتحدة', 'states' => array()],
        ['alpha2' => 'GB', 'name' => 'United Kingdom', 'native' => '', 'states' => array()],
        ['alpha2' => 'US', 'name' => 'United States', 'native' => '', 'states' => array('AL' => 'Alabama', 'AK' => 'Alaska', 'AS' => 'American Samoa', 'AZ' => 'Arizona', 'AR' => 'Arkansas', 'AE' => 'Armed Forces - Europe', 'AP' => 'Armed Forces - Pacific', 'AA' => 'Armed Forces - USA/Canada', 'CA' => 'California', 'CO' => 'Colorado', 'CT' => 'Connecticut', 'DE' => 'Delaware', 'DC' => 'District of Columbia', 'FL' => 'Florida', 'GA' => 'Georgia', 'GU' => 'Guam', 'HI' => 'Hawaii', 'ID' => 'Idaho', 'IL' => 'Illinois', 'IN' => 'Indiana', 'IA' => 'Iowa', 'KS' => 'Kansas', 'KY' => 'Kentucky', 'LA' => 'Louisiana', 'ME' => 'Maine', 'MD' => 'Maryland', 'MA' => 'Massachusetts', 'MI' => 'Michigan', 'MN' => 'Minnesota', 'MS' => 'Mississippi', 'MO' => 'Missouri', 'MT' => 'Montana', 'NE' => 'Nebraska', 'NV' => 'Nevada', 'NH' => 'New Hampshire', 'NJ' => 'New Jersey', 'NM' => 'New Mexico', 'NY' => 'New York', 'NC' => 'North Carolina', 'ND' => 'North Dakota', 'OH' => 'Ohio', 'OK' => 'Oklahoma', 'OR' => 'Oregon', 'PA' => 'Pennsylvania', 'PR' => 'Puerto Rico', 'RI' => 'Rhode Island', 'SC' => 'South Carolina', 'SD' => 'South Dakota', 'TN' => 'Tennessee', 'TX' => 'Texas', 'UT' => 'Utah', 'VT' => 'Vermont', 'VI' => 'Virgin Islands', 'VA' => 'Virginia', 'WA' => 'Washington', 'WV' => 'West Virginia', 'WI' => 'Wisconsin', 'WY' => 'Wyoming')],
        ['alpha2' => 'UY', 'name' => 'Uruguay', 'native' => '', 'states' => array()],
        ['alpha2' => 'UZ', 'name' => 'Uzbekistan', 'native' => 'Oʻzbekiston', 'states' => array()],
        ['alpha2' => 'VU', 'name' => 'Vanuatu', 'native' => '', 'states' => array()],
        ['alpha2' => 'VA', 'name' => 'Vatican City', 'native' => 'Città del Vaticano', 'states' => array()],
        ['alpha2' => 'VE', 'name' => 'Venezuela', 'native' => '', 'states' => array()],
        ['alpha2' => 'VN', 'name' => 'Vietnam', 'native' => 'Việt Nam', 'states' => array()],
        ['alpha2' => 'WF', 'name' => 'Wallis and Futuna', 'native' => '', 'states' => array()],
        ['alpha2' => 'EH', 'name' => 'Western Sahara', 'native' => 'الصحراء الغربية', 'states' => array()],
        ['alpha2' => 'YE', 'name' => 'Yemen', 'native' => 'اليمن', 'states' => array()],
        ['alpha2' => 'ZM', 'name' => 'Zambia', 'native' => '', 'states' => array()],
        ['alpha2' => 'ZW', 'name' => 'Zimbabwe', 'native' => '']
	);
	
	// Return the array
	public function get_all() {
		
		return $this->countries;
		
	}

	// Return country name by isoCode
	public function get_name( $country_code ) {
		
		foreach ( $this->countries as $country ) {
			
			if ( $country['alpha2'] == $country_code )
				
				return $country['name'];
			
		}
		
	}
	
	// Return state name by isoCode
	public function get_state_name( $country_code, $state_code ) {
		
		$states = $this->get_states( $country_code );
		
		foreach ( $states as $key => $state ) {
			
			if ( $key == $state_code )
				
				return $state;
			
		}
		
	}

	// Return states array by country isoCode
	public function get_states( $country_code ) {
			
		foreach ( $this->countries as $country ) {
			
			if ( $country['alpha2'] == $country_code && !empty($country['states']) )
				
				return $country['states'];
			
		}
		
	}

	// Return an HTML select list of countries
	public function select_countries( $args = array(), $selected ) {
		
		$select_args = '';
		
		foreach ($args as $key => $value) {
			$select_args .= $key . '="' . $value . '" ';
		}
		
		$return = '<select ' . $select_args . '>';
	
		foreach ( $this->countries as $country ) {
			
			if ($selected == $country['alpha2']) $active = ' selected="selected"'; else $active = '';
			$return .= '<option value="' . $country['alpha2'] . '"' . $active . '>' . $country['name'] . '</option>';
			
		}
		
		$return .= '</select>';
		
		return $return;

	}
	
	// Return an HTML select list of states by country code
	public function select_states( $args = array(), $selected, $alpha2 ) {
		
		if ( $this->get_states($alpha2) ) {
		
			$select_args = '';
			
			foreach ($args as $key => $value) {
				$select_args .= $key . '="' . $value . '" ';
			}
			
			$return = '<select ' . $select_args . '>';
		
			foreach ( $this->get_states($alpha2) as $iso => $state ) {
				
				if ( $selected == $iso ) $active = ' selected="selected"'; else $active = '';
				$return .= '<option value="' . $iso . '"' . $active . '>' . $state . '</option>';
				
			}
			
			$return .= '</select>';
			
			return $return;
		
		} else {
			
			return false;
			
		}

	}
	
}

$wp_countries = new WP_Countries();
