# wp_countries
A Wordpress Plugin providing PHP arrays and HTML select list of all countries and states

All countries are in the list. And states are available for US, Canada, Australia, India.

## Usage

```php
// Important!
global $wp_countries;


// Return an array of all countries and states
$wp_countries->get_all();

// Return an array with states
$wp_countries->get_states( $countryCode );

//Get country name by country code
echo $wp_countries->get_name( $countryCode );

/**
 * Display a HTML select with all countries
 * $wp_countries->select_countries( $args = array() , $selected );
 */
echo $wp_countries->select_countries( array('name' => 'myname', 'id' => 'myid'), "mySelectedOptionValue" );

/**
 * Display a HTML select with all states of a country
 * $wp_countries->select_states( $args = array() , $selected, $countryCode );
 */
echo $wp_countries->select_states( array('name' => 'myname', 'id' => 'myid'), "mySelectedOptionValue", "isoCode" );

```
