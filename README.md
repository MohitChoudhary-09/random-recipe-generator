# Random Recipe Generator

A web application that generates a random recipe based on user preferences for cuisine, course, and dietary preference.

## Table of Contents
- [Description](#description)
- [Technologies](#technologies)
- [Setup](#setup)
- [Usage](#usage)
- [License](#license)

## Description

The Random Recipe Generator is a web application that allows users to get a random recipe from a database based on their selected preferences for cuisine, course, and dietary preference. It provides a simple interface to input preferences and displays the randomly generated recipe.

## Technologies

- HTML
- CSS
- PHP
- MySQL (or any other database management system)

## Setup

1. Install [XAMPP](https://www.apachefriends.org/download.html) on your machine to run the Apache server and MySQL database locally.

2. Clone this repository to your local machine using:

   ```bash
   git clone https://github.com/your-username/random-recipe-generator.git

3. Place the files in the htdocs folder of your XAMPP installation.

4. Import the provided SQL dump (recipes.sql) into your MySQL database to set up the required table and data.

## Usage
Start XAMPP and ensure Apache and MySQL services are running.

1. Open your web browser and navigate to http://localhost/random-recipe-generator/index.html to access the Random Recipe Generator.

2. Fill in the form with your preferred cuisine, course, and dietary preference.

3. Click the "Get Random Recipe" button to fetch a random recipe based on your selections.

4. The result will be displayed below the form, showing the name, cuisine, course, dietary preference, and instructions for the random recipe.

## License
This project is licensed under the MIT License.
