Notes for phpBB 3.3
===========

Extension for phpBB that lets every registered user keep a private notepad on the forum.
Extension by Jakub Senko ([Senky](https://github.com/Senky)). 

**Version:** 2.1.0 (22/05/2026)

#### Requirements
- phpBB 3.3.0 or higher
- PHP 7.1.3 or higher

#### Features
- Per-user private notepad accessible from the quick links menu
- Notes are stored on the `user_note` column of the users table and never shown to other users, administrators, or moderators
- Single page at `/app.php/notes`
- Bots are redirected to the index

#### ACP Options
None — the extension has no configurable settings.

#### Extension integrations
None.

#### Languages
English, German, Dutch, French, Spanish, Estonian, Portuguese (Brazil), Russian, Arabic

#### Tested on
prosilver

#### Installation
1. [Download the latest release](https://github.com/Senky/notes) and unzip it.
2. Copy the contents to `/ext/senky/notes/` (so that `composer.json` is at `/ext/senky/notes/composer.json`).
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Find `Notes` under "Disabled Extensions" and click `Enable`.

#### Uninstallation
1. Navigate in the ACP to `Customise -> Manage extensions`.
2. Click the `Disable` link for `Notes`.
3. To permanently uninstall, click `Delete Data`, then delete the `notes` folder from `/ext/senky/`.

#### Support
- [Support forum](https://www.avathar.be/forum/viewforum.php?f=16)

#### License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)


Originally by Jakub Senko. Updated for phpBB 3.3 by Andy Vandenberghe (Sajaki).
