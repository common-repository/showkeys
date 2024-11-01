<?php

// Abort by direct access
if (!defined('ABSPATH'))
    die;

// Options
define('SKEY__OPTIONS', [
    'version'           => SKEY__VERSION,
    'key_layout'        => 0,
    'key_separator'     => '+',
    'style'             => 'light'
]);

// Settings
define('SKEY__SETTINGS_KEY_LAYOUT', [
    esc_html__('Short DE', 'skey'),
    esc_html__('Short EN', 'skey'),
    esc_html__('Long DE', 'skey'),
    esc_html__('Long EN', 'skey')
]);
define('SKEY__SETTINGS_KEY_LAYOUT_VAL', [
    0,
    1,
    2,
    3
]);
define('SKEY__SETTINGS_STYLE', [
    esc_html__('Light', 'skey'),
    esc_html__('Dark', 'skey')
]);
define('SKEY__SETTINGS_STYLE_VAL', [
    'light',
    'dark'
]);

// Apple
define('SKEY__KEYS_APPLE_INPUT', [
    'cmd',
    'command',
    'befehl',
    'apple',
    'apfel',
    'wahl',
    'opt',
    'option',
    'fn',
    'entf',
    'entfernen',
    'delete'
]);
define('SKEY__KEYS_APPLE_OUTPUT', array(
    array(
        '⌘ cmd',
        '⌘ cmd',
        '⌘ cmd',
        '⌘ cmd',
        '⌘ cmd',
        '⌥ alt',
        '⌥ alt',
        '⌥ alt',
        'fn',
        '⌫ delete',
        '⌫ delete',
        '⌫ delete'
    ),
    array(
        '⌘ cmd',
        '⌘ cmd',
        '⌘ cmd',
        '⌘ cmd',
        '⌘ cmd',
        '⌥ alt',
        '⌥ alt',
        '⌥ alt',
        'fn',
        '⌫ delete',
        '⌫ delete',
        '⌫ delete'
    ),
    array(
        '⌘ Befehl',
        '⌘ Befehl',
        '⌘ Befehl',
        '⌘ Befehl',
        '⌘ Befehl',
        '⌥ Wahl',
        '⌥ Wahl',
        '⌥ Wahl',
        'fn',
        '⌫ entfernen',
        '⌫ entfernen',
        '⌫ entfernen'
    ),
    array(
        '⌘ command',
        '⌘ command',
        '⌘ command',
        '⌘ command',
        '⌘ command',
        '⌥ option',
        '⌥ option',
        '⌥ option',
        'fn',
        '⌫ delete',
        '⌫ delete',
        '⌫ delete'
    )
));

// Windows
define('SKEY__KEYS_WINDOWS_INPUT', [
    'win',
    'windows'
]);
define('SKEY__KEYS_WINDOWS_OUTPUT', array(
    array(
        '⊞ Win',
        '⊞ Win'
    ),
    array(
        '⊞ Win',
        '⊞ Win'
    ),
    array(
        '⊞ Windows',
        '⊞ Windows'
    ),
    array(
        '⊞ Windows',
        '⊞ Windows'
    )
));

// Standardwerte
define('SKEY__KEYS_STANDARD_INPUT', [
    'ctrl',
    'control',
    'strg',
    'steuerung',
    'enter',
    'eingabe',
    'eingabetaste',
    'return',
    'shift',
    'umschalt',
    'tab',
    'tabulator',
    'menü',
    'menue',
    'menu',
    'fn',
    'funktion',
    'function',
    'alt',
    'alt gr',
    'space',
    'leer',
    'leertaste',
    'leerzeichen',
    'esc',
    'escape',
    'Druck',
    'Drucken',
    'Print-Screen',
    'Print Screen',
    'Prt Sc',
    'Prt',
    'Print',
    'Systemabfrage',
    'S-Abf',
    'SysRq',
    'System Request',
    'Rollen',
    'Scroll-Lock',
    'Scroll Lock',
    'Pause',
    'Break',
    'Untbr',
    'Einfügen',
    'Einfg',
    'Einf',
    'insert',
    'ins',
    'Entfernen',
    'Entf',
    'Löschen',
    'delete',
    'del',
    'Num',
    'Num-Lock',
    'Num Lock',
    'Pos1',
    'Home',
    'Ende',
    'End'
]);
define('SKEY__KEYS_STANDARD_OUTPUT', array(
    array(
        'strg',
        'strg',
        'strg',
        'strg',
        'eingabe',
        'eingabe',
        'eingabe',
        'eingabe',
        'umschalt ⇧',
        'umschalt ⇧',
        'tab ↹',
        'tab ↹',
        'menu',
        'menu',
        'menu',
        'fn',
        'fn',
        'fn',
        'alt',
        'alt gr',
        'space',
        'leerzeichen',
        'leerzeichen',
        'leerzeichen',
        'esc',
        'esc',
        'Drucken',
        'Drucken',
        'Drucken',
        'Drucken',
        'Drucken',
        'Drucken',
        'Drucken',
        'S-Abf',
        'S-Abf',
        'S-Abf',
        'S-Abf',
        'Rollen',
        'Rollen',
        'Rollen',
        'Pause',
        'Pause',
        'Untbr',
        'Einfg',
        'Einfg',
        'Einfg',
        'Einfg',
        'Einfg',
        'Entf',
        'Entf',
        'Entf',
        'Entf',
        'Entf',
        'Num',
        'Num',
        'Num',
        'Pos1',
        'Pos1',
        'Ende',
        'Ende'
    ),
    array(
        'Ctrl',
        'Ctrl',
        'Ctrl',
        'Ctrl',
        'Enter',
        'Enter',
        'Enter',
        'Enter',
        'Shift ⇧',
        'Shift ⇧',
        'Tab ↹',
        'Tab ↹',
        'menu',
        'menu',
        'menu',
        'fn',
        'fn',
        'fn',
        'Alt',
        'Alt Gr',
        'space',
        'space',
        'space',
        'space',
        'Esc',
        'Esc',
        'Print',
        'Print',
        'Print',
        'Print',
        'Print',
        'Print',
        'Print',
        'SysRq',
        'SysRq',
        'SysRq',
        'SysRq',
        'Scroll-Lock',
        'Scroll-Lock',
        'Scroll-Lock',
        'Break',
        'Break',
        'Break',
        'insert',
        'insert',
        'insert',
        'insert',
        'insert',
        'del',
        'del',
        'del',
        'del',
        'del',
        'Num',
        'Num',
        'Num',
        'Home',
        'Home',
        'End',
        'End'
    ),
    array(
        'Steuerung',
        'Steuerung',
        'Steuerung',
        'Steuerung',
        'Enter',
        'Eingabe',
        'Eingabe',
        'Eingabe',
        'Umschalt ⇧',
        'Umschalt ⇧',
        'Tabulator ↹',
        'Tabulator ↹',
        'Menü',
        'Menü',
        'Menü',
        'Funktion',
        'Funktion',
        'Funktion',
        'Alt',
        'Alt Gr',
        'Leerzeichen',
        'Leerzeichen',
        'Leerzeichen',
        'Leerzeichen',
        'Esc',
        'Escape',
        'Drucken',
        'Drucken',
        'Drucken',
        'Drucken',
        'Drucken',
        'Drucken',
        'Drucken',
        'Systemabfrage',
        'Systemabfrage',
        'Systemabfrage',
        'Systemabfrage',
        'Rollen',
        'Rollen',
        'Rollen',
        'Pause',
        'Pause',
        'Untbr',
        'Einfügen',
        'Einfügen',
        'Einfügen',
        'Einfügen',
        'Einfügen',
        'Entfernen',
        'Entfernen',
        'Entfernen',
        'Entfernen',
        'Entfernen',
        'Num',
        'Num',
        'Num',
        'Pos1',
        'Pos1',
        'Ende',
        'Ende'
    ),
    array(
        'Control',
        'Control',
        'Control',
        'Control',
        'Return',
        'Return',
        'Return',
        'Return',
        'Shift ⇧',
        'Shift ⇧',
        'Tab ↹',
        'Tab ↹',
        'Menu',
        'Menu',
        'Menu',
        'Function',
        'Function',
        'Function',
        'Alt',
        'Alt Gr',
        'space',
        'space',
        'space',
        'space',
        'Esc',
        'Escape',
        'Print',
        'Print',
        'Print',
        'Print',
        'Print',
        'Print',
        'Print',
        'System Request',
        'System Request',
        'System Request',
        'System Request',
        'Scroll-Lock',
        'Scroll-Lock',
        'Scroll-Lock',
        'Break',
        'Break',
        'Break',
        'insert',
        'insert',
        'insert',
        'insert',
        'insert',
        'delete',
        'delete',
        'delete',
        'delete',
        'delete',
        'Num Lock',
        'Num Lock',
        'Num Lock',
        'Home',
        'Home',
        'End',
        'End'
    )
));
define('SKEY__KEYS_UPPERCASE_INPUT', [
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
    'g',
    'h',
    'i',
    'j',
    'k',
    'l',
    'm',
    'n',
    'o',
    'p',
    'q',
    'r',
    's',
    't',
    'u',
    'v',
    'w',
    'x',
    'y',
    'z',
    'ä',
    'ö',
    'ü',
    'f1',
    'f2',
    'f3',
    'f4',
    'f5',
    'f6',
    'f7',
    'f8',
    'f9',
    'f10',
    'f11',
    'f12'
]);
