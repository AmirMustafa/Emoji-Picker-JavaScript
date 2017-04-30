# Emoji Picker  :heart_eyes: :heart_eyes:

This is a project which helps to select Emojis for the input box. For better convinience I have written 3 seperate folder codes:

1. HTML 5 and JavaScript: Here just emoction can be inserted in input box and textareas

2. PHP: A Form is present, whatever one is writing in input box along with emoji is sent to the backend code page as well as Database(MySQL). Value is fetched from the database as well.

3. PHP and AJAX: A Form is present, which inserts emojis and text in the database and retrieves from it without refreshing the page.


## Installation

1. Clone or Download the repository and keep it in server or local server(like XAMPP).

2. For this we are using MySQLi, sql file is present in the root directory

3. Create a Database and import the emoji_db.sql table present in the repository.

4. You need to configure your connection on all the codes i.e. HTML, PHP, AJAX

```
$conn = mysqli_connect("server_details", "username", "password", "database_name");  //connection with database

Eg. 

$conn = mysqli_connect("localhost", "root", "123456", "emoji_db");  //connection with database

```

You need to make changes on the following codes:demo2.php of PHP, index.php and welcome.php of AJAX 

6. Execute index.php of all the three codes seperately as named in the folder.

7. Common codes are placed in the root directory

  
## Preview


![Screenshot of Emoji Picker ](https://cloud.githubusercontent.com/assets/15896579/25564686/88ad06b8-2dd6-11e7-891f-c53ac8cf53f5.png?raw=true "Screenshot of Emoji Picker")
<br/><br/><br/>

![Screenshot of Emoji Picker ](https://cloud.githubusercontent.com/assets/15896579/25564688/8b962f9e-2dd6-11e7-9b85-d701a5dae7fd.png?raw=true "Screenshot of Emoji Picker")
<br/><br/><br/>

![Screenshot of Emoji Picker ](https://cloud.githubusercontent.com/assets/15896579/25564689/8da3d48a-2dd6-11e7-8470-8416cf08e5aa.png?raw=true "Screenshot of Emoji Picker")
<br/><br/><br/>

![Screenshot of Emoji Picker ](https://cloud.githubusercontent.com/assets/15896579/25564692/8f73e4e4-2dd6-11e7-9552-73555e419795.png?raw=true "Screenshot of Emoji Picker")
<br/><br/><br/>

![Screenshot of Emoji Picker ](https://cloud.githubusercontent.com/assets/15896579/25564697/920182e8-2dd6-11e7-81b1-acdc253fa52b.png?raw=true "Screenshot of Emoji Picker")
<br/><br/><br/>

![Screenshot of Emoji Picker ](https://cloud.githubusercontent.com/assets/15896579/25564698/953dc052-2dd6-11e7-89f2-5741bac72e97.png?raw=true "Screenshot of Emoji Picker")
<br/><br/><br/>

![Screenshot of Emoji Picker ](https://cloud.githubusercontent.com/assets/15896579/25564700/9825acda-2dd6-11e7-9108-a99c570166d1.png?raw=true "Screenshot of Emoji Picker")
<br/><br/><br/>

![Screenshot of Emoji Picker ](https://cloud.githubusercontent.com/assets/15896579/25564701/9b22a8b6-2dd6-11e7-956d-31502e028ad0.png?raw=true "Screenshot of Emoji Picker")
<br/><br/><br/>

![Screenshot of Emoji Picker ](https://cloud.githubusercontent.com/assets/15896579/25564704/9f0315d8-2dd6-11e7-83f9-cc14303efc72.png?raw=true "Screenshot of Emoji Picker")
<br/><br/><br/>

<br/><br/><br/>




## License

(The MIT License)

Copyright (c) 2016 Amir Mustafa

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

