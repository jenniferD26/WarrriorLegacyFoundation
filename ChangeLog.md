## v1.4.4 (January 16th 2017)

* Various bug fixes and updates

## v1.4.3 (February 20th 2016)

* Fixed page sorting for theme options pages

## v1.4.2 (July 3rd 2015)

* Various bug fixes and updates

## v1.4.1 (December 31st 2015)

* Various bug fixes

## v1.4.0 (December 19st 2014)

* New font picker data type
* Conditional logic in the Options Builder
* Dashicons for menus and extensions
* Style updates in the admin
* Bug fixes
* Updates to default theme Liftoff

## v1.3.1 (December 2nd 2014)

* Various bug fixes

## v1.3 (November 12th 2014)

* The bug “#63 - Error messages on plugin install screen” is fixed
* The bug “#64 - Activating Extension on WP Network install” is fixed
* Fix for Runway Themes screen actions where network_admin_url() was causing issues and should use admin_url() instead because the action does not change behavior on network installs.
* The bug “#65 - Runway Themes link for ‘Network Enable’ not working” is fixed
* Added new records to translations-js.php
* Replaced some references to network_admin_url() with admin_url()
* Changed references for network_admin_url() to admin_url() in cases where no network admin alternative page exists
* Added filter for options data
* Changed filter name
* The bug “#67 - False positive on PHP version check for version 5.3.3-7+squeeze19“ is fixed
* The enhancement “#68 - New data-type for font select and Google fonts” is fixed
* The enhacement “#69 - Add textdomain function to load framework translated strings” is fixed
* The bug “#70 - White screen and not saving on Customize view in WP 4” is fixed
* The bug “#73 - No extensions showing up on fresh install” is fixed
* The bug “#74 - Reports page, PHP version might not be correct” is fixed
* Added new action for 'rf_save_data' called when saving an options page or other data generated from the options builder and displayed using options-page-render.php
* The enhacement “#75 - Add option to Customizer for live updates” is fixed
* Increased max height of Options Builder dialog window
* Shift top position of Optons Builder modal window
* The enhacement “#76 - Themes add and edit screen: Menu icon select with dashicons” is fixed
* The enhacement “#77 - Download Directory: Redesign and updates” is fixed
* Fixed the saving of user's token for auth through runwaywp.com
* The enhacement “#78 - Runway Themes: Add new theme, screenshot help text” is fixed
* The bug “#79 - Options Builder: Cut off modal window on smaller screens” is fixed
* The enhacement “#80 - Options Builder: Add new ‘Duplicate’ link” is fixed
* The enhacement “#81 - Child Theme Manager - Redesign and updates” is fixed
* The bug “#82 - Updates not registering with Runway” is fixed
* Updated code to get URL for data-type scripts/css to work better with folders included through symlinks and other virtual paths
* The bug “#83 - Options Builder not allowing edit to alias” is fixed
* The enhacement “#84 - Child Themes Manager - button hover labels” is fixed
* The bug “#85 - Child Theme Manager - Install button link needs updating” is fixed
* Style updates for new child themes manager interface
* Updated admin CSS loading to be included in head. Some side effects of this may require us to do extended testing of extensions to ensure there are not any missing CSS files because they were never specified for an extension but were instead included by default
* Fix for Options Builder styles related to updated admin CSS loading
* Added new translation strings
* The bug “#87 - Child Themes Manager - Clicking package button opens details modal” is fixed
* Updated references to Dashboard CSS and JS files to only load in Dashboard
* The bug #88 - Theme Manager - Custom icon issues” is fixed

## v1.2 (August 21st 2014)

* Updated admin page links to admin_url()
* Added license file
* Additional fixes for Download Directory
* Fixed Authorization manager
* Updated admin_url() to network_admin_url()
* The bug “#40 - Error when deleting extenions” is fixed
* The bug “#41 - Can't remove options from WP Customizer after deselecting the option” is fixed
* Fixed javascript error with ace-editor in customizer
* Changed reference to download directory (new path 'download-directory' instead of 'download_dir') in reports manager
* Modified the loading to account for logged out users and displaying extensions added from the Download Directory Server
* The bug “#42 - Error in Download Directory” is fixed
* The enhancement “#43 - Move code for ACE Editor from framework core to Data Type folder“ is fixed
* The question “#44 - Standalone options builder” is solved
* Refactoring for data-types
* Fixed Contact Form defaults saving
* Added missing 'framework' text domain to translation strings
* The enhancement “#45 - Add apply_filters() to $excludes in load-functions.php“ is fixed
* The bug “#47 - Runway updates notices showing incorrectly” is fixed
* Updates for Download-directory, Auth-manager
* The bug “#48 - Standalone theme deleting during plugin install or update” is fixed
* The bug “#52 - 'Duplicate' link not working” is fixed
* Updated settings-object.php in Theme Updater to use WP function for framework (template) directory path
* Removed hard coded path to framework directory
* The enchancement “#53 - New data-type: range slider” is fixed
* The bug “#54 - Section title not displaying on Customizer” is fixed
* The bug “#55 - Theme-Updater refers to framework directory” is fixed
* The bug “#56 - Deleting a page doesn't delete settings” is fixed
* The bug “#57 - Code Editor Data Type Include Broken” is fixed
* Added checking for Options Page alias
* Updated some translation strings to include ? at the end of a question
* Fixed typo
* The bug “#59 - Typo in PHP_VERSION_ID to check PHP version” is fixed
* The enhancement “#61 - Translation: Some format issues” is fixed
* The enhancement “#62 - Replace use of ZipArchive with core WP function unzip_file()” is fixed
* Added Credits tab to Dashboard
* Fixed spacing
* Fixed theme activation and creation links for new child theme management


## v1.1.1 (June 24th 2014)

* Fix for '[]' instead of 'array()' reference in code.


## v1.1 (June 20th 2014)

* Fixed notice: Constant DS already defined in framework/includes/themes-manager/object.php
* Fixed some notices if admin object is invoked with an empty settings array
* The enhancement “#11 - Auto update from WordPress admin” is fixed
* The enhancement “#14 - Add tags to package history” is fixed
* The enhancement “#15 - Repeating Fields for Data Types” is fixed
* The bug “#16 - Default child theme: Problems changing theme name and settings” is fixed
* The bug “#17 - Add Options Page - menu item showing in standalone themes” is fixed
* Updated get_option('home') to home_url()
* The bug “#21 - Problems with standalone theme getting setup from Layout Manager, Sidebars and Content Types extensions“ is fixed
* The enhancement “#22 - Media Library popup for image select options“ is fixed
* Basic style updates for better appearance in WP 3.8 admin
* The enhancement “#23 - Update deprecated function get_theme_data() to wp_get_theme() “ is fixed
* Move function db_json_sync() to load-functions.php
* The enhancement “#24 - Update instances of TEMPLATEPATH with get_template_directory() “ is fixed
* Updated bloginfo() to get_stylesheet_directory_uri()
* Updated deprecated WP function get_bloginfo() to get_stylesheet_directory_uri()
* Updated deprecated WP funciton get_bloginfo() to get_stylesheet_directory_uri() and get_template_directory_uri()
* Updates for deprecated WP functions
* Fix to make sure we don't get Runway menus in a standalone theme that has been setup to run as a child theme for end user customization
* Fixed z-index for dialog pop-up window
* The incremental database update from JSON file is fixed
* The bug “#25 - Notice Undefined index: theme_options“ is fixed
* The bug “#26 - Custom Icon doesn't appear“ is fixed
* The bug “#27 - File Upload - data type problems in WordPress theme Customizer interface” is fixed
* Fixed text editor bug
* Updates for theme prefix
* The bug “#29 - Crossover data in File Upload data type” is fixed
* Updated style for field title description in Options Builder pages
* Updates to translation strings domain from THEME_NAME to 'framework'
* Fixed repeating field validation bug
* Fixed option page duplicate bug
* The bug in multi-select data type is fixed
* Updated show/hide options in layout manager
* The bug “Sidebars in standalone don’t delete” is fixed
* The bug “Resetting layout for category” is fixed
* The bug “Extensions deactivating during using theme options” is fixed
* The bug “Runway Child Theme name changing with error messages” is fixed
* The bug “#31 - Rebuild Download Packages - Tag does not show” is fixed
* The enhancement “#32 - PHP translation file for Options Builder, Layout Manager and other dynamic Extensions” is fixed
* The enhancement “Add functions rf__() and rf_e()” is fixed
* The enhancement “Create translation strings for data types” is fixed
* The enhancement “Add javascript translations for formsbuilder” is fixed
* The enhancement “Add file with javascript translations” is fixed
* The enhancement “Add translation strings for Dashboard, Download Directory, Auth Manager, Extensions Manager and Options Builder” is fixed
* The enhancement “Add translation strings for Option-page-render, Reports Manager and Themes Manager” is fixed
* Fixed custom taxonomy query bug
* The bug “#33 - Extension references not updating with theme name change” is fixed
* Fixed package download bug
* The bug “#34 - Faulty PHP Version Error on WPEngine Servers” is fixed
* Updated function get_options_data() for Content Types custom meta fields
* The enhancement “Add Code Editor data type” is fixed
* Fixed Code Editor data type bug
* Fix for Runway admin menus not appearing when no child theme is active
* The enhancement “Add width, height settings for Code Editor data type” is fixed
* Fix for error message, "Warning: Invalid argument supplied for foreach() in ..../wp-content/themes/runway-framework/framework/includes/load-functions.php
* The enhancement “Add confirm message before deleting for Options Builder” is fixed
* Fixed Custom taxonomies bug
* The bug “Content Types not deleting proper types in standalone theme, options not always saving” is fixed
* Fixed deletion taxonomies bug
* The enhancement “#36 - Exclude "framework/themes" folder from standalone versions” is fixed
* The enhancement “#37 - Core extensions to exclude from standalone themes” is fixed
* Updates for download-directory, extensions-manager, auth-manager
* The enhancement “Add custom base64_decode function” is fixed
* Moved Theme Updater extension to core
* Updated Theme Updater extension


## v1.0.1 (January 9th 2014)

* Fix for #6, local data for Layout Manager fields.
* Fixed missing image in Forms Builder.
* Added the checking for 'DS' constant #5.
* Added the message about successful settings save #10.
* Update develop branch to the latest version of the framework
* Add extensions dir
* Fixed bug in report-manager
* Change extensions server source
* Add new extensions "Auth Manager" structure
* Inputs not showing in correct order - issue #12 is fixed
* Changes in auth manager
* Local JSON data file for Reports Manager
* Fix for edit/delete buttons in Forms Builder on WP 3.8 new interface.


## v1.0 (November 5th 2013)

* Initial release of version 1.0
