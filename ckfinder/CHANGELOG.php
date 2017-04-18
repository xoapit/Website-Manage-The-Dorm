<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CKFinder Changelog</title>
</head>
<body>
<h1 id="ckfinder-changelog">CKFinder Changelog</h1>
<p><a href="http://cksource.com/ckfinder">CKFinder</a></p>
<p>Copyright (c) 2007-2016, CKSource - Frederico Knabben. All rights reserved.</p>
<h2 id="version-3-4-1">Version 3.4.1</h2>
<h3 id="new-features">New Features</h3>
<ul>
<li class="net">Added support for FTP storage.</li></ul>
<h3 id="fixed-issues">Fixed Issues</h3>
<ul>
<li class="net">Improved Thumbnail command performance.</li></ul>
<h3 id="localization-updates">Localization Updates</h3>
<ul>
<li>Updated: Greek and Turkish.</li></ul>
<h2 id="version-3-4">Version 3.4</h2>
<h3 id="new-features">New Features</h3>
<ul>
<li>The <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-event-settings_change_GROUP_NAME"><code>settings:change:GROUP:NAME</code></a> event has a new parameter: <code>previousValue</code>.</li><li>Added the <a href="https://cksource.com/ckfinder/demo#compact-ui">Compact View</a> for displaying files in columns (not supported in IE9).</li><li>The <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Config-cfg-defaultViewType"><code>defaultViewType</code></a> configuration option accepts a new value: <code>compact</code>.</li><li>Added the <code>width</code> parameter for columns defined for List View in the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-event-listView_columns"><code>listView:columns</code></a> event.</li><li>Added the &quot;OK&quot; button to information dialogs (those created using the <code>dialog:info</code> request).</li><li class="net">Improved configuration validation.</li><li class="net">Added progress tracking for time-consuming operations.</li><li class="net">Added support for IIS virtual directories in the local storage adapter.</li></ul>
<h3 id="fixed-issues">Fixed Issues</h3>
<ul>
<li>Added the missing <code>command:before:FileUpload</code>, <code>command:ok:FileUpload</code> and <code>command:error:FileUpload</code> events for uploading files.</li><li>Fixed focus in the settings panel when changing the view type.</li><li>Fixed double <code>toolbar:reset:Main:folder</code> event in compact mode when the user selects a folder in the files pane.</li><li>Fixed keyboard navigation for disabled context menu items.</li><li>Removed the possibility to invoke the Delete File command by keyboard inside a folder with <code>ACL FILE_DELETE</code> set to <code>false</code>.</li><li>Removed the possibility to invoke the Rename File command by keyboard inside a folder with <code>ACL FILE_RENAME</code> set to <code>false</code>.</li><li>Fixed drag&amp;drop uploads in List View.</li><li>Updated Javascript code prettifier for samples.</li><li class="php">Fixed file permission issue occurring during file upload on some IIS server configurations.</li><li class="net">Fixed HTML file extension matching.</li><li class="net">Fixed URL generation for resized images in backends that use the Proxy command.</li><li class="net">Added missing file size field to the SaveImage command response.</li><li class="net">Improved thumbnail caching.</li></ul>
<h3 id="localization-updates">Localization Updates</h3>
<ul>
<li>Added: Swiss German (thanks to <a href="https://twitter.com/mirogrenda">Miro Grenda</a>!) and Ukrainian (thanks to Holovin Yevhen Nikolayevich!).</li><li>Updated: Chinese, Czech, Esperanto, French, German, Kurdish, Latvian, Polish, Russian, Slovakian, Spanish and Turkish.</li></ul>
<h2 id="version-3-3-1">Version 3.3.1</h2>
<h3 id="fixed-issues">Fixed Issues</h3>
<ul>
<li class="net">Fixed performance issue in folders with more than 1000 files.</li></ul>
<h2 id="version-3-3">Version 3.3</h2>
<h3 id="new-features">New Features</h3>
<ul>
<li class="php">Added support for Microsoft Azure Storage.</li><li class="net">Added a stable version of the ASP.NET connector.</li><li class="net">Added support for Microsoft Azure Storage.</li><li class="net">Added support for Amazon S3 Storage.</li></ul>
<h3 id="backward-incompatible-changes">Backward Incompatible Changes</h3>
<ul>
<li>Language files have undergone a major reorganization. Obsolete keys were removed.</li><li>Events related to rendering columns in the files pane were changed: <code>listView:file:column:NAME</code>, <code>listView:folder:column:NAME</code>.</li></ul>
<h3 id="fixed-issues">Fixed Issues</h3>
<ul>
<li>Performance improvements for rendering the files pane with thousands of items.</li><li>Thumbnail slider enabled in list view when loading CKFinder.</li><li>Choosing files with double click does not fetch the file URL for some remote backends.</li><li>Invalid time when parsing time in the 12-hour clock system.</li><li class="php">Image Edit: Saving an image that exceeds <code>maxWidth</code>/<code>maxHeight</code> throws an error.</li></ul>
<h3 id="localization-updates">Localization Updates</h3>
<ul>
<li>Added: Bosnian.</li><li>Updated: Brazilian Portuguese, Czech, Esperanto, French, German, Italian, Kurdish, Latvian, Persian, Polish, Russian, Spanish and Swedish.</li></ul>
<h2 id="version-3-2-1">Version 3.2.1</h2>
<h3 id="fixed-issues">Fixed Issues</h3>
<ul>
<li>In widget mode (in Internet Explorer/Edge only) the CSRF protection was too strict and did not allow for actions that should be allowed.</li></ul>
<h2 id="version-3-2">Version 3.2</h2>
<h3 id="new-features">New Features</h3>
<ul>
<li>Added new view for files pane: a list view with file details.</li><li>Added sorting of files in files pane by name, date and size.</li><li>Added the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Config-cfg-listViewIconSize"><code>listViewIconSize</code></a> configuration option.</li><li>Added the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Config-cfg-defaultSortBy"><code>defaultSortBy</code></a> configuration option.</li><li>Added the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Config-cfg-defaultSortByOrder"><code>defaultSortByOrder</code></a> configuration option.</li><li>Added the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Config-cfg-defaultViewType"><code>defaultViewType</code></a> configuration option.</li><li>Added the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-event-listView_columns"><code>listView:columns</code></a> event.</li><li>Added the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-event-listView_file_column_NAME"><code>listView:file:column:NAME</code></a> event.</li><li>Added the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-event-listView_folder_column_NAME"><code>listView:folder:column:NAME</code></a> event.</li><li>Added the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-event-resources_show_before"><code>resources:show:before</code></a> event.</li><li>Added the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-event-dialog_close_NAME"><code>dialog:close:NAME</code></a> event.</li><li>Added the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-request-file_getActive"><code>file:getActive</code></a> request.</li><li>Added the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-request-csrf_getToken"><code>csrf:getToken</code></a> request.</li><li>Added the <code>sendPostAsJson</code> parameter to the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-request-command_send"><code>command:send</code></a> request</li><li>The <code>view</code> parameter for the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-request-page_create"><code>page:create</code></a> request is now optional.</li></ul>
<h3 id="fixed-issues">Fixed Issues</h3>
<ul>
<li>Individual settings views have a proper name in the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-event-view_NAME"><code>view:NAME</code></a> event instead of a single <code>Setting</code>.</li><li>Compact mode: Keyboard navigation in breadcrumbs is inverted for RTL languages.</li><li>Fixed an issue that prevented to move or copy over 250 files on a default PHP installation.</li><li>Fixed wrong error message for an empty file name.</li><li>Fixed detection of swipe direction when opening panels on touch screen devices.</li><li>Compact mode: Focus on filter box is lost when typing.</li><li>Thumbnails are not refreshed after editing an image.</li><li>Files filter is not refreshed after clicking a folder.</li><li>Focus is lost after moving files.</li><li>The toolbar is unnecessarily rendered when lazy loading of a folder finishes and a file was selected.</li></ul>
<h3 id="localization-updates">Localization Updates</h3>
<ul>
<li>Added: Esperanto.</li></ul>
<h2 id="version-3-1">Version 3.1</h2>
<h3 id="security-updates">Security Updates</h3>
<p>As a result of security testing and hacking that we did on CKFinder 3 we discovered some potential security concerns in the server-side part of the application.
These issues affected actions that only authenticated users could perform solely in locations specified in your CKFinder backends configuration, but since
in some cases it was possible to skip ACL checks or file extension checks, <strong>an upgrade is highly recommended</strong>.</p>
<h3 id="new-features">New Features</h3>
<ul>
<li>Improved accessibility. Added compatibility with screen readers.</li><li>Reworked keyboard navigation in the entire application. Implemented custom <kbd>Tab</kbd> key support to resolve inconsistency between browsers.</li><li>Added the Keyboard Shortcuts dialog window &mdash; press <kbd>?</kbd> to open it.</li><li>Greatly improved application performance when loading files from remote locations (e.g. Amazon S3).</li><li>Improved performance by reducing the number of situations when the entire files pane is reloaded.</li><li>Improved performance by caching files on subsequent clicks of the folder.</li><li>Added Microsoft Edge compatibility.</li><li>Added preview of PDF files in the gallery.</li><li>Added drag and drop support for files onto folders and breadcrumbs in compact mode.</li><li>Added busy dialog and progress tracking for time-consuming operations.</li><li>Added Proxy command support. It is now possible to view files stored outside the document root or in remote backends in the gallery.</li><li class="php">Added the <a href="http://docs.cksource.com/ckfinder3-php/commands.html#command_proxy"><code>Proxy</code></a> command and the corresponding <a href="http://docs.cksource.com/ckfinder3-php/configuration.html#backend_option_useProxyCommand"><code>useProxyCommand</code></a> backend configuration option.</li><li>Reworked the Choose Scaled dialog window.</li><li>Edit Image feature now warns against closing without saving changes.</li><li>Added the <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-request-folder_getIcon"><code>folder:getIcon</code></a> request.</li><li>Removed Maximize/Minimize buttons in popup mode as the browser provides native controls for it.</li><li class="php">Improved performance by caching file previews.</li><li class="php">Added the <a href="http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_cache"><code>cache</code></a> option that configures cache lifetime for various CKFinder components.</li><li class="php">Added the <a href="http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_tempDirectory"><code>tempDirectory</code></a> option that configures the path to the temporary files folder used by CKFinder.</li><li class="php">Added the <a href="http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_sessionWriteClose"><code>sessionWriteClose</code></a> option that configures whether the connector should close write access to the session to avoid performance issues.</li><li class="php">Added the <a href="http://docs.cksource.com/ckfinder3-php/commands.html#command_operation"><code>Operation</code></a> command that tracks the progress of operation in time-consuming connector commands.</li></ul>
<h3 id="backward-incompatible-changes">Backward Incompatible Changes</h3>
<ul>
<li>Context menu API has undergone major changes. See the updated <a href="http://docs.cksource.com/ckfinder3/#!/guide/dev_contextmenu-section-ckfinder-3.1%2B">context menu documentation</a>.</li><li>Toolbar API events <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-event-toolbar_reset_NAME"><code>toolbar:reset:NAME</code></a> and <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-event-toolbar_reset_NAME_EVENT"><code>toolbar:reset:NAME:EVENT</code></a> - <code>data.toolbar</code> is now a <code>Backbone.Collection</code>, not an array.</li><li>The <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Application-request-file_getIcon"><code>file:getIcon</code></a> request no longer has the <code>extension</code> parameter. Pass the <code>file</code> parameter instead.</li></ul>
<h3 id="fixed-issues">Fixed Issues</h3>
<ul>
<li>Compact mode: Breadcrumb was hidden when entering a folder with many files.</li><li>Compact mode: There was no way to enter a folder on Android.</li><li>Compact mode: Broken border around CKFinder when viewing the top level folder with resource types.</li><li>Edit Image: Loading an image was not working when the domain name contained a dash character.</li><li>Edit Image: Context menu item was enabled when the user had no permissions to edit the file.</li><li>Edit Image: Resize option was not available in compact mode.</li><li>Edit Image: Reset button should have been disabled if there was nothing to reset.</li><li>Edit Image: Fixed validation of provided values in the edit image controls.</li><li>Edit Image: There was no information about failing to save a file.</li><li>Edit Image: It was possible to crop an area bigger than the edited image.</li><li>Edit Image: Fixed progress bar behavior.</li><li>Filter input: Clearing filter input did not result in showing all files in IE9.</li><li>Filter input: Filter should remember its state if it is still active.</li><li>Focusing elements: Focus in context menu and toolbar did not cycle.</li><li>Focusing elements: Focus was lost after resizing an image.</li><li>Focusing elements: Focus was not remembered when returning to the files pane.</li><li>Focusing elements: Pressing <kbd>Tab</kbd> should focus the first item in a component (file, folder, toolbar button), not the container.</li><li>Focusing elements: Lock focus chain within the settings panel.</li><li>Scrolling files: Scrolling on mobile devices was troublesome and sometimes did not work at all.</li><li>Scrolling files: Files were unnecessarily selected on scroll on mobile devices.</li><li>Thumbnails: Problem with thumbnails in widgets/popups when <a href="http://docs.cksource.com/ckfinder3/#!/api/CKFinder.Config-cfg-connectorPath"><code>connectorPath</code></a> did not include the domain.</li><li>Thumbnails: Thumbnails loaded with a significant delay for a larger number of files.</li><li>Thumbnails: Thumbnails were not refreshed in certain scenarios.</li><li>iOS/Safari: Thumbnails were not shown.</li><li>iOS/Safari: Popup sample did not work.</li><li>iOS/Safari: The configured height of the widget was ignored, instead CKFinder height depended on the number of files inside.</li><li>iOS/Safari: Downloading files did not work.</li><li>Setting global configuration did not work for widgets and popups.</li><li>There was no Close button available after file upload.</li><li>It should not be possible to move dialog windows.</li><li>Fixed various UI glitches in the RTL interface.</li><li>Video or image sometimes overlapped file preview controls in file preview.</li><li>Delete files confirmation dialog did not appear when the files pane was scrolled.</li><li>Changed the confusing empty folder message in the read-only mode.</li><li>Removed the notification about correctly uploaded file in IE9.</li><li>Resolved an issue with validating license names that started with <code>www[0-9]</code> or that contained upper case letters.</li><li>In certain scenarios not all available toolbar buttons were shown in CKFinder.</li><li>Fixed the look of the &quot;More&quot; drop-down in the toolbar.</li><li class="php">Empty <code>directory</code> key in the backend definition resulted in a double slash in the file URL.</li></ul>
<h3 id="localization-updates">Localization Updates</h3>
<ul>
<li>Added: Basque, Kurdish.</li><li>Updated: Brazilian Portuguese, Chinese, Croatian, Czech, Danish, Esperanto, Estonian, French, German, Greek, Hungarian, Italian, Korean, Norwegian, Persian, Polish and Russian.</li></ul>
<h2 id="version-3-0">Version 3.0</h2>
<p>A brand new version of CKFinder, currently available only for PHP. For an overview of new features, see the <a href="http://cksource.com/blog/CKFinder-3.0-for-PHP-Released">announcement about CKFinder 3.0 for PHP</a>.</p>
<ul>
<li>New architecture based on jQuery, jQuery Mobile, Backbone, Marionette, and RequireJS.</li><li>Built-in image editor.</li><li>Customizable skins compatible with jQuery UI Themeroller.</li><li>Full responsiveness, great mobile support.</li><li>Cloud storage support (Amazon S3, Dropbox) and FTP connector.</li></ul>

</body>
</html>