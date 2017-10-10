# zebra-session-loader
Automatically start Zebra sessions (database powered sessions)

# Installation

Just run `composer require rapidwebltd/zebra-session-loader` .

## Usage

Add the following to your `.env` file:

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