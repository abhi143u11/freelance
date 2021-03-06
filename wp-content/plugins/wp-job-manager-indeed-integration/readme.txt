=== Indeed Integration ===
Contributors: mikejolley
Requires at least: 3.8
Tested up to: 4.0
Stable tag: 2.0.17
License: GNU General Public License v3.0

Query and show sponsored results from Indeed when listing jobs, list Indeed jobs via a shortcode, and export your job listings to Indeed via XML. Note: Indeed jobs will be displayed in list format linking offsite (without full descriptions).

Uses https://ads.indeed.com/jobroll/xmlfeed and http://www.indeed.com/intl/en/xmlinfo.html

= Documentation =

Usage instructions for this plugin can be found on the wiki: [https://github.com/mikejolley/WP-Job-Manager/wiki/Indeed-Integration](https://github.com/mikejolley/WP-Job-Manager/wiki/Indeed-Integration).

= Support Policy =

I will happily patch any confirmed bugs with this plugin, however, I will not offer support for:

1. Customisations of this plugin or any plugins it relies upon
2. Conflicts with "premium" themes from ThemeForest and similar marketplaces (due to bad practice and not being readily available to test)
3. CSS Styling (this is customisation work)

If you need help with customisation you will need to find and hire a developer capable of making the changes.

== Installation ==

To install this plugin, please refer to the guide here: [http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation)

== Changelog ==

= 2.0.17 =
* Load translation files from the WP_LANG directory.
* Updated the updater class.

= 2.0.16 =
* Added more description for keyword field, e.g. you can search for 'or' terms by entering 'or' between keywords.

= 2.0.15 =
* Uninstaller.

= 2.0.14 =
* Trigger handler fix.

= 2.0.13 =
* Rewrote import class to support prepending and appending jobs at the same time, if you only have a local list of jobs 1 page long.
* Fixed notices.

= 2.0.12 =
* Fix category in export feed.
* Added support for job regions plugin.

= 2.0.11 =
* Fix for categories not set on export.

= 2.0.10 =
* Bundle Indeed logo so it works with SSL.

= 2.0.9 =
* job_manager_indeed_import_format_keyword filter.

= 2.0.8 =
* Option to control whether or not it only searches the title, or the entire Indeed listing.
* Updater update.

= 2.0.7 =
* Don't wrap keywords in 'title' when empty

= 2.0.6 =
* Add CO argument to shortcodes. Lets you change the default country.
* Added POT file
* Updated text domain

= 2.0.5 =
* Search title only when quering indeed. More relevance.
* Added new updater - This requires a licence key which should be emailed to you after purchase. Past customers (via Gumroad) will also be emailed a key - if you don't recieve one, email me.

= 2.0.4 =
* Add category to feeds

= 2.0.3 =
* Sort results by relevance for better matching positions

= 2.0.2 =
* Use geocode to pick up correct country to search within

= 2.0.1 =
* Target blank for the indeed link
* Include long and lat on each listing

= 2.0.0 =
* Added Indeed XML Feed functionality to export your listings to Indeed. http://www.indeed.com/intl/en/xmlinfo.html
* Added pagination for both indeed shortcodes and when displaying backfilled jobs

= 1.0.1 =
* Internship typo

= 1.0.0 =
* First release.