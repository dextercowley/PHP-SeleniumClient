<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Nested Anchor Elements Test Page</title>
</head>
<body>
<h1>Nested Anchor Elements Test Page</h1>
<ul id="menu">
	<li class="node"><a href="#">Site</a>
		<ul>
			<li><a class="icon-16-cpanel" href="index.php">Control Panel</a></li>
			<li class="separator"><span></span></li>
			<li><a class="icon-16-profile"
				href="index.php?option=com_admin&amp;task=profile.edit&amp;id=134">My
					Profile</a></li>
			<li class="separator"><span></span></li>
			<li><a class="icon-16-config" href="index.php?option=com_config">Global
					Configuration</a></li>
			<li class="separator"><span></span></li>
			<li class="node"><a class="icon-16-maintenance"
				href="index.php?option=com_checkin">Maintenance</a>
				<ul id="menu-com-checkin" class="menu-component">
					<li><a class="icon-16-checkin" href="index.php?option=com_checkin">Global
							Check-in</a></li>
					<li class="separator"><span></span></li>
					<li><a class="icon-16-clear" href="index.php?option=com_cache">Clear
							Cache</a></li>
					<li><a class="icon-16-purge"
						href="index.php?option=com_cache&amp;view=purge">Purge Expired
							Cache</a></li>
				</ul>
			</li>
			<li class="separator"><span></span></li>
			<li><a class="icon-16-info"
				href="index.php?option=com_admin&amp;view=sysinfo">System
					Information</a></li>
			<li class="separator"><span></span></li>
			<li><a class="icon-16-logout"
				href="/joomla_development/cms-trunk/administrator/index.php?option=com_login&amp;task=logout&amp;151a9130cc7e8fea0e553de27c1f7e89=1">Logout</a>
			</li>
		</ul>
	</li>
	<li class="node"><a href="#">Users</a>
		<ul>
			<li class="node"><a class="icon-16-user"
				href="index.php?option=com_users&amp;view=users">User Manager</a>
				<ul id="menu-com-users-users" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_users&amp;task=user.add">Add New User</a>
					</li>
				</ul>
			</li>
			<li class="node"><a class="icon-16-groups"
				href="index.php?option=com_users&amp;view=groups">Groups</a>
				<ul id="menu-com-users-groups" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_users&amp;task=group.add">Add New Group</a>
					</li>
				</ul>
			</li>
			<li class="node"><a class="icon-16-levels"
				href="index.php?option=com_users&amp;view=levels">Access Levels</a>
				<ul id="menu-com-users-levels" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_users&amp;task=level.add">Add New
							Access Level</a></li>
				</ul>
			</li>
			<li class="separator"><span></span></li>
			<li class="node"><a class="icon-16-user-note"
				href="index.php?option=com_users&amp;view=notes">User Notes</a>
				<ul id="menu-com-users-notes" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_users&amp;task=note.add">Add User Note</a>
					</li>
				</ul>
			</li>
			<li class="node"><a class="icon-16-category"
				href="index.php?option=com_categories&amp;view=categories&amp;extension=com_users.notes">User
					Note Categories</a>
				<ul id="menu-com-categories-categories-com-users-notes"
					class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_categories&amp;task=category.add&amp;extension=com_users.notes">Add
							New Category</a></li>
				</ul>
			</li>
			<li class="separator"><span></span></li>
			<li><a class="icon-16-massmail"
				href="index.php?option=com_users&amp;view=mail">Mass Mail Users</a>
			</li>
		</ul>
	</li>
	<li class="node"><a href="#">Menus</a>
		<ul>
			<li class="node"><a class="icon-16-menumgr"
				href="index.php?option=com_menus&amp;view=menus">Menu Manager</a>
				<ul id="menu-com-menus-menus" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_menus&amp;view=menu&amp;layout=edit">Add
							New Menu</a></li>
				</ul>
			</li>
			<li class="separator"><span></span></li>
			<li class="node"><a class="icon-16-menu"
				href="index.php?option=com_menus&amp;view=items&amp;menutype=usermenu">User
					Menu</a>
				<ul id="menu-com-menus-items-usermenu" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_menus&amp;view=item&amp;layout=edit&amp;menutype=usermenu">Add
							New Menu Item</a></li>
				</ul>
			</li>
			<li class="node"><a class="icon-16-menu"
				href="index.php?option=com_menus&amp;view=items&amp;menutype=top">Top</a>
				<ul id="menu-com-menus-items-top" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_menus&amp;view=item&amp;layout=edit&amp;menutype=top">Add
							New Menu Item</a></li>
				</ul>
			</li>
			<li class="node"><a class="icon-16-menu"
				href="index.php?option=com_menus&amp;view=items&amp;menutype=aboutjoomla">About
					Joomla</a>
				<ul id="menu-com-menus-items-aboutjoomla" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_menus&amp;view=item&amp;layout=edit&amp;menutype=aboutjoomla">Add
							New Menu Item</a></li>
				</ul>
			</li>
			<li class="node"><a class="icon-16-menu"
				href="index.php?option=com_menus&amp;view=items&amp;menutype=parks">Australian
					Parks</a>
				<ul id="menu-com-menus-items-parks" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_menus&amp;view=item&amp;layout=edit&amp;menutype=parks">Add
							New Menu Item</a></li>
				</ul>
			</li>
			<li class="node"><a class="icon-16-menu"
				href="index.php?option=com_menus&amp;view=items&amp;menutype=mainmenu">Main
					Menu <span><img
						src="/joomla_development/cms-trunk/administrator/templates/bluestork/images/menu/icon-16-default.png"
						alt="*" title="Home">

				</span>
			</a>
				<ul id="menu-com-menus-items-mainmenu" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_menus&amp;view=item&amp;layout=edit&amp;menutype=mainmenu">Add
							New Menu Item</a></li>
				</ul>
			</li>
			<li class="node"><a class="icon-16-menu"
				href="index.php?option=com_menus&amp;view=items&amp;menutype=fruitshop">Fruit
					Shop</a>
				<ul id="menu-com-menus-items-fruitshop" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_menus&amp;view=item&amp;layout=edit&amp;menutype=fruitshop">Add
							New Menu Item</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li class="node"><a href="#">Content</a>
		<ul>
			<li class="node"><a class="icon-16-article"
				href="index.php?option=com_content">Article Manager</a>
				<ul id="menu-com-content" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_content&amp;task=article.add">Add New
							Article</a></li>
				</ul>
			</li>
			<li class="node"><a class="icon-16-category"
				href="index.php?option=com_categories&amp;extension=com_content">Category
					Manager</a>
				<ul id="menu-com-categories-com-content" class="menu-component">
					<li><a class="icon-16-newarticle"
						href="index.php?option=com_categories&amp;task=category.add&amp;extension=com_content">Add
							New Category</a></li>
				</ul>
			</li>
			<li><a class="icon-16-featured"
				href="index.php?option=com_content&amp;view=featured">Featured
					Articles</a></li>
			<li class="separator"><span></span></li>
			<li><a class="icon-16-media" href="index.php?option=com_media">Media
					Manager</a></li>
		</ul>
	</li>
	<li class="node"><a href="#">Components</a>
		<ul>
			<li class="node"><a class="icon-16-banners"
				href="index.php?option=com_banners">Banners</a>
				<ul id="menu-com-banners" class="menu-component">
					<li><a class="icon-16-banners" href="index.php?option=com_banners">Banners</a>
					</li>
					<li><a class="icon-16-banners-cat"
						href="index.php?option=com_categories&amp;extension=com_banners">Categories</a>
					</li>
					<li><a class="icon-16-banners-clients"
						href="index.php?option=com_banners&amp;view=clients">Clients</a></li>
					<li><a class="icon-16-banners-tracks"
						href="index.php?option=com_banners&amp;view=tracks">Tracks</a></li>
				</ul>
			</li>
			<li class="node"><a class="icon-16-contact"
				href="index.php?option=com_contact">Contacts</a>
				<ul id="menu-com-contact" class="menu-component">
					<li><a class="icon-16-contact" href="index.php?option=com_contact">Contacts</a>
					</li>
					<li><a class="icon-16-contact-cat"
						href="index.php?option=com_categories&amp;extension=com_contact">Categories</a>
					</li>
				</ul>
			</li>
			<li><a class="icon-16-joomlaupdate"
				href="index.php?option=com_joomlaupdate">Joomla! Update</a></li>
			<li class="node"><a class="icon-16-messages"
				href="index.php?option=com_messages">Messaging</a>
				<ul id="menu-com-messages" class="menu-component">
					<li><a class="icon-16-messages-add"
						href="index.php?option=com_messages&amp;task=message.add">New
							Private Message</a></li>
					<li><a class="icon-16-messages-read"
						href="index.php?option=com_messages">Read Private Messages</a></li>
				</ul>
			</li>
			<li class="node"><a class="icon-16-newsfeeds"
				href="index.php?option=com_newsfeeds">Newsfeeds</a>
				<ul id="menu-com-newsfeeds" class="menu-component">
					<li><a class="icon-16-newsfeeds"
						href="index.php?option=com_newsfeeds">Feeds</a></li>
					<li><a class="icon-16-newsfeeds-cat"
						href="index.php?option=com_categories&amp;extension=com_newsfeeds">Categories</a>
					</li>
				</ul>
			</li>
			<li><a class="icon-16-redirect" href="index.php?option=com_redirect">Redirect</a>
			</li>
			<li><a class="icon-16-search" href="index.php?option=com_search">Search</a>
			</li>
			<li><a class="icon-16-finder" href="index.php?option=com_finder">Smart
					Search</a></li>
			<li class="node"><a class="icon-16-weblinks"
				href="index.php?option=com_weblinks">Weblinks</a>
				<ul id="menu-com-weblinks" class="menu-component">
					<li><a class="icon-16-weblinks"
						href="index.php?option=com_weblinks">Links</a></li>
					<li><a class="icon-16-weblinks-cat"
						href="index.php?option=com_categories&amp;extension=com_weblinks">Categories</a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	<li class="node"><a href="#">Extensions</a>
		<ul>
			<li><a class="icon-16-install" href="index.php?option=com_installer">Extension
					Manager</a></li>
			<li class="separator"><span></span></li>
			<li><a class="icon-16-module" href="index.php?option=com_modules">Module
					Manager</a></li>
			<li><a class="icon-16-plugin" href="index.php?option=com_plugins">Plug-in
					Manager</a></li>
			<li><a class="icon-16-themes" href="index.php?option=com_templates">Template
					Manager</a></li>
			<li><a class="icon-16-language" href="index.php?option=com_languages">Language
					Manager</a></li>
		</ul>
	</li>
	<li class="node"><a href="#">Help</a>
		<ul>
			<li><a class="icon-16-help"
				href="index.php?option=com_admin&amp;view=help">Joomla Help</a></li>
			<li class="separator"><span></span></li>
			<li><a class="icon-16-help-forum" href="http://forum.joomla.org"
				target="_blank">Official Support Forum</a></li>
			<li><a class="icon-16-help-docs" href="http://docs.joomla.org"
				target="_blank">Documentation Wiki</a></li>
			<li class="separator"><span></span></li>
			<li class="node"><a class="icon-16-weblinks" href="#">Useful Joomla
					links</a>
				<ul class="menu-component">
					<li><a class="icon-16-help-jed" href="http://extensions.joomla.org"
						target="_blank">Joomla Extensions</a></li>
					<li><a class="icon-16-help-trans"
						href="http://community.joomla.org/translations.html"
						target="_blank">Joomla Translations</a></li>
					<li><a class="icon-16-help-jrd" href="http://resources.joomla.org"
						target="_blank">Joomla Resources</a></li>
					<li><a class="icon-16-help-community"
						href="http://community.joomla.org" target="_blank">Community
							Portal</a></li>
					<li><a class="icon-16-help-security"
						href="http://developer.joomla.org/security.html" target="_blank">Security
							Center</a></li>
					<li><a class="icon-16-help-dev" href="http://developer.joomla.org"
						target="_blank">Developer Resources</a></li>
					<li><a class="icon-16-help-shop" href="http://shop.joomla.org"
						target="_blank">Joomla Shop</a></li>
				</ul>
			</li>
		</ul>
	</li>
	</ul>
</body>
</html>