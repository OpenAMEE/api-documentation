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

    > make [TARGET]

standard targets:

* `html-chunk`: HTML multi page, generally used in development
* `php-chunk`:  PHP multi page for use in AMEE's wordpress site (this is the default)

other targets (used less often, and may not currently work properly):

* `pdf`:  single PDF
* `html`: single page HTML

Deploying to the live site
--------------------------

    > make
	> cap {staging|production} deploy

Regenerating Samples
--------------------

	> cp src/doc/samples/amee.example.yml src/doc/samples/amee.yml
	> vi src/doc/samples/amee.yml
    > make samples

To add new samples, edit src/doc/samples/Rakefile and add a new request. Then include the generated 
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