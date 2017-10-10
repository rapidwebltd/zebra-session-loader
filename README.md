# Zebra Session Loader

This library automatically starts Zebra sessions (database powered sessions) wherever `vendor/autoload.php` is included. It can be useful if you need to add database powered sessions to a bespoke PHP application that lacks an existing framework.

## Installation

1. Run `composer require rapidwebltd/zebra-session-loader`.

2. Create a `session_data` table in your MySQL database to hold session data. You can use the SQL below to do this.

```sql
CREATE TABLE `session_data` (
  `session_id` varchar(32) NOT NULL default '',
  `hash` varchar(32) NOT NULL default '',
  `session_data` blob NOT NULL,
  `session_expire` int(11) NOT NULL default '0',
  PRIMARY KEY  (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

## Configuration

Add the following to your `.env` file, changing the database connection details to point at the database containing your `session_data` table.

You should also ensure the security code is changed to a random string.

```
ZEBRA_SESSION_SECURITY_CODE=random_string_of_chars_og4bf42kh07odgh20gjwe
ZEBRA_SESSION_DATABASE_CONNECTION_NAME=main

DCOM_MAIN_OBJECT_TYPE=mysqli    # Must be a mysqli object
DCOM_MAIN_DATABASE_TYPE=mysql

DCOM_MAIN_DATABASE_HOST=localhost
DCOM_MAIN_DATABASE_USERNAME=root
DCOM_MAIN_DATABASE_PASSWORD=password
DCOM_MAIN_DATABASE_NAME=dbname
```

Now any page that includes `vendor/autoload.php` will automatically use database powered sessions, provided by Zebra sessions.