AMEEconnect Documentation (v3)
==============================

This is the documentation for AMEEconnect, API version 3, written in docbook 4.4. For
version 2 documentation, please check out the v2_maintenance branch.

This work is licensed under a [Creative Commons Attribution-ShareAlike 3.0 Unported License](http://creativecommons.org/licenses/by-sa/3.0/).

Requirements
------------

OSX with Homebrew:
(Assuming RVM/Ruby 1.9.2/Bundler preinstalled)

    > brew install docbook fop
    > bundle

Manual Builds
-------------

    > cd src
    > ../tools/book-dist.py [OPTION]

standard options:

* `--html-chunk`: HTML multi page, generally used in development
* `--php-chunk`:  PHP multi page for use in AMEE's wordpress site

other options (used less often, and may not currently work properly):

* `--pdf`:  single PDF
* `--html`: single page HTML

Deploying to the live site
--------------------------

    > cd src
    > ../tools/book-dist.py --php-chunk
    > cap {staging|production} deploy

Regenerating Samples
--------------------

    > cd src/doc/samples
	> cp amee.example.yml amee.yml
	> vi amee.yml
    > rake

To add new samples, edit Rakefile and add a new request. Then include the generated 
file from the samples directory, which will include the XML and JSON variants automatically.

Automated Builds
----------------

From the root directory, run:

    > bundle
    > guard

This should set up automatic building of the html-chunk documentation. A config.ru file is 
included so you can view it with pow.cx if you want to (may be useful for livereload, though
I've not set that up yet).

Editing
-------

Edit the individual files in src/doc to change text. src/doc/translations.ent contains shared
HTML entites for common terms, to make changing them across the entire document simple. To change
layout or container content for any of the builds, see the XSL stylesheets in src/stylesheets.