# DatabaseClass
## Purpose to create a basic database class using PHP OOP and PDO
  * I know, a lot of acronyms.
  * PHP - PHP is a general-purpose scripting language geared towards web development -  recursive acronym PHP: Hypertext Preprocessor
  * OOP - is a programming paradigm based on the concept of objects
  * PDO - PHP Data Objects, a PHP extension that can be used as a database abstraction layer
      While other drivers support maybe one or two database types, PDO covers at least 10, covering the most common

The purpose of the structure of the database.class.php is:

##Explanation:

    Database Class:
        Stores database connection information.
        __construct method sets the credentials.
        connect method establishes a PDO connection.
        query method takes an SQL query and optional parameters.
            Prepares the statement using PDO.
            Binds parameters to prevent SQL injection.
            Executes the statement and returns it or throws an exception on error.

    Database Credentials:
        Replace placeholders with your actual database details.

    Example Query:
        Demonstrates fetching users by name using a LIKE clause.
        Uses a parameter :name for the name search.

   Prepared Statement and Parameters:
        The query method uses PDO::prepare for prepared statements.
        Parameters are bound using $stmt->execute($params).
        This approach prevents SQL injection by separating data from the query.

    Error Handling:
        Both connect and query methods handle potential PDO exceptions.

##Benefits:

    Secure against SQL injection.
    Flexible for different queries with parameters.
    Reusable database connection through the Database class.

##Remember:

    Update the database credentials with your own information.
    This is a basic example. You can extend it to handle different data types and functionalities.
