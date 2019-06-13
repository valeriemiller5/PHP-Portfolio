$(document).ready(function() {
    $("div.app").each(function() {
        let $this = $(this);
        $this.append("<a href=https://click-game-01.herokuapp.com/ target='_blank'><p><h6>Memory Game:</h6>Click an image once until all images are clicked. Clicking the same image twice will be Game Over.</p></a>");
    });

    $("div.app2").each(function() {
        let $this = $(this);
        $this.append("<a href=https://github.com/valeriemiller5/liri-node-app target='_blank'><p><h6>LIRI Node App:</h6>This is a back-end server app using APIs to retrieve music, movie, and concert information.</p></a>");
    });

    $("div.app3").each(function() {
        let $this = $(this);
        $this.append("<a href=https://bookfinder-01.herokuapp.com/ target='_blank'><p><h6>Book Finder:</h6>This app allows users to find book information from Google Books API and save their favorite results.</p></a>");
    });

    $("div.app4").each(function() {
        let $this = $(this);
        $this.append("<a href=https://valeriemiller5.github.io/HYelp/ target='_blank'><p><h6>HYelp:</h6>Looking for a place to eat? Look no further!</p></a>");
    });

    $("div.app5").each(function() {
        let $this = $(this);
        $this.append("<a href=https://friend-finder-02.herokuapp.com/ target='_blank'><p><h6>Friend Finder:</h6>Fill out the form and see if you match with Blossom, Bubbles, or Buttercup.</p></a>");
    });

    $("div.app6").each(function() {
        let $this = $(this);
        $this.append("<a href=https://stouijaboard.herokuapp.com/ target='_blank'><p><h6>Stouijaboard:</h6>With this social app, you can start a silly story with a random promp while other users contribute to your story.</p></a>");
    });

    $("div.app7").each(function() {
        let $this = $(this);
        $this.append("<a href=https://thenewsroom.herokuapp.com/ target='_blank'><p><h6>The Newsroom:</h6>Scrapes current news stories from patch.com. Users are allowed to save and comment on stories.</p></a>");
    });

    $("div.app8").each(function() {
        let $this = $(this);
        $this.append("<a href=https://github.com/valeriemiller5/Bamazon target='_blank'><p><h6>Bamazon:</h6>Back-end server app that allows users to create, update, and manage inventories.</p></a>");
    });

    $("div.app9").each(function() {
        let $this = $(this);
        $this.append("<a href=https://valeriemiller5.github.io/TriviaGame/ target='_blank'><p><h6>Middle-Earth Trivia:</h6>This is a simple timed trivial game for all Middle-Earth fans.</p></a>");
    });

    $("div.app10").each(function() {
        let $this = $(this);
        $this.append("<a href=https://valeriemiller5.github.io/TrainSchedule/ target='_blank'><p><h6>Train Schedule:</h6>Sample record-keeping app that saves user information to a Firebase database.</p></a>");
    });

    $("div.app11").each(function() {
        let $this = $(this);
        $this.append("<a href=https://valeriemiller5.github.io/GifTastic/ target='_blank'><p><h6>GifTastic:</h6>What's your mood? There's a GIF for that!</p></a>");
    });

    $("div.app12").each(function() {
        let $this = $(this);
        $this.append("<a href=https://valeriemiller5.github.io/Unit-4-Game/ target='_blank'><p><h6>Crystal Collector:</h6>Click the crystals to match the total score, but don't go over!</p></a>");
    });
});
