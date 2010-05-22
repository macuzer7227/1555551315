<?php

/*
 +-----------------------------------------------------------------------+
 | Configuration file for database access                                |
 |                                                                       |
 | This file is part of the Crystal Webmail client                       |
 | Copyright (C) 2005-2010, Crystal Dev Team - United States             |
 | Licensed under the GNU GPL                                            |
 |                                                                       |
 +-----------------------------------------------------------------------+

*/

$cmail_config = array();

// PEAR database DSN for read/write operations
// format is db_provider://user:password@host/database 
// For examples see http://pear.php.net/manual/en/package.database.mdb2.intro-dsn.php
// currently supported db_providers: mysql, mysqli, pgsql, sqlite, mssql

$cmail_config['db_dsnw'] = 'mysql://user:mail@localhost/crystal';
// postgres example: 'pgsql://Crystal:pass@localhost/Crystalmail';
// Warning: for SQLite use absolute path in DSN:
// sqlite example: 'sqlite:////full/path/to/sqlite.db?mode=0646';

// PEAR database DSN for read only operations (if empty write database will be used)
// useful for database replication
$cmail_config['db_dsnr'] = '';

// maximum length of a query in bytes
$cmail_config['db_max_length'] = 512000;  // 500K

// use persistent db-connections
// beware this will not "always" work as expected
// see: http://www.php.net/manual/en/features.persistent-connections.php
$cmail_config['db_persistent'] = FALSE;


// you can define specific table names used to store webmail data
$cmail_config['db_table_users'] = 'users';

$cmail_config['db_table_identities'] = 'identities';

$cmail_config['db_table_contacts'] = 'contacts';

$cmail_config['db_table_session'] = 'session';

$cmail_config['db_table_cache'] = 'cache';

$cmail_config['db_table_messages'] = 'messages';


// you can define specific sequence names used in PostgreSQL
$cmail_config['db_sequence_users'] = 'user_ids';

$cmail_config['db_sequence_identities'] = 'identity_ids';

$cmail_config['db_sequence_contacts'] = 'contact_ids';

$cmail_config['db_sequence_cache'] = 'cache_ids';

$cmail_config['db_sequence_messages'] = 'message_ids';


// end db config file
?>
