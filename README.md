### About

Hide extension for phpBB

[![Build Status](https://img.shields.io/travis/com/AlfredoRamos/phpbb-ext-hide.svg?style=flat-square)](https://travis-ci.com/AlfredoRamos/phpbb-ext-hide)
[![Latest Stable Version](https://img.shields.io/github/tag/AlfredoRamos/phpbb-ext-hide.svg?label=stable&style=flat-square)](https://github.com/AlfredoRamos/phpbb-ext-hide/releases)
[![Code Quality](https://img.shields.io/codefactor/grade/github/AlfredoRamos/phpbb-ext-hide.svg?style=flat-square)](https://www.codefactor.io/repository/github/alfredoramos/phpbb-ext-hide)
[![Translation Progress](https://badges.crowdin.net/phpbb-ext-hide/localized.svg)](https://crowdin.com/project/phpbb-ext-hide)
[![License](https://img.shields.io/github/license/AlfredoRamos/phpbb-ext-hide.svg?style=flat-square)](https://raw.githubusercontent.com/AlfredoRamos/phpbb-ext-hide/master/license.txt)

### Dependencies

- PHP 7.1.3 or greater
- phpBB 3.3 or greater

### Installation

- Download the [latest release](https://github.com/AlfredoRamos/phpbb-ext-hide/releases)
- Decompress the `*.zip` or `*.tar.gz` file
- Copy the files and directories inside `{PHPBB_ROOT}/ext/alfredoramos/hide/`
- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Enable` and confirm

### Usage

Write `[hide]text[/hide]`  and it will hide the content to guests.

### Preview

[![Logged in user](https://i.imgur.com/OajNWkct.png)](https://i.imgur.com/OajNWkc.png) [![Guest user](https://i.imgur.com/xDbK3oUt.png)](https://i.imgur.com/xDbK3oU.png)


*(Click to view in full size)*

### Configuration

To customize the look and feel:

- Copy the `styles/prosilver/` directory into `styles/{STYLE}/`
- Edit the following files as needed
	- `styles/{STYLE}/theme/css/style.css`
	- `styles/{STYLE}/theme/css/colors.css`

**Note:** If your style doesn't inherit from `prosilver`, you should follow the steps above even if you don't want to change any file.

### Uninstallation

- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Disable` and confirm
- Go back to `Manage extensions` > `Hide` > `Delete data` and confirm

### Upgrade

- Uninstall the extension
- Delete all the files inside `{PHPBB_ROOT}/ext/alfredoramos/hide/`
- Download the new version
- Install the extension

### Credits

File `lock-closed.svg` from [Zoondicons](https://www.zondicons.com/) by [Steve Schoger](https://twitter.com/steveschoger) is licensed under [CC BY 4.0](https://creativecommons.org/licenses/by/4.0/)
