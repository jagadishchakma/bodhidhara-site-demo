/*
*
*	CSS / jQuery animated Ticker
*
*	author	Dinko Skopljak
*	web	https://futura-web.de
*	email	ds@futura-web.de
*
*	jQuery functions()
*
*   Use https://skalman.github.io/UglifyJS-online/ to minify this code
*
*/

jQuery(function($){

    var tickerView = $(".ticker");

    function ticker(){

        tickerView.each(function(){

            var tickerIndex = $(this).index()+1,
                tickerList = $(this).find("ul"),
                tickerWidth = $(this).outerWidth(),
                tickerListWidth = tickerList.outerWidth(),
                tickerCompleteWidth = tickerWidth + tickerListWidth,
                transitionRound = tickerCompleteWidth * 20,
                tickerRoundFixed = transitionRound.toFixed(),
                keyFrames = "@keyframes ticker" + tickerIndex + "{0%{transform:translate3d(0,0,0)}100%{transform:translate3d(-" + tickerCompleteWidth + "px,0,0)}}";

            $("<style type='text/css'>" + keyFrames + "</style>").appendTo($("head"));

            tickerList.css({"animation":"ticker" + tickerIndex + " " + tickerRoundFixed + "ms infinite linear"});
        });
    }

    $(document).ready(function(){
        ticker();
    });
});
