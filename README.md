# wp_countries
A Wordpress Plugin providing PHP arrays and HTML select list of all countries and states

## Usage

```
// Important!
global $wp_countries;


/**
 * Display a HTML select with all countries
 * $wp_countries->select_countries( $args = array() , $selected );
 */
echo $wp_countries->get_name( "isoCode" );


/**
 * Display a HTML select with all countries
 * $wp_countries->select_countries( $args = array() , $selected );
 */
echo $wp_countries->select_countries( array('name' => 'myname', 'id' => 'myid'), "mySelectedOptionValue" );

/**
 * Display a HTML select with all states of a country
 * $wp_countries->select_countries( $args = array() , $selected );
 */
echo $wp_countries->select_states( array('name' => 'myname', 'id' => 'myid'), "mySelectedOptionValue", "isoCode" );

```
