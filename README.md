# Search Engine

![search](https://github.com/KeithEvansK/Search-Engine/assets/99915276/2a387378-3459-4f29-be11-627afc4e2f5d)

This is a project I did just to learn more about the technology and how search engines work because I was curious. 

I've been wanting to learn more about the backend development and this was a simple way to see how that could be achieved. 

## How It Works

To use the program all you have to do is type into the search bar what you want to find and the html page will direct you to a PHP page with the results. 

The code for this project can be easily modified to fit any business or personal needs to search a database. 

## About

I developed this project using PHP, HTML, and CSS. As well as a MySQL database. 

The use case for a search engine like this or at least as bare bones as this project is would be more similar to an inventory search system versus a large scale Google-like search engine. 

This engine is mostly demonstration of my use of an unfamiliar language (PHP) and how I adapted to learn the basics of it. Then using it to do the hard work of running quieries. 

This is a good representation for developing a front end for a business use so that non-technical individuals could use a database. 

Although if this code is referenced for yourself to develop a project like this you should absolutely take measures to protect your data against attacks such as SQL injection as I do not attempt to handle any of that in this project. 

## Development 

This project consists of:
 - HTML file
 - CSS file
 - PHP file
 - MySQL Database

And I will be going over my development process for each one. 

### HTML & Design
The HTML of this project is minimal and I only really give the most necessary components. 

I have a search bar at the top. With a search button next to it. And a title. 
Very minimal. 

I then recreate it within the PHP file to get the same effect but I move it to the side. 

This is to recreate the experience on Google.com. 

I could have spent a lot more time making this project look nice and exact. I'm not a fan of how I left the found data displayed and kind of just line by line display it but this project is more to show a search engine and not what it can look like. 

### CSS

![image](https://github.com/KeithEvansK/Search-Engine/assets/99915276/a64af62a-7a51-4c6e-9c98-315855e307e1)


The CSS of this project is fairly simple and straight forward so I won't go into it too much in detail. 

I just applied some dark and gray attributes to the file with white text and borders. 

The design is minimal but this project should just be used as a template if creating a search in the future whether that is for my own reference or someone elses. So the CSS of this file doesn't matter much as it will change for each project. 

### PHP

This is the backbone of the project and performs all of the funcitons we need to bring our search engine to life. 

This file contains the basic HTML required to get the page up and running along with the search inputs that have been moved to the side for the Google experience. 

The idea of a search engine may seem like its doing a lot of work while it is actually just being used as a fancy tool to connect to the database and perform specific queries and allowing for input. 

You can also set up exact queries that don't require input and that would be more along the lines of a filter. 

So really the database is still doing the heavy lifting in this case. We are only constructing the query for it by using our PHP file. 

#### Constructing the Query

So the first thing I do in the file is define what we want our query to be. 

I start by pulling all of the input text and separating any words and looping them. 

I define our queries from that list of words and use a LIKE keyword to find words that match it but are also similar so that the word doesn't have to be exact. 

![image](https://github.com/KeithEvansK/Search-Engine/assets/99915276/60ba0afd-f8b1-4aa1-9cb2-b05ddae13b1f)

In the code I actually decided to keep this nice little bit under the search bar so that you can visually see exactly the constructed query. 

You can see if we add more words, our query changes and adds them in. 

![image](https://github.com/KeithEvansK/Search-Engine/assets/99915276/0e1e36ee-5f93-45f5-a009-b401c7d3097a)

#### Connecting the Database

The next thing I do is connect our database to the PHP file. 

The connection is fairly simple and straight forward. You'll need your login credentials for the database and the table you want to use. 

I suggest using an exact example you find for this part as there is little room for error as it can cause the whole thing not to work. 

[!WARNING]
You may think that adding these credentials are unsafe but because we are using a PHP script to do this. PHP is server side and won't be directly displayed to the user. 

#### Checking Results

Once we have the query and are connected to the database all we have to do is send off that query and get our results back. 

Run a check to see if anything is returned then a loop to run through all the returned values. 

I also set each found result to a varable here so I can use them within the display portion. 

![image](https://github.com/KeithEvansK/Search-Engine/assets/99915276/c577f376-1ae0-4f87-8607-8949fb579657)

#### Display the Data

Displaying the data is probably the most fun you can have on this project. 

Because of all of the variables I set from the database in the previous section now I can create one more called $html. 

You will then set the variable equal to a string of text and use that text to construct your output in any way fit for your project. 

Perform an echo of that variable such as:

echo $html

And that will be displayed such as that of an HTML file directly within the HTML of the page we're currently working on our PHP within. 

I also do some fancy things like pull the favicon from the website with this line of code:

![image](https://github.com/KeithEvansK/Search-Engine/assets/99915276/9ea8afce-d9dd-4158-9064-11526d58fd8d)

And create a pretty basic bare bones output like this:

![image](https://github.com/KeithEvansK/Search-Engine/assets/99915276/b53a9607-f2a1-4c18-a2f9-42ae1e515543)

Which results in this:

![image](https://github.com/KeithEvansK/Search-Engine/assets/99915276/2720ee6f-77f0-429c-aba7-2b3beebad26b)


### MySQL Database 

For this project I used a MySQL Database to store my data. The structure of the database is fairly simple as well. 

I have the results_db database which contains the results table. And several fields. 

results_db
 - results
     - id (auto increment identification int number)
     - title (the name seen in example as 'Netflix')
     - pageurl (the direct page url we want to direct to)
     - pagecontents (unused in the example. This could be a description of data.)
     - keywords (added comma separated keywords we search to find results with)

![image](https://github.com/KeithEvansK/Search-Engine/assets/99915276/ce914f36-83a7-4811-8a15-f3a6361a79de)

You will also note that there is a little image for the results. For this I don't actually store the file but rather pull the favicon of the website using the provided url within the PHP file. 

In this project I don't do much actual work with the database as this is more of a method of accessing the database. But you could set it up to store just about any kind of data you need. 





## Final Thoughts

Overall this was a fun little project to get an idea about backend development and how a search engine operates. 

If I was to design this for another use case I would spend more time on the overall look of it and have to add several security features to it as well but it is functional and is here if I or someone else wants to reference it they are more than welcome to. 

