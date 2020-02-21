# Location_stealer
> Great thanks to Sergey (https://github.com/sergnik1995) that made a PHP file for this project

## What is it?

The project will help you to get information about user's location.
If person enables geolocation services while visiting the page, the whole block inside class .main-block would load, but if person refuses, there will be error. 
After the page is loaded and geo services are enabled, the server would send information directly to your mail (change it inside mail.php);

You can check this out by opening GitHub Pages with this repo by clicking the link below.
<https://bramov.github.io/Location_stealer/>

Don't worry, all your location data will be safe - GitHub Pages doesn't allow PHP and e-mail in mail.php is fake.

## How could I use it?

1. Fork/download the repo and open it.
2. Change the e-mail in mail.php file.
3. Add some html and css at your own will.
4. Make sure your server allows PHP and the mail settings are fine with PHP.
(Optional)
5. Add/remove options by editing 'newObj' Object in index.js and '$msg' String in mail.php.



File            | Contents
----------------|----------------------
index.html      | put all your necessary info inside .main-block
style.css       | styles for body and .main-block
index.js        | you can change the error's text and add/remove some options that will be in POST
mail.php        | change the mail and add/remove options that will be sent to your e-mail
