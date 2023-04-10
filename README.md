# Registration-and-Login-system-

Made Registration and Login System Website connected with the Database to maintain record. 

Functionalities-user can register ,see the details and also user can view all the records, update and delete the details.

Tech Stack-Backend-PHP,Database-MySql,Other-HTML,CSS,Bootstrap.

There are five steps to create the registration and login system 

1. Create a Database and Database Table

2. Connect to the Database

3. Session Create for Logged in User

4. Create a Registration and Login Form

5. Create CSS file 

1.Create a Database and Database Table

To create a login system,you need to store user data such as usernames and passwords in a database.First we have to create a database which is a collection of data that is organized in a specific way.First, you have to log in to PHPMyAdmin. Next, click on the Database tab to create a new database. Enter your database name and click on create database button. As soon as PHPMyAdmin will create a new database.

Once you create a database, the second step to creating a user table. The user’s table will have the following fields.

1. id – int(11)
2. firstname  – varchar(100)
3. Lastname -varchar(100)
4. Email  – varchar(100)
5. Phone number -varchar(100)
6. Password  – varchar(50)

![image](https://user-images.githubusercontent.com/103095458/230972738-1b113030-7c3f-48ca-bb14-74374b68c6c4.png)

2. Connect to the Database

After you create the database and table, you need to establish a connection between your web application and the database. This is typically done using a database driver, which is a software component that allows your application to communicate with the database.After creating the table, we have to create a PHP MySQL connector script to connect to the MySQL database server. 

![image](https://user-images.githubusercontent.com/103095458/230973169-892de863-f6f7-4632-a535-fd7097b1d270.png)

3. Session Create for Logged in User

When a user logs in, you need to create a session for that user, which is a way to maintain state between the web application and the user's browser. Sessions can store data about the user, such as their user ID or username, and can be used to authenticate the user on subsequent requests.


4. Create a Registration and Login Form

To allow users to register and log in, you need to create a user interface that includes a registration form and a login form. The registration form typically collects user data, such as firstname,lastname,phone number, email, and password, while the login form collects the user's login credentials, such as their username and password.

Creating the form using HTML.

![image](https://user-images.githubusercontent.com/103095458/230973418-a77bac75-efe3-4b09-8c85-be6de77bed6a.png)

The login page looks like in the below figure

![image](https://user-images.githubusercontent.com/103095458/230973634-a8a3fd89-2df6-4102-b587-6ecda1787c55.png)

5. CSS File Create: Finally, you should apply CSS (Cascading Style Sheets) to the HTML markup of your web pages to make them visually appealing and user-friendly. CSS allows you to style elements such as text, images, and buttons, and can be used to create a consistent look and feel across your entire site.


The users data such as first name,lastname,email,phone number  is again displayed in the website.From here the user can update and delete the data from the website.








































