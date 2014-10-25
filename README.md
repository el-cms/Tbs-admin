croogo-admin
============

Twitter bootstrap 3 theme for croogo admin

**This theme is almost finished, you're welcome to test it.**

## Goal
This theme has been created to replace the current admin theme. That mean you have to do some hacks in the original theme in order to make it work.
When the theme will be good enough, i'll integrate it in croogo as the default one.

## installation
 * Copy the Tbs-admin theme in `<croogo>/Views/Themed/Tbs-admin`
 * Edit `<croogo>/Config/settings.json` and add `"admin_theme": "Tbs-admin"` in the `"Site"` section.
 * Then you have to create symbolic links or copy some files to replace the original ones:
  * Link `<Tbs-admin>/Other/Plugin/Ckeditor/webroot/js/skins/bootstapck` to `<croogo>/Vendor/croogo/croogo/Plugin/Ckeditor/webroot/js/skins/bootstrapck` or copy bootstrapck in croogos's skins dir.
  * Delete `CroogoFormHelper.php` in`<croogo>/Vendor/croogo/croogo/Croogo/View/Helper/` and link/copy the one from `<Tbs-admin>/Helpers/`;
  * Delete `SetingsFormHelper.php` in`<croogo>/Vendor/croogo/croogo/Settings/View/Helper/` and link/copy the one from `<Tbs-admin>/Helpers/`;
 * Clear your cache.

That should be enough, login to admin and find issues ! There are things I couldn't fix, and your help is a precious gift.

If you want to update the CSS, download twitter bootstrap 3 and fontawesome and extract them in the `<Tbs-admin>/webroot` directory. You'll have to crunch the `**<Tbs-admin>/webroot/less/admin.less**` in `**<Tbs-admin>/webroot/css/admin.css**`

## I need help to...
... Update the 'locale' views (ExtensionsLocales/admin_edit.ctp, admin_index.ctp). I have no locale pack, so I can't test.