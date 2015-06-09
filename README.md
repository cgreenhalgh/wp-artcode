# wp-artcode

ArtCodes, [http://aestheticodes.com/](http://aestheticodes.com/), are aestically pleasing machine-readable codes. This plugin allows you to create ArtCode experiences for use with the ArtCode App on Android/iPhone out of posts and pages in wordpress. 

Contents:

- Installation
- User Guide
- Notes

## Installation

1. Upload the directory `artcode` to the `/wp-content/plugins/` directory. For example, zip the artcode directory as `artcode.zip`, and in the WordPress admin > `Plugins` > `Add New` select `Upload Plugin`, choose the zip file, then `Install Now`.
1. Activate the plugin through the `Plugins` menu in WordPress

## User Guide

### ArtCode App

The ArtCode app is available on iTunes AppStore and Google Play; search for `Artcodes`.

Some of the functions described here may not be supported in the public version(s) of the App as of 2015-04-02; if in doubt check with the Aestheticodes project team.

### Creating a Post / Marker 

You specify an ArtCode marker and its associated content by creating a WordPress post (or page).

Create a post in the usual way `Posts` > `Add New`. Give it a title and a description. 

In the post editing page find the `ArtCode Experience Settings` box. Enter an ArtCode to associate with the post, e.g. `1:1:1:1:2'. 

By default, when you scan this code it will open this post on the phone. If you want to open a different page then enter the full URL in the URL box. If you want to show the title/content of this page to the user within the ArtCode app, with the option to open the link then set `Show Detail Screen` to `Yes`.

Publish the post (the `Publish` button in the `Publish` box).

### Creating an ArtCode Experience

You define a complete ArtCode Experience, i.e. a set of related codes and content, by creating an ArtCode Experience (a custom post type).

Create a ArtCode Experience, i.e. from the admin menu, `ArtCode Experience` > `Add New`.

Give the experience a title and a description. The featured image (if set) will appear as the experience icon and above the description.

In the ArtCode Experience editing page find the `ArtCode Experience Settings` box. 

Under `Add Markers` press `Search`; you should see a list of your posts and their associated code, including the post you just made (above). Tick the checkbox for that post and press `Add Selected`. It will appears in the `Markers` list above.

By default you will need to use ArtCodes with 4-6 regions. You will need to change the default ArtCode scanning settings if you are using ArtCodes with few/many regions, or using checksums. 

Now publish the ArtCode Experience.

### Trying an ArtCode Experience

View your published ArtCode Experience. In a single post view you will see a block `ArtCode Experience Links` under the description of the experience. 

On a phone with the ArtCode app installed click `Open in ArtCode Reader`. This should open the ArtCode app running your new experience. Try scanning the code you associated with the post (above); that page should open.

You can also copy and share/email the link of the `Open in ArtCode Reader` button, or click `QR` to show a QR-code which can be read with a standard QR-code reader (not ArtCodes!) which will take you to the ArtCode Experience.

Once you have opened the experience in the ArtCode app it should get copied onto the ArtCode server, and you should be able to shared that copy with other people via the ArtCode Apps share function.

## Notes

As of 2015-04-02 the experience and marker descriptions have HTML tags stripped out, as they don't seem to be supported by the app at the moment.

As of 2015-04-02 opening the experience in the ArtCode App on Android works. Updating the experience and downloading it again appears to update the experience on the phone.

As of 2015-04-02 opening the experience in the iPhone App doesn't seem to work.

There is currently no automatic way to import an experience created in the App (or changes made in the App) back into the WordPress editor.

The same (featured) image is currently used for the icon and the image associated with an experience.

