# RockPaperScissorsPHP

#### Web app for playing the classic game, "Rock Paper Scissors". It will use php, silex, twig, and tests (phpunit). 09.14.16

#### By _**Alexandre Leibler, Nicolas Hurtado, Lisa MacCarrigan**_


## Description

Player One and Player Two will make one move each (i.e. Rock, Paper, or Scissors). Based on their moves, RockPaperScissorsPHP will determine whether there is a winner or a draw. Additionally, it will be responsible for displaying the game result to the web page.


## Setup/Installation Requirements

* If you wish to view the source code locally on your machine please follow the following steps:

  +  1). Navigate to the directory in which you want the palindromePHP project to reside.

  +  2). Enter the following command into your terminal:
        git clone https://github.com/KomodoTech/RockPaperScissorsPHP.git

  +  3). Navigate to the palindromePHP directory, and execute the following command in the terminal:
          composer install

  +  4). Navigate to the web directory and start your local host by executing the following command in your terminal:
          php -S localhost:8000

  +  5). Open up the browser of your choice and go to the following url:
          http://localhost:8000/

  +  6). If you wish to look at the source code, feel free to browse through the files in the palindromePHP directory


## Specs
* _Note: A players "Move" can be Rock, Paper, or Scissors._

* 1). When both players make the same move, there is a DRAW.
  + IN: Rock vs. Rock
  + OUT: Draw

* 2). Scissors beats paper.
  + IN: Scissors vs. Paper
  + OUT: Scissors wins!

* 3). Paper beats rock
  + IN: Paper vs. Rock
  + OUT: Paper wins!

* 4). Rock beats scissors
  + IN: Rock vs. Scissors
  + OUT: Rock wins!


## Known Bugs

None yet


## Support and Contact Details

Please feel free to contact us through the github account KomodoTech or at the following emails:
    alexandre.leibler@gmail.com
    nickh93@outlook.com
    lisa.maccarrigan@gmail.com

## Technologies Used

* silex v~2.0
* twig v~1.0
* phpunit v5.5.*
* bootstrap v3.3.7



### License

* GPLV3

palindromePHP Copyright (c) 2016 **Alexandre Leibler, Nicolas Hurtado, Lisa MacCarrigan**
