### Changelog

- 2.1.0 (22/05/2026)
  - [CHG] Updated composer requirements to phpBB 3.3.0+ and PHP 7.1.3+
  - [CHG] Replaced FontAwesome 4 icon class `fa-sticky-note-o` with FA5 `far fa-sticky-note` in the quick links template
  - [CHG] Quoted service references (`@template`, `@dbal.conn`, ...) in `config/services.yml` for compatibility with the phpBB 3.3 Symfony YAML parser
  - [DEL] Removed obsolete `S_IS_31` template branch and the phpBB-3.1 quick-link fallback markup
  - [DEL] Removed unused `\phpbb\config\config` injection from the event listener
  - [NEW] added Dutch translation   

- 2.0.0 (30/08/2016)
  - Original release by Jakub Senko ([Senky](https://github.com/Senky)) for phpBB 3.1 / 3.2

Originally by Jakub Senko. Updated for phpBB 3.3 by Andy Vandenberghe (Sajaki).
