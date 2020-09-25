# Ping Pong Challenge

## The Brief

The core of the challenge is to create a tool which randomly creates pairings for a table tennis tournament bracket from a list of names collected from the user.

It's up to you how you implement this, with JavaScript, React, or PHP, as a web page, or as an app.

Some optional advanced features might include:
ability to record scores for each player, or mark which player won from each pairing, to create the next round of the tournament playoffs
continued rounds created until the final (last 2 players who have won all matches to date play each other, one marked as the winner)

## Plan 

My MVP should:
1. be able to take input for names of the players;
2. be able to randomly pick pairs out;
3. be able to send that information back to user;
4. Have CSS styling that makes the website accessible and easy to use;

I have decided to implement PHP and Laravel framework for the project, because I felt I had best understanding of the system. Also PHP is compatible with the CSS, which I considered invaluable asset. 

## Idea

I decided to stylize the ping pong for an old fashion arcade game Pong. Yet instead of going to a black and white theme, I decided to go with a black, white and green. The website will still be readable, but looking more modern, and more engaging for the eye of the user. 

After some consideration I decided to add some more or the background, box shadow effects and transform effects, making the site more readable and accessible. I also tried to make the background look like an old fashion monitor background would look like.

I decided to design the mobile version first to make it load faster on smaller devices. Then I designed the desktop one, using media queries.
 

## Style

All the components and it's features are in alphabetical order in the style.blade.php. 

## Routing

As each field is mandatory, I decided it is for the best to make user choose how many players do they want to include. It currently gives them option of 4, 6, and 8. 

When user is clicking on the number, it is taking them to the screen where they could fill in the names. If they change their mind, they might simply click 'Try again?!' button. 

## Original Wireframing

I am attaching an original wireframing in the resources/wireframing folder. 
Some minor stylistic choices had been caused either by taking into an account an overall accessibility of the page, or nature of used programming language.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
