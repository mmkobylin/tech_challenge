# Ping Pong Challenge

## The Brief

The core of the challenge is to create a tool which randomly creates pairings for a table tennis tournament bracket from a list of names collected from the user.

It's up to you how you implement this, with JavaScript, React, or PHP, as a web page, or as an app.

Some optional advanced features might include:
ability to record scores for each player, or mark which player won from each pairing, to create the next round of the tournament playoffs
continued rounds created until the final (last 2 players who have won all matches to date play each other, one marked as the winner)

## Plan 

My MVP should: 
1. Allow players to enter their names;
2. Be able to randomly form pairs of players;
3. Be able to inform the players who they are paired with;
4. Have CSS styling that helps with website accessibility and general use;

To accomplish these four goals I have decided to implement PHP and Laravel framework for the project. I feel that I have the best understanding of these.  

## Idea

I have decided to stylize ping pong in the fashion of the old arcade game Pong. Instead of going with a black and white theme, I have decided on a black, white and green theme. This will allow a more modern, more engaging and eye-pleasing design without sacrificing legibility for the players. 

After further consideration I decided to add more to the background, in the form of box shadow and transform effects, both of which further improve accessibility. As part of this process I worked to make the background resemble an old fashioned monitor to stir up some additional nostalgia for my players. 

As the mobile market is extremely important I decided to design for this first to ensure that the program will load faster on smaller devices, and then used media queries to design the desktop version. 

## Style

All the components of the game and its features are in alphabetical order in the style.blade.php. 

## Routing

As each field is mandatory, I decided it is for the best to make the player choose how many other players they would like to include. Currently the options are 4, 6, and 8.

When a user clicks on the number of players they want it takes them to the screen where they fill in their names. If they change their mind there is a 'Try Again' button that restarts the selection process.

## Original Wireframing

I am attaching an original wireframing in the resources/wireframing folder. I created them using balamiq.cloud wireframing software.
Some minor stylistic choices have been dictated by my objective for accessibility, or else by the nature of the programming language I have used.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Installation 

Please follow these steps:

1. Clone repo <br />
$ git clone git@github.com:mmkobylin/tech_challenge.git ping-pong

2. Go to the project folder <br />
$ cd ping-pong

3. Install Composer <br />
run: <br />
 $composer install

4. Install npm <br />
$ npm install 

5. Create copy of a .env file <br />
run: <br />
cp .env.example .env

6. Generate an encryption key <br />
run: <br />
php artisan key:generate

7. Create an empty database for the application <br />
(you can do this directly in MYSQL or use database tool like SequelPro) 

8. Connect the database to Laravel <br />

In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. 

9. Migrate the database <br />
run:<br />
php artisan migrate. 

10. Enjoy!

