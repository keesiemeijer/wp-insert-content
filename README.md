# WP Insert Content #

This plugin adds functions for use in your WordPress (child) theme to insert content between or after HTML paragraphs (`<p></p>`) in post content.

Use these functions in your theme template files to insert content in WordPress post content before display. The PHP [DOM module](https://secure.php.net/manual/en/book.dom.php) is used to find and add the content after paragraphs.

## Features
* Insert content after the middle paragraph (default)
* Insert content after a set number of paragraphs
* Exclude nested paragraphs (default)
* Inserted content can contain HTML as well.

See this github repository for more information about how to use these functions in your theme template files: https://github.com/keesiemeijer/insert-content